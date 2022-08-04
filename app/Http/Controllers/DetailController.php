<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detailhasil2($id)
    {
        return view("Commission/Home/detail", [
            "title" => "Detail",
            "rincian" => Image::find($id),
        ]);
    }
}