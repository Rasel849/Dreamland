<?php
require "../connectdatabase/connect.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dreamland</title>
  <link rel="stylesheet" href="../component/featured.css/featured.css" />
  <link rel="stylesheet" href="../component/featured.css/bannercss.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
</head>

<body>
  <!--navber-->
  <nav class="bg-white fixed w-full z-20 top-0 left-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center">
        <img src="../assets/images/logo.png" class="h-8 mr-3" alt=" Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap"><span
            class="text-indigo-950">DREAM</span><span class="text-indigo-800">LAND</span></span>
      </a>
      <div class="flex md:order-2">

        <div>
          <a href="#"  class='hover:text-violet-600  max-md:hidden mr-3'>
            <span  class='border-2 rounded-full px-1 pb-1 font-bold   bg-violet-600 border-violet-600 mr-2 text-white'>+</span> 
            Add New Property </a>

            <a href="../index.php" class="text-indigo-800 hover:text-white border-2 border-indigo-800 focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-white dark:hover:bg-indigo-800">
              sign out

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

  <!--banner-->
  <div class="mt-10 ">
    <div class="banner  flex items-center">
      <div class="bgcontain  h-full px-2 md:px-6">
        <h1 class="md:text-5xl text-2xl font-extrabold  mb-5">
          <span class=" text-indigo-950 md:ml-10">Find Your Best Dream House for Rental, <br></span>
          <span class="text-indigo-800 md:ml-10"> Buy & Sell...</span>
        </h1>
        <p class="md:text-2xl text-gray-600 font-medium md:ml-10 mb-5">
          Properties for buy / 
          rent in in your location. We have more than 3000+ <br> listings for you to choose
        </p>
        <div class="search  flex flex-col lg:flex-row justify-center gap-4">
          <input type="text" name="Location" placeholder=" Enter Address" id="">
          <input type="text" name="khatian" placeholder=" khatian number " id="">
          <input type="number" name="maxprice" placeholder="Max Price" id="">
          <input type="number" name="minprice" placeholder="minprice Price" id="">
          <input type="submit" class="items-center px-3 py-2 text-sm font-medium text-center text-white bg-indigo-800 rounded-lg hover:bg-white border-2 border-indigo-800 hover:text-indigo-800 focus:ring-4 focus:outline-none" value="Search">
  
  
        </div>

      </div>


  
    </div>
  
    
  
  </div>


  <!--featured-->
  <div class="bg-indigo-50 p-4 pt-5 pb-5">
    <div class="lg:container lg:mx-auto md:px-4 flex gap-4 lg:gap-y-8 flex-wrap justify-center mb-8">
      <div class="container">
        <div class="flex flex-col items-center">
          <div class="lg:text-4xl text-2xl font-black text-indigo-950">
            Featured Properties for Sales
          </div>
          <div class="secline">
            <span class="secline1"></span>
            <span class="secline2"></span>
          </div>
        </div>
      </div>

      <?php
      $allproparty=mysqli_query($connect,"select * from  propartyinfo");
      $couterofimg=0;

      while($row=mysqli_fetch_array($allproparty))
      {
        if($couterofimg==9)
        {
          break;
        }
        $couterofimg+=1;

      ?>

      <div class="item_main w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
        <a href="#">
          <div class="item_img">
            <img class="rounded-t-lg h-96 w-full" src="../assets/images/<?php echo $row["image"] ?>" alt="product image" />
          </div>
        </a>
        <div class="px-5 pb-5">
          <div class="flex items-center mt-2.5 mb-5">
            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="currentColor" viewBox="0 0 22 20">
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="currentColor" viewBox="0 0 22 20">
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="currentColor" viewBox="0 0 22 20">
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="currentColor" viewBox="0 0 22 20">
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-indigo-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="currentColor" viewBox="0 0 22 20">
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <span class="text-xs font-semibold pl-2.5 pr-1 py-0.5 rounded text-indigo-300 ml-4">
              5.0
            </span>
            <span class="text-indigo-300 text-xs font-semibold">
              (60 Reviews)
            </span>
          </div>
          <a href="#">
            <h2 class="text-2xl font-extrabold tracking-tight text-indigo-950">
            <?php echo $row["type"] ?>
            </h2>
          </a>
          <div class="text-sm py-2 font-semibold text-indigo-300">
            <span class="mr-1">
              <i class="bi bi-geo-alt"></i>
            </span>
            <span><?php echo $row["location"] ?></span>
          </div>

          <div>
            <h2 class="text-2xl font-extrabold tracking-tight mt-2 text-indigo-800">
              Price: <?php echo $row["price"] ?>TK
            </h2>
          </div>

          <div class="flex text-sm text-indigo-300 mt-5 justify-between">
            <div>
              <span class="font-semibold">Listed on:</span> 16 jan 2023
            </div>
            <div>
              <span class="font-semibold"> Category :</span> <?php echo $row["type"] ?>
            </div>
          </div>
        </div>
      </div>
      <?php
      }



      ?>


      <div class="container flex justify-center mt-10">
      <a href="./php/allproparty.php"
          class="hover:bg-white hover:text-indigo-800 bg-indigo-800 font-bold rounded-lg text-white border-2 px-5 py-4">
          View All Properties
    </a>
      </div>
    </div>
  </div>



  <!--Sell and buy -->
  <div class="mt-8">
    <div class="lg:container lg:mx-auto md:px-4  flex gap-4 lg:gap-y-8 flex-wrap justify-center mb-8 ">
      <div class="max-w-sm  bg-indigo-100 rounded-lg shadow  ">
        <a href="#">
          <div class="item_img">
            <img class="rounded-t-lg h-96 w-full" src="../assets/images/buy.png" alt="product image" />
          </div>
        </a>
        <div class="p-6">
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            "Invest in Your Future, Unlock the Door to Homeownership, and Make Your Dreams a Reality."
          </p>
          <a href="./php/addproparty.php"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-indigo-800 rounded-lg hover:bg-white border-2 border-indigo-800 hover:text-indigo-800 focus:ring-4 focus:outline-none">
            Sell a Proparty
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
          </a>
        </div>
    
      </div>
      <div class="max-w-sm  bg-indigo-100 rounded-lg shadow">
        <a href="#">
          <div class="item_img">
            <img class="rounded-t-lg h-96 w-full" src="../assets/images/sell.png" alt="product image" />
          </div>
        </a>
        <div class="p-6">
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            "Secure Your Future: Invest in Property, Build Wealth, and Find Comfort and Security in Your Own Space."
          </p>
          <a href="./php/allproparty.php"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-indigo-800 rounded-lg hover:bg-white border-2 border-indigo-800 hover:text-indigo-800 focus:ring-4 focus:outline-none">
            Buy a Proparty
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
          </a>
        </div>
    
      </div>

    </div>
  </div>

  <!--footer-->
  <div>
    <footer class="bg-indigo-950">
      <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
            <a href="/" class="flex items-center">
              <img src="{logo}" class="h-8 mr-3" alt="" />
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                DreamLand
              </span>
            </a>
            <div class="slogan text-white self-center text-1xl mt-5">
              Buy, Sell, Thrive: Your Property Journey Starts Here.
            </div>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                Location
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="/" class="hover:underline"> Rajshahi </a>
                </li>
                <li class="mb-4">
                  <a href="/" class="hover:underline"> Khulna </a>
                </li>
                <li class="mb-4">
                  <a href="/" class="hover:underline"> Pabna </a>
                </li>
                <li>
                  <a href="/" class="hover:underline"> Dhaka </a>
                </li>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                Categories
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="/" class="hover:underline"> Home </a>
                </li>
                <li class="mb-4">
                  <a href="/" class="hover:underline"> Office </a>
                </li>

                <li class="mb-4">
                  <a href="/" class="hover:underline"> Flat </a>
                </li>
                <li>
                  <a href="/" class="hover:underline"> Property </a>
                </li>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                Explore
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="#" class="hover:underline"> Listings </a>
                </li>
                <li class="mb-4">
                  <a href="#" class="hover:underline"> Agency </a>
                </li>
                <li class="mb-4">
                  <a href="#" class="hover:underline"> Login </a>
                </li>
                <li>
                  <a href="#" class="hover:underline"> Register </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
            © 2023
            <a href="/" class="hover:underline"> DREAMLAND </a>
            . All right reserved Dreamland
          </span>
          <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
            <a href="https://www.facebook.com/raselislam.babu.965"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 8 19">
                <path fill-rule="evenodd"
                  d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Facebook page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 21 16">
                <path
                  d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
              </svg>
              <span class="sr-only">Discord community</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 17">
                <path fill-rule="evenodd"
                  d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Twitter page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="sr-only">GitHub account</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                  clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Dribbble account</span>
            </a>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>