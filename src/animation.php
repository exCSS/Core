<?php
	class Parameter
	{
		public $parameter = array();
		
		public function __construct()
		{
			$this->parameter = array();
		}
		
		public function add($key, $val)
		{
			$this->parameter[$key] = $val;
		}
		
		public function get($key)
		{
			return $this->parameter[$key];
		}
		
		public function isAvailable($key)
		{
			return isset($this->parameter[$key]);
		}
		
	}
	class Animation
	{
	
		
	
		public function __construct($name, $object, $parameter)
		{
			$object_name = str_replace("#", "", $object);
			$object_name = str_replace(".", "", $object_name);
			
			$dur = "1s";
			$delay = "0s";
			if($parameter->isAvailable("duration"))
				$dur = $parameter->get("duration");
			if($parameter->isAvailable("delay"))
				$delay = $parameter->get("delay");
		
			print "\n" . $object . " {\n\n\t-webkit-animation: " . $name.$object_name . " " . $dur . " forwards;\n\tanimation-delay: " .$delay. ";\n\n}\n";
			
			//	!!!		ANIMATIONS BELOW	!!!		//
			
			// slideIn
			
			if($name == "slideInRight")
			{
				$range = "200px";
				$left = 0;
				if($parameter->isAvailable("range"))
					$range = $parameter->get("range");
				if($parameter->isAvailable("left"))
					$left = $parameter->get("left");
					
				print "@-webkit-keyframes slideInRight" .$object_name. " {0%{margin-left: ". $range ."} 100%{margin-left: ". $left .";}}";
			}
			
			if($name == "slideInLeft")
			{
				$range = "200px";
				$right = 0;
				if($parameter->isAvailable("range"))
					$range = $parameter->get("range");
				if($parameter->isAvailable("left"))
					$left = $parameter->get("left");
					
				print "@-webkit-keyframes slideInLeft" .$object_name. " {0%{margin-left: -". $range ."} 100%{margin-left: ". $left ."px;}}";
			}
			
			// fadeIn
			
			if($name == "fadeIn")
			{
			
				print "@-webkit-keyframes fadeIn".$object_name." {0%{visibility: hidden;opacity:0;} 100%{visiblility: visible; opacity: 1} }";
			
			}
		
			// fadeOut
			
			if($name == "fadeOut")
			{
			
				print "@-webkit-keyframes fadeOut".$object_name." {0%{visibility: visible;opacity:1;} 100%{visiblility: hidden; opacity: 0} }";
			
			}
			
		}
			
		}
		
?> 
