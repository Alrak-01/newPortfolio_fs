<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- Tailwind CSS CDN -->
      <script src="https://cdn.tailwindcss.com"></script>
      <!-- JQUERY CDN -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="w-screen h-screen flex items-center justify-center bg-gray-100 relative overflow-y-hidden px-10">
      <!-- DISPLAY MESSAGE STARTS -->
    <div id="message" class="message hidden bg-white text-white px-4 py-3 rounded-lg shadow-lg w-60 h-auto absolute -top-3 -right-3 m-4">
        <h3 class="displayMessage text-green-500 lg:text-base text-sm font-bold"></h3>
        <div id="progressBar" class="absolute bottom-0 left-0 h-1 bg-green-700 rounded-lg"></div>
    </div>
    <!-- DISPLAY MESSAGE ENDS -->
  <div class="bg-white shadow-lg rounded-lg overflow-hidden max-w-4x w-full md:w-[60vw] lg:w-2/5 h-auto">
    <div class="right w-full p-8 lg:p-4 md:p-16">
      <h3 class="text-center text-3xl whitespace-nowrap pb-3 font-semibold text-gray-700">Reset Password</h3>
      <h2 class="text-3xl font-bold text-gray-700 mb-6"></h2>
      <!-- FORM BEGINS -->
      <form method="post" action="../includes/login.inc.php?token=<?=$_GET['token']?>" class="space-y-6">
      <!-- <form method="post" id="formResetPassword" class="space-y-6"> -->
        <div class="password">
          <label for="password" class="block text-sm font-medium text-gray-600 mb-2">Password</label>
          <input type="password" name="password" id="password" class="w-full px-4 py-3 border rounded-md focus:ring-2 focus:ring-[#556B2F] focus:outline-none duration-200 delay-100 transition-all ease-in-out" placeholder="Enter your Password" >
        </div>
        <div class="cpassword">
          <label for="cpassword" class="block text-sm font-medium text-gray-600 mb-2">Confirm Password</label>
          <input type="password" name="cpassword" id="cpassword" class="w-full px-4 py-3 border rounded-md focus:ring-2 focus:ring-[#556B2F] focus:outline-none duration-200 delay-100 transition-all ease-in-out" placeholder="Confirm password" >
        </div>
        <button type="submit" id="resetPassword" name="resetPassword" class="w-full py-3 bg-[#556B2F] text-white font-semibold rounded-md hover:bg-opacity-80 transition">Login</button>
        <a href="login.php" class="text-blue-600 font-semibold hover:text-blue-700 delay-100 duration-200">Back to login!</a>
      </form>
    </div>
  </div>
</div>
  </body>
  <!-- JQUERY CDN -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="../jquery/message.jquery.js"></script>
  <script src="../jquery/login.jquery.js"></script>
  <script src="../../functions/function.js" charset="utf-8"></script> -->

</html>
