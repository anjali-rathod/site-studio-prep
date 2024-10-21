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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-site-header.html.twig */
class __TwigTemplate_6e86801766b719f8c3cae3e69e3cbdf6 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.image"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.matchHeight"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.parallax_scrolling"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.cohMatchHeights"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.link"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.drupal-menu"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <header class=\"coh-container ssa-component coh-component ssa-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " site-header ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ccdfb29c-9653-4cf2-97a8-349e2fd98fa6"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7a8763cb-a384-46b3-ab55-b30a917df1fb"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "1e034b8c-7f7a-4505-830c-ed12ac608c6a"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3ce77ba2-fdff-4656-9b51-8257a78f2bf3"));
        echo " coh-style-focusable-content coh-ce-cpt_site_header-e51d7f53\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_utilities_bar_horizontal", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), [], "810cc906-cdb0-41c2-a9a8-4d9934045f41", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container coh-ce-cpt_site_header-6577ed22\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_site_header-fdfdb89e\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_link"), "html", null, true);
        echo " <a href=\"";
        $context["href"] = ('' === $tmp = "/") ? '' : new Markup($tmp, $this->env->getCharset());
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->escapeURL($this->sandbox->ensureToStringAllowed(($context["href"] ?? null), 1, $this->source)), "html", null, true);
        echo "\" class=\"coh-link ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_site_header-b8f9e4d0\" target=\"_self\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_image"), "html", null, true);
        echo " <img class=\"coh-image coh-style-header-light-theme coh-ce-cpt_site_header-5282b65d coh-image-xl coh-image-align-left-xl\" loading=\"lazy\" data-src=\"";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fd8690ce-ff64-46b5-8995-fd737ee47275"));
        $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        $context["imagestyle"] = ('' === $tmp = "coh_small_landscape") ? '' : new Markup($tmp, $this->env->getCharset());
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle($this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 1, $this->source), $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 1, $this->source)), "html", null, true);
        echo "\" title=\"";
        echo t("pizza", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        echo "\" ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b6d34883-8a15-4507-a299-4ed89592398b") == "")) {
            echo "alt";
        } else {
            echo "alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b6d34883-8a15-4507-a299-4ed89592398b"));
            echo "\"";
        }
        echo " /> </a> </div> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container coh-ce-cpt_site_header-e2a0ade6\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.jquery_ui_effect_blind"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.jquery_ui_effect_none"), "html", null, true);
        echo " <button class=\"coh-button main-menu-toggle-button coh-ce-cpt_site_header-f9afdd26 coh-interaction\" data-interaction-modifiers=\"[{&quot;modifierType&quot;:&quot;toggle-modifier-accessible-collapsed&quot;,&quot;interactionScope&quot;:&quot;component&quot;,&quot;interactionTarget&quot;:&quot;.main-menu-toggle-button&quot;,&quot;modifierName&quot;:&quot;menu-active&quot;},{&quot;modifierType&quot;:&quot;toggle-modifier&quot;,&quot;interactionScope&quot;:&quot;document&quot;,&quot;interactionTarget&quot;:&quot;body&quot;,&quot;modifierName&quot;:&quot;menu-active&quot;}]\" aria-haspopup=\"true\" aria-expanded=\"false\" ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ae3580df-0054-4944-90f8-e2736dacde2c") == "")) {
            echo "aria-label";
        } else {
            echo "aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ae3580df-0054-4944-90f8-e2736dacde2c"));
            echo "\"";
        }
        echo " data-coh-settings='{ \"sm\":{\"buttonAnimation\":[{\"animationType\":\"blind\",\"animationScope\":\"component\",\"animationDirection\":\"left\",\"animationEasing\":\"easeInOutCubic\",\"animationTarget\":\".main-menu-wrapper\",\"animationDuration\":200}]},\"xl\":{\"buttonAnimation\":[{\"animationType\":\"none\"}]} }' type=\"button\"> </button> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container main-menu-wrapper coh-ce-cpt_site_header-4bd5ea3e\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container coh-ce-cpt_site_header-cae467c8\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <nav class=\"coh-container main-menu coh-ce-cpt_site_header-85f5d826\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_drupal_menu"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderMenu("main", "menu_tpl_main_navigation", false, 1), "html", null, true);
        echo " </nav> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_utilities_bar_vertical", true, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), [], "efe780d1-dc14-4086-b2a2-58ea8bf97f14", ""), "html", null, true);
        echo " </div> </div> </div> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container coh-ce-cpt_site_header-a309120d\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.jquery_ui_effect_none"), "html", null, true);
        echo " <button class=\"coh-button coh-style-header-light-theme coh-ce-cpt_site_header-de1b4183 coh-interaction\" data-interaction-modifiers=\"[{&quot;modifierType&quot;:&quot;&quot;,&quot;interactionScope&quot;:&quot;document&quot;}]\" data-coh-settings='{ \"xl\":{\"buttonAnimation\":[{\"animationType\":\"none\"}]} }' type=\"button\">";
        echo t("9876543210", array(), ["langcode" => $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getContentLanguage()]);
        echo "</button> </div> </div> </header> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container ssa-component coh-component ssa-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo "\" data-coh-match-heights=\"{&quot;xl&quot;:{&quot;target&quot;:&quot;site-header.header-position--fixed&quot;,&quot;children&quot;:false}}\" > </div> 
";
        // line 2
        ob_start(function () { return ''; });
        echo "<style>.";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 2, $this->source), "html", null, true);
        echo ".coh-ce-cpt_site_header-fdfdb89e {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin-right: 0.5rem;
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
";
        // line 19
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "15781c68-34fb-470d-aa37-568c76107d4e"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "15781c68-34fb-470d-aa37-568c76107d4e"))) {
                echo " min-width: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "15781c68-34fb-470d-aa37-568c76107d4e"));
                echo "px;";
            }
        }
        // line 20
        echo "}
@media (max-width: 1023px) {
  .";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 22, $this->source), "html", null, true);
        echo ".coh-ce-cpt_site_header-fdfdb89e {
    margin-right: 0;
    -webkit-flex-basis: auto;
        -ms-flex-preferred-size: auto;
            flex-basis: auto;
    -webkit-box-flex: 0;
    -webkit-flex-grow: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
";
        // line 31
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7"))) {
                echo " min-width: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7"));
                echo "px;";
            }
        }
        // line 32
        echo "  }
}
.";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 34, $this->source), "html", null, true);
        echo ".coh-ce-cpt_site_header-fdfdb89e:after {
  margin-right: auto;
}
.menu-position-desktop--left .";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 37, $this->source), "html", null, true);
        echo ".coh-ce-cpt_site_header-fdfdb89e {
  -webkit-flex-basis: auto;
      -ms-flex-preferred-size: auto;
          flex-basis: auto;
  -webkit-box-flex: 0;
  -webkit-flex-grow: 0;
      -ms-flex-positive: 0;
          flex-grow: 0;
}
.";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 46, $this->source), "html", null, true);
        echo ".coh-ce-cpt_site_header-b8f9e4d0 {
  margin-right: auto;
";
        // line 48
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "15781c68-34fb-470d-aa37-568c76107d4e"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "15781c68-34fb-470d-aa37-568c76107d4e"))) {
                echo " width: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "15781c68-34fb-470d-aa37-568c76107d4e"));
                echo "px;";
            }
        }
        // line 49
        echo "}
@media (max-width: 1023px) {
  .";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 51, $this->source), "html", null, true);
        echo ".coh-ce-cpt_site_header-b8f9e4d0 {
    margin-right: 0;
";
        // line 53
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7"))) {
                echo " width: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e24fd2bd-e87a-41ee-a91a-e5eef8f7d6d7"));
                echo "px;";
            }
        }
        // line 54
        echo "  }
}
</style>";
        $context["compiledCSS"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderInlineStyle($this->sandbox->ensureToStringAllowed(($context["compiledCSS"] ?? null), 56, $this->source)));
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-site-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 56,  257 => 54,  248 => 53,  243 => 51,  239 => 49,  230 => 48,  225 => 46,  213 => 37,  207 => 34,  203 => 32,  194 => 31,  182 => 22,  178 => 20,  169 => 19,  147 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-site-header.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-site-header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "trans" => 1, "if" => 1);
        static $filters = array("escape" => 1, "raw" => 1);
        static $functions = array("coh_instanceid" => 1, "attach_library" => 1, "getComponentFieldValue" => 1, "renderComponent" => 1, "escape_url" => 1, "cohesion_image_style" => 1, "get_content_language" => 1, "render_menu" => 1, "renderInlineStyle" => 56);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'if'],
                ['escape', 'raw'],
                ['coh_instanceid', 'attach_library', 'getComponentFieldValue', 'renderComponent', 'escape_url', 'cohesion_image_style', 'get_content_language', 'render_menu', 'renderInlineStyle']
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
