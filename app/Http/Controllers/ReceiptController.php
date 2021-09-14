<?php
namespace App\Http\Controllers;
use App\Models\Receipt;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ReceiptController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('id','desc')->First();
        $listSale = DB::select('select m.nameMenu, m.photo, m.price, me.number, me.subTotal, i.customer_id , i.total, i.codeBill
                                FROM menus m, menu_invoices me, invoices i 
                                WHERE m.id=me.menu_id 
                                AND me.invoice_id=i.id 
                                AND i.customer_id='.$customers->id);
        
        return view('receipts.index',compact('customers','listSale'));
    }
}
