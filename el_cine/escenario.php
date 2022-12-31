<?php
   
    
   function mostrar($sillas){
       $i=1;
       echo "<table style='border-collapse:collapse; border:1px solid black;margin 20px auto'>";
       echo "<tr>";
       echo "<th colspan=6 > Escenario</th>";
       
       $cabecera =['x',1,2,3,4,5];
       echo"<tr>";
       foreach ($cabecera as $cab){
           echo "<td style=' border:1px solid black;'>$cab</td>";
           
       }
       foreach ($sillas as $silla){
            echo"<tr>";
            echo "<td style=' border:1px solid black;'>$i</td>";
                foreach ($silla as $fi){
                    echo "<td style=' border:1px solid black;'>$fi</td>";
                }
            $i=$i+1;
       }
       echo "<table/>";
}




