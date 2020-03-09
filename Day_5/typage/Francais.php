<?php 
require_once 'Langue.php';

/**
 * 
 */
class Francais extends Langue
{
	public $francais;

	public function getFrancais()
	{
		return $this->francais;
	}
	
	public function setFrancais($langue)
	{
		return $this->francais = $langue;
	}
}

$langue = new langue;
$vernom_test = new Francais;
$vernom_test->setFrancais('anglais');
$langue->getTypeObjet($vernom_test);
print_r($langue->getLangue());
 ?>