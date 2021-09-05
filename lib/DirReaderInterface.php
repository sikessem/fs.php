<?php namespace SIKessEm\FileSystem;

interface DirReaderInterface extends StreamInterface {

  function read(): string|false;
}