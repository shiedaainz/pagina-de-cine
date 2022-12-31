<?php

    if(isset($_POST['enviar'])){
        $fila=$_POST['fila'];
        $puesto=$_POST['puesto'];
        $estados=$_POST['estado'];
        $silleteria=$_POST['sillas'];
        $i=0;
        for($m=0;$m<5;$m++){
            for($n=0;$n<5;$n++){
                $i=5*$m +$n;
                $sillas[$m][$n]= substr($silleteria,$i,1);
                
            }
            $i=0;
        }
        if($estados=='reservar'){
            if($sillas[$fila -1][$puesto-1]=='L'){
                $sillas[$fila -1][$puesto-1]='R';
            }
            else if($sillas[$fila -1][$puesto-1]=='R'){
                echo'<script language="javascript">alert("silla reservada");</sricpt>';
            
            }
            else if($sillas[$fila -1][$puesto-1]=='V'){
                echo'<script language="javascript">alert("silla vendida");</sricpt>';
            
            }
        }
        if($estados=='comprar'){
            if($sillas[$fila -1][$puesto-1]=='L' ||  $sillas[$fila -1][$puesto-1]='R'){
                $sillas[$fila -1][$puesto-1]='V';
            }
            else if($sillas[$fila -1][$puesto-1]=='V'){
                echo'<script language="javascript">alert("silla vendida");</sricpt>';
            
            }   
        
        }
        if($estados=='liberar'){
            if($sillas[$fila -1][$puesto-1]=='R'){
                $sillas[$fila -1][$puesto-1]='L';
            }
            else if($sillas[$fila -1][$puesto-1]=='V'){
                echo'<script language="javascript">alert("silla vendida");</sricpt>';
            
            }
            else if($sillas[$fila -1][$puesto-1]=='L'){
                echo'<script language="javascript">alert("silla libre");</sricpt>';
            
            }
       
        }  
    mostrar($sillas);
    }

