<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\LicenseResource;
use App\Models\User;


class UserLicenseController extends Controller
{
    public function index(User $user){

    $licenses=$user->licenses()->with('product')->get();
    return LicenseResource::collection($licenses);
    }
}
