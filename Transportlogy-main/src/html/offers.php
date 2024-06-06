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
    <link href="../css/offers.css?v=1" rel="stylesheet" />
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
    <div class="relative flex justify-center items-center w-screen h-[1400px]">
      <div class="grid grid-cols-1 xl:grid-cols-2 w-3/4 2xl:w-3/5 h-3/4 z-10">
        <div class="flex justify-center xl:justify-end p-5">
          <div
            id="card1"
            class="card flex flex-col justify-between items-center self-center w-5/6 h-full text-center px-8 py-5 mb-16 xl:mb-0 rounded-3xl shadow-2xl z-10"
            onClick="redirectPage(1)"
          >
            <div class="flex flex-col justify-between h-3/4">
              <div class="flex justify-center w-full">
                <img class="h-24" src="../img/1.png" />
              </div>
              <h2 class="text-3xl">Month Pass</h2>
              <div>
                Explore Tangerang for 30 days with the convenience of unlimited
                rides. This pass is perfect for visitors or those new to the
                city.
              </div>
              <div>More Info</div>
            </div>
            <div class="flex flex-col justify-between items-center h-1/6">
              <div class="text-3xl font-bold">Rp. 799.000,-</div>
              <div class="w-2/3 text-xs">
                This pass is only available for Buses, and Trains
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-center xl:justify-start p-5">
          <div
            id="card2"
            class="card flex flex-col justify-between items-center self-center w-5/6 h-full text-center px-8 py-5 mb-16 xl:mb-0 rounded-3xl shadow-2xl z-10"
            onClick="redirectPage(2)"
          >
            <div class="flex flex-col justify-between h-3/4">
              <div class="flex justify-center w-full">
                <img class="h-24" src="../img/3.png" />
              </div>
              <h2 class="text-3xl">Month Pass</h2>
              <div>
                Enjoy 3 months of hassle-free travel across Tangerang with this
                pass. Experience the city's diverse neighborhoods and hidden
                gems without worrying about fares.
              </div>
              <div>More Info</div>
            </div>
            <div class="flex flex-col justify-between items-center h-1/6">
              <div class="text-3xl font-bold">Rp. 2.299.000,-</div>
              <div class="w-2/3 text-xs">
                This pass is only available for Buses, Trains, and Taxis
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-center xl:justify-end p-5">
          <div
            id="card3"
            class="card flex flex-col justify-between items-center self-center w-5/6 h-full text-center px-8 py-5 mb-16 xl:mb-0 rounded-3xl shadow-2xl z-10"
            onClick="redirectPage(3)"
          >
            <div class="flex flex-col justify-between h-3/4">
              <div class="flex justify-center w-full">
                <img class="h-24" src="../img/6.png" />
              </div>
              <h2 class="text-3xl">Month Pass</h2>
              <div>
                Become a Tangerang transit pro with this extended 6-month pass.
                This option is ideal for those who rely on public transportation
                and want to save on fares over a longer period.
              </div>
              <div>More Info</div>
            </div>
            <div class="flex flex-col justify-between items-center h-1/6">
              <div class="text-3xl font-bold">Rp. 3.899.000,-</div>
              <div class="w-2/3 text-xs">
                This pass is only available for Buses, Trains, and Taxis
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-center xl:justify-start p-5">
          <div
            id="card4"
            class="card flex flex-col justify-between items-center self-center w-5/6 h-full text-center px-8 py-5 mb-16 xl:mb-0 rounded-3xl shadow-2xl z-10"
            onClick="redirectPage(4)"
          >
            <div class="flex flex-col justify-between h-3/4">
              <div class="flex justify-center w-full">
                <img class="h-24" src="../img/12.png" />
              </div>
              <h2 class="text-3xl">Month Pass</h2>
              <div>
                Get the most out of Tangerang with unlimited rides for a whole
                year! This pass is the most cost-effective option for frequent
                riders and those who truly want to immerse themselves in the
                city. Enjoy the ultimate freedom and explore Tangerang at your
                own pace.
              </div>
              <div>More Info</div>
            </div>
            <div class="flex flex-col justify-between items-center h-1/6">
              <div class="text-3xl font-bold">Rp. 6.599.999,-</div>
              <div class="w-3/4 text-xs">
                This pass is available for Buses, Trains, Taxis, and Online
                Transportations
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
    function redirectPage(pageIndex){
      console.log('hi' + pageIndex);
      switch(pageIndex){
        case 1:
          document.location.href = '1month.php';
          break;
        case 2:
          document.location.href = '3months.php';
          break;
        case 3:
          document.location.href = '6months.php';
          break;
        case 4:
          document.location.href = '12months.php';
          break;
        default:
          break;
      }
    }
  </script>
</html>
