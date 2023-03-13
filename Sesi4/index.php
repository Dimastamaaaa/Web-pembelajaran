<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tugas sesi4</title>
  </head>

  <body>
    <h1>Belajar javascipt algoritma</h1>
    <script>
      // membuat algoritma nilai mahasiswa
      var nilai = 60;
      if ("nilai >= 60") console.log("mahasiswa lulus");
      else if ("nilai <= 60") console.log("mahasiswa tidak lulus");
      else console.log("tidak sesuai");

      // membuat algoritma luas persegi
      var sisi = 3;
      var luas = sisi * sisi;
      console.log("luas persegi = " + luas);

      // membuat algoritma jika kita lapar
      var lapar = "lapar";
      if (lapar === "lapar") console.log(lapar);
      else console.log("tidak makan");

      // menerapkan looping
      // 1.while
      var i = 0;
      while (i < 11) {
        console.log("Dimastama " + i);
        i++;
      }

      // 2.do while
      let text = "";
      var i = 0;
      do {} while (i < 11);
      {
        console.log(" " + i);
      }

      // 3.for
      let = 0;

      for (let i = 0; i < 11; i++) {
        text += "The number is " + i + "<br> the number is";
      }
    </script>
  </body>
</html>
