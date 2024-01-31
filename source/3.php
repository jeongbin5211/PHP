<?php

// str_replace("바꿀문자열", "바뀔문자열", "대상문자열") -> 대상문자열에서 a를 b로 바꿈

$str = "나는 한국인이다.";

$str1 = str_replace("한국인", "미국인", $str);

echo $str1;
echo "<br>";

// var_dump(); 타입 확인
// is_int(); 정수 판별
// is_float(); 실수 판별
// is_numeric(); 숫자인지 아닌지 판별(문자열 안에 있는 숫자도 숫자로 인식)

$x = 33443;

var_dump($x);
var_dump(is_int($x));

if (is_int($x)) {
    echo "x는 정수입니다.";
} else {
    echo "x는 정수가 아닙니다.";
}

echo "<br>";

$y = "33d";

if (is_numeric($y)) {
    echo "숫자입니다.";
} else {
    echo "숫자가 아닙니다.";
}

echo "<br>";

// pi(); 파이 출력 함수
echo pi();

echo "<br>";

// max() 최대값 출력
// min() 최소값 출력

echo (max(0, 1, 2, 3, 4, 5, -3))

?>
