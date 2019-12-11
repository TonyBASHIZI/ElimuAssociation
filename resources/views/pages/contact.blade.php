@extends('layout.default')

@section('content')
<header class="site-header">
      <div class="top-header-bar">
             <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                     <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        @foreach($logo as $i)
                      <div class="header-bar-email">
                                  MAIL: <a href="#"><span class="__cf_email__" data-cfemail="d7b4b8b9a3b6b4a397b8a2a5b4bfb6a5bea3aef9b4b8ba">{{ $i->email }}</span></a>
                         </div>
                               <div class="header-bar-text">
                               <p>PHONE: <span>{{ $i->tel }}</span></p>
                          </div>
                       </div>
                       @endforeach
                <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                      <div class="donate-btn">
                          <a href="{{ url('contacter')}}">Localisation</a>
                      </div>
                </div>
               </div>
             </div>
      </div>
  <div class="nav-bar">
        <div class="container">
              <div class="row">
                  <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                       <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="index.html" rel="home">
                                @foreach ($logo as $item)
                                {{-- <img class="d-block" src="{{ asset('storage/'.$item->image) }}" alt="logo"></a> --}}
                                {{-- <img class="d-block" src="{{asset('asset2/images/Elimu.JPG')}}" alt="logo" style="width:170px; heidth:250px;"></a> --}}
                                <img class="d-block" src="{{asset('asset2/images/logo.png')}}" alt="logo"></a>
                                @endforeach
                                
                       </div>
                          <nav class="site-navigation d-flex justify-content-end align-items-center">
                                 @foreach ($menu as $item)
                                               <ul  class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                     
                                               <li class="current-menu-item">
                                                  <a href="{{ url('nous') }}">{{ $item->nous }}</a>
                                                </li>
  
                                               <li>
                                                      <a  href="{{ url('/') }}">{{ $item->actualite }}</a>
                                               </li>
                      
                                               <li><a href="{{ route('rel') }}">NOS PROJETS</a>
               
                                               </li>
                                                <li>
                                                    <a href="{{ url('parte') }}">{{ $item->partenaire }}</a>
                                               </li>
                                          
                                               
                                               <li>
                                                    <a href="{{ url('adhesion') }}">ADHESION</a>
                                               </li>
                           
  
  
                                               </ul>
                                               
                                  
                                      
                                                 @endforeach
                          {{-- <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
  
                            <li><a 
                            href="about.html">Qui sommes nous ?</a></li>
                                              <li class="current-menu-item"><a href="{{ url('/')}}">Actualités</a></li>   
                             <li><a href="portfolio.html">Projets</a></li>
                             <li><a href="news.html">Partenaires</a></li>
                             <li><a href="contact.html">Adhesion</a></li>
                          </ul> --}}
                          </nav>
                                <div class="hamburger-menu d-lg-none">
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                </div>
                  </div>
              </div>
         </div>
  </div>
  </header><br><br>
<div class="welcome-wrap">
        <div class="container">
            <div class="row">
                   <p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5644.803661834637!2d5.385042540297668!3d43.29140813207076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c0a4464e159d%3A0xa74aa38473bc53d1!2s17+Rue+Nau%2C+13006+Marseille%2C+France!5e0!3m2!1sen!2sus!4v1566039879731!5m2!1sen!2sus" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                   </p>
                </div>
                <!-- <div class="row"> -->
                    <!-- <div class="col-12"> -->
                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.086556601319!2d29.230528414656987!3d-1.6881891366725363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dd0589f812c577%3A0x4389b1059fe9df29!2sCentre+d&#39;Accueil+Isidore+Bakanja!5e0!3m2!1sen!2scd!4v1565427594824!5m2!1sen!2scd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                <!--<iframe src="https://goo.gl/maps/KmJeSsmVVj9HB3af8"  allowfullscreen></iframe>-->
                
                
           
                    <!-- </div> -->
                <!-- </div> -->
            </div>
     
      </div>

@endsection
