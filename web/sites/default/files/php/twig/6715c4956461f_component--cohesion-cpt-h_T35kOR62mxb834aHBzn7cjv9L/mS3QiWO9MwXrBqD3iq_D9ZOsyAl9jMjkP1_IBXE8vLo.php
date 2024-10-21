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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-hero-image.html.twig */
class __TwigTemplate_9fd25dcc0c046e43054b6d58580f4a3f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block1755764773' => [$this, 'block_block1755764773'],
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.link"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.matchHeight"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.parallax_scrolling"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.cohMatchHeights"), "html", null, true);
        echo " ";
        $context["component_variable_edab4d63_4c6d_4a10_ba42_cb3a09934ae9"] = $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "be9f633c-20fb-4797-b750-eb349a47f55e");
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_313c9a10_78bb_4aba_ae59_ed0c97cd9da3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("6rem", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_531fe114_854c_49e3_8198_f38b64b8f899"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("6rem", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_e33b8e6e_cd37_428c_b4a7_75666fea557c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_bfe820d9_a376_4a55_9e90_b81109ec44df"] = 0;
        echo " ";
        ob_start(function () { return ''; });
        echo t("center", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_dc80fcc4_aaa5_4726_b8fc_3c84d980b308"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_a359153a_d2f3_4674_80b7_54157a8312e9"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("0px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_46884351_67e9_4fc0_a863_a403ab338cea"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("image-no-overlay", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_7b0a4770_7992_4a5c_a818_56c86fab9863"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block1755764773', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["607bea75-388b-4ee9-ad5d-dd5d23a695fd" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_container", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["edab4d63-4c6d-4a10-ba42-cb3a09934ae9" => "component_variable_edab4d63_4c6d_4a10_ba42_cb3a09934ae9", "313c9a10-78bb-4aba-ae59-ed0c97cd9da3" => "component_variable_313c9a10_78bb_4aba_ae59_ed0c97cd9da3", "531fe114-854c-49e3-8198-f38b64b8f899" => "component_variable_531fe114_854c_49e3_8198_f38b64b8f899", "e33b8e6e-cd37-428c-b4a7-75666fea557c" => "component_variable_e33b8e6e_cd37_428c_b4a7_75666fea557c", "bfe820d9-a376-4a55-9e90-b81109ec44df" => "component_variable_bfe820d9_a376_4a55_9e90_b81109ec44df", "dc80fcc4-aaa5-4726-b8fc-3c84d980b308" => "component_variable_dc80fcc4_aaa5_4726_b8fc_3c84d980b308", "a359153a-d2f3-4674-80b7-54157a8312e9" => "component_variable_a359153a_d2f3_4674_80b7_54157a8312e9", "46884351-67e9-4fc0-a863-a403ab338cea" => "component_variable_46884351_67e9_4fc0_a863_a403ab338cea", "7b0a4770-7992-4a5c-a818-56c86fab9863" => "component_variable_7b0a4770_7992_4a5c_a818_56c86fab9863"]), "b50645dd-a5e1-44e4-98b4-f3c607102780", ""), "html", null, true);
        echo " 
";
    }

    public function block_block1755764773($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "22724444-a1aa-420c-b717-cee19d13e8c4", "start"), "html", null, true);
        echo " <";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "abcb47be-c24d-47dd-b85a-72b218175d7b"));
        echo " class=\"coh-heading\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_link"), "html", null, true);
        echo " <a href=\"";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f6cb8271-b6f5-4c44-9990-b5b2d55bbb23"));
        $context["entityId"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        if ((($context["entityId"] ?? null) != "")) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->pathRenderer($this->sandbox->ensureToStringAllowed(($context["entityId"] ?? null), 1, $this->source)), "html", null, true);
        }
        echo "\" class=\"coh-link coh-ce-cpt_hero_image-76cd625\" target=\"_self\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8c40fd2e-712c-4c3b-8cd4-680992d90589"));
        echo "    </a> </";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "abcb47be-c24d-47dd-b85a-72b218175d7b"));
        echo "> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "22724444-a1aa-420c-b717-cee19d13e8c4", "end"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-hero-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-hero-image.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-hero-image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "trans" => 1, "block" => 1, "if" => 1);
        static $filters = array("escape" => 1, "merge" => 1, "raw" => 1);
        static $functions = array("attach_library" => 1, "getComponentFieldValue" => 1, "get_content_language" => 1, "renderComponent" => 1, "frontendBuilderDropzone" => 1, "path_renderer" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'block', 'if'],
                ['escape', 'merge', 'raw'],
                ['attach_library', 'getComponentFieldValue', 'get_content_language', 'renderComponent', 'frontendBuilderDropzone', 'path_renderer']
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
