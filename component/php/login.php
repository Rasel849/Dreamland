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