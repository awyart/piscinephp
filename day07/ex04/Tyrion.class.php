<?php

class Tyrion extends Lannister
{
	public function sleep_with($sbdy)
	{
		if ($sbdy instanceof Cersei)
		{
			return "Not even if I'm drunk !\n"; 
		}
		else if ($sbdy instanceof Jaime)
		{
			return "Not even if I'm drunk !\n";
		}
		else if ($sbdy instanceof Sansa)
		{
			return "Let's do this\n";
		}
	}
}
?>