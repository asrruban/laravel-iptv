<?php

namespace Ruban\LaravelIPTV\Controllers;

use Illuminate\Http\Request;
use Ruban\LaravelIPTV\Model\IPTVChannel;

class showListChannelsController extends Controller
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
		$data['list'] = IPTVChannel::getList();
		
		return view("IPTV::channels_list",$data);
	}
}
