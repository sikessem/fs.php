<?php namespace SIKessEm\FileSystem;

trait FileReaderTrait {

  use StreamTrait;

  function read(int $length): string|false {
    
    return fread($this->stream, $length);
  }
}