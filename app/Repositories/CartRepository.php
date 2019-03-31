<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 29/03/2019
 * Time: 09:27
 */

namespace App\Repositories;


use App\Cart;
use App\Item;

class CartRepository extends Repository
{
    public function __construct(Cart $cart)
    {
        $this->model = $cart;
    }

    public function addItem($request)
    {

        $data = $request->except('_token');
        if ($this->model->fill($data)->save()) {
            return ['status' => 'Done'];
        }
    }

    public function deleteCart($carts)
    {
        if ($carts->delete()) {
            return ['status' => 'Bestelling is uitgevoerd'];
        }
    }

    public function forceDelete($carts)
    {
        if ($carts->forceDelete()) {
            return ['status' => 'Bestelling is canceled'];
        }
    }

    public function getData()
    {
        $data = [
            'brood' => Cart::all()->last()->brood,
            'beleg' => Cart::all()->last()->beleg,
            'saus' => Cart::all()->last()->saus,
            'smos' => Cart::all()->last()->smos,
        ];
        return $data;
    }

    public function getDataName()
    {
        $data = $this->getData();
        $dataName = [
            $data['brood'] => Item::all()->where('id', '=', $data['brood'])->pluck('name')->last(),
            $data['beleg'] => Item::all()->where('id', '=', $data['beleg'])->pluck('name')->last(),
            $data['saus'] => Item::all()->where('id', '=', $data['saus'])->pluck('name')->last(),
            $data['smos'] => Item::all()->where('id', '=', $data['smos'])->pluck('name')->last(),
        ];
        return $dataName;
    }

    public function getDataPrice()
    {
        $data = $this->getData();
        $dataPrice = [
            $data['brood'] => Item::all()->where('id', '=', $data['brood'])->pluck('price')->last(),
            $data['beleg'] => Item::all()->where('id', '=', $data['beleg'])->pluck('price')->last(),
            $data['saus'] => Item::all()->where('id', '=', $data['saus'])->pluck('price')->last(),
            $data['smos'] => Item::all()->where('id', '=', $data['smos'])->pluck('price')->last(),
        ];
        return $dataPrice;
    }

}
