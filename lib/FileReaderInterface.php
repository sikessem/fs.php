<?php namespace SIKessEm\FileSystem;

interface FileReaderInterface extends StreamInterface {

  function read(int $length): string|false;
}