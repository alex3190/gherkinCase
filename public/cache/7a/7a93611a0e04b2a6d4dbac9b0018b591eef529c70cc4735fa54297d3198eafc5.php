<?php

/* index.html.twig */
class __TwigTemplate_9f7d19c31ba32dadef5d0188fb103b5a2ca789fbd1bbe44bc82ca6e5f851dd6c extends Twig_Template
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
    <title>My Webpage</title>
</head>


<body>
<h1>GherkinCase</h1>
";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\xampp\\htdocs\\alexa\\app\\view\\home\\index.html.twig");
    }
}
