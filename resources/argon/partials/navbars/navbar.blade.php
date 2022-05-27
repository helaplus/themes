@auth()
    @include('helaplusthemes::partials.navbars.navs.auth')
@endauth
    
@guest()
    @include('helaplusthemes::partials.navbars.navs.guest')
@endguest