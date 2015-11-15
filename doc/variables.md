#Variables

###How to use variables?

You just have to write your variables in the ***[ExtendedCSS]*** tag like this:

ˋˋˋini

[ExtendedCSS]
var1="grey"
yourVar="white"
test_var="monospace"

ˋˋˋ
Then you can use your variables in the css file like this:

ˋˋˋcss

body {

	background-color: $var1;
    color: $yourVar;
    font-family: $test_var;

}

ˋˋˋ