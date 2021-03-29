<?php

require_once "../Interface/ITemplate.php";

// Implémentation de l'interface
// Ceci va fonctionner
class Template implements ITemplate
{
    private array $vars = array();
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
        return $template;
    }
}
