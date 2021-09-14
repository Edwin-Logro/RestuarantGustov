<?php
namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Uuid;
use DateTime;
class SaleCurrentController extends Controller
{
    public function index()
    {
        $reports = Report::orderBy('id','desc')->First();
        $invoices = Invoice::orderBy('id','asc')->get();
        $customers = Customer::orderBy('id','asc')->firts();
        $menuInvoices = MenuInvoice::orderBy('id','asc')->get();
        $menus = Menu::orderBy('id','desc')->get();
        //$totals= DB::select('select Sum(total) from invoices');
        // dd($totals);
        return view('reports.index', compact('customers','invoices','reports','customers','menuInvoices', 'menus'));
    }
}
