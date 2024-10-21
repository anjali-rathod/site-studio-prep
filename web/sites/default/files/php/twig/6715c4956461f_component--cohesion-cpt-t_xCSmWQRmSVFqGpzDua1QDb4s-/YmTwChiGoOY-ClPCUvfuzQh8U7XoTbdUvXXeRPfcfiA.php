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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-text-highlight.html.twig */
class __TwigTemplate_623b718c4396586d56c9cca2bd8b48f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block2329195880' => [$this, 'block_block2329195880'],
            'block645655700' => [$this, 'block_block645655700'],
            'block2212267466' => [$this, 'block_block2212267466'],
            'block3513958274' => [$this, 'block_block3513958274'],
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
        $context["component_variable_bfe820d9_a376_4a55_9e90_b81109ec44df"] = 0;
        echo " ";
        ob_start(function () { return ''; });
        echo t("flex-start", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_dc80fcc4_aaa5_4726_b8fc_3c84d980b308"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block2329195880', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["607bea75-388b-4ee9-ad5d-dd5d23a695fd" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_container", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["bfe820d9-a376-4a55-9e90-b81109ec44df" => "component_variable_bfe820d9_a376_4a55_9e90_b81109ec44df", "dc80fcc4-aaa5-4726-b8fc-3c84d980b308" => "component_variable_dc80fcc4_aaa5_4726_b8fc_3c84d980b308"]), "1c238b8f-7271-4f14-90da-daf8786d445a", ""), "html", null, true);
        echo " 
";
    }

    public function block_block2329195880($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "7276c147-3929-466d-a43e-cafa29e3560f", "start"), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo t("boxed", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_c469e24d_d155_46d5_a9ca_dc61028163c6"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("center", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_2647a498_53ac_4cf2_84d7_9a621dd838a0"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("coh-style-padding-top-bottom-large", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_74a865c3_d896_45d6_ba96_5ac344ad9942"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("auto", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_2a2a10d2_02a6_4263_a8a7_6c84701354f9"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("flex-start", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_f8f8754f_4921_41ee_bb30_47fc98451736"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_6b754e7a_6c7c_4ed2_9399_b64496075e6b"] = 12;
        echo " ";
        $context["component_variable_ad62c677_81e9_4361_b36d_905eceb8fce9"] =  -1;
        echo " ";
        $context["component_variable_4939e8b3_bae0_47ca_9527_5d7be5138e51"] =  -1;
        echo " ";
        ob_start(function () { return ''; });
        echo t("auto", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_d5dbd40f_6af7_413c_a38e_323fc3154a58"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("flex-start", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_0214b304_c34f_4155_8795_52cd1c5621cb"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_5dcf43ba_fc68_44d2_a27c_03a042c3158e"] = 12;
        echo " ";
        $context["component_variable_d7af9c66_4d99_4107_8709_fd9f399d14cb"] =  -1;
        echo " ";
        $context["component_variable_6f05f900_24d3_4a0c_85ab_1e783ac9d8e7"] =  -1;
        echo " ";
        ob_start(function () { return ''; });
        echo t("auto", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_6e2005ad_103a_4e90_a28f_b12587182f5e"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("flex-start", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_00ba9989_9e6f_40ba_b0a5_741c79bd5659"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_09032d58_36ec_4b7d_93f0_ce4110e125c0"] = 12;
        echo " ";
        $context["component_variable_8cf47e32_7b34_4185_a2ba_731420fd6d98"] = false;
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block645655700', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["c0116a84-e80c-428d-b6ff-ae43dda904f7" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_1_column_layout", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["c469e24d-d155-46d5-a9ca-dc61028163c6" => "component_variable_c469e24d_d155_46d5_a9ca_dc61028163c6", "2647a498-53ac-4cf2-84d7-9a621dd838a0" => "component_variable_2647a498_53ac_4cf2_84d7_9a621dd838a0", "74a865c3-d896-45d6-ba96-5ac344ad9942" => "component_variable_74a865c3_d896_45d6_ba96_5ac344ad9942", "2a2a10d2-02a6-4263-a8a7-6c84701354f9" => "component_variable_2a2a10d2_02a6_4263_a8a7_6c84701354f9", "f8f8754f-4921-41ee-bb30-47fc98451736" => "component_variable_f8f8754f_4921_41ee_bb30_47fc98451736", "6b754e7a-6c7c-4ed2-9399-b64496075e6b" => "component_variable_6b754e7a_6c7c_4ed2_9399_b64496075e6b", "ad62c677-81e9-4361-b36d-905eceb8fce9" => "component_variable_ad62c677_81e9_4361_b36d_905eceb8fce9", "4939e8b3-bae0-47ca-9527-5d7be5138e51" => "component_variable_4939e8b3_bae0_47ca_9527_5d7be5138e51", "d5dbd40f-6af7-413c-a38e-323fc3154a58" => "component_variable_d5dbd40f_6af7_413c_a38e_323fc3154a58", "0214b304-c34f-4155-8795-52cd1c5621cb" => "component_variable_0214b304_c34f_4155_8795_52cd1c5621cb", "5dcf43ba-fc68-44d2-a27c-03a042c3158e" => "component_variable_5dcf43ba_fc68_44d2_a27c_03a042c3158e", "d7af9c66-4d99-4107-8709-fd9f399d14cb" => "component_variable_d7af9c66_4d99_4107_8709_fd9f399d14cb", "6f05f900-24d3-4a0c-85ab-1e783ac9d8e7" => "component_variable_6f05f900_24d3_4a0c_85ab_1e783ac9d8e7", "6e2005ad-103a-4e90-a28f-b12587182f5e" => "component_variable_6e2005ad_103a_4e90_a28f_b12587182f5e", "00ba9989-9e6f-40ba-b0a5-741c79bd5659" => "component_variable_00ba9989_9e6f_40ba_b0a5_741c79bd5659", "09032d58-36ec-4b7d-93f0-ce4110e125c0" => "component_variable_09032d58_36ec_4b7d_93f0_ce4110e125c0", "8cf47e32-7b34-4185-a2ba-731420fd6d98" => "component_variable_8cf47e32_7b34_4185_a2ba_731420fd6d98"]), "525df170-73d5-4a01-91b2-0c3fb1a79f55", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "7276c147-3929-466d-a43e-cafa29e3560f", "end"), "html", null, true);
    }

    public function block_block645655700($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "0c614913-16fc-43d3-9088-9660330187c6", "start"), "html", null, true);
        echo " ";
        $context["component_variable_bfe820d9_a376_4a55_9e90_b81109ec44df"] = 0;
        echo " ";
        ob_start(function () { return ''; });
        echo t("flex-start", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_dc80fcc4_aaa5_4726_b8fc_3c84d980b308"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_edab4d63_4c6d_4a10_ba42_cb3a09934ae9"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_313c9a10_78bb_4aba_ae59_ed0c97cd9da3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_a359153a_d2f3_4674_80b7_54157a8312e9"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_531fe114_854c_49e3_8198_f38b64b8f899"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_e33b8e6e_cd37_428c_b4a7_75666fea557c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("0px", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_46884351_67e9_4fc0_a863_a403ab338cea"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block2212267466', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["607bea75-388b-4ee9-ad5d-dd5d23a695fd" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_container", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["bfe820d9-a376-4a55-9e90-b81109ec44df" => "component_variable_bfe820d9_a376_4a55_9e90_b81109ec44df", "dc80fcc4-aaa5-4726-b8fc-3c84d980b308" => "component_variable_dc80fcc4_aaa5_4726_b8fc_3c84d980b308", "edab4d63-4c6d-4a10-ba42-cb3a09934ae9" => "component_variable_edab4d63_4c6d_4a10_ba42_cb3a09934ae9", "313c9a10-78bb-4aba-ae59-ed0c97cd9da3" => "component_variable_313c9a10_78bb_4aba_ae59_ed0c97cd9da3", "a359153a-d2f3-4674-80b7-54157a8312e9" => "component_variable_a359153a_d2f3_4674_80b7_54157a8312e9", "531fe114-854c-49e3-8198-f38b64b8f899" => "component_variable_531fe114_854c_49e3_8198_f38b64b8f899", "e33b8e6e-cd37-428c-b4a7-75666fea557c" => "component_variable_e33b8e6e_cd37_428c_b4a7_75666fea557c", "46884351-67e9-4fc0-a863-a403ab338cea" => "component_variable_46884351_67e9_4fc0_a863_a403ab338cea"]), "af24dc41-9132-456f-8df3-e8adf507131b", ""), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_edab4d63_4c6d_4a10_ba42_cb3a09934ae9"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_313c9a10_78bb_4aba_ae59_ed0c97cd9da3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_531fe114_854c_49e3_8198_f38b64b8f899"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("2rem", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_e33b8e6e_cd37_428c_b4a7_75666fea557c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_bfe820d9_a376_4a55_9e90_b81109ec44df"] = 0;
        echo " ";
        ob_start(function () { return ''; });
        echo t("flex-start", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
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
        echo " ";
        $this->displayBlock('block3513958274', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["607bea75-388b-4ee9-ad5d-dd5d23a695fd" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_container", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["edab4d63-4c6d-4a10-ba42-cb3a09934ae9" => "component_variable_edab4d63_4c6d_4a10_ba42_cb3a09934ae9", "313c9a10-78bb-4aba-ae59-ed0c97cd9da3" => "component_variable_313c9a10_78bb_4aba_ae59_ed0c97cd9da3", "531fe114-854c-49e3-8198-f38b64b8f899" => "component_variable_531fe114_854c_49e3_8198_f38b64b8f899", "e33b8e6e-cd37-428c-b4a7-75666fea557c" => "component_variable_e33b8e6e_cd37_428c_b4a7_75666fea557c", "bfe820d9-a376-4a55-9e90-b81109ec44df" => "component_variable_bfe820d9_a376_4a55_9e90_b81109ec44df", "dc80fcc4-aaa5-4726-b8fc-3c84d980b308" => "component_variable_dc80fcc4_aaa5_4726_b8fc_3c84d980b308", "a359153a-d2f3-4674-80b7-54157a8312e9" => "component_variable_a359153a_d2f3_4674_80b7_54157a8312e9", "46884351-67e9-4fc0-a863-a403ab338cea" => "component_variable_46884351_67e9_4fc0_a863_a403ab338cea"]), "1715f8f9-0e0a-42c7-ad65-3964534a3c98", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "0c614913-16fc-43d3-9088-9660330187c6", "end"), "html", null, true);
    }

    public function block_block2212267466($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "b9140469-b3b7-4160-87c5-bb279f18866c", "start"), "html", null, true);
        echo " <h1 class=\"coh-heading coh-ce-cpt_text_highlight-d5d87dcb\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasPermission", [0 => "access visual page builder"], "method", false, false, true, 1) &&  !array_key_exists("component_content", $context))) {
            echo " data-ssa-field-uuid=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderFieldUuid($context, "70d92253-75ac-43b0-bc07-17f83f980aa2", "Array"), "html", null, true);
            echo "\" data-ssa-form-type=\"form-input\"";
        }
        echo " > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "70d92253-75ac-43b0-bc07-17f83f980aa2"));
        echo " </h1> ";
        $context["component_variable_ad025039_96c5_4cce_a27b_48778043471c"] = false;
        echo " ";
        $context["component_variable_50bae73f_99e4_446b_a738_9939a3dade60"] = $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7f7707ac-c1a9-4f0d-ad94-54c3c24c9031");
        echo " ";
        ob_start(function () { return ''; });
        echo t("h2", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_e8f77e4e_3de9_47cc_b229_7040a4f78719"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("align-text-left", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_42c2324a_e7ee_45b6_ab1e_f5dfba48bfb2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("dark-heading", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_fa5d575b_1d6e_44f0_a99e_1a2f7688bc27"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_heading", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["ad025039-96c5-4cce-a27b-48778043471c" => "component_variable_ad025039_96c5_4cce_a27b_48778043471c", "50bae73f-99e4-446b-a738-9939a3dade60" => "component_variable_50bae73f_99e4_446b_a738_9939a3dade60", "e8f77e4e-3de9-47cc-b229-7040a4f78719" => "component_variable_e8f77e4e_3de9_47cc_b229_7040a4f78719", "42c2324a-e7ee-45b6-ab1e-f5dfba48bfb2" => "component_variable_42c2324a_e7ee_45b6_ab1e_f5dfba48bfb2", "fa5d575b-1d6e-44f0-a99e-1a2f7688bc27" => "component_variable_fa5d575b_1d6e_44f0_a99e_1a2f7688bc27"], "1600ce98-2ce2-402b-9d6c-1682029d1792", ""), "html", null, true);
        echo " ";
        $context["component_variable_5fc743c3_6b31_4a40_bd05_24acfb4ca9ba"] = $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d8c2e0b7-4d8f-4aa8-b49e-fd23b8696b6d");
        echo " ";
        ob_start(function () { return ''; });
        echo t("coh-style-text-color-light-background", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_21656d58_6784_4331_9370_2e7009487b4f"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8bac75a1_19a5_42af_99fa_5877541c6590"] = 0;
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_f8e05754_678a_4864_9304_c742b959b852"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_5af21675_f8f5_48ce_816d_faedbed6b600"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_7f84a990_f95f_4bc3_98c9_2cd496b005ea"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_6dc6b921_8b08_4047_b4b5_2d838ccbd734"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_text", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["5fc743c3-6b31-4a40-bd05-24acfb4ca9ba" => "component_variable_5fc743c3_6b31_4a40_bd05_24acfb4ca9ba", "21656d58-6784-4331-9370-2e7009487b4f" => "component_variable_21656d58_6784_4331_9370_2e7009487b4f", "8bac75a1-19a5-42af-99fa-5877541c6590" => "component_variable_8bac75a1_19a5_42af_99fa_5877541c6590", "f8e05754-678a-4864-9304-c742b959b852" => "component_variable_f8e05754_678a_4864_9304_c742b959b852", "5af21675-f8f5-48ce-816d-faedbed6b600" => "component_variable_5af21675_f8f5_48ce_816d_faedbed6b600", "7f84a990-f95f-4bc3-98c9-2cd496b005ea" => "component_variable_7f84a990_f95f_4bc3_98c9_2cd496b005ea", "6dc6b921-8b08-4047-b4b5-2d838ccbd734" => "component_variable_6dc6b921_8b08_4047_b4b5_2d838ccbd734"], "52c92ffd-99f7-43e8-a1c3-1f724951def2", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "b9140469-b3b7-4160-87c5-bb279f18866c", "end"), "html", null, true);
    }

    public function block_block3513958274($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "e3283227-516b-4bce-b256-f55af1becc55", "start"), "html", null, true);
        echo " ";
        $context["component_variable_ad025039_96c5_4cce_a27b_48778043471c"] = false;
        echo " ";
        $context["component_variable_50bae73f_99e4_446b_a738_9939a3dade60"] = $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f7b5e91e-a04c-419d-a7be-ea133b356112");
        echo " ";
        ob_start(function () { return ''; });
        echo t("h2", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_e8f77e4e_3de9_47cc_b229_7040a4f78719"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("align-text-left", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_42c2324a_e7ee_45b6_ab1e_f5dfba48bfb2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("dark-heading", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_fa5d575b_1d6e_44f0_a99e_1a2f7688bc27"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_heading", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["ad025039-96c5-4cce-a27b-48778043471c" => "component_variable_ad025039_96c5_4cce_a27b_48778043471c", "50bae73f-99e4-446b-a738-9939a3dade60" => "component_variable_50bae73f_99e4_446b_a738_9939a3dade60", "e8f77e4e-3de9-47cc-b229-7040a4f78719" => "component_variable_e8f77e4e_3de9_47cc_b229_7040a4f78719", "42c2324a-e7ee-45b6-ab1e-f5dfba48bfb2" => "component_variable_42c2324a_e7ee_45b6_ab1e_f5dfba48bfb2", "fa5d575b-1d6e-44f0-a99e-1a2f7688bc27" => "component_variable_fa5d575b_1d6e_44f0_a99e_1a2f7688bc27"], "a3dab746-bf63-440d-83f0-f62f6ef2c5d7", ""), "html", null, true);
        echo " <h1 class=\"coh-heading\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasPermission", [0 => "access visual page builder"], "method", false, false, true, 1) &&  !array_key_exists("component_content", $context))) {
            echo " data-ssa-field-uuid=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderFieldUuid($context, "249eaeb8-5ec1-4075-8d33-6649bf8be301", "Array"), "html", null, true);
            echo "\" data-ssa-form-type=\"form-input\"";
        }
        echo " > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "249eaeb8-5ec1-4075-8d33-6649bf8be301"));
        echo " </h1> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "e3283227-516b-4bce-b256-f55af1becc55", "end"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-text-highlight.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-text-highlight.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-text-highlight.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "trans" => 1, "block" => 1, "if" => 1);
        static $filters = array("escape" => 1, "merge" => 1, "raw" => 1);
        static $functions = array("attach_library" => 1, "get_content_language" => 1, "renderComponent" => 1, "frontendBuilderDropzone" => 1, "render_field_uuid" => 1, "getComponentFieldValue" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'block', 'if'],
                ['escape', 'merge', 'raw'],
                ['attach_library', 'get_content_language', 'renderComponent', 'frontendBuilderDropzone', 'render_field_uuid', 'getComponentFieldValue']
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
