<?php

namespace MyApLaravel\Http\Controllers;

use Illuminate\Http\Request;
use MyApLaravel\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                                'name' => 'required',
                                'email' => 'required',
                                'password' => 'required'
                            ]);
        $user = new User();
        $user->name = $request->name;
        $user->email  = $request->email;
        $user->password = $request->password;
        try{
            if($user->save())
                return back()->with('status', 'User created!');
        } catch (Exception $e) {
                return back()->with('status', $e->getMessage());
        }
        
       
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
        $user = User::find($id);
        return view('user.edit',['user'=>$user]);
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
        $user = User::find($id);
        //rellenar
        $user->fill($request->all());
        try{
            if($user->save())
                return redirect('/user')->with('message', 'User created!');
        } catch (Exception $e) {
                return back()->with('status', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/user')->with('message', 'User Deleted!');
    }
}
