<html>
<head>
    <style>



        
    </style>
</head>
<body>
    <h1>This or That?</h1>

    <?php
    $votes = json_decode (file_get_contents ("votes.json"), true);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset ($_POST["q1"])) {
            $button = $_POST["q1"];
            $votes ["q1$button"] += 1;
        }

        if (isset ($_POST["q2"])) {
            $button = $_POST["q2"];
            $votes ["q2$button"] += 1;
        }

        if (isset ($_POST["q3"])) {
            $button = $_POST["q3"];
            $votes ["q3$button"] += 1;
        }

        if (isset ($_POST["q4"])) {
            $button = $_POST["q4"];
            $votes ["q4$button"] += 1;
        }

        if (isset ($_POST["q5"])) {
            $button = $_POST["q5"];
            $votes ["q5$button"] += 1;
        }

        if (isset ($_POST["q6"])) {
            $button = $_POST["q6"];
            $votes ["q6$button"] += 1;
        }

        if (isset ($_POST["q7"])) {
            $button = $_POST["q7"];
            $votes ["q7$button"] += 1;
        }

        file_put_contents("votes.json", json_encode($votes));
    }
    ?>
    
    <form method = "post" action = "index.php">
        <label>1. How do you pronounce GIF?</label>
        <br> 
        <button name = "q1" value = "a1">Vote GIF</button>
        <button name = "q1" value = "a2">Vote JIF</button>
        <br><br> 

        <p>GIF: <?php echo $votes['q1a1']; ?></p>
        <p>JIF: <?php echo $votes['q1a2']; ?></p>

        <br> 
        <label>2. What came first the chicken or the egg?</label>
        <br> 
        <button name = "q2" value = "a1" >Vote Chicken</button>
        <button name = "q2" value = "a2">Vote Egg</button>
        <br><br> 

        <p>Chicken: <?php echo $votes['q2a1']; ?></p>
        <p>Egg: <?php echo $votes['q2a2']; ?></p>

        <br> 
        <label>3. Is pineapple on pizza good?</label>
        <br> 
        <button name = "q3" value = "a1">Vote Pineapple</button>
        <button name = "q3" value = "a2">Vote No Pineapple</button>
        <br><br> 

        <p>Pineapple: <?php echo $votes['q3a1']; ?></p>
        <p>No pineapple: <?php echo $votes['q3a2']; ?></p>

        <br> 
        <label>4. Is a hotdog a sandwich?</label>
        <br> 
        <button name = "q4" value = "a1">Vote Yes</button>
        <button name = "q4" value = "a2">Vote No</button>
        <br><br> 

        <p>Yes: <?php echo $votes['q4a1']; ?></p>
        <p>No: <?php echo $votes['q4a2']; ?></p>

        <br> 
        <label>5. Xbox or Playstation</label>
        <br> 
        <button name = "q5" value = "a1">Vote Xbox</button>
        <button name = "q5" value = "a2">Vote Playstation</button>
        <br><br> 

        <p>Xbox: <?php echo $votes['q5a1']; ?></p>
        <p>Playstation: <?php echo $votes['q5a2']; ?></p>

        <br> 
        <label>6. iPhone or Android?</label>
        <br> 
        <button name = "q6" value = "a1">Vote iPhone</button>
        <button name = "q6" value = "a2">Vote Andriod</button>
        <br><br> 

        <p>iPhone: <?php echo $votes['q6a1']; ?></p>
        <p>Andriod: <?php echo $votes['q6a2']; ?></p>

        <br> 
        <label>7. Does a straw have one or two holes?</label>
        <br> 
        <button name = "q7" value = "a1">Vote One</button>
        <button name = "q7" value = "a2">Vote two</button>
        <br><br> 

        <p>One: <?php echo $votes['q7a1']; ?></p>
        <p>Two: <?php echo $votes['q7a2']; ?></p>
    </form>
    



    
</body>
</html>
