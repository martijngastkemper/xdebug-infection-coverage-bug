<?php

namespace App;

class MyClass
{
    public function multiLineArray() {
        $data = [
            1,
            2
        ];

        return array_sum($data);
    }

    public function singleLineArray() {
        $data = [3, 4];

        return array_sum($data);
    }
}