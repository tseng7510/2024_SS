<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/inquiry.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
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
            <h1 class="title wow fadeInUp" data-wow-delay="0s">Inquiry Cart</h1>
          </div>
        </div>


        <div class="inquiry">
          <div class="pageContent">
            <div class="container">

              <form class="formBox">
                <div class="title">Inquiry Form</div>
                <div class="description">In order to provide you with better service, be sure to enter the correct information, thank you !</div>
                <ul>
                  <li class="inputItem full wow fadeInUp">
                    <label for="company">Company name</label>
                    <input type="text" class="inputControl" id="company">
                  </li>
                  <li class="inputItem full wow fadeInUp">
                    <label for="name">Name</label>
                    <input type="text" class="inputControl" id="name">
                  </li>
                  <li class="inputItem full wow fadeInUp">
                    <label for="country">Phone</label>
                    <input type="text" class="inputControl" id="phone">
                  </li>
                  <li class="inputItem full wow fadeInUp">
                    <label for="email">E-mail</label>
                    <input type="text" class="inputControl" id="email">
                  </li>
                  <li class="inputItem full wow fadeInUp">
                    <label for="tel">Inquiry Type</label>
                    <select name="tel" class="selectControl">
                      <option value="">Please select</option>
                    </select>
                  </li>
                  <li class="inputItem full wow fadeInUp">
                    <label for="message">Please enter your inquiry</label>
                    <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                  </li>

                  <li class="inputItem full wow fadeInUp">
                    <label for="code">Verification code</label>
                    <input type="text" class="inputControl" id="code">
                    <span class="checkImg"><img src="../images/check_img.jpg"></span>
                    <button class="reBtn"></button>
                  </li>
                </ul>
                <div class="pageBtnBox wow fadeInUp">
                  <button class="send">Send Massage</button>
                </div>
              </form>
              <div class="inquiryList wow fadeInUp" data-wow-delay="0.2s">
                <table>
                  <thead>
                    <tr>
                      <th colspan="2">Product name</th>
                      <th>Category</th>
                      <th>Quantity</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <? for ($i = 0; $i < 9; $i++) { ?>
                      <tr>
                        <td><img src="../images/in/solutions10.jpg" alt=""></td>
                        <td>Transmission Seals & Transmission End 73.02*101.6*15.47</td>
                        <td>Automotive Seals</td>
                        <td>
                          <div class="qtyBox">
                            <button class="btn less"></button>
                            <input type="text" class="qty form-control" value="1">
                            <button class="btn add"></button>
                          </div>
                        </td>
                        <td>
                          <button class="del"></button>
                        </td>
                      </tr>
                    <? } ?>
                  </tbody>
                </table>
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
              <span itemprop="name">Inquiry Cart</span>
              <meta itemprop="position" content="2">
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