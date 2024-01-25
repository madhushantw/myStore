<!DOCTYPE html>
        <html lang='en' xmlns='http://www.w3.org/1999/xhtml'>
        <head>
            <meta charset='utf-8' />
            <title>Download Manager</title>
            <link rel='stylesheet' href='./../../style/StyleSheet2.css'>
            <link rel='stylesheet' href='./../../style/footer.css'>
            <link rel='stylesheet' href='./../../style/slider.css'>
            <link rel='stylesheet' href='./../../style/card.css'>
            <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
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
        <body><?php include '../../php/header.php'; include '../../php/sidebar.php'; ?><section id='main-section'>
        <div class='container'>
            <h1 class='topicApp'>Download Manager</h1>
            <img class='topicImg' src=imgCover.jpg>
            <p class='disSmall'>'Install Internet Download Manager (IDM) to stop waiting 
for your downloads. You will be truly amazed how fast IDM
 downloads your files. IDM will also repair broken and resume 
 interrupted downloads due to lost connections, network problems,
 computer shutdowns, or unexpected power outages.'</p>
        </div><div class='container'>
		<div class='sloderContainer'>
		<div class='slider'><img class='mySlides' name='mySlides' src=0.960x0-is style='width:100%'>
<img class='mySlides' name='mySlides' src=1.jpg style='width:100%'>
<img class='mySlides' name='mySlides' src=2.jpg style='width:100%'>

            <script src='./../../script/slideshow.js'></script>
            </div>
            <div class='slidSection'>
                <button class='slideButton' onclick='plusDivs(-1)' style='float:left'> ❮ Prev</button>
                <button class='slideButton' onclick='plusDivs(1)' style='float:right'>Next ❯</button>
            </div>
            </div>
            </div>
        <div class='container'>
		<div class='download'>
        <a href='./application.rar' download><button class='btnDw' id='btnDw' name ='btnBw' >Download</button></a>
		</div>
        </div>
        <div class='container'>
        <div class='discription'>
        <h1 class='topicApp'>Download Manager</h1>
        <div class='cardRow' id='cardRow'>
        
                        <div class='card'>
                        <div class='cardHead'>
                            <h3> Powerful download engine</h3>
                        </div>
                        <p class='cardBody'>Our powerful download engine uses unique algorithms to
 receive Internet data in a fastest possible way. IDM will 
 accelerate downloads all times because of its innovative dynamic 
 file segmentation technology. Unlike other download managers and 
 accelerators, IDM segments downloaded files dynamically during
 download process, and it reuses available connections without 
 additional connect and login stages to achieve the best possible
 acceleration performance. Our engineers have a lot of experience 
 in download acceleration,
 and we constantly improve this download engine since 1999.</p>
                        </div>
                    
                        <div class='card'>
                        <div class='cardHead'>
                            <h3> All popular browsers are supported</h3>
                        </div>
                        <p class='cardBody'>IDM integrates seamlessly into Google Chrome, FireFox, 
Microsoft Edge, Opera, Safari, Internet Explorer, AOL, MSN, 
Maxthon and all other popular browsers. We develop browser 
extensions since 1999, and we have the best engineering solutions 
available today. IDM offers the installation of its extensions for
 Chrome, Firefox,
 old and new Edge, Opera and other browsers.</p>
                        </div>
                    
                    </div>
                </div>
            </div>
            <?php include '../../php/footer.php'; ?>
            <script src='./script/Upload.js'></script>
            </section>
            </body>
            </html>
         