<!DOCTYPE html>

</head><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0; /* Warna latar belakang abu-abu muda */
        }

        form {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px auto;
            background-color: #fff; /* Warna latar belakang putih */
            border-radius: 5px; /* Membuat sudut formulir membulat */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Memberikan efek bayangan */
            width: 250px;
            margin-top: 300px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333; /* Warna teks label */
        }

        button {
            background-color: gray; /* Warna hijau untuk tombol */
            color: white;
            border: none;
            padding: 3px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    
<body>
     <form id="inputForm" method="post">
        <label for="input">Masukkan teks:</label>
        <input id="inputField" type="text" name="input">
        <button id="submitButton" type="submit">Submit</button>
    </form>

    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") { // Bagian ini memeriksa apakah memakai metode post
        $input = $_POST['input']; //Variabel $input menyimpan nilai teks yang dikirimkan dari input formulir.
        $angka = preg_replace('/[^0-9]/', '' , $input); // digunakan untuk mencari angka dalam teks yang dimasukkan. 
                                                        //    
        if ($angka) {
            echo "<p>Teks mengandung angka: " . implode(" , ", str_split($angka,   1)) . "</p>"; //memecah string $angka menjadi array karakter individu
        } else {                                                                                 //implode mengubah array menjadi string
            echo "<p>Teks tidak mengandung angka</p>";
        }
    }
    ?>

</body>
</html>