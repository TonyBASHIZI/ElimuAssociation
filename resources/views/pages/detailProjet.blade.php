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
                        
                                                 <li class="current-menu-item">
                                                     <a href="{{ route('rel') }}">NOS PROJETS</a>
                                                           
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
    </header>
 <br>
 <br>       
<div class="featured-cause">
        <div class="container-fluid">
           <div class="row">
              <div class="col-12">
                  <div class="section-heading" style="text-align:center;">
                      <h4 class="">{{ $detail->titre }}</h4>
                      <p>Projet {{ $detail->categorie }}</p>
                  </div>
              </div>
          </div>
     <div class="row">
          <div class="col-12 col-lg-12">
              <div class="cause-wrap d-flex flex-wrap justify-content-between">
                 <figure class="m-0">
                 <img src="{{ asset('storage/'.$detail->image) }}" style="width:250px; heidth:250px;margin-left:5px;" alt="">
                     </figure>
         <div class="cause-content-wrap">
                <header class="entry-header d-flex flex-wrap align-items-center">
                   <h3 class="entry-title w-100 m-0"><a href="#"></a></h3>
          <div class="posted-date">
          <a href="#">{{ $detail->created_at}}</a>
                   </div>
                       <div class="cats-links">
                         <a href="#"></a>
                         </div>
        </header>
 <div class="entry-content" style="margin-left:40px; margin-rigth:40px;">
 <p class="m-0">
        {!! $detail->detail !!}     
</p>
 </div>
 
 </div>
 
 </div>
 </div>
 </div>
 </div>
<br>
<br>

 
    

@endsection
