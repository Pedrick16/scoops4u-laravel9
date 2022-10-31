<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return'UserController';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('user.login');
    }

    public function process(Request $request)
    {
        $Validated =$request->validate([
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);

        if(auth()->attempt($Validated)){
            $request->session()->regenerate();

            return redirect('/reseller');
        }

      

    }

    public function register()
    {
        return view('user.register');
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Validated = $request->validate([
            "name" => ['required', 'min:4' ],
            "email" => ['required', 'email',Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:6',
            "access" => ['required']
        ]);


        $Validated['password'] = bcrypt($Validated['password']);
        $user = User::create($Validated);
        auth()->login($user);

        return redirect('/reseller');
    
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            "id" => $id,
            "name" => "Pedrick Divinagracia",
            "age" => 20,
            "address" => "Binangonan Rizal."
        );
        return view('user',  $data);
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
