<?php
echo "Abrindo a porta serial...";
echo "Caso nao abra em 5 segundos, ocorreu um erro.";
$port=fopen("/dev/ttyACM0", "w");
if($_POST['estado']=="Amarelo"){
    echo "Enviando comando do led amarelo.";
    fwrite($port,"0")
    echo "Amarelo ligado com sucesso.";
}
if($_POST['estado']=="Azul"){
    echo "Enviando comando do led azul.";
    fwrite($port,"1")
    echo "Azul ligado com sucesso.";
}
if($_POST['estado']=="Laranja"){
    echo "Enviando comando do led laranja.";
    fwrite($port,"2")
    echo "Laranja ligado com sucesso.";
}
if($_POST['estado']=="Verde"){
    echo "Enviando comando do led verde.";
    fwrite($port,"3")
    echo "Verde ligado com sucesso.";
}
echo "Fechando a porta serial...";
fclose($port)
?>
