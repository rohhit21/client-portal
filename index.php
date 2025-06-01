<?php
session_start();
error_reporting(0);
$host="localhost";
$user="root";
$password="";
$db="loginpage";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM signin";

$result=mysqli_query($data,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <!--nav bar start from here in nav bar all to sign-->
    <div class="navbar">
    <h3><i class="fa-solid fa-bars"> <select class="all-search">
        <option>ALL</option>
        <option>anime</option>
        <option> cartton</option>
        <option>moive</option>
        <option>songs</option>
        <option>roste</option>
        <option>funny</option>
    </select></h3></i>
     <div class="ll"><i class="fa-brands fa-youtube"></i>YouTubeube</div>
         <div class="navbar-logo"></div>
         <div class="nav-search">
            <div class="all-bar">
              
           </div> 
           <input placeholder="search here" class="search-input">
           <div class="search-icon">
                <i class="fa-solid fa-magnifying-glass"></i>
           </div>
       </div>
       <div class="mic"><h2><a href="voice.php"><i class="fa-solid fa-microphone"></i></h2></div></a>
       <div class="noti"><h2><i class="fa-solid fa-bell"></i></h2></div>
       <div class="camera"><h2><i class="fa-solid fa-video"></h2></i></div>
       <div class="user"><h2><a href="logout.php" class="btn btn-sucess"><i class="fa-solid fa-user"></i></a></h2></div>

    </div>
    <!--here nav bar end-->
    <!--here header start from home to arjit singh-->
    <header class="Header">
          
        <div>
           <h1 class="home"><i class="fa-solid fa-house"></i></h1>
        </div>
        <h4><a  href="https://www.youtube.com/watch?v=kYcu17Eci0A">All</a></h4>
        <h4><a  href="https://www.youtube.com/hashtag/naruto">Naruto</a></h4> 
        <h4><a  href="https://www.youtube.com/hashtag/jjk">JJK</a></h4>
        <h4><a  href="https://www.youtube.com/channel/UCTnHSs_gidPJevVSaC4WspA">Demon sylear</a></h4>
        <h4><a  href="https://www.crunchyroll.com/series/GRMG8ZQZR/one-piece?srsltid=AfmBOorIgRmRTUhAzdozMI_Ly2NQaBK_mPJxqLeY4d68_N4KDZTQvsyZ">One pieace</a></h4>
        <h4><a  href="https://www.imdb.com/title/tt1622696/">Ben 10</a></h4>
        <h4><a  href="https://www.youtube.com/channel/UC-9-kyTW8ZkZNDHQJ6FgpwQ">Music</a></h4>
        <h4><a  href="https://www.youtube.com/playlist?list=PLMC9KNkIncKtPzgY-5rmhvj7fax8fdxoj">Indian pop music</a></h4>
        <h4><a  href="https://www.youtube.com/watch?v=TniCFSIJc6A">Reverbreation</a></h4>
        <h4><a  href="https://www.youtube.com/playlist?list=PLPkzS8pOVQOMrPZ_o3Kacg11CE616bjs0">nusrat feteh ali khan</a></h4>
        <h4><a  href="https://www.tseries.com/">T-series</a></h4>
        <h4><a  href="https://www.youtube.com/playlist?list=PLoRGBexfBL8fdwwjPxekfnKnHeY714SNa">mixes</a></h4>
        <h4><a  href="https://www.youtube.com/channel/UCNDOl6WIa22rujba2h6DkLA">palak muchal</a></h4>
        <h4><a  href="https://www.youtube.com/watch?v=8-E1LbChJ88">arjit singh</a></h4>
        <h1><a  href="">></a></h1>
    </div>
    </header>
    <hr class="line">

<!--here we create hero and section slider-->


    <div class="bg1">
     <!-- <div class="bg"></div>-->
     <div class="container1">
    <figure>
        <div class="slide-wrapper1"></div>
        <div class="slider1">

            
                    <video src=dd.webm width="100%" height="500px" controls autoplay muted loop poster=""></video>
                    <video src=Game_of_Thrones_(480p).mp4 width="100%" height="500px" controls autoplay muted loop poster=""></video>
                    <video src= Demon_Slayer__(480p).mp4 width="100%" height="500px" controls autoplay muted loop poster=""></video>
                    <video src=mcqueen.mp4 width="100%" height="500px" controls autoplay muted loop poster=""></video>
                    <video src=obitoo.mp4 width="100%" height="500px" controls autoplay muted loop poster=""></video>
                    <video src=quotes.mp4 width="100%" height="500px" controls autoplay muted loop poster=""></video>
                    <video src=venom.mp4 width="100%" height="500px" controls autoplay muted loop poster=""></video>
        
        </div>
    </figure>
  </div>
    <!-- <video src="dd.webm" width="100%"
     height="500px" controls autoplay  muted loop  poster=""></video>
    </div>-->
   
<!--here header end-->
<!--here div section (box1 or box2) start  in div shots to dawload-->

<hr class="line">
<section class="section">
    <div class="boxleft"><div class="box1">
   
    <a href=""> <h1 class="shots"><i class="fa-regular fa-circle-play"></i></h1></a>
          <p class="shots1">shots</p>
    <a href=""> <h1 class="sub"><i class="fa-solid fa-folder-plus"></i></h1></a>
          <p class="sub1">sub</p>
    <a href=""><h1 class="you"><i class="fa-brands fa-youtube"></i></h1></a>
          <p class="you1">you</p>
    <a href=""><h1 class="dawnload"><i class="fa-solid fa-download"></i></h1></a>
          <p class="dawnload1">dawnload</p>
       
   </div></div>

    <div class="boxright">
        <video src="mcqueen.mp4" controls  width="262px" height="400px" ></video>
    </div>
    <div class="boxx">
        <video src="obitoo.mp4" controls width="262px" height="400px"></video>
    </div>
    <div class="boxxx">
        <video src="Quotes.mp4" controls width="262px" height="400px"></video>
    </div>
    <div class="boxxxx">
        <video src="Shri_krishna_(480p).mp4" controls width="262px" height="400px"></video>
    </div>
    <div class="boxxxxx">
        <video src="venom.mp4" controls width="262px" height="400px"></video>
    </div>
</section>
<!--here box1or box2 end-->
<!--box3 star here you to shorts-->
<hr class="line">

    
<a href=""> <h1 class="you2"><b><u>You></u></b></h1></a>
    <hr class="line">
    <section class="section1">
    <div class="boxleft1"><div class="box3">

    <a href=""> <div class="history"><i class="fa-solid fa-clock-rotate-left"></i></div></a>
    <div class="history1">History</div>
    <a href=""><div class="palylist"><i class="fa-brands fa-playstation"></i></div></a>
    <div class="playlist1">playlist</div>
    <a href=""><div class="watch-leter"><i class="fa-solid fa-clock"></i></div></a>
    <div class="watch-leter1">watch-leter</div>
    <a href=""><div class="like-videos"><i class="fa-brands fa-gratipay"></i></div></a>
    <div class="like-videos1">like-videos</div>
    <a href=""><div class="short3"><i class="fa-regular fa-circle-play"></i></div></a>
    <div class="shorts3">shorts</div>
    </div>
</div>
<div class="boxright1">
   <!--<div class="bg"></div>
</div>-->
<div class="container">
    <figure>
        <div class="slide-wrapper"></div>
        <div class="slider">
            <img   id="slider-10" src="https://demonslayer-anime.com/worldtour2024/ogp.jpg" alt="gaming"> 
            <img   id="slider-5" src="https://i.pinimg.com/736x/9c/c7/1d/9cc71dc7de44c2699c6233ebd6160f5c.jpg" alt="">
            <img id="slider-1" src="https://rukminim2.flixcart.com/image/850/1000/xif0q/poster/n/f/n/small-poster-ben-10-ultimate-alien-and-gwen-sl1133-wall-poster-original-imah38gywj7pymmc.jpeg?q=90&crop=false" alt="fashion">
            <img   id="slider-2" src="https://rukminim2.flixcart.com/image/850/1000/k8t3jbk0/poster/x/7/f/medium-motu-patlu-cartoon-series-decorative-poster-high-original-imafqqnqudfmghxe.jpeg?q=90&crop=false" alt="juwelry">
            <img   id="slider-3" src="https://i.pinimg.com/originals/d3/4d/dc/d34ddc0622a6d2369bc122c52e9be126.png" alt="">
            <img   id="slider-4" src="https://resizing.flixster.com/qivwL5UWJT7GYN5IdZRUg0pmcMQ=/fit-in/352x330/v2/https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p12939834_v_h9_ak.jpg" alt="">
            <img   id="slider-6" src="https://occ-0-8407-1722.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABQALIg8xyXGoJjuv46AGq8M4-nf7V_gOAhL59Il4OUexsD4cABrSWarSzDbY6xoXQKRZrQcpDatwMtKd6HfKcnx3GSNH7CHX7xA.jpg?r=a31" alt="">
            <img   id="slider-7" src="https://www.koimoi.com/wp-content/new-galleries/2023/01/highest-grossing-hollywood-films-at-the-worldwide-box-office-01.jpg" alt="">
            <img   id="slider-8" src="https://static1.cbrimages.com/wordpress/wp-content/uploads/2022/04/The-Best-Anime-Movies.jpg" alt="">
            <img   id="slider-9" src="https://i.ytimg.com/vi/Hq5aaS0c6fo/maxresdefault.jpg" alt="">
            <img   id="slider-10" src="https://demonslayer-anime.com/worldtour2024/ogp.jpg" alt="gaming">   
        </div>
    </figure>
  </div>
   


</section>
<hr class="line">
    <!--here box3 end-->
    <!--box4 start from explor to sports-->
    <div class="explore"><b> <u>Explore</u></b>
        
    <div class="box4">
      
      <a href="">  <div class="trending"><i class="fa-solid fa-fire"></i> Trending</div></a>
        <a href="https://www.flipkart.com/">   <div class="shopping"><i class="fa-solid fa-cart-shopping"></i> Shopping</div></a>
            <a href="https://www.saregama.com/"> <div class="music"><i class="fa-solid fa-music"></i> Music</div></a>
                <a href="https://www.netflix.com/in/title/81091393"><div class="moives"><i class="fa-solid fa-file-video"></i> Moives</div></a>
                    <a href="" ><div class="live"><i class="fa-solid fa-wifi"></i> live</div></a>
                        <a href="https://ff.garena.com/en" ><div class="gaming"><i class="fa-solid fa-headset"></i> Gaming</div></a>
                            <a href="https://www.aajtak.in/" ><div class="news"><i class="fa-solid fa-newspaper"></i> News</div></a>
                                <a href="https://www.bcci.tv/">  <div class="courses"><i class="fa-brands fa-discourse"> </i> Courses</div></a>
                                    <a href="https://www.bcci.tv/" > <div class="sports"><i class="fa-solid fa-dumbbell"></i> Sports</div></a>
                                    
    </div>
    <video src="Demon_Slayer__(480p).mp4" controls width="32.8%" id="slideved"><h3></h3></video>

            <video src="Ultimate_Echo_Echo_vs_Ultimate_Kevin(480p).mp4" controls  width="33%"></video>
    
            <video src="Game_of_Thrones_(480p).mp4" controls width="33%" id="slideved"></video>
    <hr class="line">
      <!--box4 end here-->
    <!--box5 start from service to help-->
    <div class="service"><u><i><b>Service</b>  </i></u></div>
    <div class="box5">
        <fieldset>
            <legend class="RP">REPORT</legend>
            <p>Any member of the YouTube community can flag content to us that they believe violates our Community Guidelines. When something is flagged, it’s not automatically taken down. Flagged content is reviewed in line with the following guidelines:
                Content that violates our Community Guidelines is removed from YouTube.<br>
            </p><p style="background-color: yellow; width:85%;" > Content that may not be appropriate for all younger audiences may be age-restricted.
                Reports filed for content that has been deleted by the creator cannot be shown.</p>
                <u class="u1"><b><i>SOME KEY POINT ABOUT REPORT</i></b>
                    <div class="li1">
                    <LI>sign in YouTube</LI>
                    <LI>Go to the content you want to report</LI>
                    <LI> click more or report</LI>
                    <LI>select the reason for report</LI>
                    <LI>provide any additional details</LI>
                    <li>click report</li>
                </div>
                </u>
                <fieldset>
                    <legend class="feedback">send feedback</legend>
                   <div class="comment">
                    <i class="fa-regular fa-comment"></i>massage
                </div>
                    <textarea rows="5" cols="200">comment here </textarea>
                    <div class="button11">
                    <button class="b1">submit</button>
                    <button class="b2">cancle</button>
                    <button class="b3">ok</button>
                </div>
                </fieldset>
                <fieldset>
                    <legend class="help">HELP</legend>
                    <div class="contact">
                     <a href=""  > <i class="fa-solid fa-phone"></i> 9939200998</a>
                        <a href="https://www.instagram.com/rohhit_21?igsh=MTlnanJsYnU5OGxhdQ=="> <i class="fa-brands fa-instagram"></i>rohhit 21</a>
                            <a href=""><i class="fa-regular fa-envelope"></i> youtube21@gamil.com</a>
                             
                    </div>
                   
                </fieldset>
                
        </fieldset>
    </div>
    <hr class="line">
    <!--here box 5 end -->

    
</body>
</html>