<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function ConfigCookie()
    {
        return view('footerterms.config');
    }

    public function CookiePolicity()
    {
        return view('footerterms.cookiepolicity');
    }

    public function PrivacityPolicity()
    {
        return view('footerterms.privacitypolicity');
    }

    public function Terms()
    {
        return view('footerterms.terms');
    }
}
