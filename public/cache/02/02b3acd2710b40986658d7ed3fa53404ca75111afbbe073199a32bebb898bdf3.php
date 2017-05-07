<?php

/* index.html.twig */
class __TwigTemplate_ddbf408690afb9486e9bbfcc3bb26e5ac771964f0905c3a361476861845e0e7f extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"/alexa/public/css/main.css\"/>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>

<body>
";
        // line 11
        echo "<div class=\"row title\">
    <div class=\"col-md-4\"></div>
    <div class=\"col-md-6\">
        <h1> GherkinCase </h1>
    </div>
    <div class=\"col-md-4\"></div>

</div>

";
        // line 21
        echo "<div class=\"row\">

    ";
        // line 24
        echo "    <div class=\"col-md-4\" id=\"left\">
        <br/>Select Test Suite
";
        // line 26
        echo twig_escape_filter($this->env, ($context["testSuites"] ?? null), "html", null, true);
        echo "
        <br/>Select Feature
        <br/>Create new test suite
        <input type=\"text\" title=\"newTestSuite\" id=\"newTestSuite\"/>
        <input type=\"submit\" id=\"saveNewTestSuite\"/>
        <br/>Create new Feature
        <input type=\"text\" title=\"newFeature\" id=\"newFeature\"/>
        <input type=\"submit\" id=\"saveNewFeature\"/>

    </div>

    <div class=\"col-md-6\" id=\"central\">

        Search for a step definition or write your own!
        <br/>

        <form id=\"search\" action=\"index.html.twig\" method=\"get\">
        <select id=\"prefixes\" title=\"stepPrefix\">
            <option value=\"given\">Given</option>
            <option value=\"when\">When</option>
            <option value=\"then\">Then</option>
            <option value=\"and\">And</option>
        </select>
<div class=\"form-group row\">
    <div class=\"col-xs-5\">
    <input class=\"form-control input-lg\" type=\"text\" placeholder=\"What would you like to do?\"/>
    </div>
</div>

        <input type=\"submit\" name=\"Create New SD\">
        </form>
        <br/>
        <br/>
        <div class=\"row\">
            <div class=\"scenario col-md-3\"> Your scenario:
                ";
        // line 62
        echo "                <br/> Given
                <br/> When
                <br/> Then

            </div>

            <div class=\"scenario col-md-3\">
                <input id=\"scenarioName\" type=\"text\" placeholder=\"Name your scenario!\"/>
                <input type=\"submit\" name=\"Save to Feature\"/>
            </div>
        </div>

    </div>

    <div class=\"col-md-2\" id=\"right\">
        <div>
            Filesystem

            ";
        // line 81
        echo "        </div>

    </div>
</div>
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
        return array (  107 => 81,  87 => 62,  49 => 26,  45 => 24,  41 => 21,  30 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>My Webpage</title>
    <link rel=\"stylesheet\" href=\"/alexa/public/css/main.css\"/>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>

<body>
{#Top section - to hold only te title#}
<div class=\"row title\">
    <div class=\"col-md-4\"></div>
    <div class=\"col-md-6\">
        <h1> GherkinCase </h1>
    </div>
    <div class=\"col-md-4\"></div>

</div>

{#Main section - hold everything else but the footer and title#}
<div class=\"row\">

    {#Create or select a test suite#}
    <div class=\"col-md-4\" id=\"left\">
        <br/>Select Test Suite
{{ testSuites }}
        <br/>Select Feature
        <br/>Create new test suite
        <input type=\"text\" title=\"newTestSuite\" id=\"newTestSuite\"/>
        <input type=\"submit\" id=\"saveNewTestSuite\"/>
        <br/>Create new Feature
        <input type=\"text\" title=\"newFeature\" id=\"newFeature\"/>
        <input type=\"submit\" id=\"saveNewFeature\"/>

    </div>

    <div class=\"col-md-6\" id=\"central\">

        Search for a step definition or write your own!
        <br/>

        <form id=\"search\" action=\"index.html.twig\" method=\"get\">
        <select id=\"prefixes\" title=\"stepPrefix\">
            <option value=\"given\">Given</option>
            <option value=\"when\">When</option>
            <option value=\"then\">Then</option>
            <option value=\"and\">And</option>
        </select>
<div class=\"form-group row\">
    <div class=\"col-xs-5\">
    <input class=\"form-control input-lg\" type=\"text\" placeholder=\"What would you like to do?\"/>
    </div>
</div>

        <input type=\"submit\" name=\"Create New SD\">
        </form>
        <br/>
        <br/>
        <div class=\"row\">
            <div class=\"scenario col-md-3\"> Your scenario:
                {#Insert step definitions#}
                <br/> Given
                <br/> When
                <br/> Then

            </div>

            <div class=\"scenario col-md-3\">
                <input id=\"scenarioName\" type=\"text\" placeholder=\"Name your scenario!\"/>
                <input type=\"submit\" name=\"Save to Feature\"/>
            </div>
        </div>

    </div>

    <div class=\"col-md-2\" id=\"right\">
        <div>
            Filesystem

            {#show all suites/features/scenarios#}
        </div>

    </div>
</div>
</body>
</html>", "index.html.twig", "C:\\xampp\\htdocs\\alexa\\app\\View\\home\\index.html.twig");
    }
}
