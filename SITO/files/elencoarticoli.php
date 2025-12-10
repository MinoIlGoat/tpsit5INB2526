<?php

$dom = new DOMDocument();

$dom->load("../Articoli.xml");

if ($dom->schemaValidate("../Articoli.xsd")) 
{
    echo "XML valido";
} else 
{
    echo "XML non valido";
}

?>


<form action="../passaggio.php" method="POST">
    <div style="color: white;">  
        <h1>INSERIMENTO PRODOTTI</h1>
    
        <label for="descrizione">Descrizione:</label><br>
        <input type="text" id="descrizione" name="descrizione" required><br> 
    
        <label for="quantita">Quantità:</label><br>
        <input type="number" id="quantita" name="quantita" required min="1"><br> 
    
        <label for="prezzounitario">Prezzo:</label><br>
        <input type="number" id="prezzounitario" name="prezzounitario" required min="0" step="0.01"><br> 
        
        <input type="submit" name="submit" value="Submit">
        <button type="button" onclick="window.location.reload();">Rivalidazione XML</button>

        <br><br><br>
    </div>
</form>

<?php
$xml = simplexml_load_file(dirname(__DIR__) . '/Articoli.xml');
if ($xml && isset($xml->Articoli) && isset($xml->Articoli->Articolo)) {
    echo "<table border=\"1\" cellpadding=\"12\" cellspacing=\"0\" style=\"width:100%; background:#fff;\">\n";
    echo "<tr><th>Descrizione</th><th>Quantita</th><th>Prezzo</th><th>Totale</th></tr>\n";
    foreach ($xml->Articoli->Articolo as $articolo) {
        $descrizione = (string)$articolo->Descrizione;
        $quantita = (int)$articolo->Quantita;
        $prezzo = (float)$articolo->PrezzoUnitario;
        $totale = (float)$articolo->PrezzoTotale;
        echo "<tr><td>$descrizione</td><td>$quantita</td><td>$prezzo</td><td>$totale</td></tr>\n";
    }
    echo "</table>\n";
} else {
    echo '<div style="background:#fff; padding:12px; border:1px dashed #ccc;">Nessun articolo.</div>';
}
?>