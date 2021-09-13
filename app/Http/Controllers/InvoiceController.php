<?php
namespace App\Http\Controllers;
use App\Models\Invoice;
use App\Models\Menu;
use App\Models\Customer;
use App\Models\MenuInvoice;
use Uuid;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Http\Request;
class InvoiceController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('id','desc')->First();
        $menus = Menu::orderBy('id','desc')->get();
        $invoices = invoice::orderBy('id','desc')->First();
        $menuInvoices = menuInvoice::orderBy('id','desc')->get();
        $totals = DB::select('select Sum(Subtotal) from menu_invoices;');
        return view('invoices.index',compact('customers','menus','invoices','menuInvoices','totals'));
    }
    public function create()
    {
        $menus = Menu::orderBy('id','desc')->get();
        return view('invoices.create', compact('menus'));
    }
    public function store(Request $request)
    {  
        if(Invoice::verifySale($request->number))
        {
            $custome = new Customer();
            $custome->name= $request->name;
            $custome->nit= $request->nit;
            $custome->ci= $request->ci;
            $custome->save();
            //Invoice
            $limit = count($request->id);
            //register Invoices
            $invoice = new Invoice();
            $invoice->codeBill = (string) Uuid::generate();
            $invoice->total = Invoice::calculateTotal($request->number,$request->price);
            $invoice->customer_id= $custome->id;
            $invoice->save();
        
            for($i=0 ; $i < $limit; $i++){
                if($request->number[$i])
                {
                    $menu = Menu::where('id',(int)$request->id[$i])->first();
                    $menuInvoice = new MenuInvoice();
                    $menuInvoice->number=(int)$request->number[$i];
                    $menuInvoice->subTotal = (float)$request->number[$i] * (float)$request->price[$i];
                    $menuInvoice->menu_id= $menu->id;
                    $menuInvoice->invoice_id=$invoice->id;
                    $menuInvoice->save();
                }
            
            }
        }
           
        return redirect('/invoice');
    }
    public function show(Invoice $invoice)
    {
    }
    public function edit(Invoice $invoice)
    {
    }
    public function update(Request $request, Invoice $invoice)
    {
    }
    public function destroy(Invoice $invoice)
    {
    }
}
