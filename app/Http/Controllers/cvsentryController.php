<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\cventry;
use App\Models\userapplayvisa;
use App\Models\availablevasa;
use App\Models\Payment;
use App\Models\returnpayment;
use App\Models\pficost;
use App\Models\enterypassport;
use App\Models\returnpassport;

use Carbon\Carbon;

use App\Http\resources\views\components\layoutadmin;
class cvsentryController extends Controller
{
    public function dishbord(){

        $InfoAboutVisas = availablevasa::all();
        $requerdPersion = $InfoAboutVisas->sum('requerd');
       
        $todayDate = Carbon::today()->toDateString(); 
        
        $todayRecivedPaiments = Payment::where('created_at', 'LIKE', "%$todayDate%")->get();
        $totalRecivedPaymentToday = $todayRecivedPaiments->sum('recivepayment');
        
        $todayReturnPaiments = returnpayment::where('created_at', 'LIKE', "%$todayDate%")->get();
        $totalReturnPaymentToday = $todayReturnPaiments->sum('retunpayment');
        
        $todayCostPaiments = pficost::where('created_at', 'LIKE', "%$todayDate%")->get();
        $totalCostPaymentToday = $todayCostPaiments->sum('expence');

        $todayRecivedPassports = enterypassport::where('created_at', 'LIKE', "%$todayDate%")->get();
        // dd($todayRecivedPassports);
        $allRecivedPassport = enterypassport::all();
        $totalRecivedPassport = $allRecivedPassport->count();

        $todayReturnPassports = returnpassport::where('created_at', 'LIKE', "%$todayDate%")->get();
        $todayReturnPassportsCount = $todayReturnPassports->count();
        // dd($todayReturnPassportsCount);
        $allReturnPassport = returnpassport::all();
        $totalReturnPassport = $allReturnPassport->count();
        // dd($todayCostPaiments);

        $todayRecivedByHandResumes = cventry::where('created_at', 'LIKE', "%$todayDate%")->get();
        $todayRecivedByHandResumesCount = $todayRecivedByHandResumes->count();
        $RecivedByHandResumes = cventry::all();
        $allRecivedByHandResumes = $RecivedByHandResumes->count();

        $todayOnlineResumes = userapplayvisa::where('created_at', 'LIKE', "%$todayDate%")->get();
        $todayOnlineResumesResumesCount = $todayOnlineResumes->count();
        $OnlineResumesResumes = userapplayvisa::all();
        $allOnlineResumesResumes = $OnlineResumesResumes->count();

        return view('cvsdishbord',['InfoAboutVisas' => $InfoAboutVisas,
        'requerdPersion' => $requerdPersion,
        'todayRecivedPaiments' => $todayRecivedPaiments,
        'totalRecivedPaymentToday' => $totalRecivedPaymentToday,
        'todayReturnPaiments' => $todayReturnPaiments,
        'totalReturnPaymentToday' => $totalReturnPaymentToday,
        'todayCostPaiments' => $todayCostPaiments,
        'totalCostPaymentToday' => $totalCostPaymentToday,
        'todayRecivedPassports' => $todayRecivedPassports,
        'totalRecivedPassport' =>$totalRecivedPassport,
        'todayReturnPassportsCount' => $todayReturnPassportsCount,
        'totalReturnPassport' => $totalReturnPassport,
        'todayRecivedByHandResumesCount' => $todayRecivedByHandResumesCount,
        'allRecivedByHandResumes' => $allRecivedByHandResumes,
        'todayOnlineResumesResumesCount' => $todayOnlineResumesResumesCount,
        'allOnlineResumesResumes' => $allOnlineResumesResumes


        ]);
    }

    public function cvEntry(){
        return view('cventry');
    }

    public function submitEntry(Request $request){
        $myobject = new cventry();
        if($myobject){
        $myobject->username = $request->username;
        $myobject->trade = $request->trade;
        $myobject->city = $request->city;
        $myobject->contect1= $request->contect1;
        $myobject->contect2= $request->contect2;
        $myobject->father_name= $request->fatherName;
        $myobject->save();
        $request->session()->flash('success', 'Data submitted successfully!');
    } else {
        $request->session()->flash('error', 'Object not found!');
    }
        return view('cventry');
    }
    //show all cv data
    public function allcvdatashow(){
        $data = cventry::all();
        return view('ALLCVDATA.showallcvdata', compact('data'));
    }


    public function delete_cv($user_id)
       {
        $data = cventry::find($user_id)->delete();

        return view('cventry');

    }
    public function edit_cv($user_id){
        $result = cventry::find($user_id);
        return view('ALLCVDATA.editcv' , compact('result'));
    }
    public function editthensubmit(Request $request,$user_id){
        $myobject = new cventry();
        $myobject->username = $request->username;
        $myobject->trade = $request->trade;
        $myobject->city = $request->city;
        $myobject->contect1= $request->contect1;
        $myobject->contect2= $request->contect2;
        $myobject->passport= $request->passport;
        $myobject->save();
        return redirect('cventry');
    }
    public function searchtrade(Request $request){

        $search = $request->input('search');

        $projects = cventry::query()
                    ->where('user_id', 'LIKE', "%{$search}%")
                    ->orWhere('trade', 'LIKE', "%{$search}%")
                    ->orWhere('username', 'LIKE', "%{$search}%")
                    ->get();
        return view('ALLCVDATA.search' , compact('projects'));

    }
    //get online  user apply for visa
    public function OnlineUserApplay(){
        $data = userapplayvisa::all();
        return view('USER.Showuseronline', compact('data'));
    }


    public function editapplay($id){
        $result = userapplayvisa::find($id);
        return view('USER.EditOnlineApplay' , compact('result'));
    }
    //edit online applay then submit to data base
    public function updatuserapplayvisa(Request $request, $id )
      {
          $data= new userapplayvisa ();

          $data->name = $request->name;
          $data->fname = $request->fname;
          $data->gender = $request->gender;
          $data->cnicno = $request->cnicno;
          $data->dob = $request->dob;
          $data->placebarth = $request->placebarth;
          $data->passportno = $request->passportno;
          $data->expriypassport = $request->expriypassport;
          $data->visatitle = $request->visatitle;
          $data->Experience = $request->Experience;
          $data->save();
        //   return view('USER.Showuseronline', compact('data'));
        return "the data updated seccessfully";

      }
    //delete online applay for visa
    public function deleteapplay($id)
       {
        $data = userapplayvisa::find($id)->delete();

        return "delete seccessfuly";

    }
    

    public function displyResumePage(){
            $data = cventry::all();
            // dd($data);
            return view('ALLCVDATA.allResueme', compact('data'));
    }

}
