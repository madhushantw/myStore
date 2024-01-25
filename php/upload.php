<?php
    
    
    if(isset($_POST['submit'])){
        $itemCount = "0";
        if(($_POST['sfName']) && ($_FILES['addSlide']['name']) && ($_FILES['application']['name']) && ($_FILES['imgCover']['name']) && ($_FILES['icon']['name'])){
        // ----------make a folder and index------------------

        $name = $_POST['sfName'];
        $company = $_POST['sfCompany'];
        $developer = $_POST['sfDeveloper'];
        $flatform = $_POST['sfFlatform'];
        $type = $_POST['sfType'];
        $url = '';
        
        mkdir("../bin/$name", 0700);
        $file = fopen("../bin/$name/index.php","a");
        // -----------------------------------------

        // -------------Cover img-------------------

        $imgCoverName = $_FILES['imgCover']['name'];
        $imgCoverTmpName = $_FILES['imgCover']['tmp_name'];
        
        // Seperate the extention from the file name
        $imgCoverExt =  explode('.', $imgCoverName);
        $imgCoverActualExt = strtolower($imgCoverExt[1]);
        $imgCoverNewName ='imgCover.'.$imgCoverActualExt;

        $imgCoverDest = '../bin/'.$name.'/'.$imgCoverNewName;
        if(move_uploaded_file($imgCoverTmpName, $imgCoverDest)){
        }
        // -----------------------------------------

        // -------------icon img-------------------

        $iconName = $_FILES['icon']['name'];
        $iconTmpName = $_FILES['icon']['tmp_name'];
        
        // Seperate the extention from the file name
        $iconExt =  explode('.', $iconName);
        $iconActualExt = strtolower($iconExt[1]);
        $iconNewName ='icon.'.$iconActualExt;

        $iconDest = '../bin/'.$name.'/'.$iconNewName;
        if(move_uploaded_file($iconTmpName, $iconDest)){
        }
        // -----------------------------------------

        // -----------About Software Dis------------
        $disHeader = $_POST['dis1'];
        // -----------------------------------------

        // -------------Screeshoats-----------------

        // Count # of uploaded files in array
        $total = count($_FILES['addSlide']['name']);
        if($_FILES['addSlide']['name']){
            // Loop through each file
            for( $i=0 ; $i < $total ; $i++ ) {

                //Get the temp file path
                $tmpFilePath = $_FILES['addSlide']['tmp_name'][$i];
                $ssName = $_FILES['addSlide']['name'][$i];
                
                $ssExt =  explode('.', $ssName);
                $ssrActualExt = strtolower($ssExt[1]);

                $ssNewName =$i.'.'.$ssrActualExt;
                $ssDest = '../bin/'.$name.'/'.$ssNewName;

                //Make sure we have a file path
                if ($tmpFilePath != ""){
                    //Setup our new file path
                    $newFilePath = '../bin/'.$name.'/' . $_FILES['addSlide']['name'][$i];

                    //Upload the file into the temp dir
                    if(move_uploaded_file($tmpFilePath, $ssDest)) {
                        $itemCount++;
                    }
                }
            }
        }
        // -----------------------------------------

        // -------------Aplication------------------
        $applicationName = $_FILES['application']['name'];
        $applicationTmpName = $_FILES['application']['tmp_name'];

        // Make sure we have a file path
        if ($applicationTmpName != ""){
        // Seperate the extention from the file name
            $applicationExt =  explode('.', $applicationName);
            $applicationActualExt = strtolower($applicationExt[1]);
            $applicationNewName ='application.'.$applicationActualExt;
            $applicationDest = '../bin/'.$name.'/'.$applicationNewName;
            if(move_uploaded_file($applicationTmpName, $applicationDest)){
            }
        }

        // -----------------------------------------

        // -----------Create new page---------------
        fwrite($file, "<!DOCTYPE html>
        <html lang='en' xmlns='http://www.w3.org/1999/xhtml'>
        <head>
            <meta charset='utf-8' />
            <title>".$name."</title>
            <link rel='stylesheet' href='./../../style/StyleSheet2.css'>
            <link rel='stylesheet' href='./../../style/newfoot.css'>
            <link rel='stylesheet' href='./../../style/slider.css'>
            <link rel='stylesheet' href='./../../style/card.css'>
            <link
                rel='stylesheet'
                href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'
                integrity='sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=='
                crossorigin='anonymous'
                referrerpolicy='no-referrer'
            />
            <style>
            .topicImg{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 200px;
            object-fit: cover;
            }
        </style>
        </head>
        <body>"."<?php include '../../php/header.php'; include '../../php/sidebar.php'; ?>"."<section id='main-section'>
        <div class='container'>
            <h1 class='topicApp'>".$name."</h1>
            <img class='topicImg' src=$imgCoverNewName>
            <p class='disSmall'>'".$disHeader."'</p>
        </div>"."<div class='container'>
		<div class='sloderContainer'>
		<div class='slider'>");

        $handle = opendir(dirname(realpath(__FILE__)).'../../bin/'.$name.'/');
        while($file1 = readdir($handle)){
            if($file1 !== '.' && $file1 !== '..'){
                if((strpos($file1,'imgCover')!==0) && (strpos($file1,'i')!==0) && (strpos($file1,'application')!==0)){
                    fwrite($file,
                        "<img class='mySlides' name='mySlides' src=".$file1." style='width:100%'>\n"
                        );
                    }
            }
        }

        // $itemCount--;
        // while($itemCount != 0){
        //     fwrite($file,
        //     "<img class='mySlides' name='mySlides' src=".$itemCount.".png style='width:100%'>\n"
        //     );
        //     $itemCount--;
        // }

        fwrite($file, "
            <script src='./../../script/slideshow.js'></script>
            </div>
            <div class='slidSection'>
                <button class='slideButton' onclick='plusDivs(-1)' style='float:left'> ❮ Prev</button>
                <button class='slideButton' onclick='plusDivs(1)' style='float:right'>Next ❯</button>
            </div>
            </div>
            </div>");

        fwrite($file,"
        <div class='container'>
		<div class='download'>
        <a href='./application.".$applicationActualExt."' download><button class='btnDw' id='btnDw' name ='btnBw' >Download</button></a>
		</div>
        </div>
        <div class='container'>
        <div class='discription'>
        <h1 class='topicApp'>".$name."</h1>
        <div class='cardRow' id='cardRow'>
        ");

       
        for($i = 0; $i<6 ; $i++){
            if(isset($_POST[$i.'disTitle']) && isset($_POST[$i.'disBody'])){
                $catdTitle = $_POST[$i.'disTitle']; 
                $catdBody = $_POST[$i.'disBody'];
                if(!(empty($catdTitle) || empty($catdBody))){
                    fwrite($file, "
                        <div class='card'>
                        <div class='cardHead'>
                            <h3>".$catdTitle."</h3>
                        </div>
                        <p class='cardBody'>".$catdBody."</p>
                        </div>
                    ");
                }
            }
        }

         fwrite($file, "
                    </div>
                </div>
            </div>
            <?php include '../../php/footer.php'; ?>
            <script src='./script/Upload.js'></script>
            </section>
            </body>
            </html>
         ");
         fclose($file);

        // ------------------------ Add to Discovery.html ---------------------------------
         $stats = file('../Discovery.html', FILE_IGNORE_NEW_LINES);   // read file into array
         $line = $stats[20];   // read line
         array_splice($stats, 25, 0, '<div class="card"><a href="./bin/'.$name.'/index.php">
         <div class="cardSuperHead">
             <img src="./bin/'.$name.'/'.$imgCoverNewName.'">
         </div>
         <div class="cardHead">
             <img src="./bin/'.$name.'/'. $iconNewName.'">
             <h3>'. $name.'</h3>
         </div>
         <p class="cardBody">'.$disHeader.'</p>
         </a>
         </div>');    // insert $newline at $offset
         file_put_contents('../Discovery.html', join("\n", $stats));    // write to file

        // ------------------------ Insert into database------------------------------------
        include 'dbh.inc.php';

        $url = 'http'.'://localhost/mystore/bin/'.$name.'/index.php';

        $sql = "INSERT INTO software(name, company, team, flat_form, category, url) VALUES('$name', '$company', '$developer', '$flatform', '$type' ,'$url')";
        if(!mysqli_query($conn, $sql)){
            echo 'database error';
        }
        else{
            echo 'insert into database success';
            header("location: ../bin/$name/index.php?upload=success");
        }
        // ---------------------------------------------------------------------------------
        }
        else{
            echo '
                <div style="margin-top: 15%;
                font-family: sans-serif;   
                width: 100%;
                height: 200px;
                background-color: lightgreen;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;"><h1>You have not completed some fields</h1>
                <a style="text-decoration: none;" href = "../upload.html">ᐸ Back</a></div>';
            //header("location: ./upload?upload=incompleate");
        }
    }

?>
