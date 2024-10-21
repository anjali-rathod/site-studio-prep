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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-site-footer.html.twig */
class __TwigTemplate_0368fd9ba5928ea1ec31a7c86b797200 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.drupal-menu"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <footer class=\"coh-container ssa-component coh-component ssa-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5e8437ec-afc1-49fe-8bbc-0323706449a1"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "32c0b885-cb2d-48cd-a01f-607b86ac4253"));
        echo " coh-style-focusable-content coh-ce-cpt_site_footer-e46e4ec8\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container primary-row coh-ce-cpt_site_footer-7db95991\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container coh-ce-cpt_site_footer-607d5298\" > </div> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <nav class=\"coh-container footer-menu coh-ce-cpt_site_footer-1a90bda\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_drupal_menu"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderMenu("footer", "menu_tpl_footer", false, 1), "html", null, true);
        echo " </nav> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container\" > </div> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container coh-ce-cpt_site_footer-beb0456e\" > ";
        ob_start(function () { return ''; });
        echo t("twitter", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("https://www.twitter.com/acquia", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Follow us on Twitter", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("facebook", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("https://www.facebook.com/acquia", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Follow us on Facebook", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("linkedin", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("https://www.linkedin.com/acquia", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Follow us on Linked In", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("pinterest", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("https://www.pinterest.com/acquia", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Follow us on Pinterest", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("facebook", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("https://www.facebook.com/acquia", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Follow us on Facebook", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_social_links", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["8fa56baf-1a4e-482a-9631-c69d45e3079b" => [0 => ["b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_41e4bef4_fb24_4953_9bc1_e7896b7e2507"], 1 => ["b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_41e4bef4_fb24_4953_9bc1_e7896b7e2507"], 2 => ["b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_41e4bef4_fb24_4953_9bc1_e7896b7e2507"], 3 => ["b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_41e4bef4_fb24_4953_9bc1_e7896b7e2507"]], "b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_41e4bef4_fb24_4953_9bc1_e7896b7e2507"], "dd069b1c-3a85-4302-bcb5-d17b11ac82d0", "c7b66f62-f28c-4f89-8a4e-2a95f8ee8da7"), "html", null, true);
        echo " </div> </div> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container secondary-row coh-ce-cpt_site_footer-a79b329\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container coh-ce-cpt_site_footer-595b4965\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_wysiwyg"), "html", null, true);
        echo " <div class=\"coh-wysiwyg\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasPermission", [0 => "access visual page builder"], "method", false, false, true, 1) &&  !array_key_exists("component_content", $context))) {
            echo " data-ssa-field-uuid=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderFieldUuid($context, "edd0c3b4-30a5-446c-bdea-adf60e363ff2", "Array"), "html", null, true);
            echo "\" data-ssa-form-type=\"form-wysiwyg\"";
        }
        echo " > ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edd0c3b4-30a5-446c-bdea-adf60e363ff2", "#text"), "html", null, true);
        $context["wysiwyg"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edd0c3b4-30a5-446c-bdea-adf60e363ff2", "#textFormat"), "html", null, true);
        $context["text_format"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edd0c3b4-30a5-446c-bdea-adf60e363ff2", ""), "html", null, true);
        $context["token_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->formatWysiwyg($this->sandbox->ensureToStringAllowed(($context["wysiwyg"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["text_format"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["token_text"] ?? null), 1, $this->source)), "html", null, true);
        echo " </div> </div> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container coh-ce-cpt_site_footer-7974db9e\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_wysiwyg"), "html", null, true);
        echo " <div class=\"coh-wysiwyg\" > ";
        ob_start(function () { return ''; });
        echo t("<p>+23 983247832</p>", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["wysiwyg"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["text_format"] = ('' === $tmp = "basic_html") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["token_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->formatWysiwyg($this->sandbox->ensureToStringAllowed(($context["wysiwyg"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["text_format"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["token_text"] ?? null), 1, $this->source)), "html", null, true);
        echo " </div> </div> </div> </footer> 
";
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-site-footer.html.twig";
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
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-site-footer.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-site-footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "trans" => 1, "if" => 1);
        static $filters = array("escape" => 1, "raw" => 1);
        static $functions = array("attach_library" => 1, "getComponentFieldValue" => 1, "render_menu" => 1, "get_content_language" => 1, "renderComponent" => 1, "render_field_uuid" => 1, "format_wysiwyg" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'if'],
                ['escape', 'raw'],
                ['attach_library', 'getComponentFieldValue', 'render_menu', 'get_content_language', 'renderComponent', 'render_field_uuid', 'format_wysiwyg']
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
