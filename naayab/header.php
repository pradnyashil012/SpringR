<?php
session_start();
include"db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157725265-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157725265-2');
</script>


<!-- Google Adsense -->
<script data-ad-client="ca-pub-4963702767940715" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!-- Google Adsense -->

   

  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="description" content="<?php echo $description; ?>" >

  <link href="<?php echo $canonical; ?>" rel="canonical">

  <!-- Favicons -->
  <link href="img/favicon1.png" rel="icon">
  <link href="img/apple-touch-icon1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="css/search.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

 <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@NaayabCom">
    <meta name="twitter:creator" content="@NaayabCom">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta property="twitter:image" content="<?php echo $image; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:domain" content="https://www.naayab.com/">
    <meta name="twitter:url" content="<?php echo $canonical; ?>">
    
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">
    <meta property="og:site_name" content="Naayab.com">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="<?php echo $canonical; ?>">
    <meta property="article:author" content="https://www.facebook.com/naayabtalent">
    <meta property="article:publisher" content="https://www.facebook.com/naayabtalent">
    <meta property="fb:app_id" content="105232307697984">

<meta name="google" content="notranslate">
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="index" class="scrollto"><img src="img/logo6.png" alt="Naayab Logo" title="Naayab"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          
          <li><div class="">
                            <center>
                            <form action="search_songs.php" method="get" id="searchForm" >
                            <input type="text" name="q" placeholder="Search..." id="searchbar" maxlength="20" autocomplete="on" onmousedown="active();" onblur="inactive();" ><input type="submit" value="Find" id="searchBtn" >
                            </form>
                            </center>
					</div></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
