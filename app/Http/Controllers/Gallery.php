<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gallery extends Controller
{
    public function show($id = null){
        $data = [];
        $data["title"] = "Gallery";

        if($id !== null){
            $data["id"] = $id;
            //return "<pre>" . print_r($data) . "</pre>";
            return view('gallery.one', $data);
        }
        else
            return view('gallery.main', $data);

    }
}
