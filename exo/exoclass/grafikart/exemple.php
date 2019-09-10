<?php

namespace Tutoriel;

require 'class/Autoloader.php';
Autoloader::register();


$merlin = new Personnage('Merlin');
$harry =new Personnage('harry');


$legolas = new Archer('legolas');