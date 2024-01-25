<?php
echo'<header id="main-header">
 <div class="contaner">
 <a href ="http://localhost/mystore/"> 
 <div class="logo">
 <div class="icons8-dynamics-365"></div>
  <h1>My Store</h1> 
  </div></a>
  <nav id="navbar"> 
<ul>
  <li><a href="http://localhost/mystore/">Home</a></li>
   <li><a href="http://localhost/mystore/about">About</a></li>  
   </ul> </nav> <div> 
<form class="form-horizontal" action="" method="post">
<div class="form-group">
    <div class="col-sm-4">
      <input type="text" name="search" placeholder="search here">
    </div>
    <div class="col-sm-4">
      <button type="submit" name="save" class="btn btn-success btn-sm">Serch</button>
    </div>
</div>
</form></header>
';
   include 'dbh.inc.php';

   $searchErr = '';
   $employee_details='';
   if(isset($_POST['save']))
   {
      echo "<div calss = 'result'>";
      if(!empty($_POST['search']))
      {
         $search = $_POST['search'];
         $stmt = mysqli_query($conn, "SELECT * FROM software WHERE name LIKE '%$search%' OR company LIKE '%$search%'");
         
         while($row = mysqli_fetch_assoc($stmt)){
               echo "<a href ='".$row['url']."'><div class = 'result1'>".$row['name']."</div></a>";
         }
         
      }
      else
      {
         $searchErr = "Please enter the information";
      }
      echo "</div>";
   }
?>
