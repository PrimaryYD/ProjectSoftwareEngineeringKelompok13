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
      <a href="1month.php"><img src="../img/left.webp" class="absolute top-2 -left-16 h-8 w-4"/></a>
      <h1 class="text-5xl mt-24 mb-12">PURCHASE CONFIRMATION</h1>
      <div class="flex flex-col w-3/4 h-fit px-12 py-5 bg-gray-50 mx-auto">
        <div class="">
            <div>
                You're one step away from enjoying convenient travel across Tangerang with your new public transport membership pass! This is a confirmation of your selections before you complete the purchase.
            </div>
            <div class="font-bold my-4">YOUR ORDER REVIEW</div>
            <div>pass type</div>
            <div class="text-4xl my-4">1 Month Pass</div>
            <div>Valid until <span class="futureDate"></span></div>
            <div class="my-1">Offer can be used only in Tangerang</div>
            <br />
            <hr />
        </div>
        <br />
        <div class="flex justify-between w-full">
            <div class="w-1/2 text-start">
                <div class="">Our Price</div>
                <h1 class="text-3xl my-4">Rp. 799.000</h1>
                <div class="text-sm font-bold">WHAT YOU GET</div>
                <div class="text-sm">Free bus rides for 1 month</div>
                <div class="text-sm">Free train tickets for 1 month</div>
            </div>
            <div class="flex flex-col items-end w-1/2 text-end">
                <div class="h-24">
                    <div class="text-sm font-bold">Diawasi Oleh:</div>
                    <img class="h-12 w-fit" src="../img/ojk.png" />
                </div>
                <div class="flex justify-between h-24 w-1/2">
                    <img class="h-6 w-fit" src="../img/qris.png" />
                    <img class="h-6 w-fit" src="../img/visa.png" />
                    <img class="h-6 w-fit" src="../img/mastercard.png" />
                    <img class="h-6 w-fit" src="../img/jcb.png" />
                </div>
            </div>
        </div>
        <br />
        <div class="flex justify-between w-full">
            <div class="w-1/2 text-start">
                <div class="text-sm font-bold">Virtual Membership Card</div>
                <div class="text-sm my-4">Upon successful purchase, you'll receive a virtual membership card. This digital card offers easy access to public transportation within Tangerang for the chosen validity period.</div>
                <div class="text-sm">The card only accessible to :</div>
                <div class="text-sm"></div>
            </div>
            <div class="flex flex-col items-end w-1/2 text-end">
                    <div
                        id="smart-card"
                        class="relative flex flex-col justify-between w-[350px] h-48 border-white rounded-3xl border-4"
                    >
                    <img class="absolute w-8 h-8 top-3 right-3" src="../img/Logo.png" />
                    <img
                        class="absolute w-full h-full m-auto"
                        src="../img/smart-card-bg.png"
                    />
                    <div class="w-full pt-12 px-8">
                        <img class="mb-2" src="../img/Transportlogy.png" />
                        <h2 class="text-center text-lg">1 Month Pass</h2>
                    </div>
                    <div class="flex justify-between items-end w-full pb-4 px-8">
                        <div class="text-start">
                            <?php
                              echo '<h3 class="text-[12px]">'.$_SESSION['userName'].'</h3>';
                            ?>
                            <div class="text-[8px]"><span class="currentDate"></span> to <span class="futureDate"></span></div>
                            <div class="text-[8px]">*Available only across Tangerang City</div>
                        </div>
                        <div class="text-end">
                            <div class="text-[8px]">Bus rides for 1 month</div>
                            <div class="text-[8px]">Taxis for 1 month</div>
                            <div class="text-[8px]">Train tickets for 1 month</div>
                        </div>
                    </div>
            </div>
        </div>
      </div>
      <br /><br /><br />
      <div class="flex justify-center w-full">
        <a
            href="1month.payment.php"
            class="inline-flex justify-center w-1/3 p-3 text-3xl text-white font-bold bg-purple-950 rounded-xl"
        >
            Confirm
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

        futureMonth = (currentDate.getMonth() + 1 + 1);
        if (futureMonth < 10){
            futureMonth = '0' + futureMonth;
        }
        var futureDate = day + '-' + futureMonth + '-' + year;

        for (var i = 0; i < document.getElementsByClassName('currentDate').length; i++) {
          document.getElementsByClassName('currentDate')[i].innerHTML = formattedDate;
        }
        for (var i = 0; i < document.getElementsByClassName('futureDate').length; i++) {
          document.getElementsByClassName('futureDate')[i].innerHTML = futureDate;
        }
    }
  </script>
</html>
