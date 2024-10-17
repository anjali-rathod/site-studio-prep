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

/* __string_template__213a04c8d5be8587231987d5028ab249 */
class __TwigTemplate_17249845616f44e9db7711fbced5f8ef extends Template
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
        // line 2
        echo ".coh-video-background {
  position: relative;
  overflow: hidden;
}
.coh-video-background-inner {
  position: absolute;
  width: 100%;
  min-height: 100%;
  z-index: -100;
  -o-object-fit: cover;
     object-fit: cover;
}
.coh-video-background-top .coh-video-background-inner {
  top: 0;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
.coh-video-background-center .coh-video-background-inner {
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.coh-video-background-bottom .coh-video-background-inner {
  top: auto;
  bottom: 0;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
";
    }

    public function getTemplateName()
    {
        return "__string_template__213a04c8d5be8587231987d5028ab249";
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__213a04c8d5be8587231987d5028ab249", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
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
