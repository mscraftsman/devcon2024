<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function searchById($id) {
		$speakers = json_decode(file_get_contents(storage_path() . "/data/speakers.json"), true);

		$result = array_filter($speakers, function ($object) use ($id) {
            return $object['id'] == $id;
        });
        if (!empty($result)) {
            $speaker = $result;
            $title = 'MSCC — Speakers';

            foreach($speaker as $s) {
                $title = $title . " | " . $s['fullName'];
                break;
            }

		    return view('speaker', compact('speaker', 'title'));
        }
        if (empty($result)) {
            return response()->json(['message' => 'Object not found'], 404);
        }
  	}
}
