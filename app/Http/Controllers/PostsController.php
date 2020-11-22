<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use App\Models\Posts;

class PostsController extends Controller
{
	//
	public function show($slug)
	{
		error_log(json_encode($_GET));
		$post = Posts::where('slug', $slug)->firstorFail();
		// dd($post);

		return view("post", [
			"post" => $post,
		]);
	}
}
