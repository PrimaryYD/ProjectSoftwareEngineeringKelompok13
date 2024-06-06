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
  <body>
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
            ><span class="navbar-item active">Home</span></a
          >
          <a href="offers.php" class="w-1/6"
            ><span class="navbar-item">Offers</span></a
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
    <div
      id="background-gradient1"
      class="relative flex justify-center items-center w-screen h-screen min-h-[720px]"
    >
      <div
        class="flex flex-col justify-evenly items-center w-1/2 min-h-96 z-20"
      >
        <div class="w-full text-center">
          <img src="../img/Transportlogy.png" />
        </div>
        <div class="w-1/2 text-center text-sm">
          The Freedom to Explore: Plan Your Trips and Ride for Free with
          Transportlogy.
        </div>
        <div class="w-full text-center">
          <a href="offers.php" class="w-1/4 p-3 bg-yellow-100 text-blue rounded-lg">
            See Offers
          </a>
        </div>
      </div>
    </div>
      <div id="background-gradient2">
      <div class="relative w-3/4 h-fit mb-32 mx-auto z-20">
        <h1 class="text-5xl text-center lg:text-start">BEST DEAL</h1>
        <br />
        <div
          id="banner-card"
          class="card flex flex-col lg:flex-row justify-between items-center w-full h-fit px-16 py-10 bg-purple-200 rounded-3xl"
          onClick="redirectPage(4)"
        >
            <div class="flex flex-col justify-between items-center text-4xl w-1/6 h-48">
              <img class="w-3/4 h-fit" src="../img/12.png" />
              <h1>Months Pass</h1>
            </div>
            <div class="flex justify-center items-center w-2/5 h-48">
              Get the most out of Tangerang with unlimited rides for a whole
              year! This pass is the most cost-effective option for frequent
              riders and those who truly want to immerse themselves in the city.
              Enjoy the ultimate freedom and explore Tangerang at your own pace.
            </div>
            <div class="flex flex-col justify-center items-end w-1/3 h-48">
              <h1 class="text-5xl text-black font-bold">Rp. 6.599.999</h1>
              <h2>More Info</h2>
            </div>
          </div>
        </div>
      <div class="relative w-3/4 h-fit mb-32 mx-auto">
        <h1 class="relative text-5xl text-center z-20">OFFERS</h1>
        <br />
        <div
          class="w-full flex flex-col xl:flex-row justify-between items-center z-20"
        >
          <div
            id="card1"
            class="card flex flex-col justify-between items-center text-center w-3/4 xl:w-[30%] h-[500px] px-8 py-5 mb-16 xl:mb-0 rounded-3xl shadow-2xl z-20"
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
          <div
            id="card2"
            class="card flex flex-col justify-between items-center text-center w-3/4 xl:w-[30%] h-[500px] px-8 py-5 mb-16 xl:mb-0 rounded-3xl shadow-2xl z-20"
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
          <div
            id="card3"
            class="card flex flex-col justify-between items-center text-center w-3/4 xl:w-[30%] h-[500px] px-8 py-5 mb-16 xl:mb-0 rounded-3xl shadow-2xl z-20"
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
      </div>
      <div
        class="relative w-3/4 flex flex-col lg:flex-row justify-between items-center h-fit mx-auto z-20"
      >
        <div
          class="flex flex-col justify-between w-full lg:w-2/5 min-h-80 mb-16 lg:mb-0"
        >
          <h1 class="relative text-5xl z-20">ABOUT US</h1>
          <br />
          <div>
            At the heart of Transportlogy lies our unique transportation ticket
            pass system. With a single pass, users gain unlimited access to a
            wide range of public transportation options, including buses,
            trains, and even taxis/online motorcycle taxis. This eliminates the
            hassle of purchasing individual tickets for each journey, saving
            both time and money.
          </div>
          <br />
          <div>
            Our mission is twofold: to simplify transportation access and
            promote eco-friendly mobility. By encouraging the use of public
            transportation, Transportlogy plays a crucial role in reducing
            traffic congestion and minimizing environmental impact. We envision
            a future where Tangerang's citizens can move freely and sustainably,
            enjoying the city's vibrant offerings without compromising the
            environment.
          </div>
        </div>
        <div class="flex justify-center w-full lg:w-1/2 h-72">
          <div
            id="smart-card"
            class="relative flex flex-col justify-between w-[500px] h-full border-white rounded-3xl border-4"
          >
            <img class="absolute w-8 h-8 top-3 right-3" src="../img/Logo.png" />
            <img
              class="absolute w-full h-full m-auto"
              src="../img/smart-card-bg.png"
            />
            <div class="w-full pt-12 px-8">
              <img class="" src="../img/Transportlogy.png" />
              <br />
              <h2 class="text-center text-xl">12 Months Pass</h2>
            </div>
            <div class="flex justify-between items-end w-full pb-4 px-8">
              <div class="text-start">
                <h3>John Doe</h3>
                <div class="text-xs">xx-xx-xxx to xx-xx-xxxx</div>
                <div class="text-xs">*Available only across Tangerang City</div>
              </div>
              <div class="text-end">
                <div class="text-xs">Bus rides for 12 months</div>
                <div class="text-xs">Online transportation for 12 months</div>
                <div class="text-xs">Taxis for 12 months</div>
                <div class="text-xs">Train tickets for 12 months</div>
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
