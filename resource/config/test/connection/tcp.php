<?php
/**
<<<<<<< HEAD
 * Created by PhpStorm.
 * User: heize
 * Date: 16/4/5
 * Time: 下午4:53
=======
 * Created by IntelliJ IDEA.
 * User: Demon
 * Date: 16/6/22
 * Time: 下午3:10
>>>>>>> add_qatest_config
 */

return [
    'trace' => [
        'engine'=> 'tcp',
        'host' => '10.9.37.103',
        'port' => '2280',
        'timeout' => 5000,
        'hasRecv' => false,
        'config'    => [
            'open_length_check' => 1,
            'package_length_type' => 'N',
            'package_length_offset' => 0,
            'package_body_offset' => 0,
            'open_nova_protocol' => 1
        ],
        'pool'  => [
            'keeping-sleep-time' => 10000,
            'init-connection'=> 2,
        ],
    ],
];
