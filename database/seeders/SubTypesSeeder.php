<?php

namespace Database\Seeders;

use App\Models\ListSubType;
use App\Models\SubType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SubTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_types_groceries = [

            // Groceries
            'Wet Goods',
            'Vegetables',
            'Dry Goods',
            'Snacks',
            'Spices',
            'Fruits',
            'Condiments/Sauces',
            'Frozen Food',
        ];

        Schema::disableForeignKeyConstraints();
        SubType::truncate();
        Schema::enableForeignKeyConstraints();

        collect($sub_types_groceries)->each(fn($item) =>
            SubType::create([
                'type_id'   => 1,
                'name' => $item,
            ])
        );
    }
}
