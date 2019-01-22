<?php
/**
 * Created by PhpStorm.
 * User: varloteaux
 * Date: 29/10/18
 * Time: 17:38
 */

namespace Model;

class GrowerManager extends AbstractManager
{
    /**
     * table's name
     */
    const TABLE = 'grower';

    /**
     *  Initializes this class.
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }
}
