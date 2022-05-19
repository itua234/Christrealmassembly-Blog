$(document).ready(function(){
    $('form').on("submit",function(event){
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type:'post',
            url:'process.php',
            data:formData,
            dataType:'json'
        });  
    });
});