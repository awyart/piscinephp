<?php

class Jaime extends Lannister
{
	public function sleepWith($sbdy)
	{
		if ($sbdy instanceof Cersei)
		{
			print("With pleasure, but only in a tower in Winterfell, then.\n");
			return; 
		}
		else if ($sbdy instanceof Lannister)
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