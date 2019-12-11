<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Elimu @yield('title', 'HOME')</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="{{ asset('asset2/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{ asset('asset2/css/font-awesome.min.css')}}">

<link rel="stylesheet" href="{{ asset('asset2/css/elegant-fonts.css')}}">

<link rel="stylesheet" href="{{ asset('asset2/css/themify-icons.css')}}">

<link rel="stylesheet" href="{{ asset('asset2/css/swiper.min.css')}}">

<link rel="stylesheet" href="{{ asset('asset2/style.css')}}">
</head>
<body>



@yield('content')



<footer class="site-footer">
<div class="footer-widgets">
<div class="container">
<div class="row">
<div class="col-12 col-md-6 col-lg-3">
<div class="foot-about">
<h2><a class="foot-logo" href="#"><img src="{{ asset('asset2/images/foot-logo.png')}}" alt=""></a></h2>
<p>Liens des reseaux sociaux</p>
<ul class="d-flex flex-wrap align-items-center">
<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
<li><a href="https://m.facebook.com/Elimu_Usforeducation-1193850937487655/?ref=bookmarks"><i class="fa fa-facebook"></i></a></li>
<li><a href="https://mobile.twitter.com/usforeducation"><i class="fa fa-twitter"></i></a></li>
<li><a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fa fa-google-plus"></i></a></li>
{{-- <li><a href="#"><i class="fa fa-behance"></i></a></li> --}}
<li><a href="http://linkedin.com/in/elimu-usforeducation-394a7a190 Le lien LinkedIn"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
<div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
{{-- <h2>Useful Links</h2>
<ul>
<li><a href="#">Privacy Polticy</a></li>
<li><a href="#">Become a Volunteer</a></li>
<li><a href="#">Donate</a></li>
<li><a href="#">Testimonials</a></li>
<li><a href="#">Causes</a></li>
<li><a href="#">Portfolio</a></li>
<li><a href="#">News</a></li> --}}
</ul>
</div>
<div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
{{-- <div class="foot-latest-news">
<h2>Latest News</h2>
<ul>
<li>
<h3><a href="#">A new cause to help</a></h3>
<div class="posted-date">MArch 12, 2018</div>
</li>
<li>
<h3><a href="#">We love to help people</a></h3>
<div class="posted-date">MArch 12, 2018</div>
</li>
<li>
<h3><a href="#">The new ideas for helping</a></h3>
<div class="posted-date">MArch 12, 2018</div>
</li>
</ul>
</div> --}}
</div>
<div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
<div class="foot-contact">
<h2>Contact</h2>
<ul>
    @foreach($logo as $i)
<li><i class="fa fa-phone"></i><span>{{ $i->tel }}</span></li>
<li><i class="fa fa-envelope"></i><span>
  <a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="__cf_email__" data-cfemail="">
    {{ $i->email }}
  </a></span>
</li>
@endforeach
<li><a href="{{ url('contacter')}}"><i class="fa fa-map-marker"></i><span>France. 17, Rue, Marseille</span></li></a>
</ul>
</div>
<div class="subscribe-form">
<form class="d-flex flex-wrap align-items-center">
<input type="email" placeholder="Your email">
<a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
  <input type="submit" value="send">
</a>

</form>
</div>
</div>
</div>
</div>
</div>
<div class="footer-bar">
    <div class="container">
       <div class="row">
          <div class="col-12">
        
</div>
</div>
</div>
</div>
</footer>
<script type="95178248c95c370a8f0fff74-text/javascript" src='{{ asset('asset2/js/jquery.js')}}'></script>
<script type="95178248c95c370a8f0fff74-text/javascript" src='{{ asset('asset2/js/jquery.collapsible.min.js')}}'></script>
<script type="95178248c95c370a8f0fff74-text/javascript" src='{{ asset('asset2/js/swiper.min.js')}}'></script>
<script type="95178248c95c370a8f0fff74-text/javascript" src='{{ asset('asset2/js/jquery.countdown.min.js')}}'></script>
<script type="95178248c95c370a8f0fff74-text/javascript" src='{{ asset('asset2/js/circle-progress.min.js')}}'></script>
<script type="95178248c95c370a8f0fff74-text/javascript" src='{{ asset('asset2/js/jquery.countTo.min.js')}}'></script>
<script type="95178248c95c370a8f0fff74-text/javascript" src='{{ asset('asset2/js/jquery.barfiller.js')}}'></script>
<script type="95178248c95c370a8f0fff74-text/javascript" src='{{ asset('asset2/js/custom.js')}}'></script>

<script async src="" type="95178248c95c370a8f0fff74-text/javascript"></script>
<script type="95178248c95c370a8f0fff74-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="{{ asset('asset2/ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="95178248c95c370a8f0fff74-|49" defer=""></script></body>

</html>