<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    //
    public function index()
    {
        // Fetch content from the database or define it here
        $privacyPolicyContent = trans('lang.privacy_content');

        return view('privacy-policy', compact('privacyPolicyContent'));
    }
}
