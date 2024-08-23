<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form id="inputForm" method="post">
        <label for="input">Masukkan teks:</label>
        <input id="inputField" type="text" name="input">
        <button id="submitButton" type="submit">Submit</button>
    </form>

    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {     
        $input = $_POST['input'];
        $angka = preg_replace('/[^0-9]/', '' , $input);
    
        if ($angka) {
            echo "<p>Teks mengandung angka: " . implode(" , ", str_split($angka,   2)) . "</p>";
        } else {
            echo "<p>Teks tidak mengandung angka</p>";
        }
    }
    ?>

</body>
</html>