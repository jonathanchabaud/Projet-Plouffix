<?php
namespace Dev\Model;

class ModelLook {

    public function findFile($num) {
        $path = "./".$num[0]."/a".$num[0].$num[1].$num[2].$num[3].'.txt';
        return $path;
    }

    public function findResult($path, $num) {
        echo 'look '.$num.' '.$path;
        return system('look '.$num.' '.$path);
    }

}