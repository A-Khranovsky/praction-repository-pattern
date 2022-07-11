<?php 

namespace Repository;

require_once (__DIR__ . '\..\Member\Member.php');

class MyRepository implements MyRepositoryInterface
{
	public function save($member)
	{
		$data = serialize($member) . PHP_EOL;
		file_put_contents(__DIR__ . '\..\storage.txt', $data, FILE_APPEND);
	}
	
	public function getAll()
	{
			return  array_map(function($item){
				return unserialize($item);
			}, explode(PHP_EOL, file_get_contents(__DIR__ . '\..\storage.txt')));		
	}

	public function findById($member)
	{
		$source = $this->getAll();
		return  
			array_filter($source,function($item){
							return $item->id == $member->id;
						}
					)
				;
	}
	
}