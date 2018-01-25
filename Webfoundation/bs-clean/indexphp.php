<?php
    session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>NaNungkum!!!</title>
    <link href="assets/css/respon.css" rel="stylesheet" />
    <!-- FONT AWESOME ICON STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- PRETTYPHOTO STYLE  -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/parallax.css" rel="stylesheet" />
    <link href="assets/css/slideshow.css" rel="stylesheet" />
    <link href="assets/css/popuplogin.css" rel="stylesheet" />
    <link href="assets/css/popupsignup.css" rel="stylesheet" />
    <link href="assets/css/themes/dark.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Kanit|Pattaya" rel="stylesheet">
    <style>
</style>
</head>
<body>
   <!--PopupLogin-->

   <!--PopupLogin-->

<!-- The Modal (contains the Sign Up form) -->

   <!--END OF modal signup -->
      <div class="navbar navbar-inverse navbar-fixed-top scrollclass">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="assets/php/checkstatelogin.php">HAHOA+ </a>
            </div>
            <div class="navbar-collapse collapse" style="font-family: Kanit;">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.kmitl.ac.th" target="_blank">Kmitl</a></li>
                    <li><a href="#features-sec">หาหอพัก</a></li>
                    <li><a href="%E0%B9%80%E0%B8%811.php">เก1</a></li>
                    <li><a href="%E0%B9%80%E0%B8%812.php">เก2</a></li>
                    <li><a href="%E0%B9%80%E0%B8%813.php">เก3</a></li>
                    <li><a href="#location-sec">เกี่ยวกับเรา</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!--END NAB BAR SECTION-->
  <div id="home-sec" >
        <div class="overlay">
            <div class="container">
                <div class="col-md-8 pad-top scrollclass">

                    <h1 style="font-family:Pattaya;">
                        <strong> หาหอในลาดกระบัง  <mark>บริเวณ เก1,เก2,เก3 </mark> พวกเราช่วยคุณได้ </strong>
                    </h1>
                    <p class="home-p" style="font-family: Kanit;">
                        อย่างที่รู้กันว่าหอที่มีอยู่ในบริเวณลาดกระบังนั้นมีจำนวนมาก เเละ เเต่ละที่ก็มีความเเตกต่างกัน ทั้งด้านคุณภาพ,ราคา,สิ่งอำนวยความสะดวด,Internet รวมถึงความคุ้มค่าด้วยเช่นกัน
                    </p>
                     <?php 
                    echo "<p class='home-p' style='font-family: Kanit;'>"."Hello!!!"." ".$_SESSION["firstname"]." ".$_SESSION["lastname"]." <br>คุณสามารถดาวน์โหลดPDFเเผนที่เเละรายชื่อหอได้<br>"."</p>";
                    ?>
                     <button class="buttonlogin" onclick="window.open('https://drive.google.com/drive/folders/0B8vo6FFL7jSVaUNId2V0OFFDSlE', '_blank');"  style="width:auto;">PDF</button>
                     <button class="cancelbtn"  onclick="window.location.href='assets/php/logout.php'" style="width:auto;background-color:#FF6961;">Logout</button>
                    
                      <!-- Button to open the modal -->
                </div>
            </div>
        </div>

    </div>
    <!--END HOME SECTION-->
         <div class="parallax2"></div>

    <section id="features-sec"style="background-color: #e3e3e3;" >
        <div  class="container">
            <div class="row text-center min-set">
                <div class="col-md-12">
                    <h2 style="font-family:Pattaya;"><mark class="head-glow">เก1,เก2,เก3 </mark>เเผนที่ </h2>
                    <hr class="sub-hr" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <!--เก1-->
                     <a href="%E0%B9%80%E0%B8%811.html"><img src="assets/img/map/%E0%B9%80%E0%B8%811.2.png" alt="" usemap="#Mapk3" width="80%" height="auto"  /></a>
                   <!--เก1-->
                </div>
                 
                  <div class="col-md-12 text-center">
                    <!--เก1ลาด-->
    <a href="%E0%B9%80%E0%B8%811.html"><img src="assets/img/map/%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B8%9A%E0%B8%99%E0%B8%97%E0%B8%B2%E0%B8%87%E0%B8%A5%E0%B8%B2%E0%B8%94%E0%B9%80%E0%B8%811.2.png" alt="" usemap="#Mapk11"width="80%" height="auto" /></a>

    <!--เก1ลาด-->
                </div>
                  <div class="col-md-12 text-center">
                      <!--เก2-->
<a href="%E0%B9%80%E0%B8%812.html"><img src="assets/img/map/%E0%B9%80%E0%B8%812.2.png" alt="" usemap="#Mapk2" width="80%" height="auto" />
    </a>

    <!--เก2-->
                </div>
                  <div class="col-md-12 text-center">
                    <!--เก3-->
    <a href="%E0%B9%80%E0%B8%813.html"><img src="assets/img/map/%E0%B9%80%E0%B8%813.2.png" alt="" usemap="#Mapk3" width="80%" height="auto"  /></a>

    <!--เก3-->
                </div>
            </div>

        </div>
    </section>
    <!--END FEATURES SECTION-->

    <!--END SKILL SECTION-->
    <section id="advance-sec" style="background-color: #e3e3e3;" >
        <div class="container">
            <div class="row text-center min-set">
                <div class="col-md-12">
                    <h2 style="font-family:Pattaya;"><mark class="head-glow">เก1,เก2,เก3 </mark>หอต่างกันอย่างไร </h2>
                    <hr class="sub-hr" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <a href="%E0%B9%80%E0%B8%811.html"><h3>เก1</h3></a>
                    <p>-มีร้านเครื่องเขียนขนาดใหญ่หน้าซอย<br>
                     -ใกล้คณะวิศวกรรมศาสตร์มากที่สุด
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <a href="%E0%B9%80%E0%B8%812.html"><h3>เก2</h3></a>
                    <p>
                      -มีร้านขายยาทั่วไปซึ่งซอยอื่นไม่มี<br>
                      -มีโรงอาหารขนาดใหญ่หน้าซอย
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <a href="%E0%B9%80%E0%B8%813.html"><h3>เก3</h3></a>
                    <p>
                       -มีร้านคอมหรือร้านเกมที่ใหญ่ที่สุด<br>
                       -มีหอหญิงล้วนมากกว่าซอยเกกีอื่นๆ
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!--END ADVANCE SECTION-->
    <div id="just-sec">
        <div class="overlay" style="font-family:Pattaya; font-size: 150%;">
            + ภาพบรรยากาศ +
        </div>

    </div>
    <!--END JUST SECTION-->
   <section id="gallery-sec" style="background-color: #e3e3e3;">


        <div class="slideshow-container">
  <div class="mySlides fade">
    <img src="assets/img/K1/som.JPG" style="width:100%">
    <div class="text">บ้านสมปราถนา(เก1)</div>
  </div>


    <div class="mySlides fade">
    <img src="assets/img/K2/JW1.jpg" style="width:100%">
    <div class="text">J&W(เก2)</div>
  </div>


 <div class="mySlides fade">
    <img src="assets/img/K3/nak.jpg" style="width:100%">
    <div class="text">นาคบำรุงศรี(1-12)(เก3)</div>
  </div>
  
  <div class="mySlides fade">
    <img src="assets/img/K1/mali.JPG" style="width:100%">
    <div class="text">หอพักหญิงมะลิ(เก1)</div>
  </div>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
    </section>
    <!-- END GALLERY  SECTION -->
    <div class="parallax3"></div>
      <section id="location-sec" style="background-color: #89bdd3;">
        <div class="container">
            <div class="row text-center min-set">
                <div class="col-md-12">
                    <h1 style="font-family:Pattaya; font-size: 200%;">เกี่ยวกับเรา</h1>
                    <hr class="sub-hr" />
                      </div>  
                    <div class="col-md-4">
                        <img src="assets/img/icon/logoweb.png" width="70%" high="auto" >
                    </div>
                    
                      <div class="col-md-4">
                     <h3 style="font-family:Pattaya; font-size: 150%;">พวกเราคือกลุ่ม"หน้าหนังขำ"</h3>
                     <h4 style="font-family:Pattaya; font-size: 150%;">ITE</h4>
                    <h4 style="font-family:Pattaya; font-size: 130%;">ladkrabang </h4>
                    <h4 style="font-family:Pattaya; font-size: 130%;">kmitl </h4>
                    <h4 style="font-family:Pattaya; font-size: 130%;">bangkok </h4>
                    <h4 style="font-family:Pattaya; font-size: 130%;">thailand</h4>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/icon/Facebook.png" width="30%" high="50%">
                        <img src="assets/img/icon/Instagram.png" width="30%" high="50%">
                        <img src="assets/img/icon/YouTube.png" width="30%" high="50%">
                    </div>  
                </div>
        </div>
    </section>
   
    <!-- END LOCATION  SECTION -->
    <!-- JAVASCRIPT FILES-->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- RESPON SCRIPTS  -->
    <script src="assets/js/respon.js"></script>
    <!-- PORTFOLIO FILTER PLUGIN  -->
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- NICE SCROLL SCRIPTS   -->
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <!-- EASING SCROLL SCRIPTS   -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/automaticslide.js"></script>
</body>
</html>