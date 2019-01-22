<?php

namespace Model;

/**
 * Class dishCategory
 * @package Model
 */
class DishCategory
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $namePageHome;

    /**
     * @var string
     */
    private $urlPictureForHomePage;

    /**
     * @var bool
     */
    private $isActive;

    /**
     * @var string
     */
    private $namePageDish;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $complementaryInformation;

    /**
     * @var string
     */
    private $urlPictureForPageDish;



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return DishCategory
     */
    public function setId(int $id) : DishCategory
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamePageHome(): string
    {
        return $this->namePageHome;
    }

    /**
     * @param string $namePageHome
     * @return DishCategory
     */
    public function setNamePageHome(string $namePageHome) : DishCategory
    {
        $this->namePageHome = $namePageHome;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlPictureForHomePage(): string
    {
        return $this->urlPictureForHomePage;
    }

    /**
     * @param string $urlPictureForHomePage
     * @return DishCategory
     */
    public function setUrlPictureForHomePage(string $urlPictureForHomePage) : DishCategory
    {
        $this->urlPictureForHomePage = $urlPictureForHomePage;

        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     * @return DishCategory
     */
    public function setIsActive(bool $isActive) : DishCategory
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamePageDish(): string
    {
        return $this->namePageDish;
    }

    /**
     * @param string $namePageDish
     * @return DishCategory
     */
    public function setNamePageDish(string $namePageDish) : DishCategory
    {
        $this->namePageDish = $namePageDish;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return DishCategory
     */
    public function setDescription(string $description) : DishCategory
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getComplementaryInformation(): string
    {
        return $this->complementaryInformation;
    }

    /**
     * @param string $complementaryInformation
     * @return DishCategory
     */
    public function setComplementaryInformation(string $complementaryInformation) : DishCategory
    {
        $this->complementaryInformation = $complementaryInformation;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlPictureForPageDish(): string
    {
        return $this->urlPictureForPageDish;
    }

    /**
     * @param string $urlPictureForPageDish
     * @return DishCategory
     */
    public function setUrlPictureForPageDish(string $urlPictureForPageDish) : DishCategory
    {
        $this->urlPictureForPageDish = $urlPictureForPageDish;
        return $this;
    }
}
