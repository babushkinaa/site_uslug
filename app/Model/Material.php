<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function showAll()
    {
        return Material::all();
    }

    public function showAllPaginate()
    {
        return Material::paginate(10);
    }

    public function showOne($slug)
    {
        return Material::where('slug',$slug)->get();
    }

    public function showIndexPage()
    {
        return Material::where('index_page', 1)->get();
    }

    public function work()
    {
        return $this->belongsToMany(Mywork::class);
    }
}
