<?php

namespace App\Http\Controllers\bbs\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Bbssession;
use App\Http\Models\Bbsuser;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo  "admin";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
	public function login()
	{
		$navbars = Bbssession::all();
		
		return view('bbs.admin.login')->with('navbars',$navbars);
	}
	public function loginCheck(Request $request)
	{	
		$data = $request->except(['_token']);
		$data['UPassword']=md5($data['UPassword']);
		$record = Bbsuser::where('UName','=',$data['UName'])->where('UPassword','=',$data['UPassword'])->where('UIsSectioner','=',1)->get();
		
		if($record->first())
		{
			echo "logining";
		}
		else{
			echo  "woring";
		}
		
	}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
