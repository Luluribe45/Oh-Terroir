<?php
/**
 * Created by PhpStorm.
 * User: amadrocky
 * Date: 06/11/18
 * Time: 11:59
 */

namespace Controller;

use Model\ContactDetailsManager;
use Model\ScheduleManager;
use Service\ScheduleService;

class LegalNoticeController extends AbstractController
{
    public function show()
    {
        $contactManager = new ContactDetailsManager($this->getPdo());
        $contact = $contactManager->selectUniquetEntry();

        $scheduleManager = new ScheduleManager($this->getPdo());
        $timeSlotsPerDayAMandPM = $scheduleManager->selectSchedule();

        $scheduleService = new ScheduleService();
        $schedules = $scheduleService->optimizeDisplayTimeSlots($timeSlotsPerDayAMandPM);

        return $this->twig->render('legalNotice.html.twig', [
            "contact" => $contact,
            "schedules" => $schedules,
        ]);
    }
}
