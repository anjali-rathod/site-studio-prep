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

/* __string_template__20941ba5977c2cf746c0279a0e578865 */
class __TwigTemplate_0d82303656981f705b122db0019266c2 extends Template
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
        echo ".coh-accordion-tabs:before, .coh-accordion-tabs:after {
  clear: both;
  content: \" \";
  display: table;
}
.coh-accordion-tabs-nav {
  margin: 0;
  padding-bottom: 0;
  list-style: none;
  display: none;
}
.coh-accordion-tabs-nav > li {
  display: inline-block;
  vertical-align: top;
}
.coh-accordion-tabs-nav > li a {
  display: block;
}
.coh-accordion-tabs-nav > li.is-hidden {
  display: none;
}
.coh-accordion-tabs-content {
  display: none;
}
.coh-accordion-tabs-horizontal-left > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav {
  text-align: left;
  padding: 0;
}
.coh-accordion-tabs-horizontal-center > .coh-accordion-tabs-nav {
  text-align: center;
  padding: 0;
}
.coh-accordion-tabs-horizontal-right > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav {
  text-align: right;
  padding: 0;
}
.coh-accordion-tabs-horizontal-justify > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
  margin: 0 auto;
  padding: 0;
}
.coh-accordion-tabs-horizontal-justify > .coh-accordion-tabs-nav > li, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav > li {
  display: table-cell;
  width: 1%;
  text-align: center;
}
.coh-accordion-tabs-vertical-left > .coh-accordion-tabs-nav > li, .coh-accordion-tabs-vertical-right > .coh-accordion-tabs-nav > li {
  display: block;
}
.coh-accordion-tabs-vertical-left > .coh-accordion-tabs-nav {
  -webkit-box-ordinal-group: 1;
  -webkit-order: 0;
      -ms-flex-order: 0;
          order: 0;
}
.coh-accordion-tabs-vertical-left > .coh-accordion-tabs-content-wrapper {
  -webkit-box-ordinal-group: 2;
  -webkit-order: 1;
      -ms-flex-order: 1;
          order: 1;
}
.coh-accordion-tabs-vertical-right > .coh-accordion-tabs-nav {
  -webkit-box-ordinal-group: 2;
  -webkit-order: 1;
      -ms-flex-order: 1;
          order: 1;
}
.coh-accordion-tabs-vertical-right > .coh-accordion-tabs-content-wrapper {
  -webkit-box-ordinal-group: 1;
  -webkit-order: 0;
      -ms-flex-order: 0;
          order: 0;
}
.coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
  margin: 0 auto;
  max-width: 84rem;
}
@media (max-width: 1599px) {
  .coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
    max-width: none;
    margin-left: 4rem;
    margin-right: 4rem;
  }
}
@media (max-width: 1169px) {
  .coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
    max-width: none;
    margin-left: 3rem;
    margin-right: 3rem;
  }
}
@media (max-width: 1023px) {
  .coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
    max-width: none;
    margin-left: 3rem;
    margin-right: 3rem;
  }
}
@media (max-width: 767px) {
  .coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
    max-width: none;
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }
}
@media (max-width: 564px) {
  .coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-nav, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-nav {
    max-width: none;
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }
}
.coh-accordion-tabs-horizontal-left-grid > .coh-accordion-tabs-content-wrapper, .coh-accordion-tabs-horizontal-right-grid > .coh-accordion-tabs-content-wrapper, .coh-accordion-tabs-horizontal-justify-grid > .coh-accordion-tabs-content-wrapper {
  clear: both;
}
.coh-accordion-tabs-display-accordion-xl > .coh-accordion-tabs-nav {
  display: none;
}
.coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-xl > .coh-accordion-tabs-nav {
  display: none;
}
.coh-accordion-tabs-display-accordion-xl > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
  display: block;
}
.coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-xl > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
  display: block;
}
.coh-accordion-tabs-display-accordion-xl > .coh-accordion-tabs-content-wrapper .coh-accordion-title.is-hidden {
  display: none;
}
.coh-accordion-tabs > .coh-accordion-tabs-inner > .coh-accordion-tabs-display-inner-accordion-xl {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 100%;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  max-width: 100%;
}
.coh-accordion-tabs-display-tabs-xl > .coh-accordion-tabs-nav {
  display: block;
}
.coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-xl > .coh-accordion-tabs-nav {
  display: block;
}
.coh-accordion-tabs-display-tabs-xl > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
  display: none;
}
.coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-xl > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
  display: none;
}
@media (max-width: 1599px) {
  .coh-accordion-tabs-display-accordion-lg > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-lg > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs-display-accordion-lg > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-lg > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs-display-accordion-lg > .coh-accordion-tabs-content-wrapper .coh-accordion-title.is-hidden {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner > .coh-accordion-tabs-display-inner-accordion-lg {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-accordion-tabs-display-tabs-lg > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-lg > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs-display-tabs-lg > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-lg > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
}
@media (max-width: 1169px) {
  .coh-accordion-tabs-display-accordion-md > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-md > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs-display-accordion-md > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-md > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs-display-accordion-md > .coh-accordion-tabs-content-wrapper .coh-accordion-title.is-hidden {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner > .coh-accordion-tabs-display-inner-accordion-md {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-accordion-tabs-display-tabs-md > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-md > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs-display-tabs-md > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-md > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
}
@media (max-width: 1023px) {
  .coh-accordion-tabs-display-accordion-sm > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-sm > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs-display-accordion-sm > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-sm > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs-display-accordion-sm > .coh-accordion-tabs-content-wrapper .coh-accordion-title.is-hidden {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner > .coh-accordion-tabs-display-inner-accordion-sm {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-accordion-tabs-display-tabs-sm > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-sm > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs-display-tabs-sm > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-sm > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
}
@media (max-width: 767px) {
  .coh-accordion-tabs-display-accordion-ps > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-ps > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs-display-accordion-ps > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-ps > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs-display-accordion-ps > .coh-accordion-tabs-content-wrapper .coh-accordion-title.is-hidden {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner > .coh-accordion-tabs-display-inner-accordion-ps {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-accordion-tabs-display-tabs-ps > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-ps > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs-display-tabs-ps > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-ps > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
}
@media (max-width: 564px) {
  .coh-accordion-tabs-display-accordion-xs > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-xs > .coh-accordion-tabs-nav {
    display: none;
  }
  .coh-accordion-tabs-display-accordion-xs > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-accordion-xs > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: block;
  }
  .coh-accordion-tabs-display-accordion-xs > .coh-accordion-tabs-content-wrapper .coh-accordion-title.is-hidden {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner > .coh-accordion-tabs-display-inner-accordion-xs {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .coh-accordion-tabs-display-tabs-xs > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-xs > .coh-accordion-tabs-nav {
    display: block;
  }
  .coh-accordion-tabs-display-tabs-xs > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
  .coh-accordion-tabs > .coh-accordion-tabs-inner .coh-accordion-tabs-display-tabs-xs > .coh-accordion-tabs-content-wrapper .coh-accordion-title {
    display: none;
  }
}
";
    }

    public function getTemplateName()
    {
        return "__string_template__20941ba5977c2cf746c0279a0e578865";
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__20941ba5977c2cf746c0279a0e578865", "");
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
