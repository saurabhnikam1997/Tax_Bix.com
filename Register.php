<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "taxbix";
  $conn = mysqli_connect($servername, $username, $password, $db);
  
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
  
  if (isset($_POST['submit'])) {

        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $contact =$_POST['contact'];
        $email =$_POST['email'];
        $whtsup =$_POST['wno'];
        $address =$_POST['address'];
        $state =$_POST['state'];
        $district =$_POST['city'];
        $taluka =$_POST['taluka'];
        $pin =$_POST['pin_cod'];
        $bus_name =$_POST['bus_name'];
        $username =$_POST['username'];
        $password =$_POST['pswd'];
        $cpassword =$_POST['cpswd'];
        
        $pass = password_hash($password,PASSWORD_BCRYPT); 
                                
        $cpass = password_hash($cpassword,PASSWORD_BCRYPT);

        $emailquery  = "Select * from register where email = '$email' ";
        $query = mysql_query($con, $emailquery);

        $emailcount = mysql_num_rows($query);

        if($emailcount > 0){
            echo 'email already exist';
        }else{
            if($password === $cpassword){
                $insertquery = "INSERT INTO register(fname,lname,contact,email,wno,address,state,city,taluka,pin_cod,bus_name,username,pswd,cpswd) values('$fname','$lname','$contact','$emails','$whtsup','$address','$state','$district','$taluka','$pin','$bus_name','$username','$pass','$cpass')";
                $iquery = mysql_query($con, $insertquery);


                if ($iquery) {
                    ?>
                    <script>
                        alert(" Data Inserted Successfully");
                    </script>
                    <?php
                 }else{
                    ?>
                    <script>
                        alert("Error While Inserting data");
                    </script>
                    <?php
                }

            }else{
                echo 'Password Not Matching';
            }
                                
    }
}

mysqli_close($conn);
?>
