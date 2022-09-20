<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="estilosres.css">
</head>
<body style="background-image: url(imagenes/fondo2.jpg); background-size: cover;">
    
<header>
        <div class="container__menu">
            <div class="logo">
                <img src="imagenes/logoR.png" alt="">
            </div>

            
            <div class="menu">
                <i class="fas fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Conócenos</a></li>
                        <li><a href="Menu.php">Menú</a></li>
                        <li><a href="Registro.php">Registrarse</a></li>
                        <li><a href="inicio.php" id="selected" >Iniciar Sesión</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


<script src="script.js"></script>

 <form method="POST" action="Registro.php" id="Formulario">
    <div class="Form">
        <h1>Inicio de sesión</h1>

        <div class="Grupo">
           <h3>Documento</h3>
           <input type="text" name="Doc" required><span class="barra"></span>
        </div>
        
        <div class="Grupo">
          <h3>Contraseña</h3>
          <input type="password" name="Con" required><span class="barra"></span>
        </div>

        <button type="submit" value="cargar" name="btn_enviar">Ingresar</button>
    </div>
 </form>



    <?php 
        include ('AbrirConexion.php');
         $Doc= " ";
         $Con= " ";

    if (isset ($_POST ["btn_enviar"])){
        $Doc= $_POST ["Doc"];  
        $Con= $_POST ["Con"]; 
    
        if ($Doc=="" || $Con==""){
        echo "Campos Obligatorios";
    } else {
        $Resultado= $Conexion ->prepare("INSERT INTO Datos(Documento, Contrasena ) VALUES (?,?)");
        $Resultado->bind_param ("is",  $Doc, $Con);
    }   $Resultado->execute(); 
    }

    ?>
</body>
</html>