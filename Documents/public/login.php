<?php

	// configuration
    require("../includes/config.php"); 

	// if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("Please provide a username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("Please enter your password.");
        }

        // query database for user
        $rows = query("SELECT * FROM users WHERE username = ?", $_POST["username"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if ($_POST["password"] == $row["password"])
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];

                $name = query("SELECT firstname FROM users WHERE id = ?", SESSION["id"]);
                $_SESSION["name"] = $name[0];

                // redirect to home
                redirect("http://localhost/templates/home.php");
            }
        }

        // else apologize
        apologize("Invalid username or password.");
    }
    else
    {
       // render form
        $args = array("title" => "Log In");
        render("login_form.php", $args);
    }

?>