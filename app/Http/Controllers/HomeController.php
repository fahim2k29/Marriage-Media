<?php

use App\Home;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Registration_form;
use App\User;
use App\Aboutme;
use App\Education;
use App\Personal;
use App\Religion;
use App\OfficeUse;
use App\AddPhoto;
use App\Employment;
use App\Models\Offer;
use App\Models\Package;
use App\Payment;
use App\PersonalData;
use App\ReligionData;
use App\Rules\MatchOldPassword;
use App\SignupData;
Use App\Transaction;
use Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
        return view('home');
    }


    public function welcome($id)
    {
        $offer = Package::where('id', $id)->first();
        // dd($offer->price);
        $price = $offer->price;
        session()->put('item_price',$price);
        session()->put('item_id',$id);
        return view('welcome', compact('offer'));
    }


    public function paypal_payment($item_id)
    {

        $data['user']       = User::find(auth()->id())->first();
        $data['addPhoto']   = AddPhoto::whereuser_id(auth()->id())->first();
        $data['users']      = User::paginate(30);
        $data['emp']        = User::with('education')->get();
        $data['rlgn']       = User::with('religion')->get();
        $data['prsn']       = User::with('personal')->get();
        $data['img']        = User::with('addphoto')->get();
        $data['dob']       = User::first(['DOB_year']);

        $user_id = Auth::id();
        $item_price = Package::whereid($item_id)->first();
        $item_duration = Package::whereid($item_id)->first();
        $purchase_date = Carbon::now()->format('Y-m-d H:i:s');
        $expire_date = Carbon::now()->addDays($item_duration->duration)->format('Y-m-d H:i:s');
        
    
        Payment::create([
        'user_id'       =>$user_id,
        'package_id'    =>$item_id,
        'price'         =>$item_price->price,
        'status'        =>1,
        'purchase_date' =>$purchase_date,
        'expire_date'   =>$expire_date,
        ]);
        Transaction::create([
        'user_id'               =>$user_id,
        'fk_created_by'         =>$user_id,
        'fk_updated_by'         =>$user_id,
        'amount'                =>$item_price->price,
        'transactionable_type'  =>'paypal',
        'transactionable_id'    =>'1',
        ]);
        return view('user.dashboard.index', $data)->with('message','Thank you for your purchase!');
    }

    // public function index()
    // {
    //     $userid = Auth::id();
    //     $addPhoto = AddPhoto::whereuser_id($userid)->first();
    //     $user   = User::all();
    //     $dob = User::first(['DOB_year']);
    //     return view('user.dashboard.index', compact('addPhoto' , 'user', 'dob'));
    // }

    public function user_dashboard()
    {
        $data['user']       = User::find(auth()->id())->first();
        $data['addPhoto']   = AddPhoto::whereuser_id(auth()->id())->first();
        $data['users']      = User::paginate(30);
        $data['emp']        = User::with('education')->get();
        $data['rlgn']       = User::with('religion')->get();
        $data['prsn']       = User::with('personal')->get();
        $data['img']        = User::with('addphoto')->get();
        $data['dob']       = User::first(['DOB_year']);
        
        // dd($emp->toArray());
        return view('user.dashboard.index', $data);
            
    }

    public function changeStatus(Request $request)
    {
        $user = User::find($request->id)->update(['status' => $request->status]);

        return response()->json(['success'=>'Status changed successfully.']);
    }

    public function user_dashboard_profile()
    {
        $userid = Auth::id();
        $user = User::whereid($userid)->first();
        $aboutme = Aboutme::whereuser_id($userid)->first();
        $education = Education::whereuser_id($userid)->first();
        $personal = Personal::whereuser_id($userid)->first();
        $religion = Religion::whereuser_id($userid)->first();
        $officeUse = OfficeUse::whereuser_id($userid)->first();
        $addPhoto = AddPhoto::whereuser_id($userid)->first();
        $signupdatas = SignupData::all();
        $employments = Employment::all();
        $personaldatas = PersonalData::all();
        $religiondatas = ReligionData::all();
        return view('user.profile.index', compact('user', 'aboutme', 'education', 'personal', 'religion', 'officeUse', 'addPhoto', 'employments', 'signupdatas', 'personaldatas', 'religiondatas'));
    }

    function aboutme_update(Request $request)
    {
        $user_id = Auth::user()->id;
        $info = Aboutme::whereuser_id($user_id)->first();
        Aboutme::find($info->id)->update([
            'user_id' => $user_id,
            'Headline' => $request->Headline,
            'Description' => $request->Description,
            'LookingFor' => $request->LookingFor,
        ]);
        return back();
    }

    function education_update(Request $request)
    {
        $user_id = Auth::user()->id;
        $info = Education::whereuser_id($user_id)->first();
        Education::find($info->id)->update([
            'user_id' => $user_id,
            'EducationLevel' => $request->EducationLevel,
            'SubjectStudied' => $request->SubjectStudied,
            'JobTitle' => $request->JobTitle,
            'Employment' => $request->Employment,
            'FirstLang' => $request->FirstLang,
            'SecondLang' => $request->SecondLang,
        ]);
        return back();
    }

    function personal_update(Request $request)
    {
        $user_id = Auth::user()->id;
        $info = Personal::whereuser_id($user_id)->first();
        Personal::find($info->id)->update([
            'user_id' => $user_id,
            'Citizenship' => $request->Citizenship,
            'Origin' => $request->Origin,
            'Relocation' => $request->Relocation,
            'Income' => $request->Income,
            'MarryIn' => $request->MarryIn,
            'MaritalStatus' => $request->MaritalStatus,
            'Children' => $request->Children,
            'HaveChildren' => $request->HaveChildren,
            'Living' => $request->Living,
            'Height' => $request->Height,
            'Build' => $request->Build,
            'Hair' => $request->Hair,
            'EyeColour' => $request->EyeColour,
            'Smoke' => $request->Smoke,
            'Disabilities' => $request->Disabilities,
        ]);
        return back();
    }

    function religion_update(Request $request)
    {
        $user_id = Auth::user()->id;
        $info = Religion::whereuser_id($user_id)->first();
        Religion::find($info->id)->update([
            'user_id' => $user_id,
            'Religiosness' => $request->Religiosness,
            'Sect' => $request->Sect,
            'Hijab' => $request->Hijab,
            'Beard' => $request->Beard,
            'Convert' => $request->Convert,
            'Halaal' => $request->Halaal,
            'Salaah' => $request->Salaah,
        ]);
        return back();
    }

    function personalInfo_update(Request $request)
    {
        $user_id = Auth::user()->id;
        $info = OfficeUse::whereuser_id($user_id)->first();
        OfficeUse::find($info->id)->update([
            'user_id' => $user_id,
            'FirstName' => $request->FirstName,
            'LastName' => $request->LastName,
            'Address' => $request->Address,
            'City' => $request->City,
            'PostCode' => $request->PostCode,
            'ContactTel' => $request->ContactTel,
            'MobileTel' => $request->MobileTel,
            
        ]);
        User::find($user_id)->update([
            'Country' => $request->Country,
            'DOB_day' => $request->DOB_day,
            'DOB_month' => $request->DOB_month,
            'DOB_year' => $request->DOB_year,
        ]);
    
            return back();
    }

    public function changePassword()
    {
        $userid = Auth::id();
        $user = User::whereid($userid)->first();
        $addPhoto = AddPhoto::whereuser_id($userid)->first();
        return view('user.profile.changePassword', compact('user', 'addPhoto'));
    }

    public function changePassword_store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword()],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
        return redirect()
            ->back()
            ->with('success', 'Your Password Changed successfully!');
    }

    public function editPhoto()
    {
        $userid = Auth::id();
        $user = User::whereid($userid)->first();
        $addPhoto = AddPhoto::whereuser_id($userid)->first();
        return view('user.profile.editPhoto', compact('user', 'addPhoto'));
    }

    public function editPersonalInfo()
    {
        $userid = Auth::id();
        $user = User::whereid($userid)->first();
        $officeUse = OfficeUse::whereuser_id($userid)->first();
        $addPhoto = AddPhoto::whereuser_id($userid)->first();
        $signupdatas = SignupData::all();
        return view('user.profile.editPersonalInfo', compact('user', 'officeUse', 'addPhoto', 'signupdatas'));
    }

    public function changeUsername()
    {
        $userid = Auth::id();
        $user = User::whereid($userid)->first();
        $officeUse = OfficeUse::whereuser_id($userid)->first();
        $addPhoto = AddPhoto::whereuser_id($userid)->first();
        $signupdatas = SignupData::all();
        return view('user.profile.changeUsername', compact('user', 'officeUse', 'addPhoto', 'signupdatas'));
    }

    public function changeUsername_store(Request $request)
    {
        $request->validate([
            'new_username' => ['required'],
            'new_confirm_username' => ['same:new_username'],
            'current_password' => ['required', new MatchOldPassword()],
        ]);
        User::find(auth()->user()->id)->update(['UserName' => $request->new_username]);
        return redirect()
            ->back()
            ->with('success', 'Your Username Changed successfully!');
    }

    public function changeEmail()
    {
        $userid = Auth::id();
        $user = User::whereid($userid)->first();
        $officeUse = OfficeUse::whereuser_id($userid)->first();
        $addPhoto = AddPhoto::whereuser_id($userid)->first();
        $signupdatas = SignupData::all();
        return view('user.profile.changeEmail', compact('user', 'officeUse', 'addPhoto', 'signupdatas'));
    }


    public function packages()
    {
        $userid = Auth::id();
        $user = User::whereid($userid)->first();
        $addPhoto = AddPhoto::whereuser_id($userid)->first();
        $offers = Package::all();
        $pay = Payment::whereuser_id($userid)->wherestatus(1)->first();
        
        if(!empty($pay)){
            $item_duration = Package::whereid($pay->package_id)->first();
            $diff_day = Carbon::now()->diffInDays($pay->expire_date);
            
            $now = Carbon::now();
    
            $start_date = $pay->purchase_date;
    
            $end_date = $pay->expire_date;
            if($now->between($start_date,$end_date)){
                
            } else {
                Payment::whereid($pay->id)->update([
                            'status'=>0,
                        ]);
            $pay = Payment::whereuser_id($userid)->wherestatus(1)->first();

            }
        }
          
        return view('user.profile.membership', compact('user','addPhoto','offers', 'pay'));
    }

    public function changeEmail_store(Request $request)
    {
        $request->validate([
            'new_email' => ['required'],
            'new_confirm_email' => ['same:new_email'],
            'current_password' => ['required', new MatchOldPassword()],
        ]);
        User::find(auth()->user()->id)->update(['email' => $request->new_email]);
        return redirect()
            ->back()
            ->with('success', 'Your Email Changed successfully!');
    }


    public function showInfo($id)
    {
        $userid = Auth::id();
        $user = User::whereid($userid)->first();
        $addPhoto = AddPhoto::whereuser_id($userid)->first();
        // $signupdatas = SignupData::all();
        
        $users      = User::findOrFail($id);
        $aboutmes   = Aboutme::whereuser_id($id)->first();
        $personals  = Personal::whereuser_id($id)->first();
        $educations = Education::whereuser_id($id)->first();
        $religions  = Religion::whereuser_id($id)->first();
        // dd($aboutmes);
        $addPhotos  = AddPhoto::whereuser_id($id)->first();
        // dd($aboutmes->toArray());
        return view('user.profile.showInfo', compact('user', 'aboutmes', 'addPhoto','users', 'addPhotos','religions', 'personals', 'educations'));
    } 

    



}
