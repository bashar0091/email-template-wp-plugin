jQuery(document).ready(function($){

    // Function to close the popup form
    function closePopupForm() {
        $('.popup_form_wrap').removeClass('active');
        $('body').css('overflow','inherit');
    }

    // Open the popup form when the button is clicked
    $('.email_popup_click').on('click', function(){
        $('.popup_form_wrap').addClass('active');
        $('body').css('overflow','hidden');
    });

    // Close the popup form when clicking outside of it
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.popup_form_wrap').length && !$(event.target).hasClass('email_popup_click')) {
            closePopupForm();
        }
    });

    // Prevent the form from closing when clicking inside it
    $('.popup_form_wrap').on('click', function(event){
        event.stopPropagation();
    });

    // Close the popup form when clicking the close button
    $('.popup_close_btn').on('click', function(){
        closePopupForm();
    });

});