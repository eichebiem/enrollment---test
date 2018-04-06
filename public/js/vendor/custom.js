$(document).ready(function(){

     $('#form_validate').validate({

          rules: {
               reminder: {
                    required: true,
                    minlength: 8
               }
          },

          messages: {
               
          },

          submitHandler: function(form){
               form.submit();
          }

     });

});


