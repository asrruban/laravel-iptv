<?php

namespace Felipefm32\LaravelIPTV\Controllers;

use Illuminate\Http\Request;
use Felipefm32\LaravelIPTV\Model\IPTVChannel;

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
