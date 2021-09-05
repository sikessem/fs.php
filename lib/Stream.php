<?php namespace SIKessEm\FileSystem;

trait Stream {

  protected $stream;

  /**
   * @return resource
   */
  function stream() {
    
    return $this->stream;
  }
}

