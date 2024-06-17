<?php

use Carbon\Carbon;
use Illuminate\Support\Str;

/**
 *
 * @return response()
 */

if (! function_exists('convertDateTimeToTime')) {
    function convertDateTimeToTime($dateTimeString)
    {
        $dateTime = new DateTime($dateTimeString);
        return $dateTime->format('H:i');
    }
}

if (! function_exists('stringToSlug')) {
    function stringToSlug($string)
    {
        return Str::slug($string);
    }
}

if (! function_exists('convertDateTime')) {
    function convertDateTime($dateTimeString)
    {
        $dateTime = new DateTime($dateTimeString);
        return $dateTime->format('l d F');
    }
}

if (! function_exists('generateGridTemplateAreas')) {
    function generateGridTemplateAreas($cellIds)
    {
        $columns = 6;
        $rows = ceil(count($cellIds) / $columns);

        $gridTemplateAreas = '';

        for ($row = 1; $row <= $rows; $row++) {
            $rowStart = ($row - 1) * $columns;
            $rowEnd = $rowStart + $columns - 1;
            $rowCells = array_slice($cellIds, $rowStart, $columns);

            $gridTemplateAreas .= '"' . implode(' ', $rowCells) . '"';
            $gridTemplateAreas .= $row < $rows ? "\n" : "";
        }

        return $gridTemplateAreas;
    }
}

if (! function_exists('calculatePlacement')) {
    function calculatePlacement($session)
    {

        $timeString = $session['startsAt'];
        $room = stringToSlug($session['room']);

        $dateTime = new DateTime($timeString);
        $time = $dateTime->format('H:i');
        $formattedTime = str_replace(':', '', $time);
        $placement = strtolower($room) . '-' . $formattedTime;

        return $placement;
    }
}

if (! function_exists('findTimeIndex')) {
    function findTimeIndex($time_range, $time) {
        $index = array_search($time, $time_range);
        return $index !== false ? $index : -1;
    }
}

if (! function_exists('findRoomIndex')) {
    function findRoomIndex($rooms, $room) {
        $index = array_search(strtolower($room), $rooms);
        return $index !== false ? $index : -1;
    }
}

if (! function_exists('calculatePlacementGridRow')) {
    function calculatePlacementGridRow($session, $time_range)
    {

        $startsAt = $session['startsAt'];
        $endsAt = $session['endsAt'];

        $startsAtdateTime = new DateTime($startsAt);
        $startsAtTime = $startsAtdateTime->format('H:i');

        $endsAtdateTime = new DateTime($endsAt);
        // Create a DateInterval of 15 minutes
        $interval = new DateInterval('PT15M');
        // Add the interval to the DateTime object
        $endsAtdateTime->add($interval);
        // Format the time
        $endsAtTime = $endsAtdateTime->format('H:i');

        $grid_row_start = findTimeIndex($time_range, $startsAtTime) + 1;
        $grid_row_end = findTimeIndex($time_range, $endsAtTime) + 1;

        return $grid_row_start . ' / ' . $grid_row_end;
    }
}


if (! function_exists('calculatePlacementGridColumn')) {
    function calculatePlacementGridColumn($session, $rooms)
    {

        $room = stringToSlug($session['room']);

        $grid_column_start = findRoomIndex($rooms, $room) + 1;
        $grid_column_end = $grid_column_start + 1;

        return $grid_column_start . ' / ' . $grid_column_end;
    }
}


if (! function_exists('calculateTimePlacement')) {
    function calculateTimePlacement($time)
    {
        $formattedTime = str_replace(':', '', $time);
        $placement = 'time' . '-' . $formattedTime;
        return $placement;
    }
}

if (! function_exists('getSpeaker')) {
    function getSpeaker($id)
    {
		$speakers = json_decode(file_get_contents(storage_path() . "/data/speakers.json"), true);
		$result = array_filter($speakers, function ($object) use ($id) {
            return $object['id'] == $id;
        });

        $speaker = '';

        if (!empty($result)) {
            foreach($result as $s) {
                $speaker = $s;
                break;
            }
        }
        return $speaker;
    }
}


if (!function_exists('trimText')) {
    function trimText($text, $maxLength = 80)
    {
        if (strlen($text) > $maxLength) {
            $trimmedText = substr($text, 0, $maxLength - 3) . '...';
        } else {
            $trimmedText = $text;
        }

        return $trimmedText;
    }
}
