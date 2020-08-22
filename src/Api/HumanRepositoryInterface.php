<?php 

namespace App\Api;

use \App\Api\Data\HumanInterface;

interface HumanRepositoryInterface 
{	

	public function save(HumanInterface $object);

	public function getById($id);

	public function delete(HumanInterface $object);

	public function deleteById($id);

}