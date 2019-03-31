<?php

namespace App\Http\Controllers;

use App\Item;
use App\Repositories\CartRepository;
use App\Repositories\ItemsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AddItemsController extends SiteController
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
        $belegItems = $this->getBeleg();
        $sauses = $this->getSaus();
        $smos = $this->smos();
        $content = view('admin.add_content')->with(['smos' => $smos, 'sauses' => $sauses, 'belegItems' => $belegItems, 'items' => $items])->render();
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
        $carts = $this->cart_rep->get();
        return $carts;
    }

    protected function getBeleg()
    {
        $belegItem = Item::where('type', '=', 'beleg')->get();
        return $belegItem;
    }

    protected function getSaus()
    {
        $sauses = Item::where('type', '=', 'saus')->get();
        return $sauses;
    }

    protected function smos()
    {
        $smos = Item::where('type', '=', 'smos')->get();
        return $smos;
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
        $result = $this->cart_rep->addItem($request);
        return redirect('/admin')->with($result);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $result = $this->cart_rep->forceDelete($carts);
        if (is_array($result)) {
            return redirect('/shop')->with($result);
        }
        return redirect('/shop')->with($result);
    }
}
