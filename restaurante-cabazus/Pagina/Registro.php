<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosres.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>Registro</title>
</head>


<body style="background-image: url(imagenes/fondo.jpg); background-size: cover;">

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
                        <li><a href="Registro.php" id="selected">Registrarse</a></li>
                        <li><a href="inicio.php">Iniciar Sesión</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


<script src="script.js"></script>

 <form method="POST" action="Registro.php" id="Formulario">
    <div class="Form">
        <h1>Registro</h1>

        <div class="Grupo">
           <h3>Documento </h3>
           <input type="text" name="Doc" required><span class="barra"></span>
        </div>

        <div class="Grupo">
          <h3>Nombre</h3>
          <input type="text" name="Nom"  required><span class="barra"></span>
        </div>

        <div class="Grupo">
          <h3>Teléfono</h3>
          <input type="text" name="Tel"  required><span class="barra"></span>
        </div>
        

        <div class="Grupo">
          <h3>Dirección</h3>
          <input type="text" name="Dir"  required><span class="barra"></span>
        </div>
        
        <div class="Grupo">
          <h3>Contraseña</h3>
          <input type="password" name="Con" required><span class="barra"></span>
        </div>

        <button type="submit" value="cargar" name="btn_enviar">Registrarse</button>
    </div>
 </form>



    <?php 
        include ('AbrirConexion.php');
         $Doc= " ";
         $Nom= " ";
         $Tel= " ";
         $Dir= " ";
         $Con= " ";

    if (isset ($_POST ["btn_enviar"])){
        $Doc= $_POST ["Doc"]; 
        $Nom= $_POST ["Nom"]; 
        $Tel= $_POST ["Tel"]; 
        $Dir= $_POST ["Dir"]; 
        $Con= $_POST ["Con"]; 
    
        if ($Doc=="" || $Nom=="" || $Tel=="" || $Dir=="" || $Con==""){
        echo "Campos Obligatorios";
    } else {
        $Resultado= $Conexion ->prepare("INSERT INTO Datos(Documento, Nombre, Telefono, Direccion, Contrasena ) VALUES (?,?,?,?,?)");
        $Resultado->bind_param ("issss",  $Doc, $Nom,  $Tel, $Dir, $Con);
    }   $Resultado->execute(); 
    }

    ?>



</body>
</html>