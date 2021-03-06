<?php
/*

Class & Object

- Class is a blueprint that u can create object from
- object is a member in the main application
- class has properties
- variable inside class = property
- variable outside class = variable
- function inside class = method
- function outside class = function
- [class] = class keyword
- [new] = new object
- [public, private, protected]
- [->] = object operator
- [ $this ] = pseudo variable [ refer to object properties ]
- [ :: ] = scope resolution operator [ pammayim nekudotayim ] = double colon

Apple
- Class       = Apple blueprint Design
- Object      = iphone that China made
- Application = Apple store

Web Application Registeration
- class       = code to add new member
- object      = the member
- Application = web application registeration

Blog system
- class       = code to add new post,  article, news, information
- object      = post, article, news, information
- Apllication = blog system

$this vs self

-self:

- refer to current class
- access static members
- not use ( $ ) because its not represent variable but present class construction

-$this:
- refer to current object
- access non static varible
- use ($) vecause it represent a variable

 * class Abstraction
- can not be instantiated [ can not create object from ]
- made for other classes to inhert properites and methods from
- can have methods and properities
- can have abstracted method and non abstracted method
- abstract methods [ contains no body code ]
- rules to go on
- force devlopers to follow your methods
- Removing the Abstraction Class will not effect the child classes

 * interface
- all properites final and constants
- all methods are public and abstract

 * polymorphism
- have methods without body code

 * visibility markers [ security level ]
1- public => [default in php]
2- protected
3- private
 * magic methods
- method with special name start with double underscore [ __ ]
1)__construct:
-- called when object is created
-- can be inherted
2)__destruct
-- called when object is destroyed
3)__call
-- called when invoking function not accessible or not found
-- accept two parameters [ $methodName , $params ]
4)__get
-- called when getting a property not accessible or not found
-- accept one parameter [ $prop ]
5)__set
-- called when setting a value to a property not accessible or not found
-- accept two parameters [ $prop, $value]
6)__clone - clone
-- typical copy of object in php works by reference.
-- means both ( main and copied ) object will be interlinked [ the same ].
-- the clone operation creates a so-called shallow copy of the original instance
which means that it constructs a new object with all fields duplicated
-- the above technique works with a class having data members that are of intrinsic type
i.e. int boolean, string, float etc however, this technique not work with a class that has a data
member which is an object of another class. in such senario, the clone object continues to share
the reference  of thr data member object of the class that was cloned.
-- magic method clone executes when object cloning is performed.
 * static
- static properties/methods are used to access properties/methods in a global scope
- declaring class properties or methods as static
make them accessible without needing an instantiation of the class
- because static methods are callable without an intsance of the object created
$this is not available inside the method declared as static
- a property declared as static can not be accessed
with an instantiated class object (a static method can)
- one of the major benefits to using static properties is that they keep their
stored values for the duration of the script
 * methods chaining
- when a class's method return the $this keyword, they can be chained together
 * trait => php 5.4
-a mechanism for code reuse in single inhertance language such as php
- problem with extending classes, is that u can only extend one. this is a little limiting
- with traits its possible for php classes to inherit methods & properties from multi sources.

- you can not extend or implements.
- you can not instantiate.
- its supporting class not replacing it.
- can have methods.
- have priority over class of parent but not the same class.
 */
