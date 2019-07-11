<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 7/9/2019
 * Time: 6:45 PM
 */

abstract class ConnectDatabase{
    abstract public function connectDatabase();

    public function test(){
        echo "<br>".__METHOD__;
    }
}
