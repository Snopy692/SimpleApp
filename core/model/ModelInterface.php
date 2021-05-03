<?php

namespace App\Model;

interface ModelInterface
{

    public function fromArray(array $properties);
    public function getId();
}
