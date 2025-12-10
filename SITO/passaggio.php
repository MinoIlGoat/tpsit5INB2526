<?php
if (!isset($_POST["descrizione"]) || !isset($_POST["quantita"]) || !isset($_POST["prezzounitario"])) {
    header("Location: files/elencoarticoli.php");
    exit;
}

echo "\nsto per inserire il codice\n";

$file = __DIR__ . '/Articoli.xml';
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->formatOutput = true;

if (file_exists($file) && filesize($file) > 0) {
    libxml_use_internal_errors(true);
    $dom->load($file);
    libxml_clear_errors();
}

$root = $dom->documentElement;
if (!$root || $root->nodeName !== 'FatturaXML') {
    $root = $dom->createElement('FatturaXML');
    $dom->appendChild($root);
}

$articoliList = $dom->getElementsByTagName('Articoli');
if ($articoliList->length > 0) {
    $articoliNode = $articoliList->item(0);
} else {
    $articoliNode = $dom->createElement('Articoli');
}

if (!$articoliList->length) {
    $root->appendChild($articoliNode);
}

$articolo = $dom->createElement('Articolo');
$articoliNode->appendChild($articolo);
$articolo->appendChild($dom->createElement('Descrizione', htmlspecialchars($_POST['descrizione'], ENT_XML1)));
$articolo->appendChild($dom->createElement('Quantita', floatval($_POST["quantita"])));
$articolo->appendChild($dom->createElement('PrezzoUnitario', floatval($_POST["prezzounitario"])));
$articolo->appendChild($dom->createElement('PrezzoTotale', floatval($_POST["quantita"]) * floatval($_POST["prezzounitario"])));

$dom->save($file);
header("Location: files/elencoarticoli.php");
exit;
?>
