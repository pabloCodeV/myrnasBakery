<!DOCTYPE html>
<html lang="en">
<?include("head/head.php");?>
<body>
<?include("head/nav.php");?>
<main class=" fondo">


<section class="orden">

  <div class="contact_form">

  <div class="formulario">      
    <h1 class="ticontacto">Dejame tu mensaje</h1>
        <form action="submeter-formulario.php" method="post">       
              <p class="parrafo">
                <label for="nombre" class="colocar_nombre">Nombre
                  <span class="color" class="obligatorio">*</span>
                </label>
                  <input class="inform" type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
              </p>
            
              <p class="parrafo">
                <label for="email" class="colocar_email">Email
                  <span class="obligatorio color">*</span>
                </label>
                  <input class="inform" type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
              </p>
          
              <p class="parrafo">
                <label for="telefone" class="colocar_telefono">Teléfono
                </label>
                  <input class="inform" type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
              </p>       
            
              <p class="parrafo">
                <label for="asunto" class="colocar_asunto">Asunto
                  <span class="obligatorio color">*</span>
                </label>
                  <input class="inform" type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
              </p>    
            
              <p class="parrafo">
                <label for="mensaje" class="colocar_mensaje">Mensaje
                  <span class="obligatorio color">*</span>
                </label>                     
                 <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Dejame tu mensaje, en breve estare respondiendo..."></textarea> 
              </p>                    
            
              <button class="submit" type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>
        </form>
    </div>  
  </div>
</section>


</main>
<?include("head/footer.php");?>
</body>
</html>