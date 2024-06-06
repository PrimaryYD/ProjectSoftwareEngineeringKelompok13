<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="../css/index.css?v=1" rel="stylesheet" />
    <link href="../css/homepage.css?v=1" rel="stylesheet" />
  </head>
  <body id="background-gradient1">
    <div
      id="navbar"
      class="fixed flex justify-evenly items-center w-screen h-16 lg:h-24 bg-gray-100 z-50"
    >
      <div class="flex items-center w-1/6 h-full">
        <div class="w-fit h-3/4 p-1">
          <img class="w-full h-full" src="../img/Logo.png" />
        </div>
      </div>
      <div class="flex justify-around items-center w-1/2">
        <div class="flex justify-around items-center text-center w-3/4 h-3/4">
          <a href="index.php" class="w-1/6"
            ><span class="navbar-item">Home</span></a
          >
          <a href="offers.php" class="w-1/6"
            ><span class="navbar-item active">Offers</span></a
          >
          <a href="html.php" class="w-1/6"
            ><span class="navbar-item">About Us</span></a
          >
        </div>
      </div>
      <div class="flex justify-evenly items-center w-1/6 h-3/4 p-3">
        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
          <a
            href="logout.php"
            class="inline-flex items-center justify-center bg-gray-500 w-1/3 h-full rounded-lg text-white"
          >
            Logout
          </a>
        <?php else: ?>
          <a
            href="register.php"
            class="inline-flex items-center justify-center bg-gray-500 w-1/3 h-full rounded-lg text-white"
          >
            Register
          </a>
          <a
            href="login.php"
            class="inline-flex items-center justify-center bg-gray-500 w-1/3 h-full rounded-lg text-white"
          >
            Login
          </a>
        <?php endif; ?>
      </div>
    </div>
    <div class="w-full h-16 lg:h-24 z-10"></div>
    <div class="relative w-3/4 mx-auto h-fit z-10">
      <a href="offers.php"><img src="../img/left.webp" class="absolute top-2 -left-16 h-8 w-4"/></a>
      <h1 class="text-5xl my-24">OFFER OVERVIEW</h1>
      <div class="flex justify-between min-h-96">
        <div class="flex flex-col w-1/2">
          <h1 class="text-5xl mb-5">3 Months Pass</h1>
          <div class="mb-5">
            Enjoy 3 months of hassle-free travel across Tangerang with this pass. 
            Experience the city's diverse neighborhoods and hidden gems without worrying about fares.
          </div>
          <h2 class="font-bold mb-5">Diawasi Oleh:</h2>
          <img class="h-12 w-fit" src="../img/ojk.png" />
        </div>
        <div class="flex flex-col w-1/2 text-end">
          <div class="text-sm text-gray-400">Average 3 months price</div>
          <div class="text-gray-400 mb-6">Rp. 2.399.000</div>
          <div class="">Our Price</div>
          <h1 class="text-5xl my-4">Rp. 2.299.000</h1>
          <div class="text-sm font-bold">WHAT YOU GET</div>
          <div class="text-sm">Free bus rides for 3 months</div>
          <div class="text-sm">Free taxis for 3 months</div>
          <div class="text-sm">Free train tickets for 3 months</div>
          <div class="flex justify-end my-4">
            <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
              <a
                href="3months.confirmation.php"
                class="inline-flex justify-center w-1/3 p-3 text-3xl text-white font-bold bg-purple-950 rounded-xl"
              >
                Buy Now
              </a>
            <?php else: ?>
              <a
                href="login.php"
                class="inline-flex justify-center w-1/3 p-3 text-3xl text-white font-bold bg-purple-950 rounded-xl"
              >
                Buy Now
              </a>
            <?php endif; ?>
          </div>
          <div class="flex justify-end">
            <div class="flex justify-between w-2/5">
              <img class="h-6 w-fit" src="../img/qris.png" />
              <img class="h-6 w-fit" src="../img/visa.png" />
              <img class="h-6 w-fit" src="../img/mastercard.png" />
              <img class="h-6 w-fit" src="../img/jcb.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-3/4 mx-auto h-fit z-10">
      <h1 class="text-5xl mb-5">OTHER OFFER</h1>
      <div
        class="flex flex-col lg:flex-row justify-between items-center w-full h-fit"
      >
        <div
          class="flex flex-col justify-between items-center w-1/2 lg:w-[30%] h-72 lg:h-64 rounded-xl px-8 py-5 mb-8 lg:mb-0 border-2"
        >
          <div class="flex flex-col justify-between items-center h-1/2">
            <img class="w-fit h-16" src="../img/1.png" />
            <h1 class="text-2xl font-bold">Month Pass</h1>
          </div>
          <h1 class="text-xl xl:text-3xl font-bold">Rp. 799.000,-</h1>
        </div>
        <div
          class="flex flex-col justify-between items-center w-1/2 lg:w-[30%] h-72 lg:h-64 rounded-xl px-8 py-5 mb-8 lg:mb-0 border-2"
        >
          <div class="flex flex-col justify-between items-center h-1/2">
            <img class="w-fit h-16" src="../img/6.png" />
            <h1 class="text-2xl font-bold">Month Pass</h1>
          </div>
          <div class="flex flex-col justify-between items-center h-1/4">
            <h2 class="text-sm text-gray-400 line-through">Rp. 4.799.000,-</h2>
            <h1 class="text-xl xl:text-3xl font-bold">Rp. 3.899.000,-</h1>
          </div>
        </div>
        <div
          class="flex flex-col justify-between items-center w-1/2 lg:w-[30%] h-72 lg:h-64 rounded-xl px-8 py-5 mb-8 lg:mb-0 border-2"
        >
          <div class="flex flex-col justify-between items-center h-1/2">
            <img class="w-fit h-16" src="../img/12.png" />
            <h1 class="text-2xl font-bold">Month Pass</h1>
          </div>
          <div class="flex flex-col justify-between items-center h-1/4">
            <h2 class="text-sm text-gray-400 line-through">Rp. 7.899.000,-</h2>
            <h1 class="text-xl xl:text-3xl font-bold">Rp. 6.599.000,-</h1>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
