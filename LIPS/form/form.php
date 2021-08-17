<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIPS-Hire</title>
    <!-- stylesheets -->
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="shortcut icon" href="../images/lips.png">
    <!-- kits -->
    <script src="https://kit.fontawesome.com/8ceebf3f77.js" crossorigin="anonymous"></script>

    <!-- bootstrap and jquery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>


</head>
<body>
    <!-- starting navbar here -->
    <nav class="Navigation-bar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><img src="../images/lips.png" alt="logo" style="width: 100px; height: 70px; margin: 5px;"></label>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="uncon.html">About Us</a></li>
            <li><a href="uncon.html">Services</a></li>
            <li><a href="uncon.html">interpretation</a></li>
            <li><a href="uncon.html">Others</a></li>
            <li><a href="uncon.html">Contact Us</a></li>
        </ul>
    </nav>
    <!-- ending navbar here -->

    <!-- form starts here -->
    <section class="form-container">
        <div class="form-box">
            <h1 class="form-header">Hire Us</h1>
            <div class="form-body">

                <form action="action.php" method="POST">
                    <input type="text" name="name" placeholder="Enter Your Name"><br>
                    <input style="margin-top: 20px;" type="email" name="email" placeholder="Enter Your Email"><br>
                    <input style="margin-top: 20px;" type="number" name="number" placeholder="Enter Your Phone Number"><br>
                    <select style="margin-top: 20px;" name="service" id="service">
                        <option value="0">Chose a Service</option>
                        <option value="Technical">Technical</option>
                        <option value="Scientific">Scientific</option>
                        <option value="Legal">Legal</option>
                        <option value="Judicial">Judicial</option>
                        <option value="Juridical">Juridical</option>
                        <option value="Certified translation">Certified translation</option>
                        <option value="Literary">Literary</option>
                        <option value="Medical">Medical</option>
                        <option value="Financial">Financial</option>
                        <option value="Sign language">Sign language</option>
                        <option value="Consecutive">Consecutive</option>
                        <option value="Simultaneous">Simultaneous</option>
                        <option value="On-site">On-site</option>
                        <option value="Virtual">Virtual</option>
                        <option value="Sight translation">Sight translation</option>
                        <option value="Sight translation of documents">Sight translation of documents</option>
                        <option value="Telephone">Telephone</option>
                        <option value="Virtual Remote Interpreting (VRI)">Virtual Remote Interpreting (VRI)</option>
                        <option value="Video implementation">Video implementation</option>
                        <option value="Conference">Conference</option>

    
                    </select>
                    <label for="">Appointment Date and Time</label><input type="datetime-local" id="" name="time">
                    <center><button type="submit" class="form-button">Submit</button></center>
    
                </form>


            </div>



        </div>

    </section>

    
</body>
</html>