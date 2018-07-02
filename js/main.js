$(document).ready(function () {
    
     
    //<Sending email>
    //find -> contact.php
    $("#contactForm").submit(function (event) {
        event.preventDefault();
    
        let userName = $('#userName').val();
        let email = $("#email").val();
        let request = $("#request").val();
       
        if(userName==''){
            $(".userNameMessage").html("<b>First name and last name required</b>");
            $('#userName').css("border","1px solid red");
            $('#userName').focus();
            return; 
        }
        else if(!isNaN(userName)){
            $(".userNameMessage").html("<b>Only letters and space allowed</b>");
            $('#userName').css("border","1px solid red");
            $('#userName').focus();
            return; 
            
        }
        else if(email==''){
            $(".userEmailMessage").html("<b>Email required</b>");
            $("#email").css("border",'1px solid red');
            $("#email").focus();
            return; 
        }
        else if(request==''){
            $(".textAreaMessage").html("<b>Request field required</b>");
            $("#request").css("border",'1px solid red');
            $("#request").focus();
            return; 
        }
        else {
           $.ajax({
               url:'action.php',
               method:'POST',
               data:{enableContact:1,userName:userName,email:email,request:request},
               success:function(data){
                   $(".email-us .inner-section").html(data);
                   setTimeout(function(){
                       window.location.reload();
                   },3000)
               }
           })
        }
        
        $("#contactForm")[0].reset();
    });
})
//<Sending Email us>