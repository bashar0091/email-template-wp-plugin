jQuery(document).ready(function($){

     // Function to close the popup form
     function closePopupForm() {
        $('.popup_form_wrap').removeClass('active');
        $('body').css('overflow','auto');
    }

    // Open the popup form when the button is clicked
    $('.email_popup_click').on('click', function(){
        $('.popup_form_wrap').addClass('active');
        $('body').css('overflow','hidden');
    });

    // Close the popup form when clicking outside of it
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.popup_form').length && !$(event.target).hasClass('email_popup_click')) {
            closePopupForm();
        }
    });

    // Close the popup form when clicking the close button
    $('.close_popup_click').on('click', function(){
        closePopupForm();
    });

    // get input value and show on field 
    $('.on_input').on('input', function(){
        var get_val = $(this).val();
        var get_id = $(this).attr('id');

        $(`.${get_id}`).text(get_val);
    });

});