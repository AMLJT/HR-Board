<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store()
    {
        //dump($_POST);

        $comment = Comments::create([
            'comment' => request()->get('comment'),
            'employee_name' => request()->get('employeeName'),
            'project_name' => request()->get('projectName')

        ]);
        return redirect()->route('dashboard');
    }
}
