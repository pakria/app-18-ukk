<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('admin.user.user_index', compact('user') );
    }

    public function create()
    {
        return view('admin.user.user_create',[
            'models' => new User(),

        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'alamat' => ['required', 'string'],
            'telepon' => ['required', 'string'],
            'role' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->telepon = $request->telepon;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('user.index');
    }

    public function edit(string $id)
    {
        $user = User::findorfail($id);
        return view('admin.user.user_edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email,'. $id,
            'alamat' => 'required',
            'telepon' => 'required|numeric',
            'role' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('user.index');        
    }

    public function destroy(string $id)
    {
        $user = User::findorfail($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
