<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $file = file('registered_users.txt', FILE_IGNORE_NEW_LINES);

  foreach ($file as $line) {
    $userData = explode('#', $line);
    $userName = $userData[0];
    $userPhone = $userData[1];
    $userGender = $userData[2];
    $userEmail = $userData[3];
    $userPassword = $userData[4];

    if ($userEmail === $email && $userPassword === $password) {
      $_SESSION['loggedIn'] = true;
      $_SESSION['userName'] = $userName;
      $_SESSION['userPhone'] = $userPhone;
      $_SESSION['userGender'] = $userGender;
      $_SESSION['userEmail'] = $userEmail;
      header("Location: index.php");
      exit();
    }
  }

  $error = "Invalid email or password.";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="../css/index.css" rel="stylesheet" />
  <link href="../css/homepage.css" rel="stylesheet" />
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
      </div>
    </div>

  <div class="w-full h-16 lg:h-24 z-10"></div>
  <div class="flex flex-col justify-center w-full h-[720px]">
      <div class="flex items-center w-4/5 xl:w-3/4 h-3/4 bg-gray-50">
        <div class="flex justify-center items-center w-1/2 h-3/4 border-r-2">
          <div class="text-end">
            <h1 class="text-2xl xl:text-4xl font-bold">
              Get Your Ticket Pass Now
            </h1>
            <h2 class="">Login With Your Credentials</h2>
          </div>
        </div>
        <div class="flex flex-col justify-center items-center w-1/2">
          <?php if (isset($_GET['success'])) echo "<p class='p-3 mb-3 bg-green-500 text-white'>Registration successful! Please log in.</p>"; ?>
          <?php if (isset($error)) echo "<p class='p-3 mb-3 bg-red-500 text-white'>$error</p>"; ?>
          <form class="w-1/2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="email">Email</label><br />
            <input
              class="w-full rounded-xl mb-3 p-1"
              type="email"
              id="email"
              name="email"
              placeholder="Enter your email"
              required
            /><br />

            <label for="password">Password:</label><br />
            <input
              class="w-full rounded-xl mb-5 p-1"
              type="password"
              id="password"
              name="password"
              placeholder="Enter your password"
              required
            /><br />

            <div class="flex justify-center w-full">
              <button
                class="w-3/4 rounded-xl p-3 bg-purple-950 text-white"
                type="submit"
              >
                Login
              </button>
            </div>

          </form>
        </div>
      </div>

  <!-- <form method="post" action="">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>

    <input type="submit" value="Login">
  </form> -->
</body>
</html>