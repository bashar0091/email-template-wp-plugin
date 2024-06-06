<?php
/**
 * Plugin Name: Email Template
 * Description: 
 * Version:     1.0.0
 * Author:      Vizifly
 * Author URI:  
 * Text Domain: email_template
 */

// Prevent direct access to the plugin file
defined('ABSPATH') || exit;

/**
 * 
 * enqueue css and js 
 * 
 */

 function etheme_enqueue_scripts() {

	// css file 
    wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'assets/css/custom.css', false, '1.0.0', '');

	// js add 
    wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . 'assets/js/custom.js', array('jquery'), '1.0.0', true);

    // Ajax Request URL
    wp_localize_script('custom-script', 'fanAjax', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
	));
}
add_action('wp_enqueue_scripts', 'etheme_enqueue_scripts');


/**
 * 
 * require file
 * 
 */

 require_once('shortcode/email-template-button-popup.php');



 /**
 * 
 * email template ajax handler
 * 
 */

function email_template_form_handle_callback() {
    if (isset($_POST['form_data'])) {
        parse_str($_POST['form_data'], $formFields);

        $agency_name_input = sanitize_text_field($formFields['agency_name']);
        $full_name = sanitize_text_field($formFields['full_name']);
        $email = sanitize_text_field($formFields['email']);
        $phone_number = sanitize_text_field($formFields['phone_number']);
        $fans_username = sanitize_text_field($formFields['fans_username']);
        $social_media_link = sanitize_text_field($formFields['social_media_link']);
        $content_focus = sanitize_text_field($formFields['content_focus']);
        $content_method = sanitize_text_field($formFields['content_method']);
        $meeting_time = sanitize_text_field($formFields['meeting_time']);
        $hear_about_us = sanitize_text_field($formFields['hear_about_us']);
        $specific_question = sanitize_text_field($formFields['specific_question']);

        $to = 'ashrafularman1997@gmail.com';
        $subject = "I'm Ready to Start Creating with  <u>$agency_name_input</u>!";
        $message = "
        <div>
            <p><b class='cs_flex'>Subject: I'm Ready to Start Creating with  <u>$agency_name_input</u>!</b></p>

            <p>Hi <b><u>$agency_name_input</u></b> Team,</p>

            <p>I'm excited about the opportunity to join <b><u>$agency_name_input</u></b> and start creating amazing content. Here’s a bit more about me:</p>

            <p class='cs_flex'>
                <b>Name:</b> <u>$full_name</u>
            </p>

            <p class='cs_flex'>
                <b>Email:</b> <u>$email</u>
            </p>

            <p class='cs_flex'>
                <b>Phone Number:</b> <u>$phone_number</u>
            </p>

            <p class='cs_flex'>
                <b>OnlyFans Username:</b> <u>$fans_username</u>
            </p>

            <p class='cs_flex'>
                <b>Social Media Links:</b> <u>$social_media_link</u>
            </p>

            <p><b>Tell Us About Yourself:</b></p>
            <ul>
                <li>
                    <p class='cs_flex'>
                        <b>Current Content Focus:</b>
                        <u>$content_focus</u>
                    </p>
                </li>
                <li>
                    <p class='cs_flex'>
                        <b>Preferred Contact Method:</b>
                        <u>$content_method</u>
                    </p>
                </li>
            </ul>

            <p><b>Availability:</b></p>
            <ul>
                <li>
                    <p class='cs_flex'>
                        <b>Best Times for Meetings:</b>
                        <u>$meeting_time</u>
                    </p>
                </li>
            </ul>

            <p><b>Additional Information:</b></p>
            <ul>
                <li>
                    <p class='cs_flex'>
                        <b>How Did You Hear About Us?</b>
                        <u>$hear_about_us</u>
                    </p>
                </li>
                <li>
                    <p class='cs_flex'>
                        <b>Any Specific Questions or Requests?</b>
                        <u>$specific_question</u>
                    </p>
                </li>
            </ul>

            <p>I’m looking forward to working with <b><u>$agency_name_input</u></b> to grow my brand and achieve my goals. Please let me know the next steps.</p>

            <p>Thank you!</p>

            <p>Best regards,</p>

            <p> <b><u>$full_name</u></b> </p>
            <p> <b><u>$fans_username</u></b> </p>
            <p> <b><u>$email</u></b> </p>
            <p> <b><u>$phone_number</u></b> </p>
        </div>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: Morefans <noreply@morefans.com>' . "\r\n";

        mail($to, $subject, $message, $headers);

    }
    wp_die();
}
add_action('wp_ajax_email_template_form_handle', 'email_template_form_handle_callback');
add_action('wp_ajax_nopriv_email_template_form_handle', 'email_template_form_handle_callback');