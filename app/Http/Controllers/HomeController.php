<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use View;
use Session;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $title = "Psychology To Go: Health information you can trust";
        $desc = "We're committed to being your source for practical guidance on mental health. Come to us in your pursuit of information.";
        return view('website.start', compact('title', 'desc'));
    }

    public function tracking_free(Request $request)
    {
        $title = "Psychology To Go: Health information you can trust";
        $desc = "We're committed to being your source for practical guidance on mental health. Come to us in your pursuit of information.";
        return view('website.tracking_free', compact('title', 'desc'));
    }

    public function text_editor(Request $request)
    {
        $title = "Psychology To Go: Text Editor";
        $desc = "We're committed to being your source for practical guidance on mental health. Come to us in your pursuit of information.";
        return view('website.automation.text_editor', compact('title', 'desc'));
    }

    public function accept_cookies(Request $request)
    {
        $path = $request->url;
        $minutes = 60 * 60 * 24 * 365;
        $cookie = cookie('consent', 'You Gave Consent to Cookies!', $minutes);
        return response()->json([
            "path" => $path
        ])
        ->header('Access-Control-Expose-Headers', 'AMP-Access-Control-Allow-Source-Origin, AMP-Redirect-To')
        ->header('AMP-Access-Control-Allow-Source-Origin', 'https://127.0.0.1')
        ->header('AMP-Redirect-To', url($path))
        ->cookie($cookie);
    }

    public function accept_cookies_privacy(Request $request)
    {
        $path = '/';
        $minutes = 60 * 60 * 24 * 365;
        $cookie = cookie('consent', 'You Gave Consent to Cookies!', $minutes);
        return response()->json([
            "path" => $path
        ])
        ->header('Access-Control-Expose-Headers', 'AMP-Access-Control-Allow-Source-Origin, AMP-Redirect-To')
        ->header('AMP-Access-Control-Allow-Source-Origin', 'https://127.0.0.1')
        ->header('AMP-Redirect-To', url($path))
        ->cookie($cookie);
    }

    public function cookie_unconsent(Request $request)
    {
        $cookie = Cookie::forget('consent');
        $path = '/tracking-free';
        return response()->json([
            "path" => '/tracking-free'
        ])
        ->header('Access-Control-Expose-Headers', 'AMP-Access-Control-Allow-Source-Origin, AMP-Redirect-To')
        ->header('AMP-Access-Control-Allow-Source-Origin', 'https://127.0.0.1')
        ->header('AMP-Redirect-To', url($path))
        ->cookie($cookie);
    }

    public function about()
    {
        return view('website.about');
    }

    public function privacy_policy()
    {
        $title = "Privacy Policy | Psychology To Go";
        $desc = "Thank you for visiting our Privacy Policy. This Privacy Policy applies to the website www.psychology-to-go.com owned and operated by Psychology To Go.";
        return view('website.legal.privacy_policy', compact('title', 'desc'));
    }


    public function privacy_settings()
    {
        $title = "Privacy Settings | Psychology To Go";
        $desc = "Thank you for visiting our Privacy Settings. To make the Psychology-To-Go.com website work properly, we sometimes place small data files called cookies on your device.";

        return view('website.legal.privacy_settings', compact(
            'title',
            'desc'
        ));
    }

    public function terms_of_use()
    {
        $title = "Terms of Service | Psychology To Go";
        $desc = "By signing up for a Psychology To Go Account (as defined in Section 1) or by using any Psychology To Go Services (as defined below), you are agreeing to be bound by the following terms and conditions (the “Terms of Service”).";

        return view('website.legal.terms_of_use', compact(
            'title',
            'desc'
        ));
    }

    public function additional_info()
    {
        $title = "Information Disclaimer | Psychology To Go";
        $desc = "Psychology To Go does not offer personal mental health or any sort of medical advice. If you are facing a medical emergency, immediately call your local emergency services or visit the nearest emergency room.";

        return view('website.legal.additional_info', compact(
            'title',
            'desc'
        ));
    }

    public function automation()
    {
        return view('website.automation.start');
    }

    public function writer()
    {
        return view('website.automation.other.writer');
    }

    public function generator()
    {
        return view('website.automation.generator');
    }

    public function automation_post(Request $request)
    {
        $desc = $request->phrase;
        $img_folder = $request->id;
        $img_name = $request->name;
        $b = "{";
        $a = "}";
        $tap = Str::random(8);


        return view('website.automation.other.picture', compact(
            'desc',
            'img_folder',
            'img_name',
            'tap',
            'a',
            'b'
        ));
    }

    public function citation_post(Request $request)
    {
        $desc = $request->quote;
        $sort = $request->sort;
        $organisation = $request->organisation;
        $route_process = "{ route('process') }";
        $b = "{";
        $a = "}";
        $link = $request->link;
        $tap = Str::random(8);

        return view('website.automation.other.citation', compact(
            'desc',
            'tap',
            'sort',
            'organisation',
            'route_process',
            'link',
            'a',
            'b'
        ));
    }
}
