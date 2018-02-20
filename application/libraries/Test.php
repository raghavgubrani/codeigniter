<?php
/**
* 
*/
class Test
{
	
	public function abc()
	{
		$ci = &get_instance();
		$ci->load->helper('array');

		echo "Publi function for custiom librery";
	}
}
?>
