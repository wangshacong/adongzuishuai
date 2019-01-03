<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Article;
use Illuminate\Http\Request;
use Faker\Provider\lv_LV\Color;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     //用户列表页
     public function userindex()
     {
        $user = User::orderBy('id','desc')->paginate(4);
        return view('admin.user.index', compact('user'));
     }

     //用户添加页
     public function usercreate()
     {
         echo '用户添加';
     }


    //第一个网站的文章列表页
    public function news1index()
    {
        $article = Article::orderBy('id','desc')->paginate(8);
        $a = \Session::all();
        dump($a);
        return view('admin.article.index',compact('article'));
    }

    //第一个网站文章添加
    public function create()
    {
        //
        return view('admin.article.create');
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
        $article = Article::find($id);
        if($article->delete())
        {
            return back()->with('success','删除成功');
        } else {
            return back()->with('error','删除失败');
        }
    
    }

    //后台登录
    public function login()
    {

    }

    //登录验证
    public function dologin(Request $request)
    {
        echo 22;
        $user = User::where('user_name',$request->username)->first();
        // dump($user);
        if(!$user){
            return back();
        }else if(Hash::check($request->password, $user->passwd)) {
            session(['username' => $user->user_name, 'id' => $user->id]);
            return view('admin');
        }else {
            return back();
        }
    }
    //后台退出登录
    public function logout()
    {
        return view('admin.login');
    }
    
}
