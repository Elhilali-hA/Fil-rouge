@extends('admin.dash')


@section('name')

<div class="panel panel-default">
    <div class="panel-body">
        <table class="table mt-3 ml-3">
            <thead class="thead-dark">
                <th>
                   Id 
                </th>
               <th>
                Numero e commande
               </th>
               <th>
                Produit
               </th>
               <th>
                   categorie
               </th>
               <th>
                   date d'expiration
               </th>
               <th>
                prix
               </th>
            </thead>
            {{-- @foreach($fournisseurs as $four) --}}
            <tbody> 
               
                <tr>
                  <td>
                       {{-- {{ $four->id }} --}}
                      </td>
                      <td>
                        {{-- {{ $four->nom }} --}}
                        
                      </td>
                      <td>
                        {{-- {{ $four->ville }} --}}
                        
                      </td>
                      <td>
                        {{-- <a href="{{ route('fournisseur.edit', ['id' => $four->id ]) }}" class="btn btn-xs btn-info">Modifier</a> --}}
                      </td>
                      <td>
                        {{-- <a href="{{ route('fournisseur.delete', ['id' => $four->id ]) }}" class="btn btn-xs btn-danger">Supprimer</a>   --}}
                      </td>
                    </tr>
                    
                    
                  </tbody>
                  {{-- @endforeach --}}
           
           
           </table>
           
    </div>
</div> 


    
@endsection
    



