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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-feature-card.html.twig */
class __TwigTemplate_fbeacd72c1306c4d27182313189b19cb extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.image"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <article class=\"coh-container ssa-component coh-component ssa-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "be0fb3a6-0776-4530-b1bb-7ab0dc9918bd"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4b75dba8-73fb-42bb-bcda-1f6e743666b8"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "28f724c5-d6f0-44e6-b0c6-1b046f5bc81b"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6007f0f2-41f9-4d0f-9129-1204353314bc"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "11e2a0a6-1da4-4d50-b15f-53ac9ad2ac73"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "116aae79-7a7d-46b8-8355-b9ed1ce3f2fa"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3d5a3a40-6880-4805-9591-f5f147d64660"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "782a95c0-8bd0-4a78-8971-3a257bdf24c8"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3dd8401a-be31-4c68-b1ba-f43cd41ac1e5"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "1d6e21d9-c5bc-4f74-8ccd-8d6f9c0eba98"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_feature_card-6564111e\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container card-content ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_feature_card-11cde280\" > <";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "a04de788-2150-4b88-b804-9d426020e82a"));
        echo " class=\"coh-heading coh-style-heading-4-size coh-ce-cpt_feature_card-466af053\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasPermission", [0 => "access visual page builder"], "method", false, false, true, 1) &&  !array_key_exists("component_content", $context))) {
            echo " data-ssa-field-uuid=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderFieldUuid($context, "780f5238-daa7-439d-a0aa-fc66bc60523d", "Array"), "html", null, true);
            echo "\" data-ssa-form-type=\"form-input\"";
        }
        echo " > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "780f5238-daa7-439d-a0aa-fc66bc60523d"));
        echo " </";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "a04de788-2150-4b88-b804-9d426020e82a"));
        echo "> ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5cd9d8d3-2f85-487e-9657-1fbc019b14f9"));
        $context["paragraphContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " <p class=\"coh-paragraph\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasPermission", [0 => "access visual page builder"], "method", false, false, true, 1) &&  !array_key_exists("component_content", $context))) {
            echo " data-ssa-field-uuid=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderFieldUuid($context, "5cd9d8d3-2f85-487e-9657-1fbc019b14f9", "Array"), "html", null, true);
            echo "\" data-ssa-form-type=\"form-textarea\"";
        }
        echo " >";
        echo twig_nl2br($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraphContent"] ?? null), 1, $this->source), "html", null, true));
        echo "</p> </div> ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5677def8-f2c1-43b1-b944-3959ccc9d789", ""), "html", null, true);
        $context["hideData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if (((null === ($context["hideData"] ?? null)) || (twig_trim_filter(($context["hideData"] ?? null)) != ""))) {
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_image"), "html", null, true);
            echo " <img class=\"coh-image card-image coh-ce-cpt_feature_card-cc55f948 coh-image-responsive-xl\" src=\"";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5677def8-f2c1-43b1-b944-3959ccc9d789"));
            $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            $context["imagestyle"] = ('' === $tmp = "coh_xx_small") ? '' : new Markup($tmp, $this->env->getCharset());
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle($this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 1, $this->source)), "html", null, true);
            echo "\" ";
            if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8ba7bc1a-967a-4f31-9b33-10853e66fbf8") == "")) {
                echo "alt";
            } else {
                echo "alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8ba7bc1a-967a-4f31-9b33-10853e66fbf8"));
                echo "\"";
            }
            echo " /> ";
        }
        echo " </article> 
";
        // line 2
        ob_start(function () { return ''; });
        echo "<style>.";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 2, $this->source), "html", null, true);
        echo ".coh-ce-cpt_feature_card-6564111e {
";
        // line 3
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "69382081-1243-4687-bbea-18d3ab6f447e"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "69382081-1243-4687-bbea-18d3ab6f447e"))) {
                echo " background-color: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "69382081-1243-4687-bbea-18d3ab6f447e"));
                echo ";";
            }
        }
        // line 4
        echo "  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
";
        // line 8
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
                echo " -webkit-box-flex: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"));
                echo ";";
            }
        }
        // line 9
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
                echo " -webkit-flex-grow: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"));
                echo ";";
            }
        }
        // line 10
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
            echo "       ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
                echo " -ms-flex-positive: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"));
                echo ";";
            }
        }
        // line 11
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
            echo "           ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
                echo " flex-grow: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"));
                echo ";";
            }
        }
        // line 12
        echo "  position: relative;
}
.border.";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 14, $this->source), "html", null, true);
        echo ".coh-ce-cpt_feature_card-6564111e {
  border-width: 0.0625rem;
  border-style: solid;
";
        // line 17
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6065ff0b-d618-4112-b0d6-f755a6412122"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6065ff0b-d618-4112-b0d6-f755a6412122"))) {
                echo " border-color: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6065ff0b-d618-4112-b0d6-f755a6412122"));
                echo ";";
            }
        }
        // line 18
        echo "}
.left-align-image-above.";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 19, $this->source), "html", null, true);
        echo ".coh-ce-cpt_feature_card-6564111e {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
}
.left-align-image-left.";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 26, $this->source), "html", null, true);
        echo ".coh-ce-cpt_feature_card-6564111e {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row;
}
.left-align-image-left.";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 33, $this->source), "html", null, true);
        echo ".coh-ce-cpt_feature_card-6564111e .card-content {
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
}
.left-align-image-left.";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 42, $this->source), "html", null, true);
        echo ".coh-ce-cpt_feature_card-6564111e .card-image {
  margin-right: 1.5rem;
}
.center-align-image-above.";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 45, $this->source), "html", null, true);
        echo ".coh-ce-cpt_feature_card-6564111e {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  text-align: center;
}
.center-align-image-above.";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 53, $this->source), "html", null, true);
        echo ".coh-ce-cpt_feature_card-6564111e .card-image {
  -webkit-align-self: center;
      -ms-flex-item-align: center;
          align-self: center;
}
.center-align-image-above.";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 58, $this->source), "html", null, true);
        echo ".coh-ce-cpt_feature_card-6564111e .fake-link {
  -webkit-align-self: center;
      -ms-flex-item-align: center;
          align-self: center;
}
.";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 63, $this->source), "html", null, true);
        echo ".coh-ce-cpt_feature_card-11cde280 {
  height: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
";
        // line 74
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
                echo " -webkit-box-flex: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"));
                echo ";";
            }
        }
        // line 75
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
                echo " -webkit-flex-grow: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"));
                echo ";";
            }
        }
        // line 76
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
            echo "       ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
                echo " -ms-flex-positive: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"));
                echo ";";
            }
        }
        // line 77
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
            echo "           ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"))) {
                echo " flex-grow: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b50e72f9-f42b-45ca-b9d4-aa5173758414"));
                echo ";";
            }
        }
        // line 78
        echo "}
</style>";
        $context["compiledCSS"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderInlineStyle($this->sandbox->ensureToStringAllowed(($context["compiledCSS"] ?? null), 79, $this->source)));
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-feature-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 79,  332 => 78,  323 => 77,  314 => 76,  305 => 75,  296 => 74,  282 => 63,  274 => 58,  266 => 53,  255 => 45,  249 => 42,  237 => 33,  227 => 26,  217 => 19,  214 => 18,  205 => 17,  199 => 14,  195 => 12,  186 => 11,  177 => 10,  168 => 9,  159 => 8,  153 => 4,  144 => 3,  138 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-feature-card.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-feature-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 1);
        static $filters = array("escape" => 1, "raw" => 1, "nl2br" => 1, "trim" => 1);
        static $functions = array("coh_instanceid" => 1, "attach_library" => 1, "getComponentFieldValue" => 1, "render_field_uuid" => 1, "cohesion_image_style" => 1, "renderInlineStyle" => 79);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw', 'nl2br', 'trim'],
                ['coh_instanceid', 'attach_library', 'getComponentFieldValue', 'render_field_uuid', 'cohesion_image_style', 'renderInlineStyle']
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
