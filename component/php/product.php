
<?php
require "../../connectdatabase/connect.php";

$pid=$_GET["propartyid"];
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
                        <a href="#" class="text-blue-400 text-sm ml-8 ">Vsit member's shop</a>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>