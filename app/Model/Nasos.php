<?php

namespace App\Model;

use App\Model\Prokat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Nasos extends Model
{
    public function showAll()
    {
        return Nasos::all();
    }

    public function showAllPaginate()
    {
        return Nasos::paginate(10);
    }

    public function showOne($slug)
    {
        return Nasos::where('slug',$slug)->get();
    }

    public function p()
    {
        return $this->belongsTo(Prokat::class,'prokat_id','id');
    }
}
