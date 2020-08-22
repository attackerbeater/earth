<?php 

namespace App\Model;

use App\Model\Human;

class HumanFactory
{
	protected $human;

	public function __construct(
		Human $human
	)
	{
		$this->human = $human;
	}

	public function create()
	{
		return $this->human;
	} 
}