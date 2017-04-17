<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8"/>
        <title>PRÁCTICA 15</title>
        <SCRIPT>
            Function mensaje(){
                alert ("hola java script");
            }
             Function enviar(){
            var _nombre=document.getElementById("nom").value;
            var _edad=document.getElementById("ed").value;
                if(_nombre=="")
                    {
                        alert("te falta el nombre");
                        return;
                    }
                 if(_edad=="")
                    {
                        alert("te falta edad");
                        return;
                    }
                 document.getElementById("miForm").submit();
            }
        </SCRIPT>
    </head>
    <body>
      <form method="POST" action="validacion.php" id="miForm">
          <p>
              NOMBRE: <INPUT TYPE="TEXT" NAME="NAME" ID="nom"/>
             <BR/>
               EDAD: <INPUT TYPE="TEXT" NAME="edad" ID="ed"/>
            <input type="button" value="ENVIAR" ONCLICK="mensaje()"/>
          </p>
      </form>
    </body>
</html>