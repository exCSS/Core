<?php

	class Grid
	{
	
		public $element_array;
		public function __construct($parts, $height, $props)
		{
			$props = explode("-", $props);
			$size = 100 / $parts;
			$used = 0;
			$this->element_array = array();
			for($counter = 0;$used < 100;$counter++)
			{ 
				$element_size = $size * $props[$counter];
				array_push($this->element_array, $element_size);
				$used += $element_size;
			}
		}
		
		public function generateCSS($element, $pos)
		{
			$element_width = $this->element_array[$pos-1];
			return "\n\n" . $element . " {\n\n\twidth: " . $element_width."%;\n\tdisplay: table-cell;\n\n}";
			// $element { $element_width }
		}
	
	}

?>