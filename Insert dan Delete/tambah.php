<?php
    // buat koneksi
    $conn = mysqli_connect("localhost","root","","phpdatabase");

    // cek apakah button submit sudah di tekan atau belum
    if(isset($_POST['submit']))
    {
        // ambil data dari tiap element dalam form yang disimpan di variabel baru
        $nama = $_POST["Nama"];
        $nim = $_POST["Nim"];
        $email = $_POST["Email"];
        $jurusan = $_POST["Jurusan"];
        $gambar = $_POST["Gambar"];

        // query insert data
        $query = " INSERT INTO mahasiswa
                    VALUES
                    ('','$nama','$nim','$email','$jurusan','$gambar')";
        mysqli_query($conn,$query);

        // cek sukses data ditambah menggunakan mysqli_affected_rows
        // jika kita var_dump maka akan muncul int(1) jika gagal maka akan muncul int (-1)
        // var_dump(mysqli_affected_rows($conn));
        if(mysqli_affected_rows($conn) > 0) {
            <script type="text/javascript">
            function showArt() {
                alert('Ini merupakan pesan dalam windows alert');
                echo "data berhasil disimpan";
            }
            </script>
        }
        else {
            echo "gagal!";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?> 
