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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-text.html.twig */
class __TwigTemplate_6ea42e0f571672912b544ba39f636d11 extends Template
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
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohInstanceId($context), "html", null, true);
        $context["coh_instance_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.responsiveJs"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.windowscroll"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.link"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.matchHeight"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.parallax_scrolling"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.cohMatchHeights"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_wysiwyg"), "html", null, true);
        echo " <div class=\"coh-wysiwyg ssa-component coh-component ssa-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6dc6b921-8b08-4047-b4b5-2d838ccbd734"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "21656d58-6784-4331-9370-2e7009487b4f"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b9138db6-f109-4084-be67-0d1a4791f5f7"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0ab039fb-6440-49da-9fa8-c309b3d63fb1"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f3a4c6d5-9184-431c-bc49-77d4cf0215c4"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "818c5940-e159-42f6-856a-a0e67eca0016"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5af21675-f8f5-48ce-816d-faedbed6b600"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f8e05754-678a-4864-9304-c742b959b852"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7f84a990-f95f-4bc3-98c9-2cd496b005ea"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_text-fa10298a\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasPermission", [0 => "access visual page builder"], "method", false, false, true, 1) &&  !array_key_exists("component_content", $context))) {
            echo " data-ssa-field-uuid=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderFieldUuid($context, "5fc743c3-6b31-4a40-bd05-24acfb4ca9ba", "Array"), "html", null, true);
            echo "\" data-ssa-form-type=\"form-wysiwyg\"";
        }
        echo " > ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5fc743c3-6b31-4a40-bd05-24acfb4ca9ba", "#text"), "html", null, true);
        $context["wysiwyg"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5fc743c3-6b31-4a40-bd05-24acfb4ca9ba", "#textFormat"), "html", null, true);
        $context["text_format"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5fc743c3-6b31-4a40-bd05-24acfb4ca9ba", ""), "html", null, true);
        $context["token_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->formatWysiwyg($this->sandbox->ensureToStringAllowed(($context["wysiwyg"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["text_format"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["token_text"] ?? null), 1, $this->source)), "html", null, true);
        echo " </div> 
";
        // line 2
        ob_start(function () { return ''; });
        echo "<style>.";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 2, $this->source), "html", null, true);
        echo ".coh-ce-cpt_text-fa10298a {
";
        // line 3
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c095870a-5422-4332-bbad-d6699bdcf7fd"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c095870a-5422-4332-bbad-d6699bdcf7fd"))) {
                echo " background-color: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c095870a-5422-4332-bbad-d6699bdcf7fd"));
                echo ";";
            }
        }
        // line 4
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bac75a1-19a5-42af-99fa-5877541c6590"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bac75a1-19a5-42af-99fa-5877541c6590"))) {
                echo " -webkit-box-flex: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bac75a1-19a5-42af-99fa-5877541c6590"));
                echo ";";
            }
        }
        // line 5
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bac75a1-19a5-42af-99fa-5877541c6590"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bac75a1-19a5-42af-99fa-5877541c6590"))) {
                echo " -webkit-flex-grow: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bac75a1-19a5-42af-99fa-5877541c6590"));
                echo ";";
            }
        }
        // line 6
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bac75a1-19a5-42af-99fa-5877541c6590"))) {
            echo "       ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bac75a1-19a5-42af-99fa-5877541c6590"))) {
                echo " -ms-flex-positive: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bac75a1-19a5-42af-99fa-5877541c6590"));
                echo ";";
            }
        }
        // line 7
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bac75a1-19a5-42af-99fa-5877541c6590"))) {
            echo "           ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bac75a1-19a5-42af-99fa-5877541c6590"))) {
                echo " flex-grow: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bac75a1-19a5-42af-99fa-5877541c6590"));
                echo ";";
            }
        }
        // line 8
        echo "}
.border.";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 9, $this->source), "html", null, true);
        echo ".coh-ce-cpt_text-fa10298a {
  border-width: 0.0625rem;
  border-style: solid;
";
        // line 12
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "608cf4dc-9cad-4200-8014-f360eee24b35"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "608cf4dc-9cad-4200-8014-f360eee24b35"))) {
                echo " border-color: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "608cf4dc-9cad-4200-8014-f360eee24b35"));
                echo ";";
            }
        }
        // line 13
        echo "}
</style>";
        $context["compiledCSS"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderInlineStyle($this->sandbox->ensureToStringAllowed(($context["compiledCSS"] ?? null), 14, $this->source)));
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 14,  171 => 13,  162 => 12,  156 => 9,  153 => 8,  144 => 7,  135 => 6,  126 => 5,  117 => 4,  108 => 3,  102 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-text.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-text.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 1);
        static $filters = array("escape" => 1, "raw" => 1);
        static $functions = array("coh_instanceid" => 1, "attach_library" => 1, "getComponentFieldValue" => 1, "render_field_uuid" => 1, "format_wysiwyg" => 1, "renderInlineStyle" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw'],
                ['coh_instanceid', 'attach_library', 'getComponentFieldValue', 'render_field_uuid', 'format_wysiwyg', 'renderInlineStyle']
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
