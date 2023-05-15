<?php
$result = array($_GET['nom'], $_GET['adresse'], $_GET['ville'], $_GET['code']);
$default = array('Nom','Prénom','Adresse','Ville','Code postal');
$bool=true;
for($i=0;$i<count($result);$i++){
    if(empty($result[$i])){
        $bool=false;
        $manq[]=$default[$i];
    }
}
if(!$bool){
    echo "<p>Some Values are missing</p>";
    echo "<p>Please enter : ";
    foreach ($manq as $item){
        echo $item;
    }
    echo '</p>';
}else{
    echo '<label>Confirmation des coordonnées</label>';
    echo '<table style="border: 1px solid;border-collapse: collapse">';
    for($i=0;$i<count($result);$i++){
        echo "<tr style='border: 1px solid'>
        <td style='border: 1px solid'>$default[$i]</td>
        <td>$result[$i]</td>
        </tr>";
    }
    echo '</table>';
}
