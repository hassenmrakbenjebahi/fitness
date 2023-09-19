<?php 
/**
 * 
 */
class Classe
{
	private $id;
	private $name;
	private $picture;
	private $price;
	private $description;
    private $firstname; // nom trainer
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

	public function setname($name)
	{
		$this->name=$name;
	}
	public function getname()
	{
		return $this->name;
	}

	

	public function setPicture($picture)
	{
		$this->picture=$picture;
	}
	public function getPicture()
	{
		return $this->picture;
	}

    public function setPrice($price)
	{
		$this->price=$price;
	}
	public function getPrice()
	{
		return $this->price;
	}

	public function setDescription($description)
	{
		$this->description=$description;
	}
	public function getDescription()
	{
		return $this->description;
	}

    public function setFirstname($firstname)
	{
		$this->firstname=$firstname;
	}
    public function getFirstname()
	{
		return $this->firstname;
	}

   


    public static function all() {
        $list = [];
        $bd = Bd::getInstance();
        $req = $bd->prepare("SELECT id_cl,id_tm,name,price,picture_cl,description,firstname FROM team , classe where team.id_tm=classe.id_cl");
         $req->execute();
        //  une liste classe à partir des résultats de la base de données
        foreach($req->fetchAll() as $data) {
         $classe= new Classe();
           
          $classe->setName($data['name']);
          $classe->setPrice($data['price']);
          $classe->setPicture($data['picture_cl']);
          $classe->setDescription($data['description']);
          $classe->setFirstname($data['firstname']);
          $list[] = $classe;
        }
  
        return $list;
      }
  
  
}
?>