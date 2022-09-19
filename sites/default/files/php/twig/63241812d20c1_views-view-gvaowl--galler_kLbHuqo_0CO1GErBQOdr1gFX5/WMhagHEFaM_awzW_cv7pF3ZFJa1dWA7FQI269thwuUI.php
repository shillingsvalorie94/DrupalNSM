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

/* themes/gavias_kunco/templates/views/gallery/views-view-gvaowl--gallery-carousel.html.twig */
class __TwigTemplate_dfe523a066567f3bff2974f2d10d7b246d095dad92a84b6fd6ca352d2f2826aa extends \Twig\Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["attributes"] ?? null)) {
            // line 2
            echo "<div id=\"gva-images-carousel\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "slider-gallery-v1"], "method", false, false, true, 2), 2, $this->source), "html", null, true);
            echo ">
";
        }
        // line 4
        echo "
   ";
        // line 5
        $context["i"] = 0;
        // line 6
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "      ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 8
            echo "      ";
            if (((($context["i"] ?? null) % 5) == 1)) {
                // line 9
                echo "         <div class=\"gallery-large carousel-item\">
            <div class=\"item content\">";
                // line 10
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "</div>
         </div>
      ";
            } else {
                // line 13
                echo "         
         ";
                // line 14
                if (((($context["i"] ?? null) % 5) == 2)) {
                    // line 15
                    echo "            <div class=\"galery-small-wrap\">
         ";
                }
                // line 16
                echo "   
         
            ";
                // line 18
                if ((((($context["i"] ?? null) % 5) == 2) || ((($context["i"] ?? null) % 5) == 4))) {
                    // line 19
                    echo "              <div class=\"gallery-small carousel-item\">
            ";
                }
                // line 21
                echo "               <div class=\"item content gallery-small-item\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "</div>
            ";
                // line 22
                if (((((($context["i"] ?? null) % 5) == 3) || ((($context["i"] ?? null) % 5) == 0)) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    // line 23
                    echo "               </div>
            ";
                }
                // line 24
                echo "   

         ";
                // line 26
                if ((((($context["i"] ?? null) % 5) == 0) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    // line 27
                    echo "            </div>
         ";
                }
                // line 28
                echo "    
            
      ";
            }
            // line 30
            echo " 
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " 

";
        // line 33
        if (($context["attributes"] ?? null)) {
            // line 34
            echo "</div>
";
        }
        // line 36
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/views/gallery/views-view-gvaowl--gallery-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 36,  130 => 34,  128 => 33,  124 => 31,  117 => 30,  112 => 28,  108 => 27,  106 => 26,  102 => 24,  98 => 23,  96 => 22,  91 => 21,  87 => 19,  85 => 18,  81 => 16,  77 => 15,  75 => 14,  72 => 13,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  52 => 6,  50 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/views/gallery/views-view-gvaowl--gallery-carousel.html.twig", "C:\\xampp\\htdocs\\Kunco\\themes\\gavias_kunco\\templates\\views\\gallery\\views-view-gvaowl--gallery-carousel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 5, "for" => 6);
        static $filters = array("escape" => 2, "length" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length'],
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
}
