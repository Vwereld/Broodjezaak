<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    const ITEMS = [
        ['name' => 'Wit', 'price' => '2', 'type' => 'brood'],
        ['name' => 'bruin', 'price' => '2', 'type' => 'brood'],
        ['name' => 'Waldkorn', 'price' => '2.2', 'type' => 'brood'],
        ['name' => 'Multi-granen', 'price' => '2.3', 'type' => 'brood'],
        ['name' => 'kaas', 'price' => '0.5', 'type' => 'beleg'],
        ['name' => 'ham', 'price' => '0.5', 'type' => 'beleg'],
        ['name' => 'kip-curry', 'price' => '0.6', 'type' => 'beleg'],
        ['name' => 'Americain', 'price' => '0.7', 'type' => 'beleg'],
        ['name' => 'Krabsla', 'price' => '0.7', 'type' => 'beleg'],
        ['name' => 'Gebakken kip', 'price' => '0.7', 'type' => 'beleg'],
        ['name' => 'mayonaise', 'price' => '0.3', 'type' => 'saus'],
        ['name' => 'ketchup', 'price' => '0.3', 'type' => 'saus'],
        ['name' => 'pepersaus', 'price' => '0.3', 'type' => 'saus'],
        ['name' => 'andalouse', 'price' => '0.3', 'type' => 'saus'],
        ['name' => 'cocktail', 'price' => '0.3', 'type' => 'saus'],
        ['name' => 'smos', 'price' => '0.5', 'type' => 'smos'],
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::ITEMS as $itemValue) {
            $item = new \App\Item();
            $item->name = $itemValue['name'];
            $item->price = $itemValue['price'];
            $item->type = $itemValue['type'];
            $item->save();
        }
    }
}
