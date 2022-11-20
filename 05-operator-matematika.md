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

# contoh penerapan matematika dalam PHP
- menghitung rata-rata
```php
<?php
  $beratMahasiswa = array(40, 45, 50, 55, 52, 56, 70);
  $rata_rata = 0;
  
  foreach($beratMahasiswa as $value){
    $rata_rata += $beratMahasiswa;
  }
  $hasil = $rata_rata / count($beratMahasiswa);
  echo $hasil;
?>
```
- menentukan bilangan ganjil dan genap
```php
<?php
  $angka =  15;
  
  if ($angka % 2 == 0){
    echo "Bilangan Bulat";
  } else{
    echo "Bilangan Ganjil";
  }
?>
```
- menghitung median
```php
<?php
    $beratMahasiswa = array(40, 45, 50, 55, 52, 56, 70);
    $n = count($beratMahasiswa);
    if($n % 2 == 0 ){
      $position = n / 2;
      $leftValue = $beratMahsiswa[$position];
      $beratMahasiswaReverse = array_reverse($beratMahasiswa);
      $rightValue = $beratMahsiswaReverse[$position];
      $result = ($leftValue + $rightValue) / 2
    } else{
      
    }
?>
```
