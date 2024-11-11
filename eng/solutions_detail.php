<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/solutions.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper solutionsDetailPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_solutions.jpg" alt=""></div>
      </div>

      <div class="mainBox">
        <div class="solutionsDetail">
          <div class="pageContent">
            <div class="container">
              <div class="topBox wow fadeInUp" data-wow-delay="0s">
                <div class="pic"><img src="../images/in/solutions1.jpg" alt=""></div>
                <div class="info">
                  <h1 class="title">Motorcycle</h1>
                  <div class="description">In the fast-paced and demanding Food and Beverage industry, maintaining product integrity, ensuring hygiene, and optimizing production efficiency are top priorities. Parjet’s Sealing solutions are resistant to various chemicals, including cleaning agents, sanitizers, and food ingredients; the solutions are designed to maintain their integrity and functionality even when exposed to aggressive substances.</div>
                </div>
              </div>
              <div class="changePage wow fadeInUp" data-wow-delay="0s">
                <a class="prev arrows" href="#"><span>Custom parts</span><i></i></a>
                <a class="next arrows" href="#"><span>Hydraulic and pneumatic</span><i></i></a>
              </div>
              <div class="editor detail wow fadeInUp">
                <img src="../images/in/solutions9.jpg" alt="">
                <br /><br />
                Parjet’s Advanced Sealing Solutions for Food and Beverage Industry.<br /><br />

                Customized FDA-compliant Seals from Parjet:<br /><br />

                Parjet’s integrated production process from the resin form of FDA-approved PTFE to semi-finished tubes, which are then machined into required sealing parts, gives us the advantage to tailor-make any kind of sealing solution from the very beginning while ensuring quality. Food and Beverage processing involves a wide range of temperatures, from extreme heat to freezing conditions. Parjet’s wide selection of PTFE compounds and 10+ sealing CNCs are by your side and to ensure your satisfaction.<br /><br />

                Features:<br />
                • FDA-compliant Materials<br />
                • Longevity and Durability<br />
                • Lubrication Compatibility<br />
                • Chemical Resistance<br /><br />

                Food and Beverage applications:<br />
                • Filling Machines<br />
                • Alcohol and Distillation machine<br />
                • Valves<br />
                • Heat Exchangers<br />
                Suitabl
              </div>
              <h2 class="subTitle">Suitable Products</h2>
              <div class="listBox">
                <? for ($i = 0; $i < 4; $i++) { ?>
                  <div class="item">
                    <a href="#">
                      <div class="pic"><img src="../images/in/solutions10.jpg" alt=""></div>
                      <h3 class="title">Automotive Seals</h3>
                    </a>
                  </div>
                <? } ?>
              </div>
              <div class="pageBtnBox wow fadeInUp" data-wow-delay="0.2s">
                <a class="back" href="solutions.php">Back To List</a>
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
              <span itemprop="name"><a href="solutions.php">Solutions</a></span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Motorcycle</span>
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
</body>

</html>