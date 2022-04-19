<?php

class StringUtilities{

  public static function secondCase($string){
    $string = strtolower($string);
    if (strlen($string) >= 2) {
      $string[1] = strtoupper($string[1]);
    }
    
    return $string;
  }
}

// $foo = new StringUtilities();
// echo $foo::secondCase("MCDONALD"); 
// echo"\n\n";
// echo $foo::secondCase("baldwin"); 
// echo"\n\n";
// echo $foo::secondCase("Q");

class Pajamas{
  private $owner, $fit, $color;
  public $foo;

  function __construct($owner="Jan", $fit="snug", $color="pink"){
    $foo = new StringUtilities();
    $this->owner=$foo::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }

  public function setFit($new){
    $this->fit = $new;
  }
  public function describe() {
    return "$this->owner's $this->color pajamas fit $this->fit.";
  }
}

$chicken = new Pajamas("CHICKEN", "just right", "purple");
$chicken->setFit("tight");
// echo $chicken->describe();

class ButtonPajamas extends Pajamas{
  private $button_state = "unbuttoned";

  public function describe(){
    return parent::describe() . " They also have buttons which are currently $this->button_state.";
  }
}

$mouse = new ButtonPajamas("mouse", "loose", "green");
echo $mouse->describe();




