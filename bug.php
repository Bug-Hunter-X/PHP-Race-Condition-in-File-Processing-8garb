This code suffers from a potential race condition.  If `processFile()` takes a significant amount of time, and a second request comes in before it completes, the second request will overwrite the `$data` variable, leading to data loss or corruption.

```php
<?php

$data = [];

function processFile($filename) {
  global $data;
  // Simulate a long-running process
  sleep(5);
  $data = file($filename);
}

// Example usage
processFile('file1.txt');
processFile('file2.txt');

?>
```