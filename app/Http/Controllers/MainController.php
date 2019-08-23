<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function talkshow()
    {
        return view('talkshow');
    }

    public function competition($cabang)
    {
        switch($cabang)
        {
            case 'intention':
                return view('intention');
                break;
            case 'dac':
                return view('dac');
                break;
            case 'ctf':
                return view('ctf');
                break;
            default:
                return abort('404');
                break;
        }
    }

    public function semnas()
    {
        return view('semnas');
    }

    public function expo()
    {
        return view('expo');
    }
}
