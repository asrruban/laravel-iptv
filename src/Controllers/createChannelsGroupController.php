<?php

namespace Ruban\LaravelIPTV\Controllers;

use Illuminate\Http\Request;
use Ruban\LaravelIPTV\Model\IPTVChannelGroup;

class createChannelsGroupController extends Controller
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
	
	public function save(Request $request){
		
		$data = $request->all();
		IPTVChannelGroup::create($data);
		
		return redirect()->route('list_channelsGroups');
	}
}
