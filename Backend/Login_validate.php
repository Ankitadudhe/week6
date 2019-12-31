<?php
session_start();
/**
 * class validate 
 * @uthor:Ankita dudhe
 */
class Validate
{
   //method:validateuser()
   public function validateuser()
   {
      if(isset($_POST['submit']))
      {
         if(isset($_POST['email']))
         {
            if(!filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)===false)
            {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $email=$_POST['email'];
            $address=$_POST['Address'];
            $phoneno=$_POST['Phone_number'];
            $dbconnect=new PDO("mysql:host=localhost;dbname=databaselogin","root",null);
            $query=$dbconnect->query('SELECT * FROM userdata');
            $flag=false;
            while($row=$query->fetch(PDO::FETCH_ASSOC))
            {
               if($row['email']==$email)
               {
                  $flag='true';
               }
            }
   if($flag=='true')
   {
    echo"account already register please login with another email ";
   }
         else if($username!=null && $password!=null && $email!=null && $address!=null && $phoneno!=null)
        {
         $query=$dbconnect->query("INSERT INTO `userdata`(`username`, `password`,`email`,`address`,`phoneno`) 
         VALUES('$username','$password','$email','$address','$phoneno')");
         echo"data insert successfully";
         }
        else
        echo"please insert all details";
        }  
         
      else
      {
         echo"Enter correct email";
      }   
      }
   } 
}
}  
$object=new  Validate;
$object->validateuser();
?>
