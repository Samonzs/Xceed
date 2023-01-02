<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view("welcome");
    }

    public function login()
    {
        return view("login");
    }

    public function createQuotes()
    {
        return view("createquotes");
    }

    public function listOfQuotes()
    {
        return view("listofquotes");
    }

    public function createStaff()
    {
        return view("createstaff");
    }
    
    public function listOfStaff()
    {
        return view("listOfStaff");
    }


    
    public function TaC()
    {
        return view("TaC.TaC");
    }

}