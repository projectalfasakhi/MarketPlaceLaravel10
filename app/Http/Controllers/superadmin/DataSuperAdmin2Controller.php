<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class DataSuperAdmin2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        $search2 = $request->input('search2');
        $users = User::where('type', 'customer')
        ->when($search2, function($query) use ($search2) {
            $query->where('name', 'LIKE', "%$search2%")
            ->orWhere('email', 'LIKE', "%$search2%");
        })
        ->get();
        // dd($users);
        return view('superadmin.customer.index2', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create2()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show2($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit2($id)
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
    public function update2(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {   
        $user->delete();
        // dd($user);
        return to_route('users2.index')->with('success','User Deleted Successfully!');
    }
}
