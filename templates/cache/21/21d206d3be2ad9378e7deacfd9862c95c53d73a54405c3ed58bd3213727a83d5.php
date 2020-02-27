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

/* d.twig */
class __TwigTemplate_3839b42c80736534517fa0104be699d49dc46894257bc7538265bb138154bff4 extends Template
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

";
        // line 3
        $this->loadTemplate("partials/head.twig", "d.twig", 3)->display($context);
        // line 4
        echo "
<nav aria-label=\"You are here:\" role=\"navigation\">
  <ul class=\"breadcrumbs\">
    <li><a href=\"/\">Home</a></li>
    <li>";
        // line 8
        echo twig_escape_filter($this->env, ($context["coll_id"] ?? null), "html", null, true);
        echo "</li>
  </ul>
</nav>


<div id=\"cards-container\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cards"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 15
            echo "        <div class=\"card\"
            coll-id=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "domain_collection", [], "any", false, false, false, 16), "collection_number", [], "any", false, false, false, 16), "html", null, true);
            echo "\"
            level=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "level", [], "any", false, false, false, 17), "html", null, true);
            echo "\"
            card-id=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">

            <div class=\"reveal\" id=\"modal2x-";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 20), "html", null, true);
            echo "\" data-reveal>
                <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "image_2k", [], "any", false, false, false, 21), "html", null, true);
            echo "\" border=\"0\"/>
            </div>
            <div class='card-wrapper'>
                <img class='marble-img' loading=\"lazy\" src='";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "image", [], "any", false, false, false, 24), "html", null, true);
            echo "' border='0' />
            </div>

            <div class=\"card-section\">
                <p>coll id. <code> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "domain_collection", [], "any", false, false, false, 28), "collection_number", [], "any", false, false, false, 28), "html", null, true);
            echo " </code></em></p>
                <p>level <code> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "level", [], "any", false, false, false, 29), "html", null, true);
            echo " </code></em></p>


                    ";
            // line 32
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "domain_collection", [], "any", false, false, false, 32), "is_gold_card", [], "any", false, false, false, 32), true)) {
                // line 33
                echo "                    ";
                $context["badge"] = "badge";
                // line 34
                echo "                    ";
            } else {
                // line 35
                echo "                    ";
                $context["badge"] = "primary";
                // line 36
                echo "                    ";
            }
            // line 37
            echo "
                <p>
                <a href=\"https://marble.cards/card/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 39), "html", null, true);
            echo "\">
                <span class=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["badge"] ?? null), "html", null, true);
            echo " alert\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 40), "html", null, true);
            echo "</span></a></p>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
</div>
</html>
";
    }

    public function getTemplateName()
    {
        return "d.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 44,  127 => 40,  123 => 39,  119 => 37,  116 => 36,  113 => 35,  110 => 34,  107 => 33,  105 => 32,  99 => 29,  95 => 28,  88 => 24,  82 => 21,  78 => 20,  73 => 18,  69 => 17,  65 => 16,  62 => 15,  58 => 14,  49 => 8,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>

{% include 'partials/head.twig' %}

<nav aria-label=\"You are here:\" role=\"navigation\">
  <ul class=\"breadcrumbs\">
    <li><a href=\"/\">Home</a></li>
    <li>{{ coll_id }}</li>
  </ul>
</nav>


<div id=\"cards-container\">
    {% for key, val in cards %}
        <div class=\"card\"
            coll-id=\"{{val.domain_collection.collection_number}}\"
            level=\"{{val.level}}\"
            card-id=\"{{val.nft_id}}\">

            <div class=\"reveal\" id=\"modal2x-{{ val.nft_id }}\" data-reveal>
                <img src=\"{{ val.image_2k }}\" border=\"0\"/>
            </div>
            <div class='card-wrapper'>
                <img class='marble-img' loading=\"lazy\" src='{{val.image}}' border='0' />
            </div>

            <div class=\"card-section\">
                <p>coll id. <code> {{val.domain_collection.collection_number}} </code></em></p>
                <p>level <code> {{val.level}} </code></em></p>


                    {% if val.domain_collection.is_gold_card == true %}
                    {% set badge = \"badge\" %}
                    {% else %}
                    {% set badge = \"primary\" %}
                    {% endif %}

                <p>
                <a href=\"https://marble.cards/card/{{ val.nft_id }}\">
                <span class=\"{{ badge }} alert\">{{ val.nft_id }}</span></a></p>
            </div>
        </div>
    {% endfor %}

</div>
</html>
", "d.twig", "/Users/leandro/git/m-explorer/templates/d.twig");
    }
}
