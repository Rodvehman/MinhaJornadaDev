<div class="titulo">If Else</div>

<?php
    if (true){
        echo "Serei impresso";
    }

    if (true){
        echo '<br>'."Verdadeiro";
    } else {
        echo '<br>'."Falso - Parte A";
        echo '<br>'."Falso - Parte B";
    }

    if (false){
        echo "<br>Passo A<br>";
    } else if (false) {
        echo "<br>Passo B<br>";
    } else if (false) {
        echo "<br>Passo C<br>";
    } else if (false) {
        echo "<br>Passo D<br>";
    }else {
        echo "<br>Útimo passo<br>";
    }
?>