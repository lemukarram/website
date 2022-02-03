<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\setting;
class settingController extends Controller
{
    public function index(){
        $setting = setting::first();
        return view('admin.index', $setting);
    }

    public function update(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:100',
            'title'=>'required|min:20|max:75',
            'logo'=>'required|mimes:png|dimensions:max_width=150,max_height=100'
            ]
        );

        $setting = setting::first();
        $logo = $request->file('logo')->store('public');
        $setting->name = $request->input('name');
        $setting->title = $request->input('title');
        $setting->description = $request->input('description');
        $setting->email = $request->input('email');
        $setting->phone = $request->input('phone');
        $setting->logo = $logo;
        $setting->save();

        return view('admin.index', $setting);
    }

    
}
