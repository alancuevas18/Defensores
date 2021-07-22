<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Tag;
use App\Advert;
use App\Economy;

use Carbon\Carbon;

class PageController extends Controller
{
    function index(){
        //economies moneda
        $dollarV = Economy::orderby('id', 'DESC')->where('name', 'Dolar Venta')->first();
        $dollarC = Economy::orderby('id', 'DESC')->where('name', 'Dolar Compra')->first();
        $euroV = Economy::orderby('id', 'DESC')->where('name', 'Euro Venta')->first();
        $euroC = Economy::orderby('id', 'DESC')->where('name', 'Euro Compra')->first();

        //economies fuel
        $gp = Economy::orderby('id', 'DESC')->where('name', 'Gasolina Premiun')->first();
        $gr = Economy::orderby('id', 'DESC')->where('name', 'Gasolina Regular')->first();
        $dp = Economy::orderby('id', 'DESC')->where('name', 'Diesel Premiun')->first();
        $dr = Economy::orderby('id', 'DESC')->where('name', 'Diesel Regular')->first();
        $gasp = Economy::orderby('id', 'DESC')->where('name', 'Gas Propano')->first();
        $gasn = Economy::orderby('id', 'DESC')->where('name', 'Gas Natural')->first();    
       
        //portada
        $postCat1 = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->where('category_id', '1')->first();
        //politica
        $postCat2 = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->where('category_id', '2')->first();
        //economia
        $postCat3 = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->where('category_id', '3')->first();
        //nacionales
        $postCat4 = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->where('category_id', '4')->first();
        //internacionales
        $postCat5 = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->where('category_id', '5')->first();
         //Anuncio
         $anuncio = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->where('category_id', '28')->first();
        //otros
        $postOthers = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->where('category_id', '26')->paginate(8);
        //opinion
        $postOpinion = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->where('category_id', '12')->paginate(3);
        $advert = Advert::orderby('id', 'DESC')->where('url','!=', 'N/A')->first();
        $fun = Advert::orderby('id', 'DESC')->where('url', 'N/A')->first();
        $last3 = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        return view('web.home', compact([
            'postCat1',
            'postCat2',
            'postCat3',
            'postCat4',
            'postCat5',
            'anuncio',
            'postOthers',
            'postOpinion',
            'advert',
            'dollarV',
            'dollarC',
            'euroV',
            'euroC',
            'gp',
            'gr',
            'dp',
            'dr',
            'gasp',
            'gasn',
            'fun',
            'last3'
        ]));
    }

    function search(Request $request){
        $name = $request->get('name');
        $last3 = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        $postsearch = Post::orderby('id', 'DESC')
                    ->name($name)
                    ->where('status', 'PUBLISHED')
                    ->paginate(6);
        if ($postsearch->isEmpty()) {
            $cont = true;
        }else{
            $cont = false;
        }
        return view('web.search', compact([
            'postsearch',
            'name',
            'cont',
            'last3'
        ]));
    }

    function blog(){
        $posts = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        $last3 = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        return view('web.posts', compact('posts', 'last3'));
    }

    function post($slug){
        $post = Post::where('slug', $slug)->first();
        $last3 = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        $category = Post::where('slug', $slug)->pluck('category_id')->first();
        $postsByCat = Post::where('category_id', $category)->orderby('id', 'DESC')->where('status', 'PUBLISHED')->paginate(7);
        return view('web.post', compact([
            'post',
            'postsByCat',
            'last3'
        ]));
    }

    function category($slug){
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $categoryName = Category::where('slug', $slug)->pluck('name')->first();
        $posts = Post::where('category_id', $category)->orderby('id', 'DESC')->where('status', 'PUBLISHED')->paginate(4);
        $last3 = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        if ($posts->isEmpty()) {
            $cont = true;
        }else{
            $cont = false;
        }
        return view('web.category', compact([
            'posts',
            'categoryName',
            'cont',
            'last3'
        ]));
    }

    function tag($slug){
        $tagName = Tag::where('slug', $slug)->pluck('name')->first();
        $last3 = Post::orderby('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        $posts = Post::whereHas('tags', function($query) use ($slug){
            $query->where('slug', $slug);
        })      ->orderby('id', 'DESC')
                ->where('status', 'PUBLISHED')
                ->paginate(4);
        return view('web.tags', compact([
            'posts',
            'tagName',
            'last3'
            ]));
    }


}
