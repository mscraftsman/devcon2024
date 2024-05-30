<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeakersController extends Controller
{
    public function index() {
		$title = 'MSCC — Speakers';
		$speakers = json_decode(file_get_contents(storage_path() . "/data/speakers.json"), true);
		return view('speakers', compact('speakers', 'title'));
  	}
}
