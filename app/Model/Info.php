<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    //

    public function showAll()
    {
        return Info::all();
    }

    public function showOne($slug)
    {
        return Info::where('slug',$slug)->get();
    }

    public function showIndexPage()
    {
        return Material::where('index_page', 1)->get();
    }

}
