$(document).ready(function(){
    $('.password-reset').on("submit",function(event){
        event.preventDefault();
        //$('.newsletter-error-message').text("");
        //$('.newsletter-success-message').text("");
        var formData = $(this).serialize();
        $.ajax({
            type:'post',
            url:'reset.php',
            data:formData,
            dataType:'json'
        })
        //using the done promise callback
        .done(function(data){
            //here we will handle errors and validation messages
            if(!data.success){
                if(data.errors.email){
                    //$('.newsletter-error-message').text(data.errors.email);
                }
            }else{
               // $('.newsletter-success-message').text(data.message);
            }
        })
        //using the fail promise callback
        .fail(function(data){

        });
    });
});