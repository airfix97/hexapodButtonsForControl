<html>

<head>

<meta name="viewport" content="width=device-width" />

<title>Controls For Hexapod</title>

</head>

       <body>

       <center><b><font size = '20'>Leg moment buttons</b>       

         <form method="get" action="index.php">                 

                 <input type="submit" style = "font-size: 16 pt" value="leg1" name="leg1">

                 <input type="submit" style = "font-size: 16 pt" value="leg2" name="leg2">
		 
		 <input type="submit" style = "font-size: 16 pt" value="leg3" name="leg3">
		 
		 <input type="submit" style = "font-size: 16 pt" value="leg4" name="leg4">
		 
		 <input type="submit" style = "font-size: 16 pt" value="leg5" name="leg5">
		 
		 <input type="submit" style = "font-size: 16 pt" value="leg6" name="leg6">
		 
		 <input type="submit" style = "font-size: 16 pt" value="tripod" name="tripod">
		 
		 
         </form>

         <?php

         shell_exec("gpio -g mode 17 out");

         if(isset($_GET['leg1']))

         {

		echo "leg 1 motion";

		 shell_exec("python3 /home/pi/leg1.py");

		         }

	else if(isset($_GET['leg2']))

	{

		echo "leg 2 motion";

		shell_exec("python3 /home/pi/leg2.py");

		}
	
	else if(isset($_GET['leg3']))

	{

		echo "leg 3 motion";

		shell_exec("python3 /home/pi/leg3.py");

		}

	else if(isset($_GET['leg4']))

	{

		echo "leg 4 motion";

		shell_exec("python3 /home/pi/leg4.py");

		}

	else if(isset($_GET['leg5']))

	{

		echo "leg 5 motion";

		shell_exec("python3 /home/pi/leg5.py");

		}

	else if(isset($_GET['leg6']))

	{

		echo "leg 6 motion";

		shell_exec("python3 /home/pi/leg6.py");

		}

	else if(isset($_GET['tripod']))

	{

		echo "tripod motion";

		shell_exec("python3 /home/pi/tripod.py");

		}

        ?>

   </center></font>

   </body>

 </html>

