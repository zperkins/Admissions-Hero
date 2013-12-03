<?php

    // configuration
    require("../includes/config.php");

    // pulls user's name
    //$name = query("SELECT name FROM users WHERE id = ?", $_SESSION["id"]);


    // render profile
    $args = array("title" => "Profile");
    render("home.php", $args);
