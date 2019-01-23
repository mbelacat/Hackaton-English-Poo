<?php

/**
 * Classe abstraite dont toutes les entitées ont vocation à hériter, elle contient de base un id et un hydrateur
 */
abstract class entity
{

  protected $id_user;

  public function setId_user(int $id_user) {
    $this->id_user = $id_user;
  }

  public function getId_user() {
    return $this->id_user;
  }

  public function hydrate(array $data) {
    if(!empty($data)) {
      foreach ($data as $key => $value) {
        $method = "set" . ucfirst($key);
        if(method_exists($this, $method)) {
          $this->$method($value);
        }
      }
    }
  }
}


 ?>
