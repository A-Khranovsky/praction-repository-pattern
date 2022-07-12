<?php

namespace Repository;

use Member\Member;

interface MyRepositoryInterface
{
    public function save(Member $member);
    public function getAll();
    public function findById(Member $member);
}
