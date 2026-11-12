<?php
$text = "Copyright © 2026 | Tom & Jerry";
echo htmlentities($text, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
?>