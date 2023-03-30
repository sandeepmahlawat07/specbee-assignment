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

/* themes/custom/sb_theme/templates/content/node--view--basic-page-slider-view.html.twig */
class __TwigTemplate_41942a3b6220f4fd57da9c38a432e1b78c52e77370e2fd43caf512fb820457c9 extends \Twig\Template
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
        // line 69
        echo "
";
        // line 71
        echo "
";
        // line 82
        echo "
";
        // line 84
        echo "    ";
        // line 86
        echo "  


  ";
        // line 90
        echo "    ";
        // line 91
        echo "  






<div class=\"card__wrapper\">
  <div class=\"card__image-wrapper\">
\t\t<div class=\"card__image\">
    ";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_card_image", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
        echo "
    </div>
  </div>
  <img src=\"/themes/custom/sb_theme/images/badge.png\" alt=\"image\" class=\"badge__icon\">
  <Span class=\"price\">";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_price_tag", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "</Span>
  <div class=\"card__body\">
    <h5>";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_card_title", [], "any", false, false, true, 107), 107, $this->source)))), "html", null, true);
        echo "</h5>
    <div><i class=\"fas fa-tags\"></i>
\t\t\t<span>";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_department", [], "any", false, false, true, 109), 109, $this->source)))), "html", null, true);
        echo "</span>
\t\t</div>
    <div><i class=\"fas fa-calendar-alt\"></i>
\t\t\t<span>";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_event_date", [], "any", false, false, true, 112), 112, $this->source)))), "html", null, true);
        echo "</span>
\t\t</div>
    <div><i class=\"fas fa-map-marker-alt\"></i>
\t\t\t<span>";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_location", [], "any", false, false, true, 115), 115, $this->source)))), "html", null, true);
        echo "</span>
\t\t</div>
    <div class=\"share__block-wrapper\">
      <hr class=\"share_rule mt-1\">
      <div class=\"share__block mt-3\"><i class=\"far fa-heart\"></i><hr class=\"icon__rule\"/><i class=\"fas fa-download\"></i><hr class=\"icon__rule\"/><i class=\"fas fa-share-alt\"></i><hr class=\"icon__rule\"/><span>View Details</span>
\t\t\t</div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/sb_theme/templates/content/node--view--basic-page-slider-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 115,  92 => 112,  86 => 109,  81 => 107,  76 => 105,  69 => 101,  57 => 91,  55 => 90,  50 => 86,  48 => 84,  45 => 82,  42 => 71,  39 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Olivero's theme implementation to display a node teaser.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}

{# {{ attach_library('sb_theme/sbSlider') }} #}

{# {%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
  ]
%} #}

{# <article{{ attributes.addClass(classes) }}> #}
    {# {{ title_prefix }}
    {{ title_suffix }} #}
  


  {# <div{{ content_attributes.addClass('node__content') }}> #}
    {# {{ content|without('field_image', 'links') }} #}
  






<div class=\"card__wrapper\">
  <div class=\"card__image-wrapper\">
\t\t<div class=\"card__image\">
    {{ content.field_card_image }}
    </div>
  </div>
  <img src=\"/themes/custom/sb_theme/images/badge.png\" alt=\"image\" class=\"badge__icon\">
  <Span class=\"price\">{{ content.field_price_tag }}</Span>
  <div class=\"card__body\">
    <h5>{{ content.field_card_title| render | striptags | trim }}</h5>
    <div><i class=\"fas fa-tags\"></i>
\t\t\t<span>{{ content.field_department| render | striptags | trim }}</span>
\t\t</div>
    <div><i class=\"fas fa-calendar-alt\"></i>
\t\t\t<span>{{ content.field_event_date| render | striptags | trim }}</span>
\t\t</div>
    <div><i class=\"fas fa-map-marker-alt\"></i>
\t\t\t<span>{{ content.field_location| render | striptags | trim }}</span>
\t\t</div>
    <div class=\"share__block-wrapper\">
      <hr class=\"share_rule mt-1\">
      <div class=\"share__block mt-3\"><i class=\"far fa-heart\"></i><hr class=\"icon__rule\"/><i class=\"fas fa-download\"></i><hr class=\"icon__rule\"/><i class=\"fas fa-share-alt\"></i><hr class=\"icon__rule\"/><span>View Details</span>
\t\t\t</div>
    </div>
  </div>
</div>

{# </div>
</article> #}", "themes/custom/sb_theme/templates/content/node--view--basic-page-slider-view.html.twig", "/app/themes/custom/sb_theme/templates/content/node--view--basic-page-slider-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 101, "trim" => 107, "striptags" => 107, "render" => 107);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trim', 'striptags', 'render'],
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
