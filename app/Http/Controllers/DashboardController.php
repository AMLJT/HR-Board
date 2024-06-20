<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $comment = new Comments([
        //     'comment' => "2nd test comment",
        //     'employee_name' => "Test Name 2",
        //     'project_name' => "Test project name 2"

        // ]);
        // $comment->save();

        return view('dashboard', [
            'comments' => Comments::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
