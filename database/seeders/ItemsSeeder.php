<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\SubType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Wet Goods' =>  [
                'Ayam',
                'Daging',
                'Ikan',
                'Sotong',
                'Udang'
            ],

            'Vegetables' => [
                'Brokoli',
                'Lobak Merah',
                'Bunga Kubis',
            ],

            'Dry Goods' => [
                'Beras',
                'Bihun',
                'Mee Kuning',
                'Telur'
            ]
        ];

        Schema::disableForeignKeyConstraints();
        Item::truncate();
        Schema::enableForeignKeyConstraints();

        collect($types)->each(function($items, $key){
            $sub_type = SubType::where('name', $key)->first();
            collect($items)->each(function($item) use($sub_type) {
                Item::create([
                    'type_id' => $sub_type->type_id,
                    'sub_type_id' => $sub_type->id,
                    'name' => $item,
                ]);
            });
            
        });
    }
}
