<?php

use App\Fond;
use Illuminate\Database\Seeder;
use Orchestra\Parser\Xml\Facade as XmlParser;

class FondsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $xml = XmlParser::load('https://dobro.mail.ru/projects/rss/target/');
//        dump($xml);
        $data = $xml->parse([
            'categories' => ['uses' => 'shop.categories.category[::id]'],
            'offers' => ['uses' => 'shop.offers.offer[::id,::available,url,price,categoryId,picture,typePrefix,vendor,model]']
        ]);
//        dd($data['offers']);
        $FondsData = collect();
        $CategoriesData = collect();
        $Categories = collect();
        foreach ($data['offers'] as $offer) {

            $FondsData->add([
//                'id' => $offer['::id'],
                'available' => true,
                'price' => $offer['price'],
                'category_id' => $offer['categoryId'],
                'vendor_id' => $offer['vendor'],
                'name' => $offer['model'],
                'type_prefix' => $offer['typePrefix'],
                'image' => $offer['picture'],
            ]);
        }
        $result = Fond::query()->insert($FondsData->toArray());
    }
}
