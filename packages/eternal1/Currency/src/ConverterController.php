<?php
/**
 * User: Eternal1
 * Date: 1/25/2016
 * Time: 3:17 PM
 */

namespace Eternal1\Currency;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConverterController extends Controller
{

    function index(Request $request, Converter $converter) {
        $source = $request->get('source');
        $destination = $request->get('destination');
        $amount = $request->get('amount');

        return $converter->convert($source, $destination, $amount);
    }
}