<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Technician;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $username = auth()->user()->name;
            return Inertia::render('Technician/TechIndex', compact('username'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function categories()
    {
        try {
            return Inertia::render('Technician/Titles/TechTitleCategories');
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}
