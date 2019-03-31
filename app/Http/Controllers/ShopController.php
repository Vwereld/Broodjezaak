<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Repositories\CartRepository;
use App\Repositories\ItemsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ShopController extends SiteController
{
    public function __construct(ItemsRepository $i_rep, CartRepository $cart_rep)
    {
        parent::__construct();
        $this->i_rep = $i_rep;
        $this->cart_rep = $cart_rep;
        $this->template = 'admin.index';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = $this->getItems();
        $carts = $this->getCartData()->last();
        $data = $this->cart_rep->getData();
        $completed = Cart::with('items')->withTrashed()->get();
        $dataName = $this->cart_rep->getDataName();
        $dataPrice = $this->cart_rep->getDataPrice();
        $sum = array_sum($dataPrice);
        $content = view('admin.shop_content')->with(['completed' => $completed, 'sum' => $sum, 'dataName' => $dataName, 'data' => $data, 'items' => $items, 'carts' => $carts])->render();
        $this->vars = Arr::add($this->vars, 'content', $content);
        return $this->renderOutput();
    }

    protected function getItems()
    {
        $items = $this->i_rep->get();
        return $items;
    }

    protected function getCartData()
    {
        $carts = Cart::with('items')->get();
        return $carts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartRepository $cart_rep)
    {
        $this->cart_rep = $cart_rep;
        $carts = $this->getCartData()->last();
        $result = $this->cart_rep->deleteCart($carts);
        if (is_array($result)) {
            return back()->with($result);
        }
        return redirect('/admin')->with($result);
    }

}
