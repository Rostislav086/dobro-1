<?php

namespace App\Http\Controllers;


use App\Fond;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
