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

/* themes/gavias_kunco/templates/block/block--system-breadcrumb-block.html.twig */
class __TwigTemplate_2b5817fdb3e037ed5a9a6d7e57cde1aac9355999b1371d59370d08586aafed97 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        $context["title_classes"] = "";
        // line 33
        if ((($context["label"] ?? null) == "")) {
            // line 34
            $context["title_classes"] = "no-title";
        }
        // line 37
        $context["classes"] = [0 => "block gva-block-breadcrumb", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 39
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 39), 39, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 40
($context["plugin_id"] ?? null), 40, $this->source))), 3 =>         // line 41
($context["title_classes"] ?? null)];
        // line 44
        echo "

<div class=\"breadcrumb-content-inner\">
  <div class=\"gva-breadcrumb-content\">
    <div";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
        echo ">
      <div class=\"breadcrumb-style gva-parallax-background\" style=\"";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_style"] ?? null), 49, $this->source), "html", null, true);
        echo "\">
        <div class=\"container\">
          <div class=\"breadcrumb-content-main\">
            <h2 class=\"page-title\">";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb_title"] ?? null), 52, $this->source), "html", null, true);
        echo " </h2>
            ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 53, $this->source), "html", null, true);
        echo " 
              ";
        // line 54
        if (($context["label"] ?? null)) {
            // line 55
            echo "                <h2 class=\"block-title\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 55, $this->source), "html", null, true);
            echo "><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 55, $this->source), "html", null, true);
            echo "</span></h2>
              ";
        }
        // line 57
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 57, $this->source), "html", null, true);
        echo "
            ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "          </div> 
        </div> 
        <div class=\"gva-parallax-inner skrollable skrollable-between\" data-bottom-top=\"top: -80%;\" data-top-bottom=\"top: 0%;\"></div>    
      </div> 
    </div>  
  </div>  
</div>  

";
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "              <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_classes"] ?? null), 59, $this->source), "html", null, true);
        echo "\">
                <div";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content block-content"], "method", false, false, true, 60), 60, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 60, $this->source), "html", null, true);
        echo "</div>
              </div>  
            ";
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/block/block--system-breadcrumb-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 60,  109 => 59,  105 => 58,  93 => 63,  91 => 58,  86 => 57,  78 => 55,  76 => 54,  72 => 53,  68 => 52,  62 => 49,  58 => 48,  52 => 44,  50 => 41,  49 => 40,  48 => 39,  47 => 37,  44 => 34,  42 => 33,  40 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/block/block--system-breadcrumb-block.html.twig", "C:\\xampp\\htdocs\\Kunco\\themes\\gavias_kunco\\templates\\block\\block--system-breadcrumb-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 32, "if" => 33, "block" => 58);
        static $filters = array("clean_class" => 39, "escape" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
