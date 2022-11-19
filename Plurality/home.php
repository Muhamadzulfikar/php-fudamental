<?php
$con = mysqli_connect("localhost", "root", "", "plurality");

$data = mysqli_query($con, "SELECT * FROM members");
$fronting = mysqli_query($con, "SELECT * FROM frontings");

if(isset($_POST["memberFronting"])){
    $nameMember = $_POST["nameMember"];
    date_default_timezone_set("Asia/Bangkok");
    $start = date('h:i');
    $date = date('d F Y');
    $store = "INSERT INTO frontings(name) values('$nameMember')";
    $backup = "INSERT INTO histories(name,start,date) values('$nameMember', '$start', '$date')";

    mysqli_query($con, $store);
    mysqli_query($con, $backup);
    header("location:home.php");
}

if(isset($_POST["stopFronting"])){
    $nameMember = $_POST["nameMember"];
    date_default_timezone_set("Asia/Bangkok");
    $stop = date('h:i');
    $store = "UPDATE histories SET stop = '$stop' WHERE name= '$nameMember'";

    mysqli_query($con, $store);
    mysqli_query($con, "DELETE FROM frontings");
    header("location:home.php"); 
}
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

        <nav class="fixed top-0 left-0 right-0 bg-blue-500 text-white flex items-center justify-between p-4 " style="z-index: 1;">
            <h1 class="font-bold">Plurality Apps</h1>
            <ion-icon name="person-circle-outline" class="text-5xl"></ion-icon>
        </nav>

        <section class="mt-24 mb-10">
        <h1 class="font-bold text-xl mb-3 text-center">Fronting</h1>
        <div class="overflow-x-auto shadow-md sm:rounded-lg ">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="table-header">
                    <tr class="text-center">
                        <th scope="col">Name</th>
                        <th scope="col">Delete Fronting</th>
                    </tr>
                </thead>
                <?php while($row = mysqli_fetch_assoc($fronting)): ?>
                <tbody>
                    <tr class="table-row text-center">
                        <th scope="row" class="first-table-row"><?= $row["name"] ?></th>
                        <td>
                            <form method="POST" action="">
                                <button type="submit" name="stopFronting">
                                <input type="text" name="nameMember" value=<?= $row["name"] ?> class="hidden">
                                    <ion-icon name="arrow-down-circle-outline" class="text-2xl text-red-700"></ion-icon>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                <?php endwhile ?>
            </table>
        </div>
    </section>

        <button class=" w-26 h-12 bg-blue-500 text-white rounded-2xl px-3 flex items-center mb-5">Add Member
            <ion-icon name="person-add-outline" class="ml-2"></ion-icon>
        </button>

        <div class="overflow-x-auto shadow-md sm:rounded-lg mb-32">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="table-header">
                    <tr class="text-center">
                        <th scope="col">Name</th>
                        <th scope="col">Set Fronting</th>
                    </tr>
                </thead>
                <?php while($row = mysqli_fetch_assoc($data)) : ?>
                <tbody>
                    <tr class="table-row text-center">
                        <th scope="row" class="first-table-row"><?= $row["name"] ?></th>
                        <td>
                            <form method="POST" action="">
                                <input type="text" name="nameMember" value=<?= $row["name"] ?> class="hidden">
                                <button type="submit" name="memberFronting">
                                    <ion-icon name="arrow-up-circle-outline" class="text-2xl text-blue-700 "></ion-icon>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                <?php endwhile ?>
            </table>
        </div>
    </main>

    <nav class=" fixed bottom-0 left-0 right-0 shadow-md rounded-2xl p-8 flex justify-between border-2 mx-2 bg-white">
        <a class="text-4xl">
            <ion-icon name="people-outline"></ion-icon>
        </a>
        <a class="text-4xl" href="./timestamp.php">
            <ion-icon name="calendar-outline"></ion-icon>
        </a>
        <a class="text-4xl" href="./chat.php">
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