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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-container.html.twig */
class __TwigTemplate_055d50a66782925939ae2b07591eebb7 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container ssa-component coh-component ssa-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-component-instance-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["componentUuid"] ?? null), 1, $this->source), "html", null, true);
        echo " match-height ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7b0a4770-7992-4a5c-a818-56c86fab9863"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "313c9a10-78bb-4aba-ae59-ed0c97cd9da3"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "a359153a-d2f3-4674-80b7-54157a8312e9"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_container-9a0b15e\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "607bea75-388b-4ee9-ad5d-dd5d23a695fd"), "html", null, true);
        echo " </div> 
";
        // line 2
        ob_start(function () { return ''; });
        echo "<style>.";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 2, $this->source), "html", null, true);
        echo ".coh-ce-cpt_container-9a0b15e {
";
        // line 3
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bdf6712-e6a6-4113-b2c7-121be7d69e81"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bdf6712-e6a6-4113-b2c7-121be7d69e81"))) {
                echo " background-color: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8bdf6712-e6a6-4113-b2c7-121be7d69e81"));
                echo ";";
            }
        }
        // line 4
        echo "  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
";
        // line 8
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bfe820d9-a376-4a55-9e90-b81109ec44df"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bfe820d9-a376-4a55-9e90-b81109ec44df"))) {
                echo " -webkit-box-flex: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bfe820d9-a376-4a55-9e90-b81109ec44df"));
                echo ";";
            }
        }
        // line 9
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bfe820d9-a376-4a55-9e90-b81109ec44df"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bfe820d9-a376-4a55-9e90-b81109ec44df"))) {
                echo " -webkit-flex-grow: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bfe820d9-a376-4a55-9e90-b81109ec44df"));
                echo ";";
            }
        }
        // line 10
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bfe820d9-a376-4a55-9e90-b81109ec44df"))) {
            echo "       ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bfe820d9-a376-4a55-9e90-b81109ec44df"))) {
                echo " -ms-flex-positive: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bfe820d9-a376-4a55-9e90-b81109ec44df"));
                echo ";";
            }
        }
        // line 11
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bfe820d9-a376-4a55-9e90-b81109ec44df"))) {
            echo "           ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bfe820d9-a376-4a55-9e90-b81109ec44df"))) {
                echo " flex-grow: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bfe820d9-a376-4a55-9e90-b81109ec44df"));
                echo ";";
            }
        }
        // line 12
        echo "  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
";
        // line 17
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dc80fcc4-aaa5-4726-b8fc-3c84d980b308"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dc80fcc4-aaa5-4726-b8fc-3c84d980b308"))) {
                echo " -webkit-box-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dc80fcc4-aaa5-4726-b8fc-3c84d980b308"));
                echo ";";
            }
        }
        // line 18
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dc80fcc4-aaa5-4726-b8fc-3c84d980b308"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dc80fcc4-aaa5-4726-b8fc-3c84d980b308"))) {
                echo " -webkit-justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dc80fcc4-aaa5-4726-b8fc-3c84d980b308"));
                echo ";";
            }
        }
        // line 19
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dc80fcc4-aaa5-4726-b8fc-3c84d980b308"))) {
            echo "       ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dc80fcc4-aaa5-4726-b8fc-3c84d980b308"))) {
                echo " -ms-flex-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dc80fcc4-aaa5-4726-b8fc-3c84d980b308"));
                echo ";";
            }
        }
        // line 20
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dc80fcc4-aaa5-4726-b8fc-3c84d980b308"))) {
            echo "           ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dc80fcc4-aaa5-4726-b8fc-3c84d980b308"))) {
                echo " justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "dc80fcc4-aaa5-4726-b8fc-3c84d980b308"));
                echo ";";
            }
        }
        // line 21
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "46884351-67e9-4fc0-a863-a403ab338cea"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "46884351-67e9-4fc0-a863-a403ab338cea"))) {
                echo " min-height: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "46884351-67e9-4fc0-a863-a403ab338cea"));
                echo ";";
            }
        }
        // line 22
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e33b8e6e-cd37-428c-b4a7-75666fea557c"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e33b8e6e-cd37-428c-b4a7-75666fea557c"))) {
                echo " padding-top: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e33b8e6e-cd37-428c-b4a7-75666fea557c"));
                echo ";";
            }
        }
        // line 23
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "531fe114-854c-49e3-8198-f38b64b8f899"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "531fe114-854c-49e3-8198-f38b64b8f899"))) {
                echo " padding-right: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "531fe114-854c-49e3-8198-f38b64b8f899"));
                echo ";";
            }
        }
        // line 24
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e33b8e6e-cd37-428c-b4a7-75666fea557c"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e33b8e6e-cd37-428c-b4a7-75666fea557c"))) {
                echo " padding-bottom: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e33b8e6e-cd37-428c-b4a7-75666fea557c"));
                echo ";";
            }
        }
        // line 25
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "531fe114-854c-49e3-8198-f38b64b8f899"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "531fe114-854c-49e3-8198-f38b64b8f899"))) {
                echo " padding-left: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "531fe114-854c-49e3-8198-f38b64b8f899"));
                echo ";";
            }
        }
        // line 26
        echo "}
@media (max-width: 1169px) {
  .";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 28, $this->source), "html", null, true);
        echo ".coh-ce-cpt_container-9a0b15e {
";
        // line 29
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "a9da6221-2b3b-4bcc-b338-ec47db3b2d8d"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "a9da6221-2b3b-4bcc-b338-ec47db3b2d8d"))) {
                echo " padding-top: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "a9da6221-2b3b-4bcc-b338-ec47db3b2d8d"));
                echo ";";
            }
        }
        // line 30
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "cd9c76ff-78d1-4e30-9d5f-6df9e9d24e3d"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "cd9c76ff-78d1-4e30-9d5f-6df9e9d24e3d"))) {
                echo " padding-right: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "cd9c76ff-78d1-4e30-9d5f-6df9e9d24e3d"));
                echo ";";
            }
        }
        // line 31
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "a9da6221-2b3b-4bcc-b338-ec47db3b2d8d"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "a9da6221-2b3b-4bcc-b338-ec47db3b2d8d"))) {
                echo " padding-bottom: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "a9da6221-2b3b-4bcc-b338-ec47db3b2d8d"));
                echo ";";
            }
        }
        // line 32
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "cd9c76ff-78d1-4e30-9d5f-6df9e9d24e3d"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "cd9c76ff-78d1-4e30-9d5f-6df9e9d24e3d"))) {
                echo " padding-left: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "cd9c76ff-78d1-4e30-9d5f-6df9e9d24e3d"));
                echo ";";
            }
        }
        // line 33
        echo "  }
}
@media (max-width: 1023px) {
  .";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 36, $this->source), "html", null, true);
        echo ".coh-ce-cpt_container-9a0b15e {
";
        // line 37
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f23c2b31-165d-4e73-a9d3-74f28dce2ac3"))) {
            echo " ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f23c2b31-165d-4e73-a9d3-74f28dce2ac3"))) {
                echo "     ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f23c2b31-165d-4e73-a9d3-74f28dce2ac3"))) {
                    echo " min-height: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f23c2b31-165d-4e73-a9d3-74f28dce2ac3"));
                    echo ";";
                }
            }
        }
        // line 38
        echo "  }
}
@media (max-width: 767px) {
  .";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 41, $this->source), "html", null, true);
        echo ".coh-ce-cpt_container-9a0b15e {
    ";
        // line 42
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f23c2b31-165d-4e73-a9d3-74f28dce2ac3"))) {
            echo " min-height: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f23c2b31-165d-4e73-a9d3-74f28dce2ac3"));
            echo ";";
        }
        // line 43
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8323b139-1c56-4c04-8624-4df7a2e1cc8a"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8323b139-1c56-4c04-8624-4df7a2e1cc8a"))) {
                echo " padding-top: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8323b139-1c56-4c04-8624-4df7a2e1cc8a"));
                echo ";";
            }
        }
        // line 44
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "45a1030e-a444-4b33-a7a2-8a26c9ce2706"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "45a1030e-a444-4b33-a7a2-8a26c9ce2706"))) {
                echo " padding-right: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "45a1030e-a444-4b33-a7a2-8a26c9ce2706"));
                echo ";";
            }
        }
        // line 45
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8323b139-1c56-4c04-8624-4df7a2e1cc8a"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8323b139-1c56-4c04-8624-4df7a2e1cc8a"))) {
                echo " padding-bottom: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8323b139-1c56-4c04-8624-4df7a2e1cc8a"));
                echo ";";
            }
        }
        // line 46
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "45a1030e-a444-4b33-a7a2-8a26c9ce2706"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "45a1030e-a444-4b33-a7a2-8a26c9ce2706"))) {
                echo " padding-left: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "45a1030e-a444-4b33-a7a2-8a26c9ce2706"));
                echo ";";
            }
        }
        // line 47
        echo "  }
}
.image-no-overlay.";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 49, $this->source), "html", null, true);
        echo ".coh-ce-cpt_container-9a0b15e {
";
        // line 50
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"))) {
                echo " background-image: url(\"";
                ob_start(function () { return ''; });
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"));
                $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                $context["imagestyle"] = ('' === $tmp = "coh_xx_large_landscape") ? '' : new Markup($tmp, $this->env->getCharset());
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle($this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 50, $this->source), $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 50, $this->source)), "html", null, true);
                echo "\");";
            }
        }
        // line 51
        echo "  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: scroll;
}
.image-dark-overlay.";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 56, $this->source), "html", null, true);
        echo ".coh-ce-cpt_container-9a0b15e {
  ";
        // line 57
        $context["items"] = [];
        $context["item"] = ('' === $tmp = "-webkit-gradient(linear, left top, right top, color-stop(1%, rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2)))") ? '' : new Markup($tmp, $this->env->getCharset());
        $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 57, $this->source), [0 => ($context["item"] ?? null)]);
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"))) {
            ob_start(function () { return ''; });
            echo "url(\"";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"));
            $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            $context["imagestyle"] = ('' === $tmp = "coh_xx_large_landscape") ? '' : new Markup($tmp, $this->env->getCharset());
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle($this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 57, $this->source), $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 57, $this->source)), "html", null, true);
            echo "\")";
            $context["item"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 57, $this->source), [0 => ($context["item"] ?? null)]);
        } else {
            $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 57, $this->source), [0 => "none"]);
        }
        echo "background-image: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 57, $this->source), ", "));
        echo ";
  ";
        // line 58
        $context["items"] = [];
        $context["item"] = ('' === $tmp = "-webkit-linear-gradient(left, rgba(0, 0, 0, 0.2) 1%, rgba(0, 0, 0, 0.2) 100%)") ? '' : new Markup($tmp, $this->env->getCharset());
        $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 58, $this->source), [0 => ($context["item"] ?? null)]);
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"))) {
            ob_start(function () { return ''; });
            echo "url(\"";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"));
            $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            $context["imagestyle"] = ('' === $tmp = "coh_xx_large_landscape") ? '' : new Markup($tmp, $this->env->getCharset());
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle($this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 58, $this->source), $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 58, $this->source)), "html", null, true);
            echo "\")";
            $context["item"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 58, $this->source), [0 => ($context["item"] ?? null)]);
        } else {
            $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 58, $this->source), [0 => "none"]);
        }
        echo "background-image: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 58, $this->source), ", "));
        echo ";
  ";
        // line 59
        $context["items"] = [];
        $context["item"] = ('' === $tmp = "linear-gradient(90deg, rgba(0, 0, 0, 0.2) 1%, rgba(0, 0, 0, 0.2) 100%)") ? '' : new Markup($tmp, $this->env->getCharset());
        $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 59, $this->source), [0 => ($context["item"] ?? null)]);
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"))) {
            ob_start(function () { return ''; });
            echo "url(\"";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"));
            $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            $context["imagestyle"] = ('' === $tmp = "coh_xx_large_landscape") ? '' : new Markup($tmp, $this->env->getCharset());
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle($this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 59, $this->source), $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 59, $this->source)), "html", null, true);
            echo "\")";
            $context["item"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 59, $this->source), [0 => ($context["item"] ?? null)]);
        } else {
            $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 59, $this->source), [0 => "none"]);
        }
        echo "background-image: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 59, $this->source), ", "));
        echo ";
  background-position: center, center;
  background-size: auto, cover;
  background-repeat: no-repeat, no-repeat;
  background-attachment: scroll, scroll;
}
.image-light-overlay.";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 65, $this->source), "html", null, true);
        echo ".coh-ce-cpt_container-9a0b15e {
  ";
        // line 66
        $context["items"] = [];
        $context["item"] = ('' === $tmp = "-webkit-gradient(linear, left top, right top, color-stop(1%, rgba(255, 255, 255, 0.294)), to(rgba(255, 255, 255, 0.3)))") ? '' : new Markup($tmp, $this->env->getCharset());
        $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 66, $this->source), [0 => ($context["item"] ?? null)]);
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"))) {
            ob_start(function () { return ''; });
            echo "url(\"";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"));
            $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            $context["imagestyle"] = ('' === $tmp = "coh_xx_large_landscape") ? '' : new Markup($tmp, $this->env->getCharset());
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle($this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 66, $this->source), $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 66, $this->source)), "html", null, true);
            echo "\")";
            $context["item"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 66, $this->source), [0 => ($context["item"] ?? null)]);
        } else {
            $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 66, $this->source), [0 => "none"]);
        }
        echo "background-image: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 66, $this->source), ", "));
        echo ";
  ";
        // line 67
        $context["items"] = [];
        $context["item"] = ('' === $tmp = "-webkit-linear-gradient(left, rgba(255, 255, 255, 0.294) 1%, rgba(255, 255, 255, 0.3) 100%)") ? '' : new Markup($tmp, $this->env->getCharset());
        $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 67, $this->source), [0 => ($context["item"] ?? null)]);
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"))) {
            ob_start(function () { return ''; });
            echo "url(\"";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"));
            $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            $context["imagestyle"] = ('' === $tmp = "coh_xx_large_landscape") ? '' : new Markup($tmp, $this->env->getCharset());
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle($this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 67, $this->source), $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 67, $this->source)), "html", null, true);
            echo "\")";
            $context["item"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 67, $this->source), [0 => ($context["item"] ?? null)]);
        } else {
            $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 67, $this->source), [0 => "none"]);
        }
        echo "background-image: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 67, $this->source), ", "));
        echo ";
  ";
        // line 68
        $context["items"] = [];
        $context["item"] = ('' === $tmp = "linear-gradient(90deg, rgba(255, 255, 255, 0.294) 1%, rgba(255, 255, 255, 0.3) 100%)") ? '' : new Markup($tmp, $this->env->getCharset());
        $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 68, $this->source), [0 => ($context["item"] ?? null)]);
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"))) {
            ob_start(function () { return ''; });
            echo "url(\"";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "edab4d63-4c6d-4a10-ba42-cb3a09934ae9"));
            $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            $context["imagestyle"] = ('' === $tmp = "coh_xx_large_landscape") ? '' : new Markup($tmp, $this->env->getCharset());
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->cohesionImageStyle($this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 68, $this->source), $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 68, $this->source)), "html", null, true);
            echo "\")";
            $context["item"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 68, $this->source), [0 => ($context["item"] ?? null)]);
        } else {
            $context["items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 68, $this->source), [0 => "none"]);
        }
        echo "background-image: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 68, $this->source), ", "));
        echo ";
  background-position: center, center;
  background-size: auto, cover;
  background-repeat: no-repeat, no-repeat;
  background-origin: border-box;
  background-clip: border-box;
  background-attachment: scroll, scroll;
}
.border.";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 76, $this->source), "html", null, true);
        echo ".coh-ce-cpt_container-9a0b15e {
  border-width: 0.0625rem;
  border-style: solid;
";
        // line 79
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "1eb62db4-c39c-402f-9b1f-32d522f10843"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "1eb62db4-c39c-402f-9b1f-32d522f10843"))) {
                echo " border-color: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "1eb62db4-c39c-402f-9b1f-32d522f10843"));
                echo ";";
            }
        }
        // line 80
        echo "}
</style>";
        $context["compiledCSS"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderInlineStyle($this->sandbox->ensureToStringAllowed(($context["compiledCSS"] ?? null), 81, $this->source)));
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 81,  528 => 80,  519 => 79,  513 => 76,  484 => 68,  462 => 67,  440 => 66,  436 => 65,  409 => 59,  387 => 58,  365 => 57,  361 => 56,  354 => 51,  341 => 50,  337 => 49,  333 => 47,  324 => 46,  315 => 45,  306 => 44,  297 => 43,  291 => 42,  287 => 41,  282 => 38,  270 => 37,  266 => 36,  261 => 33,  252 => 32,  243 => 31,  234 => 30,  225 => 29,  221 => 28,  217 => 26,  208 => 25,  199 => 24,  190 => 23,  181 => 22,  172 => 21,  163 => 20,  154 => 19,  145 => 18,  136 => 17,  129 => 12,  120 => 11,  111 => 10,  102 => 9,  93 => 8,  87 => 4,  78 => 3,  72 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-container.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-container.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3);
        static $filters = array("escape" => 1, "raw" => 1, "merge" => 57, "join" => 57);
        static $functions = array("coh_instanceid" => 1, "attach_library" => 1, "getComponentFieldValue" => 1, "cohesion_image_style" => 50, "renderInlineStyle" => 81);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw', 'merge', 'join'],
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
