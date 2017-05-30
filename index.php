<?php
	$data_value = '57077;BEZANGE LA PETITE;57630;BEZANGE LA PETITE;57086;BELLES FORETS;57930;BELLES FORETS;ANGVILLER LES BISPING;57089;BITCHE;57230;BITCHE;57096;BOULANGE;57655;BOULANGE;57097;BOULAY MOSELLE;57220;BOULAY;HALLING LES BOULAY';

	$explode = explode(";", $data_value);
	$c = 0;
	for($i=0;$i<count($explode);$i++) {
		
		if(!empty($explode[$i])) {
			if(!is_numeric($explode[$i])) {
				$c++;
			} else {
				$c = 0;
			}

			if($c < 2) {
				if(is_numeric($explode[$i])) {
	    			$data['postcode'] = $explode[$i];
	    		} else {
	    			$data['city'] = $explode[$i];
	    		}
			} else {
	    		$data['city'] = $explode[$i];

	    		echo '<pre>';
	    		print_r($data);
	    		echo '</pre>';
	    	}
		}

		if($i%2 == 1 && $i != 0) {
		    echo '<pre>';
    		print_r($data);
    		echo '</pre>';
		}
	}
?>