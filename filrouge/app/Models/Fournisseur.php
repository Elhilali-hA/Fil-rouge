<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fournisseur extends Model
{
    use HasFactory;
    
    public function cmd_fournisseur(){
        return $this->hasMany('App\cmd_fournisseur');
    }
}
