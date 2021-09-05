<?php namespace SIKessEm\FileSystem;

trait ReadFile {

  use Stream;

  function read(int $length): string|false {
    
    return fread($this->stream, $length);
  }
}

