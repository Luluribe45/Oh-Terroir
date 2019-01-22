<?php
/**
 * Created by PhpStorm.
 * User: varloteaux
 * Date: 18/10/18
 * Time: 09:42
 */

namespace Model;

/**
 * Class OpinionTripAdvisorManager
 * @package Model
 */
class OpinionTripAdvisorManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'opinionTripAdvisor';

    /**
     * OpinionTripAdvisorManager constructor.
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }
}
