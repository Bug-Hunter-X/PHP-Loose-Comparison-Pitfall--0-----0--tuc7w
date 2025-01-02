function foo($a, $b) {
  if ($a === $b) {
    return true;
  } else {
    return false;
  }
}

$result = foo(0, '0'); // returns false, as expected

//Always use strict comparison (===) for type and value checking to avoid such issues.