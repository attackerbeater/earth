<?php 

namespace App\Controller;

use \App\Api\HumanRepositoryInterface;
use \App\Model\HumanFactory;
use \App\Controller\BaseController;

class EarthController extends BaseController
{	

	protected $humanRepository;
	protected $humanFactory;

	public function __construct(
		HumanRepositoryInterface $humanFactoryRepository,
		HumanFactory $humanFactory		
	){
		$this->humanRepository = $humanFactoryRepository;
		$this->humanFactory = $humanFactory;
	}			

	public function execute()
	{
		$data = [];

		// die();



		// Filipino 
		$humanFactory = $this->humanFactory->create();
		$humanFactory->setNationality('Filipino');
		$humanFactory->setName('John');


		try {
			var_dump($this->humanRepository->save($humanFactory));	
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		
		// $data[] =  $humanFactory->getNationality();

		// Australian
		// $humanFactory = $this->humanFactory->create();
		// $humanFactory->setNationality('Australian');
		// $humanFactory->setName('haha');
		// // $data[] =  $humanFactory->getNationality();
		// $data = $this->humanRepository->save($humanFactory);

		// // Japanese
		// $humanFactory = $this->humanFactory->create();
		// $humanFactory->setNationality('Japanese');
		// $humanFactory->setName('Wang bu');
		// // $data[] =  $humanFactory->getNationality();
		// $data = $this->humanRepository->save($humanFactory);

		// return (array)$data;
	} 

}