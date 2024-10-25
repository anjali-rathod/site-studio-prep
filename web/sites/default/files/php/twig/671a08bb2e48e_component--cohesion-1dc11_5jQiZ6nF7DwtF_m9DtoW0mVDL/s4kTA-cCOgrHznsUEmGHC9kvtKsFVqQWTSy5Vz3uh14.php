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

/* sites/default/files/cohesion/templates/component--cohesion-1dc117b7.html.twig */
class __TwigTemplate_d681934dd610d7635e19d845f000bfd8 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.slider-container"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_slider_container"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.slider-container"), "html", null, true);
        echo " <div class=\"coh-slider-container ssa-component coh-component ssa-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c14ec3c8-a858-4cb5-9434-8ebafdb5b823") == "bleed")) {
            echo "coh-slider-container-bleed-xl";
        }
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c14ec3c8-a858-4cb5-9434-8ebafdb5b823") == "retain")) {
            echo "coh-slider-container-no-bleed-xl";
        }
        echo " coh-slider-container-overflow-hidden-xl coh-slider-container-nav-outside-middle-left-right-xl coh-slider-container-pager-outside-bottom-middle-xl ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c3c4130e-a32e-46ba-8bb3-ca9b78daab4c"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ba83a10a-812d-4e1d-8918-30441ed5c940"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "06b406e7-742e-4817-8768-4444a7097d46"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ff5cf2cd-d6c2-4b29-a8a5-f4be0fe15c86"));
        echo " coh-style-slider-flex-layout coh-ce-1dc117b7-c5baa27a\"   role=\"region\"> <div class=\"coh-slider-nav-top\"></div> <div class=\"coh-slider-container-mid\"> <div class=\"coh-slider-container-inner \" data-coh-slider='{ \"arrows\" : false, \"counter\" : false, \"counterClass\" : \"coh-slide-count \", \"dots\" : false, \"dotsClass\" : \"slick-dots coh-style-slider-pagination\", \"dotsNumbers\" : false, \"draggable\" : true, \"edgeFriction\" : 0.15, \"mobileFirst\" : false, \"pauseOnFocus\" : false, \"pauseOnHover\" : false, \"respondTo\" : \"window\", \"responsive\" : {\"xl\":{\"slidesToShow\":";
        if ((twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "effdbd65-c5f8-4040-bda9-83449e60856b")) > 0)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "effdbd65-c5f8-4040-bda9-83449e60856b")), "html", null, true);
        } else {
            echo "1";
        }
        echo ",\"slidesToScroll\":";
        if ((twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dd77c3ab-c83a-4e9e-95c8-5aa9f9ecdf9a")) > 0)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dd77c3ab-c83a-4e9e-95c8-5aa9f9ecdf9a")), "html", null, true);
        } else {
            echo "1";
        }
        echo ",\"arrows\":true,\"prevArrow\":\"<button type=\\\"button\\\" class=\\\"slick-prev coh-style-slider-navigation-left\\\"></button>\",\"nextArrow\":\"<button type=\\\"button\\\" class=\\\"slick-next coh-style-slider-navigation-right\\\"></button>\",\"appendArrows\":\".coh-slider-container-mid\",\"dots\":true,\"appendDots\":\".coh-slider-nav-bottom\",\"draggable\":true,\"swipe\":true,\"fade\":false,\"vertical\":false,\"infinite\":true,\"speed\":400,\"cssEase\":\"ease\",\"pauseOnHover\":false,\"pauseOnDotsHover\":false,\"autoplay\":false,\"rows\":0},\"sm\":{\"slidesToShow\":";
        if ((twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f5d96f8a-8fa1-4019-ad89-2138b5ec4ffc")) > 0)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f5d96f8a-8fa1-4019-ad89-2138b5ec4ffc")), "html", null, true);
        } else {
            echo "1";
        }
        echo ",\"slidesToScroll\":";
        if ((twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d884c4c6-b64f-470c-bf51-6506f41f9bec")) > 0)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d884c4c6-b64f-470c-bf51-6506f41f9bec")), "html", null, true);
        } else {
            echo "1";
        }
        echo ",\"rows\":0},\"ps\":{\"slidesToShow\":";
        if ((twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ac8248d6-90fa-4542-800c-b50f6c2a3e56")) > 0)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ac8248d6-90fa-4542-800c-b50f6c2a3e56")), "html", null, true);
        } else {
            echo "1";
        }
        echo ",\"slidesToScroll\":";
        if ((twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8cf8d876-62d4-4d1f-9a42-09310f961b15")) > 0)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8cf8d876-62d4-4d1f-9a42-09310f961b15")), "html", null, true);
        } else {
            echo "1";
        }
        echo ",\"rows\":0}}, \"rows\" : 0, \"slide\" : \".coh-slider-item\", \"slidesPerRow\" : 0, \"touchMove\" : true, \"touchThreshold\" : 5, \"useCSS\" : true, \"useTransform\" : true, \"centerPadding\":\"0px\", \"infinite\" : false }'> <div class=\"coh-slider-nav-inner-top\"></div> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "342bec96-01e9-43e0-b28b-4cfd21ea3ead"), "html", null, true);
        echo " <div class=\"coh-slider-nav-inner-bottom\"></div> </div> </div> <div class=\"coh-slider-nav-bottom\"></div> </div> 
";
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-1dc117b7.html.twig";
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
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-1dc117b7.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-1dc117b7.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 1, "raw" => 1, "number_format" => 1);
        static $functions = array("attach_library" => 1, "getComponentFieldValue" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 'number_format'],
                ['attach_library', 'getComponentFieldValue']
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
