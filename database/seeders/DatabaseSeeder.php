<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fanart;
use App\Models\Image;
use App\Models\Payment;
use App\Models\Skillsart;
use App\Models\Skillsprogrammer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Image::create([
            "picture" => "akrilik.png",
            "judul_detail" => "Aplikasi website Akrilik Laser Cutting",
            "detail" => "Aplikasi website profil perusahaan CV. Mekar Laser dengan nama Akrilik Laser
            Cutting",
            "rincian" => "Laravel 8, PHP 7.4, Mysql, AOS JS, Bootstrap 5.2",
            "judul" => "Akrilik Laser Cutting",
            "jenis" => "Aplikasi Web",
            "klien" => "CV. Mekar Cutting Digital",
            "apk" => "Aplikasi Web",
            "link" => "https://akriliklasercutting.com/"
        ]);
        Image::create([
            "picture" => "bimahelm.png",
            "judul_detail" => "Aplikasi website Bima Helm",
            "detail" => "Aplikasi website ke dua dari perusahaan CV. Mekar Laser dengan nama Bima Helm",
            "rincian" => "Laravel 8, PHP 7.4, Mysql, AOS JS, Bootstrap 5.2",
            "judul" => "Bima Helm",
            "jenis" => "Aplikasi Web",
            "klien" => "CV. Mekar Cutting Digital",
            "apk" => "Aplikasi Web",
            "link" => "Proses"
        ]);
        Image::create([
            "picture" => "softdev.png",
            "judul_detail" => "SoftDev Community",
            "detail" => "Website portfolio komunitas yang bernama SoftDev Community",
            "rincian" => "Laravel 8, PHP 7.4, Mysql, AOS JS, Bootstrap 5.2",
            "judul" => "SoftDev Community",
            "jenis" => "Aplikasi Web",
            "klien" => "SoftDev Community",
            "apk" => "Aplikasi Web",
            "link" => "https://softdev.akriliklasercutting.com/"
        ]);
        Fanart::create([
            "gambar" => "art1.jpg"
        ]);
        Fanart::create([
            "gambar" => "art2.jpg"
        ]);
        Fanart::create([
            "gambar" => "art3.jpg"
        ]);
        Fanart::create([
            "gambar" => "art4.jpg"
        ]);
        Fanart::create([
            "gambar" => "art5.jpg"
        ]);
        Fanart::create([
            "gambar" => "art6.jpg"
        ]);
        Payment::create([
            "gambar" => "dana.png"
        ]);
        Payment::create([
            "gambar" => "paypal.png"
        ]);
        Payment::create([
            "gambar" => "trakteer.png"
        ]);
        Skillsart::create([
            "gambar" => "photoshop.png"
        ]);
        Skillsart::create([
            "gambar" => "sai.png"
        ]);
        Skillsart::create([
            "gambar" => "coreldraw.png"
        ]);
        Skillsprogrammer::create([
            "gambar" => "larvel.png"
        ]);
        Skillsprogrammer::create([
            "gambar" => "codeigniter.png"
        ]);
        Skillsprogrammer::create([
            "gambar" => "git.png"
        ]);
        Skillsprogrammer::create([
            "gambar" => "css.png"
        ]);
        Skillsprogrammer::create([
            "gambar" => "bootstrap.png"
        ]);
        Skillsprogrammer::create([
            "gambar" => "php.png"
        ]);
        Skillsprogrammer::create([
            "gambar" => "js.png"
        ]);
        Skillsprogrammer::create([
            "gambar" => "html5.png"
        ]);
    }
}