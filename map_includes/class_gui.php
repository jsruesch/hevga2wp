<?
	class gui {
		var $agent_info = "";
		var $the_OS = "";
		var $the_browser = "";
		var $browser_type = "";

		function gui($php_agent_info){

			$this->agent_info = $php_agent_info;
			//print($php_agent_info); die();

			if (preg_match("/windows/i",$php_agent_info)) 		{ $this->the_OS = "win"; } else
			if (preg_match("/macintosh/i",$php_agent_info)) 	{ $this->the_OS = "mac"; } else
			if (preg_match("/linux/i",$php_agent_info)) 		{ $this->the_OS = "linux"; } else
			{ $this->the_OS="other"; }

			if (preg_match("/msie/i",$php_agent_info)) { $browser = "ie"; } else
			if (preg_match("/gecko/i",$php_agent_info)) { $browser = "mz"; } else
			if (preg_match("/opera/i",$php_agent_info)) { $browser = "op"; } else
			if (preg_match("/safari/i",$php_agent_info)) { $browser = "sf"; } else { $browser = "other"; }
			if (preg_match("/85/i",$php_agent_info)) { $browser = "sf8"; }

			$this->the_browser = $browser;
			$this->browser_type = $this->the_OS."_".$browser; //print( $this->browser_type ); die();
		}
	}
?>