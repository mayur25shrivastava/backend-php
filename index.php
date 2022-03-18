<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `UIT-Form`.`UIT-Form` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIT-RGPV</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <section class="crousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="campus.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>UIT Campus</h5>
                <p>Register for cricket club all The Intrested Participants ASAP!!!</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="campus2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>UIT Cricket Ground</h5>
                <p>Register for cricket club all The Intrested Participants ASAP!!!</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="cric2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5> </h5>
                <p>Register for cricket club all The Intrested Participants ASAP!!!</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>


    <img class="image1" src="cricketbg.jpg" alt="">
    <div class="container1">
        <h2>Welcome to UIT Cricket club</h2>
        <p>Please fill your Details in the form all the intrested participants!!!</p>
        <?php
        if($insert == true){        
            // echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>" ;
            echo '<script>alert("Thanks for submitting your form. We are happy to see you joining us for the Cricket club")</script>';
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name" style="margin-bottom:22px">
            <input type="text" name="age" id="age" placeholder="Enter your Age" style="margin-bottom:22px">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender" style="margin-bottom:22px">
            <input  type="email" name="email" id="email" placeholder="Enter your email" style="margin-bottom:22px">
            
            <input  type="phone" name="phone" id="phone" placeholder="Enter your phone" style="margin-bottom:22px">
            <textarea  name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn1">Submit</button> 
        </form>
    </div>

    
    <!-- INSERT INTO `uit-form` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'mayur ', '21', 'male', 'abc@gmaol.com', '99999999', 'hello world', current_timestamp()); -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<script>

</script>


</html>