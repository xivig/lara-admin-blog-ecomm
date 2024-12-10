<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return View ()
     */
    public function index(): View
    {
        return view('auth.login');
    }

    /**
     * Write code on Method
     *
     * @return View ()
     */
    public function registration(): View
    {
        return view('auth.register');
    }

    /**
     * Write code on Method
     *
     * @param Request $request
     * @return RedirectResponse ()
     */
    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully logged in');
        }

        return redirect("login")->withError('OOps! You have entered invalid credentials');
    }

    /**
     * Write code on Method
     *
     * @param Request $request
     * @return RedirectResponse ()
     */
    public function postRegistration(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $user = $this->create($data);

        Auth::login($user);

        return redirect("dashboard")->withSuccess('Great! You have Successfully logged in');
    }

    /**
     * Write code on Method
     *
     * @return RedirectResponse|View ()
     */
    public function dashboard(): RedirectResponse | View
    {
        if(Auth::check()){
            return view('auth.dashboard');
        }

        return redirect("login")->withSuccess('OOps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    /**
     * Write code on Method
     *
     * @return RedirectResponse ()
     */
    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }


    /**
     * Write code on Method
     *
     * @return View ()
     */
    public function profile(): View
    {
        return view('auth.profile');
    }

    /**
     * Write code on Method
     *
     * @return View ()
     */
    public function inbox(): View
    {
        return view('auth.inbox');
    }

    /**
     * Write code on Method
     *
     * @return View ()
     */
    public function setting(): View
    {
        return view('auth.setting');
    }
}
