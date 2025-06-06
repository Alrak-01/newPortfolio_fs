<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- Tailwind CSS CDN -->
      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-screen h-screen flex items-center justify-center bg-gray-100 relative overflow-y-hidden px-10">
  <div class="flex items-center justify-between bg-white shadow-lg rounded-lg overflow-hidden md:w-1/2 w-full h-[80vh]">
    <!-- Right Form Section -->
    <div class="right w-full p-8 md:p-16">
      <h3 class="text-center text-3xl whitespace-nowrap pb-5 font-semibold text-gray-700">Welcome back <span class="text-[#556B2F] font-bold italic">AlraCode</span></h3>
      <h2 class="text-3xl font-bold text-gray-700 mb-6">Login</h2>
      <!-- FORM BEGINS -->
      <!-- <form method="post" id="formSubmit" class="space-y-6"> -->
      <form method="post" action="../includes/login.inc.php" class="space-y-6">

        <div class="email">
          <label for="email" class="block text-sm font-medium text-gray-600 mb-2">E-mail</label>
          <input type="email" name="email" id="email" class="w-full px-4 py-3 border rounded-md focus:ring-2 focus:ring-[#556B2F] focus:outline-none duration-200 delay-100 transition-all ease-in-out" placeholder="Enter your email" >
        </div>
        <div class="password">
          <label for="password" class="block text-sm font-medium text-gray-600 mb-2">Password</label>
          <input type="password" name="password" id="password" class="w-full px-4 py-3 border rounded-md focus:ring-2 focus:ring-[#556B2F] focus:outline-none duration-200 delay-100 transition-all ease-in-out" placeholder="Enter your password" >
        </div>
        <button type="submit" id="loginSubmit" name="loginSubmit" class="w-full py-3 bg-[#556B2F] text-white font-semibold rounded-md hover:bg-opacity-80 transition">Login</button>
        <a href="forget_password.php" class="text-blue-600 font-semibold hover:text-blue-700 delay-100 duration-200">Forget Password ?</a>
      </form>
    </div>
  </div>
</div>
  </body>
</html>
