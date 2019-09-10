<?php
$db = new PDO('mysql:host=localhost;dbname=mabase;charset=utf8','ertel','mouts88');

class Personnage{
    private $_id;
    private $_nom;
    private $_forcePerso;
    private $_degats;
    private $_niveau;
    private $_experience;
    private $_db;

        public function __construct($nom,$forcePerso,$degats,$niveau,$experience)
        {
            $this->set_nom($nom);
            $this->set_forcePerso($forcePerso);
            $this->set_degats($degats);
            $this->set_niveau($niveau);
            $this->set_experience($experience);

        }

        /*
        public function hydrate(array $donnees)
        {
            foreach($donnees as $k => $donnee)
            {

            }
        }*/
public function add(Personnage $perso)
{
    $qer = $this->_db->prepare('INSERT INTO personnages(nom,forcePerso,degats,niveau,experience) VALUES(:nom,:forcePerso,:degats,:niveau,:experience)');

    $qer->bindValue(':nom', $perso->nom());
    $qer->bindValue(':forcePerso', $perso->forcePerso(), PDO::PARAM_INT);
    $qer->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
    $qer->bindValue(':niveau', $perso->niveau(), PDO::PARAM_INT);
    $qer->bindValue(':experience', $perso->experience(), PDO::PARAM_INT);

    $qer->execute();
}


//getter/setter_niveau

    public function get_niveau()
    {
        return $this->_niveau;
    }
    public function set_niveau($niveau)
    {
        $this->_niveau = $niveau;

        return $this;
    }


//getter/setter_id

    public function get_id()
    {
        return $this->_id;
    }
    public function set_id($id)
    {
        $this->_id = $id;

        return $this;
    }


//getter/setter_experience

    public function get_experience()
    {
        return $this->_experience;
    }
    public function set_experience($experience)
    {
        $this->_experience = $experience;

        return $this;
    }


//setter/getter_db

    public function get_db()
    {
        return $this->_db;
    }
    public function set_db(PDO $db)
    {
        $this->_db = $db;

        return $this;
    }


//getter/setter_degats

    public function get_degats()
    {
        return $this->_degats;
    }
    public function set_degats($degats)
    {
        $this->_degats = $degats;

        return $this;
    }


//setter/getter_forcePerso

    public function get_forcePerso()
    {
        return $this->_forcePerso;
    }
    public function set_forcePerso($forcePerso)
    {
        $this->_forcePerso = $forcePerso;

        return $this;
    }


//getter/setter_nom

    public function get_nom()
    {
        return $this->_nom;
    }
    public function set_nom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }


//function recevoirDegats

    public function recevoirDegats()
    {

    }
/*
    //function combat
    public function combat(Personnage $persoTaper)
    {
        $persoTaper->_pointdeVie -= $this->_force;
        
    }
*/
    //affichage point de vie
    public function affichage()
    {
        $affVie=$this->_pointdeVie;
        echo 'la vie de '.$this->_nom.' est ' .$affVie;
        echo "\n";
    }
}
/*
$perso = array(
    'nom'=>'zangdar',
    'forcePerso'=>30,
    'degats'=>30,
    'niveau'=>1,
    'experience'=>0   
);
*/
$perso1 = new Personnage('zangdar',30,30,1,0);
$perso1->add(Personnage $perso1);


//$request= $dba->query('SELECT id,nom,degats,forcePerso,niveau,experience FROM personnages');
//$req = $request->execute(array());

/*
while($db= $request->fetch(PDO::FETCH_ASSOC))
{    
    return $db;
    $perso1=new Personnage($db);
    
    echo $perso1->_nom(),'a',$perso1->_forcePerso(),'de force,',$perso1->_degats(),'de dégâts,',$perso1->_experience(),'d\'experience et est au niveau',$perso1->_niveau();
}
*/

/*
$perso1 = new Personnage('');
$perso2 = new Personnage('');


while(($perso1->get_pointdeVie()>0)&&($perso2->get_pointdeVie()>0)) 
{
    $perso1->combat($perso2);
    $perso2->combat($perso1);

    $perso1 -> affichage();
    $perso2 -> affichage();
    


}
*/
