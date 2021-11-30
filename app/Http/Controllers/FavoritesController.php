<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //投稿をお気に入りするアクション
    public function store($micropostId){
        \Auth::user()->favorite($micropostId);
        return back();
    }
    
    public function destroy($micropostId){
        \Auth::user()->unfavorite($micropostId);
        return back();
    }
}
