<?php

/* ChatcodeBlogBundle:Blog:index.html.twig */
class __TwigTemplate_db2648a5fb4d2ef897a1a8f65c38ab60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Le Hello World de Symfony 2</title>
    </head>
    <body>
        <h1>Hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " !</h1>
        <p>
            Le ello World est un grand classique en prpgrammation. Il signifie énormément, car celà veut dire que vous avez réussi !
        </p>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ChatcodeBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
