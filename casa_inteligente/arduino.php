<?php
$port=fopen("/dev/ttyACM0", "w");
if($_POST['estado']=="Amarelo"){
    fwrite($port,"0")
    echo "Amarelo ligado com sucesso.";
}
if($_POST['estado']=="Azul"){
    fwrite($port,"1")
    echo "Azul ligado com sucesso.";
}
if($_POST['estado']=="Laranja"){
    fwrite($port,"2")
    echo "Laranja ligado com sucesso.";
}
if($_POST['estado']=="Verde"){
    fwrite($port,"3")
    echo "Verde ligado com sucesso.";
}
fclose($port)
?>
