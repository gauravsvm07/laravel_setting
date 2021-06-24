<?php

namespace App\Http\Controllers\Admin;
use App\Models\Setting;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Helper;
class SettingController extends Controller
{
    private $module = 'setting';
    public function index(Request $request)
    {
        $sessionCountryId = Session::get('session_id');      
        if(empty($sessionCountryId))
        {
            return redirect('administrator/country');
        }  
        if(! Helper::adminCan($this->module,'view')) return dd('No Permission');      
        $setting=Setting::where('site_id',$sessionCountryId)->get();
        $site_id=$sessionCountryId;
        $globalSetting=array();
        foreach($setting as $key=>$value)
        {
            $globalSetting[$value->setting_key]=$value->setting_value;
        }
        return view('admin.settings.form',compact('globalSetting','site_id'));  
    }

    public function settingUpdate(Request $request)
    {
        $SessionCountryId = Session::get('session_id');        
        if(empty($SessionCountryId))
        {
           return redirect('administrator/country');
        }
        $data=request()->all();
        $updateSettings = Setting::where('site_id', $SessionCountryId)->pluck('setting_key')->toArray();       
        foreach($data['setting'] as $key => $value)
        {      
            if(in_array($key, $updateSettings))
            {
                Setting::where('setting_key', $key)->where('site_id', $SessionCountryId)->update(['setting_value' => $value]);
            }
            else
            {
                $settings = new Setting;
                $settings->setting_key    = $key;
                $settings->setting_value  = $value;
                $settings->site_id        = $SessionCountryId;
                $settings->save();       
            }            
        }
        return response()->json(['message'=>'General Setting Updated Successfully'], 200);      
    }
    
    public function dashboardindex(Request $request)
    {
        $sessionCountryId = Session::get('session_id');      
        if(empty($sessionCountryId))
        {
            return redirect('administrator/country');
        }
        if(! Helper::adminCan($this->module,'view')) return dd('No Permission');         
        $setting=Setting::where('site_id',$sessionCountryId)->get();
        $site_id=$sessionCountryId;
        $globalSetting=array();
        foreach($setting as $key=>$value)
        {
            $globalSetting[$value->setting_key]=$value->setting_value;
        }
        return view('admin.settings.dashboard',compact('globalSetting','site_id'));  
    }

    public function settingdashboardUpdate(Request $request)
    {
        $SessionCountryId = Session::get('session_id');        
        if(empty($SessionCountryId))
        {
           return redirect('administrator/country');
        }
        $data=request()->all();
        $updateSettings = Setting::where('site_id', $SessionCountryId)->pluck('setting_key')->toArray();       
        foreach($data['setting'] as $key => $value)
        {      
            if(in_array($key, $updateSettings))
            {
                Setting::where('setting_key', $key)->where('site_id', $SessionCountryId)->update(['setting_value' => $value]);
            }
            else
            {
                $settings = new Setting;
                $settings->setting_key    = $key;
                $settings->setting_value  = $value;
                $settings->site_id        = $SessionCountryId;
                $settings->save();       
            }            
        }
        return response()->json(['message'=>'Dashboard Setting Updated Successfully'], 200);      
    }
}
