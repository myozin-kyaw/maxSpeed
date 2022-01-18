<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
        $admins = User::where('is_admin',true)->orderBy('created_at', 'ASC')->get();
        return view('admin.admin', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;

        $password = Hash::make($request->password);
        $admin->password = $password;
        $admin->is_admin = $request->is_admin;
        $admin->save();
        return redirect('/admin')->with('uploaded', config('upload.admin.created'));
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
    public function edit(User $admin)
    {
       return view('admin.admin_edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, User $admin)
    {
        $admin->name = $request->name;
        $admin->email = $request->email;

        $password = Hash::make($request->password);
        $admin->password = $password;
        $admin->is_admin = $request->is_admin;
        $admin->save();
        return redirect('/admin')->with('uploaded', config('upload.admin.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        $admin->delete();
        return redirect('/admin')->with('deleted', config('upload.admin.deleted'));
    }
}
