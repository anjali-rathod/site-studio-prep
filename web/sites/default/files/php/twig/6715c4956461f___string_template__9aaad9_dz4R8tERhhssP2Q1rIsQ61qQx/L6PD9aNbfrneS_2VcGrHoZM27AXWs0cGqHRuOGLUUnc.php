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

/* __string_template__9aaad93c57f7a321954162cf8edffbe7 */
class __TwigTemplate_05ff58b664d5790b60fd93abfacac6b7 extends Template
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
        $context["component_variable_d8c2e0b7_4d8f_4aa8_b49e_fd23b8696b6d"] = ('' === $tmp = "BLahblahBLahblahBLahblahBLahblahBLahblahBLahblahBLahblahBLahblah") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_70d92253_75ac_43b0_bc07_17f83f980aa2"] = ('' === $tmp = "Headin 1") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_7f7707ac_c1a9_4f0d_ad94_54c3c24c9031"] = ('' === $tmp = "HEAD 2") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_f7b5e91e_a04c_419d_a7be_ea133b356112"] = ('' === $tmp = "Footer 1 ") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_249eaeb8_5ec1_4075_8d33_6649bf8be301"] = ('' === $tmp = "Footer 2") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_text_highlight", false, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["d8c2e0b7-4d8f-4aa8-b49e-fd23b8696b6d" => "component_variable_d8c2e0b7_4d8f_4aa8_b49e_fd23b8696b6d", "70d92253-75ac-43b0-bc07-17f83f980aa2" => "component_variable_70d92253_75ac_43b0_bc07_17f83f980aa2", "7f7707ac-c1a9-4f0d-ad94-54c3c24c9031" => "component_variable_7f7707ac_c1a9_4f0d_ad94_54c3c24c9031", "f7b5e91e-a04c-419d-a7be-ea133b356112" => "component_variable_f7b5e91e_a04c_419d_a7be_ea133b356112", "249eaeb8-5ec1-4075-8d33-6649bf8be301" => "component_variable_249eaeb8_5ec1_4075_8d33_6649bf8be301"], "b87539dc-413c-4fd4-aa28-e267004ed7b2", ""), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__9aaad93c57f7a321954162cf8edffbe7";
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
        return new Source("", "__string_template__9aaad93c57f7a321954162cf8edffbe7", "");
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
