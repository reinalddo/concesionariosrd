<html>
    <head>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript">            
            function guardar(){
                var oEditor = CKEDITOR.instances.cuerpo;
                document.f.cuerpo.value=oEditor.getData();
                //object.cuerpo=[encodeURIComponent(object.cuerpo)];
                return true;
            }
        </script>
    </head>
    <body>        
        <form action="cke2.php" method="post" autoComplete="off" name="f" onsubmit="return guardar()">            
            <table>
                <tr>                    
                    <td><textarea type="text" id="cuerpo" name="cuerpo" >Aqui va el texto</textarea></tr>                
            </table>
            <br/>            
            <button type="submit">Guardar</button>            
        </form>

        <script type="text/javascript">
            CKEDITOR.replace('cuerpo',
            {           
            } );
        </script>

    </body>
</html>
