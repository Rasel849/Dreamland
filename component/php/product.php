
<?php
$pid = $_GET['propartyid'];
require "../../connectdatabase/connect.php";
$query=mysqli_query($connect,"select * from propartyinfo where id= '$pid' ");
$row=mysqli_fetch_array($query);
$image_name=$row['image'];
  $ownername=$row['ownername'];
  $number=$row['number'];
  $email=$row['email'];
  $address=$row['address'];
  $khotian=$row['khotian'];
  $type=$row['type'];
  $location=$row['location'];
  $price=$row['price'];
  $details=$row['details'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dreamland</title>
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
    
            <div href="./allproparty.php">
            
              <a href="./allproparty.php"
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


<!--Product-->
    <div class="bg-gray-100">
        <div class="w-9/12 mx-auto">
            <!-- title -->
            <div class="lg:flex justify-between mb-4 ">
                <div>
                    
                    <p class="text-md font-medium text-gray-500 " ><?php echo $address;?></p>
                </div>

            </div>
    
            <div class="lg:flex justify-between mt-3 ">
                <!-- left side content -->
                <div>
                    <!-- picture viwing section -->
                    <div>
                        <div class="relative max-w-2xl bg-gray-400 h-[500px] mr-3">
                            <a href="#"><img src="../../assets/images/<?php echo $image_name;?>" alt="zoom out" class="absolute right-3 w-7 h-7 bg-gray-800 p-1"></a>
                            <img src="../../assets/images/<?php echo $image_name;?>" alt="flat image " class="w-full h-full object-cover">
                        </div>
    
    
                        <!-- picture carousel -->

    
                        <div>
                            <h1 class="text-2xl text-teal-600 font-bold mt-3 mb-5" >Tk <?php echo $price;?> <span class="text-sm italic text-gray-400">Negotiable</span></h1>
                            <ul>
                                <li class="text-gray-950"><span class="text-xl text-gray-700">Address:</span> <?php echo $location;?></li>
                                <li class="text-gray-950"><span class="text-xl text-gray-700">Address:</span> <?php echo $details;?></li>

                            </ul>
                        </div>
                    </div>
                </div>
    
                <!-- right side content -->
                <div class="mt-4 lg:mt-0">
                    <!-- contact side -->
                    <div class=" border-2 border-gray-600 rounded-sm p-4 max-w-xl">
                        <div class="flex gap-4 items-center">
                          
                            <div class="">
                                <h1 class="text-xl text-gray-950 font-bold mb-2"><?php echo $ownername;?></h1>
                                <a href="#" class="text-sm bg-gray-600 rounded-sm text-gray-200 p-1 "><?php echo $email;?></a>
                                <h3  class="text-sm text-gray-950 font-bold mt-2">Khotian: <?php echo  $khotian;?></h3>
                                <a href="#" class="text-blue-400 text-sm"><?php echo  $type;?></a>
                            </div>
                        </div>
                        <hr class="border-1 border-gray-600 my-3">
                        <div class="flex gap-4 items-center">
                            
                            <div >
                                <h1 class="text-xl text-gray-950 font-bold mb-1"><?php echo $number;?></h1>
                                
                            </div>
                        </div>
                    

                    </div>
    
                    <!-- sefty tips -->
                    <div class=" border-2 border-teal-600 rounded-md p-4 mt-3 max-w-xl">
                        <div class="flex gap-4 items-center">
                            
                            <h1 class="text-xl text-gray-950 font-bold mb-2">safety tips</h1>
                        </div>
                        <ul class="list-disc ml-7 mb-3">
                            <li class="text-gray-600">Don't go to unfamillar places alone</li>
                            <li class="text-gray-600">Don't Make full payment to 3rd parties</li>
                        </ul>
                   
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>