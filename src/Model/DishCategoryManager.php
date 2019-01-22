<?php

namespace Model;

class DishCategoryManager extends AbstractManager
{
    /**
     * table's name
     */
    const TABLE = 'dishCategory';

    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    /**
     * Return the active dish categories
     */
    public function selectAllDishCategoriesIsActiveWithMinPrice(): array
    {
        $query = 'SELECT dc.*, MIN(d.price) AS minPrice '
                 .'FROM ' . $this->table . ' dc '
                 .'JOIN dishSubcategory dsc ON dsc.dishCategoryId = dc.id '
                 .'JOIN dish d ON d.dishSubcategoryId = dsc.id '
                 .'WHERE dc.isActive '
                 .'GROUP BY dc.id '
                 .'ORDER BY dc.namePageHome';
        $results = $this->pdo->query($query, \PDO::FETCH_ASSOC)->fetchAll();

        return $results;
    }

    public function insert(DishCategory $dishCategory)
    {
         // prepared request
        $statement = $this->pdo->prepare("
        INSERT INTO $this->table ( 
        `namePageHome`,
        `namePageDish`,
        `description`,
        `complementaryInformation`,
        `urlPictureForPageHome`,
        `urlPictureForPageDish`,
        `isActive`) 
        VALUES (:namePageHome, :namePageDish, :description, :complementaryInformation, :urlPictureForPageHome, 
        :urlPictureForPageDish,:isActive)");
        $statement->bindValue(':namePageHome', $dishCategory->getNamePageHome(), \PDO::PARAM_STR);
        $statement->bindValue(':namePageDish', $dishCategory->getNamePageDish(), \PDO::PARAM_STR);
        $statement->bindValue(':description', $dishCategory->getDescription(), \PDO::PARAM_STR);
        $statement->bindValue(
            ':complementaryInformation',
            $dishCategory->getComplementaryInformation(),
            \PDO::PARAM_STR
        );
        $statement->bindValue(':urlPictureForPageHome', '', \PDO::PARAM_STR);
        $statement->bindValue(':urlPictureForPageDish', '', \PDO::PARAM_STR);
        $statement->bindValue(':isActive', false, \PDO::PARAM_BOOL);
        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }

    /**
     * @param DishCategory $dishCategory
     */
    public function update(DishCategory $dishCategory)
    {
        $statement = $this->pdo->prepare("UPDATE " . self::TABLE . " SET
                        namePageHome = :namePageHome,
                        namePageDish = :namePageDish,
                        description = :description,
                        complementaryInformation = :complementaryInformation,
                        isActive = :isActive
                        WHERE id= :id");
        $statement->bindValue('id', $dishCategory->getId(), \PDO::PARAM_STR);
        $statement->bindValue('namePageHome', $dishCategory->getNamePageHome(), \PDO::PARAM_STR);
        $statement->bindValue('namePageDish', $dishCategory->getNamePageDish(), \PDO::PARAM_STR);
        $statement->bindValue('description', $dishCategory->getDescription(), \PDO::PARAM_STR);
        $statement->bindValue(
            'complementaryInformation',
            $dishCategory->getComplementaryInformation(),
            \PDO::PARAM_STR
        );
        $statement->bindValue('isActive', $dishCategory->isActive(), \PDO::PARAM_BOOL);
        $statement->execute();
    }
}
