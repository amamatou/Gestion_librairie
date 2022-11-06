<!DOCTYPE html>
<html lang="en">
 <head>
   @include('layout.partials.head')
 </head>
 <body>
      @include('layout.partials.header')  {{-- user_header --}}
      @include('layout.partials.sidebar')
      @include('layout.partials.mobile_navbar') {{-- user_mobile_navbar --}}
      <div class="user_content">
        @yield('content')
      </div>
      @include('layout.partials.footer') {{-- footer_user --}}
      @include('layout.partials.footer-scripts') 
</body>
</html>