<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 28.04.2018
 * Time: 20:10
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    public function open() {
        if(true) {
            return Redirect::to('login');
        }
        return 'Main';
    }
}