<?php namespace SIKessEm\FileSystem;

function readable_file(string $file): ReadableFile {
  
  return new FileReader($file);
}