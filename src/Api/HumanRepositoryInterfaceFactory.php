<?php 

namespace App\Api;

use \App\Api\HumanRepositoryInterface;
use \App\Api\Data\HumanInterface;
/**
 * @inheritDoc
 */
class HumanRepositoryInterfaceFactory implements HumanRepositoryInterface
{
	public function save(HumanInterface $object)
	{
		return $object;
	}

	public function getById($id)
	{

	}

	public function delete(HumanInterface $object)
	{

	}

	public function deleteById($id)
	{

	}
}