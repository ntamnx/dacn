<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use Hash;
use Auth;

class UserController extends Controller {

    public function getList() {
        $user_cr = Auth::user()->level;
        if ($user_cr == 2) {
            $users = User::select()->get()->toArray();
            return view('admin.user.list', compact('users'));
        }
        return redirect()->route('admin')->with(['flash_level' => 'danger', 'flash_message' => 'Bạn không có quyền']);
    }

    public function getAdd() {
        $user_cr = Auth::user()->level;
        if ($user_cr == 2) {
            return view('admin.user.add');
        }
        return redirect()->route('admin')->with(['flash_level' => 'danger', 'flash_message' => 'Bạn không có quyền']);
    }

    public function postAdd(UserRequest $request) {
        $user = new User();
        $user->username = $request->txtTendn;
        $user->password = Hash::make($request->txtMatKhau);
        $user->email = $request->txtEmail;
        $user->level = $request->rdoQuyen;
        $user->remember_token = $request->_token;
        $user->save();
        return redirect()->route('admin.user.list')->with(['flash_level' => 'success', 'flash_message' => 'Thêm người dùng thành công']);
    }

    public function getEdit($id) {
        $user_cr = Auth::user()->level;
        if ($user_cr == 2) {
            $user = User::find($id);
            return view('admin.user.edit', compact('user'));
        }
        return redirect()->route('admin')->with(['flash_level' => 'danger', 'flash_message' => 'Bạn không có quyền']);
    }

    public function postEdit(Request $request, $id) {
        $this->validate($request, ["txtTendn" => "required", 'txtLaiMatKhau' => 'same:txtMatKhau'], ["txtTendn.required" => "Tên đăng nhập không được để trống", 'txtLaiMatKhau.same' => 'Nhập lại mật khẩu không khớp.']
        );
        $user = User::find($id);
        $user->username = $request->txtTendn;
        $user->password = Hash::make($request->txtMatKhau);
        $user->email = $request->txtEmail;
        $user->level = $request->rdoQuyen;
        $user->remember_token = $request->_token;
        $user->save();
        return redirect()->route('admin.user.list')->with(['flash_level' => 'success', 'flash_message' => 'Sửa người dùng thành công']);
    }
     public function getMK($id) {
        $user_cr = Auth::user()->id;
        if ($user_cr == $id) {
            $user = User::find($id);
            return view('admin.user.edit', compact('user'));
        }
        return redirect()->route('admin')->with(['flash_level' => 'danger', 'flash_message' => 'Bạn không có quyền']);
    }

    public function postMK(Request $request, $id) {
        $this->validate($request, ["txtTendn" => "required", 'txtLaiMatKhau' => 'same:txtMatKhau'], ["txtTendn.required" => "Tên đăng nhập không được để trống", 'txtLaiMatKhau.same' => 'Nhập lại mật khẩu không khớp.']
        );
        $user = User::find($id);
        $user->username = $request->txtTendn;
        $user->password = Hash::make($request->txtMatKhau);
        $user->email = $request->txtEmail;
        $user->level = $request->rdoQuyen;
        $user->remember_token = $request->_token;
        $user->save();
        return redirect()->route('admin.user.list')->with(['flash_level' => 'success', 'flash_message' => 'Sửa người dùng thành công']);
    }
    public function getDelete($id) {
        $user_cr = Auth::user()->level;
        if ($user_cr == 2) {
            $user = User::find($id);
            $user->delete();
            return redirect()->route('admin.user.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa người dùng thành công']);
        }
        return redirect()->route('admin')->with(['flash_level' => 'danger', 'flash_message' => 'Bạn không có quyền']);
    }

}
