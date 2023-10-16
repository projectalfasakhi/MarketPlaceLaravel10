<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Produk;

class DataSuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $users = User::where('type', 'admin')
        ->where('is_superadmin', '0')
        ->when($search, function($query) use ($search) {
            $query->where('name', 'LIKE', "%$search%")
            ->orWhere('email', 'LIKE', "%$search%");
        })
        ->get();
        return view('superadmin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'type' => 'required',
            'foto_profile' => 'required',
            'hp' => 'required',
        ]);
        User::create($request->all());
        return redirect()->route('user.index')
            ->with('success','User Created Successfully!');
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
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $products = Produk::where('created_by', $user->id)->get();

        foreach ($products as $product) {
            $product->delete();
        }

        $user->delete();
        // dd($user);
        return to_route('users.index')->with('success','User Deleted Successfully!');
    }
}
