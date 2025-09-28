<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about-us');
    }

    public function products()
    {
        return view('products');
    }

    public function contact()
    {
        return view('contact-us');
    }

    public function cart()
    {
        return view('cart');
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function sendOtp(Request $request)
    {
        // OTP logic here (adapted from your PHP)
    }

    public function changePassword()
    {
        return view('change-password');
    }

    public function updatePassword(Request $request)
    {
        // Password update logic here (adapted)
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    public function account()
    {
        return view('account');
    }

    public function detail(Request $request)
    {
        $id = $request->query('id'); // get ?id=1 from URL

        // You can pass this to view if needed
        return view('detile', ['id' => $id]);
    }
}

