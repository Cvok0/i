<?php
include "_borders/spolecne.php";
hlavicka("");
?>

<center>
    <h1>SUS web</h1>
    <?php
    $wel = rand(1,6);
    if($wel == 1) echo "Vojta je opice";
    elseif ($wel == 2) echo "Zajímavost: Martin je větší než celý vesmír";
    elseif ($wel == 3) echo "mám rád banány";
    elseif ($wel == 4) echo "prodej <spant title=mouka>bílého prášku</span> za 10,90 euro";
    elseif ($wel == 5) echo "černočerná temnota";
    else echo "696969";
    ?>
    
</center>

<img src="favicon.ico">

<center>
    <h2>Důležité stránky</h2>
    <ul>
        <li><a href="https://necyklopedie.org/wiki/%C5%A0kola_M%C3%A1nesova_Sokolov">Škola Mánesova na necyklopedii</a>
        <li><a href="https://necyklopedie.org/wiki/Elon_Musk#Synov%C3%A9%2C_kter%C3%A9_vlastn%C3%AD_nebo_si_to_mysl%C3%AD">důkaz, že Simon je syn Elona Muska</a>
    </ul>
</center>

<h2>Hitlerín</h2>

<img src="images/hitler.jpg" width="20%" align="right">Hitler byl velmi zlý, zabil spoustu lidí a nerad se sprchoval.

<h2>

<?php 
paticka();
?>
