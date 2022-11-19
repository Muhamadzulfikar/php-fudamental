# Operator Matematika pada PHP

-  Semua bahasa pemograman memiliki operator matematika dasar untuk melakukan perhitungan matematika diantaranya
- "+" = Penjumlahan
- "-" = Pengurangan
- "*" = Perkalian
- "/" = Pembagian
- "%" = Modularitas atau sisa bagi

# Operator Increment dan Decrement
- Digunakan untuk menambahkan atau mengurangi nilai sebuah variable
- ++$x = Pre-increment
- Menambahkan variable dengan 1, kemudian mengembalikan nilai $x
- contoh dari Pre-increment
```php
<?php
  $a = 10;
  echo ++$a;
?>
```
- Result
```
11
```

<br>

- $x++ = Post-increment
- Mengembalikan varible $x, kemudian menambahkan nilai $x dengan 1
- contoh dari Post-increment
```php
<?php
  $a = 10;
  echo $a++;
  echo $a;
?>
```
- Result
```
10
11
```

<br>

- --$x = Pre-decrement
- Mengurangi nilai variable $x, kemudian mengembalikan nilai $x
- contoh dari Pre-decrement
```php
<?php
  $a = 10;
  echo --$a;
?>
```
- Result
```
9
```

<br>

- $x-- = Post-Decrement
- Mengembalikan variable $x, kemudian mengurangi dengan 1
- contoh dari Post-decrement
```php
<?php
  $a = 10;
  echo $a--;
  echo $a;
?>
```
- Result
```
10
9
```
