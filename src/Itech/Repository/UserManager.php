<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 21/04/2021
 * Time: 14:19
 */


namespace Itech\Repository;


use Itech\Model\User;

class UserManager
{
    private ?\PDO $db;

    public function __construct()
    {
        $this->db = (new DBA())->getPDO();
    }

    public function create(User $user)
    {
        try {
            $statement = $this->db->prepare(
                "INSERT INTO `user` (firstName, lastName, email, encryptedPassword) VALUES " .
                " (:firstName, :lastName, :email, :encryptedPassword) "
            );
            $statement->bindValue('firstName', $user->getFirstName());
            $statement->bindValue('lastName', $user->getLastName());
            $statement->bindValue('email', $user->getEmail());
            $statement->bindValue('encryptedPassword', $user->getEncryptedPassword());

            $statement->execute();
        } catch (\PDOException $exception) {
            dd($exception);
        }
    }
}