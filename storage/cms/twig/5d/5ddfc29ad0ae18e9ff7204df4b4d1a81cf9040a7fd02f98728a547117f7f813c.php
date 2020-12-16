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

/* /Users/davinjaya/Sites/OctoberCMS/themes/demo/partials/hero-banner.htm */
class __TwigTemplate_88dc10980c1c4aad44c3606fff856548a7793368b2a32cc8d5ea74baf0f638de extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("theme" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"wrapper\">
    <div class=\"c-hero\">
        <div class=\"row\">
        <!-- Populate the component via hero-banner.js -->
        </div>
    </div>
</div>
<script src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/partial/hero-banner.js");
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "/Users/davinjaya/Sites/OctoberCMS/themes/demo/partials/hero-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrapper\">
    <div class=\"c-hero\">
        <div class=\"row\">
        <!-- Populate the component via hero-banner.js -->
        </div>
    </div>
</div>
<script src=\"{{ 'assets/javascript/partial/hero-banner.js'|theme }}\"></script>", "/Users/davinjaya/Sites/OctoberCMS/themes/demo/partials/hero-banner.htm", "");
    }
}
