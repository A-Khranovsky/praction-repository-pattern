<?php

namespace Repository;

class MyRepository implements MyRepositoryInterface
{
    public function save($member)
    {
        $data = serialize($member) . PHP_EOL;
        file_put_contents(__DIR__ . '\..\storage.txt', $data, FILE_APPEND);
    }

    public function getAll()
    {
        $data = file_get_contents(__DIR__ . '\..\storage.txt');
        if (!is_null($data)) {
            return  array_map(function ($item) {
                return unserialize($item);
            }, explode(PHP_EOL, $data));
        } else {
            return null;
        }
    }

    public function findById($member)
    {
        $source = $this->getAll();
        if (!is_null($source)) {
            return
                reset(
                    array_filter($source, function ($item) use ($member) {
                                return $item->id == $member->id;
                    })
                );
        } else {
            return false;
        }
    }
}
