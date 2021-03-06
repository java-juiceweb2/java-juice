<!--
This file was created by Nicolas Suarez on 4/18/19
This is a reference page for ISTE 240 Group Project
-->

<?php

  	$filename = "quiz.php";
    $pagename = "Quiz";
    
    require "../assets/inc/header.php";

?>
    <div id="resources-container">
        <h2>System.out</h2>
        <p>The PrintStream out class is commonly used to output text to the console with System.out.println(data).</p>

        <h2>Int</h2>
        <p>Int is used to define a variable as being an integer value. This means that it will be a whole number and can be positive or negative.</p>

        <h2>Double</h2>
        <p>Double is similar to int in the sense that it defines a variable as being a number. However, doubles are "double-precision 64-bit IEEE 754 floating point" values. </p>

        <h2>String</h2>
        <p>String is used to create a variable that contains characters that can be things like letters and numbers. You cannot perform math on a string value. </p>

        <h2>java.lang.StringBuilder.append()</h2>
        <p>The append() method is used to take one string and attach it to the end of another. For example, if you had StringBuilder str = new StringBuilder("John"); and String 2 = " Smith";, you could use str.append("Smith"). After this, the variable str is now equal to "John Smith". </p>

        <h2>Operations</h2>
        <p>These characters are used in the java language to perform mathematical operations on variables. In the following examples, all of the variables are integers.  </p>

        <h3>+</h3>
        <p>The plus sign adds variables. For example, ans = num1 + num2, if num1 = 10 and num2 = 13 then ans would equal 23. You can also use the plus sign to increment the value of a variable by one. This is done by placing two plus signs at the end of the variable. For example, num1++.</p>

        <h3>-</h3>
        <p>The minus sign subracts the value of the variable to the right of the sign from the variable to the left. For example, num1 - num2 = ans, if num1 = 10 and num2 = 13 then ans would equal -3. You can also use the minus sign to decrement the value of a variable by one. This is done by placing two minus signs at the end of the variable. For example, num1--. </p>

        <h3>*</h3>
        <p>The asterisk acts as the symbol to denote multiplication. If you want ans = num1 * num2, where num1 = 10 and num2 = 13 then ans = 130. </p>

        <h3>/</h3>
        <p>The forward slash acts as the symbol to denote division. If you want ans = num1 / num2, where num1 = 10 and num2 = 10 then ans = 1. </p>
        <!--End of Operations-->

    </div>

<?php
    
    require "../assets/inc/footer.php";

?>
