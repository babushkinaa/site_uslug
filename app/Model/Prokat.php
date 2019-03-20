<?php

namespace App\Model;

use App\Model\Nasos;
use Illuminate\Database\Eloquent\Model;

class Prokat extends Model
{
    public function showAll()
    {
        return Prokat::all();
//        dd(Prokat::where('id',1)->get());
//        $test = Prokat::where('id',1)->get();
//        $nasos = Nasos::where('id',1)->get();
//        dd($test,$nasos);
    }

    public function n()
    {
        return $this->hasOne(Nasos::class,'id','prokat_id');
    }
}
