<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AgendaSingleController extends Controller {
	public function searchSessionById($id) {
		$sessions = json_decode(file_get_contents(storage_path() . "/data/sessions.json"), true);
        $sessionsArr = [];

        foreach ($sessions as $day) {
            foreach ($day['sessions'] as $session) {
                $id_session = $session['id'];
                $sessionsArr[$id_session] = $session;
            }
        }

		$result = array_filter($sessionsArr, function ($object) use ($id) {
            return $object['id'] == $id;
        });

        if (!empty($result)) {
            $session = $result;
            $title = 'MSCC — Agenda';

            foreach($session as $s) {
                $title = $title . " | " . $s['title'];
                break; 
            }

		    return view('session', compact('session', 'sessionsArr', 'title'));
        }
        if (empty($result)) {
            return response()->json(['message' => 'Object not found'], 404);
        }
  	}
}