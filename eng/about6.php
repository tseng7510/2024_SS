<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper aboutPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_inquiry.jpg" alt=""></div>
      </div>

      <div class="mainBox">
        <div class="unitTitleBox">
          <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">Quality Policy</h1>
          </div>
        </div>

        <div class="about6">
          <div class="pageContent">
            <div class="block1">
              <div class="contentTitle wow fadeInUp" data-wow-delay="0s">Customer Satisfaction</div>
              <div class="description wow fadeInUp" data-wow-delay="0.2s">We uphold a spirit of continuous improvement to provide customers with satisfactory quality and service.</div>
              <div class="listBox">
                <div class="item wow fadeInLeft" data-wow-delay="0s">
                  <div class="title">Integrity</div>
                  <div class="description">We adhere to principles of integrity in our dealings with shareholders, employees, customers, and suppliers, reinforcing our commitment to quality consciousness and responsibility.</div>
                </div>
                <div class="item wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="title">Innovation</div>
                  <div class="description">We continuously strive for self-improvement, self-growth, and lifelong learning, responding to market demands with innovation to create high-value, environmentally friendly products that enhance our customers’ competitiveness in the shortest time possible.</div>
                </div>
                <div class="item wow fadeInLeft" data-wow-delay="0.4s">
                  <div class="title">Efficiency</div>
                  <div class="description">Through the dedication of our staff and improvement projects, we enhance work efficiency and improve the quality of people, processes, products, and the environment.</div>
                </div>
              </div>
            </div>

            <div class="block2">
              <div class="contentTitle wow fadeInUp" data-wow-delay="0s">Quality Control</div>
              <div class="pic acBoxDown"><img src="../images/in/about_6_1.png" alt=""></div>
              <div class="pic pic2 acBoxUp"><img src="../images/in/about_6_2.png" alt=""></div>
              <div class="content">
                <div class="description wow fadeInUp" data-wow-delay="0.2s">Quality is our top priority, and we have quality control points in all production processes, with the participation of all team members to ensure the delivery of high-quality products to our valued customers.<br /><br />
                  The introduction of automated manufacturing technology has effectively reduced production costs, enabling rapid and reliable deliveries. We provide professional and prompt services, and our research and development department is involved in mold development and product manufacturing, all subjected to rigorous quality control.<br /><br />
                  Through continuous improvement in production technology and a commitment to scientific management, we strive to achieve optimized quality.</div>
              </div>
            </div>

            <div class="block3">
              <div class="content">
                <div class="contentTitle wow fadeInUp" data-wow-delay="0s">Quality Control</div>
                <div class="description wow fadeInUp" data-wow-delay="0.2s">All WSI products comply with the requirements of ISO 9001 and IATF 16949. WSI conducts more precise quality testing by installing new automated equipment and advanced laboratory instruments, providing critical statistical data as evidence for quality improvement. We accumulate technical experience and knowledge to achieve our goals of improving productivity and quality.</div>
              </div>
              
              <div class="picBox wow fadeInRight" data-wow-delay="0.4s">
                  <div class="listBox">
                      <div class="pic"><img src="../images/in/about_6_3.jpg" alt=""></div>
                      <div class="pic"><img src="../images/in/about_6_3.jpg" alt=""></div>
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
              <span itemprop="name">Company</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Quality Policy</span>
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
    $(function() {
      $('.about6 .block3 .picBox .listBox').slick({
        draggable: true,
        arrows: true,
        dots: false,
        fade: true,
        speed: 900,
        infinite: true,
      })
    })
  </script>
</body>

</html>