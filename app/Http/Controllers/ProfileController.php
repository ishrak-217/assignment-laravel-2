<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $name = "Donal Trump";
        $age  = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];
    }
}
