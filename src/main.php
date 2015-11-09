<?php

	/*
	 * Copyright (C) 2015 Tom Messerschmidt
	 *
	 */
	 
	$VERSION="0.02";
	include 'parser.php';
	
	function IncludeCSS ($css, $ex)
	{
		$parser = new Parser;
		$parser->parse($ex, $css);
	}
	


?>