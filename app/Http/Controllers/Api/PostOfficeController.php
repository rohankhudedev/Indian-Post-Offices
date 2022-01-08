<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PostOffice;
use Illuminate\Http\JsonResponse;

/**
 * Class PostOfficeController
 * @package App\Http\Controllers
 */
class PostOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        // Used Eager Loading
        $postOffices = PostOffice::with('pincode:id,name', 'division:id,name', 'region:id,name', 'circle:id,name', 'taluk:id,name', 'district:id,name', 'state:id,name')->paginate(10);
        return response()->json($postOffices);
    }
}
