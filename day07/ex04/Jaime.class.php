<?php

class Jaime extends Lannister
{
	public function sleep_with($sbdy)
	{
		if ($sbdy instanceof Cersei)
		{
			return "With pleasure, but only in a tower in Winterfell, then.\n"; 
		}
		else if ($sbdy instanceof Tyrion)
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