@extends('admin.fichier')

@extends('admin.dash')

@section('name')

<div class="container overflow-hidden text-center ml-3 mt-2">
  <div class="row mt-3" >
    <div class="rounded col-5 p-3 bg-danger">
      <h1>Fournisseur</h1>
      <p>Nombre ajouter</p>
    </div>
    <div class="rounded col-md-5 p-3 bg-info ml-3">
      <h1>Produit</h1>
      <p>Nombre ajouter</p>
    </div>
  </div>

  <div class="row mt-3">
    <div class="rounded col-md-5 p-3 bg-secondary">
      <h1>Employées</h1>
      <p>Nombre ajouter</p>
    </div>
    <div class="rounded col-md-5 p-3 bg-warning ml-3">
      <h1>Personel</h1>
      <p>Status</p>
    </div>
  </div>
  <div class="row mt-3">
    <div class="rounded col-md-5 bg-success p-3">
      <h1>Les ventes</h1>
      <p>click ici >></p>
    </div>
  </div>

</div>
      
@endsection
