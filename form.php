<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Form</title>
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <section class="section1">
        <div class="b1">
            <br>
            <div class="b2">
                <h1 class="heading"><br> INQUIRY FORM</h1>
                <hr class="line">
                <form action="" method="post">
                    <input type="text" name="firstName" placeholder="First Name*" class="fn">
                    <input type="text" name="lastName" placeholder="Last Name*" class="ln">
                    <br>
                    <input type="email" name="email" placeholder="E-Mail ID*" class="mail">
                    <br>
                    <input type="tel" name="phnNo" placeholder="Enter Your Mobile Number*" class="no1">
                    <input type="number" name="no_of_person" placeholder="Number Of Person*" class="no2">
                    <br>
                    <input type="date" name="trip_date" placeholder="Start Date*" value="Start Date*" class="no1">
                    <select name="destination" id="cars" class="no3">
                        <option value="destinations">Destination*</option>
                        <option value="d1">Australia</option>
                        <option value="d2">Bali</option>
                        <option value="d3">Bangkok</option>
                        <option value="d4">Dubai</option>
                        <option value="d5">Goa</option>
                        <option value="d6">Hongkong</option>
                        <option value="d7">Kashmir</option>
                        <option value="d8">Maldives</option>
                        <option value="d9">Nainital</option>
                        <option value="d10">Nepal</option>
                        <option value="d11">Sikkim</option>
                        <option value="d12">Singapore</option>
                        <option value="d13">Switzerland</option>
                    </select>
                    <br>
                    <textarea rows="4" name="description" cols="64" placeholder="Your Description" class="des"></textarea>
                    <br>
                    <input type="submit" name="submit" value="Submit" class="sub">
                </form>
            </div>
            <?php
                if(isset($_POST['submit'])){
                  
                        $firstName = $_POST['firstName'];
                        $lastName = $_POST['lastName'];
                        $email = $_POST['email'];
                        $phnNo = $_POST['phnNo'];
                        $no_of_person = $_POST['no_of_person'];
                        $trip_date = $_POST['trip_date'];
                        $destination = $_POST['destination'];
                        $description = $_POST['description'];
                        
                        $sql = "insert into bookings set 
                                firstName='$firstName',
                                lastName='$lastName',
                                phnNo='$phnNo',
                                no_of_person='$no_of_person',
                                trip_date='$trip_date',
                                destination='$destination',
                                description='$description',
                                email='$email'";

                        $res= mysqli_query($conn,$sql) or die(mysqli_error($conn));
                        if($res==TRUE){
                            echo '<script>
                            alert(" Details send successfully !");
                            window.location.replace("index.php");
                        </script>';
                        }
                        else{
                            echo '<script>
                            alert(" Sorry, an error occured !");
                        </script>';
                        }
                    
                }
                
            ?>
        </div>

    </section>
</body>

</html>