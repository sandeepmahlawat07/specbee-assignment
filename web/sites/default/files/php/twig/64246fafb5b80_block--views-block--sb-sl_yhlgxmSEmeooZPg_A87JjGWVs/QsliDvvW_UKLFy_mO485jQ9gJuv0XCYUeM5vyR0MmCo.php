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

/* themes/custom/sb_theme/templates/block/block--views-block--sb-slider-view-block-block-1.html.twig */
class __TwigTemplate_688c02f8b9d037f9f097b6bc6dd464a8951e6f068f430cc533e40e3c93cddfca extends \Twig\Template
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

<section class=\"slider-section\" id='slider_block_sb'>  
  <div class=\"container\">
\t  <nav>
        <div class=\"nav nav-tabs d-flex mb-5\" id=\"nav-tab\" role=\"tablist\">
          <a class=\"nav-item nav-link active text-center\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Featured Confrenes"));
        echo "</a>
          <a class=\"nav-item nav-link text-center\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Recommended Confrenes"));
        echo "</a>
          <a class=\"nav-item nav-link text-center\" id=\"nav-contact-tab\" data-toggle=\"tab\" href=\"#nav-contact\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Past Confrenes"));
        echo "</a>
        </div>
    </nav>   
    <div class=\"tab-wrapper\" id=\"nav-tabContent\">
    <div class=\"tab-content tabContent-sb\" id=\"nav-tabContent-sb\">
    <div class=\"tab-pane fade show active \" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
      
      ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 49, $this->source), "html", null, true);
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
        return "themes/custom/sb_theme/templates/block/block--views-block--sb-slider-view-block-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 49,  59 => 42,  55 => 41,  51 => 40,  42 => 34,  39 => 33,);
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

<section class=\"slider-section\" id='slider_block_sb'>  
  <div class=\"container\">
\t  <nav>
        <div class=\"nav nav-tabs d-flex mb-5\" id=\"nav-tab\" role=\"tablist\">
          <a class=\"nav-item nav-link active text-center\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">{{ 'Featured Confrenes'|t }}</a>
          <a class=\"nav-item nav-link text-center\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">{{ 'Recommended Confrenes'|t }}</a>
          <a class=\"nav-item nav-link text-center\" id=\"nav-contact-tab\" data-toggle=\"tab\" href=\"#nav-contact\" role=\"tab\" aria-controls=\"nav-contact\" aria-selected=\"false\">{{ 'Past Confrenes'|t }}</a>
        </div>
    </nav>   
    <div class=\"tab-wrapper\" id=\"nav-tabContent\">
    <div class=\"tab-content tabContent-sb\" id=\"nav-tabContent-sb\">
    <div class=\"tab-pane fade show active \" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
      
      {{ content }}
    </div>
    <div class=\"slick-next\"></div>
    <div class=\"slick-previous\"></div>
    </div>
    </div>
  </div>
</section>

", "themes/custom/sb_theme/templates/block/block--views-block--sb-slider-view-block-block-1.html.twig", "/app/themes/custom/sb_theme/templates/block/block--views-block--sb-slider-view-block-block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 34, "t" => 40);
        static $functions = array("attach_library" => 34);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
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
