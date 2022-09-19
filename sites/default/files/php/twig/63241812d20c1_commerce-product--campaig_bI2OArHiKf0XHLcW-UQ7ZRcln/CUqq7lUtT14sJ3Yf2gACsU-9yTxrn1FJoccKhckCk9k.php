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

/* themes/gavias_kunco/templates/commerce-node/commerce-product--campaign.html.twig */
class __TwigTemplate_4152988f17e8959ede1f8ad8788fa0455905049d908f23773643fb8c6fc768ff extends \Twig\Template
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
        // line 22
        echo "
";
        // line 23
        if ((($context["view_mode"] ?? null) == "featured_campaign")) {
            // line 24
            echo "  <div class=\"campaign-block featured-campaign clearfix\">      
   <div class=\"campaign-block-inner\">
      <div class=\"left\">
        <div class=\"image lightGallery\">
          ";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_campaign_images", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "
          ";
            // line 29
            if (($context["video_link"] ?? null)) {
                // line 30
                echo "            <a class=\"video-link popup-video\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["video_link"] ?? null), 30, $this->source), "html", null, true);
                echo "\"><i class=\"fa fa-video-camera\"></i></a>
          ";
            }
            // line 32
            echo "        </div>
      </div>
      <div class=\"right\">
        <div class=\"campaign-content\">   
          <div class=\"campaign-info\"><h4 class=\"title\"><a href=\"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null), 36, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 36, $this->source), "html", null, true);
            echo "</a></h4></div> 
          <div class=\"campaign-info\"><div class=\"summary\"> ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "body", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "</div></div>
          <div class=\"funded\">
            <div class=\"progress\">
              <div class=\"progress-bar\" data-progress-animation=\"";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["funded"] ?? null), 40, $this->source), "html", null, true);
            echo "%\">
                <span class=\"percentage\">";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["funded_label"] ?? null), 41, $this->source), "html", null, true);
            echo "%</span>
              </div>
            </div>
          </div>
          <div class=\"content-raised\"><span class=\"raised\">";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["raised"] ?? null), 45, $this->source), "html", null, true);
            echo "</span> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Raised"));
            echo " / <span class=\"goal\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_campaign_goal", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "</span> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Goal"));
            echo " / <span class=\"days\"><span class=\"text-theme\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["days_left"] ?? null), 45, $this->source), "html", null, true);
            echo "</span> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Days left"));
            echo " </span></div>
          <div class=\"content-action\"><a class=\"btn-theme\" href=\"";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null), 46, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Donate now"));
            echo "</a></div> 
        </div>
      </div>  
   </div>
</div>
";
        } else {
            // line 52
            echo "
<article";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 53, $this->source), "html", null, true);
            echo ">
  <div class=\"campaign-block campaign-single\">
    <div class=\"image campaign-images lightGallery\">
      ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_campaign_images", [], "any", false, false, true, 56)) {
                // line 57
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_campaign_images", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo " 
      ";
            }
            // line 59
            echo "      ";
            if (($context["video_link"] ?? null)) {
                // line 60
                echo "          <a class=\"video-link popup-video\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["video_link"] ?? null), 60, $this->source), "html", null, true);
                echo "\"><i class=\"fa fa-video-camera\"></i></a>
      ";
            }
            // line 62
            echo "    </div>
    <div class=\"campaign-content\">
      <div class=\"content-inner\">
        <div class=\"funded\">
          <div class=\"progress\">
             <div class=\"progress-bar\" data-progress-animation=\"";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["funded"] ?? null), 67, $this->source), "html", null, true);
            echo "%\">
                <span class=\"percentage\"><span></span><b>";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["funded"] ?? null), 68, $this->source), "html", null, true);
            echo "%</b></span>
             </div>
          </div>
        </div>
      </div>   
      <div class=\"content-raised\"><span class=\"raised\">";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["raised"] ?? null), 73, $this->source), "html", null, true);
            echo "</span> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Current"));
            echo " / <span class=\"goal\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_campaign_goal", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "</span> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Target"));
            echo " / <span class=\"days\"><span class=\"text-theme\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["days_left"] ?? null), 73, $this->source), "html", null, true);
            echo "</span></span> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Days To Go"));
            echo " <span class=\"button-donation\"><a class=\"btn btn-theme\" href=\"#\" data-toggle=\"modal\" data-target=\"#popup-add-to-cart\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Donation now"));
            echo "</a></span></div>
    </div>
    <div class=\"campaign-content-inner\">
      ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 76, $this->source), "html", null, true);
            echo "
         <h1";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method", false, false, true, 77), 77, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "</h1>
      ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 78, $this->source), "html", null, true);
            echo "         
      
      <div class=\"clearfix\">
        <div id=\"popup-add-to-cart\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header clearfix\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              </div>
              <div class=\"modal-body clearfix\">
                <div class=\"funded\">
                  <div class=\"pieChart\" data-bar-color=\"#FFA600\" data-bar-width=\"150\" data-percent=\"";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["funded"] ?? null), 90, $this->source), "html", null, true);
            echo "\">
                      <span>";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["funded"] ?? null), 91, $this->source), "html", null, true);
            echo "%</span>  
                  </div>
                </div>
                <div class=\"add-to-cart-content-inner\">
                  ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 95), 95, $this->source));
            echo "
                  ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variations", [], "any", false, false, true, 96), 96, $this->source));
            echo "
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
       
      <div";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 104), 104, $this->source), "html", null, true);
            echo ">";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null), 105, $this->source), "field_campaign_goal", "field_campaign_start", "field_campaign_time", "taxonomy_catalog", "field_campaign_images", "comment", "field_campaign_video", "variation_price", "variations", "field_campaign_category", "field_campaign_featured"), "html", null, true);
            // line 106
            echo "</div>
    
      <div class=\"post-categories margin-top-20\">";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_campaign_category", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "</div>

      ";
            // line 110
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "comment", [], "any", false, false, true, 110)) {
                // line 111
                echo "        <div id=\"node-single-comment\">
          ";
                // line 112
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "comment", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 115
            echo "
    </div>
  </div>
</article>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_kunco/templates/commerce-node/commerce-product--campaign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 115,  249 => 112,  246 => 111,  244 => 110,  239 => 108,  235 => 106,  233 => 105,  230 => 104,  219 => 96,  215 => 95,  208 => 91,  204 => 90,  189 => 78,  183 => 77,  179 => 76,  161 => 73,  153 => 68,  149 => 67,  142 => 62,  136 => 60,  133 => 59,  127 => 57,  125 => 56,  119 => 53,  116 => 52,  105 => 46,  91 => 45,  84 => 41,  80 => 40,  74 => 37,  68 => 36,  62 => 32,  56 => 30,  54 => 29,  50 => 28,  44 => 24,  42 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_kunco/templates/commerce-node/commerce-product--campaign.html.twig", "C:\\xampp\\htdocs\\Kunco\\themes\\gavias_kunco\\templates\\commerce-node\\commerce-product--campaign.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23);
        static $filters = array("escape" => 28, "t" => 45, "raw" => 95, "without" => 105);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'raw', 'without'],
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
