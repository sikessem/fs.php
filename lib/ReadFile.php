<?php namespace SIKessEm\FileSystem;

trait ReadFile {

  protected $stream;

  /**
   * @return resource
   */
  function stream() {
    
    return $this->stream;
  }

  function read(int $length): string|false {
    
    return fread($this->stream, $length);
  }
}

