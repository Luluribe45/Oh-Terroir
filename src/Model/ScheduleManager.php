<?php

namespace Model;

/**
 *
 */
class ScheduleManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'schedule';

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
    public function selectSchedule() : array
    {
        return $this->pdo->query(
            'SELECT * FROM ' . $this->table . ' INNER JOIN weekdays ON weekdays.id = schedule.weekdaysid',
            \PDO::FETCH_CLASS,
            $this->className
        )
            ->fetchAll();
    }
}
