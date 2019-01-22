<?php

namespace Controller;

use Model\DishCategoryManager;
use Model\ContactDetailsManager;
use Model\ScheduleManager;
use Service\ScheduleService;
use Model\DishManager;
use Model\DishSubcategoryManager;

class DishesController extends AbstractController
{

    public function show()
    {
        $dishCategoryManager = new DishCategoryManager($this->getPdo());
        $dishCategories = $dishCategoryManager->selectAllDishCategoriesIsActiveWithMinPrice();

        $contactManager = new ContactDetailsManager($this->getPdo());
        $contact = $contactManager->selectUniquetEntry();

        $scheduleManager = new ScheduleManager($this->getPdo());
        $timeSlotsPerDayAMandPM = $scheduleManager->selectSchedule();
        $scheduleService = new ScheduleService();
        $schedules = $scheduleService->optimizeDisplayTimeSlots($timeSlotsPerDayAMandPM);
        
        $dishManager = new DishManager($this->getPdo());
        $dishes = $dishManager->selectDishes();
      
        return $this->twig->render('dishes.html.twig', [
            "dishPage" => "active",
            "contact" => $contact,
            "schedules" => $schedules,
            "dishCategories" => $dishCategories,
            "dishes" => $dishes,
        ]);
    }
}
