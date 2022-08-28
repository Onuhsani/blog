<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class PagesController extends Controller
{
    public function userIndex()
    {
        $users = User::all();
        $admin = "Admin";
        $actual_user = "User";
        return view('admin.users-index', compact(['users', 'admin', 'actual_user']));
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted');
    }
}
