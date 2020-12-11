<?php

namespace Ruban\LaravelIPTV\Controllers;

use Illuminate\Http\Request;
use Ruban\LaravelIPTV\Model\IPTVChannelGroup;


class showChannelsGroupController extends Controller
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
	
	public function index($id){
		
		$data["Group"] = IPTVChannelGroup::findOrFail($id);
		
		return view("IPTV::channelGroup",$data);
		
	}
}
