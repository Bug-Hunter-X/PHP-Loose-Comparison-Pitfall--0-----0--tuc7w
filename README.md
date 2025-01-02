# PHP Loose Comparison Pitfall

This repository demonstrates a common issue in PHP related to loose comparison (==) and its potential to cause unexpected behavior.  Loose comparison does not check for type equality, leading to situations where values of different types might be considered equal.

The `bug.php` file contains code that illustrates this problem. The `bugSolution.php` file provides a corrected version using strict comparison (===).