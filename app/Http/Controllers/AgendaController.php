<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index() {
		$title = 'MSCC — Agenda';
		$sessions = json_decode(file_get_contents(storage_path() . "/data/sessions.json"), true);
        $groupedSessions = [];
        $groupedSessionsBySlot = [];

        foreach ($sessions as $day) {
					$dayGroup = $day['groupName'];
					foreach ($day['sessions'] as $session) {
							$room = $session['room'];
							$id = $session['id'];
							$groupedSessions[$dayGroup][$id] = $session;
					}
        }

				$roomNames = ['time', 'andromeda', 'pandora', 'titan', 'tatooine'];
				$time_range = [
					'09:00',
					'10:00',
					'11:00',
					'12:00',
					'13:00',
					'14:00',
					'15:00',
					'16:00',
				];

				$time_range_friday = [
					'08:30',
					'09:00',
					'10:00',
					'11:00',
					'12:00',
					'13:00',
					'14:00',
					'15:00',
					'16:00',
				];

				$cellIds = [];
				$cellIdsFriday = [];

				foreach ($time_range as $time) {
						foreach ($roomNames as $room) {
								$cellIds[] = $room . '-' . str_replace(':', '', $time);
						}
				}

				foreach ($time_range_friday as $time) {
					foreach ($roomNames as $room) {
							$cellIdsFriday[] = $room . '-' . str_replace(':', '', $time);
					}
				}

				if (!empty($sessions)) {
					return view('agenda', compact('groupedSessions', 'title', 'cellIds', 'cellIdsFriday', 'roomNames', 'time_range', 'time_range_friday'));
				}

				if (empty($result)) {
          return response()->json(['message' => 'JSON not found'], 404);
        }
  	}

    public function searchById($id) {
        $sessions = json_decode(file_get_contents(storage_path() . "/data/sessions.json"), true);
        $result = null;

        foreach ($sessions as $day) {
            foreach ($day['sessions'] as $session) {
                if ($session['id'] == $id) {
                    $result = $session;
                    break;
                }
            }
        }

        if (!empty($result)) {
            return view('session', compact('result'));
        }

        if (empty($result)) {
            return response()->json(['message' => 'Session not found'], 404);
        }
    }
}
