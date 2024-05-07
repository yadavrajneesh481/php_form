<?php include 'connect.php' ?>

<?php
$query = "SELECT * FROM signup";
$result = mysqli_query($conn, $query);
if (!$result) {
  echo 'ERROR in Home.php';
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/main_dynamic_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">

  <!-- InstanceBeginEditable name="document_title_rgn" -->
  <title>Home of Acunetix Art</title>
  <!-- InstanceEndEditable -->
  <link rel="stylesheet" href="home.css" type="text/css">

  <script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>

</head>
<body>
  <div id="mainLayer" style="position:absolute; width:700px; z-index:1">
    <div id="masthead">
      <h1 id="siteName"><a href="https://www.acunetix.com/"><img src="images/logo.gif" width="306" height="38"
            border="0" alt="Acunetix website security"></a></h1>
      <h6 id="siteInfo">TEST and Demonstration site for <a
          href="https://www.acunetix.com/vulnerability-scanner/">Acunetix Web Vulnerability Scanner</a></h6>
      <div id="globalNav">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tr>
            <td align="left">
              <a href="home.php">home</a> | <a href="categories.php">categories</a> | <a href="artists.php">artists
              </a> | <a href="disclaimer.php">disclaimer</a> | <a href="cart.php">your cart</a> |
              <a href="guestbook.php">guestbook</a> |
              <a href="AJAX/home.php">AJAX Demo</a>
            </td>
            <td align="right">
            </td>
          </tr>
        </table>
      </div>
    </div>
    <!-- end masthead -->

    <!-- begin content -->
    <!-- InstanceBeginEditable name="content_rgn" -->
    <div id="content">
      <h2 id="pageName">welcome to our page</h2>
      <div class="story">
        <h3>Test site for Acunetix WVS.</h3>
        <table>
        <tr>
            <th>sr</th>
            <th>user Name</th>
            <th>password</th>

            <th>name</th>
            <th>card number</th>
            <th>email</th>
            <th>phone</th>
            <th>address</th>

        </tr>

       
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $username = $row['username'];
              $pass = $row['pass'];
   
              $name = $row['name'];
              $cNumber = $row['cardnumber'];
              $email = $row['email'];
              $phone = $row['pnumber'];
              $add = $row['address'];
              ?>
               <tr>
            <td><?= $id ?></td>
            <td><?= $username ?></td>
            <td><?= $pass ?></td>
 
            <td><?= $name ?></td>
            <td><?= $cNumber ?></td>
            <td><?= $email ?></td>
            <td><?= $phone ?></td>
            <td><?= $add ?></td>
           
          </tr>
            <?php } ?>
        
    </table>
        

      </div>
    </div>
    <!-- InstanceEndEditable -->
    <!--end content -->

    <div id="navBar">
      <div id="search">
        <form action="search.php?test=query" method="post">
          <label>search art</label>
          <input name="searchFor" type="text" size="10">
          <input name="goButton" type="submit" value="go">
        </form>
      </div>
      <div id="sectionLinks">
        <ul>
          <li><a href="categories.php">Browse categories</a></li>
          <li><a href="artists.php">Browse artists</a></li>
          <li><a href="cart.php">Your cart</a></li>
          <li><a href="login.html">Signup</a></li>
          <li><a href="userinfo.php">Your profile</a></li>
          <li><a href="guestbook.php">Our guestbook</a></li>
          <li><a href="AJAX/home.php">AJAX Demo</a></li>
          </li>
        </ul>
      </div>
      <div class="relatedLinks">
        <h3>Links</h3>
        <ul>
          <li><a href="http://www.acunetix.com">Security art</a></li>
          <li><a href="https://www.acunetix.com/vulnerability-scanner/php-security-scanner/">PHP scanner</a></li>
          <li><a
              href="https://www.acunetix.com/blog/articles/prevent-sql-injection-vulnerabilities-in-php-applications/">PHP
              vuln help</a></li>
          <li><a href="http://www.eclectasy.com/Fractal-Explorer/index.html">Fractal Explorer</a></li>
        </ul>
      </div>
      <div id="advert">
        <p>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
            codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="107"
            height="66">
            <param name="movie" value="Flash/add.swf">
            <param name=quality value=high>
            <embed src="Flash/add.swf" quality=high
              pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
              type="application/x-shockwave-flash" width="107" height="66"></embed>
          </object>
        </p>
      </div>
    </div>

    <!--end navbar -->
    <div id="siteInfo"> <a href="http://www.acunetix.com">About Us</a> | <a href="privacy.php">Privacy Policy</a> | <a
        href="mailto:wvs@acunetix.com">Contact Us</a> | <a href="/Mod_Rewrite_Shop/">Shop</a> | <a href="/hpp/">HTTP
        Parameter Pollution</a> | &copy;2019
      Acunetix Ltd
    </div>


    <br>
    <div style="background-color:lightgray;width:100%;text-align:center;font-size:12px;padding:1px">
      <p style="padding-left:5%;padding-right:5%"><b>Warning</b>: This is not a real shop. This is an example PHP
        application, which is intentionally vulnerable to web attacks. It is intended to help you test Acunetix. It also
        helps you understand how developer errors and bad configuration may let someone break into your website. You can
        use it to test other tools and your manual hacking skills as well. Tip: Look for potential SQL Injections,
        Cross-site Scripting (XSS), and Cross-site Request Forgery (CSRF), and more.</p>
    </div>
  </div>
</body>
<!-- InstanceEnd -->
</html>