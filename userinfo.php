 <?php
 $con=mysqli_connect('localhost','root');
 if($con)
    echo"yes";
    else
    echo"no";
 mysqli_select_db($con,'travel');

 $user=$_POST['User'];
 
 $email=$_POST['Email'];
 
 $mobile=$_POST['Mobile'];
 $comments=$_POST['comments'];


 $query="insert into data(user,email,mobile,comments)
 values('$user','$email' ,'$mobile','$comments')";
 mysqli_query($con,$query);
header('location:index.php');

 ?>