<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Help</title>
    <link rel="stylesheet" href="./style/StyleSheet2.css">
    <link rel="stylesheet" href="./style/form.css">
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
    <?php include './php/header.php';?>
    <div class="formFrame">
        <div class="contacts">
            <h1 class="contactUs">Contact<br>Us</h1>
            <ul>
            <div class="address">
                <li>My Store.com</li>
                <li>MyStore@mail.com</li>
                <li>+94 355355355</li>
            </div>
            </ul>
        </div>
        <div class="frm">
            <form action="./php/mailer.php"  method="POST">
                <input class="form-control" type="text" name="name" id="hName" placeholder="Name">
                <input class="form-control" type="email" name="email" id="hmail" placeholder="E-mail">
                <textarea class="form-control" name="content" id="hContent" cols="30" rows="2" placeholder="Content"></textarea>
                <div class="form-group-buttons">
                    <button type="reset" class="form-button" id="cancel">CANCEL</button>
                    <button type="submit" name = "submit" class="form-button" id="send">SEND</button>
                </div>
            </form>
        </div>
    </div>
        <?php
        if(isset($_GET["mailsend"])){
            if($_GET["mailsend"] === "successed"){
                echo "<p class = 'success'>Successfully send</p>";
            }
            else if($_GET["mailsend"] === "failed"){
                echo "<p class = 'success'>failed to send</p>";
            }
        }
        ?>

    
<?php include './php/footer.php';?>
</body>
</html>