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

/* __string_template__c8e3c361a3c980eb6e6626b6413eb9f3 */
class __TwigTemplate_c7321814e795292f1ab23e152068fc52 extends Template
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
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = "twitter") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = "https://www.twitter.com/acquia") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = "Follow us on Twitter") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = "facebook") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = "https://www.facebook.com/acquia") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = "Follow us on Facebook") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = "linkedin") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = "https://www.linkedin.com/acquia") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = "Follow us on Linked In") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = "pinterest") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = "https://www.pinterest.com/acquia") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = "Follow us on Pinterest") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_b7b48e2f_427c_41dd_8b1f_480be3bce017"] = ('' === $tmp = "facebook") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_523afe0e_2cab_42d3_a845_53944be67431"] = ('' === $tmp = "https://www.facebook.com/acquia") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_41e4bef4_fb24_4953_9bc1_e7896b7e2507"] = ('' === $tmp = "Follow us on Facebook") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_social_links", false, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["8fa56baf-1a4e-482a-9631-c69d45e3079b" => [0 => ["b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_0_41e4bef4_fb24_4953_9bc1_e7896b7e2507"], 1 => ["b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_1_41e4bef4_fb24_4953_9bc1_e7896b7e2507"], 2 => ["b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_2_41e4bef4_fb24_4953_9bc1_e7896b7e2507"], 3 => ["b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_8fa56baf_1a4e_482a_9631_c69d45e3079b_3_41e4bef4_fb24_4953_9bc1_e7896b7e2507"]], "b7b48e2f-427c-41dd-8b1f-480be3bce017" => "component_variable_b7b48e2f_427c_41dd_8b1f_480be3bce017", "523afe0e-2cab-42d3-a845-53944be67431" => "component_variable_523afe0e_2cab_42d3_a845_53944be67431", "41e4bef4-fb24-4953-9bc1-e7896b7e2507" => "component_variable_41e4bef4_fb24_4953_9bc1_e7896b7e2507"], "d141c98d-01de-47a1-875b-a4e6756a857e", ""), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__c8e3c361a3c980eb6e6626b6413eb9f3";
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
        return new Source("", "__string_template__c8e3c361a3c980eb6e6626b6413eb9f3", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "renderComponent" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['attach_library', 'renderComponent']
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
