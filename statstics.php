<?php

// $numbers = [54, 64, 23, 63, 73, 36, 30, 34, 27, 41, 70, 28, 54, 32, 29, 52, 21, 38, 54, 31, 61, 51, 29, 59, 48, 68, 69, 22, 47, 41, 47, 41, 62, 21, 63, 43, 57, 50, 75, 76, 52, 61, 42, 69, 54, 53, 31, 54, 22, 34, 37, 27, 47, 50, 35, 54, 46, 53, 40, 53];

$numbers =[54,
64,
23,
63,
73,
36,
30,
34,
27,
41,
70,
28,
54,
32,
29,
52,
21,
38,
54,
31,
61,
51,
29,
59,
48,
68,
69,
22,
47,
41,
47,
41,
62,
21,
63,
43,
57,
50,
75,
76,
52,
61,
42,
69,
54,
53,
31,
54,
22,
34,
37,
27,
47,
50,
35,
54,
46,
53,
40,
53];
$maxi=max($numbers);
$mini=min($numbers);
$range=$maxi-$mini;
$n = count($numbers);
$log=log($n,10);
$const=3.3332;
$k = round(1+$const*$log);
$width=round($range/$k);
$lcl1=$mini;
$lcl2=round($lcl1+$width);
$ucl=round($lcl1+$width-1);

echo "Stage 1 <br>";
echo"The Maximum is :- $maxi <br>";
echo"The Minimum is :- $mini <br>";
echo"The Range is :- $range <br>";
echo "Stage 2 <br>";
echo"The Class Interval is :- $k <br>";
echo "Stage 3 <br>";
echo"The Width is :- $width <br>";
echo "Stage 4 <br>";
echo"The LCL1 is :- $lcl1 <br>";
echo "Stage 5 <br>";
echo"The LCL2 is :- $lcl2 <br>";
echo "Stage 6 <br> ";
echo"The UCL2 is :- $ucl <br>";






?>