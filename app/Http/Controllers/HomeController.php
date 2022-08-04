<?php

namespace App\Http\Controllers;
use App\Models\Image;
use App\Models\Fanart;
use App\Models\Payment;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("Home/home", [
            "title" => "My Portfolio",
            "gambars" => Image::all(),
            "fanarts" =>Fanart::all(),
        ]);
    }
    public function commission()
    {
        return view("Commission/Home/commission", [
            "title" => "Open Commission",
            "gambars" => Image::all(),
            "fanarts" =>Fanart::all(),
            "payments" => Payment::all()
        ]);
    }
    public function detailhasil($id)
    {
        return view("Home/detail", [
            "title" => "Detail",
            "rincian" => Image::find($id),
        ]);
    }
}