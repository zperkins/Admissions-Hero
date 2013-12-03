<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // check if no name entered
        if (empty($_POST["firstname"]) || empty($_POST["lastname"]))
        {
            apologize("Please enter your name.");
        }

        // check if no email entered
        if (empty($_POST["email"]))
        {
            apologize("Please enter your email.");
        }

        // check if no username entered
        if (empty($_POST["username"]))
        {
            apologize("You must enter your desired username.");
        }

        // check if no password entered
        else if (empty($_POST["password"]))
        {
            apologize("You must provide a password.");
        }

        // check if passwords match
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Your passwords must match.");
        }
    
        // search through database for username
        $used = query("INSERT INTO users (lastname, firstname, email, password, username) VALUES(?, ?, ?, ?, ?)", $_POST["lastname"], $_POST["firstname"], $_POST["email"], $_POST["password"], $_POST["username"]);
        
        // check if user name is already in use
        if ($used === false)
        {
            apologize("Username already exists.");
        }
        
        // pulls last id entered
        $rows = query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        
        // begins session for current user idea, logs in
        $_SESSION["id"] = "id";
        
        // redirects to main page
        redirect("http://localhost/public/home.php");
    }
    else
    {
        // render form
        $args = array("title" => "Register");
        render("register_form.php", $args);

    }

?>