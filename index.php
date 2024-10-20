<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chúc Mừng Ngày 20/10!</title>
    <link rel="stylesheet" href="/huykaiser/css/style.css">
    <style>
      @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.2); }
        100% { transform: scale(1); }
      }

      .glow {
        background: linear-gradient(90deg, #ff0080, #ff8c00, #40e0d0);
        background-size: 400%;
        color: white;
        animation: glow 5s ease-in-out infinite;
        padding: 10px 20px;
        border-radius: 10px;
        border: none;
        font-size: 18px;
        cursor: pointer;
        margin-top: 20px;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
      }

      @keyframes glow {
        0% { background-position: 0%; }
        50% { background-position: 100%; }
        100% { background-position: 0%; }
      }

      input[type="text"] {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        margin-top: 20px;
        width: 70%;
        font-size: 16px;
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        text-align: center;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
      }

      .hksrdxk {
        position: fixed;
        top: -10%;
        z-index: 9999;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: default;
        -webkit-animation-name: hksrdx-fall, hksrdx-shake;
        -webkit-animation-duration: 10s, 3s;
        -webkit-animation-timing-function: linear, ease-in-out;
        -webkit-animation-iteration-count: infinite, infinite;
        -webkit-animation-play-state: running, running;
        animation-name: hksrdx-fall, hksrdx-shake;
        animation-duration: 10s, 3s;
        animation-timing-function: linear, ease-in-out;
        animation-iteration-count: infinite, infinite;
        animation-play-state: running, running;
      }

      .hksrdxk:nth-of-type(0) { left: 1%; animation-delay: 0s, 0s; }
      .hksrdxk:nth-of-type(1) { left: 10%; animation-delay: 1s, 1s; }
      .hksrdxk:nth-of-type(2) { left: 20%; animation-delay: 6s, 0.5s; }
      .hksrdxk:nth-of-type(3) { left: 30%; animation-delay: 4s, 2s; }
      .hksrdxk:nth-of-type(4) { left: 40%; animation-delay: 2s, 2s; }
      .hksrdxk:nth-of-type(5) { left: 50%; animation-delay: 8s, 3s; }
      .hksrdxk:nth-of-type(6) { left: 60%; animation-delay: 6s, 2s; }
      .hksrdxk:nth-of-type(7) { left: 70%; animation-delay: 2.5s, 1s; }
      .hksrdxk:nth-of-type(8) { left: 80%; animation-delay: 1s, 0s; }
      .hksrdxk:nth-of-type(9) { left: 90%; animation-delay: 3s, 1.5s; }

      @keyframes hksrdx-fall {
        0% { top: -10%; }
        100% { top: 100%; }
      }

      @keyframes hksrdx-shake {
        0% { transform: translateX(0px); }
        50% { transform: translateX(80px); }
        100% { transform: translateX(0px); }
      }
    </style>
  </head>
  <body>

  <div class="hksrdx" aria-hidden="true">
  <div class="hksrdxk" style="font-size: 30px;">🌸</div>
  <div class="hksrdxk">🌼</div>
  <div class="hksrdxk" style="font-size: 40px;">🌻</div>
  <div class="hksrdxk">🌷</div>
  <div class="hksrdxk" style="font-size: 30px;">💐</div>
  <div class="hksrdxk" style="font-size: 22px;">🌹</div>
  <div class="hksrdxk" style="font-size: 50px;">🌻</div>
  <div class="hksrdxk" style="font-size: 20px;">🌸</div>
  <div class="hksrdxk" style="font-size: 70px;">🌷</div>
  <div class="hksrdxk" style="font-size: 20px;">🌼</div>
</div>
    <div class="container">
      <div id="hksflx"></div>
      <div class="hkstlx">
        <?php for ($i = 0; $i < 70; $i++): ?>
          <div style="top: <?= rand(0, 100); ?>%; left: <?= rand(0, 100); ?>%; animation-delay: <?= rand(0, 2000) / 1000; ?>s;"></div>
        <?php endfor; ?>
      </div>
      <?php
        function xsshks($data) {
          return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
        }

        $name = isset($_POST['name']) ? xsshks($_POST['name']) : '';
        $mess = [
          "Chúc mừng ngày 20/10! Mong rằng $name sẽ luôn rạng ngời, tươi tắn và tràn đầy niềm vui.",
          "$name ơi, chúc bạn có một ngày 20/10 thật hạnh phúc, được yêu thương và quan tâm hết mực!",
          "Ngày 20/10 này, mong rằng $name sẽ nhận được những điều tuyệt vời nhất! Bạn xứng đáng với mọi niềm vui trong cuộc sống.",
          "Chúc $name ngày 20/10 tràn đầy hạnh phúc và luôn rực rỡ như những bông hoa tươi thắm.",
          "$name, hãy luôn tự tin và tỏa sáng như cách bạn luôn là nhé! Chúc mừng ngày 20/10 tuyệt vời của bạn!",
          "20/10 là ngày để tôn vinh những người phụ nữ tuyệt vời như $name! Hãy tận hưởng những khoảnh khắc tuyệt vời nhất.",
          "Mong rằng $name sẽ luôn được yêu thương, hạnh phúc và thành công trong mọi điều bạn làm. Chúc mừng ngày 20/10!",
          "Ngày 20/10 này, $name ơi, chúc bạn một ngày tràn đầy nụ cười và hạnh phúc như những ngôi sao sáng trên bầu trời!"
        ];

        $rdmess = $mess[array_rand($mess)];

        if ($name) {
          echo "<h1>Chúc Mừng $name!</h1>";
          echo "<p>$rdmess</p>";
          echo "<p>Hãy luôn tươi cười và tận hưởng ngày tuyệt vời này! ❤️</p>";
          echo "<div class='heart'>❤️</div>";
          echo "<p>Lời Chúc Từ HuyKaiser Đến Bé Iu $name </p>";
        } else {
          echo "<h1>Nhập tên Vô iiikk</h1>";
          echo '<form method="POST" id="wishForm">
                  <input type="text" name="name" placeholder="Nhập tên zooo..." required />
                  <br>
                  <button type="submit" id="submitBtn" class="glow">Nhận lời chúc</button>
                </form>';
        }
      ?>
    </div>

    <audio autoplay loop id="backgroundMusic">
      <source src="/huykaiser/mp3/nhaccute.mp3" type="audio/mp3">
    </audio>
    <script src="/huykaiser/js/hksdev.js"></script>
  </body>
</html>
