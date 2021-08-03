@extends('layouts.app')
@extends('admin.fichier')


@section('content')
<body style="background-image:url('/img/Rose-Petals.svg') ;width: auto;
    height: auto; background-size: cover;">

<div class="col-11 p-2 bg-white mt-3" style="margin: auto; border: 1px; border-radius:12px;height:560px; position: relative;">
    <nav class="col-md-6 navbar navbar-light bg-light" style="margin: auto">
        <a class="navbar-brand" href="#">Navbar</a>
        <a class="navbar-brand" href="#">Navbar</a>
        <a class="navbar-brand" href="#">Navbar</a>
        <a class="navbar-brand" href="#">Navbar</a>
        <a href="{{url('logout')}}" class="navbar-brand"  style="font-size: 15px">Logout</a>
      </nav>
  
     <section class="d-flex flex-row">


       <div class="col-md-2 d-flex flex-column list-group p-3">
  
         <div>
           <button class="btn btn-info list-group-item-action active text-center mt-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Dashboard
           </button>
         </div>
         
         <div class="dropdown">
           <button class="btn btn-info dropdown-toggle list-group-item-action text-center mt-2" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Fournisseurs
           </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#ajout">Ajout</button>
             <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#liste">liste fournissers</button>
               <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#commande">commande fournisseur</button>
                 <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#livaison">livraison des produits</button>
           </div>
         </div>

         <div>
            <button class="btn btn-info list-group-item-action text-center mt-3" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="btn btn-light col-12" href="{{ route('categories') }}">categories</a>
                <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#categorie">Ajout</button>
              </div>
          </div>
   
         <div class="dropdown">
           <button class="btn btn-info dropdown-toggle list-group-item-action text-center mt-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             produit
           </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#produit">Ajout</button>
             <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#produit">produit disponible</button>
               <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#produit">produits perimés</button>
                 <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#produit">mouvement de stock</button>
           </div>
         </div>
   
         <div class="dropdown">
           <button class="btn btn-info dropdown-toggle list-group-item-action text-center mt-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             personel
           </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#creer">creation employé</button>
                 <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#creer">liste personnel</button>
                   <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#creer">liste paie</button>
           </div>
         </div>
   
         <div class="dropdown">
           <button class="btn btn-info dropdown-toggle list-group-item-action text-center mt-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             vente
           </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#vente">ajout client</button>
               <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#vente">operation de vente</button>
                 <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#vente">produits vendus</button>
                   <button type="button" class="btn btn-light col-12" data-toggle="modal" data-target="#vente">routeur sur vente</button>
           </div>
         </div>
   

      </div>

     
        @yield('name')
      

     </section>

    




      
@endsection
