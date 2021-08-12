@extends('layouts.app')




@section('content')
<body>

<div class="col-md-11 p-2 bg-info" style="margin: auto; border: 1px; border-radius:12px position: relative;">
    <nav class="col-md-6 navbar navbar-light bg-light" style="margin: auto">
        <a class="text-dark" href="#">Acceuil</a>
        <a class="text-dark" href="#">Medicaments</a>
        <a class="text-dark" href="#">Inpox</a>
        <a class="text-dark" href="#">Client</a>
        <a class="text-dark" href="#">Contact admin </a>
      </nav>
     <section class="col-md-12 mt-3">


       <div class="col-lg-12 d-flex flex-row justify-content-around list-group p-3">
  
         <div>
           <button class="col-md-12 btn btn-light text-center ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Dashboard
           </button>
         </div>
         

         
         <div>
           <a class="col-md-12 btn btn-light dropdown-toggle text-center ml-2" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="btn btn-light col-12" href="{{ route('categories') }}">categories</a>
              <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#categorie">Ajout</a>
            </div>
          </div>
          
          <div class="dropdown">
            <a class="col-md-12 btn btn-light dropdown-toggle text-center ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              produit
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#produit">Ajout</a>
              <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#produit">produit disponible</a>
              <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#produit">produits perimés</a>
            </div>
          </div>
          
          <div class="dropdown">
            <a class="col-md-12 btn btn-light dropdown-toggle text-center ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              vente
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#vente">ajout client</a>
              <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#vente">operation de vente</a>
              <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#vente">produits vendus</a>
              <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#vente">routeur sur vente</a>
            </div>
          </div>
          
          <div class="dropdown">
           <a class="col-md-12 btn btn-primary dropdown-toggle text-center ml-2" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Mon compte
           </a>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             <a type="button" class="btn btn-light col-12" href="{{ route('stock') }}">Profile</a>
             <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#liste">messages</a>
             <a href="{{url('logout')}}" class="btn btn-light col-12">Log out</a>
           </div>
         </div>

      </div>

      


     </section>

    
     

</div>

<div class="">
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Pharmacie
          </h6>
          <p>
           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, obcaecati assumenda voluptates 
           ipsa soluta quibusdam sit, eos iusto eius perspiciatis, 
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">test</a>
          </p>
          <p>
            <a href="#!" class="text-reset">test</a>
          </p>
          <p>
            <a href="#!" class="text-reset">test</a>
          </p>
          <p>
            <a href="#!" class="text-reset">test</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Commandes</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Youssoufia, NY 10012, MA</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            test@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 05 234 xx7 88</p>
          <p><i class="fas fa-print me-3"></i> + 05 234 5xx 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgb(0, 0, 0);">
    © 2021 Copyright:
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</div>
      
@endsection


    