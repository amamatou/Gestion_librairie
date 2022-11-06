<input type="checkbox" id="check">
<header>
<input type="checkbox" id="check_home">
        <form action="" method="post">
           @csrf 
           <nav class="main_nav">
           <div class="left">
               <div class="left_area">
                 <a href="{{route('home')}}"><h3><Span><img src="{{url('img/logo.png')}}" alt="Logo image" class="logo_img"></Span>  MGBLibrary</h3></a> 
               </div>
               @auth
               <label for="check">
               <a href="{{route('home')}}"> <i class="fas fa-bars" id="sidebar_btn"></i> </a>
               </label>
               @endauth
           </div>
           <div class="search_box">
            <input type="search" placeholder="Recherche..">
            <span class="fa fa-search"></span>
         </div>
         <ul class="ul_menu_nav">
            @auth
            <li class="active"><a href="{{route('home')}}">Accueil</a></li>
            @endauth
            @guest 
            <li class="active"><a href="#">Accueil</a></li>
            @endguest
            <li><a href="{{route('catalogue.get')}}">Catalogue</a></li>
            <li><a href="{{route('actualite.index')}}">Actualites</a></li>
            <li><a href="{{route('actualite.index')}}">Infos Pratiques</a></li>
            @guest
            <a href="{{ route('login') }}" class="btn_style cnx">Connexion</a>
            <a href="{{ route('register') }}" class="btn_style cnx">Inscription</a>
            @endguest
         </ul>
         
         @auth
         <ul class="ul_icon_nav">
            <!-- <div id="myOverlay" class="overlay">
               <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
               <div class="overlay-content">
                  <form action="#">
                     <input type="text" placeholder="Recherche.." name="search">
                     <button type="submit"><span class="fa fa-search search_box"></span></button>
                  </form>
               </div>
            </div>
          <button class="fa fa-search searchBtn after_cnx" onclick="openSearch()"></button> -->
            <li><a href="{{url('#')}}" class="notification">
                  <i class="fas fa-bell"></i>
                  <span class="badge">10</span>
               </a>
            </li>
            <!-- <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i></a></li> -->
         </ul>
            @endauth
            <label for="check_home" class="bar">
               <span class="fa fa-ellipsis-v" id="home"></span>
               <span class="fa fa-times" id="times"></span>
            </label>
         </nav></form>
</header>