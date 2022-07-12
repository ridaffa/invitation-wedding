<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

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
      }
      .countdown-timer-section {
        background-color: black;
        color: white;
        padding-top: 100px;
        padding-left: 50px;
        padding-right: 50px;
        text-align: justify;
        padding-bottom: 150px;
      }

      .c-timer {
        color: white;
        height: 350px;
        padding-top: 120px;
        background-image: url("./img/100.JPG");
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
        margin-bottom: 100px;
      }

      .location-section {
        background-color: white;
        color: black;
        padding-left: 50px;
        padding-right: 50px;
        text-align: center;
        margin-bottom: 100px;
      }
      .covid-section {
        background-color: white;
        color: black;
        padding-left: 50px;
        padding-right: 50px;
        text-align: center;
        margin-bottom: 100px;
      }
      .live-section {
        background-color: white;
        color: black;
        padding-left: 50px;
        padding-right: 50px;
        text-align: center;
        margin-bottom: 100px;
      }
      .gift-section {
        background-color: white;
        color: black;
        padding-left: 50px;
        padding-right: 50px;
        text-align: center;
        margin-bottom: 100px;
      }
      .message-section {
        background-color: black;
        color: white;
        padding-left: 50px;
        padding-right: 50px;
        padding-bottom: 100px;
        text-align: center;
      }
      .message-container {
        background-color: black;
        color: white;
        height: 600px;
        border: 1px solid;
        margin-bottom: 100px;
        padding: 30px;
        text-align: left;
        overflow: auto;
      }
      .last-section {
        background-color: black;
        color: white;
        padding-bottom: 100px;
        text-align: center;
      }
      .footer-section {
        background-color: black;
        color: white;
        text-align: justify;
      }
      .footer-div {
        color: white;
        height: 350px;
        padding-top: 120px;
        background-image: url("./img/101.JPG");
        background-size: cover;
        text-align: center;
        padding-bottom: 100px;
      }
      .message-box {
        font-size: 16px;
        margin-bottom: 20px;
      }
      .message-box p {
        text-align: left;
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
        padding-bottom: 25px;
        padding-top: 25px;
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

      /* Optional content */
      .optional {
        width: 80%;
        max-width: 680px;
        margin: 6em auto;
        padding: 2em 3em;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.16), 0 3px 12px rgba(0, 0, 0, 0.23);
      }

      @media (max-width: 620px) {
        .info {
          position: absolute;
          width: 100%;
          max-width: 100%;
          bottom: 0;
          right: 0;
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
          padding-left: 70px;
          padding-right: 70px;
        }
        .countdown-timer-section {
          padding-left: 0;
          padding-right: 0;
        }
        .c-timer {
          padding-left: 20px;
          padding-right: 20px;
        }
      }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
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
            <div class="panel" data-img="./img/1.JPG"></div>
            <div class="panel" data-img="./img/2.JPG"></div>
            <div class="panel" data-img="./img/3.JPG"></div>
            <div class="panel" data-img="./img/4.JPG"></div>
            <div class="panel" data-img="./img/5.JPG"></div>
            <div class="panel" data-img="./img/6.JPG"></div>
            <div class="panel" data-img="./img/7.JPG"></div>
            <div class="panel" data-img="./img/8.JPG"></div>
            <div class="panel" data-img="./img/9.JPG"></div>
            <div class="panel" data-img="./img/10.JPG"></div>
            <div class="panel" data-img="./img/11.JPG"></div>
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
        <div class="col-X-12">
          <div class="top-section">
            <p>Join and witness big moments of us</p>
            <p>becoming husband and wife.</p>
            <p style="color: black; font-weight: 700; margin-top: 6em">WEDDING INVITATION</p>
            <p style="color: black; font-weight: 700; font-size: 3em">ALIVA</p>
            <p style="color: black; font-weight: 700; font-size: 2em">&</p>
            <p style="color: black; font-weight: 700; font-size: 3em">ARIF</p>
            <p style="color: white; font-weight: 700; margin-top: 9em">14 AGUSTUS 2022</p>
          </div>
        </div>
        <div id="body-section" class="col-X-12">
          <div class="body-section">
            <center>
              <p>Assalamu ‘alaikum wr. wb. Yang terhormat keluarga dan kerabat,</p>
              <p style="margin-top: 25px">
                Dengan nama Allah yang Maha Pengasih dan Maha Penyayang, dengan memohon rahmat dan ridho Allah SWT, kami bermaksud mengundang keluarga
                dan kerabat untuk menghadiri acara pernikahan kedua putra-putri kami :
              </p>
              <div style="margin-top: 100px">
                <img class="pas-photo" src="./img_potrait/aliva.JPG" alt="" />
              </div>
              <p style="font-size: 36px; margin-top: 25px">Aliva Nur Ulfiah, S.Sn.</p>
              <p>Putri dari Bapak Juarto dan Ibu Warni Suharti</p>
              <p style="margin-top: 100px">&</p>
              <div style="margin-top: 100px">
                <img class="pas-photo" src="./img_potrait/arip.JPG" alt="" />
              </div>
              <p style="font-size: 36px; margin-top: 25px">Muhammad Rifki Nugroho, S. Ds.</p>
              <p>Putra dari Bapak Gatot Gayantoro Tirtokusumo dan Ibu Hellysa Haerunisa</p>
            </center>
          </div>
        </div>
        <div class="col-X-12">
          <div class="countdown-timer-section">
            <center>
              <p style="margin-bottom: 36px; font-size: 36px">Countdown Timer</p>
              <div class="c-timer" style="font-size: 36px">
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
            <p style="font-size: 36px">Wedding Day</p>
            <p>Kami akan tetap sangat berbahagia</p>
            <p>jika Anda dapat hadir secara virtual.</p>
            <br />
            <p style="font-weight: lighter; font-size: 50px">|</p>
            <p style="font-weight: lighter; font-size: 50px">14.08.2022</p>
            <p style="font-weight: lighter; font-size: 50px">|</p>
            <br />
            <p style="font-size: 25px">Akad Nikah</p>
            <p style="font-size: 25px">14:00 WIB</p>
            <br />
            <p style="font-size: 25px">Resepsi</p>
            <p style="font-size: 25px">Sesi 1 (16:30 - 17.45) WIB</p>
            <p style="font-size: 25px">Sesi 2 (19:00 - 21:00) WIB</p>
          </div>
        </div>
        <div id="location-section" class="col-X-12">
          <div class="location-section">
            <p style="font-size: 36px">Lokasi : Villa Basofi</p>
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
                style="width: 80%; heigth: 60%"
              ></iframe>
            </div>
          </div>
        </div>
        <div id="covid-section" class="col-X-12">
          <div class="covid-section">
            <p style="font-size: 36px">Patuhi Protokol Kesehatan</p>
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
            <img width="150" src="./icon/youtube.svg" alt="" />
            <p style="font-size: 36px">Live Streaming</p>
            <p>Bergabunglah dengan live streaming di kanal YouTube untuk menyaksikan momen besar kami.</p>
            <br />
            <a class="btn btn-outline-dark" href="#" role="button">Live Streaming Akad Nikah</a>
          </div>
        </div>
        <div id="gift-section" class="col-X-12">
          <div class="gift-section">
            <p style="font-size: 36px">Wedding Gift</p>
            <p>Wedding Gift Kehadiran Anda di pernikahan kami</p>
            <p>sudah cukup bagi kami. Namun, jika Anda ingin</p>
            <p>memberikan hadiah, kami menyediakan</p>
            <p>sesuatu untuk memudahkan Anda.</p>
            <p>Terima kasih sebelumnya!</p>
            <br />
            <form action="#">
              <select name="destination" class="form-select" aria-label="Tujuan">
                <option selected>Tujuan Penerima</option>
                <option value="1">Mandiri</option>
                <option value="2">BCA</option>
                <option value="3">OVO</option>
                <option value="4">DANA</option>
              </select>
              <br />
              <br />
              <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pengirim" />
              <br />
              <input type="text" name="nama-rekening" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pemilik Rekening" />
              <br />
              <input type="number" name="nominal" class="form-control" id="exampleFormControlInput1" placeholder="Nominal" />
              <br />
              <input type="text" name="pesan" class="form-control" id="exampleFormControlInput1" placeholder="Pesan" />
              <br />
              <input class="btn btn-dark btn-lg" type="submit" value="Selanjutnya >" />
            </form>
          </div>
        </div>
        <div id="message-section" class="col-X-12">
          <div class="message-section">
            <p style="font-size: 36px">Dear Aliva and Arif,</p>
            <p>Tuliskan pesan dan harapan terbaik Anda untuk kami pada kolom di bawah ini.</p>
            <br />
            <form action="#">
              <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pengirim" />
              <br />
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Pesan"></textarea>
              <br />
              <input class="btn btn-dark btn-lg" type="submit" value="Kirim" />
              <br />
            </form>
            <br />
            <br />
            <div class="message-container">
              <div class="message-box">
                <span style="font-size: 26px"> Bambang Sutasno </span>
                <p>Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.</p>
                <br />
                <p style="font-size: 14px">99 Desember 2022, 00:00</p>
              </div>
              <div class="message-box">
                <span style="font-size: 26px"> Bambang Sutasno </span>
                <p>Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.</p>
                <br />
                <p style="font-size: 14px">99 Desember 2022, 00:00</p>
              </div>
              <div class="message-box">
                <span style="font-size: 26px"> Bambang Sutasno </span>
                <p>Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.</p>
                <br />
                <p style="font-size: 14px">99 Desember 2022, 00:00</p>
              </div>
              <div class="message-box">
                <span style="font-size: 26px"> Bambang Sutasno </span>
                <p>Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.</p>
                <br />
                <p style="font-size: 14px">99 Desember 2022, 00:00</p>
              </div>
              <div class="message-box">
                <span style="font-size: 26px"> Bambang Sutasno </span>
                <p>Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.</p>
                <br />
                <p style="font-size: 14px">99 Desember 2022, 00:00</p>
              </div>
              <div class="message-box">
                <span style="font-size: 26px"> Bambang Sutasno </span>
                <p>Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.</p>
                <br />
                <p style="font-size: 14px">99 Desember 2022, 00:00</p>
              </div>
              <div class="message-box">
                <span style="font-size: 26px"> Bambang Sutasno </span>
                <p>Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.</p>
                <br />
                <p style="font-size: 14px">99 Desember 2022, 00:00</p>
              </div>
              <div class="message-box">
                <span style="font-size: 26px"> Bambang Sutasno </span>
                <p>Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.Pesan ini cuman tes.</p>
                <br />
                <p style="font-size: 14px">99 Desember 2022, 00:00</p>
              </div>
            </div>
          </div>
        </div>
        <div id="footer-section" class="col-X-12">
          <div class="footer-section">
            <div class="footer-div">
              <p>"Dan segala sesuatu Kami ciptakan berpasang-pasangan agar kamu"</p>
              <p>mengingat (kebesaran Allah).</p>
              <p style="font-size: 16px">(QS. Az Zariyat: 49)</p>
            </div>
          </div>
        </div>
        <div id="last-section" class="col-X-12">
          <div class="last-section"></div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
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
    <script>
      $(document).ready(function () {
        var win = $(this); //this = window
        if (win.width() < 620) {
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
                  console.log(active);
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
        if (win.width() < 620) {
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
      $("#mail-btn").click(function () {
        var topPos = document.getElementById("message-section").offsetTop;
        $("#right-div").animate({ scrollTop: topPos - 10 });
      });
    </script>
  </body>
</html>
