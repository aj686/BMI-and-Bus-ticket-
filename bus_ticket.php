<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bus Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">

        <div class="row">
            <div class="col-6">
                <h2>Bus Ticket Price Calculator</h2>
            </div>
            <div class="col-6 mb-5">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="day">Departure Day:</label>
                <select class="form-select" name="day" id="day">
                    <option value="">Select day</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                </select>
                <br><br>
                <label for="time">Departure Time:</label>
                <select class="form-select" name="time" id="time">
                    <option value="">Select time</option>
                    <option value="7:00">7:00</option>
                    <option value="10:00">10:00</option>
                    <option value="13:00">13:00</option>
                    <option value="16:00">16:00</option>
                    <option value="21:00">21:00</option>
                </select>
                <br><br>
                <input type="submit" class="btn btn-primary" value="Calculate Price">
                </form>
            </div>

            <div class="col-12">
            <?php

                $ticket_prices = array(
                        "Saturday" => array("7:00" => 8, "10:00" => 8, "13:00" => 8, "16:00" => 8, "21:00" => 6),
                        "Sunday" => array("7:00" => 8, "10:00" => 8, "13:00" => 8, "16:00" => 8, "21:00" => 6),
                        "Monday" => array("7:00" => 6, "10:00" => 6, "13:00" => 6, "16:00" => 6, "21:00" => 5),
                        "Tuesday" => array("7:00" => 6, "10:00" => 6, "13:00" => 6, "16:00" => 6, "21:00" => 5),
                        "Wednesday" => array("7:00" => 6, "10:00" => 6, "13:00" => 6, "16:00" => 6, "21:00" => 5),
                        "Thursday" => array("7:00" => 6, "10:00" => 6, "13:00" => 6, "16:00" => 6, "21:00" => 5),
                        "Friday" => array("7:00" => 6, "10:00" => 6, "13:00" => 6, "16:00" => 6, "21:00" => 5)
                    );

                    $dayError = $timeError = $day = $time = $price = $status = "";

                    // check if form is submitted
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["day"])) {
                            $dayErr = "Please select a departure day"; 
                        } else {
                            $day = $_POST["day"];
                        }

                        if (empty($_POST["time"])) {
                            $timeErr = "Please select a departure time";
                        } else {
                            $time = $_POST["time"];
                        }

                        if (!empty($day)&& !empty($time)) {
                            $initial = $ticket_prices[$day][$time];
                            $price = "Your ticket price is RM ".$initial;
                            $status = "Successful!";

                        } else {
                            $i = "Please select depature day or departure time";
                            $price = $i;
                            $status = "Unsuccessful!";

                        }
                    }
                ?>

                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <h1 class="alert-heading badge text-bg-success"><?= $status ?></h1>
                    
                    <?= "<p> Day: <b>$day</b></p> "?>
                    <?= "<p> Time: <b>$time</b></p> "?>
                    <hr>
                    <p class="mb-0"><?= $price ?></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>

    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>



