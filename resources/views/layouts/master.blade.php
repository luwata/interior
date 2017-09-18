<!DOCTYPE html>
<html lang="fr">

 	<!-- Head content -->
	@include('front.partials.head')

  <body>

    @include('front.partials.nav')
      
    <main class="container-fluid">
      
        @yield('content')

    </main>
      
	<!-- footer content -->
	@include('front.partials.footer')
	
  </body>
</html>
