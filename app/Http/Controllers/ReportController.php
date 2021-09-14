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
        $listReports = DB::select('select cu.name, m.nameMenu, m.price, me.number, me.subTotal, i.total,i.customer_id 
                                    FROM menus m, menu_invoices me, invoices i , customers cu 
                                    WHERE m.id=me.menu_id 
                                    AND me.invoice_id=i.id 
                                    AND cu.id=i.customer_id 
                                    AND DATE_FORMAT(i.created_at,"%Y-%m-%d")='."'$reports->dateReports'".' ORDER by i.id DESC');
        $listClients= DB::select('select distinct(cu.name),( i.total) 
                                    FROM menus m, menu_invoices me, invoices i , customers cu 
                                    WHERE m.id=me.menu_id 
                                    AND me.invoice_id=i.id 
                                    AND cu.id=i.customer_id 
                                    AND DATE_FORMAT(i.created_at,"%Y-%m-%d")='."'$reports->dateReports'".'ORDER BY i.id desc');
        $listMenus= DB::select('select DISTINCT(m.nameMenu), (m.photo)
                                    FROM menus m, menu_invoices me, invoices i, customers cu
                                    WHERE m.id=me.menu_id 
                                    AND me.invoice_id=i.id 
                                    AND cu.id=i.customer_id 
                                    AND DATE_FORMAT(i.created_at,"%Y-%m-%d")='."'$reports->dateReports'".'ORDER BY i.id desc');
        $listTotals= DB::select('select m.nameMenu, me.number, me.subTotal
                                FROM menus m, menu_invoices me, invoices i, customers cu
                                WHERE m.id=me.menu_id AND me.invoice_id=i.id 
                                AND cu.id=i.customer_id 
                                AND DATE_FORMAT(i.created_at,"%Y-%m-%d")='."'$reports->dateReports'".'ORDER BY i.id desc');

        return view('reports.index',compact('reports','listReports','listClients','listMenus','listTotals'));
    }

    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
          $report= new Report;
        $report->dateReports=$request->date1;
        //dd($report);
        $report->save();
        return redirect('/report');
    }
}
