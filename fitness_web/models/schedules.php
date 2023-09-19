<?php 
/**
 * 
 */
class Schedules
{
	private $id;
	private $day;
	private $s1;
	private $s2;
	private $s3;
    private $s4; 
	function __construct()
	{
		
	}

	public function setId($id)
	{
		$this->id=$id;
	}
	public function getId()
	{
		return $this->id;
	}

	public function setDay($day)
	{
		$this->day=$day;
	}
	public function getDay()
	{
		return $this->day;
	}

	public function setS1($s1)
	{
		$this->s1=$s1;
	}
	public function getS1()
	{
		return $this->s1;
	}

	public function setS2($s2)
	{
		$this->s2=$s2;
	}
	public function getS2()
	{
		return $this->s2;
	}

	public function setS3($s3)
	{
		$this->s3=$s3;
	}
	public function getS3()
	{
		return $this->s3;
	}

	public function setS4($s4)
	{
		$this->s4=$s4;
	}
	public function getS4()
	{
		return $this->s4;
	}

    public static function all() {
        $list = [];
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT * FROM schedules ");
         $req->execute();
        //  une liste schedules à partir des résultats de la base de données
        foreach($req->fetchAll() as $data) {
         $sche= new Schedules();
           
          $sche->setDay($data['day']);
          $sche->setS1($data['s1']);
          $sche->setS2($data['s2']);
          $sche->setS3($data['s3']);
          $sche->setS4($data['s4']);
          $list[] = $sche;
        }
  
        return $list;
      }
  
  
}
?>