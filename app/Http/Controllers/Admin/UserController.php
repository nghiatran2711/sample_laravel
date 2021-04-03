<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];
        $users=User::orderBy('id','desc')->paginate(5);
        $data['users']=$users;
        return view('user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        //
        $userInsert=[
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password')),
        ];
        DB::beginTransaction();
        try{
            User::create($userInsert);
            DB::commit();
            return redirect()->route('user.index')->with('success','Insert user success');
        }catch(\Exception $ex){
            DB::rollBack();
            return redirect()->route('user.create')->with('error',$ex->getMessage());
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
        $data = [];
        $userDetails=User::findOrFail($id);
        $data['userDetails'] = $userDetails;

        return view('user.details', $data);
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
        $data = [];
        $user= User::findOrFail($id);
        $data['user'] = $user;

        return view('user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        //
        $updateUser=[
            'name'=>$request->name,
            'email'=>$request->email,
            
        ];
        DB::beginTransaction();
        try {
            User::where('id',$id)->update($updateUser);     
            // update data to table user (successful)
            DB::commit();
            return redirect()->route('user.index')->with('success','Update data user success');
        } catch (\Exception $ex) {
            // update data to table user (fail)
            DB::rollBack();
            return redirect()->back()->with('error', $ex->getMessage());
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
        //
        DB::beginTransaction();
        try {
            //Cách 1:
            $user= User::find($id);
            $user->delete();   
            // Delete data to table user (successful)
            DB::commit();
            return redirect()->route('user.index')->with('success','Delete data user success');
        } catch (\Exception $ex) {
            // insert into data to table user (fail)
            DB::rollBack();
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
    public function Login(Request $request){
        $email=$request->email;
        $password=$request->password;

        // dd($credentials);
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Account or password don\'t exactly.',
        ]);
    }
}
