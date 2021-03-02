<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newsController extends Controller
{
    public function article($id){
        echo "Halaman artikel dengan id $id";
    }

    public function news(){
        return view ('artikel')
            ->with ('url', 'https://www.educastudio.com/news');
    }

    public function newsString($string){
        return view ('artikel')
            ->with ('url', 'https://www.educastudio.com/news/' . $string);
    }
}

