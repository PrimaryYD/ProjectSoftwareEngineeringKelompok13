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
      <a href="12months.confirmation.php"><img src="../img/left.webp" class="absolute top-2 -left-16 h-8 w-4"/></a>
      <h1 class="text-5xl mt-24 mb-12">PAYMENT</h1>
      <div class="flex flex-col w-3/4 h-fit px-12 py-5 bg-gray-50 mx-auto">
        <div class="">
            <div>pass type</div>
            <div class="text-4xl my-4">12 Months Pass</div>
            <div>Amount To Pay</div>
            <h1 class="text-5xl my-4">Rp. 6.599.000</h1>
            <br />
            <hr />
        </div>
        <br />
        <div class="flex flex-col justify-between w-full">
            <div onClick="redirectPage()" class="flex justify-between w-full h-28 bg-gray-100 hover:bg-gray-300 cursor-pointer">
              <div class="flex justify-center items-center w-1/4 h-24">
                <img class="h-12" src="../img/qris.png"/>
              </div>
              <div class="flex flex-col justify-center p-8 text-end">
                <div class="text-3xl">Rp. 6.599.000</div>
                <div class="text-sm">Admin Fee: Rp. 2000</div>
              </div>
            </div>
            <br />
            <div onClick="redirectPage()" class="flex justify-between w-full h-28 bg-gray-100 hover:bg-gray-300 cursor-pointer">
              <div class="flex justify-center items-center w-1/4 h-24">
                <img class="h-12" src="../img/visa.png"/>
              </div>
              <div class="flex flex-col justify-center p-8 text-end">
                <div class="text-3xl">Rp. 6.599.000</div>
                <div class="text-sm">Admin Fee: Rp. 2000</div>
              </div>
            </div>
            <br />
            <div onClick="redirectPage()" class="flex justify-between w-full h-28 bg-gray-100 hover:bg-gray-300 cursor-pointer">
              <div class="flex justify-center items-center w-1/4 h-24">
                <img class="h-12" src="../img/mastercard.png"/>
              </div>
              <div class="flex flex-col justify-center p-8 text-end">
                <div class="text-3xl">Rp. 6.599.000</div>
                <div class="text-sm">Admin Fee: Rp. 2000</div>
              </div>
            </div>
            <br />
            <div onClick="redirectPage()" class="flex justify-between w-full h-28 bg-gray-100 hover:bg-gray-300 cursor-pointer">
              <div class="flex justify-center items-center w-1/4 h-24">
                <img class="h-12" src="../img/jcb.png"/>
              </div>
              <div class="flex flex-col justify-center p-8 text-end">
                <div class="text-3xl">Rp. 6.599.000</div>
                <div class="text-sm">Admin Fee: Rp. 2000</div>
              </div>
            </div>
        </div>
        <br />
      </div>
    </div>
  </body>
  <script>
    function redirectPage(){
      document.location.href = '12months.card.php';
    }
  </script>
</html>
