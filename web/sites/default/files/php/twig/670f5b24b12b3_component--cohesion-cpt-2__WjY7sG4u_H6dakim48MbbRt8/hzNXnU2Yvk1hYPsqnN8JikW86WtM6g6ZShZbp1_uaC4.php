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

/* sites/default/files/cohesion/templates/component--cohesion-cpt-2-column-layout.html.twig */
class __TwigTemplate_89f09cbc8bb23a4dfd209d2c7c1476ff extends Template
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
        echo " coh-ce-cpt_2_column_layout-228dfee8\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
        echo " <div class=\"coh-container ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "57838df3-8666-4152-ad7a-414846c7e158") == "boxed")) {
            echo "coh-container-boxed";
        }
        echo "\" > <div class=\"coh-row ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "e9963ab0-7260-41bd-bbd7-a5c767ea2253") == "retain")) {
            echo "coh-row-xl";
        } else {
            echo "coh-row-bleed-xl";
        }
        echo " coh-row-visible-xl\" data-coh-row-match-heights=\"[]\"> <div class=\"coh-row-inner ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "db26906a-fcc1-4ce5-90ff-9058fe73e4ef"));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_2_column_layout-4c82cdfe\"> <div class=\"coh-column ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_2_column_layout-ce285786 ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5b90dd88-c860-45dd-80a4-371190d8ef76") ==  -1)) {
            echo "coh-hidden-ps";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5b90dd88-c860-45dd-80a4-371190d8ef76") ==  -2)) {
            echo "coh-col-ps";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5b90dd88-c860-45dd-80a4-371190d8ef76") ==  -3)) {
            echo "coh-col-ps-auto";
        } else {
            echo "coh-visible-ps coh-col-ps-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5b90dd88-c860-45dd-80a4-371190d8ef76"), "."), "-"), "html", null, true);
        }
        echo " coh-col-ps-push-0 coh-col-ps-pull-0 ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47f3455a-f1ba-430a-8b0c-38c56d452858") ==  -1)) {
            echo "coh-hidden-sm";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47f3455a-f1ba-430a-8b0c-38c56d452858") ==  -2)) {
            echo "coh-col-sm";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47f3455a-f1ba-430a-8b0c-38c56d452858") ==  -3)) {
            echo "coh-col-sm-auto";
        } else {
            echo "coh-visible-sm coh-col-sm-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47f3455a-f1ba-430a-8b0c-38c56d452858"), "."), "-"), "html", null, true);
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ea7aedbf-c4b3-4061-80a4-77818a0c98d1") !=  -1)) {
            echo "coh-col-sm-push-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ea7aedbf-c4b3-4061-80a4-77818a0c98d1"), "."), "-"), "html", null, true);
        } else {
            echo "coh-col-sm-push-0";
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d2f02c0d-a0cf-4ffb-8610-1f56285aad3e") !=  -1)) {
            echo "coh-col-sm-pull-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d2f02c0d-a0cf-4ffb-8610-1f56285aad3e"), "."), "-"), "html", null, true);
        } else {
            echo "coh-col-sm-pull-0";
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4fdc3cf3-fcab-4640-86e9-4666bef482f6") ==  -1)) {
            echo "coh-hidden-xl";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4fdc3cf3-fcab-4640-86e9-4666bef482f6") ==  -2)) {
            echo "coh-col-xl";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4fdc3cf3-fcab-4640-86e9-4666bef482f6") ==  -3)) {
            echo "coh-col-xl-auto";
        } else {
            echo "coh-visible-xl coh-col-xl-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4fdc3cf3-fcab-4640-86e9-4666bef482f6"), "."), "-"), "html", null, true);
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "1a5d5c06-ea8a-426c-ae3d-54bb4832d2ba") !=  -1)) {
            echo "coh-col-xl-push-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "1a5d5c06-ea8a-426c-ae3d-54bb4832d2ba"), "."), "-"), "html", null, true);
        } else {
            echo "coh-col-xl-push-0";
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b279f292-a548-4e89-b38c-8b7f186d0912") !=  -1)) {
            echo "coh-col-xl-pull-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b279f292-a548-4e89-b38c-8b7f186d0912"), "."), "-"), "html", null, true);
        } else {
            echo "coh-col-xl-pull-0";
        }
        echo "\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "09e94e16-165c-4854-b690-c747dc66d40b"), "html", null, true);
        echo " </div> <div class=\"coh-column ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 1, $this->source), "html", null, true);
        echo " coh-ce-cpt_2_column_layout-3071abbc ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "40857baa-56bb-4728-b08d-8c88e3d1dee7") ==  -1)) {
            echo "coh-hidden-ps";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "40857baa-56bb-4728-b08d-8c88e3d1dee7") ==  -2)) {
            echo "coh-col-ps";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "40857baa-56bb-4728-b08d-8c88e3d1dee7") ==  -3)) {
            echo "coh-col-ps-auto";
        } else {
            echo "coh-visible-ps coh-col-ps-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "40857baa-56bb-4728-b08d-8c88e3d1dee7"), "."), "-"), "html", null, true);
        }
        echo " coh-col-ps-push-0 coh-col-ps-pull-0 ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "49a843a4-9375-4791-8a25-e712623bb4e7") ==  -1)) {
            echo "coh-hidden-sm";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "49a843a4-9375-4791-8a25-e712623bb4e7") ==  -2)) {
            echo "coh-col-sm";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "49a843a4-9375-4791-8a25-e712623bb4e7") ==  -3)) {
            echo "coh-col-sm-auto";
        } else {
            echo "coh-visible-sm coh-col-sm-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "49a843a4-9375-4791-8a25-e712623bb4e7"), "."), "-"), "html", null, true);
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2f189911-ef26-4486-9727-44bcc606c329") !=  -1)) {
            echo "coh-col-sm-push-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "2f189911-ef26-4486-9727-44bcc606c329"), "."), "-"), "html", null, true);
        } else {
            echo "coh-col-sm-push-0";
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c8c0aefd-0df3-4aa6-8da1-14b15b60de63") !=  -1)) {
            echo "coh-col-sm-pull-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "c8c0aefd-0df3-4aa6-8da1-14b15b60de63"), "."), "-"), "html", null, true);
        } else {
            echo "coh-col-sm-pull-0";
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "a902bd3d-a6a0-4967-89f5-dece3ebd0d4f") ==  -1)) {
            echo "coh-hidden-xl";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "a902bd3d-a6a0-4967-89f5-dece3ebd0d4f") ==  -2)) {
            echo "coh-col-xl";
        } elseif (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "a902bd3d-a6a0-4967-89f5-dece3ebd0d4f") ==  -3)) {
            echo "coh-col-xl-auto";
        } else {
            echo "coh-visible-xl coh-col-xl-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "a902bd3d-a6a0-4967-89f5-dece3ebd0d4f"), "."), "-"), "html", null, true);
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "34c5b86c-68e5-4ca1-98f5-ebc13a61a249") !=  -1)) {
            echo "coh-col-xl-push-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "34c5b86c-68e5-4ca1-98f5-ebc13a61a249"), "."), "-"), "html", null, true);
        } else {
            echo "coh-col-xl-push-0";
        }
        echo " ";
        if (($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5399da9b-e2a8-4f63-822c-8ab4e76c9dee") !=  -1)) {
            echo "coh-col-xl-pull-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_split_filter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "5399da9b-e2a8-4f63-822c-8ab4e76c9dee"), "."), "-"), "html", null, true);
        } else {
            echo "coh-col-xl-pull-0";
        }
        echo "\" > ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ecc6e692-b486-4e74-ad24-a1ffeb01fc91"), "html", null, true);
        echo " </div> </div> </div> </div> </div> 
";
        // line 2
        ob_start(function () { return ''; });
        echo "<style>.";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 2, $this->source), "html", null, true);
        echo ".coh-ce-cpt_2_column_layout-228dfee8 {
";
        // line 3
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ac2d76ad-5287-4c20-9c91-fe202a4468e7"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ac2d76ad-5287-4c20-9c91-fe202a4468e7"))) {
                echo " background-color: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ac2d76ad-5287-4c20-9c91-fe202a4468e7"));
                echo ";";
            }
        }
        // line 4
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "85f236a0-9ee9-41c1-9280-6be5a2a83866"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "85f236a0-9ee9-41c1-9280-6be5a2a83866"))) {
                echo " background-image: url(\"";
                ob_start(function () { return ''; });
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "85f236a0-9ee9-41c1-9280-6be5a2a83866"));
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
        echo ".coh-ce-cpt_2_column_layout-228dfee8 {
";
        // line 12
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "85f236a0-9ee9-41c1-9280-6be5a2a83866"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "85f236a0-9ee9-41c1-9280-6be5a2a83866"))) {
                echo " background-image: url(\"";
                ob_start(function () { return ''; });
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "85f236a0-9ee9-41c1-9280-6be5a2a83866"));
                $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                $context["imagestyle"] = ('' === $tmp = "coh_medium_landscape") ? '' : new Markup($tmp, $this->env->getCharset());
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
        echo ".coh-ce-cpt_2_column_layout-228dfee8 {
";
        // line 21
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "96381c9f-6661-471d-acf4-c0f02d4b25ab"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "96381c9f-6661-471d-acf4-c0f02d4b25ab"))) {
                echo " background-image: url(\"";
                ob_start(function () { return ''; });
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "96381c9f-6661-471d-acf4-c0f02d4b25ab"));
                $context["src"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                $context["imagestyle"] = ('' === $tmp = "coh_small_landscape") ? '' : new Markup($tmp, $this->env->getCharset());
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
        if ((((((( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848")) ||  !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"))) ||  !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"))) ||  !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"))) ||  !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bbcd069d-c547-4412-b4f4-0fef1c93cb49"))) ||  !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d830e2c5-daba-4c00-9aef-3c32d9debf3d"))) ||  !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f289a117-8a1d-458e-84ae-2eff3ec44eb6")))) {
            echo ".";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 28, $this->source), "html", null, true);
            echo ".coh-ce-cpt_2_column_layout-4c82cdfe {
";
            // line 29
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"))) {
                echo "   ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"))) {
                    echo " -webkit-box-pack: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"));
                    echo ";";
                }
            }
            // line 30
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"))) {
                echo "   ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"))) {
                    echo " -webkit-justify-content: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"));
                    echo ";";
                }
            }
            // line 31
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"))) {
                echo "       ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"))) {
                    echo " -ms-flex-pack: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"));
                    echo ";";
                }
            }
            // line 32
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"))) {
                echo "           ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"))) {
                    echo " justify-content: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "b4f8d2f4-1f92-4ac0-b110-33fda0639848"));
                    echo ";";
                }
            }
            // line 33
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bbcd069d-c547-4412-b4f4-0fef1c93cb49"))) {
                echo "   ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bbcd069d-c547-4412-b4f4-0fef1c93cb49"))) {
                    echo " min-height: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "bbcd069d-c547-4412-b4f4-0fef1c93cb49"));
                    echo ";";
                }
            }
            // line 34
            echo "}
@media (max-width: 1023px) {
  .";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 36, $this->source), "html", null, true);
            echo ".coh-ce-cpt_2_column_layout-4c82cdfe {
";
            // line 37
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d830e2c5-daba-4c00-9aef-3c32d9debf3d"))) {
                echo "     ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d830e2c5-daba-4c00-9aef-3c32d9debf3d"))) {
                    echo " min-height: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "d830e2c5-daba-4c00-9aef-3c32d9debf3d"));
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
            echo ".coh-ce-cpt_2_column_layout-4c82cdfe {
";
            // line 42
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f289a117-8a1d-458e-84ae-2eff3ec44eb6"))) {
                echo "     ";
                if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f289a117-8a1d-458e-84ae-2eff3ec44eb6"))) {
                    echo " min-height: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "f289a117-8a1d-458e-84ae-2eff3ec44eb6"));
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
        echo ".coh-ce-cpt_2_column_layout-ce285786 {
  -webkit-box-ordinal-group: NaN;
";
        // line 47
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8125dec1-a483-460a-91a4-1cf0dfa61df6"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8125dec1-a483-460a-91a4-1cf0dfa61df6"))) {
                echo " -webkit-order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8125dec1-a483-460a-91a4-1cf0dfa61df6"));
                echo ";";
            }
        }
        // line 48
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8125dec1-a483-460a-91a4-1cf0dfa61df6"))) {
            echo "       ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8125dec1-a483-460a-91a4-1cf0dfa61df6"))) {
                echo " -ms-flex-order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8125dec1-a483-460a-91a4-1cf0dfa61df6"));
                echo ";";
            }
        }
        // line 49
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8125dec1-a483-460a-91a4-1cf0dfa61df6"))) {
            echo "           ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8125dec1-a483-460a-91a4-1cf0dfa61df6"))) {
                echo " order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "8125dec1-a483-460a-91a4-1cf0dfa61df6"));
                echo ";";
            }
        }
        // line 50
        echo "  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
";
        // line 55
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3b36842f-5f40-4f03-8ad9-27435adbf045"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3b36842f-5f40-4f03-8ad9-27435adbf045"))) {
                echo " -webkit-box-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3b36842f-5f40-4f03-8ad9-27435adbf045"));
                echo ";";
            }
        }
        // line 56
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3b36842f-5f40-4f03-8ad9-27435adbf045"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3b36842f-5f40-4f03-8ad9-27435adbf045"))) {
                echo " -webkit-justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3b36842f-5f40-4f03-8ad9-27435adbf045"));
                echo ";";
            }
        }
        // line 57
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3b36842f-5f40-4f03-8ad9-27435adbf045"))) {
            echo "       ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3b36842f-5f40-4f03-8ad9-27435adbf045"))) {
                echo " -ms-flex-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3b36842f-5f40-4f03-8ad9-27435adbf045"));
                echo ";";
            }
        }
        // line 58
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3b36842f-5f40-4f03-8ad9-27435adbf045"))) {
            echo "           ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3b36842f-5f40-4f03-8ad9-27435adbf045"))) {
                echo " justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "3b36842f-5f40-4f03-8ad9-27435adbf045"));
                echo ";";
            }
        }
        // line 59
        echo "  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
@media (max-width: 1023px) {
  .";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 65, $this->source), "html", null, true);
        echo ".coh-ce-cpt_2_column_layout-ce285786 {
    -webkit-box-ordinal-group: NaN;
";
        // line 67
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "310159f8-767f-4242-9bd2-0bf9a8d368ea"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "310159f8-767f-4242-9bd2-0bf9a8d368ea"))) {
                echo " -webkit-order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "310159f8-767f-4242-9bd2-0bf9a8d368ea"));
                echo ";";
            }
        }
        // line 68
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "310159f8-767f-4242-9bd2-0bf9a8d368ea"))) {
            echo "         ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "310159f8-767f-4242-9bd2-0bf9a8d368ea"))) {
                echo " -ms-flex-order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "310159f8-767f-4242-9bd2-0bf9a8d368ea"));
                echo ";";
            }
        }
        // line 69
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "310159f8-767f-4242-9bd2-0bf9a8d368ea"))) {
            echo "             ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "310159f8-767f-4242-9bd2-0bf9a8d368ea"))) {
                echo " order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "310159f8-767f-4242-9bd2-0bf9a8d368ea"));
                echo ";";
            }
        }
        // line 70
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "16a69134-d141-4f7f-9575-eb95d3d914c8"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "16a69134-d141-4f7f-9575-eb95d3d914c8"))) {
                echo " -webkit-box-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "16a69134-d141-4f7f-9575-eb95d3d914c8"));
                echo ";";
            }
        }
        // line 71
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "16a69134-d141-4f7f-9575-eb95d3d914c8"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "16a69134-d141-4f7f-9575-eb95d3d914c8"))) {
                echo " -webkit-justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "16a69134-d141-4f7f-9575-eb95d3d914c8"));
                echo ";";
            }
        }
        // line 72
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "16a69134-d141-4f7f-9575-eb95d3d914c8"))) {
            echo "         ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "16a69134-d141-4f7f-9575-eb95d3d914c8"))) {
                echo " -ms-flex-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "16a69134-d141-4f7f-9575-eb95d3d914c8"));
                echo ";";
            }
        }
        // line 73
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "16a69134-d141-4f7f-9575-eb95d3d914c8"))) {
            echo "             ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "16a69134-d141-4f7f-9575-eb95d3d914c8"))) {
                echo " justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "16a69134-d141-4f7f-9575-eb95d3d914c8"));
                echo ";";
            }
        }
        // line 74
        echo "  }
}
@media (max-width: 767px) {
  .";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 77, $this->source), "html", null, true);
        echo ".coh-ce-cpt_2_column_layout-ce285786 {
    -webkit-box-ordinal-group: NaN;
";
        // line 79
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6590fce1-9fc8-44d0-bf3c-56fec86619b2"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6590fce1-9fc8-44d0-bf3c-56fec86619b2"))) {
                echo " -webkit-order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6590fce1-9fc8-44d0-bf3c-56fec86619b2"));
                echo ";";
            }
        }
        // line 80
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6590fce1-9fc8-44d0-bf3c-56fec86619b2"))) {
            echo "         ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6590fce1-9fc8-44d0-bf3c-56fec86619b2"))) {
                echo " -ms-flex-order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6590fce1-9fc8-44d0-bf3c-56fec86619b2"));
                echo ";";
            }
        }
        // line 81
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6590fce1-9fc8-44d0-bf3c-56fec86619b2"))) {
            echo "             ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6590fce1-9fc8-44d0-bf3c-56fec86619b2"))) {
                echo " order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "6590fce1-9fc8-44d0-bf3c-56fec86619b2"));
                echo ";";
            }
        }
        // line 82
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ba93aa7e-3abe-4113-90c6-bc7e3ed76825"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ba93aa7e-3abe-4113-90c6-bc7e3ed76825"))) {
                echo " -webkit-box-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ba93aa7e-3abe-4113-90c6-bc7e3ed76825"));
                echo ";";
            }
        }
        // line 83
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ba93aa7e-3abe-4113-90c6-bc7e3ed76825"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ba93aa7e-3abe-4113-90c6-bc7e3ed76825"))) {
                echo " -webkit-justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ba93aa7e-3abe-4113-90c6-bc7e3ed76825"));
                echo ";";
            }
        }
        // line 84
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ba93aa7e-3abe-4113-90c6-bc7e3ed76825"))) {
            echo "         ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ba93aa7e-3abe-4113-90c6-bc7e3ed76825"))) {
                echo " -ms-flex-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ba93aa7e-3abe-4113-90c6-bc7e3ed76825"));
                echo ";";
            }
        }
        // line 85
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ba93aa7e-3abe-4113-90c6-bc7e3ed76825"))) {
            echo "             ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ba93aa7e-3abe-4113-90c6-bc7e3ed76825"))) {
                echo " justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "ba93aa7e-3abe-4113-90c6-bc7e3ed76825"));
                echo ";";
            }
        }
        // line 86
        echo "  }
}
.";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 88, $this->source), "html", null, true);
        echo ".coh-ce-cpt_2_column_layout-3071abbc {
  -webkit-box-ordinal-group: NaN;
";
        // line 90
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7208592b-bc03-476a-9eb2-13133fc84024"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7208592b-bc03-476a-9eb2-13133fc84024"))) {
                echo " -webkit-order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7208592b-bc03-476a-9eb2-13133fc84024"));
                echo ";";
            }
        }
        // line 91
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7208592b-bc03-476a-9eb2-13133fc84024"))) {
            echo "       ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7208592b-bc03-476a-9eb2-13133fc84024"))) {
                echo " -ms-flex-order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7208592b-bc03-476a-9eb2-13133fc84024"));
                echo ";";
            }
        }
        // line 92
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7208592b-bc03-476a-9eb2-13133fc84024"))) {
            echo "           ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7208592b-bc03-476a-9eb2-13133fc84024"))) {
                echo " order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "7208592b-bc03-476a-9eb2-13133fc84024"));
                echo ";";
            }
        }
        // line 93
        echo "  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
";
        // line 98
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "10c02b13-6e7f-4839-960a-f71e78d4bb0b"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "10c02b13-6e7f-4839-960a-f71e78d4bb0b"))) {
                echo " -webkit-box-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "10c02b13-6e7f-4839-960a-f71e78d4bb0b"));
                echo ";";
            }
        }
        // line 99
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "10c02b13-6e7f-4839-960a-f71e78d4bb0b"))) {
            echo "   ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "10c02b13-6e7f-4839-960a-f71e78d4bb0b"))) {
                echo " -webkit-justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "10c02b13-6e7f-4839-960a-f71e78d4bb0b"));
                echo ";";
            }
        }
        // line 100
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "10c02b13-6e7f-4839-960a-f71e78d4bb0b"))) {
            echo "       ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "10c02b13-6e7f-4839-960a-f71e78d4bb0b"))) {
                echo " -ms-flex-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "10c02b13-6e7f-4839-960a-f71e78d4bb0b"));
                echo ";";
            }
        }
        // line 101
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "10c02b13-6e7f-4839-960a-f71e78d4bb0b"))) {
            echo "           ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "10c02b13-6e7f-4839-960a-f71e78d4bb0b"))) {
                echo " justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "10c02b13-6e7f-4839-960a-f71e78d4bb0b"));
                echo ";";
            }
        }
        // line 102
        echo "  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
@media (max-width: 1023px) {
  .";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 108, $this->source), "html", null, true);
        echo ".coh-ce-cpt_2_column_layout-3071abbc {
    -webkit-box-ordinal-group: NaN;
";
        // line 110
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fbbaafea-23b7-4ee6-b344-5ece9a2bc504"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fbbaafea-23b7-4ee6-b344-5ece9a2bc504"))) {
                echo " -webkit-order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fbbaafea-23b7-4ee6-b344-5ece9a2bc504"));
                echo ";";
            }
        }
        // line 111
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fbbaafea-23b7-4ee6-b344-5ece9a2bc504"))) {
            echo "         ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fbbaafea-23b7-4ee6-b344-5ece9a2bc504"))) {
                echo " -ms-flex-order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fbbaafea-23b7-4ee6-b344-5ece9a2bc504"));
                echo ";";
            }
        }
        // line 112
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fbbaafea-23b7-4ee6-b344-5ece9a2bc504"))) {
            echo "             ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fbbaafea-23b7-4ee6-b344-5ece9a2bc504"))) {
                echo " order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "fbbaafea-23b7-4ee6-b344-5ece9a2bc504"));
                echo ";";
            }
        }
        // line 113
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4af6d020-88c1-4345-9342-f80ac30d7e7b"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4af6d020-88c1-4345-9342-f80ac30d7e7b"))) {
                echo " -webkit-box-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4af6d020-88c1-4345-9342-f80ac30d7e7b"));
                echo ";";
            }
        }
        // line 114
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4af6d020-88c1-4345-9342-f80ac30d7e7b"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4af6d020-88c1-4345-9342-f80ac30d7e7b"))) {
                echo " -webkit-justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4af6d020-88c1-4345-9342-f80ac30d7e7b"));
                echo ";";
            }
        }
        // line 115
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4af6d020-88c1-4345-9342-f80ac30d7e7b"))) {
            echo "         ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4af6d020-88c1-4345-9342-f80ac30d7e7b"))) {
                echo " -ms-flex-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4af6d020-88c1-4345-9342-f80ac30d7e7b"));
                echo ";";
            }
        }
        // line 116
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4af6d020-88c1-4345-9342-f80ac30d7e7b"))) {
            echo "             ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4af6d020-88c1-4345-9342-f80ac30d7e7b"))) {
                echo " justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "4af6d020-88c1-4345-9342-f80ac30d7e7b"));
                echo ";";
            }
        }
        // line 117
        echo "  }
}
@media (max-width: 767px) {
  .";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["coh_instance_class"] ?? null), 120, $this->source), "html", null, true);
        echo ".coh-ce-cpt_2_column_layout-3071abbc {
    -webkit-box-ordinal-group: NaN;
";
        // line 122
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0e4279a2-04f3-41ac-9f91-c696a7df6ee7"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0e4279a2-04f3-41ac-9f91-c696a7df6ee7"))) {
                echo " -webkit-order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0e4279a2-04f3-41ac-9f91-c696a7df6ee7"));
                echo ";";
            }
        }
        // line 123
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0e4279a2-04f3-41ac-9f91-c696a7df6ee7"))) {
            echo "         ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0e4279a2-04f3-41ac-9f91-c696a7df6ee7"))) {
                echo " -ms-flex-order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0e4279a2-04f3-41ac-9f91-c696a7df6ee7"));
                echo ";";
            }
        }
        // line 124
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0e4279a2-04f3-41ac-9f91-c696a7df6ee7"))) {
            echo "             ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0e4279a2-04f3-41ac-9f91-c696a7df6ee7"))) {
                echo " order: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "0e4279a2-04f3-41ac-9f91-c696a7df6ee7"));
                echo ";";
            }
        }
        // line 125
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47420006-7cf8-4301-b430-46be60130a6f"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47420006-7cf8-4301-b430-46be60130a6f"))) {
                echo " -webkit-box-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47420006-7cf8-4301-b430-46be60130a6f"));
                echo ";";
            }
        }
        // line 126
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47420006-7cf8-4301-b430-46be60130a6f"))) {
            echo "     ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47420006-7cf8-4301-b430-46be60130a6f"))) {
                echo " -webkit-justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47420006-7cf8-4301-b430-46be60130a6f"));
                echo ";";
            }
        }
        // line 127
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47420006-7cf8-4301-b430-46be60130a6f"))) {
            echo "         ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47420006-7cf8-4301-b430-46be60130a6f"))) {
                echo " -ms-flex-pack: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47420006-7cf8-4301-b430-46be60130a6f"));
                echo ";";
            }
        }
        // line 128
        if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47420006-7cf8-4301-b430-46be60130a6f"))) {
            echo "             ";
            if ( !twig_test_empty($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47420006-7cf8-4301-b430-46be60130a6f"))) {
                echo " justify-content: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getComponentFieldValue($context, "47420006-7cf8-4301-b430-46be60130a6f"));
                echo ";";
            }
        }
        // line 129
        echo "  }
}
</style>";
        $context["compiledCSS"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderInlineStyle($this->sandbox->ensureToStringAllowed(($context["compiledCSS"] ?? null), 131, $this->source)));
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/component--cohesion-cpt-2-column-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  847 => 131,  842 => 129,  833 => 128,  824 => 127,  815 => 126,  806 => 125,  797 => 124,  788 => 123,  779 => 122,  774 => 120,  769 => 117,  760 => 116,  751 => 115,  742 => 114,  733 => 113,  724 => 112,  715 => 111,  706 => 110,  701 => 108,  693 => 102,  684 => 101,  675 => 100,  666 => 99,  657 => 98,  650 => 93,  641 => 92,  632 => 91,  623 => 90,  618 => 88,  614 => 86,  605 => 85,  596 => 84,  587 => 83,  578 => 82,  569 => 81,  560 => 80,  551 => 79,  546 => 77,  541 => 74,  532 => 73,  523 => 72,  514 => 71,  505 => 70,  496 => 69,  487 => 68,  478 => 67,  473 => 65,  465 => 59,  456 => 58,  447 => 57,  438 => 56,  429 => 55,  422 => 50,  413 => 49,  404 => 48,  395 => 47,  389 => 45,  385 => 43,  376 => 42,  372 => 41,  367 => 38,  358 => 37,  354 => 36,  350 => 34,  341 => 33,  332 => 32,  323 => 31,  314 => 30,  305 => 29,  299 => 28,  291 => 22,  278 => 21,  274 => 20,  265 => 13,  252 => 12,  248 => 11,  240 => 5,  227 => 4,  218 => 3,  212 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/component--cohesion-cpt-2-column-layout.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/component--cohesion-cpt-2-column-layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 1);
        static $filters = array("escape" => 1, "raw" => 1, "join" => 1, "split" => 1);
        static $functions = array("coh_instanceid" => 1, "attach_library" => 1, "getComponentFieldValue" => 1, "cohesion_image_style" => 4, "renderInlineStyle" => 131);

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
