<?php
// 서버 사이드 스크립트 언어 -> 서버에서 처리 후 출력
// xampp
// 웹서버, DB서버, PHP
// Apache, Mariadb, PHP 컴파일러
// http://php.net/manual/en/install.php

$txt = "PHP";
echo "I love $txt";

// 한 줄 주석
# 주석

/*
    여러 줄 주석
*/

// 변수
// 타입 선언이 불필요함 -> $
// 변수는 대소문자를 구분함

$txt2 = "안녕하세요."; // 문자열
$x = 5; // 정수
$y = 10.5; // 실수

echo "x = $x, X = $X";
echo "<br><br><br>";

// 아래 두 변수는 다른 변수이다.
$aaaA = "";
$aaaa = "";

// 전역변수 -> 자바스크립트와 다르게 global 선언을 따로 해줘야함
// 로컬변수 (지역변수)

$a = 5;

function myTest() {
    global $a;
    $a++;
    $x = 10;
    echo "변수 a의 출력값 $a";
    echo "<br>";
    echo "변수 x의 출력값 $x";
}

echo "변수 a의 출력값 $a";
echo "<br>";

myTest();
