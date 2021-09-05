<?php namespace SIKessEm\FileSystem;

class DirReader implements DirReaderInterface {

  use DirReaderTrait;

  function __construct(string $dir) {

    if(!is_dir($dir))
      throw new \InvalidArgumentException("No such directory $dir");

    if(!is_readable($dir))
      throw new \InvalidArgumentException("Cannot read directory $dir");

    $this->stream = opendir($dir);
  }
}