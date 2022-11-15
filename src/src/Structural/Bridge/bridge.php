<?php


class FileSystemInterface {
    public $path = 'www.google.com';
    public $content = 'slt';

    function __construct($path, $content) {
        $this->path = $path;
        $this->content = $content;
    }

    function read(string $path):string{
        return $this->path;
    }

    function save(string $content, string $path):void  {
        // save
    }
}

class DriveFileSystem {

}

class LocalFileSystem {
    
}