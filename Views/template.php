<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<!-- /////////////header -->   
<header>
    <h2>Meu header</h2>
</header>
<!-- /////////////páginas dinamicas -->
<section>
<?php
    $this->carregarViewNoTemplate($nomeView,$dadosModel);
?>
</section>
<!-- ///////////// footer -->
<footer>
    <h2>Meu footer</h2>
</footer>
</body>
</html>