<?php
/**
 * Created by PhpStorm.
 * User: varloteaux
 * Date: 29/10/18
 * Time: 17:38
 */

namespace Model;

/**
 * Class Grower
 * @package Model
 */
class Grower
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $growerName;

    /**
     * @var string
     */
    private $growerDescription;

    /**
     * @var string
     */
    private $growerLocalisation;

    /**
     * @var bool
     */
    private $growerIsActive;

    /**
     * @var string
     */
    private $growerSiteWeb;

    /**
     * @var string
     */
    private $image;

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image)
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getGrowerName()
    {
        return $this->growerName;
    }

    /**
     * @param $growerName
     */
    public function setGrowerName($growerName)
    {
        $this->growerName = $growerName;
    }

    /**
     * @return string
     */
    public function getGrowerDescription()
    {
        return $this->growerDescription;
    }

    /**
     * @param $growerDescription
     */
    public function setGrowerDescription($growerDescription)
    {
        $this->growerDescription = $growerDescription;
    }

    /**
     * @return string
     */
    public function getGrowerLocalisation()
    {
        return $this->growerLocalisation;
    }

    /**
     * @param $growerLocalisation
     */
    public function setGrowerLocalisation($growerLocalisation)
    {
        $this->growerLocalisation = $growerLocalisation;
    }

    /**
     * @return bool
     */
    public function getGrowerIsActive()
    {
        return $this->growerIsActive;
    }

    /**
     * @param $growerIsActive
     */
    public function setGrowerIsActive($growerIsActive)
    {
        $this->growerIsActive = $growerIsActive;
    }

    /**
     * @return string
     */
    public function getGrowerSiteWeb()
    {
        return $this->growerSiteWeb;
    }

    /**
     * @param $growerSiteWeb
     */
    public function setGrowerSiteWeb($growerSiteWeb)
    {
        $this->growerSiteWeb = $growerSiteWeb;
    }
}
