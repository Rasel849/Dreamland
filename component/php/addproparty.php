<?php
require "../../connectdatabase/connect.php";

if(isset($_POST["submit"]))
{
$image_name=$_FILES["image_str"]["name"];
  $ownername=$_POST["ownername"];
  $number=$_POST["phone"];
  $email=$_POST["email"];
  $address=$_POST["address"];
  $khotian=$_POST["khotian"];
  $type=$_POST["type"];
  $location=$_POST["propartyl"];
  $price=$_POST["price"];
  $details=$_POST["details"];

  
  if(empty($ownername) && empty($number) && empty($email) && empty($address) && empty($khotian)  && empty($type) && empty($location) && empty($price) && empty($details) && empty($image_name) )
  {
    $error1="Pleace complete form";
  }



  else{
      $query=mysqli_query($connect,"insert into propartyinfo(ownername,number,email,address,khotian,type,location,price,details,image)
  values(' $ownername','$number','$email','$address','$khotian','$type',' $location','$price','$details','$image_name')");
 
  }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamLanld</title>
    <link rel="stylesheet" href="../featured.css/pro.css">
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
    
            <div>
                <a href="../indexlogin.php"></a>
            
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

    <!--dreamland-->
    <div class="max-w-xl mx-auto my-4 p-6 bg-white rounded-md ">
        <div class="mx-auto mb-10 w-32">
            <img src="../../assets/images/logo.png" alt="Logo.png" />
        </div>
        

        <form action="" enctype="multipart/form-data" method="post">
            <div class="mb-5">
                <h3 class="font-bold text-xl">Owner Information: </h3>
            </div>
            <div class="mb-4">
                <label  for="name" class="block text-black mb-2">
                    Owner Name
                </label>
                <input type="text" id="name" name="ownername"
                    class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3"
                    placeholder="Enter Owner name" required />
            </div>

            <div class="mb-4">
                <label  for="phone" class="block text-black mb-2">
                    Phone Number
                </label>
                <input type="number" id="phone" name="phone"
                    class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3"
                    placeholder="Enter Owner Phone Number" required />
            </div>

            <div class="mb-4">
                <label  for="email" class="block text-black mb-2">
                    Email
                </label>
                <input type="email" id="email" name="email"
                    class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3"
                    placeholder="Enter Email" required />
            </div>
            <div class="mb-4">
                <label  for="Address" class="block text-black mb-2">
                    Owner Address
                </label>
                <input type="text" id="Address" name="address"
                    class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3"
                    placeholder="Enter Owner Address" required />
            </div>


            <div class="mb-5">
                <h3 class="font-bold text-xl">Proparty Information Information: </h3>
            </div>

            <div class="mb-4">
                <label  for="khotian" class="block text-black mb-2">
                    Khotian Number
                </label>
                <input type="text" id="khotian" name="khotian"
                    class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3"
                    placeholder="Enter Property Khotian Number" required />
            </div>

            
            <div class="mb-4">
                <label  for="propertytype" class="block text-black mb-2">
                    Property type
                </label>
                <select id="propertytype" name="type" class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3">
                    <option value="">Select</option>
                    <option value="Home">Home</option>
                    <option value="Residential">Residential</option>
                    <option value="Land">Land</option>
                    <option value="Shop">shop</option>
                </select>
          
            </div>

            <div class="mb-4">
                <label  for="Propartyl " class="block text-black mb-2">
                    Property location
                </label>
                <input type="text" id="Propartyl " name="propartyl" class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3"
                    placeholder="Enter Property location" required />
            </div>



            <div class="mb-4">
                <label  for="Price " class="block text-black mb-2">
                    Price
                </label>
                <input type="number" id="Price " name="price"
                    class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3"
                    placeholder="Enter Property Price" required />
            </div>


            <div class="mb-4">
                <label  for="details " class="block text-black mb-2">
                    Proparty details
                </label>
                    <textarea  name="details" id="details" cols="30" rows="5" placeholder="Enter Property details"
                     class="w-full border-0 focus:outline-none bg-gray-100 rounded-md px-3 py-3" ></textarea>
            </div>

            <div class="mb-4">
                <label  for="propertyimg " class="block text-black ">
                    <span class="mb-10">Upload Proparty Image</span>

                    <div class="doctor_image mb-5" id="propertyimg">
                        <div class="doctor_image1">
                            <input type="file" id="image-input" class="image_file" accept="image/jpeg, image/png, image/jpg"
                                name="image_str">
                            <label for="image-input" class="im_inp_dis">
                                <div id="display-image"></div>
                                <div>
                                    <i class="fa fa-camera cam" for="up_im"></i>
                                </div>
                            </label>
                        </div>
                    </div>
              
            </div>
            <div class="text-red-800 font-bold"><?php echo isset($error1)?$error1:""?></div>
           

            <div>

                <input type="submit" value="Submit" name="submit" class="px-4 py-3 w-full bg-blue-500 text-white font-semibold rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">

            </div>
           
        </form>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>