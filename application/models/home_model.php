<?php
	class Home_model extends CI_Model {
		public function getNames(){
			$names=array(
				array("en"=>'Tuuve', "sn"=>'Luu'),
				array("en"=>'Dick', "sn"=>'Butt'),
				array("en"=>'Niska', "sn"=>'Laukauss')
				);
			return $names;
		}
	}

?>