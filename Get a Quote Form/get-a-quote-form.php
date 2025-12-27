<?php
/**
 * Plugin Name: Get A Quote Form 
 * Description: [custom_quote_forms] use it for Commercial & Residential Quote Forms with AJAX
 * Version: 1.0.0
 * Author: Md Shakibur Rahman
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ===========================
   SHORTCODE
=========================== */
function cqf_render_forms() {
    ob_start();
    ?>

<!-- ========================= -->
<!-- START: CUSTOM QUOTE FORMS -->
<!-- ========================= -->

<?php include plugin_dir_path(__FILE__) . 'form-template.php'; ?>

<!-- ========================= -->
<!-- END: CUSTOM QUOTE FORMS -->
<!-- ========================= -->

<?php
    return ob_get_clean();
}
add_shortcode( 'custom_quote_forms', 'cqf_render_forms' );

/* ===========================
   AJAX HANDLER
=========================== */
function cqf_send_custom_form() {

    $to      = sanitize_email($_POST['email_to']);
    $subject = sanitize_text_field($_POST['subject']);

    $message = "New Quote Request\n\n";

    foreach ($_POST as $key => $value) {
        if ( in_array($key, ['action','email_to','subject']) ) continue;

        if ( is_array($value) ) {
            $value = implode(', ', $value);
        }

        $message .= ucfirst(str_replace('_',' ',$key)) . ": " . sanitize_text_field($value) . "\n";
    }

    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    if ( wp_mail($to, $subject, $message, $headers) ) {
        wp_send_json_success();
    } else {
        wp_send_json_error();
    }
}

add_action( 'wp_ajax_send_custom_form', 'cqf_send_custom_form' );
add_action( 'wp_ajax_nopriv_send_custom_form', 'cqf_send_custom_form' );

/* ===========================
   INLINE FORM TEMPLATE
=========================== */
add_action('init', function(){
    if ( ! file_exists(plugin_dir_path(__FILE__) . 'form-template.php') ) {

        file_put_contents(
            plugin_dir_path(__FILE__) . 'form-template.php',
            <<<HTML
<!-- PASTE YOUR FULL HTML + CSS + JS CODE HERE -->
HTML
        );
    }
});
