<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity {
  protected function _setPassword($value) {
    $hasher = new DefaultPasswordHasher();

    return $hasher->hash($value);
  }

}
