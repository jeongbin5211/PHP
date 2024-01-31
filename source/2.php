<?php

// 출력문은 echo 와 print 가 있다. 이 둘은 완전히 동일

echo "";
print "";

echo ("");
print("");

// 마크업 언어를 같이 쓸 수 있다.

echo "<h2>PHP는 재밌다<h2/>";
echo "Hello world! <br>";

// echo문은 변수와 같이 사용이 가능합니다.

$txt1 = "Learn PHP";
$x = 5;
$y = 5;
echo "<h2>".$txt1."</h2>";
echo $x + $y."<br>";

// var_dump(); 를 통해 어떤 타입인지 확인이 가능합니다.

$x = 3333.5;
$y = "PHP";

var_dump($x);
var_dump($y);

// 문자열 길이를 반환 strlen()

$x_len = strlen("한글");
echo $x_len;
echo "<br>";

// str_word_count() -> 단어의 수를 출력해줌(한글 안됨)
echo str_word_count("Hello World cc");
echo "<br>";

// strrev() -> 문자열을 뒤집는 함수
echo strrev("Hello World");
echo "<br>";

// strpos("a", "b") -> b의 인덱스를 출력
$b = strpos("Hello world", "world");
echo $b; // 6
echo "<br>";

$email = "aaa.gmail.com";

if (strpos($email, "@")) {
    echo "이메일 형식에 맞음";
} else {
    echo "이메일 형식이 잘못됨";
}

?>