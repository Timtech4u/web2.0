<?php
//Here's some solutions to web test:
/*
1. 
Naming Variables in JavaScript/PHP:
Comparisons: 
- Your first character must not be a number but can be a letter or underscore
- Variables must not have spaces e.g. full name

Contrast:
- Variables must be declared in Javascript using the 'var' keyword e.g. var isAllowed = true; 
    In PHP variables must have the '$' before the variable name e.g. $isAllowed = true;

*/

 
//2. Create An Associated Array and Loop through Each Element.
//Init some variables
$ps = '';
$name= '';
$months = array('1st' => 'January', '2nd' => 'Febuary', '3rd' => 'March', '4th' => 'April', '5th' => 'May', '6th' => 'June', '7th' => 'July', '8th' => 'August', '9th' => 'September', '10th' => 'October', '11th' => 'November', '12th' => 'December');

foreach($months as $ps => $name){
    echo "The " . $ps . " month is " . $name . "<br>"; 
}

/*
3. 
a. getElementById(): this can used to find an Element by using it's id value e.g. 
HTML: <p id="demo"></p>
JavaScript: document.getElementById("demo");

b. getElementsByTagName():     this finds elements by tag name.
HTML: <p> </p>
JavaScript: document.getElementByTagName("p");

c. getElementsByName(): this finds elements by name, mostly used for input elements with name attributes.
HTML: <input type="submit" name="submit" />
JavaScript: document.getElementsByName("submit");

d. appendChild(): this is used to add an HTML element to the document.
*TODO: Write an example

e. veChild(): this is used to remove an HTML element to the document.
*TODO: Write an example

f. removeChild(): this is used to remove an HTML element from the document.
*TODO: Write an example

f. replaceChild(): this is used to replace an HTML element in the document.
*TODO: Write an example


*/
//4. Draw the DOM Tree after looking at sample below...


#Kindly Checkout n Suscribe: http://timtech4u.com.ng

?>