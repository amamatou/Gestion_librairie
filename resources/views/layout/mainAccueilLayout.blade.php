<!DOCTYPE html>
<html lang="en">
 <head>
   @include('layout.partials.head')
 </head>
 <body>
      @include('layout.partials.header')  {{-- user_header --}}
      <div class="main_content">
        @yield('content')
      </div>
      @include('layout.partials.footer') {{-- footer_user --}}
      @include('layout.partials.footer-scripts') 
</body>
</html>