<?php

namespace Ruban\LaravelIPTV\Controllers;

use Illuminate\Http\Request;
use Ruban\LaravelIPTV\Model\IPTVChannelGroup;


class addChannelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function index(){
		
		$data["Groupslist"] = IPTVChannelGroup::get();
		
		return view("IPTV::channel",$data);
	}
	
	
}
