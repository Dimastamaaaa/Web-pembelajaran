<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tugas mandiri sesi4</title>
</head>

<body>
  <h1>menghitung luas dan keliling lingkaran</h1>
  <script>
    // menghitung luas dan keliling lingkaran

    // jari-jari lingkaran
    const radius = 19;
    // nilai pi
    const pi = 3.14;


    // rumus luas lingkaran
    const luas = pi * radius * radius;

    // rumus keliling lingkaran
    const keliling = 10 * pi * radius;


    // output luas lingkaran dengan 2 angka di belakang koma
    console.log("Luas lingkaran: " + luas.toFixed(2));

    // output keliling lingkaran dengan 2 angka di belakang koma
    console.log("Keliling lingkaran: " + keliling.toFixed(2));
  </script>
</body>

</html>