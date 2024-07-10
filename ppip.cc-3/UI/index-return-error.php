<?php
echo "<div class='container'>";
echo "<input class='shorturl' id='shorturl' type='text' value='" . htmlspecialchars($result["msg"]) . "' readonly />";
echo "<input class='shorturlcopy' id='shorturlcopy' type='button' value='" . htmlspecialchars($LanguageV1["Create-ERROR_index"]) . "' />"; 
echo "</div>";
?>
