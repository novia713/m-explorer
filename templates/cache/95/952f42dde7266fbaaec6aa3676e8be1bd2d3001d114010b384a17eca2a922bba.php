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

/* partials/head.twig */
class __TwigTemplate_a445428356a7a77865b3d3d75000f467faf90df3c05a0314c9461fa979140189 extends Template
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
        echo "<head>
    <script type=\"text/javascript\" rel=\"prefetch\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script rel=\"prefetch\" src=\"https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js\"></script>
    <script rel=\"prefetch\" src=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js\"></script>
    <script rel=\"prefetch\" src=\"https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.min.js\"></script>
    <script type=\"text/javascript\" src=\"m-explorer.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"m-explorer.css\">
    <link rel='shortcut icon' href='assets/ico/favicon.ico' type='image/x-icon' />
</head>";
    }

    public function getTemplateName()
    {
        return "partials/head.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <script type=\"text/javascript\" rel=\"prefetch\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script rel=\"prefetch\" src=\"https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/js/foundation.min.js\"></script>
    <script rel=\"prefetch\" src=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js\"></script>
    <script rel=\"prefetch\" src=\"https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.min.js\"></script>
    <script type=\"text/javascript\" src=\"m-explorer.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"m-explorer.css\">
    <link rel='shortcut icon' href='assets/ico/favicon.ico' type='image/x-icon' />
</head>", "partials/head.twig", "/Users/leandro/git/m-explorer/templates/partials/head.twig");
    }
}
