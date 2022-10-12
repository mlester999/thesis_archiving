<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }   
    // End Method

    public function Profile() {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));

    }
    // End Method

    public function EditProfile() {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_profile_edit', compact('editData'));
    }
    // End Method

    public function StoreProfile(Request $request) {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;

        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('admin.profile')->with($notification);

    }
    // End Method

    public function ChangePassword() {

        return view('admin.admin_change_password');
    }
    // End Method

    public function UpdatePassword(Request $request) {

        $validateDate = $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|same:confirmPassword',
            'confirmPassword' => 'required',
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->currentPassword, $hashedPassword)) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newPassword);
            $users->save();

            session()->flash('message', 'Password Updated Successfully');
            return redirect()->route('dashboard');
        } else {
            session()->flash('message', 'Current Password was not entered correctly');
            return redirect()->back();
        }
    }
}
