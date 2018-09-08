<?php

/* themes/nerdstein/templates/views-view-fields--blog-categories.html.twig */
class __TwigTemplate_91b7985227c2525a58ff4b832ef5cc2be0a08f1e4f3787bea2c20e84de3d5767 extends Twig_Template
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
        $tags = array("include" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include'),
                array(),
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

        // line 1
        $this->loadTemplate("@atoms/blog-tag.twig", "themes/nerdstein/templates/views-view-fields--blog-categories.html.twig", 1)->display(array_merge($context, array("tag_name" => $this->getAttribute($this->getAttribute(        // line 2
($context["fields"] ?? null), "name", array()), "content", array()), "tag_icon_url" => $this->getAttribute($this->getAttribute(        // line 3
($context["fields"] ?? null), "field_tag_icon", array()), "content", array()), "tag_color" => ("highlight-tag--" . $this->getAttribute($this->getAttribute(        // line 4
($context["fields"] ?? null), "field_box_color", array()), "content", array())), "tag_link_url" => $this->getAttribute($this->getAttribute(        // line 5
($context["fields"] ?? null), "view_taxonomy_term", array()), "content", array()))));
    }

    public function getTemplateName()
    {
        return "themes/nerdstein/templates/views-view-fields--blog-categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  46 => 4,  45 => 3,  44 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/nerdstein/templates/views-view-fields--blog-categories.html.twig", "/var/www/html/docroot/themes/nerdstein/templates/views-view-fields--blog-categories.html.twig");
    }
}
