<?php
require "../../connectdatabase/connect.php";

if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $address = $_POST["Address"];
  $useremail = $_POST["useremail"];
  $userpassword = $_POST["password"];
  $confirmpassword = $_POST["cpassword"];
  $x=1;
    if($userpassword==$confirmpassword){
    
        $q=mysqli_query($connect,"select email from registration");
        while($r=mysqli_fetch_array($q))
        {
          if($useremail==$r['email'])
          {
            $x=0;
            break;
          }
        }
        if($x==0)
        {
          $errorx="already this email use to registration";
        }
        else{

            if(empty($username)){
                $error2="pleace enter your name";
              }
              else if(empty($useremail))
              {
                $error3="pleace enter your name";
              }
              else if(empty($userpassword)){
                $error4="pleace enter password";
              }
               else{
              $query=mysqli_query($connect,"insert into registration(name,address,email,password) 
              values('$username',' $address','$useremail','$userpassword')");
              header('Location:./login.php');
             
              }

        }

    }  
    else{
        $error1="not match password";
    }
 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dreamland</title>
    <link rel="stylesheet" href="">
</head>

<body class="bg-indigo-100">
 
    <nav class="bg-white w-full z-20 top-0 left-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="#" class="flex items-center">
            <img src="../../assets/images/logo.png" class="h-8 mr-3" alt=" Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap"><span
                class="text-indigo-950">DREAM</span><span class="text-indigo-800">LAND</span></span>
          </a>
          <div class="flex md:order-2">
    
            <div>
            
              <button type="button"
                class="text-indigo-800 hover:text-white border-2 border-indigo-800 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-white dark:hover:bg-indigo-800">
                Back
              </button>
            </div>
     
         
    
            <button data-collapse-toggle="navbar-sticky" type="button"
              class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
              aria-controls="navbar-sticky" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M1 1h15M1 7h15M1 13h15" />
              </svg>
            </button>
          </div>
          <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
              class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white text-gray-300">
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent text-indigo-800 md:p-0 0"
                  aria-current="page">Home</a>
              </li>
              <li>
                <a href="#"
                  class="block py-2 pl-3 pr-4 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 md:dark:hover:text-indigo-800 dark:hover:bg-gray-700 md:dark:hover:bg-transparent dark:border-gray-700">About</a>
              </li>
         
              <li>
                <a href="#"
                  class="block py-2 pl-3 pr-4 text-gray-400 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 md:dark:hover:text-indigo-800 dark:hover:bg-gray-700 md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!--from-->
    <div class="max-w-xl mx-auto  mb-10 bg-white rounded-md px-6 pb-6 mt-10">
        <div class="mx-auto mb-4 w-32 pt-2">
            <img src="../../assets/images/logo.png" alt="Logo.png" />
        </div>
        <p class="font-semibold text-3xl mb-14">Hey There!!! Welcome Back.</p>
        <form  action="" method="post">
            <div class="mb-4">
                <label  for="name" class="block text-black mb-2">
                    Name
                </label>
                <input type="text" id="name" name="username"
                    class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3"
                    placeholder="Enter your name" required />
            </div>

            <div class="mb-4">
                <label  for="Address" class="block text-black mb-2">
                    Address
                </label>
                <input type="text" id="Address" name="Address"
                    class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3"
                    placeholder="Enter your Address" required />
            </div>

            <div class="mb-4">
                <label  for="email" class="block text-black mb-2">
                    Email
                </label>
                <input type="email" id="email" name="useremail"
                    class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3"
                    placeholder="Enter Email" required />
            </div>

            <label  for="password" class="block text-black mb-2" required>
                Password
            </label>
            <div class=" relative flex  items-center">
                <input type="password" id="password" name="password"
                    class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3 pr-10"
                    placeholder="Enter Password" required />

            </div>

            <label  for="cpassword" class="block text-black mt-2 mb-2" required>
               Confirm Password
            </label>
            <div class=" relative flex  items-center mb-2">
                <input type="password" id="cpassword" name="cpassword"
                    class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3 pr-10"
                    placeholder="Enter Confirm Password" required />

            </div>
            
   

            <div>
           

                <input type="submit" value="Sign up" name="submit" class="px-4 py-3 w-full bg-blue-500 text-white font-semibold rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
               
            </div>

        </form>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>