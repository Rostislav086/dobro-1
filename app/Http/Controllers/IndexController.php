<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class IndexController extends Controller
{
    public function index() {
//        $xml = XmlParser::load('https://dobro.mail.ru/projects/rss/target/');
//        dump($xml);
//        $data = $xml->parse([
//            'categories' => ['uses' => 'shop.categories.category[::id]'],
//            'offers'=> ['uses' => 'shop.offers.offer[::id,::available,url]']
//        ]);
//        dd($data);

        return view('index');
    }
}
