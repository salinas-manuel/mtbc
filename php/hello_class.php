<?php

class Session
{
    public function read()
    {
        return ['id'=>'1234', 'name'=>'Manuel Salinas'];
    }
}

class Hello
{
    /**
   * An instance variable to hold the name of the user
   * @var string
   */
    private $who;

    /**
      * A constructor method - Constructor injection with type hinting. Constructor injection is a form of type hinting.
      * @param  Object $session A user session
      */
    public function __construct(Session $session)
    {
        $sessionData = $session->read();

        $this->setWho($sessionData['name']);
    }

    /**
       * A setter method for Hello::who
       * @param String $who - The name of a given user
       */
    public function setWho($who)
    {
        $this->who = $who;
    }

    /**
       * Returns a greeting to a target user
       * @param  {[type]} $message [description]
       * @return {[type]}          [description]
       */
    public function greet($message)
    {
        return "{$message} {$this->who}";
    }
}

$session = new Session();

$greeting = new Hello($session);

$message = 'Good ' . (date("H")<12?'Morning':(date("H")<17?'Afternoon':'Evening'));

echo $greeting->greet($message);
