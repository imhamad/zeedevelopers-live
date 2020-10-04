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

/* themes/gavias_buildpro/templates/page/header-4.html.twig */
class __TwigTemplate_02894ee1aabdd764543289791857f07a441aba5398f3c27297e4d3177d6cf772 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3, "set" => 13];
        $filters = ["escape" => 7];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
        echo "<header id=\"header\" class=\"header-v5\">

  ";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "topbar", [])) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"content\">";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topbar", [])), "html", null, true);
            echo "</div>
        </div>
      </div>
    </div>
  ";
        }
        // line 12
        echo "
  ";
        // line 13
        $context["class_sticky"] = "";
        // line 14
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 15
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 16
            echo "  ";
        }
        // line 17
        echo "
  <div class=\"header-main\">
    <div class=\"container\">
      <div class=\"header-inner clearfix\">
        <div class=\"row\">
          <div class=\"col-md-3 col-sm-12 col-xs-12 branding\">
            ";
        // line 23
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 24
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
            ";
        }
        // line 26
        echo "          </div>
          <div class=\"col-md-9 col-sm-12 col-xs-12\">
            ";
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "header_right", [])) {
            // line 29
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_right", [])), "html", null, true);
            echo "
            ";
        }
        // line 31
        echo "          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"main-menu ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null)), "html", null, true);
        echo "\">
    <div class=\"container header-content-layout\">
      <div class=\"header-main-inner p-relative\">
        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12 p-static\">
            <div class=\"area-main-menu\">
              <div class=\"area-inner\">
                <div class=\"gva-offcanvas-mobile\">
                  <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                  ";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 47
            echo "                    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "

                  ";
        }
        // line 50
        echo "                  ";
        if ($this->getAttribute(($context["page"] ?? null), "offcanvas", [])) {
            // line 51
            echo "                    <div class=\"after-offcanvas hidden\">
                      ";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "offcanvas", [])), "html", null, true);
            echo "
                    </div>
                 ";
        }
        // line 55
        echo "                </div>

                <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                  <span class=\"one\"></span>
                  <span class=\"two\"></span>
                  <span class=\"three\"></span>
                </div>

                ";
        // line 63
        if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
            // line 64
            echo "                  <div class=\"gva-search-region search-region\">
                    <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                    <div class=\"search-content\">
                      ";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
                    </div>
                  </div>
                ";
        }
        // line 71
        echo "              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_buildpro/templates/page/header-4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 71,  174 => 67,  169 => 64,  167 => 63,  157 => 55,  151 => 52,  148 => 51,  145 => 50,  138 => 47,  136 => 46,  124 => 37,  116 => 31,  110 => 29,  108 => 28,  104 => 26,  98 => 24,  96 => 23,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  74 => 12,  66 => 7,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_buildpro/templates/page/header-4.html.twig", "/Users/hamad/WebServer/zeedevelopers/themes/gavias_buildpro/templates/page/header-4.html.twig");
    }
}
