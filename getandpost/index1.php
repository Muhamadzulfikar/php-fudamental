<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tailwind.css">
</head>
<body >

    <div id="root"></div>

    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script src="https://unpkg.com/react@17/umd/react.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js" crossorigin></script>

    <script type="text/babel">

    const root = document.querySelector('#root');

        const login = (
            <div className="bg-blue-800 w-screen h-screen pt-20">
            <form action="" method="GET" className=" w-96 p-10 rounded-3xl block mx-auto bg-blue-700 text-white shadow-xl">
                <h1 className="text-center text-3xl font-bold mb-10">Login Form Using GET Method</h1>
                <input type="text" placeholder="Username" name="name" className="block text-2xl mx-auto mb-5 shadow-lg rounded-2xl p-3 outline-none border-2 border-blue-600 text-black" />
                <input type="password" placeholder="Password" name="password" className="block text-2xl mx-auto mb-10 shadow-lg rounded-2xl p-3 outline-none border-2 border-blue-600 text-black" />
                <input type="submit" value="Submit" name="submit" className="block text-2xl mx-auto px-5 py-3 rounded-2xl text-white bg-blue-600 shadow-lg" />
            </form>
            </div>
        );

        const page2 = (
            <form action="" method="post" className="ml-10 mt-5 bg-white inline-block p-10 rounded-2xl shadow-2xl">
                <div className="mb-10">
                    <?php echo"hallo ngab" ?>
                    <label for="nama" className="text-2xl mr-3">Nama</label>
                    <input type="text" name="nama" className="text-2xl ml-36 shadow-lg rounded-xl p-1 outline-none border border-black" />
                </div>
            
                <div className="mb-10">
                    <label for="tempatlahir" className="text-2xl">Tempat Lahir</label>
                    <input type="text" name="tempatlahir" class="text-2xl ml-20 shadow-lg rounded-xl p-1 outline-none border border-black" />
                </div>
            
                <div className="mb-10">
                    <label for="tanggallahir" className="text-2xl">Tanggal Lahir</label>
                    <input type="date" name="tanggallahir" className="text-2xl w-72 ml-20 shadow-lg rounded-xl p-1 outline-none border border-black" />
                </div>
            
                <div className="mb-16">
                    <label for="alamat" className="text-2xl">Alamat</label>
                    <input type="text" name="alamat" className="text-2xl ml-36 shadow-lg rounded-xl p-1 outline-none border border-black" />
                </div>
            
                <input type="submit" name="submit" className="text-2xl ml-96 px-5 py-3 rounded-2xl text-white bg-blue-600 shadow-lg" />
            </form>
        );

        ReactDOM.render(login, root);
    </script>

<?php
    @$username = $_GET['name'];
    @$password = $_GET['password'];

    if( ($username == 'zulfikar' or $username == 'naisha') && $password == 'admin'){
        echo "  <script type='text/babel'>
                    const admin = (
                        <>
                        <div className='ml-10 mt-5'>
                        <h1 className='text-3xl font-bold'>Hallo selamat datang $username</h1>
                        <p className='text-lg'>Selamat datang di menu tambah data</p>
                        </div>
                        {page2}
                        </>
                    )
                ReactDOM.render(admin, root);
                </script>
        ";
    }

    @$nama = $_POST['nama'];
    @$tempatlahir = $_POST['tempatlahir'];
    @$tanggallahir = $_POST['tanggallahir'];
    @$alamat = $_POST['alamat'];

    if(isset($_POST['submit'])){
        echo "  <script type='text/babel'>
                    const biodata = (
                        <>
                        <h1 className='mt-5 ml-7 text-3xl font-bold'>Biodata</h1>
                        <div className='w-96 ml-7 mt-5 border-t-2 border-blue-600 p-5 pt-20 rounded-b-2xl shadow-2xl'>
                            <h1 className='text-center text-2xl mb-3'>$nama</h1>
                            <p className='text-center mb-16 text-gray-400'>Sistem Informasi</p>
                            <div className='flex mb-5'>
                                <p className='mr-10'>Tempat Lahir</p>
                                <p>$tempatlahir</p>
                            </div>
                            <div className='flex mb-5'>
                                <p className='mr-10'>Tanggal Lahir</p>
                                <p>$tanggallahir</p>
                            </div>
                            <div className='flex mb-3'>
                                <p className='mr-20'>Alamat</p>
                                <p>$alamat</p>
                            </div>
                        </div>
                        </>
                    );
                    ReactDOM.render(biodata, root);
                </script>
        ";
    }
?>

</body>
</html>