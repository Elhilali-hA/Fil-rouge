@extends('admin.fichier')

@extends('admin.dash')
@extends('admin.categories.editer')

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
                   Modifier
               </th>
               <th>
                   Supprimer
               </th>
            </thead>
            <tbody> 
                {{-- if table is empty --}}
                @foreach ($categories as $category)
                <tr>
                    <td>
                       {{ $category->id }}
                    </td>
                <td>
                        {{ $category->nom }}
           
                </td>
                <td>
                    <a href="{{ route('categorie.editer', ['id' => $category->id ]) }}" data-toggle="modal" data-target="#editer" class="btn btn-xs btn-info">Modifier</a>
                </td>
                <td>
                  <a href="{{ route('categorie.delete', ['id' => $category->id ]) }}" class="btn btn-xs btn-danger">Supprimer</a>  
                </td>
                </tr>
                    
                @endforeach
            </tbody>
           
           
           </table>
           
    </div>
</div>


    
@endsection


