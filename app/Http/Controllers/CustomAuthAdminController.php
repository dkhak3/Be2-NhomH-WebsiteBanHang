<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

//Unknow
class CustomAuthAdminController extends Controller
{
<<<<<<< HEAD
    public function index()
=======
    public function loginAdmin()
>>>>>>> login-admin
    {
        return view('auth.loginAdmin');
    }

<<<<<<< HEAD
    public function customLogin(Request $request)
=======
    public function customLoginAdmin(Request $request)
>>>>>>> login-admin
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
<<<<<<< HEAD
        if (Admin::attempt($credentials)) {
=======
        if (Auth::attempt($credentials)) {
>>>>>>> login-admin
            return redirect()->intended('admin')
                ->withSuccess('Signed in');
        }
        
        return redirect("loginAdmin")->withSuccess('Login details are not valid');
    }

    public function registrationAdmin()
    {
        return view('auth.registrationAdmin');
    }

    public function customRegistrationAdmin(Request $request)
    {
        $request->validate([
            // 'name' => 'required',
            'email' => 'required|email|unique:admins',
            'username' => 'required|unique:admins',
            // 'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("loginAdmin")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return Admin::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('admin');
        }

        return redirect("loginAdmin")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}