<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Signup Form</title>
    <style>
        
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
  text-decoration: none;
}

body{
  background-color: #282A36;
  display: flex;
  justify-content: center;
  align-items: center;
}

.card{
    width: auto;
    height: auto;
    background-color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    border-radius: 20px;
}

.card h2{
  margin-bottom: 10px;
}

.card a.fp{
  width: 100%;
  display: flex;
  color: #5881D0;
}

.login_register{
  display: flex;
  width: 100%;
  border: 1px solid rgba(221, 221, 221, 1);
  border-radius: 15px;
  margin: 20px 0;
}

.login_register span{
  font-size: 1em;
  padding: 10px 55px;
  border: none;
  width: 50%;
}

.login_register span.login{
  border-radius: 15px;
  background-color: transparent;
  color: black;
}

.login_register span.register{
  border-radius: 15px;
  background: linear-gradient(90deg, #003A74, #006AD5);
  color: white;
}

.form{
  display: flex;
  flex-direction: column;
  width: 100%;
}

.form input{
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #DDDDDD;
  color: #A0A6A3;
  font-family: "Roboto Mono", sans-serif;
  box-shadow: 1px 5px 9px rgba(211, 211, 211, .7);
}

.form input.email{
  margin-bottom: 15px;
}

.form input.pass{
  margin-bottom: 15px;
}

.form input.comfirm_pass{
  margin-bottom: 5px;
}

.login_btn{
  font-size: 20px;
  color: white;
  border-radius: 15px;
  border: none;
  background-color: #003A74;
  width: 100%;
  padding: 10px;
  margin-top: 15px;
  margin-bottom: 15px;
  background: linear-gradient(-90deg, #003A74, #006AD5);
  box-shadow: 1px 5px 9px rgba(211, 211, 211, .9);
}
.register-box{
    display: none;
}
.login-container{
    width: 100%;
}

    </style>
</head>
<body>

         <!-- FORMULAIRE DE CONNEXION -->
    <div class="card">
        <h2>Signup Form</h2>
        <div class="error-msg"></div>
            <!-- SE CONNECTER / S'INSCRIRE -->
        <div class="login_register">
            <span class="login" id="login-box-1">Login</span>
            <span class="register" id="register-box-1">Signup</span>
        </div>
           <div class="login-container" >
            <!-- FORMULAIRE -->
            <div class="login-box" >
                  <form class="form">
            <input type="email" placeholder="Email Adress" class="email" id="l_email" >
            <input type="password" placeholder="password" class="pass" id="l_pass" >
            <input type="button" class="login_btn"  id="login_id" value="submit">
               </form>

            </div>
            <!-- FORMULAIRE -->
            <div class="register-box" >
             
                  <form class="form" method="POST" id="loignform">
            <input type="text" placeholder="Name" class="Name" id="s_name">
            <br>
            <input type="email" placeholder="Email Adress" class="email"  id="s_email" >
            <input type="password" placeholder="password" class="pass"  id="s_pass">
             <br>
            <input type="text" placeholder="phone" class="phone"   id="s_phone">
             <br>
            <!-- <input type="file" placeholder="file" class="file"  id="s_file"> -->
             <br>
            <input type="button" class="login_btn" id="signup_id" value="submit">
               </form>

            </div>
       
         </div>
          
    </div>
        
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    
        $(document).ready(function(){
           $( "#register-box-1" ).click(function() {
                  $( ".register-box" ).fadeIn( "fast", function() {
                      $('.login-box').css("display","none");
                  });
                });

                $( "#login-box-1" ).click(function() {
                  $( ".register-box" ).fadeOut( "fast", function() {
                       $('.login-box').css("display","block");
                  });
                });


                $('#signup_id').click(function(){
                 
                   var name=$('#s_name').val();
                   var email=$('#s_email').val();
                   var pass=$('#s_pass').val();
                   var phone=$('#s_phone').val();  
                   var files=$('#s_file').val();
                     
                    $.ajax({ 
                        method:'POST',
                        url:'logindata.php',
                        data:{
                             name1:name,
                             email1:email,
                             pass1:pass,
                             phone1:phone,
                             files1:files
                        },
                        success: function(data){
                               console.log(data);
                               alert("Form Submited Successfully");
                               $('#loignform')[0].reset();

                    
                           }

                    });

                });

                $('#login_id').click(function (e) {
                    e.preventDefault();
                    var l_email = $('#l_email').val();
                    var l_pass = $('#l_pass').val();
                    
                                      
                    $.ajax({
                        method: 'POST',
                        url: 'logsession.php',
                        data: {
                            email_l: l_email,
                            pass_l: l_pass,
                        },
                        success: function(response){
                            console.log("Raw response:", response); // Log raw response

                            // Split response to extract status and message
                            var responseParts = response.split(':');
                            if (responseParts.length === 2) {
                                var status = responseParts[0];
                                var message = responseParts[1];

                                if (status === 'success') {
                                 
                                   $(".error-msg").text(response);
                                    console.log(status);
                                    setTimeout(function() {
                                      window.location.href = 'index.php'; 

                                  }, 1000); // Adjust the delay as needed
                                } else {
                                   $(".error-msg").text(response);
                                    console.log(status);
                                  
                                }
                            } else {
                                console.error("Unexpected response format");
                            }
                        },
                        error: function() {
                            alert('An error occurred while processing your request.');
                        }
                    });
                });

        });
</script>
</html>