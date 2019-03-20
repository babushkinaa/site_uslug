<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function showAll()
    {
        return Post::all();
    }

    public function showAllPaginate()
    {
        return Post::paginate(10);
    }

    public function showOne($slug)
    {
        return Post::where('slug',$slug)->get();
    }

}
