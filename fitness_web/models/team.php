<?php 
/**
 * 
 */
class Team
{
	private $id;
	private $firstname;
	private $lastname;
	private $picture;
	private $class_name;
	private $facebook;
	private $instagram;
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

	public function setFirstname($firstname)
	{
		$this->firstname=$firstname;
	}
	public function getFirstname()
	{
		return $this->firstname;
	}

	public function setLastname($lastname)
	{
		$this->lastname=$lastname;
	}
	public function getLastname()
	{
		return $this->lastname;
	}

	public function setPicture($picture)
	{
		$this->picture=$picture;
	}
	public function getPicture()
	{
		return $this->picture;
	}

    public function setClass_name($class_name)
	{
		$this->class_name=$class_name;
	}
	public function getClass_name()
	{
		return $this->class_name;
	}

	public function setFacebook($facebook)
	{
		$this->facebook=$facebook;
	}
	public function getFacebook()
	{
		return $this->facebook;
	}

	public function setInstagram($instagram)
	{
		$this->instagram=$instagram;
	}
	public function getInstagram()
	{
		return $this->instagram;
	}
   

    public static function all() {
      $list = [];
      $bd = Bd::getInstance();
      $req = $bd->prepare("SELECT firstname,lastname,picture,name,facebook,instagram FROM team,classe where team.id_class=classe.id_cl");
      $req->execute();
      //  une liste teams à partir des résultats de la base de données
      foreach($req->fetchAll() as $data) {
      	$team= new Team();
      	
      	$team->setFirstname($data['firstname']);
		$team->setLastname($data['lastname']);
		$team->setPicture($data['picture']);
        $team->setClass_name($data['name']);
		$team->setFacebook($data['facebook']);
        $team->setInstagram($data['instagram']);
        $list[] = $team;
      }

      return $list;
    }

      

   
}
?>