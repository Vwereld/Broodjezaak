<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 29/03/2019
 * Time: 09:27
 */
namespace App\Repositories;


use App\Item;

class ItemsRepository extends  Repository {
    public function __construct(Item $item)
    {
        $this->model = $item;
    }
}
