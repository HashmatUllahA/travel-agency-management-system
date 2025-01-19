<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cvsentryController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\adminauthcontroller;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\pficostController;
use App\Http\Controllers\PaymentReturnController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\passportController;

// use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});
//show home page
Route::get('/app/dishbord',[cvsentryController::class,'dishbord']);
//cv Entry form
Route::get('/app/cventry',[cvsentryController::class,'cvEntry']);
//submit sv data
Route::post('/app/submit-entry',[cvsentryController::class,'submitEntry']);
//all cv data
Route::get('/app/allcvdata',[cvsentryController::class,'allcvdatashow']);
Route::get('allresume',[cvsentryController::class,'displyResumePage']);
//edit cv
Route::get('editcv/{user_id}',[cvsentryController::class,'edit_cv']);
Route::post('editcv/{user_id}',[cvsentryController::class,'editthensubmit']);
//delete cv
Route::get('delete/{user_id}',[cvsentryController::class,'delete_cv']);
//search trade
Route::get('search',[cvsentryController::class,'searchtrade']);
//get user online applay
Route::get('/app/onlineapplyvisa',[cvsentryController::class,'OnlineUserApplay']);
//show edit online applay
Route::get('editapplay/{applayid}',[cvsentryController::class,'editapplay']);
//edit then submit user online applay
Route::post('editapplay/{id}',[cvsentryController::class,'updatuserapplayvisa']);
//delete cv
Route::get('deleteapplay/{id}',[cvsentryController::class,'deleteapplay']);


//show mason table
Route::get('show-mason',[cvsentryController::class,'showmason']);
//Show forman table
Route::get('show-forman',[cvsentryController::class,'showforman']);
//SHOW charge hand table
Route::get('show-chargehend',[cvsentryController::class,'showchargehend']);
//show liber table
Route::get('show-liber',[cvsentryController::class,'showliber']);
//admin dishboard
Route::get('admindishbord',[HomeController::class,'admindisboard']);

//show web templete index file
Route::get('temleteindex',[HomeController::class,'temindex']);





//user page Controller UserController
Route::get('userhome',[HomeController::class,'index']);
//user about show page
Route::get('about',[HomeController::class,'userabout']);
//user login
Route::get('login',[HomeController::class,'userlogin']);
Route::get('/app/login-p',[pficostController::class,'tempreryLoginPage']);
//user sigup
Route::get('singup',[HomeController::class,'usersingup']);
//available vasa for the user
 Route::get('availabel-vasas',[HomeController::class,'availablevasas']);
 //get advertisment image
 Route::get('getadvimage/{id}',[HomeController::class,'getimage']);
 //show applay page
 Route::get('applay-visa',[HomeController::class,'applyforvisa']);
 //user applay for visa
 Route::post('applay-visa',[HomeController::class,'submituserapplayvisa']);
 Route::get('/app/show-approval',[HomeController::class,'showApprovalPage']);

//submit visa show form
Route::get('/form-of-sumitted-visa',[HomeController::class,'showvisaform']);
// visa submit to data base
Route::post('showform',[HomeController::class,'submitvisa']);
Route::post('/submit-visa-approval',[HomeController::class,'storeVisaApprovel']);
Route::get('/app/approval-records',[HomeController::class,'allApproval']);
Route::get('/app/pak-feature-employees',[HomeController::class,'pakfeaturEmployees']);
Route::get('/app/add-employee',[HomeController::class,'addEmployee']);
Route::post('/app/add-new-employee',[HomeController::class,'addNewEmployee']);
Route::post('/app/user-login',[HomeController::class,'logInP']);

//flish session
// Route::get('showform',[HomeController::class,'flashSession']);
//show all vasas
Route::get('/app/showallvasa',[HomeController::class,'showallvasa']);
//edit visa form
Route::get('editvias/{id}',[HomeController::class,'edit_student']);

//edit then submit visa
Route::post('editvisa/{id}',[HomeController::class,'editsubmit']);


//register and login
Route::get('register',[registerController::class,'registerform']);
//submit register form
Route::post('register',[registerController::class,'register'])->name('register');

//payment
Route::get('payment',[paymentController::class,'findMonthlyAmount']);
//submit payment
Route::post('submitpayment',[paymentController::class,'submitpayment']);
// view all recive payment
Route::get('/allrecivepayment',[paymentController::class,'showallrecivepayment']);

//view payment to print
Route::get('viewpayment/{id}',[paymentController::class,'viewpaymenbyid']);
//convert pdf
Route::get('pdf',[paymentController::class,'generatePDF']);
// Define a route that maps to the 'payments.generate-pdf' route name
// Route::get('/payments/generate-pdf{id}', [paymentController::class,'generatePdf'])->name('payments.generate-pdf');
Route::get('generate/{id}',[paymentController::class,'generatePDFById'])->name('generate.pdf');



//return payment coutamer
Route::get('returnpaymentview',[PaymentReturnController::class,'viewreturnpayment']);
//submit return payment
Route::post('returnpaymentview',[PaymentReturnController::class,'submitreturnpayment']);
//show form all return payment
Route::get('allreturnpayment',[PaymentReturnController::class,'showallreturnpayment']);
Route::get('returnpayment/{id}',[PaymentReturnController::class,'returnpaymenbyid']);
Route::get('return/{id}',[PaymentReturnController::class,'returnPDFById'])->name('return.pdf');


//pfi cost
Route::get('pficostpaymentview',[pficostController::class,'viewpficostpayment'])->name('PFICOST.pficost');
//submit pfi cost to database
Route::post('/pficostpaymentview',[pficostController::class,'submitpficost']);
//show all pfi cost in table from
Route::get('allpficost',[pficostController::class,'showallpficost']);
Route::get('/recived-amount',[paymentController::class,'recivedAmount']);
//show form update pfi cost
Route::get('/edit-and-update-cost/{id}', [pficostController::class,'viewupdatebyid']);
Route::post('/update/{id}', [pficostController::class, 'updatethensubmit']);
//get the months record
Route::get('viewmonths', [pficostController::class, 'viewmonthform']);
Route::get('getmonthsdata', [pficostController::class, 'searchmonth'])->name('search');
//get view search return months from
Route::get('viewreturnmonth', [pficostController::class, 'viewreturnmonth']);
Route::get('getreturnmonth', [pficostController::class, 'getReturnmonth'])->name('returnmonth');
//recived months view and get
Route::get('/find-monthly-amount', [pficostController::class, 'viewrecivednmonth']);
Route::get('getrecivednmonth', [pficostController::class, 'getrecivednmonth'])->name('recivedmonth');


//passport view from
Route::get('/app/entrypassport', [passportController::class, 'viewpassport']);
//submited passport entry
Route::post('app/submit-passport ', [passportController::class, 'submitpassport']);
Route::get('/app/getallpossport', [passportController::class, 'getallpassport']);
//return passport

Route::get('returnpassport/{id}', [passportController::class, 'ReturnPassportbyid'])->name('returnpassport');
//submit return passport
Route::post('/app/submitreturnpassport', [passportController::class, 'submitreturnpassport']);

Route::get('/app/returnpassport', [passportController::class, 'ReturnPassport']);
Route::get('/app/getreturnpossport', [passportController::class, 'getReturnpassport']);
Route::get('app/deletpassport/{id}', [passportController::class, 'deletePassport']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
