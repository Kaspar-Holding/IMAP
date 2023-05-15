<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;
use Illuminate\Support\Str;
use App\UserEmails;
use App\Models\User;
use App\Models\user_infos;
use App\Models\organization;
use App\Models\post_jobs;

use App\Models\AccessCtrl;
use DB;
 
class WebsiteController extends Controller
{
    // function get_data(){
    //     return view("home");
    // }
    
    function sign_up(){
        return view("sign-up");
    }
    function log_in(){
        return view("log-in");
    }
    function faq(){
        return view("faq");
    }
    function about(){
        return view("about");
    }
    function view_organization(){
        return view("view-organization");
    }
    function blog(){
        return view("blog");
    }
    function contact_us(){
        return view("contact-us");
    }
    function companies(){
        return view("companies");
    }
    function hire_talent(){
        return view("hire-talent");
    }
    function edit_profile(){
        return view("edit-profile");
    }
    function home(){
        $jobs = post_jobs::get();
        return view("home",['data'=>$jobs]);
    }
    function post_jobs(){
        return view("post-jobs");
    }
    function add_organization(){
        return view("organization-profile");
    }
    function edit_organization(){
        return view("edit-profile");
    }
    public function create_user(Request $req){
  
        $user_infos = user_infos::where('email','=',$req->email)->get();
         
          if (sizeof($user_infos) > 0){
            return response()->json(["message" => "Email already exists!"], 201);
          }else{
            
            $validator = \Validator::make($req->all(), [
              'first_name'   => 'required|string|max:191',
              'last_name'    => 'required|string|max:191',
              'email'        => 'required',
              'password'     => 'required',
              'confirm_password'   => 'required',
              'country'  => 'required',
            ]);
            if ($validator->fails()) {
              $responseArr['message'] = $validator->errors();
              return response()->json($responseArr);
            }
            if ($req->password == $req->confirm_password) {
              $user_infos = new user_infos;
              $user_infos->first_name       = $req->first_name;
              $user_infos->last_name        = $req->last_name;
              $user_infos->email            = $req->email;
              $user_infos->password         = Hash::make($req->password);
              $user_infos->country           = $req->country;

              $user_infos->save();
              return redirect('/log_in')->with('success','Account Created!');
            }else{
                return redirect('/sign_up')->with('error','Email already exists!');
            }
          }
    }
    public function sign_in(Request $request){
      
        $validator = \Validator::make($request->all(), [
            'password' => 'required|string|max:191',
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            $responseArr['message'] = $validator->errors();
            return response()->json($responseArr);
        }
        else{
            $email=$request->email;
            $password=$request->password;
            $user_infos=user_infos::where('email',$request->email)->first();
            if(!empty($user_infos)){
                if(Hash::check($request->password,$user_infos->password)){
                    
                    return redirect('/companies')->with('success');

                  }  
                else{
                    return redirect('/log_in')->with('error','Incorrect Password! Please Enter Valid Password');
                    
                }
            }else{
                return redirect('/log_in')->with('error','User not found');
            }
        }
    }
    function create_organization(Request $req){
        $type = "application/json";
        $org_phone = organization::where('phone_number','=',$req->phone_no)->first();
        
     
        if(!empty($org_phone)){
            // return Redirect::to('/')->with('message', 'Email already exists');
            return back()->with('error', 'Phone No already exists!');}
        
        else{
          
          $validator = \Validator::make($req->all(), [
           
            'country_code' => 'required',
            'phone_number' => 'required',
            'twitter' => 'required',
            'website' => 'required',
            'telegram' => 'required',
            'github' => 'required',
            'introduction' => 'required',
            'skills' => 'required',
            'location'        => 'required',
            'role'     => 'required',
            'languages'   => 'required'
          ]);
          if ($validator->fails()) {
            $responseArr['message'] = $validator->errors();
            return response()->json($responseArr);
          }
          else{
            $web_users = new organization;
            $web_users->country_code = $req->country_code;
            $web_users->phone_number = $req->phone_number;
            $web_users->twitter = $req->twitter;
            $web_users->website = $req->website;
            $web_users->telegram = $req->telegram;
            $web_users->github = $req->github;
            $web_users->introduction = $req->introduction;
            $web_users->skills = $req->skills;
            $web_users->role = $req->role;
            $web_users->location = $req->location;
            $web_users->languages = $req->languages;
            $web_users->status = $req->status;
            if ($req->hasFile('event_image')) {
                $eventPic             = time().'.'.$req->event_image->extension();  
                $req->event_image->move(public_path('image'), $eventPic);
                $web_users->profile_picture = $eventPic;
            }
            // $file = $req->image;
            // $name = Str::random(10);
            // // $url = Storage::putFileAs('images', $file, $name . '.' . $file->extension()); 
            // $imageName = $name . '.' . $file->extension();  
            // echo json_encode($imageName);die();
            // $request->image->move(public_path('images'), $imageName);
            // echo json_encode($imageName);die();
            
            // $web_users->profile_picture = $imageName;
            $web_users->save();
            return redirect('/add_organization');
            // return view("/add_organization");

            // return back()->with('error', 'The error message here!');
            // return response()->json(["message" => "Registration Successfull" ,'code'=>'200'], 200);
          }
        
        
        }
        
    }
    function update_profile(Request $req){
        $type = "application/json";
        $org_phone = organizations::where('phone_number','=',$req->phone_no)->first();
        if( preg_match( "/^\+27[0-9]{9}$/", $req->phone_no ) ){
            // echo "Valid number";
          
     
        if(!empty($org_phone)){
            // return Redirect::to('/')->with('message', 'Email already exists');
            return back()->with('error', 'Phone No already exists!');}
        
        else{
          
          $validator = \Validator::make($req->all(), [
            'first_name'   => 'required|string|max:191',
            'last_name'    => 'required|string|max:191',
            'country_code' => 'required',
            'phone_number' => 'required',
            'twitter' => 'required',
            'website' => 'required',
            'telegram' => 'required',
            'github' => 'required',
            'introduction' => 'required',
            'skills' => 'required',
            'location'        => 'required',
            'role'     => 'required',
            'languages'   => 'required'
          ]);
          if ($validator->fails()) {
            $responseArr['message'] = $validator->errors();
            return response()->json($responseArr);
          }
          else{
            user_infos::where('user_id','=',$req->id)->update([
                'first_name'=>$req->first_name,
                'last_name'=>$req->last_name,
                'country_code'=>$req->country_code,
                'phone_number'=>$req->phone_number,
                'twitter'=>$req->twitter,
                'website'=>$req->website,
                'telegram'=>$req->telegram,
                'github'=>$req->github,
                'introduction'=>$req->introduction,
                'skills'=>$req->skills,
                'status'=>$req->status,
                'location'=>$req->location,
                'role'=>$req->role,
                'languages'=>$req->languages,

              ]);
           
            return view("home");

            // return back()->with('error', 'The error message here!');
            // return response()->json(["message" => "Registration Successfull" ,'code'=>'200'], 200);
          }
        
        }
        }else{
            return back()->with('error', 'Phone number is not correct!');
        } 
        
    }
    function update_jobs(Request $req){
        $type = "application/json";
        
            $jobs = new post_jobs;
            $jobs->title = $req->title;
            $jobs->category = $req->category;
            $jobs->type = $req->type;
            $jobs->location = $req->location;
            $jobs->remote = $req->remote;
            $jobs->description = $req->description;
            $jobs->skills = $req->skills;
            $jobs->salary = $req->salary;
            $jobs->equity = $req->equity;
           


            $jobs->save();
           
            return view("home");

            // return back()->with('error', 'The error message here!');
            // return response()->json(["message" => "Registration Successfull" ,'code'=>'200'], 200);
    }
    function create_contact(Request $req){
        $type = "application/json";
        
            $contact = new Contact;
            $contact->name = $req->name;
            $contact->email = $req->email;
            $contact->message = $req->message;
            $contact->save();
            UserEmails::contact($req->name, $req->email,$req->message);
            return redirect('/contact_us');
        
    } 
      
}
