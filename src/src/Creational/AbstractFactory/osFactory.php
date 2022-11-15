<?php 

abstract class CommandFactoryInterface {
    abstract function CreateCommand():CommandListInterface;
}

abstract class linuxCommandFactory{
    //
}

abstract class WindowsCommandFactory{

}

abstract class CommandListInterface{

}

abstract class LinuxCommandList{

}

abstract class WindowsCommandList{

}
