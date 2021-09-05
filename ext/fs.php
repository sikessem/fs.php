<?php namespace SIKessEm\FileSystem;

function file_reader(string $file): FileReaderInterface {
  
  return new FileReader($file);
}

function dir_reader(string $dir): DirReaderInterface {

  return new DirReader($dir);
}