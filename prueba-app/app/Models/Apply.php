<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'last_name', 'email','contact','program', 'state'];

    public function estado(){
        $r="Pendiente";
        if($this->estado=="200"){
            $r="Contactado";
        }
        return $r;
    }
}
