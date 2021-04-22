<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 22/04/2021
 * Time: 14:08
 */


namespace Simplex;


use Itech\Repository\DBA;

abstract class Repository
{
    protected ?\PDO $db;

    public function __construct()
    {
        $this->db = (new DBA())->getPDO();
    }
}
