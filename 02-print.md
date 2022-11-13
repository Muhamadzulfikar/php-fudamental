# Menampilkan tulisan ke layar
Hal paling basic yang akan kita pelajari di bahasa pemograman PHP ini adalah bagaimana cara menampilkan tulisan ke layar.

### 1. Buatlah file dengan nama print.php
### 2. Membuat struktur file HTML
- Untuk membuat struktur file HTML silahkan ketikan kode dibawah ini terus tekan Tab / enter
```HTML
HTML:5
```
- atau kamu bisa copy code dibawah ini
```HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
```
### 3. Memasukan kode PHP
- untuk memasukan kode PHP kita harus menuliskan kode sebagai berikut
```php
<?php
  write code here
?>
```
-  masukan kode diatas boleh ke dalam body file html kita atau di luar body file html kita
-  untuk pembelajaran ini kita meletakan di dalam body file HTML
```PHP
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    write code here
  ?>
</body>
</html>
```
### 4. Menampilkan tulisan ke layar
- Ketikan kode berikut ke dalam PHP
```php
echo "hallo saya belajar PHP";
```
### Source code

```PHP
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
   echo "hallo saya belajar PHP";
  ?>
</body>
</html>
```
### 5. buka XAMPP dan klik Admin pada menu apache
- setelah kita klik Admin maka akan keluar tampilan dashboard XAMPP di browser kita
### 6. buka file kita di browser
- untuk membuka file kita di browser ubah urlnya menuju folder dan nama file kita
``` 
http://localhost/latihanphp/print.php 
```
