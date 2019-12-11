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
                       
                                                 <li>
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
                                            
                                                 
                                                 <li class="current-menu-item">
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


   <div class="contact-page-wrap">
       <div class="container">
   <div class="row">
   <div class="col-12 col-lg-5">
   <div class="entry-content">
   <h2>Formulaire d'adhesion</h2>
   <p></p>
   <ul class="contact-social d-flex flex-wrap align-items-center">
 
   <li><a href="https://m.facebook.com/Elimu_Usforeducation-1193850937487655/?ref=bookmarks"><i class="fa fa-facebook"></i></a></li>
   <li><a href="https://mobile.twitter.com/usforeducation"><i class="fa fa-twitter"></i></a></li>
   <li><a href="http://linkedin.com/in/elimu-usforeducation-394a7a190 Le lien LinkedIn"><i class="fa fa-linkedin"></i></a></li>
   </ul>
   <ul class="contact-info p-0">
        @foreach($logo as $i)
   <li><i class="fa fa-phone"></i><span>{{ $i->tel }}</span></li>
   <li><i class="fa fa-envelope"></i><span><a href="" class="__cf_email__" data-cfemail="98f7fefef1fbfdd8ecfdf5e8f4f9ecfdb6fbf7f5">{{ $i->email }}</a></span></li>
  
      @endforeach
     
    </ul>
   </div>
   </div>
   <div class="col-12 col-lg-7">
   <form method="POST" action="{{ route('adhesion.store') }}" class="contact-form" enctype="multipart/form-data ">
    {{ csrf_field() }}
        <input type="text" placeholder="Name" name="name">
        <input type="email" placeholder="Email" name="email">
        <textarea rows="15" cols="6" placeholder="Messages" name="message">

        </textarea>
        <label for="photo">Piece d'identité  :</label><br>
        <input type="file" placeholder="Piece d'identité" name="photo"><br>
        <label for="lettre">Lettre de motivation :</label><br>
        <input type="file" placeholder="Lettre de motivation" name="lettre"><br>
        <label for="doc">Autres documents :</label><br>
        <input type="file" placeholder="Autres documents" name="doc">
        <span>
            <input class="btn gradient-bg" type="submit" name="submit" value="Adherer maintenant">
          </span>
       </form>
   </div>

   </div>
       </div>
   </div>

@endsection
