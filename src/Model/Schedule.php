<?php

namespace Model;

class Schedule
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $openingHour1;

    /**
     * @var string
     */
    private $openingHour2;

    /**
     * @var int
     */
    private $weekdaysId;

    /**
     * @var string
     */
    private $dayName;


    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }


    /**
     * @param int $id
     * @return Schedule
     */
    public function setId(int $id) : Schedule
    {
        $this->id = $id;
    }


    /**
     * @return string
     */
    public function getOpeningHour1() : string
    {
        return $this->openingHour1;
    }


    /**
     * @param string $openingHour1
     * @return Schedule
     */
    public function setOpeningHour1(string $openingHour1) : Schedule
    {
        $this->openingHour1 = $openingHour1;
    }


    /**
     * @return string
     */
    public function getOpeningHour2() : string
    {
        return $this->openingHour2;
    }


    /**
     * @param string $openingHour2
     * @return Schedule
     */
    public function setOpeningHour2(string $openingHour2) : Schedule
    {
        $this->openingHour2 = $openingHour2;
    }


    /**
     * @return int
     */
    public function getWeekdaysId() : int
    {
        return $this->weekdaysId;
    }


    /**
     * @param int $weekdaysId
     * @return Schedule
     */
    public function setWeekdaysId(int $weekdaysId) : Schedule
    {
        $this->weekdaysId = $weekdaysId;
    }


    /**
     * @return string
     */
    public function getDayName() : string
    {
        return $this->dayName;
    }


    /**
     * @param string $dayName
     * @return Schedule
     */
    public function setDayName(string $dayName) : Schedule
    {
        $this->dayName = $dayName;
    }
}
