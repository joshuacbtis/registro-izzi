<! DOCTYPE html >
< html >
< cabeza >
	< título > Registrar usuario </ título >
	< meta  charset = " utf-8 " >
	< link  rel = " stylesheet " type = " text / css " href = " estilo.css " >
</ cabeza >
< cuerpo >
    < método de formulario  = " publicar " >
    	< h1 > ¡Suscríbete! </ h1 >
    	< input  type = " text " name = " name " placeholder = " Nombre completo " >
    	< input  type = " email " name = " email " placeholder = " Email " >
    	< input  type = " submit " name = " register " >
    </ formulario >
        <? php 
        incluir ( "registrar.php" );
        ?>
</ cuerpo >
</ html >
