<?php

namespace Member;

class Member
{
	public $id;

	public function __construct($id)
	{
		$this->id = $id;
	}

	public function __sleep()
	{
		return [$this->id];
	}

	// public function __wakeup()
	// {
	// 	$this->id;
	// }
}