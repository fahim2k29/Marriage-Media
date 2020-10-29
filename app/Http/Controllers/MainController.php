<?php
namespace App\Http\Controllers;
use App\Http\Requests\User\SignupRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use NabilAnam\SimpleUpload\SimpleUpload;

use Auth;
use Image;
use App\Aboutme;
use App\AddPhoto;
use App\ContactUs;
use App\Education;
use App\Main;
use App\OfficeUse;
use App\Personal;
use App\Registration_form;
use App\Religion;
use App\Employment;
use App\Models\Slider;
use App\PersonalData;
use App\ReligionData;
use App\SignupData;
use App\User;
use App\Models\Banner;
use App\SuccessStory;
use App\Country;
use App\Job;


class MainController extends Controller
{
    public function index()
    {
        // $users  = User::all()->random(30);
        $data['users']      = User::paginate(30);
        $data['slider']     = Slider::all();
        $data['aboutmes']   = Aboutme::all();
        $data['religions']  = Religion::all();
        $data['educations'] = Education::all();
        $data['personals']  = Personal::all();
        $data['emp']        = User::with('education')->get();
        $data['rlgn']       = User::with('religion')->get();
        $data['prsn']       = User::with('personal')->get();
        $data['img']        = User::with('addphoto')->get();
        $data['user']       = User::first(['DOB_year']);
        $data['stories']    = SuccessStory::all();
        $data['contacts']   = ContactUs::all();
        return view('index2', $data);
    }

    public function register_form_one()
    {
        $signupdatas = SignupData::all();
        $countries  = Country::all();
        $now = Carbon::now()->format('Y');
        $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
        return view('user.register', compact('signupdatas', 'countries', 'now','months'));
    }


    public function aboutme()
    {
        $user_id = Auth::user()->id;
        $aboutme = Aboutme::whereuser_id($user_id)->first();
        return view('user.aboutme', compact('aboutme'));
    }
    function aboutme_create(Request $request)
    {
        $user_id = Auth::user()->id;
        $info = Aboutme::whereuser_id($user_id)->get();
        if ($info->isEmpty()) {
            Aboutme::create([
                'user_id' => $user_id,
                'Headline' => $request->Headline,
                'Description' => $request->Description,
                'LookingFor' => $request->LookingFor,
            ]);
            return redirect()->route('education');
        } else {
            $info = Aboutme::whereuser_id($user_id)->first();

            Aboutme::find($info->id)->update([
                'user_id' => $user_id,
                'Headline' => $request->Headline,
                'Description' => $request->Description,
                'LookingFor' => $request->LookingFor,
            ]);
            return redirect()->route('education');
        }
    }

    public function education()
    {
        $user_id = Auth::user()->id;
        $education = Education::whereuser_id($user_id)->first();
        $employments = Employment::all();
        $jobs = Job::all();

        return view('user.education', compact('education', 'employments', 'jobs'));
    }
    function education_create(Request $request)
    {
        $user_id = Auth::user()->id;
        $info = Education::whereuser_id($user_id)->get();
        if ($info->isEmpty()) {
            Education::create([
                'user_id' => $user_id,
                'EducationLevel' => $request->EducationLevel,
                'SubjectStudied' => $request->SubjectStudied,
                'JobTitle' => $request->JobTitle,
                'Employment' => $request->Employment,
                'FirstLang' => $request->FirstLang,
                'SecondLang' => $request->SecondLang,
            ]);
            return redirect()->route('personal');
        } else {
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
            return redirect()->route('personal');
        }
    }

    public function personal()
    {
        $user_id = Auth::user()->id;
        $personal = Personal::whereuser_id($user_id)->first();
        $personaldatas = PersonalData::all();
        $countries  = Country::all();
        return view('user.personal', compact('personal', 'personaldatas', 'countries'));
    }
    function personal_create(Request $request)
    {
        $user_id = Auth::user()->id;
        $info = Personal::whereuser_id($user_id)->get();
        if ($info->isEmpty()) {
            Personal::create([
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
            return redirect()->route('religion');
        } else {
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
            return redirect()->route('religion');
        }
    }

    public function religion()
    {
        $user_id = Auth::user()->id;
        $religion = Religion::whereuser_id($user_id)->first();
        $religiondatas = ReligionData::all();
        return view('user.religion', compact('religion', 'religiondatas'));
    }

    function religion_create(Request $request)
    {
        $user_id = Auth::user()->id;
        $info = Religion::whereuser_id($user_id)->get();
        if ($info->isEmpty()) {
            Religion::create([
                'user_id' => $user_id,
                'Religiosness' => $request->Religiosness,
                'Sect' => $request->Sect,
                'Hijab' => $request->Hijab,
                'Beard' => $request->Beard,
                'Convert' => $request->Convert,
                'Halaal' => $request->Halaal,
                'Salaah' => $request->Salaah,
            ]);
            return redirect()->route('officeUse');
        } else {
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
            return redirect()->route('officeUse');
        }
    }

    public function officeUse()
    {
        $user_id = Auth::user()->id;
        $officeUse = OfficeUse::whereuser_id($user_id)->first();
        $users = User::whereid($user_id)->first();
        $signupdatas = SignupData::all();
        return view('user.officeUse', compact('officeUse', 'signupdatas', 'users'));
    }

    function officeUse_create(SignupRequest $request)
    {
        $user_id = Auth::user()->id;
        $info = OfficeUse::whereuser_id($user_id)->get();
        if ($info->isEmpty()) {
            OfficeUse::create([
                'user_id' => $user_id,
                'FirstName' => $request->FirstName,
                'LastName' => $request->LastName,
                'Address' => $request->Address,
                'City' => $request->City,
                'Country' => $request->Country,
                'PostCode' => $request->PostCode,
                'ContactTel' => $request->ContactTel,
                'MobileTel' => $request->MobileTel,
                'DOB_day' => $request->DOB_day,
                'DOB_month' => $request->DOB_month,
                'DOB_year' => $request->DOB_year,
            ]);
            return redirect()->route('addPhoto');
        } else {
            $info = OfficeUse::whereuser_id($user_id)->first();

            OfficeUse::find($info->id)->update([
                'user_id' => $user_id,
                'FirstName' => $request->FirstName,
                'LastName' => $request->LastName,
                'Address' => $request->Address,
                'City' => $request->City,
                'Country' => $request->Country,
                'PostCode' => $request->PostCode,
                'ContactTel' => $request->ContactTel,
                'MobileTel' => $request->MobileTel,
                'DOB_day' => $request->DOB_day,
                'DOB_month' => $request->DOB_month,
                'DOB_year' => $request->DOB_year,
            ]);
            return redirect()->route('addPhoto');
        }
    }

    public function addPhoto()
    {
        return view('user.addPhoto');
    }

    function addPhoto_create(Request $request, SimpleUpload $upload)
    {


        $id = Auth::user()->id;

        $image = time().'.'.$request->image->extension();

        $request->image->move(public_path('User_Profile'), $image);

        $obj =  new AddPhoto();

        $obj->user_id = $id;

        $obj->image = $image;

        $obj->save();

        // $data['user_id'] = Auth::user()->id;
        // $data['image'] = $upload->file($request->image)
        //     ->dirName('User_Profile')->resizeImage(320, 240)
        //     ->save();

        // AddPhoto::create($data);


        // $last_inserted_id = AddPhoto::insertGetId([
        //     'user_id' => $id,
        //     'image' => $request->image,
        // ]);
        //   dd($last_inserted_id);
        // if ($request->hasFile('image')) {
        //     $photo_upload = $request->image;
        //     $photo_extension = $photo_upload->getClientOriginalExtension();
        //     $photo_name = $last_inserted_id . "." . $photo_extension;
        //     Image::make($photo_upload)
        //         ->resize(320, 240)
        //         ->save(base_path('public/frontend/assets/images/' . $photo_name), 100);
        //     AddPhoto::find($last_inserted_id)->update([
        //         'image' => $photo_name,
        //     ]);
        // }
        return redirect()->route('user_dashboard');
    }
}
