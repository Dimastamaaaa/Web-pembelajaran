Variabel adalah suatu penyimpanan untuk data dan kita dapat menggunakan variabel untuk menyimpan beberapa informasi atau data.

Untuk membuat sebuah variabel pada JavaScript, kita dapat menggunakan keyword let.

Tipe Data


Tipe data adalah jenis-jenis data yang bisa kita simpan di dalam variabel.

Javascript adalah bahasa yang bersifat dynamic typing, artinya kita tidak harus menuliskan tipe data pada saat pembuatan variabel seperti pada bahasa C, C++, Java, dsb. yang bersifat static typing.

Ada beberapa tipe data dalam pemrograman Javascript:

1.Integer atau Number (bilangan bulat) 
2.String (teks)
3.Boolean
4.Object


Function
Fungsi adalah sub-program yang bisa digunakan kembali baik di dalam program itu sendiri, maupun di program yang lain.

Fungsi di dalam Javascript adalah sebuah objek. Karena memiliki properti dan juga method.


Javascript Output

Ada 4 cara menampilkan output pada Javascript:

Menggunakan Fungsi console.log();

Menggunakan Fungsi alert();

Menggunakan Fungsi document.write();

Menggunakan innerHTML.



Apa perbedaan dari keempat cara tersebut?

Menggunakan Fungsi console.log()

Fungsi console.log() adalah fungsi untuk menampilkan teks ke console Javascript.

Fungsi console.log() biasanya digunakan untuk debugging. Karena setiap pesaan error di Javascript selalu  ditampilkan di dalam Console.

Selain console.log(), terdapat juga beberapa fungsi untuk debugging seperti console.debug(), console.info(),  console.error(), console.dir(), dsb.



Menggunakan Fungsi alert()

Fungsi alert() adalah fungsi untuk menampilkan jendela dialog. Fungsi sebenarnya berada pada objek window.



Menggunakan Fungsi document.write()

Objek document adalah objek yang mewakili dokumen HTML di dalam Javascript.



Dalam objek document, terdapat fungsi write() untuk menulis sesuatu ke dokumen HTML.

Selain fungsi write(), objek document juga menyediakan berbagai macam fungsi untuk manipulasi dokumen  HTML.




Ada tiga macam jendela dialog pada Javascript:

Jendela dialog alert();

Dialog alert() biasanya digunakan untuk menampilkan sebauh pesan peringatan atau informasi.

Fungsi alert() berada dalam objek window.

Karena objek window bersifat global, kita boleh tidak menulisnya.

Dialog alert() tidak akan mengembalikan nilai apa-apa saat dieksekusi.


Jendela dialog confirm();


Dialog confirm() digunakan untuk melakukan konfirmasi dalam melakukan tindakan tertentu.
Misalnya:
Saat kita menghapus sesuatu, maka ada baiknya menampilkan dialog confirm(). Karena tindakan tersebut cukup  berbahaya.

Dialog confirm dapat dibuat dengan fungsi confirm().
Dialog confirm() akan mengembalikan nilai true apabila kita memilih tombol OK dan akan mengembalikan nilai false apabila kita memilih Cancel.

Nilai kembalian ini dapat kita tampung dalam variabel untuk diproses.


Jendela dialog promp();

         Dialog prompt() berfungsi untuk mengambil sebuah inputan dari pengguna.
         Dialog prompt() akan mengembalikan sebuah nilai string dari apa yang diinputkan oleh pengguna.  
         Dialog prompt() memiliki beberapa parameter yang harus diberikan:

Teks yang akan ditampilkan pada form;
Nilai default untuk field input.
Pada contoh di atas, kita memberikan nilai default-nya berupa string kosong dengan tanda petik "".

 

Kapan Waktu yang Tepat Menggunakan Alert, Conﬁrm, dan Prompt?
Saat kita hanya ingin menampilkan informasi saja, maka gunakan alert().
Saat kita ingin jawaban konfirmasi dari pengguna, maka gunakan confirm().
…dan apabila kita ingin mengambil data teks dari pengguna, maka gunakan prompt().