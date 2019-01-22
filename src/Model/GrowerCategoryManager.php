<?php

namespace Model;

class GrowerCategoryManager extends AbstractManager
{
    /**
     * table's name
     */
    const TABLE = 'growerCategory';

    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }
}
