<?php
class User{
  //Vamos a poner atributos. 
  private $id_user;  
  private $email;
  private $password;
  private $name;
  //Vamos a poner el constructor.
  public function __construct($email, $password) {
      $this->email=$email;
      $this->password=$password;
  }
  //Metodos getters and setters
  //Metodo get para devolver valores y set para meter valores.
  /**
   * Get the value of password
   */ 
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set the value of password
   *
   * @return  self
   */ 
  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }

  /**
   * Get the value of email
   */ 
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */ 
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of id_user
   */ 
  public function getId_user()
  {
    return $this->id_user;
  }

  /**
   * Set the value of id_user
   *
   * @return  self
   */ 
  public function setId_user($id_user)
  {
    $this->id_user = $id_user;

    return $this;
  }

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }
}