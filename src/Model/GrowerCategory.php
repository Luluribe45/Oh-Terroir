<?php

namespace Model;

/**
 * Class dishCategory
 * @package Model
 */
class GrowerCategory
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nameCategory;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @param int $id
     * @return GrowerCategory
     */
    public function setId(int $id) :GrowerCategory
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameCategory(): string
    {
        return $this->nameCategory;
    }

    /**
     * @param string $nameCategory
     * @return GrowerCategory
     */
    public function setNameCategory(string $nameCategory) :GrowerCategory
    {
        $this->nameCategory = $nameCategory;
        return $this;
    }
}
