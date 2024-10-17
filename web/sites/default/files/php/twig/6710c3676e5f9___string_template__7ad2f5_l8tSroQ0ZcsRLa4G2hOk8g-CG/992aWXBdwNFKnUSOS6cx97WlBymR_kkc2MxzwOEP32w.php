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

/* __string_template__7ad2f57abe894e7919df029d0fe62196 */
class __TwigTemplate_74126a96af19df6f2ca2557d480a217c extends Template
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
        echo ".coh-container {
  display: block;
}
.coh-container:before, .coh-container:after {
  clear: both;
  content: \" \";
  display: table;
}
.coh-container-boxed {
  margin: 0 auto;
  max-width: 84rem;
}
@media (max-width: 1599px) {
  .coh-container-boxed {
    max-width: none;
    margin-left: 4rem;
    margin-right: 4rem;
  }
}
@media (max-width: 1169px) {
  .coh-container-boxed {
    max-width: none;
    margin-left: 3rem;
    margin-right: 3rem;
  }
}
@media (max-width: 1023px) {
  .coh-container-boxed {
    max-width: none;
    margin-left: 3rem;
    margin-right: 3rem;
  }
}
@media (max-width: 767px) {
  .coh-container-boxed {
    max-width: none;
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }
}
@media (max-width: 564px) {
  .coh-container-boxed {
    max-width: none;
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }
}
.coh-container-boxed .coh-container-boxed {
  margin-right: auto;
  margin-left: auto;
}
.dx8-aov {
  visibility: hidden;
}
";
    }

    public function getTemplateName()
    {
        return "__string_template__7ad2f57abe894e7919df029d0fe62196";
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7ad2f57abe894e7919df029d0fe62196", "");
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
