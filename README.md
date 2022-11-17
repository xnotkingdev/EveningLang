# Documentation
## ?haunt
Start Evening Code
## ?unhaunt
End Evening Code
## revive
Print a message <br>
Syntax: revive "Hello world";
## revive_arr
Print array.<br>
```Syntax```: sink people = array("xNotKing", "iDev90G", "Paradise");<br>
revive_arr(people):
## sink
Declare a variable<br>
```Syntax```: sink name = "xNotKing";
## &
Call a variable<br>
```Syntax```: sink name = "xNotKing";<br>
echo &name;
## eyehttp
URL Parameters ($_GET)<br>
```Syntax```: echo eyehttp["name"];
## eyehttpost
POST Request ($_POST)<br>
```Syntax```: echo eyehttpost["name"];
## eyeserver
In php: https://www.php.net/manual/es/reserved.variables.server.php
## skelheader
Request headers<br>
```Syntax```: skelheader("Content-Type: text/html"):
## deadif, deadwhile, deadfor, deadelse, deadforeach, deadelseif
Conditionals and loops.<br>
if, while, for, else, foreach, elseif
## skellock
Hash<br>
```Syntax```: skellock("sha512", "Hello world");
## weenlock
md5<br>
```Syntax```: weenlock("Hello world");
## eyescheck
Find word in string<br>
```Syntax```: strpos("Hello world", "world");
## ghostlen
String length<br>
```Syntax```: ghostlen("Hello world");
## ghostexists
Isset in php: https://www.php.net/manual/es/function.isset<br>
```Syntax```: <br>if(ghostexists(eyehttp["name"])) {<br>
     revive "Hello world";<br>
}
## ghosttolower
string to lowercase<br>
```Syntax```: ghosttolower("HELLO WORLD");
## ghosttoupper
string to uppercase<br>
```Syntax```: ghosttoupper("hello world");
## hauntfi
Get file content
```Syntax```: hauntfi("password.txt");
## hauntfi_as_array
Read file as array
```Syntax```: hauntfi_as_array("password.txt");
## includeghost
Include file. Only allows php scripts.
```Syntax```: includeghost "script.php";
## GhostDB
PDO support (databases)
```Syntax```:<br>
sink db = new GhostDB("sqlite:uwudb.sqlite");<br>
&db>>exec("CREATE TABLE IF NOT EXISTS profiles (id TEXT, name TEXT, password TEXT)");<br>
## Tip:
Databases are stored in EveningLang memory directory (which is bin/http/)
## doclen()
Document length
# How is this made?
EveningLang is an interpreted languague which gets translated into PHP code. This translation to php is what makes it possible to embed it into html.<br>
If you want to contribute adding functions click show hidden files and go into bin/vm.php.
# Run using ./evening (cmd written in c)
# Big tip
If there are missing functions, this languague coexists with PHP. This means that every php function is a evening lang function.
# Performance
The languague gets translated in less than a second.<br>
Web performance depends on installed PHP version. PHP performance == eveninglang performance. Also you can change the web server, referenced in bin/web.php.<br>
.ghost.html files get transpiled in bin/http/{filename}.php