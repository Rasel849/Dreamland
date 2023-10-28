<?php
require "../../connectdatabase/connect.php";
if(isset($_POST["submit"])){

    $useremail = $_POST["email"];
    $userpassword = $_POST["password"];
    $x=0;
  

    $user=mysqli_query($connect,"select * from  registration");
   
    while($row=mysqli_fetch_array($user))
    {
        if($row["email"] == $useremail && $row["password"]==$userpassword)
        {
            $x=0;
            header('Location:../indexlogin.php');
            

        }
        else{
            $x=1;
        }

    }
    if($x==1)
    {
        $error1="please try again";
    }
   

   

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>

<body>
<nav class="bg-white w-full z-20 top-0 left-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="#" class="flex items-center">
            <img src="../../assets/images/logo.png" class="h-8 mr-3" alt=" Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap"><span
                class="text-indigo-950">DREAM</span><span class="text-indigo-800">LAND</span></span>
          </a>
          <div class="flex md:order-2">
    
            <div href="../../index.php">
            
              <a href="../../index.php"
                class="text-indigo-800 hover:text-white border-2 border-indigo-800 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-white dark:hover:bg-indigo-800">
                Back 
            </a>
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


    <div class="max-w-xl mx-auto my-4 p-6 bg-white rounded-md ">
        <div class="mx-auto mb-10 w-32">
            <img src="../../assets/images/logo.png" alt="Logo.png" />
        </div>
        <p class="font-semibold text-3xl mb-14">Hey There!!! Welcome Back.</p>
        <form action="" method="post">
            <div class="mb-4">
                <label  for="email" class="block text-black mb-2">
                    Email
                </label>
                <input type="email" id="email" name="email"
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
            <div class="grid justify-items-end my-2 text-red-600 font-medium">
                <Link>Forget Password?</Link>
            </div>
            <div class="flex items-center mb-6 text-gray-400">
                <input type="checkbox" id="rememberMe" name="rememberMe"
                    class="form-checkbox text-gray-500 rounded-md w-4 h-4" />
                <label  for="rememberMe" class="ml-2">
                    Remember Me
                </label>
            </div>
            <div class="text-red-800 font-bold"><?php echo isset($error1)?$error1:""?></div>
            <div>
           

           <input type="submit" value="Sign up" name="submit" class="px-4 py-3 w-full bg-blue-500 text-white font-semibold rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
          
       </div>

            <div class="my-5 text-gray-500 text-center">
                <p>Or, Sign in with your email</p>
            </div>
            <div class="mx-auto mb-4">
                <button class="flex items-center justify-center gap-3 bg-gray-100 w-full py-3 rounded-md">
                    <img src="https://w7.pngwing.com/pngs/249/19/png-transparent-google-logo-g-suite-google-guava-google-plus-company-text-logo.png"
                        alt="" class="w-5" />
                    <p class="text-gray-500">Sign in with Google</p>
                </button>
            </div>
            <div class="mx-auto">
                <button class="flex items-center justify-center gap-3 bg-gray-100 w-full py-3 rounded-md">
                    <img src="https://static.vecteezy.com/system/resources/previews/023/986/613/non_2x/facebook-logo-facebook-logo-transparent-facebook-icon-transparent-free-free-png.png"
                        alt="" class="w-5" />
                    <p class="text-gray-500">Sign in with Facebook</p>
                </button>
            </div>

            <div class="mt-4 text-center">
                Don&apos;t have an account?
                <a href="./signup.php" class="text-indigo-800 hover:underline">Sign Up</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>