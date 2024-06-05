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
                <form action="" method="post">
                    <p><b class="cs_flex">Subject: I'm Ready to Start Creating with <input type="text" class="cs_input on_input" id="agency_name_input" name="agency_name" placeholder="AGENCY NAME">!</b></p>

                    <p>Hi <span class="agency_name_input"></span> Team,</p>

                    <p>I'm excited about the opportunity to join <span class="agency_name_input"></span> and start creating amazing content. Here’s a bit more about me:</p>

                    <p class="cs_flex">
                        <b>Name:</b> <input type="text" class="cs_input on_input" id="full_name_input" name="full_name" placeholder="Your Full & Legal Name">
                    </p>

                    <p class="cs_flex">
                        <b>Email:</b> <input type="email" class="cs_input on_input" id="email_input" name="email" placeholder="">
                    </p>

                    <p class="cs_flex">
                        <b>Phone Number:</b> <input type="tel" class="cs_input on_input" id="phone_number_input" name="phone_number" placeholder="">
                    </p>

                    <p class="cs_flex">
                        <b>OnlyFans Username:</b> <input type="text" class="cs_input on_input" id="fans_username_input" name="fans_username" placeholder="">
                    </p>

                    <p class="cs_flex">
                        <b>Social Media Links:</b> <input type="text" class="cs_input on_input" id="social_media_link_input" name="social_media_link" placeholder="">
                    </p>

                    <p><b>Tell Us About Yourself:</b></p>
                    <ul>
                        <li>
                            <p class="cs_flex">
                                <b>Current Content Focus:</b>
                                <input type="text" class="cs_input on_input" id="content_focus_input" name="content_focus" placeholder="(e.g., fitness, lifestyle, fashion, etc.)">
                            </p>
                        </li>
                        <li>
                            <p class="cs_flex">
                                <b>Preferred Contact Method:</b>
                                <input type="text" class="cs_input on_input" id="content_method_input" name="content_method" placeholder="(e.g., email, phone, etc.)">
                            </p>
                        </li>
                    </ul>

                    <p><b>Availability:</b></p>
                    <ul>
                        <li>
                            <p class="cs_flex">
                                <b>Best Times for Meetings:</b>
                                <input type="text" class="cs_input on_input" id="meeting_time_input" name="meeting_time" placeholder="">
                            </p>
                        </li>
                    </ul>

                    <p><b>Additional Information:</b></p>
                    <ul>
                        <li>
                            <p class="cs_flex">
                                <b>How Did You Hear About Us?</b>
                                <input type="text" class="cs_input on_input" id="hear_about_us_input" name="hear_about_us" placeholder="">
                            </p>
                        </li>
                        <li>
                            <p class="cs_flex">
                                <b>Any Specific Questions or Requests?</b>
                                <input type="text" class="cs_input on_input" id="specific_question_input" name="specific_question" placeholder="">
                            </p>
                        </li>
                    </ul>

                    <p>I’m looking forward to working with <span class="agency_name_input"></span> to grow my brand and achieve my goals. Please let me know the next steps.</p>

                    <p>Thank you!</p>

                    <p>Best regards,</p>

                    <p><span class="full_name_input"></span></p>
                    <p><span class="fans_username_input"></span></p>
                    <p><span class="email_input"></span></p>
                    <p><span class="phone_number_input"></span></p>

                    <button class="email_popup_btn send_email_btn">Send</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'email_button', 'email_template' );