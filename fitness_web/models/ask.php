<?php 
/**
 * 
 */
class Ask
{
	private $id_ask;
	private $name;
	private $email;
	private $message;
	
	function __construct()
	{
		
	}

	public function setId($id_ask)
	{
		$this->id_ask=$id_ask;
	}
	public function getId()
	{
		return $this->id_ask;
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
        $req = $bd->prepare("INSERT INTO ask(name,email,message) VALUES(:name,:email,:msg)");
        $req->execute( array(
        'name'=>$this->name,
         'email'=>$this->email,
         'msg'=>$this->message
        ));
      
         
    }

	
	}