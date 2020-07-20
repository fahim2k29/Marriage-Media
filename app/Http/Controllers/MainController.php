<?php
namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\Aboutme;
use App\AddPhoto;
use App\Education;
use App\Main;
use App\OfficeUse;
use App\Personal;
use App\Registration_form;
use App\Religion;
use App\Employment;



class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register_form_one()
    {   
        $userPhotos=AddPhoto::all();
        return view('user.register', compact('userPhotos'));
    }

    // public function form()
    // {
    //     return view('user.addPhoto');
    // }

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
                    if($info->isEmpty())
                    {
                        Aboutme::create([
                            'user_id'=>$user_id,
                            'Headline'=>$request->Headline,
                            'Description'=>$request->Description,
                            'LookingFor'=>$request->LookingFor,
                            ]);
                            return redirect()->route('education');
                    }
                    else{
                        
                        $info = Aboutme::whereuser_id($user_id)->first();
                        
                        Aboutme::find($info->id)->update([

                            'user_id'=>$user_id,
                            'Headline'=>$request->Headline,
                            'Description'=>$request->Description,
                            'LookingFor'=>$request->LookingFor,
                            ]);
                            return redirect()->route('education');
                    }      
                }


        public function education()
        {
            $user_id = Auth::user()->id;
            $education = Education::whereuser_id($user_id)->first();
            $employments =Employment::all();
            return view('user.education', compact('education','employments'));
        }
                function education_create(Request $request)
                {
                    
                    $user_id = Auth::user()->id;
                    $info = Education::whereuser_id($user_id)->get();
                    if($info->isEmpty())
                    {
                    Education::create([
                        'user_id'=>$user_id,
                        'EducationLevel'=>$request->EducationLevel,
                        'SubjectStudied'=>$request->SubjectStudied,
                        'JobTitle'=>$request->JobTitle,
                        'Employment'=>$request->Employment,
                        'FirstLang'=>$request->FirstLang,
                        'SecondLang'=>$request->SecondLang,                        
                        ]);
                        return redirect()->route('personal');
                    }
                   
                    else{
                        $info = Education::whereuser_id($user_id)->first();
                        
                        Education::find($info->id)->update([
                        'user_id'=>$user_id,
                        'EducationLevel'=>$request->EducationLevel,
                        'SubjectStudied'=>$request->SubjectStudied,
                        'JobTitle'=>$request->JobTitle,
                        'Employment'=>$request->Employment,
                        'FirstLang'=>$request->FirstLang,
                        'SecondLang'=>$request->SecondLang,                        
                        ]);
                        return redirect()->route('personal');
                    }
            }


        public function personal()
        {
            return view('user.personal');
        }
             function personal_create(Request $request)
                {
                    $id = Auth::user()->id;
                    Personal::create([
                        
                        'Citizenship'=>$request->Citizenship,
                        'user_id'=>$id,
                        'Origin'=>$request->Origin,
                        'Relocation'=>$request->Relocation,
                        'Income'=>$request->Income,
                        'MarryIn'=>$request->MarryIn,
                        'MaritalStatus'=>$request->MaritalStatus,
                        'Children'=>$request->Children,
                        'HaveChildren'=>$request->HaveChildren,
                        'Living'=>$request->Living,
                        'Height'=>$request->Height,
                        'Build'=>$request->Build,
                        'Hair'=>$request->Hair,
                        'EyeColour'=>$request->EyeColour,
                        'Smoke'=>$request->Smoke,
                        'Disabilities'=>$request->Disabilities,
                        ]);
                        return redirect()->route('religion');
                }


        public function religion()
        {
            return view('user.religion');
        }

               function religion_create( Request $request)
               {
                $id = Auth::user()->id;
                Religion::create([
                    'Religiosness'=>$request->Religiosness,
                    'user_id'=>$id,
                        'Sect'=>$request->Sect,
                        'Hijab'=>$request->Hijab,
                        'Beard'=>$request->Beard,
                        'Convert'=>$request->Convert,
                        'Halaal'=>$request->Halaal,
                        'Salaah'=>$request->Salaah,

                   ]);
                    return redirect()->route('officeUse');

               }

        public function officeUse()
        {
            return view('user.officeUse');
        }

        function officeUse_create(Request $request)
        {
            $id = Auth::user()->id;
            OfficeUse::create([
                'FirstName'=>$request->FirstName,
                'user_id'=>$id,
                'LastName'=>$request->LastName,
                'Address'=>$request->Address,
                'City'=>$request->City,
                'Country'=>$request->Country,
                'PostCode'=>$request->PostCode,
                'ContactTel'=>$request->ContactTel,
                'MobileTel'=>$request->MobileTel,
                'DOB_day'=>$request->DOB_day,
                'DOB_month'=>$request->DOB_month,
                'DOB_year'=>$request->DOB_year,
            ]);
            return redirect()->route('addPhoto');
        }

        public function addPhoto()
        {
           
            return view('user.addPhoto');
        }

            function addPhoto_create(Request $request)
            {
                $id = Auth::user()->id;
              $last_inserted_id = AddPhoto::insertGetId([
                'user_id'=>$id,
                'image'=>$request->image,
              ]);
            //   dd($last_inserted_id);
                  if ($request->hasFile('image')) {
                        $photo_upload     =  $request ->image;
                        $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                        $photo_name       =  $last_inserted_id . "." . $photo_extension;
                        Image::make($photo_upload)->resize(320,240)->save(base_path('public/frontend/assets/images/'.$photo_name),100);
                        AddPhoto::find($last_inserted_id)->update([
                            
                            'image' => $photo_name,
                                ]);
                        }                              
                              return redirect()->route('user_dashboard');
                      }


   

    function register_create_one(Request $request)
    {

        $id = Auth::user()->id;
        Registration_form::create([
            'UserName'=>$request->UserName,
            'user_id'=>$id,
            'Email'=>$request->Email,
            'ConfirmEmail'=>$request->ConfirmEmail,
            'Country'=>$request->Country,
            'Gender'=>$request->Gender,
            'DOB_day'=>$request->DOB_day,
            'DOB_month'=>$request->DOB_month,
            'DOB_year'=>$request->DOB_year,
            'RegistrationReason'=>$request->RegistrationReason,
            'HearAboutUs'=>$request->HearAboutUs,
            'Accept'=>$request->Accept,
            'password'=>$request->password,
        ]);
        return redirect()->route('aboutme');
    }





}
