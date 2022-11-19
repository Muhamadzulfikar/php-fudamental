<?php 
$con = mysqli_connect("localhost", "root", "", "plurality");

$data = mysqli_query($con, "SELECT * FROM histories ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./tailwind.css">
</head>

<body>
    <main class="p-5">

        <nav class="fixed top-0 left-0 right-0 bg-blue-500 text-white flex items-center justify-between p-4"
            style="z-index: 1;">
            <h1 class="font-bold">Plurality Apps</h1>
            <ion-icon name="person-circle-outline" class="text-5xl"></ion-icon>
        </nav>

        <div class="mt-24"></div>

        <?php while($row = mysqli_fetch_assoc($data)): ?>
        <div class="mb-10">
            <h1 class="font-bold text-xl ml-2 mb-2"><?= $row["Date"] ?></h1>
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="table-header">
                        <tr class="text-center">
                            <th scope="col">Name</th>
                            <th scope="col">Start</th>
                            <th scope="col">Stop</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-row text-center">
                            <th scope="row" class="first-table-row"><?= $row["name"] ?></th>
                            <td><?= $row["start"] ?></td>
                            <td><?= $row["stop"] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php endwhile ?>

        <nav
            class=" fixed bottom-0 left-0 right-0 shadow-md rounded-2xl p-8 flex justify-between border-2 mx-2 bg-white">
            <a class="text-4xl" href="./home.php">
                <ion-icon name="people-outline"></ion-icon>
            </a>
            <a class="text-4xl" href="./timestamp.php">
                <ion-icon name="calendar-outline"></ion-icon>
            </a>
            <a class="text-4xl" href="./chat.html">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </a>
            <a class="text-4xl">
                <ion-icon name="apps-outline"></ion-icon>
            </a>
        </nav>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>