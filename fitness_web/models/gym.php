<?php 
/**
 * 
 */
class Gym
{

    public static function name_gym() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT name FROM gym ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['name'];
           
      }

      public static function description1() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT description1 FROM gym ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['description1'];
           
      }

      public static function description2() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT description2 FROM gym ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['description2'];
           
      }

      public static function adress() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT adress FROM gym ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['adress'];
           
      }

      public static function email() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT email FROM gym ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['email'];
           
      }

   public static function tel() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT tel FROM gym ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['tel'];
           
      }

      public static function facebook() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT facebook FROM gym ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['facebook'];
           
      }

      public static function instagram() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT instagram FROM gym ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['instagram'];
           
      }

      public static function twitter() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT twitter FROM gym ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['twitter'];
           
      }
  
}
?>