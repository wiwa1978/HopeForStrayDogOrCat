<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

class AnalyticsController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): View
    {
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));

        $analyticsCountries= Analytics::fetchTopCountries(Period::days(7));

        dd($analyticsCountries);
    }



}
