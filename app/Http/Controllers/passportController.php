<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enterypassport;
use App\Models\returnpassport;

class passportController extends Controller
{
    public function viewpassport(){
        return view('PASSPORT.passportEntry');
    }
    public function submitpassport(Request $request){
        $myobject = new enterypassport();
        $myobject->name = $request->name;
        $myobject->fathername = $request->fathername;
        $myobject->passportno= $request->passportno;
        $myobject->trade= $request->trade;
        $myobject->city = $request->city;
        // $myobject->date = $request->date;
        $myobject->save();
        $request->session()->flash('success', 'Data submitted successfully!');

    return view('PASSPORT.passportEntry');
    }
    //get all passport
    public function getallpassport(){
        $data = enterypassport::all();
        return view('PASSPORT.showallpossport', compact('data'));
    }

    public function ReturnPassportbyid($id){
        return view('PASSPORT.returnpassport', ['id' => $id]);
        // return view('PASSPORT.returnpassport')
    }

    //submit return passport
    public function submitreturnpassport(Request $request){

        $returenPassport = enterypassport::where('passportno', $request->passportno)->first();

        if($returenPassport){
            $myobject = new returnpassport();
            $myobject->name =$request->name;
            $myobject->fathername=$request->fathername;
            $myobject->passportno =$request->passportno;
            $myobject->city =$request->city;
            $myobject->returnto =$request->returnto;
            $myobject->save();


            $returenPassport->delete();
            return view('PASSPORT.returnpassport');
        }else{
            return redirect()->back()->with('noPassport','passport is not avalable');
        }
        

    }
    public function ReturnPassport(){
        return view('PASSPORT.returnpassport');
        // return view('PASSPORT.returnpassport')
    }

    //GET RETURN PASSPORT
    public function getReturnpassport(){
        $data = returnpassport::all();
        return view('PASSPORT.getreturnpassport', compact('data'));
    }

    public function deletePassport($id)
{
    $data = returnpassport::find($id);
    if ($data !== null) { // check for null
        $data->delete();
        // redirect to a success page or to the page that lists all passports
        return view('PASSPORT.returnpassport')->with('success', 'Passport deleted successfully.');
    } else {
        // handle the case where the passport record does not exist
        return view('error')->with('error', 'Passport record not found.');
    }
}

}
