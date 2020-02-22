<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* my_colls.twig */
class __TwigTemplate_5fee94134fedc16c97f213d89061e61a0262440f6c3e197a689a6491806c20bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html>
\t";
        // line 2
        $this->loadTemplate("partials/head.twig", "my_colls.twig", 2)->display($context);
        // line 3
        echo "\t";
        $this->loadTemplate("partials/form.twig", "my_colls.twig", 3)->display($context);
        // line 4
        echo "
\t<div id=\"colls-container\">
\t\t<form method=\"post\" action=\"new_coll.php\">
\t\t\t<input name=\"coll_name\" type=\"text\" id=\"new_coll_input\"/>
\t\t\t<input name=\"address\" type=\"hidden\" class=\"my_address\"/>
\t\t\t<input type=\"submit\" value=\"New deck\" class=\"button tiny primary\">
\t\t</form>

\t\t<table id=\"table-colls-container\" class=\"hover stack\">
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["colls"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 14
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"coll\">
\t\t\t\t\t\t<a href=\"/c/?";
            // line 16
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"delete\">
\t\t\t\t\t\t<form method=\"get\" action=\"del_coll.php\">
\t\t\t\t\t\t\t<input name=\"address\" type=\"hidden\" class=\"my_address\"/>
\t\t\t\t\t\t\t<input name=\"coll_name\" type=\"hidden\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Remove\" class=\"button tiny alert\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</table>
\t</div>
</html>
";
    }

    public function getTemplateName()
    {
        return "my_colls.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  74 => 21,  64 => 16,  60 => 14,  56 => 13,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t{% include 'partials/head.twig' %}
\t{% include 'partials/form.twig' %}

\t<div id=\"colls-container\">
\t\t<form method=\"post\" action=\"new_coll.php\">
\t\t\t<input name=\"coll_name\" type=\"text\" id=\"new_coll_input\"/>
\t\t\t<input name=\"address\" type=\"hidden\" class=\"my_address\"/>
\t\t\t<input type=\"submit\" value=\"New deck\" class=\"button tiny primary\">
\t\t</form>

\t\t<table id=\"table-colls-container\" class=\"hover stack\">
\t\t\t{% for key, val in colls %}
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"coll\">
\t\t\t\t\t\t<a href=\"/c/?{{ key }}\">{{ val }}</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"delete\">
\t\t\t\t\t\t<form method=\"get\" action=\"del_coll.php\">
\t\t\t\t\t\t\t<input name=\"address\" type=\"hidden\" class=\"my_address\"/>
\t\t\t\t\t\t\t<input name=\"coll_name\" type=\"hidden\" value=\"{{ key }}\"/>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Remove\" class=\"button tiny alert\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</table>
\t</div>
</html>
", "my_colls.twig", "/Users/leandro/git/m-explorer/templates/my_colls.twig");
    }
}
