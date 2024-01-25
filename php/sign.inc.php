<?php
    include 'dbh.inc.php';
    // Sign in

    if(isset($_POST['btnSignin'])){

        // $uEmai = mysqli_real_escape_string($conn, $_POST['hMail']);
        // $uPass = mysqli_real_escape_string($conn, $_POST['hPass']);

        $uEmai = $_POST['hMail'];
        $uPass = $_POST['hPass'];



        // Check if input fields are emptu
        if(empty($uEmai) || empty($uPass)){
            header("Location: ../sign.php?signup=empty");
        }
        else{
            // validate email using inbilt email validater
            if(!filter_var($uEmai, FILTER_VALIDATE_EMAIL)){
                header("Location: ../sign.php?signup=invalideemail");
            }
            else{
                $user_check_query = "SELECT * FROM users WHERE email='$uEmai' LIMIT 1";
                $result = mysqli_query($conn, $user_check_query);
                $user = mysqli_fetch_assoc($result);
                
                if ($user) { // if user exists
                    if (($user['email'] === $uEmai) /*&& $user['password'] === $uPass*/) {

                        $sql = "INSERT INTO signin(username, pwd) VALUES('$uEmai', '$uPass')";
                        // Try -Chack Block - Exception Handling
                        try{
                            if(!mysqli_query($conn, $sql)){
                                throw new Exception('Cannot run the query inside the database');
                            }
                            else{
                                header("Location: ../sign.php?signup=success");
                            }
                        }
                        // Catch block will executed only when exeption has been thrown by block
                        catch(Exception $e){
                            header("Location: ../sign.php?signup=invalideemail");
                        }
                        finally{
                            echo "run";
                        }
                    }
                }
                else{
                    header("Location: ../sign.php?signup=invalideemailp");
                }
            }
        }
    }
// -----------------------------------------------------------------------------------

    // Sign up
    if(isset($_POST['btnSignup'])){

        $nName = $_POST['username'];
        $nEmail = $_POST['email'];
        $nPass = $_POST['password_1'];
        $nPassChk = $_POST['password_2'];
        
        if(empty($nName) || empty($nEmail) || empty($nPass) || empty($nPassChk)){
            header("Location: ../sign.php?reg=empty");
        }
        else{
            // validate email using inbilt email validater
            if(!filter_var($nEmail, FILTER_VALIDATE_EMAIL)){
                header("Location: ../sign.php?reg=invalideemail");
            }
            else{
                if($nPass =! $nPassChk){
                    header("Location: ../sign.php?reg=passwordnotmatch");
                }
                else{
                    $user_check_query = "SELECT * FROM users WHERE username='$nName' OR email='$nEmail' LIMIT 1";
                    $result = mysqli_query($conn, $user_check_query);
                    $user = mysqli_fetch_assoc($result);
                    
                    if ($user) { // if user exists
                        if (($user['username'] === $nName) || ($user['email'] === $nEmail)) {
                          header("Location: ../sign.php?reg=alreadyexists");
                        }
                    }
                    else{
                        $sql = "INSERT INTO users(username, email, password) VALUES('$nName', '$nEmail', '$nPass')";
                        try{
                            if(!mysqli_query($conn, $sql)){
                                throw new Exception('Cannot run the query inside the database');
                            }
                            else{
                                header("Location: ../sign.php?reg=success");
                            }
                        }
                        catch(Exception $e){
                            echo "<br>"."\nException Caught : ".$e->getMessage();
                        }
                        finally{
                            echo "<br>"."\nNo metter executed!";
                        }
                    }
                }
            }
        }
    
    }
    if(isset($_POST['cancel'])){
    header("Location: ../sign.php");
    }
?>
