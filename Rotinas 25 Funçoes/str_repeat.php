<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h3><b>FUNÇÃO STR_REPEAT 24</b></h3>
    <form method="get" action="str_replace.php">

        <?php
        $txt = str_repeat("PHP-",3);
        echo "O texto gerado foi $txt.";

        echo "<br><br>";
        ?>
        <input type="submit" value="PROXIMA FUNÇÃO STR_REPLACE"/>
    </form>
    <a href="str_pad.php"> <input type="submit" value="VOLTAR STR_PAD"/></a>
</div>
</body>
</html>
 