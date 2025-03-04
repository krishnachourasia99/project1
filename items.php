<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      background-color: #333f3b;
    }

    .img-slider img {
      height: 300px;
      width: 1080px;
    }

    @keyframes slide {
      0% {
        left: 0px;
      }

      15% {
        left: 0px;
      }

      20% {
        left: -1080px;
      }

      32% {
        left: -1080px;
      }

      35% {
        left: -2160px;
      }

      47% {
        left: -2160px;
      }

      50% {
        left: -3240px;
      }

      63% {
        left: -3240px;
      }

      66% {
        left: -4320px;
      }

      79% {
        left: -4320px;
      }

      82% {
        left: -5400px;
      }

      100% {
        left: 0px;
      }
    }

    .img-slider {
      display: flex;
      float: left;
      position: relative;
      width: 1080px;
      height: 300px;
      animation-name: slide;
      animation-duration: 10s;
      animation-iteration-count: infinite;
      transition-duration: 2s;
    }

    .heading1 {
      opacity: 0;
    }

    /* .search {
  display: flex;
  position: relative;
} */
    .section1 {
      width: 1080px;
      overflow: hidden;

      justify-content: center;
      align-items: center;
      margin: 0px auto;
    }

    .section2 .container {
      display: flex;
      width: 100%;
      height: max-content;
      flex-wrap: wrap;
      justify-content: center;
      margin: 10px auto;
    }

    .section2 .container .items {
      margin: 10px;
      width: 300px;
      height: 485px;
      background-color: #333f3b;
      border: 2.5px solid black;
      border-radius: 12px;
    }

    .section2 .container .items .name {
      text-align: center;
      background-color: rgb(240, 197, 6);
      height: 25px;
      padding-top: 4px;
      color: white;
      margin: 0;
    }

    .section2 .container .items .price {
      float: left;
      padding-left: 10px;
      display: block;
      width: 100%;
      color: rgb(255, 0, 0);
      font-weight: 650;
    }

    .section2 .container .items .info {
      padding-left: 10px;
      color: rgb(243, 168, 7);
    }

    .section2 .container .items .img img {
      width: 300px;
      height: 300px;
      margin: 0;
      padding: 0;
      border-radius: 12px;
      transition-duration: 0.8s;
    }

    .section2 .container .items .img {
      overflow: hidden;
      margin: 0;
    }

    .section2 .container .items:hover .img img {
      transform: scale(1.2);
      transition-duration: 0.8s;
      border-radius: 12px;
    }
  </style>
</head>

<body>
  <section>
    <div class="section">
      <div class="section1">
        <div class="img-slider">
          <img
            src="/public/images/slider/img_1.png"
            alt="" class="img">
          <img
            src="/public/images/slider/img_1.png"
            alt="" class="img">
          <img
            src="/public/images/slider/img_1.png"
            alt="" class="img">
          <img
            src="/public/images/slider/img_1.png"
            alt="" class="img">
          <img
            src="/public/images/slider/img_1.png"
            alt="" class="img">
        </div>
      </div>

      <div class="section2">
        <div class="container">
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/1.jpg" alt=""></div>
            <div class="name">EXZON Gaming PC</div>
            <div class="price">Rs-28590</div>
            <div class="info">EXZON Gaming Pc Full setup Desktop complete computer system Core I7 3770 |16GB Ram |512GB
              SSD 500GB 7200 RPM HDD | |Windows 10| GT 4GB 730 DDR5 Graphics Card 800W PSU with 20 inches led Monitor
              RGB Keyboard RGB Mouse Wi-fi Ready to play</div>
          </div>
          <div class="items">
            <div class="img img2"><img src="/public/images/gamingsetup/2.jpg" alt=""></div>
            <div class="name">KRYNORCXY i5 Gaming Pc</div>
            <div class="price">Rs-22990</div>
            <div class="info"> KRYNORCXY i5 Gaming Pc Complete Computer System for Gaming Core i5-4th Processor/DDR3
              16GB RAM /512GB NVME SSD/GT 730 4GB Graphics/19 inch inch HD Led Monitor/Gaming Keyboard Mouse/Windows
              10/WiFi.</div>
          </div>
          <div class="items">
            <div class="img img3"><img src="/public/images/gamingsetup/3.jpg" alt=""></div>
            <div class="name">KRYNORCXY core-i7</div>
            <div class="price">Rs-19990</div>
            <div class="info">KRYNORCXY Computer Core i7-860 Gaming pc/2gb Dedicated Graphic Card/8gb Ram/512gb
              SSD/19inch Led Monitor/RGB Keyboard Mouse/450W PSU/RGB Cabinet/Windows 10 Pro
            </div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/4.jpg" alt=""></div>
            <div class="name">MICSONIC Full Set Budget Gaming Pc </div>
            <div class="price">Rs-21399</div>
            <div class="info">MICSONIC Full Set Budget Gaming Pc Desktop Intel Core I5 Ram 8GB HDD 500GB 7200 RPM SSD,
              Windows 10 120GB Graphics Card 2GB GT710 with 19 inches led Monitor RGB Keyboard RGB Mouse Wi-fi (Black)
            </div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/5.jpg" alt=""></div>
            <div class="name">Ant Esports ICE- 112 Mid- Tower</div>
            <div class="price">Rs-3525</div>
            <div class="info">White | Support ATX, Micro-ATX, ITX | Pre-Installed 3 Front Fans & 1 Rear Fan</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/6.jpg" alt=""></div>
            <div class="name">FRONTECH Premium Silver Range</div>
            <div class="price">Rs-900</div>
            <div class="info">Computer Case with 2 Front USB Ports and Front Audio - Stylish and Functional PC Enclosure
              (FT-4316)</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/7.jpg" alt=""></div>
            <div class="name">FRONTECH Premium Silver Range</div>
            <div class="price">Rs-1099</div>
            <div class="info">Computer Case with 2 x Front USB and Front Audio .</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/8.jpg" alt=""></div>
            <div class="name">Ant Esports ICE-200TG Mid Tower</div>
            <div class="price">Rs-3285</div>
            <div class="info">Transparent Tempered Glass Side Panel,1 x 120 mm Rainbow Fan</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/9.jpg" alt=""></div>
            <div class="name">Galax (Rev-06) </div>
            <div class="price">Rs-4051</div>
            <div class="info">Galax (Rev-06) Revolution 06 Black with 4 RGB Fans Preinstalled, Mid Tower ATX</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/10.jpg" alt=""></div>
            <div class="name">ZEBRONICS Atomic </div>
            <div class="price">Rs-2599</div>
            <div class="info">LED Strip with Control Switch, Tempered Glass Side Panel, USB 3.0, USB 2.0 (Black)</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/11.jpg" alt=""></div>
            <div class="name">Zebronics Zeb-Cronus Premium Gaming Cabinet</div>
            <div class="price">Rs-2699</div>
            <div class="info">Tempered Glass On Side & 4 x120mm Rainbow Double Ring LED Fans</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/12.jpg" alt=""></div>
            <div class="name">ZEBRONICS AGOJIE </div>
            <div class="price">Rs-2599</div>
            <div class="info">Gaming Cabinet, ATX/M-ATX/M-ITX, 1 x 120 mm RGB Inner Glow Rear Fan, LED Strip with
              Control Switch</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/13.jpg" alt=""></div>
            <div class="name">Ant Esports 220 Air </div>
            <div class="price">Rs-3670</div>
            <div class="info">Cabinet - Black | Support - ATX, M-ATX, ITX | Pre-Installed 3 x 120mm Front Fans and 1 x
              120mm Rear Fan</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/14.jpg" alt=""></div>
            <div class="name">CHIPTRONEX Titan X</div>
            <div class="price">Rs-2199</div>
            <div class="info"> Cabinet RGB, RGB Light, MATX ITX (case Without SMPS)</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/15.jpg" alt=""></div>
            <div class="name">Zebronics Zeb-Athena </div>
            <div class="price">Rs-3899</div>
            <div class="info">Dual 120mm Front Fans,120mm Rear Fan & Top Magnetic Dust Filter(Blue)</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/16.jpg" alt=""></div>
            <div class="name">MSI MAG Forge 112R </div>
            <div class="price">Rs-5498</div>
            <div class="info">Tempered Glass Panel, Magnetic Dust Filter | Black (ATX, m-ATX, Mini-ITX Compatible)</div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/17.jpg" alt=""></div>
            <div class="name">Ant Esports SI24</div>
            <div class="price">Rs-1945</div>
            <div class="info">Gaming Cabinet - Black | Support ATX, Micro- ATX, Mini-ITX | Pre-Installed 1 Rear Fan
            </div>
          </div>
          <div class="items">
            <div class="img img1"><img src="/public/images/gamingsetup/18.jpg" alt=""></div>
            <div class="name">DEEPCOOL MATREXX 30</div>
            <div class="price">Rs-2665</div>
            <div class="info">Gaming Cabinet - Black, Support - Micro ATX/Mini-ITX, Pre-Installed 1 x 120 mm Black Fan
              at Rear - DP-MATX-MATREXX30-SI</div>
          </div>
        </div>

      </div>
    </div>

  </section>
</body>

</html>