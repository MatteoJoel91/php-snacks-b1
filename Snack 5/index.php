<?php
/* Prendere un testo abbastanza lungo, contenente diverse frasi. 
Prendere il testo e suddividerlo in tanti paragrafi ogni volta in cui si incontrerà un punto. */

$paragrafoLungo =   'Questa è una prova. Questa è una prova. Questa è una prova';

$carattereSpecifico = '.';

$paragrafoSuddiviso = explode($carattereSpecifico, $paragrafoLungo);

for ($i=0; $i < count($paragrafoSuddiviso) ; $i++) { 
    echo "<p>$paragrafoSuddiviso[$i]</p>";
}
