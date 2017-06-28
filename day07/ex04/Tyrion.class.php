<?php

class Tyrion extends Lannister
{
	public function sleepWith($sbdy)
	{
		if ($sbdy instanceof Lannister)
		{
			print("Not even if I'm drunk !\n");
			return;
		}
		else
		{
			print("Let's do this\n");
			return;
		}
	}
}
?>