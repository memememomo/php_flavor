<?php

require_once 'model/Base.php';

class Model_Sample extends Model_Base
{
    public function users() {
        return array(
            array(
                'id' => 1,
                'name' => 'test1',
            ),
            array(
                'id' => 2,
                'name' => 'test2',
            )
        );
    }
}
