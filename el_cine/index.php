<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EL CINE</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <main style="line-break: auto">
            <h1>El cine</h1>
            <?php
                include'./escenario.php';
                include './ocupacion.php';
                if(isset($_REQUEST["reset"])|| !isset($_REQUEST['enviar'])){
                    $sillas=[
                        ['L','L','L','L','L'],
                        ['L','L','L','L','L'],
                        ['L','L','L','L','L'],
                        ['L','L','L','L','L'],
                        ['L','L','L','L','L']
                    ];
                    mostrar($sillas);
                    
                }
            ?>
            <form method="post">
                <label>fila<input type='text'name='fila'></label>
                <label>puesto<input type='text'name='puesto'></label>
                    </br> </br><!-- comment -->
                <label>reservar<input type='radio'name='estado' value="reservar"></label>
                    <label>comprar<input type='radio'name='estado' value="comprar"></label>
                    <label>liberar<input type='radio'name='estado' value="liberar"></label>
                    </br> </br>
                    <label>enviar<input type='submit'name='enviar' value="enviar"></label>
                    <label>reset<input type='submit'name='reset' value="reset"></label>
                    <?php
                        $cadena="";
                        foreach ($sillas as $silla){
                            foreach ($silla as $pu){
                                $cadena=$cadena.$pu;
                            }
                        }
                        echo "<input type=text name = sillas style='display:none;' value=$cadena>";
                    ?>
            </form>
           
            
        </main>
        <?php
        
        ?>
        
    </body>
</html>
