<?php

namespace App\Http\Controllers;

use App\Model\Info;
use App\Model\Material;
use App\Model\Mywork;
use App\Model\Nasos;
use App\Model\Post;
use App\Model\Prokat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User as appUser;
use App\Model\Slider;
use App\Model\Work;
use App\Model\Nasos as Naso;


class IndexController extends Controller
{
    protected $user;
    protected $slider;
    protected $works;
    protected $myworks;
    protected $prokat;
    protected $nasos;
    protected $material;
    protected $post;
    protected $info;

    public function __construct(appUser $user, Slider $slider, Work $works, Prokat $prokat, Naso $nasos, Mywork $mywork, Material $material, Post $post, Info $info)
    {
        //$this->middleware('auth');
        $this->user = $user;
        $this->slider = $slider;
        $this->works = $works;
        $this->myworks = $mywork;
        $this->prokat = $prokat;
        $this->nasos = $nasos;
        $this->material = $material;
        $this->post = $post;
        $this->info = $info;

    }
    
    public function index()
    {           
            return view('index',[
            'sliders'=>$this->slider->showAll(),    // Получим все изображения для слайдера
            'slidercount'=>$this->slider::count(),  // Посчитаем колличество изображений для слайдера
            'works'=> $this->works->showIndexPage(),
            'ocompany' => setting('site.ocompany'),
            'mywork' => $this->myworks->fromIndex(),
            'materials' => $this->material->showIndexPage()
        ]);
    }

    public function uslugi()
    {
        return view('uslugi',[
//            'works'=> $this->works->showIndexPage(),
            'works' => $this->works->showAllPaginate()
        ]);
    }

    public function prokat()
    {
        return view('prokat',[
            'prokat' => $this->nasos->showAllPaginate(),
        ]);
    }

    public function works()
    {
        return view('works',[
            'work' => $this->myworks->showAllMyWork()
        ]);
    }

    public function contact()
    {
        return view('contact',[
            'works'=> $this->works->showIndexPage(),
            'work' => $this->works->showAll()
        ]);
    }

    public function prokatslug($slug)
    {
        return view('prokatone',[
            'onenasos' => $this->nasos->showOne($slug)
        ]);
    }

    public function worksslug($slug)
    {
        $works = $this->myworks->showOne($slug);
        $foto = json_decode($works[0]->foto,true);
        $countfoto = count($foto);


        return view('worksone',[
            'works' => $works,
            'fotos' => $foto,
            'fotocount' => $countfoto
        ]);
    }

    public function uslugislug($slug)
    {
        return view('uslugione',[
            'oneuslug' => $this->works->showOne($slug)
        ]);
    }

    public function privacy()
    {
        return view('privacy',[
            'onenasos' => $this->nasos->showAll()
        ]);
    }

    public function sitemap()
    {
        return response()->view('sitemap.sitemap',[
            'nasos' => $this->nasos->showAll(),
            'uslugi' => $this->works->showAll(),
            'myworks' => $this->myworks->showAll(),
            'prokat' => $this->prokat->showAll(),
            'material' => $this->material->showAll(),
            'posts' => $this->info->showAll(),
            'index' => $this->works->showsitemap()
        ])->header('Content-Type', 'text/xml');
    }

    public function sitemapweb()
    {
        return view('sitemap.sitemapweb',[
            'nasos' => $this->nasos->showAll(),
            'uslugi' => $this->works->showAll(),
            'myworks' => $this->myworks->showAll(),
            'prokat' => $this->prokat->showAll(),
            'material' => $this->material->showAll(),
            'posts' => $this->info->showAll(),
            'index' => $this->works->showsitemap()
        ]);
    }

    public function material()
    {
        return view('material',
            [
                'material' => $this->material->showAllPaginate()
            ]);
    }

    public function materialSlug($slug)
    {
        return view('materialone',
            [
                'material' => $this->material->showOne($slug)
            ]);

    }

    public function post()
    {
        return view('post',
            [
                'posts'=>$this->info->showAll()
            ]);

    }

    public function postSlug($slug)
    {
        return view('postone',
            [
                'posts'=>$this->info->showOne($slug)
            ]);

    }
}
