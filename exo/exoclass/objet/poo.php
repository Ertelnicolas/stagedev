<?php
$db = new PDO('mysql:host=localhost;dbname=mabase;charset=utf8','ertel','mouts88');
$request= $db->prepare($db('SELECT id, nom, degats, forcePerso, niveau, experience FROM personnages_v2'));
$req = $request->execute(array());
$donnees= $req->fetch(PDO::FETCH_ASSOC);

while($perso = $donnees)
{
    echo $perso['nom'],'a',$perso['forcePerso'],'de force,',$perso['degats'],'de dégâts,',$perso['experience'],'d\'experience et est au niveau',$perso['niveau'];
}

class Personnage{
    protected $_id;
    protected $_degats;
    protected $_forcePerso;
    protected $_endurance=50;
    protected $_pointdeVie=100;
    protected $_niveau;
    protected $_experience;
    protected $_nom;
    protected $_db;

        /* public function __construct($db = array())
        {
            $this->set_db($db);
        }
        public function hydrate(array $donnees)
        {
            foreach($donnees as $k => $donnee)
            {

            }
        }*/



//getter/setter_niveau

    public function get_niveau()
    {
        return $this->_niveau;
    }
    public function set_niveau($_niveau)
    {
        $this->_niveau = $_niveau;

        return $this;
    }


//getter/setter_id

    public function get_id()
    {
        return $this->_id;
    }
    public function set_id($_id)
    {
        $this->_id = $_id;

        return $this;
    }


//getter/setter_experience

    public function get_experience()
    {
        return $this->_experience;
    }
    public function set_experience($_experience)
    {
        $this->_experience = $_experience;

        return $this;
    }

//setter/getter_db

    public function get_db()
    {
        return $this->_db;
    }
    public function set_db(PDO $_db)
    {
        $this->_db = $_db;

        return $this;
    }


//getter/setter_degats

    public function get_degats()
    {
        return $this->_degats;
    }
    public function set_degats($_degats)
    {
        $this->_degats = $_degats;

        return $this;
    }


//setter/getter_forcePerso

    public function get_forcePerso()
    {
        return $this->_forcePerso;
    }
    public function set_force($_force)
    {
        $this->_forcePerso = $_force;

        return $this;
    }


//setter/getter_endurance

    public function get_endurance()
    {
        return $this->_endurance;
    }
    public function set_endurance($_endurance)
    {
        $this->_endurance = $_endurance;

        return $this;
    }


// setter/getter_pointdeVie

    public function get_pointdeVie()
    {
        return $this->_pointdeVie;
    }
    public function set_pointdeVie($_pointdeVie)
    {
        $this->_pointdeVie = $_pointdeVie;

        return $this;
    }


//getter/setter_nom

    public function get_nom()
    {
        return $this->_nom;
    }
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }


//function recevoirDegats

    public function recevoirDegats()
    {

    }

    //function combat
    public function combat(Personnage $persoTaper)
    {
        $persoTaper->_pointdeVie -= $this->_force;
        
    }

    //affichage point de vie
    public function affichage()
    {
        $affVie=$this->_pointdeVie;
        echo 'la vie de '.$this->_nom.' est ' .$affVie;
        echo "\n";
    }
}

$perso1 = new Personnage('');
$perso2 = new Personnage('');


while(($perso1->get_pointdeVie()>0)&&($perso2->get_pointdeVie()>0)) 
{
    $perso1->combat($perso2);
    $perso2->combat($perso1);

    $perso1 -> affichage();
    $perso2 -> affichage();
    


}

