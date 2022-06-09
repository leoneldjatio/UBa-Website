<?php

namespace App\Http\Controllers;

use App\Faqs;

class AdminController extends Controller
{
    /**
     * Link to the faqs page on the admin section
     */
    public function faqs()
    {
        return view('admin.faqs')->withFaqs(Faqs::latest()->get());
    }
}