<?php

namespace App\Http\Controllers;

use App\Repository\FamiliaRepository;
use Illuminate\Http\Request;
use stdClass;

class HomeController extends Controller
{
    public function home()
    {
        $data = new stdClass;

        $data->pessoas = [];

        return view('home', ['data' => $data]);
    }

    public function gravar(Request $request)
    {
        try {
            $data = $request->input('nameForm');
            $data = json_decode($data);

            FamiliaRepository::SaveFamily($data);
        } catch (\Exception $e) {
            echo ($e->getMessage());
        }
    }

    public function ler()
    {
        $data = new stdClass;

        $data->pessoas = FamiliaRepository::getFamily();

        

        return view('home', ['data' => $data]);
    }
}
