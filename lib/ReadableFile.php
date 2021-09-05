<?php namespace SIKessEm\FileSystem;

interface ReadableFIle {

  /**
   * @return resource
   */
  function stream();

  function read(int $length): string|false;
}

