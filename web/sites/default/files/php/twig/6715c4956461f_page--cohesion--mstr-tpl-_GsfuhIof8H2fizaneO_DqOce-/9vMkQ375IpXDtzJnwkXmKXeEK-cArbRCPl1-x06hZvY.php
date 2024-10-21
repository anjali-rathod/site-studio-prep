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

/* sites/default/files/cohesion/templates/page--cohesion--mstr-tpl-master-template-boxed.html.twig */
class __TwigTemplate_7af1e5eeaef9a429f1f1579f88629961 extends Template
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
        echo t("header-position--fixed", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_7a8763cb_a384_46b3_ab55_b30a917df1fb"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("coh-style-header-light-theme", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_ccdfb29c_9653_4cf2_97a8_349e2fd98fa6"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:ff944e35-94f1-4104-9da8-f16853080f1c]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), true), "html", null, true);
        $context["component_variable_fd8690ce_ff64_46b5_8995_fd737ee47275"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Placeholder", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_b6d34883_8a15_4507_a299_4ed89592398b"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_15781c68_34fb_470d_aa37_568c76107d4e"] = 192;
        echo " ";
        $context["component_variable_e24fd2bd_e87a_41ee_a91a_e5eef8f7d6d7"] = 96;
        echo " ";
        ob_start(function () { return ''; });
        echo t("menu-position-desktop--center", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_1e034b8c_7f7a_4505_830c_ed12ac608c6a"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("menu-column-count-desktop-3", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_3ce77ba2_fdff_4656_9b51_8257a78f2bf3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("Menu toggle", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_ae3580df_0054_4944_90f8_e2736dacde2c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("new text", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_923d92f0_f715_41eb_9496_805808fb3411"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_site_header", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["7a8763cb-a384-46b3-ab55-b30a917df1fb" => "component_variable_7a8763cb_a384_46b3_ab55_b30a917df1fb", "ccdfb29c-9653-4cf2-97a8-349e2fd98fa6" => "component_variable_ccdfb29c_9653_4cf2_97a8_349e2fd98fa6", "fd8690ce-ff64-46b5-8995-fd737ee47275" => "component_variable_fd8690ce_ff64_46b5_8995_fd737ee47275", "b6d34883-8a15-4507-a299-4ed89592398b" => "component_variable_b6d34883_8a15_4507_a299_4ed89592398b", "15781c68-34fb-470d-aa37-568c76107d4e" => "component_variable_15781c68_34fb_470d_aa37_568c76107d4e", "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7" => "component_variable_e24fd2bd_e87a_41ee_a91a_e5eef8f7d6d7", "1e034b8c-7f7a-4505-830c-ed12ac608c6a" => "component_variable_1e034b8c_7f7a_4505_830c_ed12ac608c6a", "3ce77ba2-fdff-4656-9b51-8257a78f2bf3" => "component_variable_3ce77ba2_fdff_4656_9b51_8257a78f2bf3", "ae3580df-0054-4944-90f8-e2736dacde2c" => "component_variable_ae3580df_0054_4944_90f8_e2736dacde2c", "923d92f0-f715-41eb-9496-805808fb3411" => "component_variable_923d92f0_f715_41eb_9496_805808fb3411"], "9320f557-e16a-4fea-a942-a2f7750002c0", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container coh-style-padding-top-bottom-large coh-style-focusable-content coh-container-boxed\" > ";
        if ($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->isActiveTheme("cohesion_theme")) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        }
        echo " </div> ";
        ob_start(function () { return ''; });
        echo t("<p>53 State street, 10th Floor, Boston, MA 02109, 888-922-7842</p>", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_f9f11fad_85d9_46d9_adc8_7630861fbdac_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("cohesion", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_f9f11fad_85d9_46d9_adc8_7630861fbdac_textFormat"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("<p>Copyright&nbsp;© 2020 Acquia, Inc. All Rights Reserved.</p>", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_edd0c3b4_30a5_446c_bdea_adf60e363ff2_text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("cohesion", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_edd0c3b4_30a5_446c_bdea_adf60e363ff2_textFormat"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("coh-style-footer-light-theme", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_5e8437ec_afc1_49fe_8bbc_0323706449a1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo t("menu-position-desktop--center", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        $context["component_variable_32c0b885_cb2d_48cd_a01f_607b86ac4253"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_site_footer", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["f9f11fad-85d9-46d9-adc8-7630861fbdac" => ["text" => "component_variable_f9f11fad_85d9_46d9_adc8_7630861fbdac_text", "textFormat" => "component_variable_f9f11fad_85d9_46d9_adc8_7630861fbdac_textFormat"], "edd0c3b4-30a5-446c-bdea-adf60e363ff2" => ["text" => "component_variable_edd0c3b4_30a5_446c_bdea_adf60e363ff2_text", "textFormat" => "component_variable_edd0c3b4_30a5_446c_bdea_adf60e363ff2_textFormat"], "5e8437ec-afc1-49fe-8bbc-0323706449a1" => "component_variable_5e8437ec_afc1_49fe_8bbc_0323706449a1", "32c0b885-cb2d-48cd-a01f-607b86ac4253" => "component_variable_32c0b885_cb2d_48cd_a01f_607b86ac4253"], "8d72fbe2-3a0f-4639-9613-6d8130f65da3", ""), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/page--cohesion--mstr-tpl-master-template-boxed.html.twig";
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
        return new Source("", "sites/default/files/cohesion/templates/page--cohesion--mstr-tpl-master-template-boxed.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/page--cohesion--mstr-tpl-master-template-boxed.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "trans" => 1, "if" => 1);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "get_content_language" => 1, "processtoken" => 1, "renderComponent" => 1, "isActiveTheme" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'if'],
                ['escape'],
                ['attach_library', 'get_content_language', 'processtoken', 'renderComponent', 'isActiveTheme']
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
