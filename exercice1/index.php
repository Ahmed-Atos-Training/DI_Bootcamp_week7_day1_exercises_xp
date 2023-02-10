<?php 
//class Hello conteneant la proprieté $message et la function affichage() qui affiche un message  
class Hello {

  public $message ;

 }
$bonjour = new  Hello();
$bonjour->message = "MyClass class has initialized ! \n";

echo $bonjour->message;
?>
