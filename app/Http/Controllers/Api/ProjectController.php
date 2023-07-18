<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){

        $posts = Post::with("type", "technology")->get();

        $response = [
            "success" => true,
            "results" => $posts
        ];

        return response()->json($response);
    }

}
