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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-1-column-layout.html.twig */
class __TwigTemplate_0fe753b0ae704606f8f389ac77c045ac extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.matchHeight"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.parallax_scrolling"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.cohMatchHeights"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/element_templates.row-for-columns"), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container ssa-component coh-component ssa-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_1_column_layout-5d838e07\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c469e24d-d155-46d5-a9ca-dc61028163c6") == "boxed")) {
            echo "coh-container-boxed";
        }
        echo "\" > <div class=\"coh-row coh-row-xl coh-row-visible-xl\" data-coh-row-match-heights=\"[]\"> <div class=\"coh-row-inner ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "74a865c3-d896-45d6-ba96-5ac344ad9942"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_1_column_layout-3878316d\"> <div class=\"coh-column ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_1_column_layout-979786f7 ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "09032d58-36ec-4b7d-93f0-ce4110e125c0") ==  -1)) {
            echo "coh-hidden-ps";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "09032d58-36ec-4b7d-93f0-ce4110e125c0") ==  -2)) {
            echo "coh-col-ps";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "09032d58-36ec-4b7d-93f0-ce4110e125c0") ==  -3)) {
            echo "coh-col-ps-auto";
        } else {
            echo "coh-visible-ps coh-col-ps-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "09032d58-36ec-4b7d-93f0-ce4110e125c0"), "."), "-"), "html", null, true);
        }
        echo " coh-col-ps-push-0 coh-col-ps-pull-0 ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5dcf43ba-fc68-44d2-a27c-03a042c3158e") ==  -1)) {
            echo "coh-hidden-sm";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5dcf43ba-fc68-44d2-a27c-03a042c3158e") ==  -2)) {
            echo "coh-col-sm";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5dcf43ba-fc68-44d2-a27c-03a042c3158e") ==  -3)) {
            echo "coh-col-sm-auto";
        } else {
            echo "coh-visible-sm coh-col-sm-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5dcf43ba-fc68-44d2-a27c-03a042c3158e"), "."), "-"), "html", null, true);
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6f05f900-24d3-4a0c-85ab-1e783ac9d8e7") !=  -1)) {
            echo "coh-col-sm-push-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6f05f900-24d3-4a0c-85ab-1e783ac9d8e7"), "."), "-"), "html", null, true);
        } else {
            echo "coh-col-sm-push-0";
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d7af9c66-4d99-4107-8709-fd9f399d14cb") !=  -1)) {
            echo "coh-col-sm-pull-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d7af9c66-4d99-4107-8709-fd9f399d14cb"), "."), "-"), "html", null, true);
        } else {
            echo "coh-col-sm-pull-0";
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6b754e7a-6c7c-4ed2-9399-b64496075e6b") ==  -1)) {
            echo "coh-hidden-xl";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6b754e7a-6c7c-4ed2-9399-b64496075e6b") ==  -2)) {
            echo "coh-col-xl";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6b754e7a-6c7c-4ed2-9399-b64496075e6b") ==  -3)) {
            echo "coh-col-xl-auto";
        } else {
            echo "coh-visible-xl coh-col-xl-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6b754e7a-6c7c-4ed2-9399-b64496075e6b"), "."), "-"), "html", null, true);
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4939e8b3-bae0-47ca-9527-5d7be5138e51") !=  -1)) {
            echo "coh-col-xl-push-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4939e8b3-bae0-47ca-9527-5d7be5138e51"), "."), "-"), "html", null, true);
        } else {
            echo "coh-col-xl-push-0";
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ad62c677-81e9-4361-b36d-905eceb8fce9") !=  -1)) {
            echo "coh-col-xl-pull-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ad62c677-81e9-4361-b36d-905eceb8fce9"), "."), "-"), "html", null, true);
        } else {
            echo "coh-col-xl-pull-0";
        }
        echo "\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c0116a84-e80c-428d-b6ff-ae43dda904f7"), "html", null, true);
        echo " </div> </div> </div> </div> </div> 
";
        // line 2
        ob_start(function () { return ''; });
        echo "<style>.";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 2, $this->source), "html", null, true);
        echo ".coh-ce-cpt_1_column_layout-5d838e07 {
";
        // line 3
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4b2bcc20-34e1-4840-9341-e93c696d4544"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4b2bcc20-34e1-4840-9341-e93c696d4544"))) {
                echo " background-color: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4b2bcc20-34e1-4840-9341-e93c696d4544"));
                echo ";";
            }
        }
        // line 4
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fb5f1ae2-6b83-4e8c-8a5f-5dc3befef3b8"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fb5f1ae2-6b83-4e8c-8a5f-5dc3befef3b8"))) {
                echo " background-image: url(\"";
                ob_start(function () { return ''; });
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fb5f1ae2-6b83-4e8c-8a5f-5dc3befef3b8"));
                $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                $context["imagestyle"] = ('' === $tmp = "coh_xx_large_landscape") ? '' : new Markup($tmp, $this->env->getCharset());
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle($this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 4, $this->source), $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 4, $this->source)), "html", null, true);
                echo "\");";
            }
        }
        // line 5
        echo "  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: scroll;
}
@media (max-width: 1023px) {
  .";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 11, $this->source), "html", null, true);
        echo ".coh-ce-cpt_1_column_layout-5d838e07 {
";
        // line 12
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fb5f1ae2-6b83-4e8c-8a5f-5dc3befef3b8"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fb5f1ae2-6b83-4e8c-8a5f-5dc3befef3b8"))) {
                echo " background-image: url(\"";
                ob_start(function () { return ''; });
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fb5f1ae2-6b83-4e8c-8a5f-5dc3befef3b8"));
                $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                $context["imagestyle"] = ('' === $tmp = "coh_medium") ? '' : new Markup($tmp, $this->env->getCharset());
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle($this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 12, $this->source), $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 12, $this->source)), "html", null, true);
                echo "\");";
            }
        }
        // line 13
        echo "    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: scroll;
  }
}
@media (max-width: 767px) {
  .";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 20, $this->source), "html", null, true);
        echo ".coh-ce-cpt_1_column_layout-5d838e07 {
";
        // line 21
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "aec3af07-ac91-43f0-9ea9-7f5a7e81a5db"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "aec3af07-ac91-43f0-9ea9-7f5a7e81a5db"))) {
                echo " background-image: url(\"";
                ob_start(function () { return ''; });
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "aec3af07-ac91-43f0-9ea9-7f5a7e81a5db"));
                $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                $context["imagestyle"] = ('' === $tmp = "coh_small") ? '' : new Markup($tmp, $this->env->getCharset());
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle($this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 21, $this->source), $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 21, $this->source)), "html", null, true);
                echo "\");";
            }
        }
        // line 22
        echo "    background-position: center top;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: scroll;
  }
}
";
        // line 28
        if ((((((( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0")) ||  !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"))) ||  !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"))) ||  !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"))) ||  !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2a2a10d2-02a6-4263-a8a7-6c84701354f9"))) ||  !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d5dbd40f-6af7-413c-a38e-323fc3154a58"))) ||  !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6e2005ad-103a-4e90-a28f-b12587182f5e")))) {
            echo ".";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 28, $this->source), "html", null, true);
            echo ".coh-ce-cpt_1_column_layout-3878316d {
";
            // line 29
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"))) {
                echo "   ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"))) {
                    echo " -webkit-box-pack: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"));
                    echo ";";
                }
            }
            // line 30
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"))) {
                echo "   ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"))) {
                    echo " -webkit-justify-content: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"));
                    echo ";";
                }
            }
            // line 31
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"))) {
                echo "       ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"))) {
                    echo " -ms-flex-pack: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"));
                    echo ";";
                }
            }
            // line 32
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"))) {
                echo "           ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"))) {
                    echo " justify-content: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2647a498-53ac-4cf2-84d7-9a621dd838a0"));
                    echo ";";
                }
            }
            // line 33
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2a2a10d2-02a6-4263-a8a7-6c84701354f9"))) {
                echo "   ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2a2a10d2-02a6-4263-a8a7-6c84701354f9"))) {
                    echo " min-height: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2a2a10d2-02a6-4263-a8a7-6c84701354f9"));
                    echo ";";
                }
            }
            // line 34
            echo "}
@media (max-width: 1023px) {
  .";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 36, $this->source), "html", null, true);
            echo ".coh-ce-cpt_1_column_layout-3878316d {
";
            // line 37
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d5dbd40f-6af7-413c-a38e-323fc3154a58"))) {
                echo "     ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d5dbd40f-6af7-413c-a38e-323fc3154a58"))) {
                    echo " min-height: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d5dbd40f-6af7-413c-a38e-323fc3154a58"));
                    echo ";";
                }
            }
            // line 38
            echo "  }
}
@media (max-width: 767px) {
  .";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 41, $this->source), "html", null, true);
            echo ".coh-ce-cpt_1_column_layout-3878316d {
";
            // line 42
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6e2005ad-103a-4e90-a28f-b12587182f5e"))) {
                echo "     ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6e2005ad-103a-4e90-a28f-b12587182f5e"))) {
                    echo " min-height: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6e2005ad-103a-4e90-a28f-b12587182f5e"));
                    echo ";";
                }
            }
            // line 43
            echo "  }
}";
        }
        // line 45
        echo ".";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 45, $this->source), "html", null, true);
        echo ".coh-ce-cpt_1_column_layout-979786f7 {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
";
        // line 51
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f8f8754f-4921-41ee-bb30-47fc98451736"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f8f8754f-4921-41ee-bb30-47fc98451736"))) {
                echo " -webkit-box-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f8f8754f-4921-41ee-bb30-47fc98451736"));
                echo ";";
            }
        }
        // line 52
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f8f8754f-4921-41ee-bb30-47fc98451736"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f8f8754f-4921-41ee-bb30-47fc98451736"))) {
                echo " -webkit-justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f8f8754f-4921-41ee-bb30-47fc98451736"));
                echo ";";
            }
        }
        // line 53
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f8f8754f-4921-41ee-bb30-47fc98451736"))) {
            echo "       ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f8f8754f-4921-41ee-bb30-47fc98451736"))) {
                echo " -ms-flex-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f8f8754f-4921-41ee-bb30-47fc98451736"));
                echo ";";
            }
        }
        // line 54
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f8f8754f-4921-41ee-bb30-47fc98451736"))) {
            echo "           ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f8f8754f-4921-41ee-bb30-47fc98451736"))) {
                echo " justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f8f8754f-4921-41ee-bb30-47fc98451736"));
                echo ";";
            }
        }
        // line 55
        echo "  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
@media (max-width: 1023px) {
  .";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 61, $this->source), "html", null, true);
        echo ".coh-ce-cpt_1_column_layout-979786f7 {
";
        // line 62
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0214b304-c34f-4155-8795-52cd1c5621cb"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0214b304-c34f-4155-8795-52cd1c5621cb"))) {
                echo " -webkit-box-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0214b304-c34f-4155-8795-52cd1c5621cb"));
                echo ";";
            }
        }
        // line 63
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0214b304-c34f-4155-8795-52cd1c5621cb"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0214b304-c34f-4155-8795-52cd1c5621cb"))) {
                echo " -webkit-justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0214b304-c34f-4155-8795-52cd1c5621cb"));
                echo ";";
            }
        }
        // line 64
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0214b304-c34f-4155-8795-52cd1c5621cb"))) {
            echo "         ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0214b304-c34f-4155-8795-52cd1c5621cb"))) {
                echo " -ms-flex-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0214b304-c34f-4155-8795-52cd1c5621cb"));
                echo ";";
            }
        }
        // line 65
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0214b304-c34f-4155-8795-52cd1c5621cb"))) {
            echo "             ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0214b304-c34f-4155-8795-52cd1c5621cb"))) {
                echo " justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0214b304-c34f-4155-8795-52cd1c5621cb"));
                echo ";";
            }
        }
        // line 66
        echo "  }
}
@media (max-width: 767px) {
  .";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 69, $this->source), "html", null, true);
        echo ".coh-ce-cpt_1_column_layout-979786f7 {
";
        // line 70
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "00ba9989-9e6f-40ba-b0a5-741c79bd5659"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "00ba9989-9e6f-40ba-b0a5-741c79bd5659"))) {
                echo " -webkit-box-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "00ba9989-9e6f-40ba-b0a5-741c79bd5659"));
                echo ";";
            }
        }
        // line 71
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "00ba9989-9e6f-40ba-b0a5-741c79bd5659"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "00ba9989-9e6f-40ba-b0a5-741c79bd5659"))) {
                echo " -webkit-justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "00ba9989-9e6f-40ba-b0a5-741c79bd5659"));
                echo ";";
            }
        }
        // line 72
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "00ba9989-9e6f-40ba-b0a5-741c79bd5659"))) {
            echo "         ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "00ba9989-9e6f-40ba-b0a5-741c79bd5659"))) {
                echo " -ms-flex-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "00ba9989-9e6f-40ba-b0a5-741c79bd5659"));
                echo ";";
            }
        }
        // line 73
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "00ba9989-9e6f-40ba-b0a5-741c79bd5659"))) {
            echo "             ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "00ba9989-9e6f-40ba-b0a5-741c79bd5659"))) {
                echo " justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "00ba9989-9e6f-40ba-b0a5-741c79bd5659"));
                echo ";";
            }
        }
        // line 74
        echo "  }
}
</style>";
        $context["compiledCSS"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderInlineStyle($this->sandbox->ensureToStringAllowed(($context["compiledCSS"] ?? null), 76, $this->source)));
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-1-column-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 76,  457 => 74,  448 => 73,  439 => 72,  430 => 71,  421 => 70,  417 => 69,  412 => 66,  403 => 65,  394 => 64,  385 => 63,  376 => 62,  372 => 61,  364 => 55,  355 => 54,  346 => 53,  337 => 52,  328 => 51,  318 => 45,  314 => 43,  305 => 42,  301 => 41,  296 => 38,  287 => 37,  283 => 36,  279 => 34,  270 => 33,  261 => 32,  252 => 31,  243 => 30,  234 => 29,  228 => 28,  220 => 22,  207 => 21,  203 => 20,  194 => 13,  181 => 12,  177 => 11,  169 => 5,  156 => 4,  147 => 3,  141 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-1-column-layout.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-1-column-layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 1);
        static $filters = array("escape" => 1, "raw" => 1, "join" => 1, "split" => 1);
        static $functions = array("coh_instanceid" => 1, "attach_library" => 1, "getComponentFieldValue" => 1, "cohesion_image_style" => 4, "renderInlineStyle" => 76);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw', 'join', 'split'],
                ['coh_instanceid', 'attach_library', 'getComponentFieldValue', 'cohesion_image_style', 'renderInlineStyle']
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
