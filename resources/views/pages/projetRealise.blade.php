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
                                <a class="d-block" href="index.html" rel="home"><img class="d-block" src="{{asset('asset2/images/logo.png')}}" alt="logo"></a>
                           </div>
                              <nav class="site-navigation d-flex justify-content-end align-items-center">
                                     @foreach ($menu as $item)
                                                   <ul  class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                         
                        <li ><a href="{{ url('nous') }}">{{ $item->nous }}</a></li>
      
                                                   <li>
                                                        <a  href="{{ url('/') }}">{{ $item->actualite }}</a>
                                                   </li>
                          
                                                   <li class="current-menu-item"><a href="{{ route('rel') }}">NOS PROJETS</a>
                                             
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
      </header>

<div class="home-page-icon-boxes">
        <div class="container">
          <div class="row">
           <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
           <div class="icon-box active">
               <figure class="d-flex justify-content-center">
               <img src="{{ asset('asset2/images/hands-gray.png')}}" alt="">
               <img src="{{ asset('asset2/images/hands-white.png')}}" alt="">
               </figure>
                 <header class="entry-header">
                 <a href="{{ route('rel')}}"><h3 class="entry-title">Projets realisés</h3></a> 
              </header>
             <div class="entry-content">
                  <p>Elimu Association execute des projets, et ces deriners certains sont proposés  les adherants <br>
                     <a href="{{ route('rel')}}" 
                     style="color :black;">Voir plus</a>
     
                  </p>
             </div>
           </div>
     </div>
     <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
           <div class="icon-box">
              <figure class="d-flex justify-content-center">
              <img src="{{ asset('asset2/images/dove.png')}}" alt="">
              <img src="{{ asset('asset2/images/dove.png')}}" alt="">
              </figure>
                <header class="entry-header">
                  <a href="{{ route('cour')}}"><h3 class="entry-title">Projets en cours</h3></a> 
                 </header>
            <div class="entry-content">
                 <p>Projets en cours, et ces deriners certains sont proposés  les adherants  <br></p>
               <a href="{{ route('cour')}}">Voir plus</a>
             </div>
           </div>
     </div>
     <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <figure class="d-flex justify-content-center">
              <img src="{{ asset('asset2/images/charity-gray.png')}}" alt="">
              <img src="{{ asset('asset2/images/charity-white.png')}}" alt="">
                 </figure>
                   <header class="entry-header">
                       <a href="{{ route('venir')}}"><h3 class="entry-title">Projets A venir</h3></a>
                          </header>
                                <div class="entry-content">
                                     <p>Elimu Association execute des projets, et ces deriners certains sont proposés  les adherants  <br></p>
                                     <a href="{{ route('venir')}}">Voir plus</a>
                                </div>
                        </div>
                     </div>
                </div>
           </div>
     </div>

     <div class="our-causes pt-0"> 
         <div class="container">
            <div class="row">     
       @foreach ($cat as $item)
       
      <div class="col-12 col-md-6 col-lg-4">
        <div class="cause-wrap">
            <figure class="m-0">
                 <a href="{{ url('datailProjet', [$item])}}"><img src="{{ asset('storage/'.$item->image) }}" style="height: 200px;" alt=""></a>
                     <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                     <a href="{{ route('datailProjet', [$item]) }}" class="btn gradient-bg mr-2">Voir detail</a>
                     </div>
           </figure>
      <div class="cause-content-wrap">
  <header class="entry-header d-flex flex-wrap align-items-center">
  <h3 class="entry-title w-100 m-0"><a href="#">{{ $item->titre }}</a></h3>
  </header>
  <div class="entry-content">
  <p class="m-0">Projet : {{ $item->categorie }}</p>
  </div>
  <div class="fund-raised w-100">
  
  <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
  <div class="fund-raised-total mt-4">
   Date de publication
  </div>
  <div class="fund-raised-goal mt-4">
        {{ $item->created_at }}
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

@endforeach
     </div>
    </div>
     </div>
   
@endsection
