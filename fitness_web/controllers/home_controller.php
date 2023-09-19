<?php

require_once('models/team.php');
require_once('models/class.php');
require_once('models/member.php');
require_once('models/ask.php');
require_once('models/gym.php');
require_once('models/schedules.php');
require_once('models/working_hours.php');
class HomeController 
{
	
  public function listes(){
    //list team
    $teams=Team::all();
    //list class
    $classes=Classe::all();
    //information gym 
    $name_gym=Gym::name_gym();
    $description1=Gym::description1();
    $description2=Gym::description2();
    $adress=Gym::adress();
    $email=Gym::email();
    $tel=Gym::tel();
    $facebook=Gym::facebook();
    $instagram=Gym::instagram();
    $twitter=Gym::twitter();
    //list schedules
    $schedules=Schedules::all();
    //working hours
    $star=Working_hours::star();
    $finish=Working_hours::finish();
    $close=Working_hours::close();
    $special_day=Working_hours::special_day();
    $special_day_open=Working_hours::special_day_open();
    $special_day_close=Working_hours::special_day_close();
    $day_open=Working_hours::day_open();
    $day_close=Working_hours::day_close();
    require_once('views/index.php');
   }

   public function save_member(){
    $member= new member();
    $member->setName($_POST['cf-name']);
    $member->setEmail($_POST['cf-email']);
    $member->setTel($_POST['cf-phone']);
    $member->setMessage($_POST['cf-message']);
    $member->create();
 }

 public function save_ask(){
  $ask= new ask();
  $ask->setName($_POST['cf-name']);
  $ask->setEmail($_POST['cf-email']);
  $ask->setMessage($_POST['cf-message']);
  $ask->create();
}

}

?>