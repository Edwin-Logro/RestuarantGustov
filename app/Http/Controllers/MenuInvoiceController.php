<?php

namespace App\Http\Controllers;
use App\Models\MenuInvoice;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuInvoiceController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        $menus = Menu::orderBy('id','desc')->get();
        return view('invoices.create', compact('menus'));
    }
    public function store(Request $request)
    {
        //
    }
    public function show(MenuInvoice $menuInvoice)
    {
        //
    }
    public function edit(MenuInvoice $menuInvoice)
    {
        //
    }

    public function update(Request $request, MenuInvoice $menuInvoice)
    {
        //
    }

    public function destroy(MenuInvoice $menuInvoice)
    {
        //
    }
}
