<?php
/**
 * User: Eternal1
 * Date: 1/22/2016
 * Time: 11:40 AM
 */

namespace App\Http\Controllers;

use Eternal1\Currency\ConverterWidget;

class HomeController extends Controller
{

    function showWidget(ConverterWidget $widget)
    {
        return view('welcome', ['converter' => $widget]);
    }
}