<div>
    Welcome, <?php print($_SESSION["name"]);?>
</div>

<div id="nav" class ="light">
    <div class="container">
        <ul id = "menu-main-menu" class="level-1">
            <li id="menu-item-122" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-7 current_page_item menu-item-children-0"><a href="http://localhost/public/index.php/" style="padding-right: 40px;">Home</a></li>
            <li id="menu-item-648" class="menu-item menu-item-type-custom menu-item-object-custom dropdown menu-item-children-3"><a style="padding-right: 40px;">College Search<span class="sf-sub-indicator"> »</span></a></li>
            <li id="menu-item-598" class="menu-item menu-item-type-custom menu-item-object-custom dropdown menu-item-children-1"><a style="padding-right: 40px;">Resume Builder<span class="sf-sub-indicator"> »</span></a></li>
        </ul>
    </div>
</div>
<div id = "collegelist">
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