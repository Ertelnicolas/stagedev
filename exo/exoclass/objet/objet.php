<?php
class Personnage
{
    protected $_force = 20;
    protected $_localisation;
    protected $_experience = 0;
    protected $_degats = 0;
    public function frapper(Personnage $persotaper)
    {
        $persotaper->_degats += $this ->_force;
    }
    public function gagnerExperience()
    {
        $this -> _experience = $this -> _experience +1; 
    }
    public function parler()
    { 
        echo "je suis un personnage!";
    }
    public function setForce($force)
    {
        if(!is_int($force))
        {
            trigger_error('la force du perso doit etre un nombre entier', E_USER_WARNING);
            return;
        }
        if ($force>100)
        {
            trigger_error('la force du perso ne peut depasser 100', E_USER_WARNING);
            return;
        }
        $this->_force =$force;
    }
    public function setExperience($experience)
    {
        if(!is_int($experience))
        {
            trigger_error('doit etre un nombre entier',E_USER_WARNING);
            return;
        }
        if($experience>100)
        {
            triger_error('ne peut pas depasser 100', E_USER_WARNING);
            return;
        }
        $this->_experience= $experience;
    }
    public function degats()
    {
        return $this-> _degats;
    }
    public function force()
    {
        return $this -> _force;
    }
    public function experience()
    {
        return $this -> _experience;
    }
}

$perso = new Personnage;
$perso1 = new Personnage;

$perso = setForce(50);
$perso->parler();
$perso ->gagnerExperience();
$perso -> frapper($perso1);