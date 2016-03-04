<?php
  $logoList = ['01_tokotoko_logo-', '02_tokotoko_logo-', '03_tokotoko_logo-', '04_tokotoko_logo-'];
  $logoName = $logoList[rand(0, 3)];
?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <title>TOKOTOKO — Digital Design Studio</title>

    <meta name="description" content="We are the Design Director duo of internationally recognized and awarded designers Sebastian Gram &amp; Mathias Høst Normark." />

    <link rel="shortcut icon" href="images/favicon.ico">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="TOKOTOKO — Digital Design Studio">
    <meta property="og:site_name" content="tokotoko">
    <meta property="og:url" content="http://www.tokotoko.co">
    <meta property="og:image" content="http://www.tokotoko.co/images/social.png">
    <meta property="og:description" content="We are the Design Director duo of internationally recognized and awarded designers Sebastian Gram &amp; Mathias Høst Normark.">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@tokotokostudio">
    <meta name="twitter:creator" content="@tokotokostudio" >
    <meta name="twitter:title" content="TOKOTOKO — Digital Design Studio">
    <meta name="twitter:url" content="http://www.tokotoko.co">
    <meta name="twitter:image" content="http://www.tokotoko.co/images/social.png">
    <meta name="twitter:domain" content="http://www.tokotoko.co">
    <meta name="twitter:description" content="We are the Design Director duo of internationally recognized and awarded designers Sebastian Gram &amp; Mathias Høst Normark.">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width" />

    <link rel="stylesheet" type="text/css" href="css/normalize.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/main.css" media="screen">

    <script>
		  !function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(
		  arguments)};d=s.createElement(q);q=s.getElementsByTagName(q)[0];
		  d.src='//d1l6p2sc9645hc.cloudfront.net/tracker.js';q.parentNode.
		  insertBefore(d,q)}(window,document,'script','_gs');

		  _gs('GSN-324564-T');
	</script>
  </head>
  <body>
    <header class="header">
      <span class="header__headline">Digital Design Studio &mdash;</span>
    </header>

    <main>
      <div class="col-container clearfix">
        <div class="col-1">
          <img class="logo--black--desktop" src="images/<?php echo $logoName; ?>black@2x.png" alt="TOKOTOKO" width="115" height="61" />
          <img class="logo--white--desktop" src="images/<?php echo $logoName; ?>white@2x.png" alt="TOKOTOKO white" width="115" height="61" />
          <img class="logo--black--mobile logo--mobile" src="images/mobile-tokotoko_logo-black@2x.png" alt="TOKOTOKO" width="117" height="14" />
          <img class="logo--white--mobile logo--mobile" src="images/mobile-tokotoko_logo-white@2x.png" alt="TOKOTOKO white" width="117" height="14" />
        </div>
        <div class="col-2 info">
          <p class="info__description">We are the Design Director duo of internationally recognized and awarded designers <a href="https://www.linkedin.com/in/sebastiangram" target="blank">Sebastian Gram</a> &amp; <a href="https://dk.linkedin.com/in/mathiashnormark" target="blank">Mathias Høst Normark</a>. Our vision is to collaborate with brands in building the next generation of digital brands trough digital identities, experiences & platforms.</p>
          <a class="info__email" href="mailto:hi@tokotoko.co">hi@tokotoko.co</a>
          <span class="info__phone">0045 5337 7537</span>
          <span class="info__social">Follow us &mdash; <a href="https://twitter.com/tokotokostudio" target="_blank">Twitter</a>, <a href="https://www.instagram.com/tokotokostudio/" target="_blank">Instagram</a>, <a href="https://www.facebook.com/tokotokostudio/" target="_blank">Facebook</a></span>
        </div>
      </div>

      <canvas id="pattern" width="300" height="300"></canvas>

      <footer class="footer">
        <span class="footer__location">Copenhagen &amp; Aarhus, Denmark</span>
        <span class="footer__legal">&copy; Copyright 2016 TOKOTOKO</span>
      </footer>
    </main>

    <script>
      var currentHour = new Date().getHours();
      if (currentHour > 12 && currentHour < 18) {
        document.body.className = 'midday';
      } else if (currentHour >= 18 || currentHour < 5) {
        document.body.className = 'night';
      }
    </script>

    <script src="js/lib/greensock/TweenLite.min.js"></script>
    <script src="js/lib/greensock/easing/EasePack.min.js"></script>
    <script src="js/Main.js"></script>
  </body>
</html>
