<div class="modal fade" id="editer" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modifier</h4>
        </div>
        <div class="modal-body">
            <form action="{{ route('categorie.update',['id' => $category->id])}}" method="POST">
                <p>Modifier categorie: </p>
          {{ csrf_field() }}
            <div class="d-flex flex-column">
              <label for="" >Id :</label>
              <input name='id' value="{{ $category->id }}" type="text">
            </div>
            <div class="d-flex flex-column">
              <label for="">Nom :</label>
              <input name='nom' value="{{ $category->nom }}" type="text">
            </div>    
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-info" >Modifier</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>