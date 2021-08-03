<div class="modal fade" id="produit" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajout</h4>
        </div>
        <div class="modal-body">
          <p>Ajouter un produit :</p>
          <form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data" >
            <div class="d-flex flex-column">
              <label for="" >Id :</label>
              <input name='id' type="text">
            </div>
            <div class="d-flex flex-column">
              <label for="">Nom:</label>
              <input name='nom' type="text">
            </div>
            <div class="d-flex flex-column">
              <label for="">PSIN:</label>
              <input name='psin' type="text">
            </div>
            <div class="d-flex flex-column">
              <label for="">categorie nom:</label>
              <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">One</option>
                </select>
              </div>
            </div>
            <div class="d-flex flex-column">
              <label for="">image:</label>
              <input name='featured' type="text">
            </div>
            <div class="d-flex flex-column">
              <label for="">prix:</label>
              <input name='prix' type="text">
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" data-dismiss="modal">ajouter</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
