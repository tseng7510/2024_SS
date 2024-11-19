<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper productsBox">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
      </div>

      <div class="mainBox">

        <div class="unitTitleBox">
          <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">Scraper seal</h1>
            <div class="description sliderMore wow fadeInUp" data-wow-delay="0.2s">WParjet provides whole series of hydraulic seals meeting the requirements of harsh operating conditions such as steel industry, construction machinery, off-shore facilities, transmission & storage, and tire industries. For those applications involving JIS, ISO, ANSI/NFPA international standard sealing grooves, Parjet can provide instant sealing solution.WParjet provides whole series of hydraulic seals meeting the requirements of harsh operating conditions such as steel industry, construction machinery, off-shore facilities, transmission & storage, and tire industries. For those applications involving JIS, ISO, ANSI/NFPA international standard sealing grooves, Parjet can provide instant sealing solution.</div>
            <button class="showMore wow fadeInUp" data-wow-delay="0.4s">View more</button>
          </div>
        </div>

        <div class=" products3">
          <div class="pageContent">
            <div class="container">

              <aside class="wow fadeInLeft" data-wow-delay="0s">
                <div class="sideBox">
                  <div class="titleBox">
                    <button class="title" disabled="">FILTER</button>
                    <button class="reset">
                      <p>Reset all filters</p>
                    </button>
                  </div>
                  <form class="contentBox">
                    <div class="searchBox">
                    </div>
                    <div class="outer">
                      <div class="item">
                        <div class="inputBox">
                          <input type="text" placeholder="Enter Size or OEM Number">
                          <button type="button"></button>
                        </div>
                        <ul>
                          <li><button type="button">Action Method</button>
                            <ul>
                              <li><button type="button">Action Method</button></li>
                              <li><button type="button">Action Method</button></li>
                              <li><button type="button">Action Method</button></li>
                            </ul>
                          </li>
                          <li><button type="button">Type</button>
                            <ul>
                              <li><button type="button">Type</button></li>
                              <li><button type="button">Type</button></li>
                              <li><button type="button">Type</button></li>
                            </ul>
                          </li>
                          <li><button type="button">Vehicles</button>
                            <ul>
                              <li><button type="button">Action Method</button></li>
                              <li><button type="button">Action Method</button></li>
                              <li><button type="button">Action Method</button></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </form>
                </div>
              </aside>

              <div class="content wow fadeInRight" data-wow-delay="0.2s">
                <div class="tableBox">
                  <table>
                    <thead>
                      <tr>
                        <th>Product name</th>
                        <th>Action method</th>
                        <th>Size or OEM number</th>
                        <th>Type</th>
                        <th>I.D</th>
                        <th>O.D</th>
                        <th>H</th>
                        <th>Press</th>
                        <th>Speed</th>
                        <th>Vehicle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <? for ($i = 0; $i < 20; $i++) { ?>
                        <tr>
                          <td><a href="products_detail.php">Scraper Seals</a></td>
                          <td>Reciprocating</td>
                          <td><a href="products_detail.php">300*325*9</a></td>
                          <td>338</td>
                          <td>300</td>
                          <td>325</td>
                          <td>9</td>
                          <td>B&W</td>
                          <td>B&W</td>
                          <td>B&W</td>
                        </tr>
                      <? } ?>
                    </tbody>
                  </table>
                </div>
                <div class="notice">The Rod Seal is the most critical seal on any type of fluid power equipment preventing leakage of fluid from within the cylinder to the outside.</div>
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
              <span itemprop="name">Scraper seal</span>
              <meta itemprop="position" content="4">
            </li>
          </ul>
        </div>
      </div>
    </main>

    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>

  <script>
    $(function() {
      let minHeight;
      let maxHeight;

      $(window).on('load resize', function() {
        minHeight = $('.sliderMore').height();
        $('.sliderMore').addClass('active');
        maxHeight = $('.sliderMore').height();
        $('.sliderMore').removeClass('active');
        $('.sliderMore').css('height', minHeight);
      })


      $('.showMore').on('click', function() {
        $(this).toggleClass('active')
        if (!$('.sliderMore').is('.active')) {
          $('.sliderMore').addClass('active').css('height', maxHeight);
        } else {
          $('.sliderMore').removeClass('active').css('height', minHeight);
        }
      })
    })
  </script>
</body>

</html>