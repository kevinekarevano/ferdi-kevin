<?php
    require("proses-login.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="dist/output.css">
    
</head>
<body>
    
   <section class="flex bg-gradient-to-r from-pink-500 to-violet-600 h-screen justify-center items-center">
        <div class="container bg-gray-400 bg-opacity-40 p-10  items-center justify-center m-2 rounded-lg max-w-96">
            <div class="">
                <?php if(isset($error)): ?>
                <h3 style="color:red; font-size:20px;">Username/Password Salah</h3>
                <?php endif; ?>
                <div>
                    <form action="" method="post">
                    <label for="user" class="text-white">Username</label>
                    <input type="text" id="user" placeholder="masukin cuy" class="w-full mb-10 p-3 rounded-md bg-zinc-600 text-white focus:border-none focus:outline-none placeholder:text-zinc-700 hover:scale-105 hover:bg-zinc-700 transition duration-700 shadow-md hover:shadow-zinc-800" name="username">
                </div>

                <div>
                    <label for="pass" class="text-white">Password</label>
                    <input type="password" id="pass" placeholder="Masukin cuy" class="w-full mb-10 p-3 rounded-md bg-zinc-600 text-white focus:border-none focus:outline-none placeholder:text-zinc-700 hover:scale-105 hover:bg-zinc-700 transition duration-700 shadow-md hover:shadow-zinc-800" name="password">
                </div>

                <div class="mx-10">
                    <button class="bg-violet-500 px-5 py-2 w-full rounded-full text-white hover:bg-violet-600 hover:shadow-lg hover:shadow-violet-700 transition duration-500 shadow-md mb-10" name="submit" type="submit">LOGIN</button>
                </div>
            </form>
                <div class="text-center">
                    <h1 class="text-white font-extralight"><span class="font-normal">Copyleft© <a href="https://www.instagram.com/kkeevn/" class="text-tyel" class="text-yellow-600">kevin.tzy</a></span> </h1>
                </div>
            </div>
        </div>
   </section>
     
</body>
</html>