<?php

interface Article
{
	public function getTitre();
	public function getAuteur();
	public function getResume();
	public function getContenu()
}

/**
* summary
*/
class BlogArticle implements Article
{

	public function getAuteur()
	{
		echo 'Hossein Alexandre';
	}
	public function getResume()
	{
		echo 'Petit résumé des familles';
	}
}
?>