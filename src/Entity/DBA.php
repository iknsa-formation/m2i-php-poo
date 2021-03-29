<?php

class DBA
{
    private ?PDO $PDOInstance = null;

    const DEFAULT_SQL_USER = 'formation';
    const DEFAULT_SQL_HOST = 'localhost';
    const DEFAULT_SQL_PASS = 'paris';
    const DEFAULT_SQL_DTB = 'poo';

    public function __construct()
    {
        $this->PDOInstance = new PDO(
            'mysql:dbname=' . self::DEFAULT_SQL_DTB . ';host=' . self::DEFAULT_SQL_HOST,
            self::DEFAULT_SQL_USER,
            self::DEFAULT_SQL_PASS
        );
    }

    public function getPDO(): ?PDO
    {
        return $this->PDOInstance;
    }
}