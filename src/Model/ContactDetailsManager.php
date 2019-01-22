<?php
namespace Model;

/**
 *
 */
class ContactDetailsManager extends AbstractManager
{
    /**
     * Table's name
     */
    const TABLE = 'contactDetails';

    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    /**
     * @return ContactDetails
     */
    public function selectUniquetEntry() : ContactDetails
    {
        return $this->pdo->query('SELECT * FROM ' . $this->table, \PDO::FETCH_CLASS, $this->className)->fetch();
    }

    /**
     * @param ContactDetails $contactDetails
     */
    public function update(ContactDetails $contactDetails)
    {
        $statement = $this->pdo->prepare("UPDATE " . self::TABLE . " SET 
                      address = :address, 
                      zipCode = :zipcode, 
                      city = :city, 
                      phoneNumber = :phonenumber, 
                      emailAddress = :email 
                      WHERE id = :id");
        $statement->bindValue('id', $contactDetails->getId(), \PDO::PARAM_INT);
        $statement->bindValue('address', $contactDetails->getAddress(), \PDO::PARAM_STR);
        $statement->bindValue('zipcode', $contactDetails->getZipCode(), \PDO::PARAM_STR);
        $statement->bindValue('city', $contactDetails->getCity(), \PDO::PARAM_STR);
        $statement->bindValue('phonenumber', $contactDetails->getPhoneNumber(), \PDO::PARAM_STR);
        $statement->bindValue('email', $contactDetails->getEmailAddress(), \PDO::PARAM_STR);
        $statement->execute();
    }
}
