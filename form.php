<?php
   

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "university";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $states = $_POST['states'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        $jamb = $_POST['jamb'];
        $waec = $_POST['waec'];
        $score = $_POST['score'];
    // using sql to create a data entry query
   $sql = "INSERT INTO university (id, fname, lname, dob, states, email, course, jamb, waec, score) VALUES ('0', '$fname', '$lname', '$dob', '$states', '$email', '$course', '$jamb', '$waec', '$score')";
        
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "<div class='form'>
              <h3>You are registered successfully.</h3><br/>
              <p class='link'>Click here to <a href='login_form.php'>Login</a></p>
              </div>";
    }else{
        echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
    }
   
    // close connection
    mysqli_close($con);

?>