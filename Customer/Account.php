
<?php 
    session_start();
    //session start has to be the very first thing to be writen on a code
    $_SESSION['username']="Sammy";

    if(filter_input(INPUT_GET, 'lo')=='y'){
        //echo"destroy";
        session_unset();
        session_destroy();
    }
    //include "View/db.php";
    $userName = filter_input(INPUT_POST, 'inputEmail4');
    echo $userName;
    if($userName){
        echo('vaild');
        $valid = true;
    }else{
        echo("nope");
        $valid=false;
    }

    if($valid){
        $_SESSION['userName']=$userName;
        header("Location: homepage.php");
    }
    include "../Modle/dataFunction.php";
        $action = filter_input(INPUT_GET, 'action');       
        if ($action==NULL) $action = filter_input(INPUT_POST,'action');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assests/CSS/styles.css">
    <title>New Customer</title>
</head>
<body>
    
    <h1>Creat A New Account</h1>
    <?php 
        $fname = filter_input(INPUT_POST, 'nputEmail4') ;
        $lname  = filter_input(INPUT_POST,'inputPassword4') ;
        $phone = filter_input(INPUT_POST,'inputPhone');
        $street = filter_input(INPUT_POST,'inputAddress'); 
        $city = filter_input(INPUT_POST,'inputCity');
        $state = filter_input(INPUT_POST,'inputState');
        $zip = filter_input(INPUT_POST,'inputZip');

        //testing to see it the info passes through by hardcoding
        // $fname = "Sammy" ;
        // $lname  =  "Pie";
        // $phone ="7897897894" ;
        // $street ="987 Paw ST." ; 
        // $city ="DogTown" ;
        // $state = "MO" ;
        // $zip ="78985" ;

        $added =addUser($fname, $lname, $phone, $street, $city, $state, $zip);

        switch ($action){
            case "addedCust":
                $added;
                break;
            case "default":
                break;
                
        }

       // echo($_SESSION['username']);

    ?>
    <form action="./" method="post" class="row g-3">
    <div class="col-md-6">
    <label for="inputEmail4" class="form-label">First Name</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">LastName</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Phone</label>
    <input type="text" class="form-control" id="inputPhone">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <input type="text" id="inputState" class="form-control">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <input type="text" name="action" value="addedCust">
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Creat Account</button>
  </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>