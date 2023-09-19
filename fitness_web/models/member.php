<?php 
/**
 * 
 */
class Member
{
	private $id_mb;
	private $name;
	private $email;
	private $message;
	private $tel;
	function __construct()
	{
		
	}

	public function setId($id_mb)
	{
		$this->id_mb=$id_mb;
	}
	public function getId()
	{
		return $this->id_mb;
	}

	public function setname($name)
	{
		$this->name=$name;
	}
	public function getname()
	{
		return $this->name;
	}

	public function setEmail($email)
	{
		$this->email=$email;
	}
	public function getEmail()
	{
		return $this->email;
	}

	public function setTel($tel)
	{
		$this->tel=$tel;
	}
	public function getTel()
	{
		return $this->tel;
	}

    public function setMessage($message)
	{
		$this->message=$message;
	}
	public function getMessage()
	{
		return $this->message;
	}

    public function create()
    {
    	$bd = Bd::getInstance();
    	
        $req = $bd->prepare("INSERT INTO membership(name,email,tel,message) VALUES(:name,:email,:tel,:msg)");
        
        $req->execute( array(
        'name'=>$this->name,
         'email'=>$this->email,
         'tel'=>$this->tel,
         'msg'=>$this->message
        ));
      
         
    }

	
	}