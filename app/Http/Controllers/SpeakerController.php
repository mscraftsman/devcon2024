<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function searchById($id) {
		$speakers = json_decode(file_get_contents(storage_path() . "/data/speakers.json"), true);
        $sessions = json_decode(file_get_contents(storage_path() . "/data/sessions.json"), true);
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

             // Find sessions related to the speaker
             $speakerSessions = [];
             foreach ($sessions as $day) {
                 foreach ($day['sessions'] as $session) {
                     foreach ($session['speakers'] as $sessionSpeaker) {
                         if ($sessionSpeaker['id'] == $id) {
                             $speakerSessions[] = $session;
                         }
                     }
                 }
             }

		    return view('speaker', compact('speaker', 'title', 'speakerSessions'));
        }
        if (empty($result)) {
            return response()->json(['message' => 'Object not found'], 404);
        }
  	}
}
