<?php

namespace Model;

class DishManager extends AbstractManager
{
    /**
     * table's name
     */
    const TABLE = 'dish';

    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    /**
     * @return array
     */
    public function selectDishes() : array
    {
        return $this->pdo->query(
            'SELECT * FROM ' . $this->table . ' AS d 
            JOIN dishSubcategory AS dsc ON dsc.id = d.dishSubcategoryId 
            JOIN dishCategory AS dc ON dc.id = dsc.dishCategoryId',
            \PDO::FETCH_ASSOC
        )
            ->fetchAll();
    }
}
