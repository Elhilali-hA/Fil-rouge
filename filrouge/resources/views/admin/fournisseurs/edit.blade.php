@extends('admin.fichier')

@extends('admin.dash')

@section('name')
<h4>Modal Header</h4>
<div class="panel panel-default">
  <div class="panel-body">
    <p>Modifier Fournisseur: </p>
    <form action="{{ route('fournisseur.update', ['id' =>$four->id])}}" method="POST" >
      {{ csrf_field() }}
        <div class="d-flex flex-column">
          <label for="id" >Id :</label>
          <input name='id' value="{{ $four->id }}" type="text">
        </div>
        <div class="d-flex flex-column">
          <label for="nom">Nom :</label>
          <input name='nom' value="{{ $four->nom }}" type="text">
        </div>    
        <div class="d-flex flex-column">
          <label for="ville">ville :</label>
          <input name='ville' value="{{ $four->ville }}" type="text">
        </div> 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info" >Modifier</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
@endsection