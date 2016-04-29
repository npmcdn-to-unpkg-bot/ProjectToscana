$(function() {
    /* variables */
    /* submit form with ajax request using jQuery.form plugin */
    $('form').ajaxForm({

        /* set data type json */
        dataType:'json',

        /* reset before submitting */
        beforeSend: function() {
            alert("test");
            $('.progress-bar').css('width', '0%').attr('aria-valuenow', 0);
        },

        /* progress bar call back*/
        uploadProgress: function(event, position, total, percentComplete) {
            var pVel = percentComplete + '%';
            $('.progress-bar').css('width', percentComplete+'%').attr('aria-valuenow', percentComplete);
        },

        /* complete call back */
        complete: function(data) {
            status.html(data.responseJSON.count + ' Files uploaded!').fadeIn();
        }

    });
});