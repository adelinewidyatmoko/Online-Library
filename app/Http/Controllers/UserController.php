<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user = [
        'name'=> 'Adel',
        'email' => 'adelinemaharani812@gmail.com',
        'gambar'=> 'https://1.bp.blogspot.com/-7FKSQpCCg3g/X-sCIpmfVpI/AAAAAAAAQ04/C1QOo136Snk_IqgBn2DQgQI9awIEMUlWACPcBGAsYHg/w1200-h630-p-k-no-nu/2cdad7d88db36124212841c2892afbbf.jpg',
        
    ];
    public function index()
    {
        return view('profile')->with('user',$this->user);
    }
}
