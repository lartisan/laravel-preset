<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function __invoke($page)
	{
		return view("admin.{$page}");
	}
}
