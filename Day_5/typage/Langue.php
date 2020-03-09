<?php 
/**
 * 
 */
class Langue
{
	private $langue='francais';
	public function getLangue()
	{
		return $this->langue;
	}
	public function getTypeObjet(Francais $france)
	{
		// Langue par défaut français
		if ($france->français == NULL) {
			return $this->langue;
		} else {
			$this->langue = $france->français;
		}
	}
}

 ?>