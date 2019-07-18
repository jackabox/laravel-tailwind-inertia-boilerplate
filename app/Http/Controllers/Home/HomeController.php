<?php

namespace App\Http\Controllers\Home;

use Inertia\Inertia;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  public function index()
  {
    return Inertia::render('Home');
  }
}
