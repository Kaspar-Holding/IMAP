<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Mail;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\contact;
use Illuminate\Support\Str;
use App\UserEmails;
use App\Models\User;
use App\Models\imap_user;
use App\Models\BasicSiteInformation;
use App\Models\AdditionalInformation;
use App\Models\AerialImageryAssessment;
use App\Models\BuiltComponent;
use App\Models\ConditionAssessment;
use App\Models\CulturalPeriodAssignment;
use App\Models\EnvironmentalInformation;
use App\Models\FormAndInterpretation;
use App\Models\HeritageProtectionStatus;
use App\Models\HistoricMapsAssessment;
use App\Models\KeywordsAndThemes;
use App\Models\Location;
use App\Models\Name;
use App\Models\VesselInformation;
use App\Models\VesselTonnage;
use App\Models\SiteDepthInformation;
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
    function sidebar(){
        
      return view("sidebar");
  }
    function log_in(){
        return view("log-in");
    }
    function add_form(){
      return view("forms.basic");
  }
  function dashboard(){
    $site_classification = BasicSiteInformation::where('site_classification','!=','0')->get();
    $cultural = CulturalPeriodAssignment::get();
    $site_interpretation = FormAndInterpretation::get();
    $district = Location::get();
    $keywords = KeywordsAndThemes::get();
    $coordinates = Location::whereNotNull('site_coordinates1')->get('site_coordinates1');
    // echo json_encode($site_classification);die();
    return view("dashboard",['coordinates'=>$coordinates,'site_classification'=>$site_classification,'cultural'=> $cultural, 'site_interpretation'=> $site_interpretation,'district'=> $district, 'keywords'=>$keywords]);
  }
  function search_results(Request $request){
    if($request->imap_id){
      $imap_id = $request->imap_id;
    }
    else{
      $imap_id = "";
    }
    if($request->keyword){
      $keyword = $request->keyword;
    }
    else{
      $keyword = '';
    }
   
    if($request->cultural){
      $culturals = $request->cultural;

    }
    else{
      $culturals =NULL;

    }
    if($request->verified){
      $verified = $request->verified;
    }
    else{
      $verified ="";
    }
    if($request->site_interpretation){
      $site_interpretations = $request->site_interpretation;

    }
    else{
      $site_interpretations = NULL;
    }
    if($request->district){
      $districts = $request->district;

    }
    else{
      $districts = 1111111111111;
    }

    
    $site_classification_result=DB::table('basic_site_information')
    ->select('basic_site_information.*')
    ->leftJoin('cultural_period_assignment', 'basic_site_information.imap_id', '=', 'cultural_period_assignment.imap_id')
    ->leftJoin('form_and_interpretation', 'basic_site_information.imap_id', '=', 'form_and_interpretation.imap_id')
    ->leftJoin('location', 'basic_site_information.imap_id', '=', 'location.imap_id')
    ->leftJoin('keywords_and_themes', 'basic_site_information.imap_id', '=', 'keywords_and_themes.imap_id')
    ->where('basic_site_information.imap_id', $imap_id)
    ->orWhere('basic_site_information.ground_truthed', $verified)
    ->orWhere('cultural_period_assignment.cultural_period_major', $culturals)
    ->orWhere('form_and_interpretation.site_interpretation', $site_interpretations)
    ->orWhere('location.district', $districts)
    // ->orWhere('keywords_and_themes.keywords', $keyword)
    ->distinct()
    ->get();

    // echo $site_classification_result;die();


    $site_classification = BasicSiteInformation::where('site_classification','!=','0')->get();
    $cultural = CulturalPeriodAssignment::get();
    $site_interpretation = FormAndInterpretation::get();
    $district = Location::get();
    $keywords = KeywordsAndThemes::get();
    // echo json_encode($site_classification_result);die();
    if($site_classification_result){
      $push=array();
      foreach($site_classification_result as $results){
        $coordinate = Location::where('imap_id',$results->imap_id)->first('site_coordinates1');
        
        array_push($push,$coordinate);
        unset($coordinate);
      }
     
      $coordinates = $push;
     
      // echo json_encode($push);die();
    }
    else{
      $coordinates = Location::whereNotNull('site_coordinates1')->get('site_coordinates1');
    }
    // echo($coordinates);die();
   
    // echo json_encode($site_classification_result);die();
    return view("dashboard",['coordinates'=>$coordinates,'site_classification'=>$site_classification,'cultural'=> $cultural, 'site_interpretation'=> $site_interpretation,'district'=> $district, 'keywords'=>$keywords,'site_classification_result'=>$site_classification_result]);


  }
  function show_report(Request $req){
    $basic_site_information = BasicSiteInformation::where('imap_id',$req->imap_id)->first();
    $form_and_interpretation = FormAndInterpretation::where('imap_id',$req->imap_id)->first();
    $additional_information = AdditionalInformation::where('imap_id',$req->imap_id)->first();
    $aerial_imagery_assessment = AerialImageryAssessment::where('imap_id',$req->imap_id)->first();
    $built_component = BuiltComponent::where('imap_id',$req->imap_id)->first();
    $cultural_period_assignment = CulturalPeriodAssignment::where('imap_id',$req->imap_id)->first();
    $environmental_information = EnvironmentalInformation::where('imap_id',$req->imap_id)->first();
    $heritage_protection_status = HeritageProtectionStatus::where('imap_id',$req->imap_id)->first();
    $historic_maps_assessment = HistoricMapsAssessment::where('imap_id',$req->imap_id)->first();
    $keywords_and_themes = KeywordsAndThemes::where('imap_id',$req->imap_id)->first();
    $location = Location::where('imap_id',$req->imap_id)->first();
    $name = Name::where('imap_id',$req->imap_id)->first();
    $vessel_tonnage = Vesseltonnage::where('imap_id',$req->imap_id)->first();
    $site_depth_information = SiteDepthInformation::where('imap_id',$req->imap_id)->first();
    $vessel_information = VesselInformation::where('imap_id',$req->imap_id)->first();
    $condition_assessment = ConditionAssessment::where('imap_id',$req->imap_id)->first();
    $coordinates = Location::whereNotNull('site_coordinates1')->get('site_coordinates1');

    // echo $coordinates;die();
    return view('report_detail',['coordinates'=>$coordinates]);
  }

  
    public function create_user(Request $req){
     
        $user_infos = imap_user::where('email','=',$req->email)->get();
         
          if (sizeof($user_infos) > 0){
            return response()->json(["message" => "Email already exists!"], 201);
          }else{
            
            $validator = \Validator::make($req->all(), [
              'first_name'   => 'required|string|max:191',
              'last_name'    => 'required|string|max:191',
              'email'        => 'required',
              'password' => [
                'required',
                'string',
                'min:8',             // Minimum length of 8 characters
                'regex:/[A-Z]/',     // At least one uppercase letter
                'regex:/[a-z]/',     // At least one lowercase letter
                'regex:/[0-9]/',     // At least one number
                'regex:/[@$!%*#?&]/' // At least one special character (you can customize this list as needed)
            ],
              'confirm_password'   => 'required',
              'role' => 'required',
            //   'country'  => 'required',
            ]);
            if ($validator->fails()) {
              $responseArr['message'] = $validator->errors();
              return response()->json($responseArr);
            }
            if ($req->password == $req->confirm_password) {
             
              $user_infos = new imap_user;
              $user_infos->first_name       = $req->first_name;
              $user_infos->last_name        = $req->last_name;
              $user_infos->email            = $req->email;
              $user_infos->password         = Hash::make($req->password);
              $user_infos->user_type           = $req->role;
             
              $user_infos->save();
              
              return redirect('/log_in');
            }
            else{
                return redirect('/sign_up')->with('error','Password does not match!');
            }
          }
    }
    public function home(Request $request){
      $user = Session::get('user');
        if($user == ""){
            
          return view("forms.basic");
        }else{
        $validator = \Validator::make($request->all(), [
            'password' => 'required|string|max:191',
            'email' => 'required',
        ]);
        if ($validator->fails()) {
          
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
            $email=$request->email;
            $password=$request->password;
            $data = $request->input();
            Session::put('user', $data);
            // $request->session()->put('user',$data);
            $user_data = Session::get('user');
            // echo json_encode($user_data);die();
            $user_infos=imap_user::where('email',$request->email)->first();
            if(!empty($user_infos)){
                if(Hash::check($request->password,$user_infos->password)){
                    
                  return redirect('/add_form');

                  }  
                else{
                    return redirect('/log_in')->with('error','Incorrect Password! Please Enter Valid Password');
                    
                }
            }else{
             
                return redirect('/log_in')->with('error','User not found');
            }
        }
    }
    }
  
  
   
    function create_contact(Request $req){
        $type = "application/json";
        
            $contact = new contact;
            $contact->name = $req->name;
            $contact->email = $req->email;
            $contact->message = $req->message;
            $contact->save();
            UserEmails::contact($req->name, $req->email,$req->message);
            return view("contact-us");
        
    } 
    
    function mail(Request $req){
        $to_name = 'Misbah Ayaz';
        $to_email = 'misbahayaz921@gmail.com';
        $data = array('name'=>'Ogbonna Vitalis(sender_name)', 'body' => 'A test mail');
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('Laravel Test Mail');
        $message->from('SENDER_EMAIL_ADDRESS','Test Mail');
        });
    }
    
    function add_record(Request $req){
      $type = "application/json";
          $record1 = new BasicSiteInformation;
          $record1->imap_id = $req->imap_id;
          $record1->grid_square_id = $req->grid_square_id;
          $record1->site_description = $req->site_description;
          $record1->ground_truthed = $req->ground_trouthed;
          $record1->drone_truthed = $req->drone_truthed;
          $record1->located = $req->located;
          $record1->significance = $req->significance;


          $record1->save();

          
          $record2 = new AdditionalInformation;
          $record2->imap_id = $req->imap_id;
          $record2->site_function = $req->site_function;
          $record2->survey_method = $req->survey_method;
          $record2->research_activities = $req->research_activities;
          $record2->site_inspection_folder_url = $req->site_inspection_folder_url;
          $record2->site_integrity = $req->site_integrity;
          


          $record2->save();
         
          $record3 = new AerialImageryAssessment;
          $record3->imap_id = $req->imap_id;
          $record3->ai_visible = $req->ai_visible;
          $record3->data_visible = $req->data_visible;
          $record3->notes = $req->notes;
          $record3->save();
          
          $record4 = new BuiltComponent;
          $record4->imap_id = $req->imap_id;
          $record4->material = $req->material;
          $record4->construction_technique = $req->construction_technique;
          $record4->save();
          
          $record5 = new CulturalPeriodAssignment;
          $record5->imap_id = $req->imap_id;
          $record5->cultural_period_major = $req->cultural_period_major;
          $record5->cultural_period_minor = $req->cultural_period_minor;
          $record5->cultural_periods_certainity = $req->cultural_periods_certainity;
          $record5->sources_of_documented_cultural_periods = $req->sources_of_documented_cultural_periods;
          $record5->save();
          
          $record6 = new EnvironmentalInformation;
          $record6->imap_id = $req->imap_id;
          $record6->soil_type = $req->soil_type;
          $record6->land_cover = $req->land_cover;
          $record6->site_environmental_context = $req->site_environmental_context;
          $record6->save();
          
          $record7 = new FormAndInterpretation;
          $record7->imap_id = $req->imap_id;
          $record7->site_form = $req->site_form;
          $record7->site_interpretation = $req->site_interpretation;
          $record7->save();
         
          $record8 = new HeritageProtectionStatus;
          $record8->imap_id = $req->imap_id;
          $record8->level_of_protection = $req->level_of_protection;
          $record8->relevant_legislation = $req->relative_legislation;
          $record8->land_ownership = $req->land_ownership;
          $record8->protected_designation_status = $req->protected_designation_status;
          $record8->save();
          
       
          $record9 = new HistoricMapsAssessment;
          $record9->imap_id = $req->imap_id;
          $record9->hm_legend = $req->hm_legend;
          $record9->hm_notes = $req->hm_notes;
          $record9->config = $req->config;
          $record9->pin_date = $req->pin_date;
          $record9->hm_source = $req->hm_source;
          $record9->assess_by = $req->assess_by;
          $record9->save();
          
          $record10 = new KeywordsAndThemes;
          $record10->imap_id = $req->imap_id;
          $record10->keywords = $req->keywords;
          $record10->themes = $req->themes;
          $record10->save();
          
  
          $record11 = new Location;
          $record11->imap_id = $req->imap_id;
          $record11->maritime_zone = $req->maritime_zone;
          $record11->district = $req->district;
          $record11->tehsil = $req->tehsil;
          $record11->directions_to_site = $req->directions_to_site;
          $record11->location_information_source2 = $req->location_information_source2;
          $record11->datum = $req->datum;
          $record11->geometry_recording_method = $req->geometry_recording_method;
          $record11->primary_location = $req->primary_location;
          $record11->status3 = $req->status3;
          $record11->site_coordinates1 = $req->site_coordinates1;
          $record11->save();
          
          $record12 = new Name;
          $record12->imap_id = $req->imap_id;
          $record12->site_name = $req->site_name;
          $record12->name_type = $req->name_type;
          $record12->primary_name = $req->primary_name;
          $record12->save();
          
         
          $record13 = new VesselTonnage;
          $record13->imap_id = $req->imap_id;
          $record13->tonnage_type = $req->tonnage_type;
          $record13->tonnage_value = $req->tonnage_value;
          $record13->save();
          
          $record14 = new SiteDepthInformation;
          $record14->imap_id = $req->imap_id;
          $record14->max_depth = $req->max_depth;
          $record14->min_depth = $req->min_depth;
          $record14->save();
          
          $record15 = new VesselInformation;
          $record15->imap_id = $req->imap_id;
          $record15->vessel_id = $req->vessel_id;
          $record15->vessel_type = $req->vessel_type;
          $record15->vessel_construction = $req->vessel_construction;
          $record15->where_built = $req->where_built;
          $record15->when_built = $req->when_built;
          $record15->when_loss = $req->when_loss;
          $record15->reason_loss = $req->reason_loss;
          $record15->nationality = $req->nationality;
          $record15->save();
          
          $record16 = new ConditionAssessment;
          $record16->imap_id = $req->imap_id;
          $record16->date = $req->date;
          $record16->condition_level = $req->condition_level;
          $record16->condition_description = $req->condition_description;
          $record16->threat_level = $req->threat_level;
          $record16->threat_description = $req->threat_description;
          $record16->recommendations = $req->recommendations;
          $record16->save();
          $basic_site_information = BasicSiteInformation::where('imap_id',$req->imap_id)->first();
          $form_and_interpretation = FormAndInterpretation::where('imap_id',$req->imap_id)->first();
          $additional_information = AdditionalInformation::where('imap_id',$req->imap_id)->first();
          $aerial_imagery_assessment = AerialImageryAssessment::where('imap_id',$req->imap_id)->first();
          $built_component = BuiltComponent::where('imap_id',$req->imap_id)->first();
          $cultural_period_assignment = CulturalPeriodAssignment::where('imap_id',$req->imap_id)->first();
          $environmental_information = EnvironmentalInformation::where('imap_id',$req->imap_id)->first();
          $heritage_protection_status = HeritageProtectionStatus::where('imap_id',$req->imap_id)->first();
          $historic_maps_assessment = HistoricMapsAssessment::where('imap_id',$req->imap_id)->first();
          $keywords_and_themes = KeywordsAndThemes::where('imap_id',$req->imap_id)->first();
          $location = Location::where('imap_id',$req->imap_id)->first();
          $name = Name::where('imap_id',$req->imap_id)->first();
          $vessel_tonnage = Vesseltonnage::where('imap_id',$req->imap_id)->first();
          $site_depth_information = SiteDepthInformation::where('imap_id',$req->imap_id)->first();
          $vessel_information = VesselInformation::where('imap_id',$req->imap_id)->first();
          $condition_assessment = ConditionAssessment::where('imap_id',$req->imap_id)->first();
  
          
          return view('forms.review',['basic_site_information'=>$basic_site_information,'additional_information'=>$additional_information,'form_and_interpretation'=>$form_and_interpretation , 'aerial_imagery_assessment'=> $aerial_imagery_assessment , 'built_component'=> $built_component , 'cultural_period_assignment'=>$cultural_period_assignment , 'environmental_information'=> $environmental_information , 'heritage_protection_status' => $heritage_protection_status , 'historic_maps_assessment'=> $historic_maps_assessment , 'keywords_and_themes'=>$keywords_and_themes ,'location' => $location , 'name' => $name , 'vessel_tonnage' => $vessel_tonnage ,'site_depth_information'=>$site_depth_information , 'vessel_information'=> $vessel_information , 'condition_assessment'=>$condition_assessment]); 
          
      
  }  

}
