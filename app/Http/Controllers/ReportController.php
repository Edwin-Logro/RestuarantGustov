<?php
namespace App\Http\Controllers;
use App\Models\Invoice;
use App\Models\Menu;
use App\Models\Customer;
use App\Models\MenuInvoice;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ReportController extends Controller
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

    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
       
        $invoices = invoice::orderBy('id','desc')->First();
        $a= $invoices->created_at->format('Y-m-d');
        $report= new Report;
        $report->dateReports=$request->date1;
        $report->save();
        // if($a==$request->date1)
        // {
        //     $reports= (string)Invoice::with(['customer', 'menus'])->get();
           
        // }
        return redirect('/report');
    }
    public function show(Report $report)
    {
        //
    }
    public function edit(Report $report)
    {
        //
    }
    public function update(Request $request, Report $report)
    {
        //
    }
    public function destroy(Report $report)
    {
        //
    }
}
