<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'groceries',
                'icon'  => 'icons/shopping-cart.svg',
                'route' => 'groceries.create',
                'description' => 'Basic groceries such as dry goods(fruits, vegetables), wet goods( fish, squid) and moreover'
            ],
            [
                'name' => 'personal care',
                'icon'  => 'icons/user.svg',
                'route' => 'personalcare.create',
                'description' => 'Personal care like face wash, razor, toothpaste and more.'
            ],
            [
                'name' => 'households',
                'icon'  => 'icons/box.svg',
                'route' => 'households.create',
                'description' => 'Example of household like dishwasher, plastic, aluminium foil, tissues, and more.'
            ],
            [
                'name' => 'medicines',
                'icon'  => 'icons/medical-kit.svg',
                'route' => 'medicines.create',
                'description' => 'List of medicines like cold medicine, cough drops, panadols, and more.'
            ]
        ];
        
        Schema::disableForeignKeyConstraints();
        Type::truncate();
        Schema::enableForeignKeyConstraints();

        collect($types)->each(fn($item) => 
            Type::create([
                'name' => $item['name'],
                'icon' => $item['icon'],
                'route'=> $item['route'],
                'description' => $item['description']
            ])
        );
    }
}
