<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 28.04.2018
 * Time: 19:52
 */

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;

class AuthenticationController extends Controller
{
    public function check() {
        return "Welcome ME!";
    }
}