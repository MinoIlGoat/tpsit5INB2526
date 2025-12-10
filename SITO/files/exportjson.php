<?php
header("Content-Type: text/html; charset=utf-8");

$xml = simplexml_load_file("../Articoli.xml");


$json = json_encode($xml, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

echo "<pre style='background-color: black; color: green; padding: 10px;'>";
echo htmlspecialchars($json);
echo "</pre>";
?>
