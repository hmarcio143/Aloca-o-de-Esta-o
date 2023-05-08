<?php

require_once("selectVazio.php");
?> 



<meta>
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">
</meta>
 
 <!-- dia 01 -->
 <table>
        <thed>
            <tr class="head-table"><th>Dia 01 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia01 as $dia): ?>
            <tr><td><?=$dia["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia01?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia01?></td></tr>
        </tbody>
    </table>

    <!-- dia 02 -->
    <table >
        <thed>
            <tr class="head-table"><th>Dia 02 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia02 as $dia2): ?>
            <tr><td><?=$dia2["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia02?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia02?></td></tr>
        </tbody>
    </table>
    <!-- dia 03 -->
    <table >
    <thed>
            <tr class="head-table"><th>Dia 03 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia03 as $dia3): ?>
            <tr><td><?=$dia3["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia03?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia03?></td></tr>
        </tbody>
    </table>

     <!-- dia 04 -->
     <table >
        <thed>
            <tr class="head-table"><th>Dia 04 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia04 as $dia4): ?>
            <tr><td><?=$dia4["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia04?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia04?></td></tr>
        </tbody>
    </table>


<!-- dia 05 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 05 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia05 as $dia5): ?>
            <tr><td><?=$dia5["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia05?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia05?></td></tr>
        </tbody>
    </table>


    <!-- dia 06 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 06 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia06 as $dia6): ?>
            <tr><td><?=$dia6["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia06?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia06?></td></tr>
        </tbody>
    </table>

      <!-- dia 07 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 07 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia07 as $dia7): ?>
            <tr><td><?=$dia7["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia07?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia07?></td></tr>
        </tbody>
    </table>

          <!-- dia 08 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 08 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia08 as $dia8): ?>
            <tr><td><?=$dia8["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia08?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia08?></td></tr>
        </tbody>
    </table>

          <!-- dia 09 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 09 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia09 as $dia9): ?>
            <tr><td><?=$dia9["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia09?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia09?></td></tr>
        </tbody>
    </table>

          <!-- dia 10 -->
<table>
    <thed>
            <tr class="head-table"><th>Dia 10 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia10 as $dia10): ?>
            <tr><td><?=$dia10["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia10?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia10?></td></tr>
        </tbody>
    </table>

          <!-- dia 11 -->
<table>
    <thed>
            <tr class="head-table"><th>Dia 11 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia11 as $dia11): ?>
            <tr><td><?=$dia11["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia11?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia11?></td></tr>
        </tbody>
    </table>

          <!-- dia 12 -->
<table>
    <thed>
            <tr class="head-table"><th>Dia 12 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia12 as $dia12): ?>
            <tr><td><?=$dia12["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia12?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia12?></td></tr>
        </tbody>
    </table>

          <!-- dia 13 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 13 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia13 as $dia13): ?>
            <tr><td><?=$dia13["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia13?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia13?></td></tr>
        </tbody>
    </table>

          <!-- dia 14 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 14 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia14 as $dia14): ?>
            <tr><td><?=$dia14["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia14?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia14?></td></tr>
        </tbody>
    </table>

          <!-- dia 15 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 15 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia15 as $dia15): ?>
            <tr><td><?=$dia15["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia15?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia15?></td></tr>
        </tbody>
    </table>

          <!-- dia 016 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 16 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia16 as $dia16): ?>
            <tr><td><?=$dia16["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia16?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia16?></td></tr>
        </tbody>
    </table>

          <!-- dia 17 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 17 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia17 as $dia17): ?>
            <tr><td><?=$dia17["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia17?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia17?></td></tr>
        </tbody>
    </table>

          <!-- dia 18 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 18 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia18 as $dia18): ?>
            <tr><td><?=$dia18["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia18?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia18?></td></tr>
        </tbody>
    </table>

          <!-- dia 19 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 19 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia19 as $dia19): ?>
            <tr><td><?=$dia19["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia19?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia19?></td></tr>
        </tbody>
    </table>

          <!-- dia 20 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 20 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia20 as $dia20): ?>
            <tr><td><?=$dia20["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia20?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia20?></td></tr>
        </tbody>
    </table>

          <!-- dia 21 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 21 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia21 as $dia21): ?>
            <tr><td><?=$dia21["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia21?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia21?></td></tr>
        </tbody>
    </table>

          <!-- dia 22 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 22 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia22 as $dia22): ?>
            <tr><td><?=$dia22["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia22?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia22?></td></tr>
        </tbody>
    </table>

          <!-- dia 23 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 23 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia23 as $dia23): ?>
            <tr><td><?=$dia23["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia23?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia23?></td></tr>
        </tbody>
    </table>

          <!-- dia 24 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 24 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia24 as $dia24): ?>
            <tr><td><?=$dia24["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia24?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia24?></td></tr>
        </tbody>
    </table>

          <!-- dia 25 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 25 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia25 as $dia25): ?>
            <tr><td><?=$dia25["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia25?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia25?></td></tr>
        </tbody>
    </table>

          <!-- dia 26 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 26 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia26 as $dia26): ?>
            <tr><td><?=$dia26["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia26?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia26?></td></tr>
        </tbody>
    </table>

              <!-- dia 27 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 27 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia27 as $dia27): ?>
            <tr><td><?=$dia27["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia27?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia27?></td></tr>
        </tbody>
    </table>

          <!-- dia 28 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 28 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia28 as $dia28): ?>
            <tr><td><?=$dia28["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia28?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia28?></td></tr>
        </tbody>
    </table>

          <!-- dia 29 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 29 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia29 as $dia29): ?>
            <tr><td><?=$dia29["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia29?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia29?></td></tr>
        </tbody>
    </table>

          <!-- dia 30 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 30 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia30 as $dia30): ?>
            <tr><td><?=$dia30["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia30?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia30?></td></tr>
        </tbody>
    </table>

          <!-- dia 31 -->
<table >
    <thed>
            <tr class="head-table"><th>Dia 31 de <?=$t?></th></tr>
        </thed>
        <tbody>
            <?php foreach($dia31 as $dia31): ?>
            <tr><td><?=$dia31["name"]?></td></tr>
            <?php endforeach?>
            <tr class="lugares-table"><td>Lugares Ocupados: <?= $qtdOcupadaDia31?></td></tr>
            <tr class="lugares-table"><td>Lugares Livres: <?= $qtdlivreDia31?></td></tr>
        </tbody>
            </table>

   