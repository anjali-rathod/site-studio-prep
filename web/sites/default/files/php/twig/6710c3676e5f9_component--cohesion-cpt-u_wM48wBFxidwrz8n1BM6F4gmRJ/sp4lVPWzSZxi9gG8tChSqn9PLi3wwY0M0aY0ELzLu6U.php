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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-utilities-bar-horizontal.html.twig */
class __TwigTemplate_f6bc2cf3fd62b467c93d3bd6e9425b94 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.drupal-menu"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.matchHeight"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.parallax_scrolling"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.cohMatchHeights"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container ssa-component coh-component ssa-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " utilities-bar-horizontal coh-ce-cpt_utilities_bar_horizontal-ccf0cd73\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <nav class=\"coh-container utilities-menu coh-ce-cpt_utilities_bar_horizontal-830836c6\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_drupal_menu"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderMenu("utilities-menu", "menu_tpl_utilities_menu", false, 1), "html", null, true);
        echo " </nav> ";
        ob_start(function () { return ''; });
        echo t("\"\\f09a\"; font-family: icomoon", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_72135a4b_97bc_43ec_ad0c_afab544c913c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Follow us on Facebook", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("https://facebook.com", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("facebook", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("\"\\f099\"; font-family: icomoon", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_72135a4b_97bc_43ec_ad0c_afab544c913c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Follow us on Twitter", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("https://twitter.com", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("twitter", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("\"\\f0e1\"; font-family: icomoon", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_72135a4b_97bc_43ec_ad0c_afab544c913c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Follow us on LinkedIn", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("https://linkedin.com", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("linkedin", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("\"\\f231\"; font-family: icomoon", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_72135a4b_97bc_43ec_ad0c_afab544c913c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Follow us on Pinterest", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("https://pinterest.com", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("pinterest", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_social_links", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["8fa56baf-1a4e-482a-9631-c69d45e3079b" => [0 => ["72135a4b-97bc-43ec-ad0c-afab544c913c" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_72135a4b_97bc_43ec_ad0c_afab544c913c", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_41e4bef4_fb24_4953_9bc1_e7896b7e2507", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_523afe0e_2cab_42d3_a845_53944be67431", "b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_b7b48e2f_427c_41dd_8b1f_480be3bce017"], 1 => ["72135a4b-97bc-43ec-ad0c-afab544c913c" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_72135a4b_97bc_43ec_ad0c_afab544c913c", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_41e4bef4_fb24_4953_9bc1_e7896b7e2507", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_523afe0e_2cab_42d3_a845_53944be67431", "b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_b7b48e2f_427c_41dd_8b1f_480be3bce017"], 2 => ["72135a4b-97bc-43ec-ad0c-afab544c913c" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_72135a4b_97bc_43ec_ad0c_afab544c913c", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_41e4bef4_fb24_4953_9bc1_e7896b7e2507", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_523afe0e_2cab_42d3_a845_53944be67431", "b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_b7b48e2f_427c_41dd_8b1f_480be3bce017"], 3 => ["72135a4b-97bc-43ec-ad0c-afab544c913c" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_72135a4b_97bc_43ec_ad0c_afab544c913c", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_41e4bef4_fb24_4953_9bc1_e7896b7e2507", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_523afe0e_2cab_42d3_a845_53944be67431", "b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_b7b48e2f_427c_41dd_8b1f_480be3bce017"]]], "697c0429-51eb-4cce-a1f8-36a13da9e299", ""), "html", null, true);
        echo " </div> 
";
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-utilities-bar-horizontal.html.twig";
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
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-utilities-bar-horizontal.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-utilities-bar-horizontal.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "trans" => 1);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "render_menu" => 1, "get_content_language" => 1, "renderComponent" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['attach_library', 'render_menu', 'get_content_language', 'renderComponent']
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
