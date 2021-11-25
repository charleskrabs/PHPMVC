<?php

//Une interface permet de mettre une regle de nommage dans les class qu'il l'appel
interface nomage
{
    function __set($attr, $value);
    function __get($attr);

}