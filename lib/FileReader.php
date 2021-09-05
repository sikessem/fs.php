<?php namespace SIKessEm\FileSystem;

class FileReader implements ReadableFile {

  use ReadFile;

  function __construct(string $file) {

    if(!is_file($file))
      throw new \InvalidArgumentException("No such file $file");

    if(!is_readable($file))
      throw new \InvalidArgumentException("Cannot read file $file");

    $this->stream = fopen($file, 'r');
  }
}

