function foo($a, $b) {
  if ($a === $b) {
    return true;
  } else {
    return false;
  }
}

$result = foo(0, '0'); // returns true, which might not be expected
