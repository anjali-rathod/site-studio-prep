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

/* __string_template__a78a4517b04bf11d0887b6a2378ce3aa */
class __TwigTemplate_2004de3aae99d6acf1e937e544a1c2eb extends Template
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
        $context["component_variable_4f0888de_7852_4c3f_8ba6_aeea5f46b91f"] = ('' === $tmp = "rgba(130, 241, 175, 1)") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:ff944e35-94f1-4104-9da8-f16853080f1c]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), false), "html", null, true);
        $context["component_variable_6864128a_094e_4905_a966_3cb05094062e"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_c40439a5_e1f2_46c1_849c_3eda05d1f62f"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_c615c99c_0be6_436b_8410_59c91b9e9a4c"] = ('' === $tmp = "This is the descriotopm") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_99d146c5_b501_45b4_9279_e98343d5d180"] = ('' === $tmp = "head1`") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8e2c5abc_c79f_4fc6_9c23_4ffeb6390396"] = ('' === $tmp = "head 2") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_highlight_card", false, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["4f0888de-7852-4c3f-8ba6-aeea5f46b91f" => "component_variable_4f0888de_7852_4c3f_8ba6_aeea5f46b91f", "6864128a-094e-4905-a966-3cb05094062e" => "component_variable_6864128a_094e_4905_a966_3cb05094062e", "c40439a5-e1f2-46c1-849c-3eda05d1f62f" => "component_variable_c40439a5_e1f2_46c1_849c_3eda05d1f62f", "c615c99c-0be6-436b-8410-59c91b9e9a4c" => "component_variable_c615c99c_0be6_436b_8410_59c91b9e9a4c", "99d146c5-b501-45b4-9279-e98343d5d180" => "component_variable_99d146c5_b501_45b4_9279_e98343d5d180", "8e2c5abc-c79f-4fc6-9c23-4ffeb6390396" => "component_variable_8e2c5abc_c79f_4fc6_9c23_4ffeb6390396"], "a73f8925-7b3c-42d6-b96b-875dbbfd46c3", ""), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__a78a4517b04bf11d0887b6a2378ce3aa";
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
        return new Source("", "__string_template__a78a4517b04bf11d0887b6a2378ce3aa", "");
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
