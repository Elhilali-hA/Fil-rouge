@extends('layouts.app')
@extends('admin.fichier')



@section('content')
<body style="background-image:url('/img/da.png'); width: auto;
    height: auto; background-size: cover; background-repeat: no-repeat;
  background-attachment: fixed;">

<div class="col-md-11 p-2 mt-3" style="margin: auto; border: 1px; height:560px; position: relative;">
    <nav class="col-md-6 navbar navbar-light bg-light" style="margin: auto">
        <a class="navbar-brand" href="#">Navbar</a>
        <a class="navbar-brand" href="#">Navbar</a>
        <a class="navbar-brand" href="#">Navbar</a>
        <a class="navbar-brand" href="#">Navbar</a>
        <a href="{{url('logout')}}" class="navbar-brand"  style="font-size: 15px">Logout</a>
      </nav>
  
     <section class="col-md-12 d-flex flex-row ">


       <div class="col-lg-2 d-flex flex-column list-group p-3">
  
         <div>
           <button class="col-md-12 btn btn-dark active text-center mt-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Dashboard
           </button>
         </div>
         
         <div class="dropdown">
           <button class="col-md-12 btn btn-dark dropdown-toggle text-center mt-2 inline" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Fournisseurs
           </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a type="button" class="btn btn-light col-12" href="{{ route('fournisseur') }}">fournissers</a>
             <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#ajout">Ajout</button>
             <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#liste">liste fournissers</a>
               <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#commande">commande fournisseur</a>
           </div>
         </div>

         <div class="dropdown">
          <a class="col-md-12 btn btn-dark dropdown-toggle text-center mt-2" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           stock
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a type="button" class="btn btn-light col-12" href="{{ route('stock') }}">voir</a>
            <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#liste">produit sortie</a>
              <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#">produit entree</a>
          </div>
        </div>

         <div>
            <a class="col-md-12 btn btn-dark text-center dropdown-toggle mt-3" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="btn btn-light col-12" href="{{ route('categories') }}">categories</a>
                <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#categorie">Ajout</a>
              </div>
          </div>
   
         <div class="dropdown">
           <a class="col-md-12 btn btn-dark dropdown-toggle text-center mt-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             produit
           </a>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#produit">Ajout</a>
             <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#produit">produit disponible</a>
               <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#produit">produits perimés</a>
           </div>
         </div>
   
         <div class="dropdown">
           <button class="col-md-12 btn btn-dark dropdown-toggle text-center mt-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             personel
           </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#creer">creation employé</a>
                 <a type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#creer">liste personnel</a>
           </div>
         </div>
   
      </div>

      <div class="col-lg-9">

        @yield('name')
        
      </div>


     </section>

    
     

</div>
      
@endsection


    