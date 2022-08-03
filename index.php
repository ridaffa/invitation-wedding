<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta property="og:site_name" content="#endlessgrowth!" />
    <meta
      property="og:title"
      content="Arif & Aliva Wedding"
    />
    <meta
      property="og:description"
      content="Assalamu ‘alaikum wr. wb. Yang terhormat keluarga dan kerabat,Dengan nama Allah yang Maha Pengasih dan Maha Penyayang, dengan memohon rahmat dan ridho Allah SWT, kami bermaksud mengundang keluarga dan kerabat untuk menghadiri acara pernikahan kami"/>
    <meta property="og:image" content="./img_l/7.jpg" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="slider.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Gowun+Batang&display=swap");
      html,
      body {
        overflow: hidden;
        height: 100%;
      }
      .div1 {
        background-color: black;
        height: 100vh;
      }
      .div2 {
        font-family: "Gowun Batang";
        font-style: normal;
        font-weight: 400;
        background-color: white;
        font-size: 1em;
        overflow-y: auto;
        overflow-x: hidden;
        height: 100vh;
      }
      img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
      }
      .img {
        position: absolute;
      }
      .title-text {
        font-family: "Gowun Batang";
        font-style: normal;
        font-weight: 400;
        font-size: 50px;
        line-height: 139px;
        text-align: center;
        color: white;
        z-index: 100;
        position: absolute;
        top: 600px;
        right: 140px;
      }
      .sub-title-text {
        font-family: "Gowun Batang";
        font-style: normal;
        font-weight: 400;
        font-size: 30px;
        line-height: 139px;
        text-align: center;
        color: white;
        z-index: 100;
        position: absolute;
        top: 650px;
        right: 140px;
      }
      .top-section {
        padding-top: 100px;
        color: white;
        height: 100%;
        width: 100%;
        background-image: url("./img_potrait/1.JPG");
        background-size: cover;
        text-align: center;
        padding-bottom: 100px;
        background-position: center;
      }
      .body-section {
        background-color: black;
        color: white;
        padding-top: 100px;
        padding-left: 100px;
        padding-right: 100px;
        padding-bottom: 20px;
        text-align: justify;
        padding-bottom: 100px;
      }

      .photo-section {
        background-color: white;
        color: black;
        text-align: justify;
        margin-bottom: 50px;
      }
      .photo-section-garis {
        width: 0px;
        height: 71.5px;
        left: 201px;
        top: 1515px;
        border: 1px solid #000000;
        background: black;
      }
      .photo-section-garis-putih {
        width: 0px;
        height: 71.5px;
        left: 201px;
        top: 1515px;
        border: 1px solid #000000;
        background: white;
      }
      .countdown-timer-section {
        background-color: black;
        color: white;
        padding-top: 100px;
        padding-left: 50px;
        padding-right: 50px;
        text-align: justify;
        padding-bottom: 50px;
      }

      .c-timer {
        color: white;
        height: 350px;
        padding-top: 120px;
        background-image: url("./img_l/100.JPG");
        background-size: contain;
        background-repeat: no-repeat;
        text-align: center;
      }

      .schedule-section {
        background-color: white;
        color: black;
        padding-top: 100px;
        padding-left: 50px;
        padding-right: 50px;
        text-align: center;
        margin-bottom: 50px;
      }

      .location-section {
        background-color: white;
        color: black;
        padding-left: 50px;
        padding-right: 50px;
        text-align: center;
        margin-bottom: 50px;
      }
      .covid-section {
        background-color: black;
        color: white;
        padding-left: 50px;
        padding-right: 50px;
        text-align: center;
        margin-bottom: 50px;
        padding-bottom: 50px;
        padding-top: 50px;
      }
      .live-section {
        background-color: white;
        color: black;
        padding-left: 50px;
        padding-right: 50px;
        text-align: center;
        margin-bottom: 50px;
      }
      .gift-section {
        background-color: white;
        color: black;
        padding-left: 50px;
        padding-right: 50px;
        text-align: center;
        margin-bottom: 50px;
      }
      .message-section {
        background-color: black;
        color: white;
        padding-left: 50px;
        padding-right: 50px;
        padding-bottom: 100px;
        text-align: center;
        padding-top: 50px;
      }
      .message-container {
        background-color: black;
        color: white;
        height: 600px;
        border: 1px solid;
        margin-bottom: 50px;
        padding: 30px;
        text-align: left;
        overflow: auto;
      }
      .last-section {
        background-color: black;
        color: white;
        text-align: center;
        color: white;
        padding-top: 50px;
        text-align: center;
        font-size: 15px;
        padding-bottom: 10px;
      }
      .footer-section {
        background-color: black;
        color: white;
        text-align: justify;
      }
      .footer-div {
        color: white;
        background-image: url("./img_l/101.JPG");
        background-repeat: no-repeat;
        background-size: 100%;
        height: 50vh;
        padding-top: 25%;
      }
      .message-box {
        font-size: 16px;
        margin-bottom: 20px;
      }
      .message-box p {
        text-align: left;
        max-width: 200px;
        word-wrap: break-word;
      }
      .menu-button {
        position: absolute;
        z-index: 101;
        right: 20px;
        bottom: 250px;
      }
      .menu-button-list {
        background-color: #d9d9d9;
        display: block;
        text-align: center;
        width: 100%;
        padding: 0;
        padding-bottom: 20px;
        padding-top: 20px;
        margin: 0;
        border-radius: 50px;
      }
      li {
        margin-bottom: 10px;
      }
      p {
        overflow: hidden;
        margin: 0;
        text-align: center;
      }
      .pas-photo {
        border-radius: 50%;
      }
      span {
        word-spacing: normal;
        letter-spacing: normal;
        display: inline-block;
      }
      ul {
        list-style-type: none;
      }

      .container {
        width: 100%;
        height: 100%;
        max-height: 100%;
        margin: 0;
        padding: 0;
      }

      /* Panels */
      .swipe {
        width: 100%;
        height: 100%; /* "min-height" doesn't work on Firefox. */
        background: #eee;
        overflow-x: hidden;
      }

      .panel {
        position: absolute;
        width: 100%;
        min-height: 100%;
        top: 0;
        left: 0;
        padding: 20px;
      }

      .left {
        left: -100%;
      }

      .right {
        left: 100%;
      }

      .name-title {
        font-size: 20px;
      }

      .pas-photo-div {
        margin-top: 50px;
      }

      .pas-photo-and {
        margin-top: 50px;
      }

      /* Optional content */
      .optional {
        width: 80%;
        max-width: 680px;
        margin: 6em auto;
        padding: 2em 3em;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.16), 0 3px 12px rgba(0, 0, 0, 0.23);
      }

      #sound-btn {
        background: white;
        position: fixed;
        margin: 12px;
        border-radius: 100px;
        padding: 10px;
        z-index: 100;
      }

      .landing-page {
        width: 100%;
        height: 100%;
        background: black;
        background-image: url("./img_l/landing-page.jpg");
        background-position: center;
        background-size: cover;
        text-align: center;
        color: white;
      }
      .btn-custom {
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0);
        border-color: white;
        font-size: 12px;
      }
      .landing-page{
        display: none;
      }
      .loading {
        font-weight: bold;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        z-index: 1000;
        width: 100%;
        height: 100%;
        padding-top: 25%;
        backdrop-filter: blur(10px) saturate(70%);
        display: none;
     }

      .loading__author {
        font-weight: normal;
        font-size: 0.9rem;
        color: rgba(189,189,189 ,1);
        margin: 0.6rem 0 2rem 0;
        display: block;
      }

      .loading__anim {
        width: 35px;
        height: 35px;
        border:  5px solid rgba(189,189,189 ,0.25);
        border-left-color: rgba(3,155,229 ,1);
        border-top-color: rgba(3,155,229 ,1);
        border-radius: 50%;
        display: inline-block;
        animation: rotate 600ms infinite linear;
      }

      @keyframes rotate {
        to {
          transform: rotate(1turn)
        }
      }

      @media (max-width: 750px) {
        .info {
          position: absolute;
          width: 100%;
          max-width: 100%;
          bottom: 0;
          right: 0;
        }
        .landing-page{
        display: block;
      }

        .inner {
          padding: 0.5em 1.5em;
          box-shadow: none;
        }

        .buttons {
          display: none;
        }
        p {
          overflow: hidden;
          margin: 1px;
          text-align: center;
        }
        .body-section {
          padding-left: 50px;
          padding-right: 50px;
          font-size: 0.7em;
        }
        .countdown-timer-section {
          padding-left: 0;
          padding-right: 0;
        }
        .c-timer {
          padding-left: 20px;
          padding-right: 20px;
        }

        .name-title {
          font-size: 20px;
        }
        #body-section img {
          max-width: 50%;
          max-height: 50%;
          object-fit: contain;
        }
        .div2 {
          overflow-y: hidden;
        }
        .footer-div {
          height: 25vh;
          padding-top: 15%;
        }
      }
    </style>
    <title>#endlessgrowth!</title>
  </head>
  <body>
      <section class="loading">      
      <span class="loading__anim"></span>
    </section>
    <audio id="music" class="my_audio" controls preload="none" autoplay style="display: none">
      <source src="./music.mp3" type="audio/mpeg" />
    </audio>

    <div class="row no-gutters">
      <div id="left-div" class="col-8 div1">
        <div style="position: relative">
          <p class="title-text">ALIVA & ARIF</p>
          <p class="sub-title-text">14.08.2022</p>
        </div>
        <div class="menu-button">
          <ul style="background-color: #d9d9d9; display: block; text-align: center; width: 100%; margin: 0; padding: 10px; border-radius: 50px">
            <li>
              <a id="kado-btn" href="#"><img src="./icon/kado.svg" alt="" /></a>
            </li>
          </ul>
          <br />
          <ul class="menu-button-list">
            <li>
              <a id="heart-btn" href="#"><img src="./icon/heart.svg" alt="" /></a>
            </li>
            <li>
              <a id="calendar-btn" href="#"><img src="./icon/calendar.svg" alt="" /></a>
            </li>
            <li>
              <a id="maps-btn" href="#"><img src="./icon/maps.svg" alt="" /></a>
            </li>
            <li>
              <a id="image-btn" href="#"><img src="./icon/image.svg" alt="" /></a>
            </li>
            <li>
              <a id="mail-btn" href="#"><img src="./icon/mail.svg" alt="" /></a>
            </li>
          </ul>
        </div>
        <div class="container">
          <!-- Panels -->
          <div class="swipe">
            <div class="panel" data-img="./img_l/1.jpg"></div>
            <div class="panel" data-img="./img_l/2.jpg"></div>
            <div class="panel" data-img="./img_l/3.jpg"></div>
            <div class="panel" data-img="./img_l/4.jpg"></div>
            <div class="panel" data-img="./img_l/5.jpg"></div>
            <div class="panel" data-img="./img_l/6.jpg"></div>
            <div class="panel" data-img="./img_l/7.jpg"></div>
            <div class="panel" data-img="./img_l/8.jpg"></div>
            <div class="panel" data-img="./img_l/9.jpg"></div>
            <div class="panel" data-img="./img_l/10.jpg"></div>
            <div class="panel" data-img="./img_l/11.jpg"></div>
          </div>
        </div>

        <!-- 
        ==================
        ==================
        Optional Content 
        ==================
        ==================
        <div class="optional">  
          <h3>Lorem ipsum dolor sit amet.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus asperiores natus minus ab sit. Ipsum iste, doloribus suscipit ducimus ea repudiandae consequatur soluta repellat saepe fuga, velit odit odio facilis, at sunt quis quo molestias quae. Ullam nisi, error facilis nobis maxime numquam quaerat, voluptatibus sit debitis ea quasi incidunt?</p>
        </div>
        -->

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" />
      </div>
      <div id="right-div" class="col-4 div2">
        <div class="landing-page" style="padding-top: 50%">
          <center>
            <div style="">
              <img width="30" src="./icon/aalogo.png" alt="">
              <p style="font-size: 2em">ALIVA & ARIF</p>
            </div>
            <br />
            <div class="photo-section-garis-putih"></div>
            <br />
            <a href="#" id="open-invitation" class="btn btn-dark btn-lg btn-custom" value="Open Invitation">Open Invitation</a>
            <br />
            <br />
            <p>Kepada Yth. Bapak/Ibu/Saudara/i</p>
            <p style="font-weight:bold;"><?php echo $_GET['to']  ?></p>
            <p></p>
          </center>
        </div>
        <div class="col-X-12">
          <a id="sound-btn" href="#"><img id="sound-img" width="25" src="./icon/nomusic.png" alt="" /></a>
        </div>
        <div class="col-X-12">
          <div class="top-section">
            <p>Join and witness big moments of us</p>
            <p>becoming husband and wife.</p>
            <p style="color: black; font-weight: 700; margin-top: 6em">WEDDING INVITATION</p>
            <p style="color: black; font-weight: 700; font-size: 3em">ALIVA</p>
            <p style="color: black; font-weight: 700; font-size: 2em">&</p>
            <p style="color: black; font-weight: 700; font-size: 3em">ARIF</p>
            <p style="color: black; font-weight: 1; font-size: 1em">#endlessgrowth</p>
            <p style="color: white; font-weight: 700; margin-top: 9em">14 AGUSTUS 2022</p>
          </div>
        </div>
        <div id="body-section" class="col-X-12">
          <div class="body-section">
            <center>
              <p>Assalamu ‘alaikum wr. wb.</p>
              <p>Yang terhormat keluarga dan kerabat,</p>
              <p style="margin-top: 20px">
                Dengan nama Allah yang Maha Pengasih dan Maha Penyayang, dengan memohon rahmat dan ridho Allah SWT, kami bermaksud mengundang keluarga
                dan kerabat untuk menghadiri acara pernikahan kedua putra-putri kami :
              </p>
              <div class="pas-photo-div">
                <img class="pas-photo" src="./img_potrait/aliva.JPG" alt="" />
              </div>
              <p class="name-title" style="margin-top: 20px">Aliva Nur Ulfiah, S.Sn.</p>
              <p>Putri pertama dari Bapak Juarto dan Ibu Warni Suharti</p>
              <p class="name-title pas-photo-and">&</p>
              <div class="pas-photo-div">
                <img class="pas-photo" src="./img_potrait/arip.JPG" alt="" />
              </div>
              <p class="name-title" style="margin-top: 20px">M Rifki Nugroho, S. Ds.</p>
              <p>Putra kedua dari Bapak Gatot Gayantoro Tirtokusumo dan Ibu Hellysa Haerunisa</p>
              <br />
              <br />
              <br />
              <p>
                Merupakan suatu kehormatan dan kebahagiaan besar bagi kami apabila keluarga dan kerabat berkenan hadir untuk memberikan doa restu
                untuk putra-putri kami.
              </p>
            </center>
          </div>
        </div>
        <div id="photo-section" class="col-X-12">
          <div class="photo-section">
            <center>
              <div class="photo-section-garis"></div>
              <br />
              <p style="font-size: 0.8em">glimpse of us,</p>
              <br />
              <br />
              <div id="slider-mobile" class="slider">
                <div><img src="./img_l/1.jpg" alt="" /></div>
                <div><img src="./img_l/2.jpg" alt="" /></div>
                <div><img src="./img_l/3.jpg" alt="" /></div>
                <div><img src="./img_l/4.jpg" alt="" /></div>
                <div><img src="./img_l/5.jpg" alt="" /></div>
                <div><img src="./img_l/6.jpg" alt="" /></div>
                <div><img src="./img_l/7.jpg" alt="" /></div>
                <div><img src="./img_l/8.jpg" alt="" /></div>
                <div><img src="./img_l/9.jpg" alt="" /></div>
                <div><img src="./img_l/10.jpg" alt="" /></div>
                <div><img src="./img_l/11.jpg" alt="" /></div>
              </div>
            </center>
          </div>
        </div>
        <div class="col-X-12">
          <div class="countdown-timer-section">
            <center>
              <p style="margin-bottom: 20px; font-size: 20px">Countdown Timer</p>
              <div class="c-timer" style="font-size: 20px">
                <div class="row">
                  <div class="col-3">
                    <span id="ctday">0</span>
                  </div>
                  <div class="col-3">
                    <span id="cthour">0</span>
                  </div>
                  <div class="col-3">
                    <span id="ctminute">0</span>
                  </div>
                  <div class="col-3">
                    <span id="ctsec">0</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <span>Day</span>
                  </div>
                  <div class="col-3">
                    <span>Hour</span>
                  </div>
                  <div class="col-3">
                    <span>Min</span>
                  </div>
                  <div class="col-3">
                    <span>Sec</span>
                  </div>
                </div>
              </div>
            </center>
          </div>
        </div>
        <div id="schedule-section" class="col-X-12">
          <div class="schedule-section">
            <p style="font-size: 20px; font-weight: bold">Wedding Day</p>
            <p>Kami akan sangat berbahagia jika anda dapat hadir ke acara pernikahan kami.</p>
            <br />
            <p style="font-weight: lighter; font-size: 50px">|</p>
            <p style="font-weight: lighter; font-size: 50px">14.08.2022</p>
            <p style="font-weight: lighter; font-size: 50px">|</p>
            <br />
            <p style="font-size: 20px; font-weight: bold">Akad Nikah</p>
            <p style="font-size: 20px">14:00 WIB</p>
            <br />
            <p style="font-size: 20px; font-weight: bold">Resepsi</p>
            <?php 
            $page = 3;
            if (empty($_GET['sesi'])) {
              $page = 3;
            }else if (is_numeric($_GET['sesi'])){
              $page = (int) $_GET['sesi'];
            }else {
              $page = 3;
            }
            if($page == 1){
              echo '<p style="font-size: 20px" id="sesi1-text">16:30 - 18.30 WIB</p>';
            }else if($page == 2){
              echo '<p style="font-size: 20px" id="sesi2-text">19:00 - 21:00 WIB</p>';
            }else{
              echo '<p style="font-size: 20px" id="sesi1-text">Sesi 1: 16:30 - 18.30 WIB</p>';
              echo '<p style="font-size: 20px" id="sesi2-text">Sesi 2: 19:00 - 21:00 WIB</p>';
            }
            ?>
            
          </div>
        </div>
        <div id="location-section" class="col-X-12">
          <div class="location-section">
            <p style="font-size: 20px; font-weight: bold">Lokasi : Villa Basofi</p>
            <p>Jl. Raya Pd. Ranggon Barat No.11, Pd. Ranggon,</p>
            <p>Kec. Cipayung, Kota Jakarta Timur, DKI Jakarta</p>
            <br />
            <div>
              <iframe
                id="gmap_canvas"
                src="https://maps.google.com/maps?q=Villa%20Basofi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
                style="width: 80%; height: 60%"
              ></iframe>
            </div>
          </div>
        </div>
        <div id="covid-section" class="col-X-12">
          <div class="covid-section">
            <p style="font-size: 20px; font-weight: bold">Patuhi Protokol Kesehatan</p>
            <p>Tanpa mengurangi rasa hormat,</p>
            <p>acara ini menerapkan Protokol Kesehatan, sesuai dengan peraturan & rekomendasi pemerintah.</p>
            <br />
            <div class="row">
              <div class="col-6">
                <img width="100" src="./icon/mask.png" alt="" />
                <p>Wajib</p>
                <p>menggunakan masker</p>
                <p>saat acara</p>
              </div>
              <div class="col-6">
                <img width="100" src="./icon/wash.png" alt="" />
                <p>Mencuci tangan dan</p>
                <p>menggunakan</p>
                <p>hand sanitizier</p>
              </div>
            </div>
            <br />
            <div class="row">
              <div class="col-6">
                <img width="100" src="./icon/socialdistancing.png" alt="" />
                <p>Menjaga jarak 2 meter</p>
                <p>dengan tamu undangan</p>
                <p>lainnya</p>
              </div>
              <div class="col-6">
                <img width="100" src="./icon/avoid.png" alt="" />
                <p>Menghindari kontak fisik</p>
                <p>dengan tamu undangan</p>
                <p>lainnya</p>
              </div>
            </div>
          </div>
        </div>
        <div id="live-section" class="col-X-12">
          <div class="live-section">
            <img width="75" src="./icon/youtube.png" alt="" /> 
            <p style="font-size: 20px; font-weight: bold">Live Streaming</p>
            <p>Bergabunglah dengan live streaming di kanal YouTube untuk menyaksikan momen besar kami.</p>
            <br />
            <a class="btn btn-outline-dark" href="https://youtube.com/channel/UCDaMZkieD9rdZO_Fc31S_GQ" role="button" target="_blank"
              >Live Streaming Akad Nikah</a
            >
          </div>
        </div>
        <div id="gift-section" class="col-X-12">
          <div class="gift-section">
            <p style="font-size: 20px; font-weight: bold">Wedding Gift</p>
            <p>
              Your blessing and coming to our wedding are enough for us. However, if you want to give a gift we provide something to make it easier
              for you. Thank you in advance!
            </p>
            <br />
            <form action="#">
              <select id="dest-bank" name="destination" class="form-select" aria-label="Tujuan">
                <option selected>Tujuan Penerima</option>
                <option value="1">Mandiri</option>
                <option value="2">BCA</option>
              </select>
              <br />
              <div id="detail-bank"></div>
            </form>
          </div>
        </div>
        <div id="message-section" class="col-X-12">
          <div class="message-section">
            <p style="font-size: 20px">Dear Aliva and Arif,</p>
            <p>Tuliskan pesan dan harapan terbaik Anda untuk kami pada kolom di bawah ini.</p>
            <br />
            <form action="#">
              <input type="text" id="field-name-message" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pengirim" />
              <br />
              <textarea
                id="field-message-message"
                name="message"
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="5"
                placeholder="Pesan"
                onkeyup="countChar(this)"
              ></textarea>
              <div id="charNum" style="text-align: right">500</div>
              <br />
              <a id="submit-form-message" class="btn btn-dark btn-lg" value="Kirim">Kirim</a>
              <br />
            </form>
            <br />
            <br />
            <div class="message-container">

            </div>
            <div id="page-id">
            <button class="btn btn-outline-light" onclick="prevPage()">prev</button>
              <span id="page-now">1</span><span>/</span><span id="last-page">1</span>
              <button class="btn btn-outline-light" onclick="nextPage()">next</button>
            </div>
          </div>
        </div>
        <div id="footer-section" class="col-X-12">
          <div class="footer-section">
            <div class="footer-div">
              <p>"Dan segala sesuatu Kami ciptakan berpasang-pasangan agar kamu mengingat (kebesaran Allah)."</p>
              <p style="font-size: 16px">(QS. Az Zariyat: 49)</p>
            </div>
          </div>
        </div>
        <div id="last-section" class="col-X-12">
          <div class="last-section">
            <p><span>Powered By &nbsp;&nbsp;</span>
          <a href="https://instagram.com/studiokimal" target="_blank"><img width="50" src="./icon/km_logo.png" alt=""></a><span>&nbsp;&nbsp;& &nbsp;&nbsp;<a style="color:white"href="https://www.linkedin.com/in/ridaffa/" target="_blank">Ridaffa</a></span></p>
          
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="slider.js" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function () {
        const urlParams = new URLSearchParams(window.location.search);
        const giftparam = urlParams.get('gift');
        if(giftparam == 0){
          $('#gift-section').hide()
          $('#kado-btn').hide()
        }else{
          $('#gift-section').show()
          $('#kado-btn').show()
        }
        var win = $(this); //this = window
        if (win.width() < 750) {
          $("#left-div").removeClass("col-8");
          $("#right-div").removeClass("col-4");
          $("#right-div").addClass("col-12");
          $("#left-div").hide();
        } else {
          $("#right-div").removeClass("col-12");
          $("#right-div").addClass("col-4");
          $("#left-div").addClass("col-8");
          $("#left-div").show();
        }
        //Swipe speed:
        var tolerance = 100; //px.
        var speed = 650; //ms.

        //Elements:
        var interactiveElements = $("input, button, a");
        var itemsLength = $(".panel").length;
        var active = 1;

        //Background images:
        for (i = 1; i <= itemsLength; i++) {
          var $layer = $(".panel:nth-child(" + i + ")");
          var bgImg = $layer.attr("data-img");
          $layer.css({
            background: "url(" + bgImg + ") no-repeat center / cover",
          });
        }

        //Transitions:
        setTimeout(function () {
          $(".panel").css({
            transition: "cubic-bezier(.4,.95,.5,1.5) " + speed + "ms",
          });
        }, 200);

        //Presets:
        $(".panel:not(:first)").addClass("right");

        //Swipe:
        function swipeScreen() {
          $(".swipe").on("mousedown touchstart", function (e) {
            var touch = e.originalEvent.touches;
            var start = touch ? touch[0].pageX : e.pageX;
            var difference;

            $(this).on("mousemove touchmove", function (e) {
              var contact = e.originalEvent.touches,
                end = contact ? contact[0].pageX : e.pageX;
              difference = end - start;
            });

            //On touch end:
            $(window).one("mouseup touchend", function (e) {
              e.preventDefault();

              //Swipe right:
              if (difference < -tolerance) {
                $(".panel:nth-child(" + active + ")").addClass("left");
                $(".panel:nth-child(" + (active + 1) + ")").removeClass("right");
                if (active < itemsLength) {
                  active += 1;
                } else {
                  active = 1;
                  $(".panel:nth-child(" + active + ")").removeClass("left");
                  for (var i = 2; i <= itemsLength; i++) {
                    $(".panel:nth-child(" + i + ")").removeClass("left");
                    $(".panel:nth-child(" + i + ")").addClass("right");
                  }
                }
              }

              // Swipe left:
              if (difference > tolerance) {
                if (active > 1) {
                  $(".panel:nth-child(" + (active - 1) + ")").removeClass("left");
                  $(".panel:nth-child(" + active + ")").addClass("right");
                  active -= 1;
                } else {
                  active = itemsLength;
                  $(".panel:nth-child(" + active + ")").removeClass("right");
                  for (var i = itemsLength - 1; i >= 1; i--) {
                    $(".panel:nth-child(" + i + ")").removeClass("right");
                    $(".panel:nth-child(" + i + ")").addClass("left");
                  }
                }
              }

              $(".swipe").off("mousemove touchmove");
            });
          });
        }
        swipeScreen();

        //Prevent swipe on interactive elements:
        interactiveElements.on("touchstart touchend touchup", function (e) {
          e.stopPropagation();
        });
        setInterval(function () {
          $(".panel:nth-child(" + active + ")").addClass("left");
          $(".panel:nth-child(" + (active + 1) + ")").removeClass("right");
          if (active < itemsLength) {
            active += 1;
          } else {
            active = 1;
            $(".panel:nth-child(" + active + ")").removeClass("left");
            for (var i = 2; i <= itemsLength; i++) {
              $(".panel:nth-child(" + i + ")").removeClass("left");
              $(".panel:nth-child(" + i + ")").addClass("right");
            }
          }
        }, 4000);
      });
    </script>
    <script>
      // Set the date we're counting down to
      var countDownDate = new Date("Aug 14, 2022 07:00:00").getTime();

      // Update the count down every 1 second
      var x = setInterval(function () {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("ctday").innerHTML = days;
        document.getElementById("cthour").innerHTML = hours;
        document.getElementById("ctminute").innerHTML = minutes;
        document.getElementById("ctsec").innerHTML = seconds;

        // If the count down is finished, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("ctday").innerHTML = 0;
          document.getElementById("cthour").innerHTML = 0;
          document.getElementById("ctminute").innerHTML = 0;
          document.getElementById("ctsec").innerHTML = 0;
        }
      }, 1000);
    </script>
    <script>
      $(window).on("resize", function () {
        var win = $(this); //this = window
        if (win.width() < 750) {
          $("#left-div").removeClass("col-8");
          $("#right-div").removeClass("col-4");
          $("#right-div").addClass("col-12");
          $("#left-div").hide();
        } else {
          $("#right-div").removeClass("col-12");
          $("#right-div").addClass("col-4");
          $("#left-div").addClass("col-8");
          $("#left-div").show();
        }
      });
    </script>
    <script>
      var srcMusicImg = "./icon/nomusic.png";
      var music = true;
      $("#open-invitation").click(function(){
        music = false;
        srcMusicImg = "./icon/music.png";
        document.getElementById("music").play();
        $("#sound-img").attr("src", srcMusicImg);
        $(".landing-page").hide();
        $(".div2").css({'overflow-y': 'auto'});
      })
      $("#sound-btn").click(function () {
        if (music) {
          music = false;
          srcMusicImg = "./icon/music.png";
          document.getElementById("music").play();
        } else {
          music = true;
          srcMusicImg = "./icon/nomusic.png";

          document.getElementById("music").pause();
        }
        $("#sound-img").attr("src", srcMusicImg);
      });
      $("#kado-btn").click(function () {
        var topPos = document.getElementById("gift-section").offsetTop;
        $("#right-div").animate({ scrollTop: topPos - 10 });
      });
      $("#heart-btn").click(function () {
        var topPos = document.getElementById("body-section").offsetTop;
        $("#right-div").animate({ scrollTop: topPos - 10 });
      });
      $("#calendar-btn").click(function () {
        var topPos = document.getElementById("schedule-section").offsetTop;
        $("#right-div").animate({ scrollTop: topPos - 10 });
      });
      $("#maps-btn").click(function () {
        var topPos = document.getElementById("location-section").offsetTop;
        $("#right-div").animate({ scrollTop: topPos - 10 });
      });
      $("#image-btn").click(function () {
        var topPos = document.getElementById("photo-section").offsetTop;
        $("#right-div").animate({ scrollTop: topPos - 10 });
      });
      $("#mail-btn").click(function () {
        var topPos = document.getElementById("message-section").offsetTop;
        $("#right-div").animate({ scrollTop: topPos - 10 });
      });
      function countChar(val) {
        var len = val.value.length;
        if (len >= 500) {
          val.value = val.value.substring(0, 500);
        } else {
          $("#charNum").text(500 - len);
        }
      }
    </script>
    <script>
      var page = 1
      $("#page-now").html(page)
      var maxPage = 1
      var messageData = []
      function getMessage() {
        $.post("./get_message.php", function (data) {
          messageData = data.message
          maxPage = Math.ceil(data.message.length/10);
          $("#last-page").html(maxPage)
          showMessage(page, data.message);
        });
      }
      function showMessage(page, message){
        $("#page-now").html(page)
          var text = "";
          for (var i = message.length-((page-1)*10); i > message.length-(page*10); i--) {
            if(i > 0){
              text += '<div class="message-box">';
              text += '<span style="font-size: 26px"> ' + message[i - 1]?.name + " </span>";
              text += "<p>" + message[i - 1]?.message + "</p>";
              text += '<br /><p style="font-size: 14px">' + message[i - 1]?.time + "</p>";
              text += "</div>";
            }
          }
          $(".message-container").html(text);
      }
      getMessage();
      $("#submit-form-message").click(function () {
        var name = $("#field-name-message").val();
        var message = $("#field-message-message").val();
        var time = new Date().toLocaleString("en-ID", { timeZone: "Asia/Jakarta" });
        if (name.length < 4) {
          alert("name must be more than 4 characters");
        }else if(name.length >= 50){
          alert("maximum name 50 characters");
        } else {
          if (message.length < 10) {
            alert("message must be more than 10 characters");
          } else if (message.length >= 500) {
            alert("to much message!");
          } else {
            
            $('.loading').show();
            var message = {
              name: name,
              message: message,
              time: time,
            };
            request = $.ajax({
              url: "./new_message.php",
              type: "post",
              data: message,
            });

            // Callback handler that will be called on success
            request.done(function (response, textStatus, jqXHR) {
              
              if (response.status == "done") {
                $('.loading').hide();
                alert("Pesan berhasil terkirim!");
                page = 1
                getMessage();
              } else {
                $('.loading').hide();
                alert("Pesan gagal terkirim!");
              }
            });
          }
        }
      });
      function nextPage(){
        if(page < maxPage){
          page += 1;
          showMessage(page, messageData)
        }
      }
      function prevPage(){
        if(page > 1){
          page -= 1;
          showMessage(page, messageData)
        }
      }
    </script>
    <script>
      $("#dest-bank").on("change", function () {
        if (this.value == 1) {
          $("#detail-bank").html("<br/><p>Bank Mandiri</p><p>Account Number: 131-00-123-1796-4</p><p>Atas Nama: Muhammad Rifki Nugroho</p>");
        } else if (this.value == 2) {
          $("#detail-bank").html(
            `<br/><img src="./icon/qr.jpeg" alt="" width="200"><br/><p>Bank BCA</p><p>Account Number: 4060801709</p><p>Atas Nama: Aliva Nur Ulfiah</p>`
          );
        } else {
          $("#detail-bank").html("");
        }
      });
    </script>
  </body>
</html>
