<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class PublicController extends Controller
{
    /**
     * Main page
     *
     * @return Renderable
     */
    public function index()
    {
        return view('page.index', [
            //todo
        ]);
    }
}
