<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function aboutus() {
        $data= array('nama' => 'Arin Kistia Nugraeni',
        'nim' => '1941720006');
        return view ('about-us',$data);
}