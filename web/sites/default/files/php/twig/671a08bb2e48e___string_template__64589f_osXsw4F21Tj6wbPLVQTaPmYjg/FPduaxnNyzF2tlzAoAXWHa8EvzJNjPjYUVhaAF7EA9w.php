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

/* __string_template__64589fdb294e48167f1e214ae0494f34 */
class __TwigTemplate_971096b5ae67188fe09de8ab90b0ce07 extends Template
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
        echo "body.modal-open {
  overflow: visible;
}
body.modal-open.coh-modal-overlay-open {
  overflow: hidden;
}
.coh-modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  z-index: 999;
  pointer-events: none;
}
.coh-modal > * {
  pointer-events: auto;
}
.coh-modal-top-left {
  -webkit-box-pack: start;
  -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
      -ms-flex-align: start;
          align-items: flex-start;
}
.coh-modal-top-center {
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
      -ms-flex-align: start;
          align-items: flex-start;
}
.coh-modal-top-right {
  -webkit-box-pack: end;
  -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
      -ms-flex-align: start;
          align-items: flex-start;
}
.coh-modal-center-left {
  -webkit-box-pack: start;
  -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.coh-modal-center {
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.coh-modal-center-right {
  -webkit-box-pack: end;
  -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.coh-modal-bottom-left {
  -webkit-box-pack: start;
  -webkit-justify-content: flex-start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
}
.coh-modal-bottom-center {
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
}
.coh-modal-bottom-right {
  -webkit-box-pack: end;
  -webkit-justify-content: flex-end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
}
.coh-modal-inner {
  position: relative;
  overflow: auto;
  z-index: 1;
  -webkit-overflow-scrolling: touch;
}
.coh-modal-close-wrapper {
  position: absolute;
  z-index: 1;
}
.coh-modal-close-top-left .coh-modal-close-wrapper {
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
.coh-modal-close-top-center .coh-modal-close-wrapper {
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
.coh-modal-close-top-right .coh-modal-close-wrapper {
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
.coh-modal-close-center-left .coh-modal-close-wrapper {
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
.coh-modal-close-center-right .coh-modal-close-wrapper {
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
.coh-modal-close-bottom-left .coh-modal-close-wrapper {
  top: auto;
  right: auto;
  bottom: 0;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
.coh-modal-close-bottom-center .coh-modal-close-wrapper {
  top: auto;
  right: auto;
  bottom: 0;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
.coh-modal-close-bottom-right .coh-modal-close-wrapper {
  top: auto;
  right: 0;
  bottom: 0;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
.coh-modal-close-button[hidden] {
  display: none;
}
.coh-modal-overlay {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.25);
}
";
    }

    public function getTemplateName()
    {
        return "__string_template__64589fdb294e48167f1e214ae0494f34";
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__64589fdb294e48167f1e214ae0494f34", "");
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
