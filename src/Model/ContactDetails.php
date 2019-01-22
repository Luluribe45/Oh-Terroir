<?php

namespace Model;

/**
 * Class contactDetails
 *
 */
class ContactDetails
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return contactDetails
     */
    public function setId(int $id) : contactDetails
    {
        $this->id = $id;
      
        return $this;
    }

  /**
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }

    /**
     * @param $address
     * @return contactDetails
     */
    public function setAddress(string $address) : contactDetails
    {
        $this->address = $address;
      
        return $this;
    }

  /**
     * @return string
     */
    public function getZipCode() : string
    {
        return $this->zipCode;
    }

    /**
     * @param $zipCode
     * @return contactDetails
     */
    public function setZipCode(string $zipCode) : contactDetails
    {
        $this->zipCode = $zipCode;
      
        return $this;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * @param $city
     * @return contactDetails
     */
    public function setCity(string $city) : contactDetails
    {
        $this->city = $city;
      
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber() : string
    {
        return $this->phoneNumber;
    }

    /**
     * @param $phoneNumber
     * @return contactDetails
     */
    public function setPhoneNumber(string $phoneNumber) : contactDetails
    {
        $this->phoneNumber = $phoneNumber;
      
        return $this;
    }

    /**
     * Formate le téléphone en xx xx xx xx xx
     * @return string
     */
    public function getPhoneNumberFormated() : string
    {
        return chunk_split($this->getPhoneNumber(), 2, ' ');
    }

    /**
     * @return string
     */
    public function getEmailAddress() : string
    {
        return $this->emailAddress;
    }

    /**
     * @param $emailAddress
     * @return contactDetails
     */
    public function setEmailAddress(string $emailAddress) : contactDetails
    {
        $this->emailAddress = $emailAddress;
      
        return $this;
    }
}
