<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use Dompdf\Wrapper as PDF;


class paymentController extends Controller
{
    public function findMonthlyAmount(){
        return view('payment.searchMonthlyAmount');
    }
     public function recivedAmount(){
        return view('payment.Recivedpayment');

     }
    //submit payment
    public function submitpayment(Request $request){
        $myobject = new payment();
        $myobject->name = $request->name;
        $myobject->fathername = $request->fathername;
        $myobject->passportno= $request->passportno;
        $myobject->trade = $request->trade;
        $myobject->contect= $request->contect;
        $myobject->totalpayment= $request->totalpayment;
        $myobject->recivepayment= $request->recivepayment;
        $myobject->paymentstutas= $request->paymentstutas;
        $myobject->companyname= $request->companyname;
        $myobject->city= $request->city;
        $myobject->country= $request->country;
        $myobject->file= $request->file;
        // $myobject->date= $request->date;
        $myobject->msg= $request->msg;
        $myobject->save();
        // return view('payment.Recivedpayment');
        return redirect()->back()->with('success', 'Payment submitted successfully!');
    }

    //show all
    public function showallrecivepayment(){
        $result = payment::all();

        // $totalAmount = $result->totalpayment;
        // $receivedAmount = $result->recivepayment;
        // $remainingAmount = $totalAmount - $receivedAmount;
        return view('payment.showrecivepayment', compact('result'));
    }
    //convert to pdf
    public function generatePDFById($id)
    {

        // Retrieve data from database for the specified ID
        $result = DB::table('payments')->where('id', $id)->first();

        // Check if payment record exists
        if (!$result) {
            return response()->json(['error' => 'Payment not found'], 404);
        }

        // Generate HTML view with data
        $html = View::make('payment.document', ['payment' => $result])->render();

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
    //view payment
    public function viewpaymenbyid($id){
        $result = payment::find($id);
$ids=$id;
        // $totalAmount = $result->totalpayment;
        // $receivedAmount = $result->recivepayment;
        // $remainingAmount = $totalAmount - $receivedAmount;
         return view('payment.paymentToprint' , ['result' => $result, 'ids'=>$ids]  );
    }

}
