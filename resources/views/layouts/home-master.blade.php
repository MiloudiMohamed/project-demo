<!DOCTYPE html>
<html lang="en">
<head>
<title>LRI</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/tailwind.min.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
 });
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1" id="top">
<!--==============================
              header
=================================-->
<header>
  <div class="container">
    <div class="row">
      <div class="grid_12 rel">
        <h1>
          <a href="index.php">
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>
      </div>
    </div>
  </div>
  <section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
    <div class="container">
      <div class="row">
        <div class="grid_12 ">
          <div class="navigation ">

              @include('layouts.partials._nav-links')

          </div>
        </div>
     </div>
    </div>
  </section>
  <section class="page1_header">
    <div class="container">
      <div class="row">
        <div class="grid_4">
          <a href="#" class="banner "><div class="maxheight">
            <div class="fa fa-globe"></div>Global Research</div>
          </a>
          <a href="#" class="banner "><div class="maxheight">
            <div class="fa fa-lightbulb-o"></div>Creative Ideas</div>
          </a>
          <a href="#" class="banner "><div class="maxheight1">
            <div class="fa fa-cog"></div>New Services</div>
          </a>
          <a href="#" class="banner "><div class="maxheight1">
            <div class="fa fa-briefcase"></div>Pro Management</div>
          </a>
        </div>
        <div class="grid_5">
          <h2>Strong <br> Stable <br> Safe</h2>
          We help you for take a information 
        </div>
      </div>
    </div>
  </section>
</header>
@include('sweetalert::alert')

@yield('content')

@include('layouts.partials._footer')

</body>
</html>