<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','featured','content','category_id'
      ];
    
    //   public function getFeaturedAttribute($featured){
    
    //     return asset($featured);
    //   }
    
    
      public function categorie(){
          return $this->belongsTo('App\categorie');
      }
}
