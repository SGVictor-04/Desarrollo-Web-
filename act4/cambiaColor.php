<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>Actividad 4</title>

</head>
<body>
    <h1 id="vicky">Soy una simple página!!! :3</h1>
    <button id="btnrojo" style= "background-color: red;" onmouseover="rojo()">Red</button>
    <button id="btnazul"style= "background-color: blue;" onmouseover="azul()">Blue</button> 
    <button id="btnnegro"style= "background-color: black;" onmouseover="negro()">Black</button>   

    <script>
        function rojo(){
             //alert("Outch Soy Rojo")
             document.getElementById("vicky").style.backgroundColor ="red";
        }

        function azul(){
            //alert("Outch Soy Azul")
            document.getElementById("vicky").style.backgroundColor ="blue";
        }

        function negro(){
            //alert("Outch Soy Negro")
            document.getElementById("vicky").style.backgroundColor ="black";
        }
    </script>
</body>
</html>
