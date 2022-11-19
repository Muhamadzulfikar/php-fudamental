<?php
    if(isset($_POST['submit'])){
        if ($_POST['username'] == 'zulfikar' && $_POST['password'] == 'admin'){
            header('Location: page2.php?username=Zulfikar');
        }
        if($_POST['username'] == 'naissha' && $_POST['password'] == 'admin'){
            header('Location: page2.php?username=Naissha');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
    <link rel="stylesheet" href="build/tailwind.css">
</head>

<body class="bg-blue-800">
    <form action="" method="POST" class=" w-96 p-10 rounded-3xl block mx-auto mt-20 bg-blue-700 text-white shadow-xl">
        <h1 class="text-center text-3xl font-bold mb-10">Login Form Using POST Method</h1>
        <input type="text" placeholder="Username" name="username" class="block text-2xl mx-auto mb-5 shadow-lg rounded-2xl p-3 outline-none border-2 border-blue-600 text-black">
        <input type="password" placeholder="Password" name="password" class="block text-2xl mx-auto mb-10 shadow-lg rounded-2xl p-3 outline-none border-2 border-blue-600 text-black">
        <input type="submit" value="Submit" name="submit" class="block text-2xl mx-auto px-5 py-3 rounded-2xl text-white bg-blue-600 shadow-lg">
    </form>
</body>
</html>