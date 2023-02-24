<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <div class="header">
        <div class="header-logo"><img src="./fp.jpg " alt=""><font color="whitesmoke"><?php echo("IDA FITROTUN KHASANAH")?></font></div>
    </div>
    <section class="main">
        <h1>Holla!</h1>
        <p><?php echo("SELAMAT DATANG")?></p>
       <div class="menu">
           <ul>
               <li class="Home">
                    <i class="fa-solid fa-house"></i>
                    <a class="home" aria-current="page" style="text-decoration:none" href="home.php">Home</a></li>
               <li class="About">
                    <i class="fa-solid fa-person"></i>
                    <a class="about" aria-current="page" style="text-decoration:none" href="about.php">About Me</a></li>
                <li class="Sosmed">
                    <i class="fa-solid fa-address-card"></i>
                    <a class="sosmed" aria-current="page" style="text-decoration:none" href="sosmed.php"><font color="white">Sosial Media</font></a></li>
               <li class="Education">
                    <i class="fa-solid fa-school"></i>
                    <a class="education" aria-current="page" style="text-decoration:none" href="education.php"><font color="white">Education</font></a></li>
           </ul>
       </div>
    </section>
</body>
</html>
