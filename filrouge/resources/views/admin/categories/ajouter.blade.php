<div class="modal fade" id="categorie" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajout</h4>
        </div>
        <div class="modal-body">
          <p>Ajouter une categorie :</p>
          <form action="{{ route('categorie.store') }}" method="POST">
          {{ csrf_field() }}
            <div class="d-flex flex-column">
              <label for="" >Id :</label>
              <input name='id' type="text">
            </div>
            <div class="d-flex flex-column">
              <label for="">Nom :</label>
              <input name='nom' type="text">
            </div>    
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" >ajouter</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>