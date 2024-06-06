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
  <body id="background-gradient1" onload="getCurrentDate()">
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
      <a href="12months.payment.php"><img src="../img/left.webp" class="absolute top-2 -left-16 h-8 w-4"/></a>
      <h1 class="text-5xl mt-24 mb-12">TICKET INFORMATION</h1>
      <div class="flex flex-col w-3/4 h-fit px-12 py-5 mx-auto">
        <div class="">
            <?php
              echo '<div>Nama : '.$_SESSION['userName'].'</div>';
            ?>
            <div>Ticket Type: 12 Month Pass</div>
            <div>Valid From: <span class="currentDate"></span> to <span class="futureDate"></div>
            <br />
            <hr />
        </div>
        <br />
        <div class="flex flex-col items-center w-full text-end">
                    <div
                        id="smart-card"
                        class="relative flex flex-col justify-between w-[640px] h-96 border-white rounded-3xl border-4"
                    >
                    <img class="absolute w-8 h-8 top-3 right-3" src="../img/Logo.png" />
                    <img
                        class="absolute w-full h-full m-auto"
                        src="../img/smart-card-bg.png"
                    />
                    <div class="w-full pt-16 px-12">
                        <img class="mb-2" src="../img/Transportlogy.png" />
                        <br />
                        <h2 class="text-center text-2xl">12 Months Pass</h2>
                    </div>
                    <div class="flex justify-between items-end w-full pb-4 px-8">
                        <div class="text-start">
                            <?php
                              echo '<h3 class="text-xl">'.$_SESSION['userName'].'</h3>';
                            ?>
                            <div class="text-sm"><span class="currentDate"></span> to <span class="futureDate"></div>
                            <div class="text-sm">*Available only across Tangerang City</div>
                        </div>
                        <div class="text-end">
                            <div class="text-sm">Bus rides for 12 months</div>
                            <div class="text-sm">Online transportation for 12 months</div>
                            <div class="text-sm">Taxis for 12 months</div>
                            <div class="text-sm">Train tickets for 12 months</div>
                        </div>
                    </div>
            </div>
        <br />
      </div>
      <br />
      <div class="flex justify-between w-full">
        <a
            href=""
            class="inline-flex justify-center w-1/5 p-3 text-2xl text-white font-bold bg-purple-950 rounded-xl"
        >
            Print Pass
        </a>
        <a
            href=""
            class="inline-flex justify-center w-1/5 p-3 text-2xl text-white font-bold bg-purple-950 rounded-xl"
        >
            Link to Gojek
        </a>
        <a
            href=""
            class="inline-flex justify-center w-1/5 p-3 text-2xl text-white font-bold bg-purple-950 rounded-xl"
        >
            Link to Grab
        </a>
        <a
            href="index.php"
            class="inline-flex justify-center w-1/5 p-3 text-2xl text-white font-bold bg-purple-950 rounded-xl"
        >
            Main Page
        </a>
      </div>
    </div>
  </body>
  <script>
    function getCurrentDate() {
        var currentDate = new Date();
        var day = currentDate.getDate();
        var month = currentDate.getMonth() + 1;
        var year = currentDate.getFullYear();

        if (day < 10) {
            day = '0' + day;
        }
        if (month < 10) {
            month = '0' + month;
        }

        var formattedDate = day + '-' + month + '-' + year;
        var futureDate = day + '-' + month + '-' + (currentDate.getFullYear() + 1);

        for (var i = 0; i < document.getElementsByClassName('currentDate').length; i++) {
          document.getElementsByClassName('currentDate')[i].innerHTML = formattedDate;
        }
        for (var i = 0; i < document.getElementsByClassName('futureDate').length; i++) {
          document.getElementsByClassName('futureDate')[i].innerHTML = futureDate;
        }
        console.log(document.getElementsByClassName('futureDate'));
    }
  </script>
</html>
