<!DOCTYPE html>
        <html lang='en' xmlns='http://www.w3.org/1999/xhtml'>
        <head>
            <meta charset='utf-8' />
            <title>BeFunky</title>
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
        <body><?php include '../../php/header.php'; include '../../php/sidebar.php'; ?><section id='main-section'>
        <div class='container'>
            <h1 class='topicApp'>BeFunky</h1>
            <img class='topicImg' src=imgCover.jpg>
            <p class='disSmall'>'ols capable of capturing many types of photos, they can also 
produce muted colors, low contrast, and off-balanced lighting. Photo 
editing helps correct these issues to bring out the true beauty of your'</p>
        </div><div class='container'>
		<div class='sloderContainer'>
		<div class='slider'><img class='mySlides' name='mySlides' src=0.png style='width:100%'>
<img class='mySlides' name='mySlides' src=1.png style='width:100%'>
<img class='mySlides' name='mySlides' src=10.jpg style='width:100%'>
<img class='mySlides' name='mySlides' src=11.jpeg style='width:100%'>
<img class='mySlides' name='mySlides' src=12.jpg style='width:100%'>
<img class='mySlides' name='mySlides' src=13.png style='width:100%'>
<img class='mySlides' name='mySlides' src=2.jpg style='width:100%'>
<img class='mySlides' name='mySlides' src=3.png style='width:100%'>
<img class='mySlides' name='mySlides' src=4.jpg style='width:100%'>
<img class='mySlides' name='mySlides' src=5.jpg style='width:100%'>
<img class='mySlides' name='mySlides' src=6.jpeg style='width:100%'>
<img class='mySlides' name='mySlides' src=7.png style='width:100%'>
<img class='mySlides' name='mySlides' src=8.jpg style='width:100%'>
<img class='mySlides' name='mySlides' src=9.jpg style='width:100%'>

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
        <h1 class='topicApp'>BeFunky</h1>
        <div class='cardRow' id='cardRow'>
        
                        <div class='card'>
                        <div class='cardHead'>
                            <h3>Befunky</h3>
                        </div>
                        <p class='cardBody'>ols capable of capturing many types of photos, they can also 
produce muted colors, low contrast, and off-balanced lighting. Photo 
editing helps correct these issues to bring out the true beauty of your</p>
                        </div>
                    
                        <div class='card'>
                        <div class='cardHead'>
                            <h3>Be</h3>
                        </div>
                        <p class='cardBody'>ols capable of capturing many types of photos, they can also 
produce muted colors, low contrast, and off-balanced lighting. Photo 
editing helps correct these issues to bring out the true beauty of your</p>
                        </div>
                    
                    </div>
                </div>
            </div>
            <?php include '../../php/footer.php'; ?>
            <script src='./script/Upload.js'></script>
            </section>
            </body>
            </html>
         