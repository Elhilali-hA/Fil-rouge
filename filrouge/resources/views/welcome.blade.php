@extends('data.header')

<body class="antialiased">
    
    <div class="p-1 bg-secondary text-white">
        vqevd
    </div>
    
    <section>

        
        <div class="navbar navbar-light bg-primary">
            <div class="col-md-8 flex d-flex row justify-content-around">
                <a class="navbar-brand" href="#">Home</a> 
                <a class="navbar-brand" href="#">Produit</a> 
                <a class="navbar-brand" href="#">Contacter-nous</a> 
            </div>
            @if (Route::has('login'))
            <div class="float-right">
                    {{-- @if (Route::has('auth'))
                    <a href="{{ route('dashboard') }}">dash</a>
                    @endif    --}}
                    @auth
                        <a href="{{ url('logout') }}" class="text-white text-gray-700 underline">logout</a>
                    @else
                        <a class="text-white" href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
    
                        @if (Route::has('register'))
                            <a class="btn btn-danger ml-2" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
         </div>
        
    
        <div class="col-md-12 d-flex flex-row justify-content-center" style="padding: 80px 0">
          <div class="col-md-6 p-3 text-center">
              <h1>Pharmacie site</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iste cum est modi dolor</p>
              <button>Log in</button>
          </div>
          <img class="col-md-5" src="/img/background.png" alt="">
        </div>
    </section>
    


    <section>
        <div class="container overflow-hidden">
            <h1 class="text-center">Les maladies les plus courantes </h1>
            <div class="row gy-5 text-center">
                  <div class="col-4 p-3 d-flex flex-column">
                      <img src="/img/fievre.svg" alt="" width="50px" height="50px" style="margin-left:auto;margin-right:auto">
                      <a href="">fièvre</a>
                </div>
                
            <div class="col-4 p-3 d-flex flex-column">
                <img src="/img/maldos.svg" alt="" width="50px" height="50px" style="margin-left:auto;margin-right:auto">
                <a href="">mal de dos</a>
            </div>

            <div class="col-4 p-3 d-flex flex-column">
                <img src="/img/osseuse.svg" alt="" width="50px" height="50px" style="margin-left:auto;margin-right:auto">
                <a href="">Douleur osseuse</a>
            </div>
            
            <div class="col-4 p-3 d-flex flex-column">
                <img src="/img/Rhume.svg" alt="" width="50px" height="50px" style="margin-left:auto;margin-right:auto">
                <a href="">Rhume</a>
            </div>
            <div class="col-4 p-3 d-flex flex-column">
                <img src="/img/Asthma.svg" alt="" width="50px" height="50px" style="margin-left:auto;margin-right:auto">
                <a href="">Asthma</a>
            </div>
            <div class="col-4 p-3 d-flex flex-column">
                <img src="/img/Insomnie.svg" alt="" width="50px" height="50px" style="margin-left:auto;margin-right:auto">
                <a href="">Insomnie</a>
            </div>
        </div>
    </div>

   
      
    </section>

            
        
    </body>
@extends('data.footer')
