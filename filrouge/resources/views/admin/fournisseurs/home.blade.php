@extends('admin.fichier')

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
                Nom
               </th>
               <th>
                Ville
               </th>
               <th>
                   Modifier
               </th>
               <th>
                   Supprimer
               </th>
            </thead>
            @foreach($fournisseurs as $four)
            <tbody> 
               
                <tr>
                  <td>
                       {{ $four->id }}
                      </td>
                      <td>
                        {{ $four->nom }}
                        
                      </td>
                      <td>
                        {{ $four->ville }}
                        
                      </td>
                      <td>
                        <a href="{{ route('fournisseur.edit', ['id' => $four->id ]) }}" class="btn btn-xs btn-info">Modifier</a>
                      </td>
                      <td>
                        <a href="{{ route('fournisseur.delete', ['id' => $four->id ]) }}" class="btn btn-xs btn-danger">Supprimer</a>  
                      </td>
                    </tr>
                    
                    
                  </tbody>
                  @endforeach
           
           
           </table>
           
    </div>
</div> 


    
@endsection
    



