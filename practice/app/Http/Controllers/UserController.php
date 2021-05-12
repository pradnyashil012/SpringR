<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Models\User;
use App\Models\Company;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        return User::find(1)->getCompany;
    }
}
