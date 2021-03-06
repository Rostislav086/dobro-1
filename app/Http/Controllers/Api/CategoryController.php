<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {

        return response(Category::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
