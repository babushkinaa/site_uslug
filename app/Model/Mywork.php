<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mywork extends Model
{
    //
    public function showAllMyWork()
    {
        return Mywork::paginate(10);
    }

    public function showAll()
    {
        return Mywork::all();
    }

    public function fromIndex()
    {
        $item = Mywork::all();
        $item = $item->toArray();
        $element = array_rand($item, 1);
//        dd($item[$element]);
//        return Mywork::where('id', $sumElement)->get();
        return $item[$element];
    }

    public function showOne($slug)
    {
        return Mywork::where('slug',$slug)->get();
    }

    public function material()
    {
        return $this->belongsToMany(Material::class);
    }

    public function uslugi()
    {
        return $this->belongsToMany(Work::class);
    }


}
