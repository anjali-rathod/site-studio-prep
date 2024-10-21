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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-link.html.twig */
class __TwigTemplate_1f065a8816a134310b48b27b4366873c extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.link"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.matchHeight"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.parallax_scrolling"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.cohMatchHeights"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container ssa-component coh-component ssa-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "1464d17c-7d75-4880-9c41-76121d7164a6"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_link-756fad04\" > ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c7a2cf17-ad4e-4010-baf9-8614485980c1"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["coh_repeater_val"]) {
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_link"), "html", null, true);
            echo " <a href=\"";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fe7c2fe5-abc3-4c90-acd8-89b60c5a2c20"));
            $context["entityId"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            if ((($context["entityId"] ?? null) != "")) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->pathRenderer($this->sandbox->ensureToStringAllowed(($context["entityId"] ?? null), 1, $this->source)), "html", null, true);
            }
            echo "\" class=\"coh-link ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4f5a125b-b304-4a1a-8515-4ef60c69b9b8"));
            echo " coh-ce-cpt_link-b25617c6";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
            echo " coh-ce-cpt_link-b25617c6\" ";
            if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e5be9a00-c8dd-4d78-9c5b-f7e341818cba") != "")) {
                echo "target=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e5be9a00-c8dd-4d78-9c5b-f7e341818cba"), "html", null, true);
                echo "\"";
            }
            echo " > ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bc498d4f-e8a5-44f5-abee-b782a70e9753"));
            echo "    </a> ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coh_repeater_val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div> 
";
        // line 2
        ob_start(function () { return ''; });
        echo "<style>.";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 2, $this->source), "html", null, true);
        echo ".coh-ce-cpt_link-756fad04 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
";
        // line 9
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ec96c784-f3ba-4f2d-8350-9c796a068c5a"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ec96c784-f3ba-4f2d-8350-9c796a068c5a"))) {
                echo " -webkit-flex-direction: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ec96c784-f3ba-4f2d-8350-9c796a068c5a"));
                echo ";";
            }
        }
        // line 10
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ec96c784-f3ba-4f2d-8350-9c796a068c5a"))) {
            echo "       ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ec96c784-f3ba-4f2d-8350-9c796a068c5a"))) {
                echo " -ms-flex-direction: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ec96c784-f3ba-4f2d-8350-9c796a068c5a"));
                echo ";";
            }
        }
        // line 11
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ec96c784-f3ba-4f2d-8350-9c796a068c5a"))) {
            echo "           ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ec96c784-f3ba-4f2d-8350-9c796a068c5a"))) {
                echo " flex-direction: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ec96c784-f3ba-4f2d-8350-9c796a068c5a"));
                echo ";";
            }
        }
        // line 12
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c783a0be-af9f-483b-8818-8096f34a608a"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c783a0be-af9f-483b-8818-8096f34a608a"))) {
                echo " -webkit-box-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c783a0be-af9f-483b-8818-8096f34a608a"));
                echo ";";
            }
        }
        // line 13
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c783a0be-af9f-483b-8818-8096f34a608a"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c783a0be-af9f-483b-8818-8096f34a608a"))) {
                echo " -webkit-justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c783a0be-af9f-483b-8818-8096f34a608a"));
                echo ";";
            }
        }
        // line 14
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c783a0be-af9f-483b-8818-8096f34a608a"))) {
            echo "       ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c783a0be-af9f-483b-8818-8096f34a608a"))) {
                echo " -ms-flex-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c783a0be-af9f-483b-8818-8096f34a608a"));
                echo ";";
            }
        }
        // line 15
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c783a0be-af9f-483b-8818-8096f34a608a"))) {
            echo "           ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c783a0be-af9f-483b-8818-8096f34a608a"))) {
                echo " justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c783a0be-af9f-483b-8818-8096f34a608a"));
                echo ";";
            }
        }
        // line 16
        echo "  margin-right: -0.5rem;
  margin-left: -0.5rem;
}
@media (max-width: 1169px) {
  .";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 20, $this->source), "html", null, true);
        echo ".coh-ce-cpt_link-756fad04 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
";
        // line 23
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6d145f56-0b19-4633-babf-efea9e4dac03"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6d145f56-0b19-4633-babf-efea9e4dac03"))) {
                echo " -webkit-flex-direction: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6d145f56-0b19-4633-babf-efea9e4dac03"));
                echo ";";
            }
        }
        // line 24
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6d145f56-0b19-4633-babf-efea9e4dac03"))) {
            echo "         ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6d145f56-0b19-4633-babf-efea9e4dac03"))) {
                echo " -ms-flex-direction: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6d145f56-0b19-4633-babf-efea9e4dac03"));
                echo ";";
            }
        }
        // line 25
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6d145f56-0b19-4633-babf-efea9e4dac03"))) {
            echo "             ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6d145f56-0b19-4633-babf-efea9e4dac03"))) {
                echo " flex-direction: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6d145f56-0b19-4633-babf-efea9e4dac03"));
                echo ";";
            }
        }
        // line 26
        echo "  }
}
@media (max-width: 767px) {
  .";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 29, $this->source), "html", null, true);
        echo ".coh-ce-cpt_link-756fad04 {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
";
        // line 32
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "35d3011d-fcce-428d-b117-642085a634a0"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "35d3011d-fcce-428d-b117-642085a634a0"))) {
                echo " -webkit-flex-direction: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "35d3011d-fcce-428d-b117-642085a634a0"));
                echo ";";
            }
        }
        // line 33
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "35d3011d-fcce-428d-b117-642085a634a0"))) {
            echo "         ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "35d3011d-fcce-428d-b117-642085a634a0"))) {
                echo " -ms-flex-direction: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "35d3011d-fcce-428d-b117-642085a634a0"));
                echo ";";
            }
        }
        // line 34
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "35d3011d-fcce-428d-b117-642085a634a0"))) {
            echo "             ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "35d3011d-fcce-428d-b117-642085a634a0"))) {
                echo " flex-direction: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "35d3011d-fcce-428d-b117-642085a634a0"));
                echo ";";
            }
        }
        // line 35
        echo "  }
}
</style>";
        $context["compiledCSS"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderInlineStyle($this->sandbox->ensureToStringAllowed(($context["compiledCSS"] ?? null), 37, $this->source)));
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 37,  271 => 35,  262 => 34,  253 => 33,  244 => 32,  238 => 29,  233 => 26,  224 => 25,  215 => 24,  206 => 23,  200 => 20,  194 => 16,  185 => 15,  176 => 14,  167 => 13,  158 => 12,  149 => 11,  140 => 10,  131 => 9,  119 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-link.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-link.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 1, "if" => 1);
        static $filters = array("escape" => 1, "raw" => 1);
        static $functions = array("coh_instanceid" => 1, "attach_library" => 1, "getComponentFieldValue" => 1, "path_renderer" => 1, "renderInlineStyle" => 37);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'raw'],
                ['coh_instanceid', 'attach_library', 'getComponentFieldValue', 'path_renderer', 'renderInlineStyle']
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
