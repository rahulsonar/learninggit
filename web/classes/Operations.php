<?php

/**
 *
 * @file
 * Description of what this module (or file) is doing.
 * php version 7.4
 * @Description Entry point
 * @category    File
 * @package     Learninggit
 * @author      My Name <my.name@example.com>
 * @license     http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link        https://rahulsonar.com
 */
 
namespace learninggit;

class Operations
{
    /**
     * Add function
     * @param int $a
     *               first
     * @param int $b
     *               second number
     *
     * @return int $c
     **/
    public function add($a, $b)
    {
        $c = ($a+$b);
        return $c;
    }
}
