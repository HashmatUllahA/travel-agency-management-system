<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\availablevasa;
use App\Models\userapplayvisa;
use App\Models\Approval;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\cventry;
use App\Models\Payment;
use App\Models\returnpayment;
use App\Models\pficost;
use App\Models\enterypassport;
use App\Models\returnpassport;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController extends Controller
{
    public function temindex(){
        return view('frontend.index');
    }

    public function admindisboard(){
        return view('frontend.admindishbord');

    }
    public function index(){
        $getvisasForUsers = availablevasa::all();
        // dd($getvisasForUsers);
        return view('VISA.userhome',compact('getvisasForUsers'));
    }
    public function userabout(){
        return view('USER.about');
    }
    //user login
    public function userlogin(){
        return view('USER.login');
    }
    //user sing up
    public function usersingup(){
        return view('USER.singup');
    }
    //show visa form
    public function showvisaform(){
        return view('VISA.submitvisa');
    }
    //submit visa information form database
            public function submitvisa(Request $request )
        {
            // dd($request->all());
            $category= new availablevasa ();
            if($category){
            $category->country = $request->country;
            $category->title = $request->title;
            $category->requerd = $request->requerd;
            $category->lastdate = $request->lastdate;

            // if($request->hasfile('advimg'))
            // {
            //     $file = $request->file('advimg');
            //     $extention = $file->getClientOriginalExtension();
            //     $filename=time().'.'.$extention;
            //     $file->move('frontend/images/',$filename);
            //     $category->advimg = $filename;
            // }

            if ($request->hasFile('advimg')) {
                $file = $request->file('advimg');
                
                // Get file details
                $originalName = $file->getClientOriginalName();
                $mimeType = $file->getClientMimeType(); 
                if($mimeType != 'image/png'){
                  return redirect()->back()->with('success', 'Please select png image.');
                }
                $extension = $file->getClientOriginalExtension(); 
                $filename = time() . '.' . $extension; 
                $filePath = 'frontend/visas/' . $filename; 
                
                // Move the file
                $file->move('frontend/visas/', $filename);
    
                // Store details in the database
                $category->image_name = $originalName;
                $category->image_type = $mimeType;
                $category->image_path = $filePath;
            }
    
            $category->save();
            $request->session()->flash('success', 'Data submitted successfully!');
        } else {
            $request->session()->flash('success', 'Object not found!');
        }
            // return redirect()->back('status','uploaded seccsessfully');
            return view ('VISA.submitvisa');

        }
//show all vasa
        public function showallvasa(){
            $data = availablevasa::all();
            return view('VISA.allvisa', compact('data'));
        }
//show edit visa
        public function edit_student($id){
            $result = availablevasa::find($id);
    		return view('VISA.editvasa',compact("result"));

        }

        public function editsubmit(Request $request,$id){
            $category= new availablevasa ();
            $category->country = $request->country;
            $category->title = $request->title;
            $category->requerd = $request->requerd;
            $category->lastdate = $request->lastdate;
            if($request->hasfile('advimg'))
            {
                $file = $request->file('advimg');
                $extention = $file->getClientOriginalExtension();
                $filename=time().'.'.$extention;
                $file->move('frontend/images/',$filename);
                $category->advimg = $filename;
            }

            $category->save();
            return view('VISA.submitvisa');


   }
   //available vasas for the user
   public function availablevasas(){
    $data = availablevasa::all();
    return view('USER.availablevasa', compact('data'));
}
    public function getimage($id){
        $images = DB::table('availablevasas')->where('id', $id)->first();
        // dd($images);

        return view('USER.showadvimag',compact('images'));

    }
    public function applyforvisa() {
        return view('USER.userapplayvisa');
      }
      //submit visa user appaly for visa form database
      public function submituserapplayvisa(Request $request )
      {
          $category= new userapplayvisa ();

          $category->name = $request->name;
          $category->fname = $request->fname;
          $category->gender = $request->gender;
          $category->cnicno = $request->cnicno;
          $category->dob = $request->dob;
          $category->placebarth = $request->placebarth;
          $category->passportno = $request->passportno;
          $category->contact_number = $request->contactNumber;
          $category->visatitle = $request->visatitle;
          $category->Experience = $request->Experience;
          $category->save();
          // return redirect()->back('status','uploaded seccsessfully');
          return view ('USER.userapplayvisa');

      }

      public function showApprovalPage(){
        return view ('approval.visaApproval');
      }


      public function storeVisaApprovel(Request $request)
      {
        //   dd($request->all());
          $newApproval = new Approval();
      
          if ($newApproval) {
              $newApproval->name = $request->name;
              $newApproval->father_name = $request->father_name;
              $newApproval->mobile_number = $request->contect_number; // Updated field name
              $newApproval->passport_number = $request->passport_number;
      
              if ($request->hasFile('approvel_file')) {
                  $file = $request->file('approvel_file');
                  
                  // Get file details
                  $originalName = $file->getClientOriginalName();
                  $mimeType = $file->getClientMimeType(); 
                  if($mimeType != 'application/pdf'){
                    return redirect()->back()->with('message', 'Please select pdf file.');
                  }
                  $extension = $file->getClientOriginalExtension(); 
                  $filename = time() . '.' . $extension; 
                  $filePath = 'frontend/approvels/' . $filename; 
                  
                  // Move the file
                  $file->move('frontend/approvels/', $filename);
      
                  // Store details in the database
                  $newApproval->file_name = $originalName;
                  $newApproval->file_type = $mimeType;
                  $newApproval->file_path = $filePath;
              }
      
              $newApproval->save();
              return redirect()->back()->with('message', 'approvel record submitted successfully');
          } else {
            return redirect()->back()->with('message', 'error in the file uploading.');
          }
      }

      public function allApproval(){
        $approvals = Approval::all();
        // dd($approvals);
        return view ('approval.approvalRecord',compact('approvals'));
      }
      

      public function pakfeaturEmployees(){
        $users = User::all();
        // dd($users);
        return view('Employee.employees' ,compact('users'));
        // return view ('employee.employees',compact('approvals'));
      }

      public function addEmployee(){
        return view('Employee.addEmployee');
      }
      
      public function addNewEmployee(Request $request)
      {
        //   dd($request->all());
          $newuser = new User();
          if ($newuser) {
            //   dd($request->password);
              $newuser->name = $request->username;
              $newuser->password = Hash::make($request->password); // Hash the password
              $newuser->email = $request->email;
              $newuser->father_name = $request->fatherName;
              $newuser->mobile_number = $request->contact_number; 
              $newuser->address = $request->address; 
              
              $newuser->cnic_number = $request->cnic_number;
      
              if ($request->hasFile('image')) {
                  $file = $request->file('image');
                  
                  // Get file details
                  $originalName = $file->getClientOriginalName();
                  $mimeType = $file->getClientMimeType(); 

                  if($mimeType !='image/jpeg'){
                    return redirect()->back()->with('message', 'please select the jpeg  image');
                  }
                  $extension = $file->getClientOriginalExtension(); 
                  $filename = time() . '.' . $extension; 
                  $filePath = 'frontend/employee/' . $filename; 
                  
                  // Move the file
                  $file->move('frontend/employee/', $filename);
      
                  // Store details in the database
                  $newuser->image_name = $originalName;
                  $newuser->image_type = $mimeType;
                  $newuser->image_path = $filePath;
              }
      
              $newuser->save();
              return redirect()->back()->with('message', 'Employee added  successfully');
          } else {
              return redirect()->back()->with('message', 'error in the file uploading.');
          }
      }


public function logInP(Request $request)
{
    $user = User::where('email', $request->email)->first();

    if ($user) {
        if (Hash::check($request->password, $user->password)) {
            
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
        } else {
            
            return redirect()->back()->with('message', 'Invalid email or password.');
        }
    } else {
        // User not found
        return redirect()->back()->with('message', 'Email is not registered.');
    }
}


}
