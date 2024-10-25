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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-recipes-slider.html.twig */
class __TwigTemplate_e1143c5795b16263b1943da7625da541 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block3735241904' => [$this, 'block_block3735241904'],
            'block1075534090' => [$this, 'block_block1075534090'],
            'block1884550669' => [$this, 'block_block1884550669'],
            'block243102242' => [$this, 'block_block243102242'],
            'block819044307' => [$this, 'block_block819044307'],
            'block1824786103' => [$this, 'block_block1824786103'],
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
        $context["component_variable_effdbd65_c5f8_4040_bda9_83449e60856b"] = 3;
        echo " ";
        $context["component_variable_dd77c3ab_c83a_4e9e_95c8_5aa9f9ecdf9a"] = 1;
        echo " ";
        $context["component_variable_f5d96f8a_8fa1_4019_ad89_2138b5ec4ffc"] = 1;
        echo " ";
        $context["component_variable_d884c4c6_b64f_470c_bf51_6506f41f9bec"] = 1;
        echo " ";
        $context["component_variable_ac8248d6_90fa_4542_800c_b50f6c2a3e56"] = 1;
        echo " ";
        $context["component_variable_8cf8d876_62d4_4d1f_9a42_09310f961b15"] = 1;
        echo " ";
        ob_start(function () { return ''; });
        echo t("move-pagination-down", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_c3c4130e_a32e_46ba_8bb3_ca9b78daab4c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("retain", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_c14ec3c8_a858_4cb5_9434_8ebafdb5b823"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("coh-style-margin-bottom-small", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_ba83a10a_812d_4e1d_8918_30441ed5c940"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_ff5cf2cd_d6c2_4b29_a8a5_f4be0fe15c86"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("padding-left-right", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_06b406e7_742e_4817_8768_4444a7097d46"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block3735241904', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["342bec96-01e9-43e0-b28b-4cfd21ea3ead" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("1dc117b7", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["effdbd65-c5f8-4040-bda9-83449e60856b" => "component_variable_effdbd65_c5f8_4040_bda9_83449e60856b", "dd77c3ab-c83a-4e9e-95c8-5aa9f9ecdf9a" => "component_variable_dd77c3ab_c83a_4e9e_95c8_5aa9f9ecdf9a", "f5d96f8a-8fa1-4019-ad89-2138b5ec4ffc" => "component_variable_f5d96f8a_8fa1_4019_ad89_2138b5ec4ffc", "d884c4c6-b64f-470c-bf51-6506f41f9bec" => "component_variable_d884c4c6_b64f_470c_bf51_6506f41f9bec", "ac8248d6-90fa-4542-800c-b50f6c2a3e56" => "component_variable_ac8248d6_90fa_4542_800c_b50f6c2a3e56", "8cf8d876-62d4-4d1f-9a42-09310f961b15" => "component_variable_8cf8d876_62d4_4d1f_9a42_09310f961b15", "c3c4130e-a32e-46ba-8bb3-ca9b78daab4c" => "component_variable_c3c4130e_a32e_46ba_8bb3_ca9b78daab4c", "c14ec3c8-a858-4cb5-9434-8ebafdb5b823" => "component_variable_c14ec3c8_a858_4cb5_9434_8ebafdb5b823", "ba83a10a-812d-4e1d-8918-30441ed5c940" => "component_variable_ba83a10a_812d_4e1d_8918_30441ed5c940", "ff5cf2cd-d6c2-4b29-a8a5-f4be0fe15c86" => "component_variable_ff5cf2cd_d6c2_4b29_a8a5_f4be0fe15c86", "06b406e7-742e-4817-8768-4444a7097d46" => "component_variable_06b406e7_742e_4817_8768_4444a7097d46"]), "b0ace818-8b70-4d1d-84b3-377b68b50856", ""), "html", null, true);
        echo " 
";
    }

    public function block_block3735241904($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "9004e877-0c59-4137-bef4-3b8c2f88d6cf", "start"), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block1075534090', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["2bfc06a2-ae95-48c0-b149-4f8146d14e20" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_slide_item", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), []), "857f2696-0cd5-4cd2-9db6-c2c7ecea9b40", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block1884550669', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["2bfc06a2-ae95-48c0-b149-4f8146d14e20" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_slide_item", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), []), "a4105d7f-bdbb-4d67-a0ab-c7d6d139c102", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block243102242', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["2bfc06a2-ae95-48c0-b149-4f8146d14e20" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_slide_item", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), []), "8937c29c-4747-41d0-bff0-7b5a63c9dfaa", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block819044307', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["2bfc06a2-ae95-48c0-b149-4f8146d14e20" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_slide_item", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), []), "079d379c-32b4-46ce-958a-d11be66f2f48", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block1824786103', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["2bfc06a2-ae95-48c0-b149-4f8146d14e20" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_slide_item", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), []), "ce7fef90-8702-43a4-9c9a-5adef0bc7039", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "9004e877-0c59-4137-bef4-3b8c2f88d6cf", "end"), "html", null, true);
    }

    public function block_block1075534090($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "e9909f31-2cda-4082-b796-11cb141dfee3", "start"), "html", null, true);
        echo " ";
        $context["entity_type"] = ('' === $tmp = "node") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["view_mode"] = ('' === $tmp = "teaser") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["entity"] = ('' === $tmp = "af8ab8c3-4d7d-4b3e-a4f3-4ff59a1a8e90") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderContent($this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["entity"] ?? null), 1, $this->source)), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "e9909f31-2cda-4082-b796-11cb141dfee3", "end"), "html", null, true);
    }

    public function block_block1884550669($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "a970ca18-d124-4483-b372-3d4912d20511", "start"), "html", null, true);
        echo " ";
        $context["entity_type"] = ('' === $tmp = "node") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["view_mode"] = ('' === $tmp = "teaser") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["entity"] = ('' === $tmp = "af8ab8c3-4d7d-4b3e-a4f3-4ff59a1a8e90") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderContent($this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["entity"] ?? null), 1, $this->source)), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "a970ca18-d124-4483-b372-3d4912d20511", "end"), "html", null, true);
    }

    public function block_block243102242($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "7483bc2a-3d4a-4aad-8291-3bf376a889f6", "start"), "html", null, true);
        echo " ";
        $context["entity_type"] = ('' === $tmp = "node") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["view_mode"] = ('' === $tmp = "teaser") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["entity"] = ('' === $tmp = "af8ab8c3-4d7d-4b3e-a4f3-4ff59a1a8e90") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderContent($this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["entity"] ?? null), 1, $this->source)), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "7483bc2a-3d4a-4aad-8291-3bf376a889f6", "end"), "html", null, true);
    }

    public function block_block819044307($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "a8a72b34-1342-4dea-99a5-bf2d909968c8", "start"), "html", null, true);
        echo " ";
        $context["entity_type"] = ('' === $tmp = "node") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["view_mode"] = ('' === $tmp = "teaser") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["entity"] = ('' === $tmp = "af8ab8c3-4d7d-4b3e-a4f3-4ff59a1a8e90") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderContent($this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["entity"] ?? null), 1, $this->source)), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "a8a72b34-1342-4dea-99a5-bf2d909968c8", "end"), "html", null, true);
    }

    public function block_block1824786103($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "3239e59a-1527-48b1-813e-dee29fae7bdc", "start"), "html", null, true);
        echo " ";
        $context["entity_type"] = ('' === $tmp = "node") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["view_mode"] = ('' === $tmp = "teaser") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["entity"] = ('' === $tmp = "af8ab8c3-4d7d-4b3e-a4f3-4ff59a1a8e90") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderContent($this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["entity"] ?? null), 1, $this->source)), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "3239e59a-1527-48b1-813e-dee29fae7bdc", "end"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-recipes-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-recipes-slider.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-recipes-slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "trans" => 1, "block" => 1, "if" => 1);
        static $filters = array("escape" => 1, "merge" => 1);
        static $functions = array("attach_library" => 1, "get_content_language" => 1, "renderComponent" => 1, "frontendBuilderDropzone" => 1, "renderContent" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'block', 'if'],
                ['escape', 'merge'],
                ['attach_library', 'get_content_language', 'renderComponent', 'frontendBuilderDropzone', 'renderContent']
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
