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
    <script type=\"text/javascript\" rel=\"prefetch\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script rel=\"prefetch\" src=\"https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js\"></script>
    <script rel=\"prefetch\" src=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js\"></script>
    <script rel=\"prefetch\" src=\"https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.min.js\"></script>
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
        // line 17
        echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
        echo "\" />
        </span>
        <span>
            Collection:
            <select id=\"select2_domains\" name=\"domain\"></select>
            <span id=\"reset_select\" class=\"radius secondary label\">Reset collection</span>
        </span>
    </div>
    <div id=\"buttons\">
        <div class=\"btn_container text_container\">
            Text: <input type=\"text\" name=\"text\" id=\"text\" size=\"30\" value=\"";
        // line 27
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
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "cards", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 89
            echo "        <div class=\"card\"
            coll-id=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "domain_collection", [], "any", false, false, false, 90), "collection_number", [], "any", false, false, false, 90), "html", null, true);
            echo "\"
            level=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "level", [], "any", false, false, false, 91), "html", null, true);
            echo "\"
            card-id=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 92), "html", null, true);
            echo "\">

            <button data-toggle=\"dropdown-";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 94), "html", null, true);
            echo "\" class=\"or\">&or;</button>
            <ul class=\"dropdown-pane\" id=\"dropdown-";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 95), "html", null, true);
            echo "\" data-dropdown>
                <li><a href=\"#\" data-open=\"modal2x-";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 96), "html", null, true);
            echo "\">2x</a></li>
                <li>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "marbled", [], "any", false, false, false, 97), "html", null, true);
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
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 106), "html", null, true);
            echo "\"/>
                                    <input type=\"button\" class=\"calculate button tiny\" data-id=\"";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 107), "html", null, true);
            echo "\"  value=\"Calculate needed XP\"/>
                                </div>
                            </div>
                            <div class=\"actual_level\" id=\"actual_level_";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 110), "html", null, true);
            echo "\">
                                ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "level", [], "any", false, false, false, 111), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                <li>
                <div class=\"result\" id=\"result_";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 116), "html", null, true);
            echo "\"></div>
            </ul>
            <div class=\"reveal\" id=\"modal2x-";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 118), "html", null, true);
            echo "\" data-reveal>
                <img src=\"";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "image_2k", [], "any", false, false, false, 119), "html", null, true);
            echo "\" border=\"0\"/>
            </div>
            <div class='card-wrapper'>
                <img class='marble-img' src='";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "image", [], "any", false, false, false, 122), "html", null, true);
            echo "' border='0' />
            </div>

            <div class=\"card-section\">
                <p>coll id. <code> ";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "domain_collection", [], "any", false, false, false, 126), "collection_number", [], "any", false, false, false, 126), "html", null, true);
            echo " </code></em></p>
                <p>level <code> ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "level", [], "any", false, false, false, 127), "html", null, true);
            echo " </code></em></p>


                    ";
            // line 130
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["val"], "domain_collection", [], "any", false, false, false, 130), "is_gold_card", [], "any", false, false, false, 130), true)) {
                // line 131
                echo "                    ";
                $context["badge"] = "badge";
                // line 132
                echo "                    ";
            } else {
                // line 133
                echo "                    ";
                $context["badge"] = "primary";
                // line 134
                echo "                    ";
            }
            // line 135
            echo "
                <p>
                <a href=\"https://marble.cards/card/";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 137), "html", null, true);
            echo "\">
                <span class=\"";
            // line 138
            echo twig_escape_filter($this->env, ($context["badge"] ?? null), "html", null, true);
            echo " alert\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nft_id", [], "any", false, false, false, 138), "html", null, true);
            echo "</span></a></p>
                <button class='button tiny'>Add to deck</button>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "
</div>
</html>
";
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
        return array (  265 => 143,  252 => 138,  248 => 137,  244 => 135,  241 => 134,  238 => 133,  235 => 132,  232 => 131,  230 => 130,  224 => 127,  220 => 126,  213 => 122,  207 => 119,  203 => 118,  198 => 116,  190 => 111,  186 => 110,  180 => 107,  176 => 106,  164 => 97,  160 => 96,  156 => 95,  152 => 94,  147 => 92,  143 => 91,  139 => 90,  136 => 89,  132 => 88,  68 => 27,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/Users/leandro/git/m-explorer/templates/index.twig");
    }
}
