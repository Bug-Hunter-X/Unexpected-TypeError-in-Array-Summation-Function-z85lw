function calculateSum(numbers) {
  if (!is_array(numbers)) {
    throw new Exception('Invalid input: numbers must be an array.');
  }

  let sum = 0;
  foreach ($numbers as $number) {
    if (!is_numeric($number)) {
      // Handle non-numeric values appropriately
      // Option 1: Throw an exception
      //throw new Exception('Invalid input: array elements must be numbers.');
      // Option 2: Skip non-numeric values
      continue;
    }
    $sum += $number;
  }

  return $sum;
}

$numbers = [1, 2, '3', 4, 5];

try {
  $sum = calculateSum($numbers);
  echo "Sum: " . $sum; //Output: Sum: 12
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}
