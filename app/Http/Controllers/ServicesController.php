<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::paginate(10);

        return view('services.index')->with('services', $services);
    }
}
