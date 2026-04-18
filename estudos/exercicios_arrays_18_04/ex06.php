<?php

//Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto.

$stringJson = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';

var_dump(json_decode($stringJson, true));                                                   