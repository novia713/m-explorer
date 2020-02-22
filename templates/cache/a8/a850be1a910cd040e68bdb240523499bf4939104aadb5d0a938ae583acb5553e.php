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

/* partials/form.twig */
class __TwigTemplate_5e6219a9e97838ec48bcae7ddb5a9523ba0f1d6851d0f6edfc827ab9f84a85f2 extends Template
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
        echo "<form name=\"formu\" method=\"get\" id=\"formu\" action=\"index.php\">
\t\t<div id=\"address_container\">
\t\t\t<span>
\t\t\t\tEth address:
\t\t\t\t<input type=\"text\" name=\"address\" id=\"address\" size=\"30\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
        echo "\"/>
\t\t\t</span>
\t\t\t<span>
\t\t\t\tCollection:
\t\t\t\t<select id=\"select2_domains\" name=\"domain\"></select>
\t\t\t\t<span id=\"reset_select\" class=\"radius secondary label\">Reset collection</span>
\t\t\t</span>
\t\t</div>
\t\t<div id=\"buttons\">
\t\t\t<div class=\"btn_container text_container\">
\t\t\t\tText:
\t\t\t\t<input type=\"text\" name=\"text\" id=\"text\" size=\"30\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"btn_container\">
\t\t\t\tLimit
\t\t\t\t<input type=\"number\" value=\"15\" id=\"limit\" name=\"limit\"/>
\t\t\t</div>
\t\t\t<div class=\"btn_container gold_container\">
\t\t\t\t<p>Gold</p>
\t\t\t\t<div class=\"switch\">
\t\t\t\t\t<input class=\"switch-input\" id=\"gold\" type=\"checkbox\" name=\"gold\">
\t\t\t\t\t<label class=\"switch-paddle\" for=\"gold\">
\t\t\t\t\t\t<span class=\"show-for-sr\">Gold</span>
\t\t\t\t\t\t<span class=\"switch-active\" aria-hidden=\"true\">Yes</span>
\t\t\t\t\t\t<span class=\"switch-inactive\" aria-hidden=\"true\">No</span>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"btn_container origin_container\">
\t\t\t\t<p>Origin</p>
\t\t\t\t<div class=\"switch\">
\t\t\t\t\t<input class=\"switch-input\" id=\"origin\" type=\"checkbox\" name=\"origin\">
\t\t\t\t\t<label class=\"switch-paddle\" for=\"origin\">
\t\t\t\t\t\t<span class=\"show-for-sr\">Origin</span>
\t\t\t\t\t\t<span class=\"switch-active\" aria-hidden=\"true\">Yes</span>
\t\t\t\t\t\t<span class=\"switch-inactive\" aria-hidden=\"true\">No</span>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"btn_container genesis_container\">
\t\t\t\t<p>Genesis</p>
\t\t\t\t<div class=\"switch\">
\t\t\t\t\t<input class=\"switch-input\" id=\"genesis\" type=\"checkbox\" name=\"genesis\">
\t\t\t\t\t<label class=\"switch-paddle\" for=\"genesis\">
\t\t\t\t\t\t<span class=\"show-for-sr\">Genesis</span>
\t\t\t\t\t\t<span class=\"switch-active\" aria-hidden=\"true\">Yes</span>
\t\t\t\t\t\t<span class=\"switch-inactive\" aria-hidden=\"true\">No</span>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"btn_container ascending_container\">
\t\t\t\t<p>Ascending</p>
\t\t\t\t<div class=\"switch\">
\t\t\t\t\t<input class=\"switch-input\" id=\"ascending\" type=\"checkbox\" name=\"ascending\">
\t\t\t\t\t<label class=\"switch-paddle\" for=\"ascending\">
\t\t\t\t\t\t<span class=\"show-for-sr\">Ascending</span>
\t\t\t\t\t\t<span class=\"switch-active\" aria-hidden=\"true\">Yes</span>
\t\t\t\t\t\t<span class=\"switch-inactive\" aria-hidden=\"true\">No</span>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input type=\"submit\" value=\"Go!\" class=\"button\"/>
\t\t\t<button type=\"button\" id=\"mosaic\" class=\"button success\">Mosaic</button>
\t\t</div>
\t\t<div id=\"sorting_buttonz\">
\t\t\t<button type=\"button\" id=\"sort_coll_id_asc\" class=\"button tiny secondary\">Sort coll id ASC</button>
\t\t\t<button type=\"button\" id=\"sort_coll_id_desc\" class=\"button tiny secondary\">Sort coll id DESC</button>
\t\t\t<button type=\"button\" id=\"sort_level_asc\" class=\"button tiny secondary\">Level ASC</button>
\t\t\t<button type=\"button\" id=\"sort_level_desc\" class=\"button tiny secondary\">Level DESC</button>
\t\t</div>
\t</form>";
    }

    public function getTemplateName()
    {
        return "partials/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form name=\"formu\" method=\"get\" id=\"formu\" action=\"index.php\">
\t\t<div id=\"address_container\">
\t\t\t<span>
\t\t\t\tEth address:
\t\t\t\t<input type=\"text\" name=\"address\" id=\"address\" size=\"30\" value=\"{{address}}\"/>
\t\t\t</span>
\t\t\t<span>
\t\t\t\tCollection:
\t\t\t\t<select id=\"select2_domains\" name=\"domain\"></select>
\t\t\t\t<span id=\"reset_select\" class=\"radius secondary label\">Reset collection</span>
\t\t\t</span>
\t\t</div>
\t\t<div id=\"buttons\">
\t\t\t<div class=\"btn_container text_container\">
\t\t\t\tText:
\t\t\t\t<input type=\"text\" name=\"text\" id=\"text\" size=\"30\" value=\"{{text}}\"/>
\t\t\t</div>
\t\t\t<div class=\"btn_container\">
\t\t\t\tLimit
\t\t\t\t<input type=\"number\" value=\"15\" id=\"limit\" name=\"limit\"/>
\t\t\t</div>
\t\t\t<div class=\"btn_container gold_container\">
\t\t\t\t<p>Gold</p>
\t\t\t\t<div class=\"switch\">
\t\t\t\t\t<input class=\"switch-input\" id=\"gold\" type=\"checkbox\" name=\"gold\">
\t\t\t\t\t<label class=\"switch-paddle\" for=\"gold\">
\t\t\t\t\t\t<span class=\"show-for-sr\">Gold</span>
\t\t\t\t\t\t<span class=\"switch-active\" aria-hidden=\"true\">Yes</span>
\t\t\t\t\t\t<span class=\"switch-inactive\" aria-hidden=\"true\">No</span>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"btn_container origin_container\">
\t\t\t\t<p>Origin</p>
\t\t\t\t<div class=\"switch\">
\t\t\t\t\t<input class=\"switch-input\" id=\"origin\" type=\"checkbox\" name=\"origin\">
\t\t\t\t\t<label class=\"switch-paddle\" for=\"origin\">
\t\t\t\t\t\t<span class=\"show-for-sr\">Origin</span>
\t\t\t\t\t\t<span class=\"switch-active\" aria-hidden=\"true\">Yes</span>
\t\t\t\t\t\t<span class=\"switch-inactive\" aria-hidden=\"true\">No</span>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"btn_container genesis_container\">
\t\t\t\t<p>Genesis</p>
\t\t\t\t<div class=\"switch\">
\t\t\t\t\t<input class=\"switch-input\" id=\"genesis\" type=\"checkbox\" name=\"genesis\">
\t\t\t\t\t<label class=\"switch-paddle\" for=\"genesis\">
\t\t\t\t\t\t<span class=\"show-for-sr\">Genesis</span>
\t\t\t\t\t\t<span class=\"switch-active\" aria-hidden=\"true\">Yes</span>
\t\t\t\t\t\t<span class=\"switch-inactive\" aria-hidden=\"true\">No</span>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"btn_container ascending_container\">
\t\t\t\t<p>Ascending</p>
\t\t\t\t<div class=\"switch\">
\t\t\t\t\t<input class=\"switch-input\" id=\"ascending\" type=\"checkbox\" name=\"ascending\">
\t\t\t\t\t<label class=\"switch-paddle\" for=\"ascending\">
\t\t\t\t\t\t<span class=\"show-for-sr\">Ascending</span>
\t\t\t\t\t\t<span class=\"switch-active\" aria-hidden=\"true\">Yes</span>
\t\t\t\t\t\t<span class=\"switch-inactive\" aria-hidden=\"true\">No</span>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input type=\"submit\" value=\"Go!\" class=\"button\"/>
\t\t\t<button type=\"button\" id=\"mosaic\" class=\"button success\">Mosaic</button>
\t\t</div>
\t\t<div id=\"sorting_buttonz\">
\t\t\t<button type=\"button\" id=\"sort_coll_id_asc\" class=\"button tiny secondary\">Sort coll id ASC</button>
\t\t\t<button type=\"button\" id=\"sort_coll_id_desc\" class=\"button tiny secondary\">Sort coll id DESC</button>
\t\t\t<button type=\"button\" id=\"sort_level_asc\" class=\"button tiny secondary\">Level ASC</button>
\t\t\t<button type=\"button\" id=\"sort_level_desc\" class=\"button tiny secondary\">Level DESC</button>
\t\t</div>
\t</form>", "partials/form.twig", "/Users/leandro/git/m-explorer/templates/partials/form.twig");
    }
}
