<?php

// ---------------Answer to question no. 1---------------

// Function to sort array of strings by their length, in ascending order
function sortByLength( $strings ) {
    // Using the usort() function to define a custom sorting function
    usort( $strings, function ( $a, $b ) {
        // If the length of $a is less than the length of $b, $a will come first
        // Otherwise, $b will come first
        return strlen( $a ) <=> strlen( $b );
    } );
    // Returning the sorted array
    return $strings;
}
// Example usage
$strings = array( "SL-4444", "SL-22", "SL-1", "SL-333", "SL-666666", "SL-55555" );
$sortedStrings = sortByLength( $strings );
print_r( $sortedStrings );

/* Output:
Array
(
    [0] => SL-1
    [1] => SL-22
    [2] => SL-333
    [3] => SL-4444
    [4] => SL-55555
    [5] => SL-666666
)
---------------End 1st Answer---------------
*/


// ---------------Answer to question no. 2---------------
// Function to concatenate two strings
function fullName( $fName, $lName ) {
    // concatenate the two strings with the second string starting from the end of the first string
    $fullName = $fName . substr( $lName, strlen( $lName ) - strlen( $fName ) );

    // return the concatenated string
    return $fullName;
}
// example usage
$firstName = "Mohammad Rafiqul ";
$lastName  = "Islam";
echo fullName( $firstName, $lastName );
/* Output:
Mohammad Rafiqul Islam
---------------End 2nd Answer---------------
*/



// ---------------Answer to question no. 3---------------
// Function to remove the first and last element from an array
function removeFirstAndLast( $mySampleArray ) {
    // Check if array is empty
    if ( count( $mySampleArray ) == 0 ) {
        return null;
    }
    // remove the first element
    array_shift( $mySampleArray );
    // remove the last element
    array_pop( $mySampleArray );
    // return the remaining elements
    return $mySampleArray;
}
//Example usage
$mySampleArray = array( "Array1", "Array2", "Array3", "Array4", "Array5", "Array5" );
$result = removeFirstAndLast( $mySampleArray );
print_r( $result );
/* Output:
Array
(
[0] => Array2
[1] => Array3
[2] => Array4
[3] => Array5
)
---------------End 3rd Answer---------------
*/



// ---------------Answer to question no. 4---------------
// Function to check if a string contains only letters and whitespace
function checkString( $myString ) {
    // Use regex to check if only letters and whitespace are present
    $regex  = "/^[a-zA-Z\s]+$/";
    $result = preg_match( $regex, $myString );
    // If the string matches the regex, it contains only letters and whitespace
    return $result;
}
// Example usage
$string = "Type here your example string";
if ( checkString( $string ) == true ) {
    echo "This STRING contains only letters and whitespace";
} else {
    echo "This STRING contains mixed letter";
}
/* Output:
This STRING contains only letters and whitespace
---------------End 4th Answer---------------
*/



// ---------------Answer to question no. 5---------------
// PHP function to find the second largest number in an array of numbers 
function secondLargestNumber( $array ) {
    // Sort the array in descending order 
    rsort( $array );
    // Return the second largest element of array
    return $array[1];
}
// Example Usage 
$myArray = array( 500, 400, 200, 100, 600, 700, 800 );
//calling the function
echo "Second largest number is: " . secondLargestNumber( $myArray );
/* Output:
Second largest number is: 700
---------------End 5th Answer---------------
*/