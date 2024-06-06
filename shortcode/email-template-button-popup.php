<?php
/**
* Shortcode for email template
*/

function email_template() {
    ob_start();
    ?>
    <div>
        <button class="email_popup_btn email_popup_click">Let’s Start Creating!</button>

        <div class="popup_form_wrap">
            <div class="popup_form">

                <a href="#!" class="close_popup close_popup_click"><svg width="34px" height="34px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C10.22 21 8.47991 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89472 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17294C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36628 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C21 14.387 20.0518 16.6761 18.364 18.364C16.6761 20.0518 14.387 21 12 21ZM12 4.5C10.5166 4.5 9.0666 4.93987 7.83323 5.76398C6.59986 6.58809 5.63856 7.75943 5.07091 9.12988C4.50325 10.5003 4.35473 12.0083 4.64411 13.4632C4.9335 14.918 5.64781 16.2544 6.6967 17.3033C7.7456 18.3522 9.08197 19.0665 10.5368 19.3559C11.9917 19.6453 13.4997 19.4968 14.8701 18.9291C16.2406 18.3614 17.4119 17.4001 18.236 16.1668C19.0601 14.9334 19.5 13.4834 19.5 12C19.5 10.0109 18.7098 8.10323 17.3033 6.6967C15.8968 5.29018 13.9891 4.5 12 4.5Z" fill="#000000"></path> <path d="M9.00001 15.75C8.90147 15.7504 8.80383 15.7312 8.71282 15.6934C8.62181 15.6557 8.53926 15.6001 8.47001 15.53C8.32956 15.3893 8.25067 15.1987 8.25067 15C8.25067 14.8012 8.32956 14.6106 8.47001 14.47L14.47 8.46997C14.6122 8.33749 14.8002 8.26537 14.9945 8.26879C15.1888 8.27222 15.3742 8.35093 15.5116 8.48835C15.649 8.62576 15.7278 8.81115 15.7312 9.00545C15.7346 9.19975 15.6625 9.38779 15.53 9.52997L9.53001 15.53C9.46077 15.6001 9.37822 15.6557 9.2872 15.6934C9.19619 15.7312 9.09855 15.7504 9.00001 15.75Z" fill="#000000"></path> <path d="M15 15.75C14.9015 15.7504 14.8038 15.7312 14.7128 15.6934C14.6218 15.6557 14.5392 15.6001 14.47 15.53L8.47 9.52997C8.33752 9.38779 8.2654 9.19975 8.26882 9.00545C8.27225 8.81115 8.35097 8.62576 8.48838 8.48835C8.62579 8.35093 8.81118 8.27222 9.00548 8.26879C9.19978 8.26537 9.38782 8.33749 9.53 8.46997L15.53 14.47C15.6704 14.6106 15.7493 14.8012 15.7493 15C15.7493 15.1987 15.6704 15.3893 15.53 15.53C15.4608 15.6001 15.3782 15.6557 15.2872 15.6934C15.1962 15.7312 15.0985 15.7504 15 15.75Z" fill="#000000"></path> </g></svg></a>

                <span class="cs_loader"></span>
                
                <form action="" method="post" id="email_template_form">
                    <p><b class="cs_flex">Subject: I'm Ready to Start Creating with <input required type="text" class="cs_input on_input" id="agency_name_input" name="agency_name" placeholder="AGENCY NAME">!</b></p>

                    <p>Hi <span class="on_input_show agency_name_input"></span> Team,</p>

                    <p>I'm excited about the opportunity to join <span class="on_input_show agency_name_input"></span> and start creating amazing content. Here’s a bit more about me:</p>

                    <p class="cs_flex">
                        <b>Name:</b> <input required type="text" class="cs_input on_input" id="full_name_input" name="full_name" placeholder="Your Full & Legal Name">
                    </p>

                    <p class="cs_flex">
                        <b>Email:</b> <input required type="email" class="cs_input on_input" id="email_input" name="email" placeholder="">
                    </p>

                    <p class="cs_flex">
                        <b>Phone Number:</b> <input required type="tel" class="cs_input on_input" id="phone_number_input" name="phone_number" placeholder="">
                    </p>

                    <p class="cs_flex">
                        <b>OnlyFans Username:</b> <input required type="text" class="cs_input on_input" id="fans_username_input" name="fans_username" placeholder="">
                    </p>

                    <p class="cs_flex">
                        <b>Social Media Links:</b> <input required type="text" class="cs_input on_input" id="social_media_link_input" name="social_media_link" placeholder="">
                    </p>

                    <p><b>Tell Us About Yourself:</b></p>
                    <ul>
                        <li>
                            <p class="cs_flex">
                                <b>Current Content Focus:</b>
                                <input required type="text" class="cs_input on_input" id="content_focus_input" name="content_focus" placeholder="(e.g., fitness, lifestyle, fashion, etc.)">
                            </p>
                        </li>
                        <li>
                            <p class="cs_flex">
                                <b>Preferred Contact Method:</b>
                                <input required type="text" class="cs_input on_input" id="content_method_input" name="content_method" placeholder="(e.g., email, phone, etc.)">
                            </p>
                        </li>
                    </ul>

                    <p><b>Availability:</b></p>
                    <ul>
                        <li>
                            <p class="cs_flex">
                                <b>Best Times for Meetings:</b>
                                <input required type="text" class="cs_input on_input" id="meeting_time_input" name="meeting_time" placeholder="">
                            </p>
                        </li>
                    </ul>

                    <p><b>Additional Information:</b></p>
                    <ul>
                        <li>
                            <p class="cs_flex">
                                <b>How Did You Hear About Us?</b>
                                <input required type="text" class="cs_input on_input" id="hear_about_us_input" name="hear_about_us" placeholder="">
                            </p>
                        </li>
                        <li>
                            <p class="cs_flex">
                                <b>Any Specific Questions or Requests?</b>
                                <input required type="text" class="cs_input on_input" id="specific_question_input" name="specific_question" placeholder="">
                            </p>
                        </li>
                    </ul>

                    <p>I’m looking forward to working with <span class="on_input_show agency_name_input"></span> to grow my brand and achieve my goals. Please let me know the next steps.</p>

                    <p>Thank you!</p>

                    <p>Best regards,</p>

                    <p><span class="on_input_show full_name_input"></span></p>
                    <p><span class="on_input_show fans_username_input"></span></p>
                    <p><span class="on_input_show email_input"></span></p>
                    <p><span class="on_input_show phone_number_input"></span></p>

                    <button class="email_popup_btn send_email_btn">Send</button>
                </form>

                <div class="thank__you" style="display:none;justify-content: center;align-items: center;height: 100%;flex-direction: column;">
                    <a href="<?= home_url()?>"  style="display: block;text-align: center;">
                        <img src="<?= home_url('/wp-content/uploads/2024/05/logo-1024x907.png');?>" alt="logo" style="width: 140px;">
                    </a>
                    <p style="
                        font-size: 55px;
                        text-align: center;
                    ">
                    Thank You For Your Submission!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'email_button', 'email_template' );