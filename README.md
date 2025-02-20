# PHP Race Condition Example

This repository demonstrates a race condition in PHP that can lead to data corruption. The `processFile()` function uses a global variable to store data, which is vulnerable to race conditions if called concurrently. 

The solution demonstrates a proper way to handle file processing in a thread-safe manner using local variables and better synchronization techniques if needed for more complex scenarios.

## Bug

The `bug.php` file contains the buggy code. The race condition occurs because multiple calls to `processFile()` might modify the `$data` global variable simultaneously.