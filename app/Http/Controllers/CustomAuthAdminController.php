<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

//Unknow
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.loginAdmin');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('user')
                ->withSuccess('Signed in');
        }
        
        return redirect("loginAdmin")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registrationAdmin');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            // 'name' => 'required',
            // 'email' => 'required|email|unique:users',
            // 'username' => 'required',
            // 'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("loginAdmin")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
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