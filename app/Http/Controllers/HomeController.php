<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['editors_picks'] = Post::with('author','category')->where('is_editors_pick',1)
            ->where('status','Published')
            ->limit(4)->get();
//        dd($data);
        return view('front.index',$data);
    }
}
