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
                              <img class="d-block" src="{{asset('asset2/images/logo.png')}}" alt="logo"></a>
                              
                              @endforeach
                              
                     </div>
                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                               @foreach ($menu as $item)
                                             <ul  class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                   
                  <li ><a href="{{ url('nous') }}">{{ $item->nous }}</a></li>

                                             <li>
                                                  <a  href="{{ url('/') }}">{{ $item->actualite }}</a>
                                             </li>
                    
                                             <li><a href="{{ route('rel') }}">NOS PROJETS</a>
                                                       
                                             </li>
                                             <li class="current-menu-item">
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
</header>

<div class="home-page-icon-boxes">
        <div class="container">
          <div class="row">
              @foreach ($tout as $item)
              <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <a href="{{ url('datailParte', [$item])}}">
                        <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                        <img src="{{ asset('storage/'.$item->logot) }}" alt="">
                        <img src="{{ asset('storage/'.$item->logot) }}" alt="">
                        </figure>   
                    </div></a>
              </div>
              @endforeach
          
          </div>
        </div>
</div>
   
    
@endsection
