<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper newsPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_news.jpg" alt=""></div>
      </div>

      <?php include('include_news.php'); ?>

      <div class="mainBox">

        <div class="unitTitleBox">
          <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">Brochure</h1>
          </div>
        </div>

        <div class="brochureList">
          <div class="pageContent">
            <div class="container">
              <div class="listBox">

                <? for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item wow fadeInLeft" data-wow-delay="0s">
                    <div class="pic"><img src="../images/in/brochure.jpg" alt=""></div>
                    <div class="info">
                      <h2 class="title">WSI OIL SEAL OEM NUMBER CATALOG</h2>
                      <a href="#" class="download">DOWNLOAD<i></i></a>
                    </div>
                  </div>
                <? } ?>

              </div>
            </div>

            <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
              <div class="container">
                <ul class="pagination">
                  <li class="controls"><a class="prev" href="#" title="Previous"></a></li>
                  <li><a href="#">01</a></li>
                  <li><a href="#">02</a></li>
                  <li class="active"><a href="#">03</a></li>
                  <li><a href="#">04</a></li>
                  <li><a href="#">05</a></li>
                  <li class="controls"><a class="next" href="#" title="Next"></a></li>
                </ul>
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
              <span itemprop="name">Media</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Brochure</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>
    </main>



    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $('.subMenu li').eq(2).addClass('active');
  </script>
</body>

</html>