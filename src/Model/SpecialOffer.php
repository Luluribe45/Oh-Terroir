<?php

namespace Model;

/**
 * Class SpecialOffer
 * @package Model
 */
class SpecialOffer
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $description;

    /** @var \DateTime */
    private $startDate;

    /** @var \DateTime */
    private $finishDate;

    /** @var string */
    private $imgLink;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }


    /**
     * @param int $id
     * @return SpecialOffer
     */
    public function setId(int $id) : SpecialOffer
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }


    /**
     * @param string $name
     * @return SpecialOffer
     */
    public function setName(string $name) : SpecialOffer
    {
        $this->name = $name;
        return $this;
    }


    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }


    /**
     * @param string $description
     * @return SpecialOffer
     */
    public function setDescription(string $description) : SpecialOffer
    {
        $this->description = $description;
        return $this;
    }


    /**
     * @return \DateTime
     */
    public function getStartDate() : ?\DateTime
    {
        return $this->startDate;
    }


    /**
     * @param \DateTime $startDate
     * @return SpecialOffer
     */
    public function setStartDate(\DateTime $startDate) : SpecialOffer
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFinishDate() : ?\DateTime
    {
        return $this->finishDate;
    }


    /**
     * @param \DateTime $finishDate
     * @return SpecialOffer
     */
    public function setFinishDate(\DateTime $finishDate) : SpecialOffer
    {
        $this->finishDate = $finishDate;
        return $this;
    }


    /**
     * @return string
     */
    public function getImgLink(): string
    {
        return $this->imgLink;
    }


    /**
     * @param string $imgLink
     * @return SpecialOffer
     */
    public function setImgLink(string $imgLink) : SpecialOffer
    {
        $this->imgLink = $imgLink;
        return $this;
    }
}
