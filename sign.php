<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="./style/form.css">
    <link rel="stylesheet" href="./style/StyleSheet2.css">
    <link rel="stylesheet" href="./style/footer.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>
   <?php include './php/header.php'; ?>

    <div id="userLoginForm" class="userLoginForm">
        <div class="frm">
            <div class="frmTop">
                <img class="frmIcon" src="./img/sign.png">
                <h1 class="signCreate">SIGN IN</h1>
            </div>

            <form method = "POST" action="./php/sign.inc.php">
                <input class="form-control" type="email" name="hMail" id="hmail" placeholder="E-mail">
                <input class="form-control" type="password" name="hPass" id="pwd" placeholder="***********">
                <div class="form-group-buttons">
                    <button  class="form-button" id="signUp" style="float:left; font-size: 10px; margin-top: 1px; margin-left: 0;">CREATE AN ACCOUNT</button>
                    <button type ="submit" class="form-button" name = "btnSignin" id="signIn">SIGN IN</button>
                </div>
            </form>     
        </div>
    </div>
    <div id="usersignupForm" class="usersignupForm" >
        <div class="frm">
            <div class="frmTop">
                <img class="frmIcon" src="./img/sign.png">
                <h1 class="signCreate">Sign Up</h1>
            </div>
            <form method = "POST"  action="./php/sign.inc.php">
                <input class="form-control" type="text" name="username" id="Name" placeholder="Name">
                <input class="form-control" type="email" name="email" id="email" placeholder="E-mail">
                <input class="form-control" type="password" name="password_1" id="pwd" placeholder="***********">
                <input class="form-control" type="password" name="password_2" id="pwdChk" placeholder="***********">   
                <div class="form-group-buttons">
                    <button  class="form-button" id="signUp" name = "btnSignup" style="float:left; margin-left: 0;">SIGN UP</button>
                    <button class="form-button" name="cancel" id="cancel">CANCEL</button>
                </div>
            </form>
        </div>
    </div>      
    <?php
        // If don't have 'signup' inside the url
        if(isset($_GET['signup'])){
            // This variable equal to whatever comes after the 'signup='
            $signupCheck = $_GET['signup'];
            if($signupCheck == "empty"){
                echo "<p class = 'error'>You did not fill all fields</p>";
            }
            else if($signupCheck == "invalideemail"){
                echo "<p class = 'error'>You have use invalide email</p>";
            }
            else if($signupCheck == "invalideemailp"){
                echo "<p class = 'error'>You have use invalide email or password</p>";
            }
            else if($signupCheck == "success"){
                echo "<p class = 'success'>You Signed up success</p>";
                echo "<a href = 'upload.html'><p class = 'success'>Add new</p></a>";
            }
        }

        // If don't have 'reg' inside the url
        if(isset($_GET['reg'])){
            // This variable equal to whatever comes after the 'signup='
            $signupCheck = $_GET['reg'];
            if($signupCheck == "empty"){
                echo "<p class = 'error'>You did not fill all fields</p>";
            }
            else if($signupCheck == "invalideemail"){
                echo "<p class = 'error'>You have use invalide email</p>";
            }
            else if($signupCheck == "passwordnotmatch"){
                echo "<p class = 'error' >You have use invalide password</p>";
            }
            else if($signupCheck == "success"){
                echo "<p class = 'success' >You Signed up success</p>";
            }
        }

    ?>
    <script src="./script/sign.js"></script>
    <?php include './php/footer.php';?>
</body>
</html>