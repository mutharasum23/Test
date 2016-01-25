
<html>
    <head> 
        <title>show Information</title>
        <link rel="stylesheet" href="display.css">
    </head>
  <?php  
  ini_set("display_errors",1);
     if(isset($_POST['submit'])){ 
    
         // print_r($_POST) ;
		
           $servername="node-Lenovo-B460-2.local";
           $username="root";
           $password="shyamala85";
           $dbhandle="training";
        $con = mysqli_connect($servername,$username,$password,$dbhandle);


           $name=$_POST["name"]; 
         
	


          
                $sql="SELECT * FROM form WHERE name='$name'";
               $run_query = mysqli_query($con,$sql);
               
                // output data of each row
               $row=  mysqli_fetch_assoc($run_query) ;
                echo "<br> Name: ". $row["name"]. " - Email: ". $row["email"];
           
           
           
            
             }

?>
                    
                    
    <body>
       <form method="post" action="" class="sky-form">
    <header>Registration form</header>
	
		
                    <input type="text" placeholder="Name" name="name"> 
			<span class="error"> </span>
		<input type='submit' name='submit'>
         
    </form>
        <div id="display">
            <table>
            <!--<ul  type="none">
                <li class="list">Name</li>
                <li class="list">Email</li>
                <li class="list">Password</li>
                <li class="list">Number</li>
                <li class="list">gender</li>   
            </ul>-->
            <div  style="display:none" id="display">
		<table>
			<tr rows="1" cols="2">
			<td class="namelist">Name</td>
			<td class="list">Email</td>
			<td class="list">Password</td>
			<td class="list">Number</td>
			<td class="list">Gender</td>
			</tr>
			
			<tr>
				<td class="list"><?php echo $row["name"]; ?> </td>
				<td class="list" ><?php echo $row["email"]; ?></td>
				<td class="list"><?php echo $row["password"]; ?></td>
				<td class="list"><?php echo $row["number"]; ?></td>
				<td class="list"><?php echo $row["gender"]; ?></td>
			</tr>
		</table>
	</div>
            </table>
        </div>
    </body>
    
</html>