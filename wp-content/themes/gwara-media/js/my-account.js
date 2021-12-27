jQuery(document).ready(function ($) {
   $('#personal-data').submit(function (e) {
       e.preventDefault();
       var form = $(this);
       form.find('.status').text('');
       var data = {
           action: 'update_user_data',
           form: form.serialize(),
           security: form.find('#user-data-security').val()
       };

       $.ajax({
           type: 'POST',
           url: my_account_object.ajaxurl,
           data: data,
           success: function (data) {
               form.find('.status').text(data.msg);
           }
       });

   })
});