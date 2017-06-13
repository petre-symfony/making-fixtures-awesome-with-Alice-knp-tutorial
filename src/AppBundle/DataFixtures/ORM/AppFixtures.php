<?php

namespace AppBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Doctrine\DataFixtures\AbstractLoader;
use Nelmio\Alice\Fixtures;

class AppFixtures extends AbstractLoader {
  public function getFixtures() {
    return array(
      __DIR__.'/universe.yml',    
      __DIR__.'/characters.yml'
    );
  }
  
  public function characterName(){
    $names = array(
      'Mario',
      'Luigi',
      'Sonic',
      'Pikachu',
      'Link',
      'Lara Croft',
      'Trogdor',
      'Pac-Man'  
    );
    
    return $names[array_rand($names)];
  }
  
  public function avatar(){
     $names = array(
      'kitten1.jpg',
      'kitten2.jpg',
      'kitten3.jpg',
      'kitten4.jpg'
    );
    
    return $names[array_rand($names)]; 
  }
}
