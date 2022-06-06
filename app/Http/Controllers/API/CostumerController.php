<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    public function index()
    {
        $data = Costumer::all();
        return response()->json($data, 200);
    }

    public function show(Costumer $id)
    {
        return response()->json($data, 200);
    }
}
