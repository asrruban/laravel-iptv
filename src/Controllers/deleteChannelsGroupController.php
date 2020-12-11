<?php

namespace Ruban\LaravelIPTV\Controllers;

use Illuminate\Http\Request;
use Ruban\LaravelIPTV\Model\IPTVChannelGroup;


class deleteChannelsGroupController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function save($id,Request $request){
		
		$group =IPTVChannelGroup::findOrFail($id);
		
		$group->delete();
		
		return redirect()->route('list_channelsGroups');

	}
}
