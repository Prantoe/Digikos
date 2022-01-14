<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PropertyResource;
use App\Models\Property;

class OwnerController extends Controller
{
    public function current()
    {
        $user = Auth::user();

        return response()->json([
            'message' => 'Current user login',
            'data' => $user
        ]);
    }

    public function property()
    {
        // return 'halo';
        $data = Property::latest()->get();
        return response()->json([PropertyResource::collection($data), 'Propertys fetched.']);
    }
}
