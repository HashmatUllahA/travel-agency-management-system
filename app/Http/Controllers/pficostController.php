<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pficost;
use App\Models\returnpayment;
use App\Models\payment;
// use App\Models\Payment;
use DB;
class pficostController extends Controller
{
    public function viewpficostpayment(){
        return view('PFICOST.pficost');
    }
    //submit pfi cost
    public function submitpficost(Request $request){
        $myobject = new pficost();
        $myobject->work = $request->work;
        $myobject->expence = $request->expence;
        $myobject->details= $request->details;
        $myobject->paymentstutas = $request->paymentstutas;
        $myobject->date = $request->date;
        $myobject->msg= $request->msg;
        $myobject->save();
        $request->session()->flash('success', 'Data submitted successfully!');

    return view('PFICOST.pficost');
    }
    public function showallpficost(){
        $result = pficost::all();

        // $totalAmount = $result->totalpayment;
        // $receivedAmount = $result->recivepayment;
        // $remainingAmount = $totalAmount - $receivedAmount;
        return view('PFICOST.allpficost', compact('result'));
    }
    public function viewupdatebyid($id){
        $result = pficost::find($id);
        return view('PFICOST.updatepficost' , compact('result'));
    }

    public function updatethensubmit(Request $request, $id){
        // print_r($request->method());

        $result = pficost::find($id);
        // print_r($myobject);



    if($result){
        $result->work = $request->work;
        $result->expence = $request->expence;
        $result->details = $request->details;
        $result->paymentstutas = $request->paymentstutas;
        $result->msg = $request->msg;

        $result->save();

        $request->session()->flash('success', 'Data submitted successfully!');
    } else {
        $request->session()->flash('error', 'Object not found!');
    }


    return view('PFICOST.updatepficost', compact('result'));
}
    public function sumOfMonth(){

    }
    public function viewmonthform()
    {
        return view('payment.searchmonth');
    }
    //get months to data base
//     public function searchmonth(Request $request)
// {
//     $date = $request->input('date');
//     $result = pficost::where('date', $date)->first(['date','id','work']);

//     $totalAmount = DB::table('pficosts')->where('date', $date)->sum('expence');
//     if ($result) {

//     } else {
//         echo "No result found";
//     }
//     return view('payment.getmonth', compact('date','totalAmount','result'));
// }
// public function searchmonth(Request $request)
// {
//     $date = $request->input('date');
//     // $result = pficost::where('date', $date)->get(['date', 'id', 'work','expence']);
//     $result = pficost::where('date', $date)
//     ->where('date', 'LIKE', '%' . $date . '%')
//     ->get(['date', 'id', 'work', 'expence']);
//     $totalAmount = DB::table('pficosts')->where('date', $date)->sum('expence');

//     if ($result->count() > 0) {
//         return view('payment.getmonth', compact('date', 'totalAmount', 'result'));
//     } else {
//         echo "No result found";
//         return;
//     }
// }
public function searchmonth(Request $request)
{
    $date = $request->input('date');
    // Get records for the month of the selected date
    $result = pficost::whereMonth('date', '=', date('m', strtotime($date)))
                      ->whereYear('date', '=', date('Y', strtotime($date)))
                      ->get(['date', 'id', 'work', 'expence']);
    $totalAmount = DB::table('pficosts')->whereMonth('date', '=', date('m', strtotime($date)))
                                         ->whereYear('date', '=', date('Y', strtotime($date)))
                                         ->sum('expence');

    if ($result->count() > 0) {
        return view('payment.getmonth', compact('date', 'totalAmount', 'result'));
    } else {
        echo "No result found";
        return;
    }
}
//view form on return manth
    public function viewreturnmonth()
    {
        return view('PaymentReturn.searchMonthReturn');
    }

    //get return months
    public function getReturnmonth(Request $request)
{
    $date = $request->input('date');
    // Get records for the month of the selected date
    $result = returnpayment::whereMonth('date', '=', date('m', strtotime($date)))
                      ->whereYear('date', '=', date('Y', strtotime($date)))
                      ->get(['name', 'passportno', 'contect', 'retunpayment' , 'city']);
    $totalAmount = DB::table('returnpayments')->whereMonth('date', '=', date('m', strtotime($date)))
                                         ->whereYear('date', '=', date('Y', strtotime($date)))
                                         ->sum('retunpayment');

    if ($result->count() > 0) {
        return view('PaymentReturn.monthreturn', compact('date', 'totalAmount', 'result'));
    } else {
        echo "No result found";
        return;
    }



}
//view search page on recved manth payment
public function viewrecivednmonth()
    {
        // dd('yes');
        // return view('Payment.searchrecivedmonth');
        return view('Payment.searchMonthlyAmount');
        
    }
    public function getrecivednmonth(Request $request)
{
    // Validate request
    $month = date('m', strtotime($request->month));
    $year = date('Y', strtotime($request->month));

    // Check which amount type is selected
    if ($request->find_is == 'receviedAmount') {
        $receviedAmounts = payment::whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->get();
            $totalReceived = $receviedAmounts->sum('recivepayment');
            $length = $receviedAmounts->count(); 
            // dd($length);
            if ($receviedAmounts->isNotEmpty()) {
                return view('payment.searchMonthlyAmount', [
                    'receviedAmounts' => $receviedAmounts,
                    'totalReceived' => $totalReceived,
                ]);
            } else {
                return redirect()->back()->with('noRecordmessage', 'No records available in the selected month.');
            }
        
    }
    if ($request->find_is == 'returnAmount') {
        $returnAmounts = returnpayment::whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->get();
            $totalReturnAmount = $returnAmounts->sum('retunpayment');
            if ($returnAmounts->isNotEmpty()) {
                // return view('Payment.searchMonthlyAmount', compact('returnAmounts'));
                return view('payment.searchMonthlyAmount', [
                    'returnAmounts' => $returnAmounts,
                    'totalReturnAmount' => $totalReturnAmount,
                ]);
            } else {
                return redirect()->back()->with('noRecordmessage', 'No records available in the selected month.');
            }
        // return view('Payment.searchMonthlyAmount', compact('returnAmounts'));
    }
    if ($request->find_is == 'costPfi') {
        $constAmounts = pficost::whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->get();
            $totalCostAmount = $constAmounts->sum('expence');
            if ($constAmounts->isNotEmpty()) {
                // return view('Payment.searchMonthlyAmount', compact('constAmounts'));
                return view('payment.searchMonthlyAmount', [
                    'constAmounts' => $constAmounts,
                    'totalCostAmount' => $totalCostAmount,
                ]);
            } else {
                return redirect()->back()->with('noRecordmessage', 'No records available in the selected month.');
            }
        // return view('Payment.searchMonthlyAmount', compact('constAmounts'));
    }

    // If no data is selected or invalid request, redirect back
    return redirect()->back()->with('message', 'Please select valid payment type and date.');
}



public function tempreryLoginPage(){
    // return dd('yes');
    return view('auth.tempreryLogin');

}
    
}



