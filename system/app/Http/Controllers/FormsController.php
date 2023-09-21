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
use App\Models\user_infos;
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
 
class FormsController extends Controller
{
    // function get_data(){
    //     return view("home");
    // }
    
    function edit_basic(Request $req){
        $type = "application/json";
        if($req->old_imap != $req->imap_id ){
            BasicSiteInformation :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            AdditionalInformation :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            AerialImageryAssessment :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            BuiltComponent :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            ConditionAssessment :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            CulturalPeriodAssignment :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            EnvironmentalInformation :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            FormAndInterpretation :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            HeritageProtectionStatus :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            HistoricMapsAssessment :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            KeywordsAndThemes :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            Location :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            Name :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            VesselInformation :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            VesselTonnage :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
            SiteDepthInformation :: where('imap_id', $req->old_imap)->update([
                'imap_id' => $req->imap_id,
            ]);
        }
        
            BasicSiteInformation :: where('imap_id', $req->old_imap)->update([
            'imap_id' => $req->imap_id,
            'grid_square_id' => $req->grid_square_id,
            'site_description' => $req->site_description,
            'site_classification' => $req->site_classification,
            'ground_truthed' => $req->ground_truthed,
            'drone_truthed' => $req->drone_truthed,
           'located' => $req->located,
            'significance' => $req->significance,

        ]);
      
        
            AdditionalInformation :: where('imap_id', $req->imap_id)->update([ 
            'site_function' => $req->site_function,
            'survey_method' => $req->survey_method,
            'research_activities' => $req->research_activities,
            'site_inspection_folder_url' => $req->site_inspection_folder_url,
            'site_integrity' => $req->site_integrity,
            
        ]);
      
        
    
        
           AerialImageryAssessment::where('imap_id', $req->imap_id)->update([ 
            'imap_id' => $req->imap_id,
           'ai_visible' => $req->ai_visible,
            'data_visible' => $req->data_visible,
            'notes' => $req->notes,
           
        ]);
      
           
        
        
            BuiltComponent::where('imap_id', $req->imap_id)->update([ 
            'material' => $req->material,
            'construction_technique' => $req->technique,
          
        ]);
      
        
        
        CulturalPeriodAssignment::where('imap_id', $req->imap_id)->update([ 
          'cultural_period_major' => $req->cultural_period_major,
            'cultural_period_minor' => $req->cultural_period_minor,
            'cultural_periods_certainity' => $req->cultural_periods_certainity,
            'sources_of_documented_cultural_periods' => $req->sources_of_documented_cultural_periods,
        ]);
      
        
        
        EnvironmentalInformation::where('imap_id', $req->imap_id)->update([ 
            'soil_type' => $req->soil_type,
            'land_cover' => $req->land_cover,
            'site_environmental_context' => $req->site_environmental_context,
        ]);
      
        
        FormAndInterpretation::where('imap_id', $req->imap_id)->update([ 
            'site_form' => $req->site_form,
            'site_interpretation' => $req->site_interpretation,
        ]);
      
        
        HeritageProtectionStatus::where('imap_id', $req->imap_id)->update([
            'level_of_protection' => $req->level_of_protection,
            'relevant_legislation' => $req->relative_legislation,
            'land_ownership' => $req->land_ownership,
            'protected_designation_status' => $req->protected_designation_status,
        ]);
       
        
        HistoricMapsAssessment::where('imap_id', $req->imap_id)->update([
            'hm_legend' => $req->hm_legend,
            'hm_notes' => $req->hm_notes,
           'config' => $req->config,
            'pin_date' => $req->pin_date,
            'hm_source' => $req->hm_source,
           'assess_by' => $req->assess_by,
        ]);
      
        KeywordsAndThemes::where('imap_id', $req->imap_id)->update([
            'keywords' => $req->keywords,
            'themes' => $req->themes,
        ]);
       
        
        Location::where('imap_id', $req->imap_id)->update([
            'maritime_zone' => $req->maritime_zone,
            'district' => $req->district,
            'tehsil' => $req->tehsil,
            'directions_to_site' => $req->directions_to_site,
            'location_information_source2' => $req->location_information_source2,
            'datum' => $req->datum,
            'geometry_recording_method' => $req->geometry_recording_method,
            'primary_location' => $req->primary_location,
            'status3' => $req->status3,
            'site_coordinates1' => $req->site_coordinates1,
           

        ]);
      
        Name::where('imap_id', $req->imap_id)->update([
            'site_name' => $req->site_name,
            'name_type' => $req->name_type,
            'primary_name' => $req->primary_name,
        ]);
      
        
        Vesseltonnage::where('imap_id', $req->imap_id)->update([

          'tonnage_type' => $req->tonnage_type,
           'tonnage_value' => $req->tonnage_value,
        ]);

        SiteDepthInformation::where('imap_id', $req->imap_id)->update([

            'max_depth' => $req->max_depth,
            'min_depth' => $req->min_depth,
        ]);
      
        
        VesselInformation::where('imap_id', $req->imap_id)->update([

            'vessel_id' => $req->vessel_id,
           'vessel_type' => $req->vessel_type,
            'vessel_construction' => $req->vessel_construction,
            'where_built' => $req->where_built,
            'when_built' => $req->when_built,
            'when_loss' => $req->when_loss,
            'reason_loss' => $req->reason_loss,
           'nationality' => $req->nationality,
        ]);
      
     
        ConditionAssessment::where('imap_id', $req->imap_id)->update([

            'date' => $req->date,
           'condition_level' => $req->condition_level,
            'condition_description' => $req->condition_description,
            'threat_level' => $req->threat_level,
            'threat_description' => $req->threat_description,
          'recommendations' => $req->recommendations,
        ]);
      
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
