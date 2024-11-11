<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/faq.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper faqBox">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_faq.jpg" alt=""></div>
        <div class="unitTitleBox">
          <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">FAQ</h1>
          </div>
        </div>
      </div>


      <div class="mainBox">
        <div class="faq">
          <div class="pageContent">
            <div class="container">

              <div class="listBox">

                <? for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item">
                    <div class="tag"></div>
                    <button class="title qBox" role="button">I want to know the specifications related to the company’s products or processing. I want to know the specifications related to the company’s products or processing. How to contact me?</button>
                    <div class="txtBox aBox">
                      <div class="txt">You can use the “Contact Us” on the website to leave your contact information and we will contact you as soon as possible!
                        <br />
                        <br />
                        You can also send your needs, drawings and other relevant information to our company email “info@yanmech. com.tw” for evaluation and contact.
                      </div>
                    </div>
                  </div>
                <? } ?>

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
              <span itemprop="name">Support</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">FAQ</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>
    </main>
    <?php include('include_login.php'); ?>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    qa('.qBox', '.aBox')
  </script>
</body>

</html>