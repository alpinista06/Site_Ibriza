<?php
echo "Abrindo a porta serial...<br>";
echo "Caso nao abra em 5 segundos, ocorreu um erro.<br>";
try {
   //$port=fopen("/dev/ttyACM0", "w");
   if($_POST['estado']=="Amarelo"){
       echo "Enviando comando do led amarelo.<br>";
       //fwrite($port,"a")
       echo "Amarelo ligado com sucesso.<br>";
   }
   if($_POST['estado']=="Azul"){
       echo "Enviando comando do led azul.<br>";
       //fwrite($port,"b")
       echo "Azul ligado com sucesso.<br>";
   }
   if($_POST['estado']=="Laranja"){
       echo "Enviando comando do led laranja.<br>";
       //fwrite($port,"c")
       echo "Laranja ligado com sucesso.<br>";
    }
    if($_POST['estado']=="Verde"){
        echo "Enviando comando do led verde.<br>";
        //fwrite($port,"d")
        echo "Verde ligado com sucesso.<br>";
    }
    echo "Fechando a porta serial...<br>";
    //fclose($port)
} catch (Exception $e) {
    echo 'Excecaoo capturada: ',  $e->getMessage(), "\n";
}

echo "<br>";
phpinfo(); //Mostra varias informacoes do php
?>
