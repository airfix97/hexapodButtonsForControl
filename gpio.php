shell_exec("gpio -g mode 17 out");

if(isset($_GET['off']))
{

echo "LED is off";

shell_exec("gpio -g write 17 0");

}

else if(isset($_GET['on']))

{

echo "LED is on";

shell_exec("gpio -g write 17 1");

}

else if(isset($_GET['blink']))
{

echo "LED is blinking";

for($x = 0;$x<=4;$x++)

{

shell_exec("gpio -g write 17 1");

sleep(1);

shell_exec("gpio -g write 17 0");

sleep(1);

}

}
