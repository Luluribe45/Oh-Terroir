<?php
/**
 * Created by PhpStorm.
 * User: wilder14
 * Date: 05/11/18
 * Time: 10:49
 */

namespace Model;

class Dish
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $composition;

    /**
     * @var bool
     */
    private $isActive;

    /**
     * @var int
     */
    private $dishSubcategoryId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Dish
     */
    public function setId(int $id): Dish
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Dish
     */
    public function setName(string $name): Dish
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Dish
     */
    public function setPrice(float $price): Dish
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getComposition(): string
    {
        return $this->composition;
    }

    /**
     * @param string $composition
     * @return Dish
     */
    public function setComposition(string $composition): Dish
    {
        $this->composition = $composition;
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
     * @return Dish
     */
    public function setIsActive(bool $isActive): Dish
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return int
     */
    public function getDishSubcategoryId(): int
    {
        return $this->dishSubcategoryId;
    }

    /**
     * @param int $dishSubcategoryId
     * @return Dish
     */
    public function setDishSubcategoryId(int $dishSubcategoryId): Dish
    {
        $this->dishSubcategoryId = $dishSubcategoryId;
        return $this;
    }
}
