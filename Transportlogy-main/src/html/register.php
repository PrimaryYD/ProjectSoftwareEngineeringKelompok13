<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $password = $_POST['password'];

  $userData = "$name#$phone#$gender#$email#$password\n";

  $error = '';
  $file = file('registered_users.txt', FILE_IGNORE_NEW_LINES);

  foreach ($file as $line) {
    $userDataArray = explode('#', $line);
    $userName = $userDataArray[0];
    $userPhone = $userDataArray[1];
    $userGender = $userDataArray[2];
    $userEmail = $userDataArray[3];
    $userPassword = $userDataArray[4];

    if ($userEmail === $email) {
      $error = "Email is already registered.";
    }
  }
    
  if($error == ''){
    $fileWrite = fopen('registered_users.txt', 'a');
    fwrite($fileWrite, $userData);
    fclose($fileWrite);
    
    $success = "Registration successful! Please log in.";
    header("Location: login.php?success=" . urlencode($success));
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
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
            <h2 class="">Register With Your Credentials</h2>
          </div>
        </div>
        <div class="flex flex-col justify-center items-center w-1/2">
          <?php if (isset($error) && $error != '') echo "<p class='p-3 mb-3 bg-red-500 text-white  '>$error</p>"; ?>
          <form class="w-1/2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="name">Name</label><br />
            <input
              class="w-full rounded-xl mb-3 p-1"
              type="text"
              id="name"
              name="name"
              placeholder="Enter your name"
              required
            /><br />

            <label for="email">Email</label><br />
            <input
              class="w-full rounded-xl mb-3 p-1"
              type="email"
              id="email"
              name="email"
              placeholder="Enter your email"
              required
            /><br />

            <label for="phone">Phone Number</label><br />
            <input
              class="w-full rounded-xl mb-3 p-1"
              type="tel"
              id="phone"
              name="phone"
              placeholder="Enter your phone number"
              required
            /><br />

            <label for="gender">Gender:</label><br />
            <select class="mb-3 p-1" id="gender" name="gender" required>
              <option value="">Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option></select
            ><br />

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
                Register
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
