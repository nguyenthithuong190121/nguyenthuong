<br>câu 1<br>
<?php

function checkEven($number)
{

    if ($number % 2 == 0) {

        return "Số '$number'  là số chẵn";
    } else {

        return "Số '$number' không là số chẵn";
    }
}


$number = 10;

print( checkEven($number));





?>
<br> câu 2<br>
<?php

function total($n)
{

    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {

        $sum += $i;
    }

    return $sum;
}

// Số n
$n = 99;

// Gọi hàm tính tổng
$a = total($n);

// In kết quả
echo "Tổng các số từ 1 đến $n  là: $a ";

?>
<br> câu 3<br>
<?php

function multiplication()
{

    for ($i = 1; $i <= 10; $i++) {

        echo "Bảng cửu chương của " . $i . "<br>";

        for ($j = 1; $j <= 10; $j++) {

            $result = $i * $j;

            echo $i . " x " . $j . " = " . $result . "<br>";
        }
    }
}
multiplication()



?>
<br> câu 4<br>
<?php


function checkArr($arr, $n)
{
    $check = strpos($arr, $n);

    if ($check !== false) {

        return "Chuỗi '$arr'  chứa từ  '$n' ";
    } else {

        return "Chuỗi '$arr' không chứa từ '$n' ";
    }
}


echo checkArr("Xin chào, mình là Thương.", "Thương")



?>
<br> câu 5<br>
<?php

function seekMax($arr) {
    $maxNumber = $arr[0];

    for ($i = 1; $i < count($arr) ; $i++) {

        if ($arr[$i] > $maxNumber) {
            $maxNumber = $arr[$i];
        }
    }

    return $maxNumber;
}

function seekMin($arr)
{
    $minNumber = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {

        if ($arr[$i] < $minNumber) {

            $minNumber = $arr[$i];
        }
    }

    return $minNumber;
}

// Mảng số
$arr = array(2, 9, 5, 7, 3, 1, 6);

// Tìm giá trị lớn nhất
$max = seekMax($arr);

// Tìm giá trị nhỏ nhất
$min = seekMin($arr);

// In kết quả
echo "Giá trị lớn nhất trong mảng là: $max<br>";
echo "Giá trị nhỏ nhất trong mảng là: $min";
?>



<br> câu 6 <br>
<?php

function sortAsc($arr)

{

    $sizeArr = count($arr);

    for ($i = 0; $i < $sizeArr - 1; $i++) {

        for ($j = $i + 1; $j < $sizeArr; $j++) {

            if ($arr[$j] < $arr[$i]) {

                // Hoán đổi vị trí của hai phần tử
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }

    return $arr;
}

// Mảng số cần sắp xếp
$arr = array(5, 2, 9, 1, 7, 3);

// Sắp xếp mảng theo thứ tự tăng dần
$arrAfterSort = sortAsc($arr);

// In kết quả
echo "Mảng sau khi sắp xếp: ";

foreach ($arrAfterSort as $value) {

    echo "$value ";
}

?>



<br> câu 7 <br>
<?php

function redundant($n)
{
    if ($n == 0 || $n == 1) {

        return 1;
    } else {

        return $n * redundant($n - 1);
    }
}

// Số nguyên dương
$n = 5;

// Tính giai thừa
$rdd = redundant($n);

// In kết quả
echo "Giai thừa của $n là: $rdd";


?>
<br> câu 8 <br>
<?php
function checkPrime($n)
{
    if ($n < 2) {

        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {

        if ($n % $i == 0) {

            return false;
        }
    }

    return true;
}

function checkPrimeInField($start, $end)
{
    $prime = [];

    for ($i = $start; $i <= $end; $i++) {

        if (checkPrime($i)) {

            $prime[] = $i;
        }
    }

    return $prime;
}

// Khoảng số cần kiểm tra
$start = 1;
$end = 100;

// Tìm số nguyên tố trong khoảng
$primeArr= checkPrimeInField($start, $end);

// In kết quả
echo "Các số nguyên tố trong khoảng $start đến $end là: ";

foreach ($primeArr as $n) {
    echo "$n ";
}

?>



<br> câu 9 <br>
<?php

function totalArr($arr)
{
    $sum = 0;

    foreach ($arr as $num) {

        $sum += $num;
    }

    return $sum;
}

// Mảng số
$arr = array(2, 9, 5, 7, 3, 1, 6);

// Tính tổng của mảng
$totalArr = totalArr($arr);

// In kết quả
echo "Tổng của mảng là: $totalArr";

?>




<br> câu 10 <br>
<?php
//Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. 
function isFibonacciFiled($start, $end)
{
    $arrFibo = [];
    $arrFibo[0] = 0;
    $arrFibo[1] = 1;

    $i = 2;
    while (true) {
        $arrFibo[$i] = $arrFibo[$i - 1] + $arrFibo[$i - 2];
        if ($arrFibo[$i] > $end) {
            break;
        }
        if ($arrFibo[$i] >= $start) {
            echo $arrFibo[$i] . " ";
        }
        $i++;
    }
}

// Khoảng số Fibonacci cần in
$start = 0;
$end = 100;

// In các số Fibonacci trong khoảng
echo "Các số Fibonacci trong khoảng $start đến $end là: ";
isFibonacciFiled($start, $end);

?>



<br> câu 11 <br>
<?php //Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
//Số Armstrong là số có đặc điểm là tổng lũy thừa các chữ số của nó bằng chính nó
function isArmstrong($number)
{
    $sum = 0;
    $initNumber = $number;

    // Tính số chữ số của số ban đầu
    $numDigits = strlen((string)$number);

    // Tính tổng lũy thừa các chữ số
    while ($number > 0) {

        $digit = $number % 10;
        $sum += pow($digit, $numDigits);
        $number = (int)($number / 10);
    }

    // Kiểm tra nếu tổng lũy thừa các chữ số bằng số ban đầu
    if ($sum === $initNumber) {
        return true;
    } else {
        return false;
    }
}

// Sử dụng hàm để kiểm tra số Armstrong
$number = 153;
if (isArmstrong($number)) {
    echo $number . " là số Armstrong.";
} else {
    echo $number . " không phải là số Armstrong.";
}


?>
<br> câu 12 <br>
<?php //Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. hơi gây lú, đọc lại

function addElementInArr($arr, $element, $location)
{
    // Kiểm tra vị trí hợp lệ
    if ($location < 0 || $location > count($arr)) {
        echo "Vị trí chèn không hợp lệ.";
        return $arr;
    }

    // Tạo mảng mới để chứa phần tử chèn
    $curentArr = array();

    // Chèn các phần tử vào mảng mới
    for ($i = 0; $i < count($arr); $i++) {
        if ($i === $location) {
            $curentArr[] = $element;
        }
        $curentArr[] = $arr[$i];
    }

    // Nếu vị trí chèn là vị trí cuối cùng, thêm phần tử vào cuối mảng
    if ($location === count($arr)) {
        $curentArr[] = $element;
    }

    return $curentArr;
}

// Mảng ban đầu
$initArray = array(1, 2, 3, 4, 5);
$element = 10;
$location = 2;

// Chèn phần tử vào mảng
$result = addElementInArr($initArray, $element, $location);

// Hiển thị mảng kết quả
print_r($result );

?>



<br> câu 13 <br>
<?php 


function eliminateRepeatedElement($arr)
{
    // Sử dụng hàm array_flip() để chuyển đổi giá trị thành key
    $initArray = array_flip($arr);

    // Sử dụng hàm array_keys() để lấy các key duy nhất
    $result = array_keys($initArray);

    return $result;
}

// Mảng ban đầu
$init = array(1, 2, 3, 2, 4, 3, 5, 1);

// Loại bỏ các phần tử trùng lặp
$result  = eliminateRepeatedElement($init);

// Hiển thị mảng kết quả
print_r($result );

?>



<br> câu 14 <br>
<?php
//Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function checkLocationElement($arr, $element)
{
    $location = array();

    // Duyệt qua mảng và ghi nhớ vị trí của phần tử
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] === $element) {

            $location[] = $i;
        }
    }

    return $location;
}

// Mảng ban đầu
$arr = array(1, 2, 3, 2, 4, 3, 5, 1);
$element = 2;

// Tìm vị trí của phần tử trong mảng
$location = checkLocationElement($arr, $element);

// Hiển thị vị trí của phần tử
if (count($location) > 0) {

    echo "Vị trí của phần tử " . $element . " trong mảng là: ";

    echo implode(", ", $location);
} else {

    echo "Phần tử " . $element . " không tồn tại trong mảng.";
}

?>



<br> câu 15 <br>
<?php //Viết chương trình PHP để đảo ngược một chuỗi.

function reverseStr($str)
{
    $resultReverse = '';

    $lenStr = strlen($str);

    for ($i = $lenStr - 1; $i >= 0; $i--) {

        $resultReverse .= $str[$i]; 
        // $resultReverse = $resultReverse . $str[$i]; => thêm ký tự $str[$i] vào cuối chuỗi $resultReverse
    }

    return  $resultReverse;
}

$str = "Hello, World!";
$result  = reverseStr($str);
echo $result;

?>





<br> câu 16 <br>
<?php

function countElements($array)
{
    $count = count($array);
    return $count;
}

// Mảng ban đầu
$originalArray = array(1, 2, 3, 4, 5);

// Tính số lượng phần tử trong mảng
$elementCount = countElements($originalArray);

// Hiển thị số lượng phần tử
echo "Số lượng phần tử trong mảng là: " . $elementCount;

?>




<br> câu 17 <br>
<?php

function isPalindrome($str)
{
    // Loại bỏ các ký tự không phải chữ cái và chuyển đổi chuỗi về chữ thường
    $cleanStr = preg_replace("/[^A-Za-z]/", '', strtolower($str));

    // So sánh chuỗi gốc với chuỗi đảo ngược
    return $cleanStr === strrev($cleanStr);
}

// Chuỗi ban đầu
$originalString = "A man, a plan, a canal: Panama";

// Kiểm tra xem chuỗi có phải là chuỗi Palindrome hay không
if (isPalindrome($originalString)) {

    echo "Chuỗi \"" . $originalString . "\" là chuỗi Palindrome.";
} else {

    echo "Chuỗi \"" . $originalString . "\" không là chuỗi Palindrome.";
}

?>



<br> câu 18 <br>
<?php

function countOccurrences($array, $element)
{
    $count = 0;

    // Duyệt qua mảng và tăng biến đếm mỗi khi phần tử xuất hiện
    foreach ($array as $value) {

        if ($value === $element) {

            $count++;
        }
    }

    return $count;
}

// Mảng ban đầu
$originalArray = array(1, 2, 3, 2, 4, 3, 5, 1);
$elementToCount = 2;

// Đếm số lần xuất hiện của phần tử trong mảng
$occurrences = countOccurrences($originalArray, $elementToCount);

// Hiển thị số lần xuất hiện
echo "Số lần xuất hiện của phần tử " . $elementToCount . " trong mảng là: " . $occurrences;
?>




<br> câu 19 <br>
<?php

function sortDescending($arr)
{

    rsort($arr);
    return $arr;
}

$myArray = array(3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5);

// Sắp xếp mảng theo thứ tự giảm dần
$myArray = sortDescending($myArray);

// Hiển thị mảng
print_r($myArray);

?>





<br> câu 20 <br>
<?php

function addElement($arr, $element, $position)
{

    if ($position == "start") {

        array_unshift($arr, $element);
    } else {

        array_push($arr, $element);
    }

    return $arr;
}

$myArray = array("apple", "banana", "orange");

$newElement = "pear";

// Thêm phần tử vào cuối mảng
$myArray = addElement($myArray, $newElement, "end");

// Thêm phần tử vào đầu mảng
$myArray = addElement($myArray, $newElement, "start");

// Hiển thị mảng
print_r($myArray);

?>





<br> câu 21 <br>

<?php
function findSecondLargest($arr) {
    $max = max($arr);
    unset($arr[array_search($max, $arr)]);
    return max($arr);
}
 
$arr = array(1, 2, 3, 4, 5);
echo "Số lớn thứ hai là: " . findSecondLargest($arr);
?>




<br> câu 22 <br>
<?php

function gcd($a, $b)
{

    if ($b == 0) {

        return $a;
    } else {

        return gcd($b, $a % $b);
    }
}

function lcm($a, $b)
{

    return ($a * $b) / gcd($a, $b);
}

$num1 = 12;
$num2 = 18;

echo "Ước số chung lớn nhất của " . $num1 . " và " . $num2 . " là: " . gcd($num1, $num2) . "<br>";
echo "Bội số chung nhỏ nhất của " . $num1 . " và " . $num2 . " là: " . lcm($num1, $num2);


?>
<br> câu 23 <br> 

<?php 
// số hoàn hảo là số nguyên dương mà tổng các ước nguyên dương thực sự của nó bằng chính nó
function isPerfectNumber($num) 
{

    $sum = 0;

    for ($i = 1; $i <= $num / 2; $i++) {

        if ($num % $i == 0) {

            $sum += $i;
        }
    }

    if ($sum == $num) {

        echo $num . " là số hoàn hảo";
    } else {

        echo $num . " không phải là số hoàn hảo";
    }
}
print( isPerfectNumber(28))
?>






<br> câu 24 <br>
<?php


function findLargestOdd($arr)
{

    $largestOdd = null;

    foreach ($arr as $num) {

        if ($num % 2 != 0 && ($largestOdd == null || $num > $largestOdd)) {

            $largestOdd = $num;
        }
    }

    return $largestOdd;
}

$myArray = array(2, 4, 6, 10, 9, 3, 5, 7);

// Tìm số lẻ lớn nhất trong mảng
$largestOdd = findLargestOdd($myArray);

// Hiển thị số lẻ lớn nhất
echo "Số lẻ lớn nhất trong mảng là: " . $largestOdd; 


?>



<br> câu 25 <br>

<?php

function isPrimeNumber($num)
{

    if ($num <= 1) {

        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {

        if ($num % $i == 0) {

            return false;
        }
    }

    return true;
}

$num = 17;

if (isPrimeNumber($num)) {

    echo $num . " là số nguyên tố";
} else {

    echo $num . " không phải là số nguyên tố";
}

?>






<br> câu 26 <br>
<?php

function findLargestPositive($arr)
{

    $largestPositive = null;

    foreach ($arr as $num) {

        if ($num > 0 && ($largestPositive == null || $num > $largestPositive)) {

            $largestPositive = $num;
        }
    }

    return $largestPositive;
}

$myArray = array(-2, 4, 6, -8, 9, 3, -5, 7);

// Tìm số dương lớn nhất trong mảng
$largestPositive = findLargestPositive($myArray);

// Hiển thị số dương lớn nhất
echo "Số dương lớn nhất trong mảng là: " . $largestPositive;

?>





<br> câu 27 <br>
<?php

function findLargestNegative($arr)
{

    $largestNegative = null;

    foreach ($arr as $num) {

        if ($num < 0 && ($largestNegative == null || $num > $largestNegative)) {

            $largestNegative = $num;
        }
    }

    return $largestNegative;
}

$myArray = array(2, -4, 6, -8, -9, 3, -5, 7);

// Tìm số âm lớn nhất trong mảng
$largestNegative = findLargestNegative($myArray);

// Hiển thị số âm lớn nhất
echo "Số âm lớn nhất trong mảng là: " . $largestNegative;

?>
<br> câu 28 <br>
<?php

function sumOddNumbers($n)
{

    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {

        if ($i % 2 != 0) {

            $sum += $i;
        }
    }

    return $sum;
}

$n = 10;

// Tính tổng các số lẻ từ 1 đến n
$sum = sumOddNumbers($n);

// Hiển thị tổng các số lẻ
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;

?>





<br> câu 29 <br>


<?php

function findPerfectSquares($start, $end) {

    $perfectSquares = array();

    for ($i = $start; $i <= $end; $i++) {

        if (sqrt($i) == floor(sqrt($i))) {

            array_push($perfectSquares, $i);
        }
    }

    return $perfectSquares;
}

$start = 1;
$end = 100;

// Tìm số chính phương trong khoảng từ $start đến $end
$perfectSquares = findPerfectSquares($start, $end);

// Hiển thị số chính phương
echo "Các số chính phương trong khoảng từ " . $start . " đến " . $end . " là: ";

foreach ($perfectSquares as $num) {

    echo $num . " ";
}

?>







<br> câu 30 <br>
<?php

function isSubstring($string, $substring)

{
    if (strpos($string, $substring) === false) {

        return false;
    } else {

        return true;
    }
}

$string = "Hello world";
$substring = "world";

// Kiểm tra xem $substring có phải là chuỗi con của $string hay không
if (isSubstring($string, $substring)) {

    echo "Chuỗi '" . $substring . "' là chuỗi con của chuỗi '" . $string . "'";
} else {

    echo "Chuỗi '" . $substring . "' không phải là chuỗi con của chuỗi '" . $string . "'";
}
