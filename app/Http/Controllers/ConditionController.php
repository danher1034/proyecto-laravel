<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function ConfigCookie() //Funcion para mostrar la configuración de cookies
    {
        return view('footerterms.config');
    }

    public function CookiePolicity() //Funcion para mostrar las politicas de cookies
    {
        return view('footerterms.cookiepolicity');
    }

    public function PrivacityPolicity() //Funcion para mostrar las politicas de privacidad
    {
        return view('footerterms.privacitypolicity');
    }

    public function Terms() //Funcion para mostrar los terminos y condiciones
    {
        return view('footerterms.terms');
    }
}
