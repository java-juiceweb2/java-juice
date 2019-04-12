-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2019 at 09:27 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ljk4798`
--

-- --------------------------------------------------------

--
-- Table structure for table `java_juice_exContent`
--

CREATE TABLE `java_juice_exContent` (
  `exNumber` int(2) NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `java_juice_exContent`
--

INSERT INTO `java_juice_exContent` (`exNumber`, `content`) VALUES
(1, '           <!-- begins our main content (features, etc.) -->\r\n           <section id=\"main\">\r\n               <!-- Contains the main content for the page -->\r\n               <div class=\"topic-1\">\r\n                   <h2>Variables</h2>\r\n                   <p>Java is an object-oriented programming language however not all data types are objects. In fact, a String is the only data type that has to be an object. Java relies on what are known as primitive data types. The 8 primitives in Java\r\n                       are (in order of byte size):</p><br>\r\n                   <ol>\r\n                       <li>byte (a number, 1 byte)</li>\r\n                       <li>boolean (true or false, 1 byte)</li>\r\n                       <li>short (a number, 2 bytes)</li>\r\n                       <li>char (a character, 2 bytes)</li>\r\n                       <li>int (a number, 4 bytes)</li>\r\n                       <li>float (a floating point number, 4 bytes)</li>\r\n                       <li>long (a number, 8 bytes)</li>\r\n                       <li>double (a floating point number, 8 bytes)</li>\r\n                       <i>* A floating point number is a number that has a decimal point, ex. 3.1459, 3.0,\r\n                          9.06</i><br><br>\r\n                       <p>When you declare a variable you must declare it\'s data type. To create a variable of type integer simply declare the type (int) the name for the variable and what it equals.\r\n\r\n                           <br><pre>int num = 8;</pre><br>\r\n\r\n                           <p>You can also declare a variable and then assign it\'s value later. </p>\r\n\r\n                           <br><pre>\r\nint num;\r\nnum = 8;</pre><br>\r\n\r\n                           <p>You might want to use this if the value of your variable is going to be determined later in the program. To define a double simply declare the data type.</p>\r\n\r\n                           <br><pre>double num = 9.7;</pre><br>\r\n\r\n                           <p>If you want to use a float (to save memory) you will have to type cast your number.</p>\r\n\r\n                           <br><pre>float num = (float) 9.7;</pre><br>\r\n\r\n                           <p>or you can use the shorthand</p>\r\n\r\n                           <br><pre>float num = 9.7f;</pre><br>\r\n                           <p>Type Casting is an easy way to convert data from one data type to another data type. For example, you can typecast an int data type to a double data type.</p>\r\n\r\n                           <br><pre>\r\nint i = 5; \r\ndouble d = (double) i;</pre><br>\r\n\r\n                           <p>You can not cast a double down to an int, for this you would have to use a method such as</p>\r\n\r\n                           <br><pre>\r\ndouble d = 5.25; \r\nint i = d.intValue();</pre><br>\r\n\r\n                           <p>Declaring a long, short or byte follow the same pattern as declaring an int or double. Every number datatype can use mathematical operators such as +, -, *, / to manipulate the values. If you want more advanced operations you\r\n                               can refer to the Math class (https://docs.oracle.com/javase/8/docs/api/java/lang/Math.html) A char is a single character and is declared like</p>\r\n\r\n                           <br><pre>char c = \'c\';</pre><br>\r\n\r\n                           <p>A char uses single quotes and can only be one character. A String is declared with double quotes. A String is not a primitive data type it is of the class Object.</p>\r\n\r\n                           <br><pre>String str = \"Hello\";</pre><br>\r\n\r\n                           <p>You can join strings together using string concatenation with the plus (+) operator.</p>\r\n\r\n                           <br><pre>\r\nString str1 = \"Hello\";\r\nString str2 = \"World\";\r\nSystem.out.println(str1 + str2); // will print out Hello World</pre><br>\r\n\r\n                           <p>A boolean is a special primitive data type it only accepts values of true or false. This is helpful for comparisons.</p>\r\n\r\n                           <br><pre>boolean keepGoing = true; // declaring the boolean\r\n                              \r\n// here the if statements check the truth of the boolean variable keepGoing \r\n// if it is true the pre will excute if \r\n(keepGoing) {\r\n  System.out.println(\"I will keep going\");\r\n}</pre><br>\r\n               </div>\r\n               <!-- End topic 1 div -->\r\n           </section>\r\n           <!-- End main content section -->\r\n       </div>'),
(2, '       <!-- start main content section -->\r\n       <section id=\"main\">\r\n           <!-- main content div -->\r\n           <div class=\"topic-1\">\r\n               <h2>Loops</h2>\r\n               <p>Often in programming, you\'ll have a need to repeatedly run certain sections of your code. Rather than copying and pasting the same code over and over, you can use a loop function in Java. There are 3 types of loops in Java, which can all have different uses.</p><br>\r\n               <ul>\r\n                   <li>While Loop</li>\r\n                   <li>Do While Loop</li>\r\n                   <li>For Loop</li>\r\n               </ul>\r\n               <br>\r\n               <!-- start of while loop lesson -->\r\n               <h2>While Loop</h2>\r\n               <p>First, we\'ll discuss the while loop\'s functionality and some simple ways to use it. To briefly state how it works, a while loop runs a section of code until a certain condition is met. The while loop has pretty simple syntax to it: the keyword \"while\" followed by a pair of parentheses and a pair of curly brackets, as shown below:</p>\r\n               <pre>while (condition) {\r\n   some code;\r\n}</pre>\r\n               <p>The code in the parentheses must be a boolean condition of some form, which the loop uses to determine whether or not it will keep running the code inside of its curly brackets. As one might assume, if the boolean is true, then the code will run, but once it changes to false, the loop ends and the program moves on to the lines of code after the loop.</p>\r\n               <p>Here\'s an example of using a while loop to print out text:</p>\r\n               <pre>while (true) {\r\n   System.out.println(\"Hello World!\");\r\n}</pre>\r\n               <p>Loops can run any code, including methods.</p>\r\n               <pre>while (true) {\r\n   String word = getWord();\r\n   System.out.println(word);\r\n}</pre>\r\n               <p>These looks nice, except the condition never changes to false, so these loops would run forever! (or at least until you close your program)</p>\r\n               <p>To solve this, we can add an accumulator variable that we will add onto inside the loop, allowing our loop to stop after a certain number of times.</p>\r\n               <pre>int i = 0;\r\nwhile (i &#60; 4) {\r\n   System.out.println(\"Hello World!\");\r\n   i++;\r\n}</pre>\r\n               <p>That\'s better! Now, our accumulator variable will be incremented each time the loop runs, allowing our condition to be met once i gets to 4, thus ending the loop after 4 runs.</p>\r\n               <p>You can also use the keyword \"break\" to stop a loop from going, regardless of the condition.</p>\r\n               <pre>while (true) {\r\n   System.out.println(\"This will only print once!\");\r\n   break;\r\n}</pre>\r\n               <p>This might seem to defeat the purpose of the loop\'s repetition, but once you get a better grasp on loops and start implementing them in more complex situations, break can end up being put to good use.</p><br>\r\n               <!-- end of while loop lesson -->\r\n\r\n               <!-- start of do while loop lesson -->\r\n               <h2>Do While Loop</h2>\r\n               <p>The do while loop is very similar to the while loop that we just learned about, with one difference: the condition is checked <i>after</i> the code inside the loop is run. Here\'s the syntax for a do while loop:</p>\r\n               <pre>do {\r\n   some code;\r\n} while (condition);\r\n               </pre>\r\n               <p>The main difference here is the use of the keyword \"do\" at the start of the loop, rather than \"while\". Logically this makes sense, because your program will \"do\" the code inside the curly brackets, and <i>then</i> check the condition to see if it will run again.</p>\r\n               <p>A common use for these is getting input from a user. Since the user will start by inputting something, we want to guarantee that the code runs at least once, and then it can end based on the condition.</p>\r\n               <pre>do {\r\n   String input = getUserInput();\r\n   int result = useTheInput(input);\r\n} while (input != \"exit\");\r\n</pre>\r\n               <p>In this example, the code will keep running until the user enters the word \"exit\", which is something a program might use as its protocol for ending.</p>\r\n               <!-- end of do while loop lesson -->\r\n\r\n               <!-- start of for loop lesson -->\r\n               <h2>For Loop</h2>\r\n               <p>Remember back in our while loop example that used the accumulator variable to determine how many times the loop would run? With a for loop, we can do exactly that, but in a more compact syntax:</p>\r\n               <pre>for (int i = 0; i &#60; 4; i++) {\r\n   System.out.println(i);\r\n}\r\n</pre>\r\n               <p>In the parentheses, there are 3 statements separated by semicolons at the end of each (the last one doesn\'t need a semicolon after it). The first is a variable, which is reffered to as the loop variable. This variable can only be used within the loop. The second is the loop\'s condition, which is the same as the other loops: it determines when the loop stops running. Lastly, there is a spot for the loop variable to be incremented. As you progress in your knowledge of programming, you will find many more involved uses for this type of loop.</p><br>\r\n           </div>\r\n           <!-- end main content div -->\r\n       </section>\r\n       <!-- end main content section -->\r\n   </div>'),
(3, '           <!-- start main content section -->\r\n           <section id=\"main\">\r\n               <!-- main content div -->\r\n               <div class=\"topic-1\">\r\n                   <h2>Boolean Logic</h2>\r\n                   <p>\r\n                       For a program to be useful, often times a decision has to be \r\n                       made whether to run a certain section of code or not.  In a \r\n                       program, these decisions can be made using what\'s known as \r\n                       \"Boolean logic\" named after an English mathematician George \r\n                       Boole.  At its core, Boolean logic boils down to true and \r\n                       false.  Conditionals, as they\'re known, are sections of code\r\n                       where one or more conditions must be true to execute.\r\n                   </p>\r\n                   <br />\r\n                   <p>\r\n                       Java has a built-in Boolean data type, known as a boolean.\r\n                       The value of a boolean may be either true or false.\r\n                   </p>\r\n                   <br />\r\n                   <!-- start of if/else loop lesson -->\r\n                   <h2>If/Else</h2>\r\n                   <p>\r\n                       In Java, the code that deals with determining whether or not \r\n                       to run a section of code is known as an \"if-block\".  A \r\n                       simple outline of what they look like is shown below:\r\n                   </p>\r\n<pre>if (condition) {\r\n   code to run if condition is true\r\n}</pre>\r\n                   <p>\r\n                       If a program must decide if it should run one set of code or\r\n                       another if the condition fails, an else block can be used\r\n                       which the program runs if the condition is found to be \r\n                       false.  An example of that looks like the following:\r\n                   </p>\r\n<pre>if (condition) {\r\n   code to run if condition is true\r\n} else {\r\n   code to run if condition is false\r\n}</pre>\r\n                   <p>\r\n                       If, when an if-conditional evaluates to false, a different\r\n                       conditional should be checked, part of an if-block can be an\r\n                       \"else if\", which allows for secondary condition checking.\r\n                       A simple example can be found below:\r\n                   </p>\r\n<pre>if (condition1) {\r\n   code to run if condition1 is true\r\n} else if (conditon2) {\r\n   code to run if condition2 is true\r\n} else {\r\n   code to run if both are false\r\n}</pre>\r\n                   <p>\r\n                       The final \"else\" isn\'t required, but it is effectively the\r\n                       \"if all else fails\" section of code.\r\n                   </p>\r\n                   <br />\r\n                   <h2>Comparison Operators</h2>\r\n                   <p>\r\n                       Say you want to test if one variable is greater than or \r\n                       equal to 5, how would you go about doing that?  Java has a \r\n                       number of what\'s known as comparison operators that can be \r\n                       used to compare two items.  The example described would be \r\n                       written like this:\r\n                   </p>\r\n<pre>if (var1 &gt;= 5){\r\n   code to run\r\n}</pre>\r\n                   <p>\r\n                       What if you wanted to compare the values of two variables \r\n                       though?  Simple replace the \"5\" with the other variable\'s \r\n                       name.\r\n                   </p>\r\n                   <br />\r\n                   <p>\r\n                       The other comparison operators found in Java are outlined \r\n                       below:\r\n                   </p>\r\n<pre>\r\n== : \"equal to\"\r\n!= : \"NOT equal to\"\r\n&lt;  : \"less than\"\r\n&lt;= : \"less than or equal to\"\r\n&gt;  : \"greater than\"\r\n&gt;= : \"greater than or equal to\"\r\n</pre>\r\n                   <h2>Chaining Conditions</h2>\r\n                   <p>\r\n                       Sometimes a program needs to check if several conditions are\r\n                       met before running a section of code.  This can be achieved\r\n                       using a series of ANDs, ORs and NOTs.  For example, if you\r\n                       want to run a section of code if a integer variable \"var1\" \r\n                       is greater than 5 <strong>AND</strong> a variable \"var2\" is\r\n                       the same as var1, you would write:\r\n                   </p>\r\n<pre>if (var1 &gt; 5 && var2 == var1) {\r\n   code to run\r\n}</pre>\r\n                   <p>\r\n                       In plain English, this is read \"if var1 is greater than 5 \r\n                       and var2 equals var1, run the code.\"  Using an AND means that\r\n                       if either of the conditions is not true, the code will not \r\n                       run.  But what if you wanted to run the code if one or the \r\n                       other was true?  This is where the OR comes in handy.  Using\r\n                       the example above, if you wanted to run the code if var1 is\r\n                       greater than 5 OR var2 is exactly var1, you would write:\r\n                   </p>\r\n<pre>if (var1 &gt; 5 || var2 == var1) {\r\n   code to run\r\n}</pre>\r\n                   <p>\r\n                       By this point you might be confused what these \"&&\" and \"||\"\r\n                       bits are.  In Java, to denote a conditional AND, two \r\n                       ampersands (&&) are needed.  Similarly, two pipe characters\r\n                       (||, typed by pressing shift and the backslash key) \r\n                       indicates a conditional OR.\r\n                   </p>\r\n                   <br />\r\n                   <p>\r\n                       Sometimes you might want to run a section of code if a \r\n                       condition is NOT true.  This is where the Boolean inverse\r\n                       comes in handy.  Say you want to run a section of code if\r\n                       var2 is NOT 5.  To do this you would write:\r\n                   </p>\r\n<pre>if (var2 != 5) {\r\n   code to run\r\n}</pre>\r\n                   <p>\r\n                       Java\'s Boolean inverse is denoted by an exclamation point,\r\n                       \"!\".  If you want to see if something is NOT equal you use\r\n                       \"!=\", however this isn\'t the only use of the NOT denoter.  \r\n                       If you want to flip the result of an entire condition, you \r\n                       can wrap it in parentheses and put an exclamation point \r\n                       before it.  Using an example used before:\r\n                   </p>\r\n<pre>if (!(var1 &gt; 5 || var2 == var1) ) {\r\n   code to run\r\n}</pre>\r\n                   <p>\r\n                       In English, this is like saying: \"If var1 is greater than 5\r\n                       or var2 is exactly 5, do not run this code.\"  Boolean logic\r\n                       can be distributed much like multiplication, so the above\r\n                       example can be rewritten to be:\r\n                   </p>\r\n<pre>if (var1 &lt;= 5 && var1 != var2) {\r\n   code to run\r\n}</pre>\r\n                   <p>\r\n                       You\'ll notice here that everything has been flipped to be\r\n                       the \"opposite\" comparison.  When distributing a NOT, every\r\n                       comparison is flipped to be what is the exact opposite (as\r\n                       it is the boolean inverse). Equals, \"==\" becomes \"!=\", \"&lt;\" \r\n                       becomes \"&gt;=\", and \"||\" becomes \"&&\".  We\'ll discuss more \r\n                       in the next section about what the inverse of each Boolean\r\n                       logic item is.\r\n                   </p>\r\n                   <br />\r\n                   <h2>Some Truths</h2>\r\n                   <p>\r\n                       Below are the basic truths that affect Boolean operations\r\n                       and their \"logical equivalents\".\r\n                   </p>\r\n                   <h3>AND</h3>\r\n                   <pre>if (!condition1 && !condition2) {...}</pre>\r\n                   <p>is logically equivalent to</p>\r\n                   <pre>if (!(condition1 || condition2)) {...}</pre>\r\n                   <h3>OR</h3>\r\n                   <pre>if (!condition1 || !condition2) {...}</pre>\r\n                   <p>is logically equivalent to</p>\r\n                   <pre>if (!(condition1 && condition2)) {...}</pre>\r\n                   <h3>EQUALS</h3>\r\n                   <pre>if (var1 != var2) {...}</pre>\r\n                   <p>is logically equivalent to</p>\r\n                   <pre>if (!(condition1 == condition2)) {...}</pre>\r\n                   <h3>LESS/GREATER THAN</h3>\r\n                   <pre>if (var1 &gt;= var2) {...}</pre>\r\n                   <p>is logically equivalent to</p>\r\n                   <pre>if (!(condition1 &lt; condition2)) {...}</pre>\r\n                   <p>\r\n                       There are of course others, but these highlight the main \r\n                       equivalents that are encountered most often while \r\n                       programming.\r\n                   </p>\r\n                   <br />\r\n                   <h2>Short-Circuit Evaluation</h2>\r\n                   <p>\r\n                       Java attempts to optimize the amount of conditions that are\r\n                       tested by only performing as many checks as it needs.  \r\n                       For example, a sequence of conditions separated by ORs is \r\n                       true if ANY of the conditions are true, so Java will only\r\n                       go as far as it needs to get a true result.  If var1 is 5 \r\n                       and var2 is false and we have the code:\r\n                   </p>\r\n                   <pre>if (var1 == 5 || var2) {...}</pre>\r\n                   <p>\r\n                       Java won\'t even check for the value of var2 since \"var1==5\" \r\n                       is true.  This is a process known as short-circuit \r\n                       evaluation.  \r\n                   </p>\r\n                   <br />\r\n                   <p>\r\n                       As a small aside about the above snippet, if a variable is a \r\n                       boolean type to begin with, there is no need to see if it is \r\n                       equal to true or false.  If you want to check if a boolean \r\n                       variable is true you can simply write:\r\n                   </p>\r\n<pre>if (var1) {\r\n   code to run\r\n}</pre>\r\n                   <p>\r\n                       Similarly, if you want to execute the code in the if-block\r\n                       if var1 is false, you can write:\r\n                   </p>\r\n<pre>if (!var1) {\r\n   code to run\r\n}</pre>\r\n                   <p>\r\n                       Now back to short-circuit evaluation.  The same process is\r\n                       applied to ANDs.  If any of the conditions evaluate to \r\n                       false, the entire block will evaulate to false, and thus\r\n                       if Java evaluates a comparison to false, the entire section\r\n                       becomes false.\r\n                   </p>\r\n                   <br />\r\n                   <h2>Parenthesizing</h2>\r\n                   <p>\r\n                       The last step in mastering Boolean logic, is knowing that\r\n                       in an if-block, groups of comparisons can be grouped \r\n                       together by parentheses, and they will be evaluated much \r\n                       like how PEMDAS works.  See the following code for an \r\n                       example of this:\r\n                   </p>\r\n<pre>if ((var1 == var2 || var1 == 5) && var1 > 2){\r\n   code to run\r\n}</pre>\r\n                   <p>\r\n                       When the program is running, Java will first go into the\r\n                       parentheses around the first two conditions and evaluate \r\n                       that to a single Boolean value before continuing on with the\r\n                       rest of the conditions.  Parentheses help make code more \r\n                       readable by others and allow for more explicitly stating \r\n                       which sections of an if-block are related to one another.\r\n                   </p>\r\n                   <br />\r\n               <!-- end main content div -->\r\n           </section>\r\n           <!-- end main content section -->\r\n       </div>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
