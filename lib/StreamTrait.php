<?php namespace SIKessEm\FileSystem;

trait StreamTrait {

  protected $stream;

  /**
   * @return resource
   */
  function stream() {
    
    return $this->stream;
  }
}