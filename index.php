
<html>
<head>
<title>student mess account</title>
<link rel="stylesheet" href="css/style1.css">

</head>
<body>

<h3 align="right" style="margin-right:35px"><a href="login.php">Admin login</a></h5>

<h1 align="center">  welcome to student mess account</h1>
<div class="loginbox">
<img src="images/image_photo.png" class="user">
<form>

   <p> <h2>Student Mess Account</h2></p>

<p>Enter Roll no.</p> <input type="text" name="rollno" placeholder="enter rool no.">
<p>
<input type="submit" name="submit" value="submit"></td>
</p>
</form>
</div>

<tr><td>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
    echo "hello";
    $rollno=$_POST['rollno'];

    include('dbcon.php');
    $sql="SELECT * FROM `student` WHERE rollno='$rollno'";
    $run =mysqli_query($con,$sql);

    if(mysqli_num_rows($run)>0)
    {
       $data=mysqli_fetch_assoc($run);
       ?>  
       <table>
         <tr>
         <th>room no.</th>
         <td><?php echo $data['roomno'];?></td>
         </tr>
          <tr>
          <th>Name</th>
           <td><?php echo $data['name'];?></td>
          </tr>
          <tr>
          <th>room no.</th>
          <td><?php echo $data['day1'];?></td>
          </tr>
           <tr>
           <th>room no.</th>
           <td><?php echo $data['day2'];?></td>
           </tr>
          <tr>
          <th>room no.</th>
           <td><?php echo $data['total'];?></td>
          </tr>
          </table>
       <?php
    }
    else
    {
        echo "<script>alert('No student Found');</script>";
    }

}
?>
