<?php

namespace App\Http\Controllers\bbs\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Bbssession;
use App\Http\Models\Bbsuser;
use App\Http\Models\Bbstopic;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {	
		
		$records = Bbstopic::all();
		$navbars = Bbssession::all();
		return view('bbs.home.index')->with('navbars',$navbars)->with('records',$records);
		
    }
	// Login 
	public function login(Request $request){
		
		$navbars = Bbssession::all();
		return view('bbs.home.login')->with('navbars',$navbars);
	}
	public function loginCheck(Request $request){
		//验证登录用户名密码
		$data = $request->except(['_token']);
		$data['UPassword']=md5($data['UPassword']);
		$record = Bbsuser::where('UName','=',$data['UName'])->where('UPassword','=',$data['UPassword'])->get();
		//跳转到首页
		if($record->first()){
		$request->session()->put('user', $record[0]['original']);
		//查询分类
		$records = Bbstopic::all();
		$navbars = Bbssession::all();
		return view('bbs.home.index')->with('navbars',$navbars)->with('records',$records);
		}
		echo "用户名或密码错误";
	}
	public function outLogin(Request $request)
	{
		$request->session()->forget('user');
		$records = Bbstopic::all();
		$navbars = Bbssession::all();
		return view('bbs.home.index')->with('navbars',$navbars)->with('records',$records);
	}
	
	
	
	
	
	
	
	// add 
	public function addUser()
	{	$navbars = Bbssession::all();
	
		return view('bbs.home.addUser')->with('navbars',$navbars);
	}
	//分类
	public function bbssession($id)
	{
		dd($id);
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $navbars = Bbssession::all();
        //
		$sessions =Bbssession::all();
		return view('bbs.home.create')->with('navbars',$navbars)->with('sessions',$sessions);
    }
	
	
	public function intTc(Request $request)
	{
		$data = $request->except(["_token"]);
		$data['TUID'] = $request->session()->get('user')['UID'];
		$lastID = Bbstopic::insertGetId($data);
		if($lastID==null)
		{
			echo "发帖失败,稍后重试!";
		}
		$records = Bbstopic::all();
		$navbars = Bbssession::all();
		return view('bbs.home.index')->with('navbars',$navbars)->with('records',$records);
	}	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$navbars = Bbssession::all();
        //
		$data = $request->except(['_token']);
		$data['UPassword']=md5($request['UPassword']);
		$sql = Bbsuser::create($data);
		return view('bbs.home.index')->with('navbars',$navbars);
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
