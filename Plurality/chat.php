<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./tailwind.css">
</head>

<body style="background-image: url('./06_comp_1_4x.png'); background-size:contain;">
    <main class="p-5">

        <nav class="fixed top-0 left-0 right-0 bg-blue-500 text-white flex p-5 items-center"
            style="z-index: 1;">
            <ion-icon name="arrow-back-outline" class="text-2xl"></ion-icon>
            <ion-icon name="people-circle-outline" class="text-2xl ml-3 mr-1"></ion-icon>
            <h1 class="font-bold flex items-center">Y System</h1>
        </nav>

        <div class="mt-24 pr-5">
            <div class="flex items-center">
                <ion-icon name="person-circle-sharp"></ion-icon>
                <div class="p-4 bg-blue-500 rounded-2xl text-white mb-5 inline-block">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad quia voluptate odit praesentium obcaecati rerum est sunt voluptatem, eligendi, soluta at temporibus! Impedit perferendis incidunt dolores harum enim consectetur adipisci.</p>
                </div>
            </div>

            <div class="flex items-center">
                <div class="p-4 bg-blue-500 rounded-2xl text-white mb-5 inline-block">
                    <p>Gila Jadi</p>
                </div>
            </div>
        </div>

        <nav class="fixed bottom-0 left-0 right-0 shadow-md rounded-2xl p-2 flex justify-between items-center border-2 mx-2 bg-white">
            <textarea name="" id="" class="w-full h-11 border-2 border-black rounded-full p-2 text-lg mr-3" placeholder="Ketikan pesan"></textarea>
            <ion-icon name="send-outline" class="text-blue-700 text-4xl"></ion-icon>
        </nav>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>