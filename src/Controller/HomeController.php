<?php

namespace Controller;

use Model\SpecialOfferManager;
use Model\ContactDetailsManager;
use Model\ScheduleManager;
use Model\DishCategoryManager;
use Model\OpinionTripAdvisorManager;
use Service\ScheduleService;

class HomeController extends AbstractController
{
    public function show()
    {
        $contactManager = new ContactDetailsManager($this->getPdo());
        $contact = $contactManager->selectUniquetEntry();

        $scheduleManager = new ScheduleManager($this->getPdo());
        $timeSlotsPerDayAMandPM = $scheduleManager->selectSchedule();
        $scheduleService = new ScheduleService();
        $schedules = $scheduleService->optimizeDisplayTimeSlots($timeSlotsPerDayAMandPM);

        $dishCategoryManager = new DishCategoryManager($this->getPdo());
        $dishCategories = $dishCategoryManager->selectAllDishCategoriesIsActiveWithMinPrice();
          
        $specialOffersManager = new SpecialOfferManager($this->getPdo());
        $specialOffers = $specialOffersManager->getSpecialOffers();

        $opinionsTripAdvisorManager = new OpinionTripAdvisorManager($this->getPdo());
        $opinionsTripAdvisor = $opinionsTripAdvisorManager->selectAll();

        return $this->twig->render('Home/home.html.twig', [
            "home" => "active",
            "contact" => $contact,
            "schedules" => $schedules,
            "dishCategories" => $dishCategories,
            "opinionsTripAdvisor" => $opinionsTripAdvisor,
            "specialoffers" => $specialOffers,
        ]);
    }
}
