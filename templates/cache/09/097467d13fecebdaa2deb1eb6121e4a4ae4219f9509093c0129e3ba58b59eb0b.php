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

/* index.twig */
class __TwigTemplate_381c9a6e39442ba5a38f4baa59b07ddd25addd1ee0a461ba855ace62bd3d502d extends Template
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

<head>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js\"></script>
    <script type=\"text/javascript\" src=\"m-explorer.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"m-explorer.css\">
</head>
<form name=\"formu\" method=\"get\" id=\"formu\">
    <div id=\"address_container\">
        <span>
            Eth address: <input type=\"text\" name=\"address\" id=\"address\" size=\"30\"
                value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
        echo "\" />
        </span>
        <span>
            Collection:
            <select id=\"select2_domains\" name=\"domain\"></select>
        </span>
    </div>
    <div id=\"buttons\">
        <div class=\"btn_container text_container\">
            Text: <input type=\"text\" name=\"text\" id=\"text\" size=\"30\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "\"/>
        </div>
        <div class=\"btn_container\">
            Limit <input type=\"number\" value=\"15\" id=\"limit\" name=\"limit\" />
        </div>
        <div class=\"btn_container gold_container\">
            <p>Gold</p>
            <div class=\"switch\">
                <input class=\"switch-input\" id=\"gold\" type=\"checkbox\" name=\"gold\">
                <label class=\"switch-paddle\" for=\"gold\">
                    <span class=\"show-for-sr\">Gold</span>
                    <span class=\"switch-active\" aria-hidden=\"true\">Yes</span>
                    <span class=\"switch-inactive\" aria-hidden=\"true\">No</span>
                </label>
            </div>
        </div>
        <div class=\"btn_container origin_container\">
            <p>Origin</p>
            <div class=\"switch\">
                <input class=\"switch-input\" id=\"origin\" type=\"checkbox\" name=\"origin\">
                <label class=\"switch-paddle\" for=\"origin\">
                    <span class=\"show-for-sr\">Origin</span>
                    <span class=\"switch-active\" aria-hidden=\"true\">Yes</span>
                    <span class=\"switch-inactive\" aria-hidden=\"true\">No</span>
                </label>
            </div>
        </div>
        <div class=\"btn_container genesis_container\">
            <p>Genesis</p>
            <div class=\"switch\">
                <input class=\"switch-input\" id=\"genesis\" type=\"checkbox\" name=\"genesis\">
                <label class=\"switch-paddle\" for=\"genesis\">
                    <span class=\"show-for-sr\">Genesis</span>
                    <span class=\"switch-active\" aria-hidden=\"true\">Yes</span>
                    <span class=\"switch-inactive\" aria-hidden=\"true\">No</span>
                </label>
            </div>
        </div>
        <div class=\"btn_container ascending_container\">
            <p>Ascending</p>
            <div class=\"switch\">
                <input class=\"switch-input\" id=\"ascending\" type=\"checkbox\" name=\"ascending\">
                <label class=\"switch-paddle\" for=\"ascending\">
                    <span class=\"show-for-sr\">Ascending</span>
                    <span class=\"switch-active\" aria-hidden=\"true\">Yes</span>
                    <span class=\"switch-inactive\" aria-hidden=\"true\">No</span>
                </label>
            </div>
        </div>
        <input type=\"submit\" value=\"Go!\" class=\"button\" />
        <button type=\"button\" id=\"mosaic\" class=\"button success\">Mosaic</button>
    </div>
    <div id=\"sorting_buttonz\">
        <button type=\"button\" id=\"sort_coll_id_asc\" class=\"button tiny secondary\">Sort coll id ASC</button>
        <button type=\"button\" id=\"sort_coll_id_desc\" class=\"button tiny secondary\">Sort coll id DESC</button>
        <button type=\"button\" id=\"sort_level_asc\" class=\"button tiny secondary\">Level ASC</button>
        <button type=\"button\" id=\"sort_level_desc\" class=\"button tiny secondary\">Level DESC</button>
    </div>
</form>

<div id=\"cards-container\">
    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "cards", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 87
            echo "        <div class=\"card\" 
            coll-id=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "domain_collection", [], "any", false, false, false, 88), "collection_number", [], "any", false, false, false, 88), "html", null, true);
            echo "\" 
            level=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "level", [], "any", false, false, false, 89), "html", null, true);
            echo "\" 
            card-id=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 90), "html", null, true);
            echo "\">

            <button data-toggle=\"dropdown-";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 92), "html", null, true);
            echo "\" class=\"or\">&or;</button>
            <ul class=\"dropdown-pane\" id=\"dropdown-";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 93), "html", null, true);
            echo "\" data-dropdown>
                <li><a href=\"#\" data-open=\"modal2x-";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 94), "html", null, true);
            echo "\">2x</a></li>
                <li>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "marbled", [], "any", false, false, false, 95), "html", null, true);
            echo "</li>
                <li>
                    <div class=\"row\">
                        <div class=\"small-8 columns\">
                            <div class=\"row\">
                                <div class=\"small-3 columns\">
                                    <label for=\"desired_level\" class=\"right inline\">Level to</label>
                                </div>
                                <div class=\"small-9 columns\">
                                    <input type=\"number\" class=\"desired_level\" size=\"2\" id=\"desired_level_";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 104), "html", null, true);
            echo "\"/>
                                    <input type=\"button\" class=\"calculate button tiny\" data-id=\"";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 105), "html", null, true);
            echo "\"  value=\"Calculate needed XP\"/>
                                </div>
                            </div>
                            <div class=\"actual_level\" id=\"actual_level_";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 108), "html", null, true);
            echo "\">
                                ";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "level", [], "any", false, false, false, 109), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                <li>
                <div class=\"result\" id=\"result_";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 114), "html", null, true);
            echo "\"></div>
            </ul>
            <div class=\"reveal\" id=\"modal2x-";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 116), "html", null, true);
            echo "\" data-reveal>
                <img src=\"";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "image_2k", [], "any", false, false, false, 117), "html", null, true);
            echo "\" border=\"0\"/>
            </div>
            <div class='card-wrapper'>
                <img class='marble-img' src='";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "image", [], "any", false, false, false, 120), "html", null, true);
            echo "' border='0' />
            </div>

            <div class=\"card-section\">
                <p>coll id. <code> ";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "domain_collection", [], "any", false, false, false, 124), "collection_number", [], "any", false, false, false, 124), "html", null, true);
            echo " </code></em></p>
                <p>level <code> ";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "level", [], "any", false, false, false, 125), "html", null, true);
            echo " </code></em></p>

                
                    ";
            // line 128
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "domain_collection", [], "any", false, false, false, 128), "is_gold_card", [], "any", false, false, false, 128), true)) {
                // line 129
                echo "                    ";
                $context["badge"] = "badge";
                // line 130
                echo "                    ";
            } else {
                // line 131
                echo "                    ";
                $context["badge"] = "primary";
                // line 132
                echo "                    ";
            }
            // line 133
            echo "                
                <p>
                <a href=\"https://marble.cards/card/";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 135), "html", null, true);
            echo "\">
                <span class=\"";
            // line 136
            echo twig_escape_filter($this->env, ($context["badge"] ?? null), "html", null, true);
            echo " alert\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 136), "html", null, true);
            echo "</span></a></p>
                <button class='button tiny'>Add to deck</button>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "
</div>
</html>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 141,  250 => 136,  246 => 135,  242 => 133,  239 => 132,  236 => 131,  233 => 130,  230 => 129,  228 => 128,  222 => 125,  218 => 124,  211 => 120,  205 => 117,  201 => 116,  196 => 114,  188 => 109,  184 => 108,  178 => 105,  174 => 104,  162 => 95,  158 => 94,  154 => 93,  150 => 92,  145 => 90,  141 => 89,  137 => 88,  134 => 87,  130 => 86,  66 => 25,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/Users/leandro/git/m-explorer/templates/index.twig");
    }
}
