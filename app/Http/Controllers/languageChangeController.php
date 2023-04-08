<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class languageChangeController extends Controller
{
    /**
     * @param $lanCode
     * @return RedirectResponse
     */
    public function change($lanCode)
    {
        Session::put('language', $lanCode );
        App::setLocale($lanCode);
        return redirect()->back();
    }
}
