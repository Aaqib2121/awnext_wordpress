<?php
// Start session at the beginning
function start_session() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'start_session');

// Function to handle form submission
function handle_form_submission() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'custom_form_data';

        // Sanitize and validate form data
        $full_name = sanitize_text_field($_POST['full_name']);
        $email = sanitize_email($_POST['email']);
        $phone_number = sanitize_text_field($_POST['phone_number']);

        // Insert data into the database
        $wpdb->insert(
            $table_name,
            array(
                'full_name' => $full_name,
                'email' => $email,
                'phone_number' => $phone_number,
            )
        );

        // Set session for download
        $_SESSION['download_ready'] = true;

        // Redirect to the same page (important for refresh)
        wp_redirect($_SERVER['REQUEST_URI']);
        exit;
    }
}
add_action('init', 'handle_form_submission');

// Function to handle file download separately
function handle_file_download() {
    if (isset($_SESSION['download_ready']) && $_SESSION['download_ready']) {
        unset($_SESSION['download_ready']); // Remove session flag

        $file_path = get_template_directory() . '/img/My-Brochure.pdf';

        if (file_exists($file_path)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file_path));
            readfile($file_path);
            exit;
        }
    }
}
add_action('template_redirect', 'handle_file_download');
?>
