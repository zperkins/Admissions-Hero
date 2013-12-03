<div align: right>Welcome, <?php print($_SESSION["name"]);?></div>
<div id="menu">
	<a href = "http://localhost/logout.php">Log Out</a>
	<a href = "http://localhost/preferences.php">Preferences</a>
<div id = "collegelist">
	My Colleges
	<table border="1" align="left">
    <tr bgcolor= "#989898">
        <td style="font-weight: bold; font-size: 20px align: center" width= "300">My Colleges</td>
    </tr style="font-weight: bold;">
	<?php

        $colleges = query("SELECT 'College' FROM deadlines");

        foreach ($colleges as $college)
        {
            print("<tr>");
            //print("<td>{$college}</td>");</a>
            print("</tr>");
        }

    ?>
</table>
</div>