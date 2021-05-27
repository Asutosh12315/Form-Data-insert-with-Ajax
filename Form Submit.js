
$("#form-submit").on("submit", function(e){

    e.preventDefault();
    
    console.log("success");

    
    $.ajax({
    
    type:'post',
    
    data:{ 
        
        name: $("#name").val(),          
    
        email: $("#email").val(),

        password : $("#password").val()
    
    
         }, 
    
    url:'insert.php'
    
    
    });
    
    });
    