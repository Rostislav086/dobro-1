<?php

namespace App\Http\Controllers;

use App\Fond;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FondsController extends Controller
{
    public function index() {
        return response(Fond::query()->limit(5)->get()->jsonSerialize(), Response::HTTP_OK);
    }
}
