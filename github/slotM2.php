<?php

	session_start();
    if($_SESSION['Contatore']<2){
        $vettore=['R', 'G', 'B'];
        $n1=rand(0,2);
        $n2=rand(0,2);
        $n3=rand(0,2);
        echo $vettore[$n1]. " ". $vettore[$n2]. " ". $vettore[$n3]. "\n";

        if($n1==$n2){
            if($n2==$n3){
                $_SESSION['Punteggio']+= 3;
            }else{
                $_SESSION['Punteggio']+= 2;
            }
            $_SESSION['Contatore']= 0;
        }else{
            if($n2==$n3){
                $_SESSION['Punteggio']+= 2;
                $_SESSION['Contatore']= 0;
            }else{
                if($n1==$n3){
                    $_SESSION['Punteggio']+= 2;
                    $_SESSION['Contatore']= 0;
                }else{
                    $_SESSION['Contatore']+= 1;
                }
            }
        }
		echo "PUNTI: ";
		echo $_SESSION['Punteggio'];
    }else{
        echo "HAI PERSO! TORNA AD INIZIA PARTITA!\n";
        echo "HAI TOTALIZZATO ";
        echo $_SESSION['Punteggio'];
        echo " PUNTI!";
    }



?>