<?php

namespace App\Http\Controllers;

use App\Models\PostOffice;
use Illuminate\View\View;
use Laravel\Lumen\Application;

/**
 * Class PostOfficeController
 * @package App\Http\Controllers
 */
class PostOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View|Application
     */
    public function index()
    {
        return view('post-offices.ajax');
    }

    public function get()
    {
        // Used Eager Loading
        $postOffices = PostOffice::with('pincode:id,name', 'division:id,name', 'region:id,name', 'circle:id,name', 'taluk:id,name', 'district:id,name', 'state:id,name')->paginate(10);
        return view('post-offices.simple', compact('postOffices'));
    }
}
