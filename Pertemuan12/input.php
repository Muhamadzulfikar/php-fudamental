<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum Pemrograman Web</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script language="javascript">
            function cekform(){
                if(document.mhs.txtname.value==""){
                    alert('Nama Harus Diisi');
                    document.mhs.txtname.focus();
                    return false;
                } else if (document.mhs.txtalamat.valuu==""){
                    alert('Alamat Harus Diisi');
                    document.mhs.txtalamat.focus();
                    return false;
                } else if (document.mhs.textpekerjaan.value==""){
                    alert('Pekerjaan Harus Diisi');
                    return false;
                } else {
                    return true;
                }
            }
        </script>
    </head>

    <body>
        <div class="judul">
            <h1>Praktikum Pemrograman Web</h1>
            <h2>Politeknik Negeri Batam</h2>
        </div>
        <br/>

        <a href="index.php">Lihat Semua Data</a>

        <br/>
        <h3>Input Data Baru</h3>
        <form action="input-aksi.php" name="mhs" method="POST" onsubmit="return cekform()">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="txtname" id="name"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="txtalamat" id="alamat"></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="textpekerjaan" id="pekerjaan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </body>
</html>