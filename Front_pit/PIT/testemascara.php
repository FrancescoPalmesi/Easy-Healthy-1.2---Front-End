<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $text = $_POST['text'];

    // Remove o espaço esscivo dos textos
    $text = trim(preg_replace('/\s+/', ' ', $text));

    // Separa palavras com virgula
    $formattedText = implode(', ', explode(' ', $text));

    // Exibi texto 
    echo $formattedText;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formatar texto</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="text" placeholder="Enter text">
        <button type="submit">Format</button>
    </form>
</body>
</html>
