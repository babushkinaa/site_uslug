<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    public function showAll()
    {
        return Work::all();
    }

    public function showsitemap()
    {
        return Work::all()->first();
    }

    public function showAllPaginate()
    {
        return Work::paginate(10);
    }

    public function showIndexPage()
    {
        return Work::where('index_page', 1)->get();
    }

    public function showOne($slug)
    {
        return Work::where('slug',$slug)->get();
    }

    public function mywork()
    {
        return $this->belongsToMany(Mywork::class);
    }


}
