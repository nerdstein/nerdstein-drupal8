<?php

/* themes/nerdstein/templates/page.html.twig */
class __TwigTemplate_f48d623e3e4eaa2d7c4e0ba754dfae5fc5ecfb892141384f8b9e4abc1a73bfbe extends Twig_Template
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
        $tags = array("if" => 55);
        $filters = array("t" => 72);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 53
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    ";
        // line 55
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 56
            echo "      <div class=\"highlighted\">
        <aside class=\"layout-container section clearfix\" role=\"complementary\">
          ";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 62
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "featured", array())) {
            // line 63
            echo "      <div class=\"featured\">
        <aside class=\"featured__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 69
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">

        <div class=\"sidebar\">
            <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
                <div class=\"section layout-container clearfix\">
                    ";
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
        echo "
                    ";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
                    ";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "
                </div>
            </header>

        ";
        // line 80
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", array())) {
            // line 81
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar", array()), "html", null, true));
            echo "
        ";
        }
        // line 83
        echo "        </div>

      <div class=\"content\">
        ";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <a id=\"main-content\" tabindex=\"-1\"></a>

          ";
        // line 90
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "

          ";
        // line 92
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()))) {
            // line 93
            echo "            <div class=\"featured-bottom\">
              <aside class=\"layout-container clearfix\" role=\"complementary\">
                  ";
            // line 95
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()), "html", null, true));
            echo "
                  ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array()), "html", null, true));
            echo "
                  ";
            // line 97
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()), "html", null, true));
            echo "
              </aside>
            </div>
          ";
        }
        // line 101
        echo "

          <footer class=\"site-footer\">
            <div class=\"layout-container\">
                ";
        // line 105
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 106
            echo "                  <div class=\"site-footer__top clearfix\">
                      ";
            // line 107
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
                  </div>
                ";
        }
        // line 110
        echo "            </div>
          </footer>


        </main>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/nerdstein/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 110,  156 => 107,  153 => 106,  151 => 105,  145 => 101,  138 => 97,  134 => 96,  130 => 95,  126 => 93,  124 => 92,  119 => 90,  112 => 86,  107 => 83,  101 => 81,  99 => 80,  92 => 76,  88 => 75,  84 => 74,  79 => 72,  74 => 69,  67 => 65,  63 => 63,  60 => 62,  53 => 58,  49 => 56,  47 => 55,  43 => 53,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/nerdstein/templates/page.html.twig", "/var/www/html/docroot/themes/nerdstein/templates/page.html.twig");
    }
}
