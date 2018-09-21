<?php  
 if (isset($_POST['enter']))   
 {  
  $username = $_POST['user'];  
  $password = $_POST['pass'];  
  if(($username=="admin")&&($password=="123456"))  
  {  
    echo "Login Berhasil";  
	
  }  
  else  
  {  
    echo "Login Gagal";  
  }  
  echo "<br/><a href='".$_SERVER['PHP_SELF']."'>Kembali</a>";  
 }  
 else  
 echo '  
 <b>Form Login</b>  
 <form action="" method="post">  
 Nama User: <input type="text" name="user" value=""><br/>  
 Kata Sandi: <input type="password" name="pass" value=""><br/>  
 <input type="submit" name="enter" value="Enter">  
 </form>  
 ';  
 ?>  