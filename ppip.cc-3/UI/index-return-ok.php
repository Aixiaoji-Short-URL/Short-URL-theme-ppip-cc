<?php
echo "<div class='container'>";
echo "<input class='shorturl' id='shorturl' type='text' value='" . htmlspecialchars($protocol . $current_domain . "/i/?i={$result["diy_url"]}") . "' readonly />";
echo "<input class='shorturlcopy' id='shorturlcopy' type='button' onclick='copyText()' value='" . $ThemeUserGet["text.Copy"] . "' />"; 
echo "</div>";
?>