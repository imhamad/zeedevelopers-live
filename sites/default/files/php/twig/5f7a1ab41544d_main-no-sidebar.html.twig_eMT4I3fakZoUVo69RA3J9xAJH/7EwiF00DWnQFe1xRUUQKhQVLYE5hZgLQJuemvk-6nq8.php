<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gavias_buildpro/templates/page/main-no-sidebar.html.twig */
class __TwigTemplate_8a61212cce40353452fd3af6957f239c7c20893fd6de203365308855f27b5634 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4];
        $filters = ["escape" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 1
        echo "<div class=\"content-main-inner\">
\t<div id=\"page-main-content\" class=\"main-content\">
\t\t<div class=\"main-content-inner\">
\t\t\t";
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 5
            echo "\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 9
        echo "
\t\t\t";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 11
            echo "\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 15
        echo "
\t\t\t";
        // line 16
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 17
            echo "\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 21
        echo "\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_buildpro/templates/page/main-no-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  93 => 18,  90 => 17,  88 => 16,  85 => 15,  79 => 12,  76 => 11,  74 => 10,  71 => 9,  65 => 6,  62 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_buildpro/templates/page/main-no-sidebar.html.twig", "/Users/hamad/WebServer/zeedevelopers/themes/gavias_buildpro/templates/page/main-no-sidebar.html.twig");
    }
}
