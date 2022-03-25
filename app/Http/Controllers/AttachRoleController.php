<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AttachRoleController extends Controller
{
    public function index()
    {
        try {
            $user = auth()->user();
            if (!$user->roles()->wherePivot('user_id', $user->id)->exists()) {
                $user = auth()->user();
                $user->roles()->attach(1);
                return Redirect::route('admin');
            } else {
                return Redirect::route('admin');
            }
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}
