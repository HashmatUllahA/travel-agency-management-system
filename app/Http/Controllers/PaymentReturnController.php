<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\returnpayment;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use Dompdf\Wrapper as PDF;
class PaymentReturnController extends Controller
{
    public function viewreturnpayment(){
        return view('PaymentReturn.returnpayment');
    }
    //submit payment
    public function submitreturnpayment(Request $request){
        $myobject = new returnpayment();
        $myobject->name = $request->name;
        $myobject->fathername = $request->fathername;
        $myobject->passportno= $request->passportno;
        $myobject->trade = $request->trade;
        $myobject->contect= $request->contect;
        $myobject->retunpayment= $request->retunpayment;
        $myobject->paymentstutas= $request->paymentstutas;
        $myobject->companyname= $request->companyname;
        $myobject->city= $request->city;
        $myobject->country= $request->country;
        $myobject->date= $request->date;
        $myobject->msg= $request->msg;
        $myobject->save();
        $request->session()->flash('success', 'Data submitted successfully!');

    return view('PaymentReturn.returnpayment');
    }
    public function showallreturnpayment(){
        $result = returnpayment::all();

        // $totalAmount = $result->totalpayment;
        // $receivedAmount = $result->recivepayment;
        // $remainingAmount = $totalAmount - $receivedAmount;
        return view('PaymentReturn.showAllReturnPayment', compact('result'));
    }
    public function returnpaymenbyid($id){
        $result = returnpayment::find($id);
$ids=$id;
        // $totalAmount = $result->totalpayment;
        // $receivedAmount = $result->recivepayment;
        // $remainingAmount = $totalAmount - $receivedAmount;
         return view('PaymentReturn.returnpaymentToprint' , ['result' => $result, 'ids'=>$ids]  );
    }

    public function returnPDFById($id)
{

    // Retrieve data from database for the specified ID
    $result = returnpayment::find($id);

    // Check if payment record exists
    if (!$result) {
        return response()->json(['error' => 'Payment not found'], 404);
    }

    // Generate HTML view with data
    $html = View::make('PaymentReturn.return', ['returnpayment' => $result])->render();

    // Instantiate Dompdf
    $pdf = new Dompdf();

    // Load HTML into Dompdf
    $pdf->loadHtml($html);

    // Set options for PDF output (optional)
    $pdf->setPaper('A4', 'portrait');

    // Render PDF
    $pdf->render();

    // Output PDF to browser or save to file
    return $pdf->stream('payment_' . $id . '.pdf');
}

}
