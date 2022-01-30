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
}
