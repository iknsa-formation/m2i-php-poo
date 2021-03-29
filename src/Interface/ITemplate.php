<?php

// Declaration de l'interface 'iTemplate'
interface ITemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}