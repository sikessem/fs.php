<?php namespace SIKessEm\FileSystem;

trait DirReaderTrait {

  use StreamTrait;

  function read(): string|false {
    
    return readdir($this->stream);
  }
}