<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper contactPage">
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
            <h1 class="title wow fadeInUp" data-wow-delay="0s">Contact Us</h1>
          </div>
        </div>


        <div class="contact">
          <div class="pageContent">
            <div class="container">
              <div class="content">
                <div class="infoBox wow fadeInUp" data-wow-delay="0s">
                  <div class="title">Contact Information</div>
                  <div class="description">Thank you for reaching out to us!
                    If you have any questions or suggestions regarding WSI, please fill out the form below, and we will get back to you as soon as possible!</div>
                  <div class="title">WELL OIL SEAL INDUSTRIAL CO., LTD</div>
                  <ul>
                    <li class="tel">
                      <div class="label">TEL:</div><a href="tel:+88648651759">+886-4-8651759</a>
                    </li>
                    <li class="fax">
                      <div class="label">FAX:</div>+886-4-8652883
                    </li>
                    <li class="mail">
                      <div class="label">E-mail:</div>
                      <a href="mailto:sales@wsioilseal.com.tw">sales@wsioilseal.com.tw</a>
                    </li>
                    <li class="website">
                      <div class="label">Website:</div><a href="www.wsioilseals.com" target="_blank">www.wsioilseals.com</a>
                    </li>
                    <li class="address">
                      <div class="label">Address:</div>No.111, Fanjin Rd., Puyan Township, Changhua County 516, Taiwan (R.O.C.).
                    </li>
                  </ul>
                </div>

                <form class="formBox wow fadeInLeft" data-wow-delay="0.2s">
                  <ul>
                    <li class="inputItem wow fadeInUp required">
                      <label for="company">Company name</label>
                      <input type="text" class="inputControl" id="company">
                    </li>
                    <li class="inputItem wow fadeInUp required">
                      <label for="name">Name</label>
                      <input type="text" class="inputControl" id="name">
                    </li>
                    <li class="inputItem wow fadeInUp required">
                      <label for="tel">Phone</label>
                      <input type="text" class="inputControl" id="Phone">
                    </li>
                    <li class="inputItem wow fadeInUp required">
                      <label for="email">E-mail</label>
                      <input type="text" class="inputControl" id="email">
                    </li>
                    <li class="inputItem full wow fadeInUp">
                      <label for="type">Inquiry Type</label>
                      <select name="type" id="type" class="selectControl">
                        <option value="Inquiry">Inquiry</option>
                      </select>
                    </li>
                    <li class="inputItem full wow fadeInUp">
                      <label for="message">Please enter your inquiry</label>
                      <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                    </li>

                    <li class="inputItem full wow fadeInUp required">
                      <label for="password">Verification code</label>
                      <input type="password" class="inputControl" id="password">
                      <span class="checkImg"><img src="../images/check_img.jpg"></span>
                      <button class="reBtn"></button>
                    </li>
                  </ul>
                  <div class="pageBtnBox wow fadeInUp">
                    <button class="send" type="button" onclick="javascript:location.href='contact_ok.php'">SEND MESSAGE</button>
                  </div>
                </form>
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
              <span itemprop="name">Contact</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>
    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>