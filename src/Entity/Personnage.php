<?php

class Personnage
{
    private $_force;
    private $_experience;

    public function __construct()
    {
        $this->setExperience(0);
        $this->setForce(100);
    }

    // ...
    public function force()
    {
        return $this->_force;
    }

    public function experience()
    {
        return $this->_experience;
    }

    // .....
    public function setForce($force)
    {
        $this->_force = $force;
        return $this;
    }

    // Mutateur chargé de modifier l'attribut $_experience.
    public function setExperience($experience)
    {
        $this->_experience = $experience;
        return $this;
    }

}

// ....
$personnage = new Personnage();
$personnage->setForce(10);
$personnage->setExperience(50);

echo $personnage->force();
echo $personnage->experience();

// 1050