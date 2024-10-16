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

/* sites/default/files/cohesion/templates/menu--cohesion-menu-tpl-main-navigation.html.twig */
class __TwigTemplate_3a6077f86bd6ca4474d82309b7547f96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block2461480816' => [$this, 'block_block2461480816'],
            'block202814098' => [$this, 'block_block202814098'],
            'block3951804192' => [$this, 'block_block3951804192'],
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
        $this->displayBlock('block2461480816', $context, $blocks);
        echo " 
";
    }

    public function block_block2461480816($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0)))) {
            echo " <ul class=\"coh-menu-list-container coh-unordered-list menu-level-1 coh-ce-458aeaf\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, ($context["items"] ?? null))));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                $context["inRange"] = true;
                if ((($context["i"] <= twig_length_filter($this->env, ($context["items"] ?? null))) && ($context["inRange"] ?? null))) {
                    $context["item"] = (($__internal_compile_0 = ($context["items"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[(($__internal_compile_1 = twig_get_array_keys_filter($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 1, $this->source))) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["i"] - 1)] ?? null) : null)] ?? null) : null);
                    $context["menuItemAttributes"] = $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getMenuItemAttributes($this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["item"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["original_link"] ?? null) : null), 1, $this->source));
                    echo "<li class=\"coh-menu-list-item coh-ce-cfeba3d3 js-coh-menu-item";
                    if ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", true, true, true, 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1) == true)) && ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>") == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeParameters", [], "any", false, false, true, 1), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "options", [], "any", false, false, true, 1))))) {
                        echo " is-active";
                    }
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0))) {
                        echo " has-children";
                    }
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", true, true, true, 1) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 1))) {
                        echo " in-active-trail";
                    }
                    echo "\" data-coh-settings='{\"xl\":\"hidden\"}' ";
                    if ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", true, true, true, 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1) == "<front>"))) {
                        echo "data-drupal-link-system-path=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1)) {
                        $__internal_compile_3 = $context;
                        $__internal_compile_4 = ["items" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)];
                        if (!twig_test_iterable($__internal_compile_4)) {
                            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 1, $this->getSourceContext());
                        }
                        $__internal_compile_4 = twig_to_array($__internal_compile_4);
                        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_4));
                        $context["menuItemElement"] = "a";
                        echo " ";
                        if ((((((($context["menuItemElement"] ?? null) == "a") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1) == true)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1) == "<nolink>")) && true)) {
                            echo " ";
                            $context["menuItemElement"] = "span";
                            echo " ";
                        }
                        echo " ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.jquery_ui_effect_fade"), "html", null, true);
                        echo " ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.jquery_ui_effect_blind"), "html", null, true);
                        echo " <";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menuItemElement"] ?? null), 1, $this->source), "html", null, true);
                        echo " ";
                        if ((($context["menuItemElement"] ?? null) == "a")) {
                            echo "href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
                            echo "\"";
                        }
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, true, true, 1), "target", [], "any", true, true, true, 1)) {
                            echo " target=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, false, true, 1), "target", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
                            echo "\"";
                        }
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "custom", [], "any", true, true, true, 1)) {
                            echo " ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "custom", [], "any", false, false, true, 1));
                            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                                echo " ";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 1, $this->source), "html", null, true);
                                echo "=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["attribute"], 1, $this->source), "html", null, true);
                                echo "\" ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            echo " ";
                        }
                        echo " data-coh-settings='{ \"xl\":{\"link_interaction\":\"toggle-on-hover\",\"animationType\":\"fade\",\"animationEasing\":\"easeInOutCubic\",\"animationTarget\":\".menu-level-2-wrapper\",\"animationDuration\":300},\"sm\":{\"link_interaction\":\"toggle-on-click\",\"animationType\":\"blind\",\"animationDirection\":\"up\",\"animationEasing\":\"easeInOutCubic\",\"animationTarget\":\".menu-level-2-wrapper\",\"animationDuration\":300} }' class=\"coh-link coh-ce-7603bfd js-coh-menu-item-link";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, true, true, 1), "class", [], "any", true, true, true, 1)) {
                            echo " ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, false, true, 1), "class", [], "any", false, false, true, 1), 1, $this->source), " "), "html", null, true);
                        }
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, true, true, 1), "getDescription", [], "method", true, true, true, 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, false, true, 1), "getDescription", [], "method", false, false, true, 1) != ""))) {
                            echo " title=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, false, true, 1), "getDescription", [], "method", false, false, true, 1), 1, $this->source), "html", null, true);
                            echo "\"";
                        }
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
                        echo "</";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menuItemElement"] ?? null), 1, $this->source), "html", null, true);
                        echo "> ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
                        echo " <div class=\"coh-container menu-level-2-wrapper coh-ce-9e7f72ef\" > ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/coh_element_container"), "html", null, true);
                        echo " <div class=\"coh-container coh-ce-9891be7f coh-container-boxed\" > ";
                        $this->displayBlock('block202814098', $context, $blocks);
                        echo " </div> </div>";
                        $context = $__internal_compile_3;
                    }
                    echo "</li>";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</ul> ";
        }
        echo " ";
    }

    public function block_block202814098($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0)))) {
            echo " <ul class=\"coh-menu-list-container coh-unordered-list menu-level-2 coh-ce-41faece7\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, ($context["items"] ?? null))));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                $context["inRange"] = true;
                if ((($context["i"] <= twig_length_filter($this->env, ($context["items"] ?? null))) && ($context["inRange"] ?? null))) {
                    $context["item"] = (($__internal_compile_5 = ($context["items"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[(($__internal_compile_6 = twig_get_array_keys_filter($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 1, $this->source))) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["i"] - 1)] ?? null) : null)] ?? null) : null);
                    $context["menuItemAttributes"] = $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getMenuItemAttributes($this->sandbox->ensureToStringAllowed((($__internal_compile_7 = ($context["item"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["original_link"] ?? null) : null), 1, $this->source));
                    echo "<li class=\"coh-menu-list-item coh-ce-4c431097 js-coh-menu-item";
                    if ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", true, true, true, 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1) == true)) && ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>") == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeParameters", [], "any", false, false, true, 1), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "options", [], "any", false, false, true, 1))))) {
                        echo " is-active";
                    }
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0))) {
                        echo " has-children";
                    }
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", true, true, true, 1) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 1))) {
                        echo " in-active-trail";
                    }
                    echo "\" data-coh-settings='{\"xl\":\"hidden\"}' ";
                    if ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", true, true, true, 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1) == "<front>"))) {
                        echo "data-drupal-link-system-path=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1)) {
                        $__internal_compile_8 = $context;
                        $__internal_compile_9 = ["items" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)];
                        if (!twig_test_iterable($__internal_compile_9)) {
                            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 1, $this->getSourceContext());
                        }
                        $__internal_compile_9 = twig_to_array($__internal_compile_9);
                        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
                        $context["menuItemElement"] = "a";
                        echo " ";
                        if ((((((($context["menuItemElement"] ?? null) == "a") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1) == true)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1) == "<nolink>")) && true)) {
                            echo " ";
                            $context["menuItemElement"] = "span";
                            echo " ";
                        }
                        echo " ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.jquery_ui_effect_none"), "html", null, true);
                        echo " <";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menuItemElement"] ?? null), 1, $this->source), "html", null, true);
                        echo " ";
                        if ((($context["menuItemElement"] ?? null) == "a")) {
                            echo "href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
                            echo "\"";
                        }
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, true, true, 1), "target", [], "any", true, true, true, 1)) {
                            echo " target=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, false, true, 1), "target", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
                            echo "\"";
                        }
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "custom", [], "any", true, true, true, 1)) {
                            echo " ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "custom", [], "any", false, false, true, 1));
                            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                                echo " ";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 1, $this->source), "html", null, true);
                                echo "=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["attribute"], 1, $this->source), "html", null, true);
                                echo "\" ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            echo " ";
                        }
                        echo " data-coh-settings='{ \"xl\":{\"link_interaction\":\"toggle-on-hover\",\"animationType\":\"none\"} }' class=\"coh-link coh-ce-5d9b5c92 js-coh-menu-item-link";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, true, true, 1), "class", [], "any", true, true, true, 1)) {
                            echo " ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, false, true, 1), "class", [], "any", false, false, true, 1), 1, $this->source), " "), "html", null, true);
                        }
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, true, true, 1), "getDescription", [], "method", true, true, true, 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, false, true, 1), "getDescription", [], "method", false, false, true, 1) != ""))) {
                            echo " title=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, false, true, 1), "getDescription", [], "method", false, false, true, 1), 1, $this->source), "html", null, true);
                            echo "\"";
                        }
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
                        echo "</";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menuItemElement"] ?? null), 1, $this->source), "html", null, true);
                        echo "> ";
                        $this->displayBlock('block3951804192', $context, $blocks);
                        $context = $__internal_compile_8;
                    }
                    echo "</li>";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</ul> ";
        }
        echo " ";
    }

    public function block_block3951804192($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0)))) {
            echo " <ul class=\"coh-menu-list-container coh-unordered-list menu-level-3 coh-ce-7666841d\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, ($context["items"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                $context["inRange"] = true;
                if ((($context["i"] <= twig_length_filter($this->env, ($context["items"] ?? null))) && ($context["inRange"] ?? null))) {
                    $context["item"] = (($__internal_compile_10 = ($context["items"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[(($__internal_compile_11 = twig_get_array_keys_filter($this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 1, $this->source))) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[($context["i"] - 1)] ?? null) : null)] ?? null) : null);
                    $context["menuItemAttributes"] = $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->getMenuItemAttributes($this->sandbox->ensureToStringAllowed((($__internal_compile_12 = ($context["item"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["original_link"] ?? null) : null), 1, $this->source));
                    echo "<li class=\"coh-menu-list-item coh-ce-d344be45 js-coh-menu-item";
                    if ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", true, true, true, 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1) == true)) && ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>") == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeParameters", [], "any", false, false, true, 1), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "options", [], "any", false, false, true, 1))))) {
                        echo " is-active";
                    }
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)) > 0))) {
                        echo " has-children";
                    }
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", true, true, true, 1) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 1))) {
                        echo " in-active-trail";
                    }
                    echo "\" data-coh-settings='{\"xl\":\"hidden\"}' ";
                    if ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", true, true, true, 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1) == "<front>"))) {
                        echo "data-drupal-link-system-path=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", true, true, true, 1)) {
                        $__internal_compile_13 = $context;
                        $__internal_compile_14 = ["items" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 1)];
                        if (!twig_test_iterable($__internal_compile_14)) {
                            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 1, $this->getSourceContext());
                        }
                        $__internal_compile_14 = twig_to_array($__internal_compile_14);
                        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_14));
                        $context["menuItemElement"] = "a";
                        echo " ";
                        if ((((((($context["menuItemElement"] ?? null) == "a") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "external", [], "any", false, false, true, 1) == false)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routed", [], "any", false, false, true, 1) == true)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), "routeName", [], "any", false, false, true, 1) == "<nolink>")) && true)) {
                            echo " ";
                            $context["menuItemElement"] = "span";
                            echo " ";
                        }
                        echo " ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cohesion/global_libraries.jquery_ui_effect_none"), "html", null, true);
                        echo " <";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menuItemElement"] ?? null), 1, $this->source), "html", null, true);
                        echo " ";
                        if ((($context["menuItemElement"] ?? null) == "a")) {
                            echo "href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
                            echo "\"";
                        }
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, true, true, 1), "target", [], "any", true, true, true, 1)) {
                            echo " target=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, false, true, 1), "target", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
                            echo "\"";
                        }
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "custom", [], "any", true, true, true, 1)) {
                            echo " ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "custom", [], "any", false, false, true, 1));
                            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                                echo " ";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 1, $this->source), "html", null, true);
                                echo "=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["attribute"], 1, $this->source), "html", null, true);
                                echo "\" ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            echo " ";
                        }
                        echo " data-coh-settings='{ \"xl\":{\"link_interaction\":\"toggle-on-hover\",\"animationType\":\"none\"} }' class=\"coh-link coh-ce-769e1d0 js-coh-menu-item-link";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, true, true, 1), "class", [], "any", true, true, true, 1)) {
                            echo " ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menuItemAttributes"] ?? null), "all", [], "any", false, false, true, 1), "class", [], "any", false, false, true, 1), 1, $this->source), " "), "html", null, true);
                        }
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, true, true, 1), "getDescription", [], "method", true, true, true, 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, false, true, 1), "getDescription", [], "method", false, false, true, 1) != ""))) {
                            echo " title=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "original_link", [], "any", false, false, true, 1), "getDescription", [], "method", false, false, true, 1), 1, $this->source), "html", null, true);
                            echo "\"";
                        }
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
                        echo "</";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menuItemElement"] ?? null), 1, $this->source), "html", null, true);
                        echo ">";
                        $context = $__internal_compile_13;
                    }
                    echo "</li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</ul> ";
        }
        echo " ";
    }

    public function getTemplateName()
    {
        return "sites/default/files/cohesion/templates/menu--cohesion-menu-tpl-main-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/default/files/cohesion/templates/menu--cohesion-menu-tpl-main-navigation.html.twig", "/var/www/html/web/sites/default/files/cohesion/templates/menu--cohesion-menu-tpl-main-navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "if" => 1, "for" => 1, "set" => 1, "with" => 1);
        static $filters = array("escape" => 1, "length" => 1, "keys" => 1, "join" => 1);
        static $functions = array("attach_library" => 1, "range" => 1, "get_menu_item_attributes" => 1, "path" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set', 'with'],
                ['escape', 'length', 'keys', 'join'],
                ['attach_library', 'range', 'get_menu_item_attributes', 'path']
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
