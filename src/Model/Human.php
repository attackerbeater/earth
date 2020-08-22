<?php

namespace App\Model;

use \App\Api\Data\HumanInterface;

class Human implements HumanInterface 
{
	protected $nationality = [];
	protected $name = [];

	// nationality
	public function setNationality($nationality)
	{
		$this->nationality[] = $nationality;
	}	
		
	public function getNationality(){
		return $this->nationality;
	} 

	// name
	public function setName($name)
	{
		$this->name[] = $name;
	}	
		
	public function getName(){
		return $this->name;
	} 

	// lastname

	// address

} 

