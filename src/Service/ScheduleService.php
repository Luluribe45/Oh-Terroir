<?php

namespace Service;

class ScheduleService
{
    /**
     * Regroupe les plages horaires identiques pour l'affichage
     */
    public function optimizeDisplayTimeSlots(array $allSchedules): array
    {
        $timeSlotsPerDayAMandPM = [];

        foreach ($allSchedules as $schedule) {
            $timeSlot = $schedule->getOpeningHour1() . ' - ' . $schedule->getOpeningHour2();
            $day = $schedule->getDayName();
            $timeSlotsPerDayAMandPM[] = ['day' => $day, 'timeSlot' => $timeSlot];
        }

        $timeSlotsPerDay = [];
        for ($i = 0; $i < count($timeSlotsPerDayAMandPM); $i++) {
            if (isset($timeSlotsPerDayAMandPM[$i + 1]['day'])
                && $timeSlotsPerDayAMandPM[$i]['day'] == $timeSlotsPerDayAMandPM[$i + 1]['day']) {
                $timeSlotsPerDay[] = [
                    'day' => $timeSlotsPerDayAMandPM[$i]['day'],
                    'timeSlot1' => $timeSlotsPerDayAMandPM[$i]['timeSlot'],
                    'timeSlot2' => $timeSlotsPerDayAMandPM[$i + 1]['timeSlot']
                ];
            } elseif ($timeSlotsPerDayAMandPM[$i]['day'] != $timeSlotsPerDayAMandPM[$i - 1]['day']) {
                $timeSlotsPerDay[] = [
                    'day' => $timeSlotsPerDayAMandPM[$i]['day'],
                    'timeSlot1' => $timeSlotsPerDayAMandPM[$i]['timeSlot'],
                    'timeSlot2' => ''
                ];
            }
        }

        $timeSlotsGroupByDay = [];
        foreach ($timeSlotsPerDay as $timeSlot) {
            $searchTimeSlot = false;
            for ($i = 0; $i < count($timeSlotsGroupByDay); $i++) {
                if ($timeSlotsGroupByDay[$i]['timeSlot1'] == $timeSlot['timeSlot1'] &&
                    $timeSlotsGroupByDay[$i]['timeSlot2'] == $timeSlot['timeSlot2']) {
                    $timeSlotsGroupByDay[$i]['day'] .= ' / ' . $timeSlot['day'];
                    $searchTimeSlot = true;
                    break;
                }
            }
            if ($searchTimeSlot === false) {
                $timeSlotsGroupByDay[] = [
                    'day' => $timeSlot['day'],
                    'timeSlot1' => $timeSlot['timeSlot1'],
                    'timeSlot2' => $timeSlot['timeSlot2']
                ];
            }
        }

        return $timeSlotsGroupByDay;
    }
}
