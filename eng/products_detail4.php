<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper productsDetailPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
      </div>

      <div class="mainBox">

        <div class="productsDetail">
          <div class="pageContent">
            <div class="container">

              <div class="infoBox">
                <div class="titleBox">
                  <h1 class="title">Scraper Seals 300*325*9</h1>
                </div>

                <div class="picBox">
                  <div class="listBox">
                    <div class="item">
                      <div class="pic"><img src="../images/in/products2.jpg" alt=""></div>
                    </div>
                    <div class="item">
                      <div class="pic"><img src="../images/in/products2.jpg" alt=""></div>
                    </div>
                    <div class="item">
                      <div class="pic"><img src="../images/in/products2.jpg" alt=""></div>
                    </div>
                  </div>
                  <div class="control"></div>
                </div>

                <div class="info">
                  <div class="subTitle">Technical Data</div>
                  <div class="tableBox">
                    <table>
                      <tbody>
                        <tr>
                          <th>Action method</th>
                          <td>Reciprocating</td>
                        </tr>
                        <tr>
                          <th>Type</th>
                          <td>TC</td>
                        </tr>
                        <tr>
                          <th>I.D</th>
                          <td>300</td>
                        </tr>
                        <tr>
                          <th>O.D</th>
                          <td>325</td>
                        </tr>
                        <tr>
                          <th>High</th>
                          <td>9</td>
                        </tr>
                        <tr>
                          <th>Pressure</th>
                          <td>10Bar</td>
                        </tr>
                        <tr>
                          <th>Speed (M/S)</th>
                          <td>60ms</td>
                        </tr>
                        <tr>
                          <th>OEM Number</th>
                          <td>300*325*9</td>
                        </tr>
                        <tr>
                          <th>Vehicle</th>
                          <td>B&W</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="btnBox">
                    <button class="inquiry" title="VIEW MORE">ADD TO INQUIRY</button>
                    <button class="download" title="VIEW MORE">DOWNLOAD</button>
                  </div>
                </div>
              </div>

              <?php include('include_products.php'); ?>

              <div class="content wow fadeInUp" data-wow-delay="0s">
                <div class="container">
                  <div class="editor detail">
                    <p>Scrapers Seals are installed in the sealing configurations of hydraulic cylinders to scrape dirt, foreign particles, chips or moisture from the piston rods as they retract into the system.</p>
                    <div class="pic"><img src="../images/in/products5.jpg" alt=""></div>
                    <br /><br />
                    <p>Scrapers Seals are installed in the sealing configurations of hydraulic cylinders to scrape dirt, foreign particles, chips or moisture from the piston rods as they retract into the system.</p>
                    <div class="pic"><img src="../images/in/products6.jpg" alt=""></div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>


      <div class="breadcrumbBox">
        <div class="container">
          <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="index.php" title="index" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name"><a href="products.php">Products Category</a></span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name"><a href="products_2.php">Hydraulic oil seal</a></span>
              <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name"><a href="products_3.php">Scraper seal</a></span>
              <meta itemprop="position" content="4">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Scraper Seals 300*325*9</span>
              <meta itemprop="position" content="5">
            </li>
          </ul>
        </div>
      </div>
    </main>

    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script src="../plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
  <script>
    $('.productsDetail .infoBox .picBox .listBox').slick({
      draggable: true,
      arrows: true,
      dots: false,
      fade: true,
      speed: 900,
      infinite: true,
      prevArrow: '<button type="button" class="slick-prev slick-arrow" aria-label="Prev"></button>',
      nextArrow: '<button type="button" class="slick-next slick-arrow" aria-label="Next"></button>',
      appendArrows: '.productsDetail .infoBox .picBox .control',
    })

    $('.tabBox .tab button').on('click', function() {
      $(this).addClass('active').siblings().removeClass('active');
      $('.tabContentBox .tabContent').eq($(this).index()).show().siblings().hide();
    })

    $('.subMenu li').eq(3).addClass('active');
  </script>
</body>

</html>