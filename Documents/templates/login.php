<html>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if(empty($_POST["name"]) || empty($_POST["email"]))
			{
				apologize("Form not completely filled out!");
			}	
			else if()
			{
				echo 'Hello ' . $_POST["name"] . '!';
			}
		}
		else
		{
			render("login_form.php", ["title" => "Log In"]);
		}
	?>
</html>