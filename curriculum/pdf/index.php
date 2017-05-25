<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <title>Esto es una prueba</title>
        <style>
            fieldset
            {
                border: 0;
                width: 100;
            }
        </style>
    </head>
    <body>
        <form action="curriculum.php" method="post" name="formaPDF">
            <fieldset>
                <label for="claveProfesor">Clave del profesor:</label>
                <input type="text" id="claveProfesor" name="claveProfesor" >
                
                <input type="submit" value="Generar PDF">
            </fieldset>
            
        </form>
    </body>
</html>
