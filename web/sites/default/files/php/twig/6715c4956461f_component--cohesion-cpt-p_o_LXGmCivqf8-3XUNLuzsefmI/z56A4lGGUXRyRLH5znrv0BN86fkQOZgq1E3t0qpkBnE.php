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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-partnership-component.html.twig */
class __TwigTemplate_05768c246db3e8bd1a339d3346ab93db extends Template
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
        echo " <div class=\"coh-container ssa-component coh-component ssa-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_partnership_component-43f6eeff\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container coh-ce-cpt_partnership_component-f2350660\" > ";
        $context["component_variable_ad025039_96c5_4cce_a27b_48778043471c"] = false;
        echo " ";
        $context["component_variable_50bae73f_99e4_446b_a738_9939a3dade60"] = $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "73fd6766-7dc8-489b-880f-be602b27df78");
        echo " ";
        ob_start(function () { return ''; });
        echo t("h2", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_e8f77e4e_3de9_47cc_b229_7040a4f78719"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_77d003da_6145_481e_95c8_2f6017361e26"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("align-text-center", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_42c2324a_e7ee_45b6_ab1e_f5dfba48bfb2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("dark-heading", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_fa5d575b_1d6e_44f0_a99e_1a2f7688bc27"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_fb51822d_28f0_4f47_8776_f7d715c910f5"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_heading", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["ad025039-96c5-4cce-a27b-48778043471c" => "component_variable_ad025039_96c5_4cce_a27b_48778043471c", "50bae73f-99e4-446b-a738-9939a3dade60" => "component_variable_50bae73f_99e4_446b_a738_9939a3dade60", "e8f77e4e-3de9-47cc-b229-7040a4f78719" => "component_variable_e8f77e4e_3de9_47cc_b229_7040a4f78719", "77d003da-6145-481e-95c8-2f6017361e26" => "component_variable_77d003da_6145_481e_95c8_2f6017361e26", "42c2324a-e7ee-45b6-ab1e-f5dfba48bfb2" => "component_variable_42c2324a_e7ee_45b6_ab1e_f5dfba48bfb2", "fa5d575b-1d6e-44f0-a99e-1a2f7688bc27" => "component_variable_fa5d575b_1d6e_44f0_a99e_1a2f7688bc27", "fb51822d-28f0-4f47-8776-f7d715c910f5" => "component_variable_fb51822d_28f0_4f47_8776_f7d715c910f5"], "352f1422-d11c-45ee-8e85-5dca46fdc76a", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("b6d77d60-5936-4587-91d5-100a759d732a", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_1ed197ba_edd9_441e_bb89_19c34d91e849_entity_entityId"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("node", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_1ed197ba_edd9_441e_bb89_19c34d91e849_entity_entityType"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("b6d77d60-5936-4587-91d5-100a759d732a", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_1ed197ba_edd9_441e_bb89_19c34d91e849_entity_entityUUID"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("typeahead", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_1ed197ba_edd9_441e_bb89_19c34d91e849_settings_options_entityBrowserType"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("node", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_1ed197ba_edd9_441e_bb89_19c34d91e849_settings_options_entityType"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_1ed197ba_edd9_441e_bb89_19c34d91e849_settings_options_bundles_webform"] = true;
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_webform", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["1ed197ba-edd9-441e-bb89-19c34d91e849" => ["entity" => ["entityId" => "component_variable_1ed197ba_edd9_441e_bb89_19c34d91e849_entity_entityId", "entityType" => "component_variable_1ed197ba_edd9_441e_bb89_19c34d91e849_entity_entityType", "entityUUID" => "component_variable_1ed197ba_edd9_441e_bb89_19c34d91e849_entity_entityUUID"], "settings" => ["options" => ["entityBrowserType" => "component_variable_1ed197ba_edd9_441e_bb89_19c34d91e849_settings_options_entityBrowserType", "entityType" => "component_variable_1ed197ba_edd9_441e_bb89_19c34d91e849_settings_options_entityType", "bundles" => ["webform" => "component_variable_1ed197ba_edd9_441e_bb89_19c34d91e849_settings_options_bundles_webform"]]]]], "dfd6d639-5fac-47b7-bb79-3c5dff626ff3", ""), "html", null, true);
        echo " </div> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container coh-ce-cpt_partnership_component-bb2a6cc8\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_image"), "html", null, true);
        echo " <img class=\"coh-image coh-image-responsive-xl\" src=\"";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "637fea2a-675b-4d6e-bfec-4baa080923a9"));
        $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        ob_start(function () { return ''; });
        $context["imagestyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle($this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 1, $this->source)), "html", null, true);
        echo "\" /> </div> </div> 
";
        // line 2
        ob_start(function () { return ''; });
        echo "<style>.";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 2, $this->source), "html", null, true);
        echo ".coh-ce-cpt_partnership_component-43f6eeff {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row;
";
        // line 12
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7dacb0ca-cd11-4026-aef5-69a65942d457"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7dacb0ca-cd11-4026-aef5-69a65942d457"))) {
                echo " background-color: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7dacb0ca-cd11-4026-aef5-69a65942d457"));
                echo ";";
            }
        }
        // line 13
        echo "  padding-top: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
}
</style>";
        $context["compiledCSS"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderInlineStyle($this->sandbox->ensureToStringAllowed(($context["compiledCSS"] ?? null), 17, $this->source)));
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-partnership-component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 17,  151 => 13,  142 => 12,  127 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-partnership-component.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-partnership-component.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "trans" => 1, "if" => 12);
        static $filters = array("escape" => 1, "raw" => 1);
        static $functions = array("coh_instanceid" => 1, "attach_library" => 1, "getComponentFieldValue" => 1, "get_content_language" => 1, "renderComponent" => 1, "cohesion_image_style" => 1, "renderInlineStyle" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'if'],
                ['escape', 'raw'],
                ['coh_instanceid', 'attach_library', 'getComponentFieldValue', 'get_content_language', 'renderComponent', 'cohesion_image_style', 'renderInlineStyle']
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
