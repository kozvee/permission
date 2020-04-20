<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        switch(auth()->user()->roles()->first()->slug){
            case 'admin':
                return view('backend.dashboard');
                break;

            case 'sale-marketing':
                return view('backend.sale-marketing.dashboard');
                break;

            case 'customer-service':
                return view('backend.customer-service.dashboard');
                break;

            case 'technical-lead':
                return view('backend.technical-lead.dashboard');
                break;

            case 'technical-staff':
                return view('backend.technical-staff.dashboard');
                break;
        }
    }
}
