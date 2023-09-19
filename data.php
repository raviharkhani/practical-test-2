<?php
include('db.php');

    $user_data = $conn->query("SELECT * FROM `customer2`");
    ?>

  <html>
    <head>
        <title> user list </title>
        <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container ">
            
        <h1 class="text-center bg-black text-white ">tableview</h1>
        <table class="table table-bordered">
            <tr>
            <th class="text-center bg-black text-white">name</th> 
            <th class="text-center bg-black text-white">Email</th>
            <th class="text-center bg-black text-white">Date </th>
            
           
            </tr>
            <?php if ($user_data->num_rows > 0) {
                while ($display = $user_data->fetch_assoc()) { ?>
                <tr>  
                 <td class="text-center"><?php echo $display['name'];?></td>
                 <td class="text-center"><?php echo $display['email'];?></td>
                 <td class="text-center"><?php echo $display['date'];?></td>
                </tr>

        <?php       
             }
         } ?>
        </table>
        
        </div>
       
    </body>
  </html>

    <?php

    $conn->close();
?>