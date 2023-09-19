<?php 
/**
 * 
 */
class Working_hours
{

    public static function star() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT * FROM working_hours where day='monday' ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['day'];
           
      }

      public static function finish() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT * FROM working_hours where day='friday' ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['day'];
           
      }

      
      public static function close() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT * FROM working_hours where close='1' ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['day'];
           
      }


      public static function special_day() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT * FROM working_hours where special_time='1' ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['day'];
           
      }

      public static function special_day_open() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT * FROM working_hours where special_time='1' ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['opening_time'];
           
      }

      public static function special_day_close() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT * FROM working_hours where special_time='1' ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['closing_time'];
           
      }

      public static function day_open() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT * FROM working_hours where special_time='0' ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['opening_time'];
           
      }

      public static function day_close() {
        
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT * FROM working_hours where special_time='0' ");
        
        $req->execute();
        $t=$req->fetchAll();
        return $t[0]['closing_time'];
           
      }

    


  
}
?>