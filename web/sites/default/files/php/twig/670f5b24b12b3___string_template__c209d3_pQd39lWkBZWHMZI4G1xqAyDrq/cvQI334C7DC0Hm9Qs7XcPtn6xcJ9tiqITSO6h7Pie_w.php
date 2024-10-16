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

/* __string_template__c209d3e7a8a7396dd370dabdbca7f573 */
class __TwigTemplate_baa16abfd2dca4e36402cc8939d66a5c extends Template
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
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:media:2b205c95-3ffa-464e-86e3-336f0ade78bd]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), false), "html", null, true);
        $context["component_variable_5677def8_f2c1_43b1_b944_3959ccc9d789"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8ba7bc1a_967a_4f31_9b33_10853e66fbf8"] = ('' === $tmp = "headshot") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_a04de788_2150_4b88_b804_9d426020e82a"] = ('' === $tmp = "h4") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_780f5238_daa7_439d_a0aa_fc66bc60523d"] = ('' === $tmp = "Short placeholder heading") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_5cd9d8d3_2f85_487e_9657_1fbc019b14f9"] = ('' === $tmp = "This is placeholder text. It's here by mistake and we'd appreciate it if you could email us with a link to the page you found it on.") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_28f724c5_d6f0_44e6_b0c6_1b046f5bc81b"] = ('' === $tmp = "left-align-image-above") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_69382081_1243_4687_bbea_18d3ab6f447e"] = ('' === $tmp = "rgba(242, 242, 242, 1)") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_116aae79_7a7d_46b8_8355_b9ed1ce3f2fa"] = ('' === $tmp = "coh-style-card-text-light-background") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_be0fb3a6_0776_4530_b1bb_7ab0dc9918bd"] = ('' === $tmp = "coh-style-padding-small") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_b50e72f9_f42b_45ca_b9d4_aa5173758414"] = 1;
        echo " ";
        $context["component_variable_11e2a0a6_1da4_4d50_b15f_53ac9ad2ac73"] = ('' === $tmp = "coh-style-margin-bottom-small") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_feature_card", false, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["5677def8-f2c1-43b1-b944-3959ccc9d789" => "component_variable_5677def8_f2c1_43b1_b944_3959ccc9d789", "8ba7bc1a-967a-4f31-9b33-10853e66fbf8" => "component_variable_8ba7bc1a_967a_4f31_9b33_10853e66fbf8", "a04de788-2150-4b88-b804-9d426020e82a" => "component_variable_a04de788_2150_4b88_b804_9d426020e82a", "780f5238-daa7-439d-a0aa-fc66bc60523d" => "component_variable_780f5238_daa7_439d_a0aa_fc66bc60523d", "5cd9d8d3-2f85-487e-9657-1fbc019b14f9" => "component_variable_5cd9d8d3_2f85_487e_9657_1fbc019b14f9", "28f724c5-d6f0-44e6-b0c6-1b046f5bc81b" => "component_variable_28f724c5_d6f0_44e6_b0c6_1b046f5bc81b", "69382081-1243-4687-bbea-18d3ab6f447e" => "component_variable_69382081_1243_4687_bbea_18d3ab6f447e", "116aae79-7a7d-46b8-8355-b9ed1ce3f2fa" => "component_variable_116aae79_7a7d_46b8_8355_b9ed1ce3f2fa", "be0fb3a6-0776-4530-b1bb-7ab0dc9918bd" => "component_variable_be0fb3a6_0776_4530_b1bb_7ab0dc9918bd", "b50e72f9-f42b-45ca-b9d4-aa5173758414" => "component_variable_b50e72f9_f42b_45ca_b9d4_aa5173758414", "11e2a0a6-1da4-4d50-b15f-53ac9ad2ac73" => "component_variable_11e2a0a6_1da4_4d50_b15f_53ac9ad2ac73"], "6e9dc84d-386c-4e42-93ab-74fbfeaa9543", ""), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__c209d3e7a8a7396dd370dabdbca7f573";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c209d3e7a8a7396dd370dabdbca7f573", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "processtoken" => 1, "renderComponent" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['attach_library', 'processtoken', 'renderComponent']
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
