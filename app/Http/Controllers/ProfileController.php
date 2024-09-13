<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'M. Fakhri Wilova',
            'kelas' => 'A',
            'npm' => '2217051104'
        ];
        return view('profile', $data);
    }

    // public function profile($nama="", $kelas="", $npm="")
    // {     
    //     $data = [
    //         'nama' => $nama,
    //         'kelas' => $kelas,
    //         'npm' => $npm,
    //     ];
    //     return view('profile', $data); 
    // }

}