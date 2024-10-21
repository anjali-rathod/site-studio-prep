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

/* __string_template__24095a740edc03388835de3880bd4c6c */
class __TwigTemplate_e5e46a2b2d42299d00b69de566ee8680 extends Template
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
        $context["component_variable_dcdfcf7b_2157_4ebe_b759_67519fc4947e"] = ('' === $tmp = "rgba(230, 240, 231, 1)") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:media:8adf0e84-8be8-4000-85e2-85c6affae094]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), false), "html", null, true);
        $context["component_variable_5293a402_d17a_4942_9c32_e98d19a1d42c"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_fdddcd72_63b4_494f_918e_23878b8f39d5"] = ('' === $tmp = "node::9") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_61f5a8bf_2477_4a3f_9d35_fe9bf29c92c8"] = ('' === $tmp = "HEADIN 1") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_327d604d_acd3_426d_9763_0e28eeec0444"] = ('' === $tmp = "skdjbfiubfskdjbfiubfskdjbfiubfskdjbfiubfskdjbfiubfskdjbfiubfskdjbfiubf") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_fd4c287a_7c46_4876_b909_27518a386d3e"] = ('' === $tmp = "heading 2") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_promoted_card", false, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["dcdfcf7b-2157-4ebe-b759-67519fc4947e" => "component_variable_dcdfcf7b_2157_4ebe_b759_67519fc4947e", "5293a402-d17a-4942-9c32-e98d19a1d42c" => "component_variable_5293a402_d17a_4942_9c32_e98d19a1d42c", "fdddcd72-63b4-494f-918e-23878b8f39d5" => "component_variable_fdddcd72_63b4_494f_918e_23878b8f39d5", "61f5a8bf-2477-4a3f-9d35-fe9bf29c92c8" => "component_variable_61f5a8bf_2477_4a3f_9d35_fe9bf29c92c8", "327d604d-acd3-426d-9763-0e28eeec0444" => "component_variable_327d604d_acd3_426d_9763_0e28eeec0444", "fd4c287a-7c46-4876-b909-27518a386d3e" => "component_variable_fd4c287a_7c46_4876_b909_27518a386d3e"], "ba8dd69f-d5b3-49fd-aeb1-826a46531bc2", ""), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__24095a740edc03388835de3880bd4c6c";
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
        return new Source("", "__string_template__24095a740edc03388835de3880bd4c6c", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "processtoken" => 1, "renderComponent" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['attach_library', 'processtoken', 'renderComponent']
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
