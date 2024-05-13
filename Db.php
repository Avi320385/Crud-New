<?php
error_reporting(false);
class Db{
    public $stmt;
    const DBNAME="Practice";
    const USERNAME="root";

   final public function connection($Db_var,$Db_user,$password = null)
    {
        try{
            return new PDO("mysql:host=127.0.0.1;dbname={$Db_var};",$Db_user, $password);
        }catch(Exception $e){
            var_dump($e->getMessage());
        }
    }
}

class InsertData extends Db
{
    public $name;

     public  $number;
  
    public function insert()
    {

        $this->name = $_POST["name"];
        $this->number = $_POST["number"];
        $pdo=Db::connection(self::DBNAME,self::USERNAME);
          
       $stmt=$pdo->prepare("insert into user(name,number) values ('$this->name','$this->number')");

    
        $stmt->execute();
             
       
         
         //$stmt->execute();
       
         // return $this;

    
}
   
}

class View extends Db
{

         public  $data;
        final public function selctAll()
        {
            $pdo=Db::connection(self::DBNAME,self::USERNAME);
            $stmt=$pdo->prepare("select * from user");
            $stmt->execute();
            $this->data=$stmt->fetchAll(PDO::FETCH_OBJ);
            $this->stmt = $stmt;
            return $this;
        } 

    }

    


class Delet extends Db 
{
    
   public $id;

public function delete()
{
    $this->id=$_GET['id'];
    $pdo=Db::connection(self::DBNAME,self::USERNAME);
    $stmt = $pdo->prepare("DELETE  from user where id =$this->id");
    $stmt->execute();
    if ($stmt) {
    header("Location: View.php");
}
}

}

class Edit extends Db
{

    public $data;
     public $id ;
     public $name;
     public $number ;
public function edit()
{
    $this->id = $_GET['id'];
    $this->name=$_POST["name"];
     $this->number = $_POST['number'];
    
    //$pdo = connection();
    $pdo=Db::connection(self::DBNAME,self::USERNAME);
    $stmt = $pdo->prepare("select * from  user  where id='$this->id'");
    $stmt->execute();
    $this->data = $stmt->fetch(PDO::FETCH_OBJ);
  }
}
$obj=new Edit();
$obj->edit();


class Update extends Db
{
    public $id ;
    public $number ;
    public $name;

public function updateMethod()
{
      $this->id= $_GET['id'];
      $this->number= $_POST['number'];
      $this->name =$_POST["name"];
      $pdo=Db::connection(self::DBNAME,self::USERNAME);
      $stmt = $pdo->prepare("UPDATE user set name='$this->name', number='$this->number' where id ='$this->id'");
      $stmt->execute();
     // $data = $stmt->fetch(PDO::FETCH_ASSOC);
      $this->stmt = $stmt;
      //return $this;


      if ($stmt) {
        header("Location: View.php");
    }
                return $this;

    }
}





















