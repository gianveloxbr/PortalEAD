<?php
    $idNota = 0;
    require_once('../../libs/db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    foreach ($_POST['nota'] as $nota) {
        $idNota++;
        $data1 = mysqli_real_escape_string($link,$nota);
        mysqli_query($link,"UPDATE atividades SET nota='$data1' WHERE id_atividade='$idNota' AND valor <= '$data1'") or die(mysqli_error($link));
    }
?>