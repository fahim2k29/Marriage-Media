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
use App\Country;
use App\Employment;
use App\Job;
use App\Models\Offer;
use App\Models\Package;
use App\Payment;
use App\PersonalData;
use App\ReligionData;
use App\Rules\MatchOldPassword;
use App\SignupData;
Use App\Transaction;
Use App\UserLougoutTime;
use Auth;
use Illuminate\Support\Facades\Hash;
use NabilAnam\SimpleUpload\SimpleUpload;

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
        $data['users'] =  User::relations()->get();
        $data['photo']= AddPhoto::where('user_id',auth()->id())->first()->image;
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


    public function user_dashboard()
    {
        $data['users'] =  User::relations()->get();
        $data['photo']= AddPhoto::where('user_id',auth()->id())->first()->image;
        return view('user.dashboard.index', $data);
    }

    public function changeStatus(Request $request)
    {
        $user = User::find($request->id)->update(['status' => $request->status]);
        return response()->json(['success'=>'Status changed successfully.']);
    }

    public function user_dashboard_profile()
    {
        $user = User::with('aboutme','education','religion','officeuse','personal','addphoto')->where('id',auth()->id())->first();
        $signupdatas = SignupData::all();
        $employments = Employment::all();
        $personaldatas = PersonalData::all();
        $religiondatas = ReligionData::all();
        $jobs = Job::get('job_title');
        $countries  = Country::get('name');
        return view('user.profile.index', compact('user','countries','employments','jobs','signupdatas', 'personaldatas', 'religiondatas'));
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

    // public function editPhotoUpdate(Request $request)
    // {
    //     $id = auth()->id();
    //     $service = AddPhoto::where('user_id',$id)->first();
    //     if($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $filename = $image->getClientOriginalName();
    //         $image->move(public_path('images/services'), $filename);
    //         $service->image = $request->file('image')->getClientOriginalName();
    //     }

    //     $service->update();

    //     return redirect()->back();
    // }


    public function editPhotoUpdate(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);

        $id = auth()->id();
        $whyPeopleLoves = AddPhoto::where('user_id',$id)->first();
        if ($request->file('image')){
            $image = $request->file('image');
                $rand = rand();
                $imageName = $rand.'.'.$image->getClientOriginalExtension();
                $image->move(public_path("uploads/User_Profile/".date("Y").'/'.date('M').'/'.date('D')),$imageName);
                $imgPath = "User_Profile/".date("Y").'/'.date('M').'/'.date('D').'/'.$imageName;
                $whyPeopleLoves->image = $imgPath;
            }
        $whyPeopleLoves->save();
        return back();

    }

    public function editPersonalInfo()
    {
        $userid = Auth::id();
        $user = User::whereid($userid)->first();
        $officeUse = OfficeUse::whereuser_id($userid)->first();
        $addPhoto = AddPhoto::whereuser_id($userid)->first();
        $signupdatas = SignupData::all();
        $countries  = Country::all();
        $now = Carbon::now()->format('Y');
        $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
        return view('user.profile.editPersonalInfo', compact('countries','now','months', 'user', 'officeUse', 'addPhoto', 'signupdatas'));
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
        $users  = User::relations()->find($id);
        return view('user.profile.showinfo', compact('users'));
    }





}
