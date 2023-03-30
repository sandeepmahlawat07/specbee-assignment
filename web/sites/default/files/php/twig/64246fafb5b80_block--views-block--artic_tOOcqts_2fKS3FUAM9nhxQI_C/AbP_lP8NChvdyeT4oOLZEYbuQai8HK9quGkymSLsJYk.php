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

/* themes/custom/sb_theme/templates/block/block--views-block--article-slider-view-block-1.html.twig */
class __TwigTemplate_8d093b0aa35672865bcd414f1e4cc3584bf7ab91581bee7af94f36d9f4c76c34 extends \Twig\Template
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
        // line 33
        echo "
";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sb_theme/slider"), "html", null, true);
        echo "


<section class=\"slider-section\" id='slider_block_article'>  
    <div class=\"container\">
    <div class=\"tab-wrapper\" id=\"nav-tabContent\">
    <div class=\"tab-content inactive tabContent-article\" id=\"nav-tabContent-article\">
    <div class=\"tab-pane fade show active \" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
      
      ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 43, $this->source), "html", null, true);
        echo "

    </div>
    <div class=\"slick-next\"></div>
    <div class=\"slick-previous\"></div>
    </div>
    </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sb_theme/templates/block/block--views-block--article-slider-view-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 43,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Olivero's implementation to display a block.
 *
 * Available variables:
 * - layout: String that will determine the layout of the block.
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main content
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 *
 * @ingroup themeable
 */
#}

{{ attach_library('sb_theme/slider') }}


<section class=\"slider-section\" id='slider_block_article'>  
    <div class=\"container\">
    <div class=\"tab-wrapper\" id=\"nav-tabContent\">
    <div class=\"tab-content inactive tabContent-article\" id=\"nav-tabContent-article\">
    <div class=\"tab-pane fade show active \" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
      
      {{ content }}

    </div>
    <div class=\"slick-next\"></div>
    <div class=\"slick-previous\"></div>
    </div>
    </div>
    </div>
</section>
", "themes/custom/sb_theme/templates/block/block--views-block--article-slider-view-block-1.html.twig", "/app/themes/custom/sb_theme/templates/block/block--views-block--article-slider-view-block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 34);
        static $functions = array("attach_library" => 34);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library']
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
