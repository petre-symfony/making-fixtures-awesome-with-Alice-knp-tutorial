<?php
namespace AppBundle\DataFixtures\ORM;

use Fidry\AliceDataFixtures\ProcessorInterface;
use AppBundle\Entity\Character;


class CharacterProcessor implements ProcessorInterface{
 /**
 * {@inheritdoc}
 */
  public function preProcess($object){
    if (!$object instanceof Character) {
      return;
    }
    if (!$object->getAvatarFilename()) {
      return;
    }
    $projectRoot = __DIR__.'/../../../..';
        $fs = new Filesystem();
        $fs->copy(
            $projectRoot.'/resources/'.$object->getAvatarFilename(),
            $projectRoot.'/web/uploads/avatars/'.$object->getAvatarFilename(),
            true
        );
  }
  
  public function postProcess($object){
    // TODO: Implement postProcess() method.
  }
}
