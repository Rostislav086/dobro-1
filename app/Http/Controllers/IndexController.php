<?php

namespace App\Http\Controllers;


use App\Category;
use App\Fond;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;
use function GuzzleHttp\Psr7\str;

class IndexController extends Controller
{
    public function index()
    {
        $xml = XmlParser::load('https://dobro.mail.ru/projects/rss/target/');
        $data = $xml->parse([
            'offers' => ['uses' => 'shop.offers.offer[::id,::available,url,price,categoryId,picture,typePrefix,vendor,model]']
        ]);
        foreach ($data['offers'] as $offer) {
            $fond = Fond::query()->firstOrCreate([
                'name' => $offer['model'],
                'type_prefix' => $offer['typePrefix'],
                'category_id' => $offer['categoryId'],
                'vendor_id' => $offer['vendor'],
                'image' => $offer['picture'],
                'url' => $offer['url'],
                'price' => $offer['price'],
            ]);
        }
        dd(Fond::all());
//        return view('index');
    }
}
