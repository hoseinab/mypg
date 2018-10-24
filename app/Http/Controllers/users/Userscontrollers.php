<?php

namespace App\Http\Controllers\users;

use App\models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class Userscontrollers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::get();
        return view('users.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userRoles = User::getUserRoles();

        return view('users.create', compact('userRoles'));
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
        $user      = User::find($id);
        $userRoles = User::getUserRoles();

        return view('users.edit', compact('user', 'userRoles'));
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
        if ($user && $user instanceof User) {
            $userData = [
                'name'  => $request->input('userFullName'),
                'email' => $request->input('userEmail'),
            ];
            if ($request->filled('userPassword')) {
                $userData['password'] = $request->input('userPassword');
            }
            $updateResult = $user->update($userData);
            if ($updateResult) {
                return redirect()->route('users.list')->with('status', 'کاربر با موفقیت به روز رسانی گردید!');
            }
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
    }
}
