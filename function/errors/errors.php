<?php
/*Реализуйте функцию generateError, которая внутри себя должна вызвать несуществующую функцию, 
что приведет к ошибке. Именно эту ошибку ожидает проверочная система.
 */

 function generateError(){
    myTestErrorFunc();
 };

 generateError();