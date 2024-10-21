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

/* __string_template__8b537ff486ca271a939231d17e5b64cc */
class __TwigTemplate_f35b595fa5b34feea2eb9e227a0c567e extends Template
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
        echo ".ssa-ck-content :root {
  --ssa-color-palette-black: rgb(0, 0, 0);
  --ssa-color-palette-blue: rgb(39, 60, 149);
  --ssa-color-palette-brand-color: rgb(38, 163, 221);
  --ssa-color-palette-brand-color-dark: rgb(26, 137, 201);
  --ssa-color-palette-brand-color-light: rgb(112, 195, 233);
  --ssa-color-palette-gray-10: rgb(242, 242, 242);
  --ssa-color-palette-gray-20: rgb(219, 219, 220);
  --ssa-color-palette-gray-30: rgb(191, 191, 191);
  --ssa-color-palette-gray-70: rgb(72, 72, 72);
  --ssa-color-palette-gray-80: rgb(50, 50, 50);
  --ssa-color-palette-gray-90: rgb(34, 34, 34);
  --ssa-color-palette-green: rgb(130, 241, 175);
  --ssa-color-palette-maroon: rgb(142, 61, 61);
  --ssa-color-palette-off-green: rgb(230, 240, 231);
  --ssa-color-palette-off-orange: rgb(255, 209, 156);
  --ssa-color-palette-orange: rgb(252, 151, 67);
  --ssa-color-palette-white: rgb(255, 255, 255);
}
.ssa-ck-content .coh-color-black {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-color-brand-color {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-color-brand-color-dark {
  color: rgb(26, 137, 201);
}
.ssa-ck-content .coh-color-brand-color-light {
  color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-color-gray-10 {
  color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-color-gray-20 {
  color: rgb(219, 219, 220);
}
.ssa-ck-content .coh-color-gray-30 {
  color: rgb(191, 191, 191);
}
.ssa-ck-content .coh-color-gray-70 {
  color: rgb(72, 72, 72);
}
.ssa-ck-content .coh-color-gray-80 {
  color: rgb(50, 50, 50);
}
.ssa-ck-content .coh-color-gray-90 {
  color: rgb(34, 34, 34);
}
.ssa-ck-content .coh-color-maroon {
  color: rgb(142, 61, 61);
}
.ssa-ck-content .coh-color-white {
  color: rgb(255, 255, 255);
}
.ssa-ck-content [data-icon-icomoon] {
  font-family: \"icomoon\", serif;
}
.ssa-ck-content [data-icon-icomoon]:after {
  font-family: \"icomoon\", serif;
  content: attr(data-icon-icomoon);
}
@font-face {
  font-family: \"icomoon\";
  src: url(\"/sites/default/files/cohesion/icomoon.eot\");
  src: url(\"/sites/default/files/cohesion/icomoon.eot?#iefix\") format(\"embedded-opentype\"), url(\"/sites/default/files/cohesion/icomoon.woff\") format(\"woff\"), url(\"/sites/default/files/cohesion/icomoon.ttf\") format(\"truetype\");
  font-display: block;
}
.ssa-ck-content :root {
  --ssa-font-stacks-arial: Arial, 'Helvetica Neue', Helvetica, sans-serif;
  --ssa-font-stacks-roboto: 'Roboto', sans-serif;
}
.ssa-ck-content :root {
  --ssa-responsive-grid-settings-width: 100rem;
  --ssa-responsive-grid-settings-boxed-width: 84rem;
  --ssa-responsive-grid-settings-inner-gutter: 2rem;
  --ssa-responsive-grid-settings-outer-gutter: 8rem;
}
@media (max-width: 1599px) {
  .ssa-ck-content :root {
    --ssa-responsive-grid-settings-width: 73.125rem;
    --ssa-responsive-grid-settings-boxed-width: 65.125rem;
    --ssa-responsive-grid-settings-inner-gutter: 2rem;
    --ssa-responsive-grid-settings-outer-gutter: 4rem;
  }
}
@media (max-width: 1169px) {
  .ssa-ck-content :root {
    --ssa-responsive-grid-settings-width: 64rem;
    --ssa-responsive-grid-settings-boxed-width: 58rem;
    --ssa-responsive-grid-settings-inner-gutter: 1.5rem;
    --ssa-responsive-grid-settings-outer-gutter: 3rem;
  }
}
@media (max-width: 1023px) {
  .ssa-ck-content :root {
    --ssa-responsive-grid-settings-width: 48rem;
    --ssa-responsive-grid-settings-boxed-width: 42rem;
    --ssa-responsive-grid-settings-inner-gutter: 1.5rem;
    --ssa-responsive-grid-settings-outer-gutter: 3rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content :root {
    --ssa-responsive-grid-settings-width: 35.3125rem;
    --ssa-responsive-grid-settings-boxed-width: 32.3125rem;
    --ssa-responsive-grid-settings-inner-gutter: 1.5rem;
    --ssa-responsive-grid-settings-outer-gutter: 1.5rem;
  }
}
@media (max-width: 564px) {
  .ssa-ck-content :root {
    --ssa-responsive-grid-settings-width: 20rem;
    --ssa-responsive-grid-settings-boxed-width: 17rem;
    --ssa-responsive-grid-settings-inner-gutter: 1.5rem;
    --ssa-responsive-grid-settings-outer-gutter: 1.5rem;
  }
}
.ssa-ck-content .coh-row-inner {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  margin-left: -1rem;
  margin-right: -1rem;
}
@media (max-width: 1599px) {
  .ssa-ck-content .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -1rem;
    margin-right: -1rem;
  }
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -0.75rem;
    margin-right: -0.75rem;
  }
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -0.75rem;
    margin-right: -0.75rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -0.75rem;
    margin-right: -0.75rem;
  }
}
@media (max-width: 564px) {
  .ssa-ck-content .coh-row-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
    margin-left: -0.75rem;
    margin-right: -0.75rem;
  }
}
.ssa-ck-content .coh-column {
  position: relative;
  width: 100%;
  min-height: 1px;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
.ssa-ck-content .coh-column {
  padding-left: 1rem;
  padding-right: 1rem;
}
@media (max-width: 1599px) {
  .ssa-ck-content .coh-column {
    padding-left: 1rem;
    padding-right: 1rem;
  }
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .ssa-ck-content .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
.ssa-ck-content .coh-col-xl {
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  max-width: 100%;
}
.ssa-ck-content .coh-layout-col-xl {
  -webkit-flex-basis: 0;
      -ms-flex-preferred-size: 0;
          flex-basis: 0;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  max-width: 100%;
  opacity: 1;
}
.ssa-ck-content .coh-col-xl-auto {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 auto;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: auto;
  max-width: none;
}
.ssa-ck-content .coh-layout-col-xl-auto {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 auto;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: auto;
  max-width: 200px;
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-hidden {
  max-width: 200px;
  opacity: 0.5;
}
.ssa-ck-content .coh-col-xl-1 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 8.3333333333%;
      -ms-flex: 0 0 8.3333333333%;
          flex: 0 0 8.3333333333%;
  max-width: 8.3333333333%;
}
.ssa-ck-content .coh-layout-col-xl-1 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
      -ms-flex: 0 0 calc(8.3333333333% - 10px);
          flex: 0 0 calc(8.3333333333% - 10px);
  max-width: -webkit-calc(8.3333333333% - 10px);
  max-width: calc(8.3333333333% - 10px);
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-1.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 8.3333333333%;
      -ms-flex: 0 0 8.3333333333%;
          flex: 0 0 8.3333333333%;
  max-width: 8.3333333333%;
}
.ssa-ck-content .coh-col-xl-2 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 16.6666666667%;
      -ms-flex: 0 0 16.6666666667%;
          flex: 0 0 16.6666666667%;
  max-width: 16.6666666667%;
}
.ssa-ck-content .coh-layout-col-xl-2 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
      -ms-flex: 0 0 calc(16.6666666667% - 10px);
          flex: 0 0 calc(16.6666666667% - 10px);
  max-width: -webkit-calc(16.6666666667% - 10px);
  max-width: calc(16.6666666667% - 10px);
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-2.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 16.6666666667%;
      -ms-flex: 0 0 16.6666666667%;
          flex: 0 0 16.6666666667%;
  max-width: 16.6666666667%;
}
.ssa-ck-content .coh-col-xl-3 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 25%;
      -ms-flex: 0 0 25%;
          flex: 0 0 25%;
  max-width: 25%;
}
.ssa-ck-content .coh-layout-col-xl-3 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(25% - 10px);
      -ms-flex: 0 0 calc(25% - 10px);
          flex: 0 0 calc(25% - 10px);
  max-width: -webkit-calc(25% - 10px);
  max-width: calc(25% - 10px);
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-3.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 25%;
      -ms-flex: 0 0 25%;
          flex: 0 0 25%;
  max-width: 25%;
}
.ssa-ck-content .coh-col-xl-4 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 33.3333333333%;
      -ms-flex: 0 0 33.3333333333%;
          flex: 0 0 33.3333333333%;
  max-width: 33.3333333333%;
}
.ssa-ck-content .coh-layout-col-xl-4 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
      -ms-flex: 0 0 calc(33.3333333333% - 10px);
          flex: 0 0 calc(33.3333333333% - 10px);
  max-width: -webkit-calc(33.3333333333% - 10px);
  max-width: calc(33.3333333333% - 10px);
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-4.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 33.3333333333%;
      -ms-flex: 0 0 33.3333333333%;
          flex: 0 0 33.3333333333%;
  max-width: 33.3333333333%;
}
.ssa-ck-content .coh-col-xl-5 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 41.6666666667%;
      -ms-flex: 0 0 41.6666666667%;
          flex: 0 0 41.6666666667%;
  max-width: 41.6666666667%;
}
.ssa-ck-content .coh-layout-col-xl-5 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
      -ms-flex: 0 0 calc(41.6666666667% - 10px);
          flex: 0 0 calc(41.6666666667% - 10px);
  max-width: -webkit-calc(41.6666666667% - 10px);
  max-width: calc(41.6666666667% - 10px);
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-5.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 41.6666666667%;
      -ms-flex: 0 0 41.6666666667%;
          flex: 0 0 41.6666666667%;
  max-width: 41.6666666667%;
}
.ssa-ck-content .coh-col-xl-6 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 50%;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}
.ssa-ck-content .coh-layout-col-xl-6 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(50% - 10px);
      -ms-flex: 0 0 calc(50% - 10px);
          flex: 0 0 calc(50% - 10px);
  max-width: -webkit-calc(50% - 10px);
  max-width: calc(50% - 10px);
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-6.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 50%;
      -ms-flex: 0 0 50%;
          flex: 0 0 50%;
  max-width: 50%;
}
.ssa-ck-content .coh-col-xl-7 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 58.3333333333%;
      -ms-flex: 0 0 58.3333333333%;
          flex: 0 0 58.3333333333%;
  max-width: 58.3333333333%;
}
.ssa-ck-content .coh-layout-col-xl-7 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
      -ms-flex: 0 0 calc(58.3333333333% - 10px);
          flex: 0 0 calc(58.3333333333% - 10px);
  max-width: -webkit-calc(58.3333333333% - 10px);
  max-width: calc(58.3333333333% - 10px);
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-7.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 58.3333333333%;
      -ms-flex: 0 0 58.3333333333%;
          flex: 0 0 58.3333333333%;
  max-width: 58.3333333333%;
}
.ssa-ck-content .coh-col-xl-8 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 66.6666666667%;
      -ms-flex: 0 0 66.6666666667%;
          flex: 0 0 66.6666666667%;
  max-width: 66.6666666667%;
}
.ssa-ck-content .coh-layout-col-xl-8 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
      -ms-flex: 0 0 calc(66.6666666667% - 10px);
          flex: 0 0 calc(66.6666666667% - 10px);
  max-width: -webkit-calc(66.6666666667% - 10px);
  max-width: calc(66.6666666667% - 10px);
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-8.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 66.6666666667%;
      -ms-flex: 0 0 66.6666666667%;
          flex: 0 0 66.6666666667%;
  max-width: 66.6666666667%;
}
.ssa-ck-content .coh-col-xl-9 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 75%;
      -ms-flex: 0 0 75%;
          flex: 0 0 75%;
  max-width: 75%;
}
.ssa-ck-content .coh-layout-col-xl-9 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(75% - 10px);
      -ms-flex: 0 0 calc(75% - 10px);
          flex: 0 0 calc(75% - 10px);
  max-width: -webkit-calc(75% - 10px);
  max-width: calc(75% - 10px);
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-9.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 75%;
      -ms-flex: 0 0 75%;
          flex: 0 0 75%;
  max-width: 75%;
}
.ssa-ck-content .coh-col-xl-10 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 83.3333333333%;
      -ms-flex: 0 0 83.3333333333%;
          flex: 0 0 83.3333333333%;
  max-width: 83.3333333333%;
}
.ssa-ck-content .coh-layout-col-xl-10 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
      -ms-flex: 0 0 calc(83.3333333333% - 10px);
          flex: 0 0 calc(83.3333333333% - 10px);
  max-width: -webkit-calc(83.3333333333% - 10px);
  max-width: calc(83.3333333333% - 10px);
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-10.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 83.3333333333%;
      -ms-flex: 0 0 83.3333333333%;
          flex: 0 0 83.3333333333%;
  max-width: 83.3333333333%;
}
.ssa-ck-content .coh-col-xl-11 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 91.6666666667%;
      -ms-flex: 0 0 91.6666666667%;
          flex: 0 0 91.6666666667%;
  max-width: 91.6666666667%;
}
.ssa-ck-content .coh-layout-col-xl-11 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
      -ms-flex: 0 0 calc(91.6666666667% - 10px);
          flex: 0 0 calc(91.6666666667% - 10px);
  max-width: -webkit-calc(91.6666666667% - 10px);
  max-width: calc(91.6666666667% - 10px);
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-11.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 91.6666666667%;
      -ms-flex: 0 0 91.6666666667%;
          flex: 0 0 91.6666666667%;
  max-width: 91.6666666667%;
}
.ssa-ck-content .coh-col-xl-12 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 100%;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  max-width: 100%;
}
.ssa-ck-content .coh-layout-col-xl-12 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(100% - 10px);
      -ms-flex: 0 0 calc(100% - 10px);
          flex: 0 0 calc(100% - 10px);
  max-width: -webkit-calc(100% - 10px);
  max-width: calc(100% - 10px);
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-12.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 100%;
      -ms-flex: 0 0 100%;
          flex: 0 0 100%;
  max-width: 100%;
}
.ssa-ck-content .coh-col-xl-1-5 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 20%;
      -ms-flex: 0 0 20%;
          flex: 0 0 20%;
  max-width: 20%;
}
.ssa-ck-content .coh-layout-col-xl-1-5 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 -webkit-calc(20% - 10px);
      -ms-flex: 0 0 calc(20% - 10px);
          flex: 0 0 calc(20% - 10px);
  max-width: -webkit-calc(20% - 10px);
  max-width: calc(20% - 10px);
  opacity: 1;
}
.ssa-ck-content .coh-layout-col-xl-1-5.coh-layout-canvas-component-drop-zone {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 20%;
      -ms-flex: 0 0 20%;
          flex: 0 0 20%;
  max-width: 20%;
}
.ssa-ck-content .coh-col-xl-push-12 {
  left: 100%;
}
.ssa-ck-content .coh-col-xl-pull-12 {
  right: 100%;
}
.ssa-ck-content .coh-col-xl-offset-12 {
  margin-left: 100%;
}
.ssa-ck-content .coh-col-xl-push-11 {
  left: 91.6666666667%;
}
.ssa-ck-content .coh-col-xl-pull-11 {
  right: 91.6666666667%;
}
.ssa-ck-content .coh-col-xl-offset-11 {
  margin-left: 91.6666666667%;
}
.ssa-ck-content .coh-col-xl-push-10 {
  left: 83.3333333333%;
}
.ssa-ck-content .coh-col-xl-pull-10 {
  right: 83.3333333333%;
}
.ssa-ck-content .coh-col-xl-offset-10 {
  margin-left: 83.3333333333%;
}
.ssa-ck-content .coh-col-xl-push-9 {
  left: 75%;
}
.ssa-ck-content .coh-col-xl-pull-9 {
  right: 75%;
}
.ssa-ck-content .coh-col-xl-offset-9 {
  margin-left: 75%;
}
.ssa-ck-content .coh-col-xl-push-8 {
  left: 66.6666666667%;
}
.ssa-ck-content .coh-col-xl-pull-8 {
  right: 66.6666666667%;
}
.ssa-ck-content .coh-col-xl-offset-8 {
  margin-left: 66.6666666667%;
}
.ssa-ck-content .coh-col-xl-push-7 {
  left: 58.3333333333%;
}
.ssa-ck-content .coh-col-xl-pull-7 {
  right: 58.3333333333%;
}
.ssa-ck-content .coh-col-xl-offset-7 {
  margin-left: 58.3333333333%;
}
.ssa-ck-content .coh-col-xl-push-6 {
  left: 50%;
}
.ssa-ck-content .coh-col-xl-pull-6 {
  right: 50%;
}
.ssa-ck-content .coh-col-xl-offset-6 {
  margin-left: 50%;
}
.ssa-ck-content .coh-col-xl-push-5 {
  left: 41.6666666667%;
}
.ssa-ck-content .coh-col-xl-pull-5 {
  right: 41.6666666667%;
}
.ssa-ck-content .coh-col-xl-offset-5 {
  margin-left: 41.6666666667%;
}
.ssa-ck-content .coh-col-xl-push-4 {
  left: 33.3333333333%;
}
.ssa-ck-content .coh-col-xl-pull-4 {
  right: 33.3333333333%;
}
.ssa-ck-content .coh-col-xl-offset-4 {
  margin-left: 33.3333333333%;
}
.ssa-ck-content .coh-col-xl-push-3 {
  left: 25%;
}
.ssa-ck-content .coh-col-xl-pull-3 {
  right: 25%;
}
.ssa-ck-content .coh-col-xl-offset-3 {
  margin-left: 25%;
}
.ssa-ck-content .coh-col-xl-push-2 {
  left: 16.6666666667%;
}
.ssa-ck-content .coh-col-xl-pull-2 {
  right: 16.6666666667%;
}
.ssa-ck-content .coh-col-xl-offset-2 {
  margin-left: 16.6666666667%;
}
.ssa-ck-content .coh-visible-xl {
  display: block;
}
.ssa-ck-content .coh-col-xl-push-1 {
  left: 8.3333333333%;
}
.ssa-ck-content .coh-col-xl-pull-1 {
  right: 8.3333333333%;
}
.ssa-ck-content .coh-col-xl-offset-1 {
  margin-left: 8.3333333333%;
}
.ssa-ck-content .coh-hidden-xl {
  display: none;
}
.ssa-ck-content .coh-col-xl-push-0 {
  left: auto;
}
.ssa-ck-content .coh-col-xl-pull-0 {
  right: auto;
}
.ssa-ck-content .coh-col-xl-offset-0 {
  margin-left: 0;
}
.ssa-ck-content .coh-col-xl-push-1-5 {
  left: 20%;
}
.ssa-ck-content .coh-col-xl-pull-1-5 {
  right: 20%;
}
.ssa-ck-content .coh-col-xl-offset-1-5 {
  margin-left: 20%;
}
@media (max-width: 1599px) {
  .ssa-ck-content .coh-col-lg {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .ssa-ck-content .coh-layout-col-lg {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .ssa-ck-content .coh-col-lg-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .ssa-ck-content .coh-layout-col-lg-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .ssa-ck-content .coh-col-lg-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-lg-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-lg-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .ssa-ck-content .coh-layout-col-lg-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .ssa-ck-content .coh-col-lg-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-lg-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-lg-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .ssa-ck-content .coh-layout-col-lg-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .ssa-ck-content .coh-col-lg-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-lg-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-lg-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .ssa-ck-content .coh-layout-col-lg-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .ssa-ck-content .coh-col-lg-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-lg-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-lg-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .ssa-ck-content .coh-layout-col-lg-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .ssa-ck-content .coh-col-lg-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .ssa-ck-content .coh-layout-col-lg-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-lg-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .ssa-ck-content .coh-col-lg-push-12 {
    left: 100%;
  }
  .ssa-ck-content .coh-col-lg-pull-12 {
    right: 100%;
  }
  .ssa-ck-content .coh-col-lg-offset-12 {
    margin-left: 100%;
  }
  .ssa-ck-content .coh-col-lg-push-11 {
    left: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-pull-11 {
    right: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-offset-11 {
    margin-left: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-push-10 {
    left: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-pull-10 {
    right: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-offset-10 {
    margin-left: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-push-9 {
    left: 75%;
  }
  .ssa-ck-content .coh-col-lg-pull-9 {
    right: 75%;
  }
  .ssa-ck-content .coh-col-lg-offset-9 {
    margin-left: 75%;
  }
  .ssa-ck-content .coh-col-lg-push-8 {
    left: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-pull-8 {
    right: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-offset-8 {
    margin-left: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-push-7 {
    left: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-pull-7 {
    right: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-offset-7 {
    margin-left: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-push-6 {
    left: 50%;
  }
  .ssa-ck-content .coh-col-lg-pull-6 {
    right: 50%;
  }
  .ssa-ck-content .coh-col-lg-offset-6 {
    margin-left: 50%;
  }
  .ssa-ck-content .coh-col-lg-push-5 {
    left: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-pull-5 {
    right: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-offset-5 {
    margin-left: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-push-4 {
    left: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-pull-4 {
    right: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-offset-4 {
    margin-left: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-push-3 {
    left: 25%;
  }
  .ssa-ck-content .coh-col-lg-pull-3 {
    right: 25%;
  }
  .ssa-ck-content .coh-col-lg-offset-3 {
    margin-left: 25%;
  }
  .ssa-ck-content .coh-col-lg-push-2 {
    left: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-pull-2 {
    right: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-lg-offset-2 {
    margin-left: 16.6666666667%;
  }
  .ssa-ck-content .coh-visible-lg {
    display: block;
  }
  .ssa-ck-content .coh-col-lg-push-1 {
    left: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-pull-1 {
    right: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-lg-offset-1 {
    margin-left: 8.3333333333%;
  }
  .ssa-ck-content .coh-hidden-lg {
    display: none;
  }
  .ssa-ck-content .coh-col-lg-push-0 {
    left: auto;
  }
  .ssa-ck-content .coh-col-lg-pull-0 {
    right: auto;
  }
  .ssa-ck-content .coh-col-lg-offset-0 {
    margin-left: 0;
  }
  .ssa-ck-content .coh-col-lg-push-1-5 {
    left: 20%;
  }
  .ssa-ck-content .coh-col-lg-pull-1-5 {
    right: 20%;
  }
  .ssa-ck-content .coh-col-lg-offset-1-5 {
    margin-left: 20%;
  }
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-col-md {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .ssa-ck-content .coh-layout-col-md {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .ssa-ck-content .coh-col-md-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .ssa-ck-content .coh-layout-col-md-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .ssa-ck-content .coh-col-md-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-md-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-md-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-md-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-md-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .ssa-ck-content .coh-layout-col-md-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .ssa-ck-content .coh-col-md-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-md-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-md-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-md-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-md-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .ssa-ck-content .coh-layout-col-md-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .ssa-ck-content .coh-col-md-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-md-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-md-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-md-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-md-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .ssa-ck-content .coh-layout-col-md-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .ssa-ck-content .coh-col-md-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-md-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-md-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-md-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-md-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .ssa-ck-content .coh-layout-col-md-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .ssa-ck-content .coh-col-md-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .ssa-ck-content .coh-layout-col-md-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-md-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .ssa-ck-content .coh-col-md-push-12 {
    left: 100%;
  }
  .ssa-ck-content .coh-col-md-pull-12 {
    right: 100%;
  }
  .ssa-ck-content .coh-col-md-offset-12 {
    margin-left: 100%;
  }
  .ssa-ck-content .coh-col-md-push-11 {
    left: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-md-pull-11 {
    right: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-md-offset-11 {
    margin-left: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-md-push-10 {
    left: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-md-pull-10 {
    right: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-md-offset-10 {
    margin-left: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-md-push-9 {
    left: 75%;
  }
  .ssa-ck-content .coh-col-md-pull-9 {
    right: 75%;
  }
  .ssa-ck-content .coh-col-md-offset-9 {
    margin-left: 75%;
  }
  .ssa-ck-content .coh-col-md-push-8 {
    left: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-md-pull-8 {
    right: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-md-offset-8 {
    margin-left: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-md-push-7 {
    left: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-md-pull-7 {
    right: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-md-offset-7 {
    margin-left: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-md-push-6 {
    left: 50%;
  }
  .ssa-ck-content .coh-col-md-pull-6 {
    right: 50%;
  }
  .ssa-ck-content .coh-col-md-offset-6 {
    margin-left: 50%;
  }
  .ssa-ck-content .coh-col-md-push-5 {
    left: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-md-pull-5 {
    right: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-md-offset-5 {
    margin-left: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-md-push-4 {
    left: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-md-pull-4 {
    right: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-md-offset-4 {
    margin-left: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-md-push-3 {
    left: 25%;
  }
  .ssa-ck-content .coh-col-md-pull-3 {
    right: 25%;
  }
  .ssa-ck-content .coh-col-md-offset-3 {
    margin-left: 25%;
  }
  .ssa-ck-content .coh-col-md-push-2 {
    left: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-md-pull-2 {
    right: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-md-offset-2 {
    margin-left: 16.6666666667%;
  }
  .ssa-ck-content .coh-visible-md {
    display: block;
  }
  .ssa-ck-content .coh-col-md-push-1 {
    left: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-md-pull-1 {
    right: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-md-offset-1 {
    margin-left: 8.3333333333%;
  }
  .ssa-ck-content .coh-hidden-md {
    display: none;
  }
  .ssa-ck-content .coh-col-md-push-0 {
    left: auto;
  }
  .ssa-ck-content .coh-col-md-pull-0 {
    right: auto;
  }
  .ssa-ck-content .coh-col-md-offset-0 {
    margin-left: 0;
  }
  .ssa-ck-content .coh-col-md-push-1-5 {
    left: 20%;
  }
  .ssa-ck-content .coh-col-md-pull-1-5 {
    right: 20%;
  }
  .ssa-ck-content .coh-col-md-offset-1-5 {
    margin-left: 20%;
  }
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-col-sm {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .ssa-ck-content .coh-layout-col-sm {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .ssa-ck-content .coh-col-sm-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .ssa-ck-content .coh-layout-col-sm-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .ssa-ck-content .coh-col-sm-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-sm-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-sm-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .ssa-ck-content .coh-layout-col-sm-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .ssa-ck-content .coh-col-sm-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-sm-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-sm-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .ssa-ck-content .coh-layout-col-sm-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .ssa-ck-content .coh-col-sm-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-sm-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-sm-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .ssa-ck-content .coh-layout-col-sm-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .ssa-ck-content .coh-col-sm-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-sm-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-sm-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .ssa-ck-content .coh-layout-col-sm-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .ssa-ck-content .coh-col-sm-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .ssa-ck-content .coh-layout-col-sm-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-sm-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .ssa-ck-content .coh-col-sm-push-12 {
    left: 100%;
  }
  .ssa-ck-content .coh-col-sm-pull-12 {
    right: 100%;
  }
  .ssa-ck-content .coh-col-sm-offset-12 {
    margin-left: 100%;
  }
  .ssa-ck-content .coh-col-sm-push-11 {
    left: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-pull-11 {
    right: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-offset-11 {
    margin-left: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-push-10 {
    left: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-pull-10 {
    right: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-offset-10 {
    margin-left: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-push-9 {
    left: 75%;
  }
  .ssa-ck-content .coh-col-sm-pull-9 {
    right: 75%;
  }
  .ssa-ck-content .coh-col-sm-offset-9 {
    margin-left: 75%;
  }
  .ssa-ck-content .coh-col-sm-push-8 {
    left: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-pull-8 {
    right: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-offset-8 {
    margin-left: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-push-7 {
    left: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-pull-7 {
    right: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-offset-7 {
    margin-left: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-push-6 {
    left: 50%;
  }
  .ssa-ck-content .coh-col-sm-pull-6 {
    right: 50%;
  }
  .ssa-ck-content .coh-col-sm-offset-6 {
    margin-left: 50%;
  }
  .ssa-ck-content .coh-col-sm-push-5 {
    left: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-pull-5 {
    right: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-offset-5 {
    margin-left: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-push-4 {
    left: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-pull-4 {
    right: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-offset-4 {
    margin-left: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-push-3 {
    left: 25%;
  }
  .ssa-ck-content .coh-col-sm-pull-3 {
    right: 25%;
  }
  .ssa-ck-content .coh-col-sm-offset-3 {
    margin-left: 25%;
  }
  .ssa-ck-content .coh-col-sm-push-2 {
    left: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-pull-2 {
    right: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-sm-offset-2 {
    margin-left: 16.6666666667%;
  }
  .ssa-ck-content .coh-visible-sm {
    display: block;
  }
  .ssa-ck-content .coh-col-sm-push-1 {
    left: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-pull-1 {
    right: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-sm-offset-1 {
    margin-left: 8.3333333333%;
  }
  .ssa-ck-content .coh-hidden-sm {
    display: none;
  }
  .ssa-ck-content .coh-col-sm-push-0 {
    left: auto;
  }
  .ssa-ck-content .coh-col-sm-pull-0 {
    right: auto;
  }
  .ssa-ck-content .coh-col-sm-offset-0 {
    margin-left: 0;
  }
  .ssa-ck-content .coh-col-sm-push-1-5 {
    left: 20%;
  }
  .ssa-ck-content .coh-col-sm-pull-1-5 {
    right: 20%;
  }
  .ssa-ck-content .coh-col-sm-offset-1-5 {
    margin-left: 20%;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-col-ps {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .ssa-ck-content .coh-layout-col-ps {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .ssa-ck-content .coh-col-ps-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .ssa-ck-content .coh-layout-col-ps-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .ssa-ck-content .coh-col-ps-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-ps-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-ps-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .ssa-ck-content .coh-layout-col-ps-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .ssa-ck-content .coh-col-ps-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-ps-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-ps-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .ssa-ck-content .coh-layout-col-ps-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .ssa-ck-content .coh-col-ps-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-ps-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-ps-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .ssa-ck-content .coh-layout-col-ps-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .ssa-ck-content .coh-col-ps-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-ps-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-ps-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .ssa-ck-content .coh-layout-col-ps-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .ssa-ck-content .coh-col-ps-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .ssa-ck-content .coh-layout-col-ps-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-ps-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .ssa-ck-content .coh-col-ps-push-12 {
    left: 100%;
  }
  .ssa-ck-content .coh-col-ps-pull-12 {
    right: 100%;
  }
  .ssa-ck-content .coh-col-ps-offset-12 {
    margin-left: 100%;
  }
  .ssa-ck-content .coh-col-ps-push-11 {
    left: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-pull-11 {
    right: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-offset-11 {
    margin-left: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-push-10 {
    left: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-pull-10 {
    right: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-offset-10 {
    margin-left: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-push-9 {
    left: 75%;
  }
  .ssa-ck-content .coh-col-ps-pull-9 {
    right: 75%;
  }
  .ssa-ck-content .coh-col-ps-offset-9 {
    margin-left: 75%;
  }
  .ssa-ck-content .coh-col-ps-push-8 {
    left: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-pull-8 {
    right: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-offset-8 {
    margin-left: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-push-7 {
    left: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-pull-7 {
    right: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-offset-7 {
    margin-left: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-push-6 {
    left: 50%;
  }
  .ssa-ck-content .coh-col-ps-pull-6 {
    right: 50%;
  }
  .ssa-ck-content .coh-col-ps-offset-6 {
    margin-left: 50%;
  }
  .ssa-ck-content .coh-col-ps-push-5 {
    left: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-pull-5 {
    right: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-offset-5 {
    margin-left: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-push-4 {
    left: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-pull-4 {
    right: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-offset-4 {
    margin-left: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-push-3 {
    left: 25%;
  }
  .ssa-ck-content .coh-col-ps-pull-3 {
    right: 25%;
  }
  .ssa-ck-content .coh-col-ps-offset-3 {
    margin-left: 25%;
  }
  .ssa-ck-content .coh-col-ps-push-2 {
    left: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-pull-2 {
    right: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-ps-offset-2 {
    margin-left: 16.6666666667%;
  }
  .ssa-ck-content .coh-visible-ps {
    display: block;
  }
  .ssa-ck-content .coh-col-ps-push-1 {
    left: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-pull-1 {
    right: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-ps-offset-1 {
    margin-left: 8.3333333333%;
  }
  .ssa-ck-content .coh-hidden-ps {
    display: none;
  }
  .ssa-ck-content .coh-col-ps-push-0 {
    left: auto;
  }
  .ssa-ck-content .coh-col-ps-pull-0 {
    right: auto;
  }
  .ssa-ck-content .coh-col-ps-offset-0 {
    margin-left: 0;
  }
  .ssa-ck-content .coh-col-ps-push-1-5 {
    left: 20%;
  }
  .ssa-ck-content .coh-col-ps-pull-1-5 {
    right: 20%;
  }
  .ssa-ck-content .coh-col-ps-offset-1-5 {
    margin-left: 20%;
  }
}
@media (max-width: 564px) {
  .ssa-ck-content .coh-col-xs {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
  }
  .ssa-ck-content .coh-layout-col-xs {
    -webkit-flex-basis: 0;
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    opacity: 1;
  }
  .ssa-ck-content .coh-col-xs-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
  }
  .ssa-ck-content .coh-layout-col-xs-auto {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: 200px;
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-hidden {
    max-width: 200px;
    opacity: 0.5;
  }
  .ssa-ck-content .coh-col-xs-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-xs-1 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(8.3333333333% - 10px);
        -ms-flex: 0 0 calc(8.3333333333% - 10px);
            flex: 0 0 calc(8.3333333333% - 10px);
    max-width: -webkit-calc(8.3333333333% - 10px);
    max-width: calc(8.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-1.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 8.3333333333%;
        -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
    max-width: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-xs-2 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(16.6666666667% - 10px);
        -ms-flex: 0 0 calc(16.6666666667% - 10px);
            flex: 0 0 calc(16.6666666667% - 10px);
    max-width: -webkit-calc(16.6666666667% - 10px);
    max-width: calc(16.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-2.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 16.6666666667%;
        -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .ssa-ck-content .coh-layout-col-xs-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(25% - 10px);
        -ms-flex: 0 0 calc(25% - 10px);
            flex: 0 0 calc(25% - 10px);
    max-width: -webkit-calc(25% - 10px);
    max-width: calc(25% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-3.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
  }
  .ssa-ck-content .coh-col-xs-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-xs-4 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(33.3333333333% - 10px);
        -ms-flex: 0 0 calc(33.3333333333% - 10px);
            flex: 0 0 calc(33.3333333333% - 10px);
    max-width: -webkit-calc(33.3333333333% - 10px);
    max-width: calc(33.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-4.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 33.3333333333%;
        -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-xs-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(41.6666666667% - 10px);
        -ms-flex: 0 0 calc(41.6666666667% - 10px);
            flex: 0 0 calc(41.6666666667% - 10px);
    max-width: -webkit-calc(41.6666666667% - 10px);
    max-width: calc(41.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 41.6666666667%;
        -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
    max-width: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .ssa-ck-content .coh-layout-col-xs-6 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(50% - 10px);
        -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
    max-width: -webkit-calc(50% - 10px);
    max-width: calc(50% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-6.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
  .ssa-ck-content .coh-col-xs-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-xs-7 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(58.3333333333% - 10px);
        -ms-flex: 0 0 calc(58.3333333333% - 10px);
            flex: 0 0 calc(58.3333333333% - 10px);
    max-width: -webkit-calc(58.3333333333% - 10px);
    max-width: calc(58.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-7.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 58.3333333333%;
        -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
    max-width: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-xs-8 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(66.6666666667% - 10px);
        -ms-flex: 0 0 calc(66.6666666667% - 10px);
            flex: 0 0 calc(66.6666666667% - 10px);
    max-width: -webkit-calc(66.6666666667% - 10px);
    max-width: calc(66.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-8.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 66.6666666667%;
        -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .ssa-ck-content .coh-layout-col-xs-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(75% - 10px);
        -ms-flex: 0 0 calc(75% - 10px);
            flex: 0 0 calc(75% - 10px);
    max-width: -webkit-calc(75% - 10px);
    max-width: calc(75% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-9.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
  }
  .ssa-ck-content .coh-col-xs-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .ssa-ck-content .coh-layout-col-xs-10 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(83.3333333333% - 10px);
        -ms-flex: 0 0 calc(83.3333333333% - 10px);
            flex: 0 0 calc(83.3333333333% - 10px);
    max-width: -webkit-calc(83.3333333333% - 10px);
    max-width: calc(83.3333333333% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-10.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 83.3333333333%;
        -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
    max-width: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .ssa-ck-content .coh-layout-col-xs-11 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(91.6666666667% - 10px);
        -ms-flex: 0 0 calc(91.6666666667% - 10px);
            flex: 0 0 calc(91.6666666667% - 10px);
    max-width: -webkit-calc(91.6666666667% - 10px);
    max-width: calc(91.6666666667% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-11.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 91.6666666667%;
        -ms-flex: 0 0 91.6666666667%;
            flex: 0 0 91.6666666667%;
    max-width: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .ssa-ck-content .coh-layout-col-xs-12 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(100% - 10px);
        -ms-flex: 0 0 calc(100% - 10px);
            flex: 0 0 calc(100% - 10px);
    max-width: -webkit-calc(100% - 10px);
    max-width: calc(100% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-12.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
  .ssa-ck-content .coh-col-xs-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .ssa-ck-content .coh-layout-col-xs-1-5 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 -webkit-calc(20% - 10px);
        -ms-flex: 0 0 calc(20% - 10px);
            flex: 0 0 calc(20% - 10px);
    max-width: -webkit-calc(20% - 10px);
    max-width: calc(20% - 10px);
    opacity: 1;
  }
  .ssa-ck-content .coh-layout-col-xs-1-5.coh-layout-canvas-component-drop-zone {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 20%;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
  .ssa-ck-content .coh-col-xs-push-12 {
    left: 100%;
  }
  .ssa-ck-content .coh-col-xs-pull-12 {
    right: 100%;
  }
  .ssa-ck-content .coh-col-xs-offset-12 {
    margin-left: 100%;
  }
  .ssa-ck-content .coh-col-xs-push-11 {
    left: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-pull-11 {
    right: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-offset-11 {
    margin-left: 91.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-push-10 {
    left: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-pull-10 {
    right: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-offset-10 {
    margin-left: 83.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-push-9 {
    left: 75%;
  }
  .ssa-ck-content .coh-col-xs-pull-9 {
    right: 75%;
  }
  .ssa-ck-content .coh-col-xs-offset-9 {
    margin-left: 75%;
  }
  .ssa-ck-content .coh-col-xs-push-8 {
    left: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-pull-8 {
    right: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-offset-8 {
    margin-left: 66.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-push-7 {
    left: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-pull-7 {
    right: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-offset-7 {
    margin-left: 58.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-push-6 {
    left: 50%;
  }
  .ssa-ck-content .coh-col-xs-pull-6 {
    right: 50%;
  }
  .ssa-ck-content .coh-col-xs-offset-6 {
    margin-left: 50%;
  }
  .ssa-ck-content .coh-col-xs-push-5 {
    left: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-pull-5 {
    right: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-offset-5 {
    margin-left: 41.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-push-4 {
    left: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-pull-4 {
    right: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-offset-4 {
    margin-left: 33.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-push-3 {
    left: 25%;
  }
  .ssa-ck-content .coh-col-xs-pull-3 {
    right: 25%;
  }
  .ssa-ck-content .coh-col-xs-offset-3 {
    margin-left: 25%;
  }
  .ssa-ck-content .coh-col-xs-push-2 {
    left: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-pull-2 {
    right: 16.6666666667%;
  }
  .ssa-ck-content .coh-col-xs-offset-2 {
    margin-left: 16.6666666667%;
  }
  .ssa-ck-content .coh-visible-xs {
    display: block;
  }
  .ssa-ck-content .coh-col-xs-push-1 {
    left: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-pull-1 {
    right: 8.3333333333%;
  }
  .ssa-ck-content .coh-col-xs-offset-1 {
    margin-left: 8.3333333333%;
  }
  .ssa-ck-content .coh-hidden-xs {
    display: none;
  }
  .ssa-ck-content .coh-col-xs-push-0 {
    left: auto;
  }
  .ssa-ck-content .coh-col-xs-pull-0 {
    right: auto;
  }
  .ssa-ck-content .coh-col-xs-offset-0 {
    margin-left: 0;
  }
  .ssa-ck-content .coh-col-xs-push-1-5 {
    left: 20%;
  }
  .ssa-ck-content .coh-col-xs-pull-1-5 {
    right: 20%;
  }
  .ssa-ck-content .coh-col-xs-offset-1-5 {
    margin-left: 20%;
  }
}
.ssa-ck-content .coh-row-bleed-xl > .coh-row-inner {
  margin-right: 0;
  margin-left: 0;
}
.ssa-ck-content .coh-row-bleed-xl > .coh-row-inner > .coh-column {
  padding-right: 0;
  padding-left: 0;
}
.ssa-ck-content .coh-row-visible-xl {
  overflow: visible;
}
.ssa-ck-content .coh-row-hidden-xl {
  overflow-x: hidden;
  overflow-y: auto;
}
.ssa-ck-content .coh-row-xl > .coh-row-inner {
  margin-right: -1rem;
  margin-left: -1rem;
}
.ssa-ck-content .coh-row-xl > .coh-row-inner > .coh-column {
  padding-left: 1rem;
  padding-right: 1rem;
}
@media (max-width: 1599px) {
  .ssa-ck-content .coh-row-xl > .coh-row-inner {
    margin-right: -1rem;
    margin-left: -1rem;
  }
  .ssa-ck-content .coh-row-xl > .coh-row-inner > .coh-column {
    padding-left: 1rem;
    padding-right: 1rem;
  }
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-row-xl > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-xl > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-row-xl > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-xl > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-row-xl > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-xl > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .ssa-ck-content .coh-row-xl > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-xl > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1599px) {
  .ssa-ck-content .coh-row-bleed-lg > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .ssa-ck-content .coh-row-bleed-lg > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .ssa-ck-content .coh-row-visible-lg {
    overflow: visible;
  }
  .ssa-ck-content .coh-row-hidden-lg {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (max-width: 1599px) {
  .ssa-ck-content .coh-row-lg > .coh-row-inner {
    margin-right: -1rem;
    margin-left: -1rem;
  }
  .ssa-ck-content .coh-row-lg > .coh-row-inner > .coh-column {
    padding-left: 1rem;
    padding-right: 1rem;
  }
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-row-lg > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-lg > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-row-lg > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-lg > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-row-lg > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-lg > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .ssa-ck-content .coh-row-lg > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-lg > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-row-bleed-md > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .ssa-ck-content .coh-row-bleed-md > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .ssa-ck-content .coh-row-visible-md {
    overflow: visible;
  }
  .ssa-ck-content .coh-row-hidden-md {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-row-md > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-md > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-row-md > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-md > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-row-md > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-md > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .ssa-ck-content .coh-row-md > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-md > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-row-bleed-sm > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .ssa-ck-content .coh-row-bleed-sm > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .ssa-ck-content .coh-row-visible-sm {
    overflow: visible;
  }
  .ssa-ck-content .coh-row-hidden-sm {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-row-sm > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-sm > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-row-sm > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-sm > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .ssa-ck-content .coh-row-sm > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-sm > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-row-bleed-ps > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .ssa-ck-content .coh-row-bleed-ps > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .ssa-ck-content .coh-row-visible-ps {
    overflow: visible;
  }
  .ssa-ck-content .coh-row-hidden-ps {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-row-ps > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-ps > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .ssa-ck-content .coh-row-ps > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-ps > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .ssa-ck-content .coh-row-bleed-xs > .coh-row-inner {
    margin-right: 0;
    margin-left: 0;
  }
  .ssa-ck-content .coh-row-bleed-xs > .coh-row-inner > .coh-column {
    padding-right: 0;
    padding-left: 0;
  }
  .ssa-ck-content .coh-row-visible-xs {
    overflow: visible;
  }
  .ssa-ck-content .coh-row-hidden-xs {
    overflow-x: hidden;
    overflow-y: auto;
  }
}
@media (max-width: 564px) {
  .ssa-ck-content .coh-row-xs > .coh-row-inner {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .ssa-ck-content .coh-row-xs > .coh-row-inner > .coh-column {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
.ssa-ck-content :root {
  --ssa-default-font-settings-font-family: 'Roboto', sans-serif;
  --ssa-default-font-settings-color: rgb(0, 0, 0);
}
.ssa-ck-content {
  font-family: 'Roboto', sans-serif;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  color: rgb(0, 0, 0);
}
.ssa-ck-content :root {
  --ssa-base-unit-settings-font-size: 16px;
}
.ssa-ck-content {
  font-size: 16px;
}
.ssa-ck-content ul {
  margin-bottom: 1.5rem;
}
.ssa-ck-content ul.toolbar-menu li {
  margin: 0;
  list-style-type: none;
  font-weight: normal;
}
.ssa-ck-content ul.toolbar-menu li:before {
  content: normal;
}
.ssa-ck-content ul.contextual-links li {
  list-style-type: none;
  font-weight: normal;
}
.ssa-ck-content ul.contextual-links li:before {
  content: normal;
}
.ssa-ck-content ul.cke_panel_list li {
  list-style-type: none;
  font-weight: normal;
}
.ssa-ck-content ul.cke_panel_list li:before {
  content: normal;
}
.ssa-ck-content ul.dx8-tabs li {
  list-style-type: none;
  font-weight: normal;
}
.ssa-ck-content ul.dx8-tabs li:before {
  content: normal;
}
.ssa-ck-content ul li {
  line-height: 1.5;
  margin-bottom: 1rem;
  margin-left: 2rem;
  list-style-type: disc;
  list-style-position: outside;
}
.ssa-ck-content ul li ul {
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}
.ssa-ck-content ul li ul li {
  margin-left: 1rem;
  list-style-type: circle;
}
.ssa-ck-content p {
  font-size: 1rem;
  margin-bottom: 1.5rem;
  line-height: 1.5;
  font-weight: 400;
}
.ssa-ck-content ol {
  margin-bottom: 1.5rem;
}
.ssa-ck-content ol li {
  line-height: 1.5;
  margin-bottom: 1rem;
  margin-left: 2rem;
  font-weight: 400;
  list-style-type: decimal;
}
.ssa-ck-content ol li ol {
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}
.ssa-ck-content ol li ol li {
  margin-left: 1.5rem;
}
.ssa-ck-content a {
  color: rgb(38, 163, 221);
  -webkit-transition: color 300ms ease;
  transition: color 300ms ease;
}
.ssa-ck-content a:hover {
  color: rgb(112, 195, 233);
}
.ssa-ck-content h5 {
  font-size: 1rem;
  line-height: 1.25;
  margin-bottom: 0.5rem;
  font-weight: bold;
}
.ssa-ck-content h4 {
  font-size: 1.25rem;
  line-height: 1.25;
  margin-bottom: 1rem;
  font-weight: bold;
}
@media (max-width: 1169px) {
  .ssa-ck-content h4 {
    font-size: 1.125rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content h4 {
    font-size: 0.75rem;
    line-height: 1.4;
  }
}
.ssa-ck-content h3 {
  font-size: 1.5rem;
  line-height: 1.25;
  font-weight: bold;
  margin-bottom: 1.25rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content h3 {
    font-size: 1.375rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content h3 {
    font-size: 1.25rem;
  }
}
.ssa-ck-content h2 {
  font-weight: bold;
  font-size: 2rem;
  line-height: 1.25;
  margin-bottom: 1.5rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content h2 {
    font-size: 1.75rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content h2 {
    font-size: 1.5rem;
  }
}
.ssa-ck-content h1 {
  font-size: 3rem;
  line-height: 1.25;
  font-weight: bold;
  margin-bottom: 1.5rem;
}
@media (max-width: 1599px) {
  .ssa-ck-content h1 {
    font-size: 2.5rem;
  }
}
@media (max-width: 1169px) {
  .ssa-ck-content h1 {
    font-size: 2rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content h1 {
    font-size: 1.75rem;
  }
}
.ssa-ck-content body::-moz-selection {
  background-color: rgb(38, 163, 221);
  color: rgb(255, 255, 255);
}
.ssa-ck-content body::selection {
  background-color: rgb(38, 163, 221);
  color: rgb(255, 255, 255);
}
@media (max-width: 1023px) {
  .ssa-ck-content body.menu-active {
    overflow: hidden;
  }
}
.ssa-ck-content body img {
  max-width: 100%;
  height: auto;
}
.ssa-ck-content blockquote {
  font-size: 1.25rem;
  line-height: 1.5;
  margin-bottom: 1.5rem;
  padding-right: 2rem;
  padding-left: 2rem;
  border-left-width: 0.125rem;
  border-left-style: solid;
  border-left-color: rgb(38, 163, 221);
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  width: 100%;
}
@media (max-width: 1169px) {
  .ssa-ck-content blockquote {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
.ssa-ck-content blockquote:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f10d\";
  font-family: icomoon;
  font-size: 1.5rem;
  color: rgb(38, 163, 221);
  font-style: normal;
  padding-bottom: 0.5rem;
  display: block;
}
@media (max-width: 1169px) {
  .ssa-ck-content blockquote:before {
    font-size: 1.5rem;
  }
}
.ssa-ck-content blockquote p {
  font-size: 1.25rem;
}
.ssa-ck-content form > * {
  padding-top: 1rem;
  padding-bottom: 1rem;
}
.ssa-ck-content form label {
  font-weight: bold;
  margin-bottom: 0.5rem;
}
.ssa-ck-content form label.form-required:after {
  content: \"*\";
  margin-left: 0.25rem;
  color: rgb(255, 0, 0);
}
.ssa-ck-content form legend {
  font-weight: bold;
  margin-bottom: 0.5rem;
}
.ssa-ck-content form .form-item {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
.ssa-ck-content form .form-item.form-item-copy {
  padding-top: 0;
}
.ssa-ck-content form .form-type-checkbox {
  position: relative;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.ssa-ck-content form .form-type-checkbox + .form-type-checkbox {
  margin-top: 0.5rem;
}
.ssa-ck-content form .form-type-checkbox .form-checkbox:checked + label:after {
  opacity: 1;
}
.ssa-ck-content form .form-type-checkbox label {
  font-weight: normal;
  margin-bottom: 0;
}
.ssa-ck-content form .form-type-checkbox label:before {
  pointer-events: none;
  background-color: rgb(242, 242, 242);
  height: 1.625rem;
  width: 1.625rem;
  position: absolute;
  top: 50%;
  left: 0;
  border-width: 0.0625rem;
  border-style: solid;
  border-color: rgb(191, 191, 191);
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
  content: \"\";
}
.ssa-ck-content form .form-type-checkbox label:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  pointer-events: none;
  color: rgb(38, 163, 221);
  font-size: 1.25rem;
  height: 1.75rem;
  width: 1.75rem;
  position: absolute;
  top: 50%;
  left: 0;
  opacity: 0;
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
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
  content: \"\\f00c\";
  font-family: icomoon;
}
.ssa-ck-content form .form-checkbox {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  height: 1.75rem;
  width: 1.75rem;
  margin-right: 0.5rem;
  opacity: 0;
}
.ssa-ck-content form .form-type-radio {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
}
.ssa-ck-content form .form-type-radio + .form-type-radio {
  margin-top: 0.5rem;
}
.ssa-ck-content form .form-type-radio .form-radio:checked + label:after {
  opacity: 1;
}
.ssa-ck-content form .form-type-radio label {
  margin-bottom: 0;
  font-weight: normal;
}
.ssa-ck-content form .form-type-radio label:before {
  pointer-events: none;
  background-color: rgb(242, 242, 242);
  height: 1.625rem;
  width: 1.625rem;
  position: absolute;
  top: 0;
  left: 0;
  border-width: 0.0625rem;
  -webkit-border-radius: 50%;
          border-radius: 50%;
  border-style: solid;
  border-color: rgb(191, 191, 191);
  content: \"\";
}
.ssa-ck-content form .form-type-radio label:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  pointer-events: none;
  color: rgb(38, 163, 221);
  font-size: 1rem;
  height: 1.75rem;
  width: 1.75rem;
  position: absolute;
  top: 0;
  left: 0;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  opacity: 0;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  content: \"\\f111\";
  font-family: icomoon;
}
.ssa-ck-content form .form-radio {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  height: 1.75rem;
  width: 1.75rem;
  margin-right: 0.5rem;
  opacity: 0;
}
.ssa-ck-content form .form-type-select.form-item-field-multi-select-list label:before {
  content: normal;
}
.ssa-ck-content form .form-type-select.form-item-field-multi-select-list label:after {
  content: normal;
}
.ssa-ck-content form .form-type-select label:before {
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
  pointer-events: none;
  background-color: rgb(38, 163, 221);
  height: 3.125rem;
  width: 3.125rem;
  bottom: 0;
  right: 0;
  content: \"\";
}
.ssa-ck-content form .form-type-select label:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  pointer-events: none;
  color: rgb(255, 255, 255);
  font-size: 1.25rem;
  height: 3.125rem;
  width: 3.125rem;
  position: absolute;
  bottom: 0;
  right: 0;
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
  content: \"\\f078\";
  font-family: icomoon;
}
.ssa-ck-content form .form-select:not(.editor) {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  line-height: 1.5;
  background-color: rgb(242, 242, 242);
  padding: 0.75rem;
  border-width: 0.0625rem;
  border-style: solid;
  border-color: rgb(191, 191, 191);
}
.ssa-ck-content form .form-search {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  line-height: 1.5;
  background-color: rgb(242, 242, 242);
  padding: 0.75rem;
  border-width: 0.0625rem;
  border-style: solid;
  border-color: rgb(191, 191, 191);
}
.ssa-ck-content form .form-submit {
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  color: rgb(38, 163, 221);
  font-weight: bold;
  line-height: 1.25;
  font-size: 0.875rem;
  background-color: rgb(242, 242, 242);
  padding: 1rem;
  border-style: none;
}
.ssa-ck-content form .form-submit:hover {
  background-color: rgb(219, 219, 220);
}
.ssa-ck-content form .form-submit.button--primary {
  color: rgb(255, 255, 255);
  background-color: rgb(38, 163, 221);
}
.ssa-ck-content form .form-submit.button--primary:hover {
  background-color: rgb(26, 137, 201);
}
.ssa-ck-content form .form-text {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  line-height: 1.5;
  width: 100%;
  padding: 0.75rem;
  border-width: 0.0625rem;
  border-style: solid;
  border-color: rgb(191, 191, 191);
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content form .form-email {
  line-height: 1.5;
  background-color: rgb(242, 242, 242);
  width: 100%;
  padding: 0.75rem;
  border-width: 0.0625rem;
  border-style: solid;
  border-color: rgb(191, 191, 191);
}
.ssa-ck-content form .form-textarea {
  line-height: 1.5;
  background-color: rgb(242, 242, 242);
  width: 100%;
  padding: 0.75rem;
  border-width: 0.0625rem;
  border-style: solid;
  border-color: rgb(191, 191, 191);
}
.ssa-ck-content form .field--name-field-wysiwyg .form-type-select {
  position: static;
  display: block;
}
.ssa-ck-content form .field--name-field-wysiwyg .form-type-select label:before {
  content: normal;
}
.ssa-ck-content form .field--name-field-wysiwyg .form-type-select label:after {
  content: normal;
}
.ssa-ck-content form .webform-element-description {
  margin-top: 0.5rem;
  font-size: 0.75rem;
}
.ssa-ck-content .coh-style-slider-flex-layout .slick-track {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
.ssa-ck-content .coh-style-map-info-window p {
  font-size: 0.75rem;
  margin-bottom: 0.375rem;
  line-height: 1.25;
}
.ssa-ck-content .coh-style-tag {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
  font-weight: bold;
  -webkit-border-radius: 0.75rem;
          border-radius: 0.75rem;
  -webkit-transition: color 300ms ease, background-color 300ms ease;
  transition: color 300ms ease, background-color 300ms ease;
  height: 1.5rem;
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  background-color: rgb(242, 242, 242);
  margin-right: 0.75rem;
  color: rgb(72, 72, 72);
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-tag {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
    margin-right: 0.5rem;
  }
}
.ssa-ck-content .coh-style-tag:hover {
  background-color: rgb(38, 163, 221);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-focusable-content input:focus, .ssa-ck-content .coh-style-focusable-content select:focus, .ssa-ck-content .coh-style-focusable-content textarea:focus, .ssa-ck-content .coh-style-focusable-content button:focus, .ssa-ck-content .coh-style-focusable-content a:focus {
  -webkit-box-shadow: 0 0 0 0.1875rem rgb(255, 204, 78);
          box-shadow: 0 0 0 0.1875rem rgb(255, 204, 78);
}
.ssa-ck-content .coh-style-focusable-content .card-link:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
}
.ssa-ck-content .coh-style-focusable-content .card-link:focus:after {
  -webkit-box-shadow: 0 0 0 0.1875rem rgb(255, 204, 78);
          box-shadow: 0 0 0 0.1875rem rgb(255, 204, 78);
}
.ssa-ck-content .coh-style-header-light-theme {
  background-color: rgb(255, 255, 255);
  border-bottom-width: 0.0625rem;
  border-bottom-style: solid;
  border-bottom-color: rgb(219, 219, 220);
}
.ssa-ck-content .coh-style-header-light-theme .utilities-bar-horizontal {
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-style-header-light-theme .utilities-bar-horizontal .utilities-menu a {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-header-light-theme .utilities-bar-horizontal .utilities-menu a:hover {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-light-theme .utilities-bar-horizontal .social-links a {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-light-theme .utilities-bar-horizontal .social-links a:hover {
  color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-header-light-theme .utilities-bar-vertical {
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-style-header-light-theme .utilities-bar-vertical .utilities-menu a {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-header-light-theme .utilities-bar-vertical .utilities-menu a:hover {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-light-theme .utilities-bar-vertical .social-links {
  background-color: rgb(255, 255, 255);
  border-bottom-width: 0.0625rem;
  border-bottom-style: solid;
  border-bottom-color: rgb(219, 219, 220);
}
.ssa-ck-content .coh-style-header-light-theme .utilities-bar-vertical .social-links a {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-light-theme .utilities-bar-vertical .social-links a:hover {
  color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-header-light-theme .main-menu-toggle-button {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-header-light-theme .main-menu-toggle-button:hover {
  color: rgb(38, 163, 221);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-light-theme .main-menu-wrapper {
    background-color: rgb(255, 255, 255);
    -webkit-box-shadow: inset 0 0.0625rem 0 0 rgb(219, 219, 220);
            box-shadow: inset 0 0.0625rem 0 0 rgb(219, 219, 220);
  }
}
.ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-1 > li {
  -webkit-transition: 300ms ease-in-out box-shadow;
  transition: 300ms ease-in-out box-shadow;
  -webkit-box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
          box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-1 > li {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
.ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-1 > li:hover {
  -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-1 > li:hover {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
.ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-1 > li.is-expanded {
  -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-1 > li.is-expanded {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
.ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-1 > li.in-active-trail {
  -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-1 > li > a {
  color: rgb(0, 0, 0);
  -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-1 > li > a {
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
  }
}
.ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-1 > li > a:hover {
  color: rgb(38, 163, 221);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-1 > li > a:hover {
    border-bottom-color: rgb(38, 163, 221);
  }
}
.ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-1 > li > span {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-2-wrapper > .coh-container-boxed {
  background-color: rgb(242, 242, 242);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-2-wrapper > .coh-container-boxed {
    background-color: rgba(0, 0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-2 > li > a {
  color: rgb(0, 0, 0);
  -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  border-bottom-width: 0.0625rem;
  border-bottom-style: solid;
  border-bottom-color: rgb(219, 219, 220);
}
.ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-2 > li > a:hover {
  color: rgb(38, 163, 221);
  border-bottom-color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-3 > li > a {
  -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  color: rgb(0, 0, 0);
  border-bottom-width: 0.0625rem;
  border-bottom-style: solid;
  border-bottom-color: rgb(219, 219, 220);
}
.ssa-ck-content .coh-style-header-light-theme .main-menu .menu-level-3 > li > a:hover {
  color: rgb(38, 163, 221);
  border-bottom-color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-light-theme .search-toggle-button {
  -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
  transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
  color: rgb(255, 255, 255);
  background-color: rgb(219, 219, 220);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-light-theme .search-toggle-button {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-light-theme .search-toggle-button:hover {
  background-color: rgb(38, 163, 221);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-light-theme .search-toggle-button:hover {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(38, 163, 221);
  }
}
.ssa-ck-content .coh-style-header-light-theme .search-toggle-button.search-active {
  background-color: rgb(38, 163, 221);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-light-theme .search-toggle-button.search-active {
    background-color: rgba(0, 0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-light-theme .search-wrapper #block-searchform input[type=search] {
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-style-header-light-theme .search-wrapper #block-searchform input[type=submit] {
  color: rgba(0, 0, 0, 0);
}
.ssa-ck-content .coh-style-header-light-theme .search-wrapper #block-searchform .form-actions {
  -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
  transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
  color: rgb(0, 0, 0);
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-style-header-light-theme .search-wrapper #block-searchform .form-actions:hover {
  color: rgb(255, 255, 255);
  background-color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-dark-theme {
  background-color: rgb(34, 34, 34);
}
.ssa-ck-content .coh-style-header-dark-theme .utilities-bar-horizontal {
  background-color: rgb(50, 50, 50);
}
.ssa-ck-content .coh-style-header-dark-theme .utilities-bar-horizontal .utilities-menu a {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-header-dark-theme .utilities-bar-horizontal .utilities-menu a:hover {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-dark-theme .utilities-bar-horizontal .social-links a {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-dark-theme .utilities-bar-horizontal .social-links a:hover {
  color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-header-dark-theme .utilities-bar-vertical {
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-style-header-dark-theme .utilities-bar-vertical .utilities-menu a {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-header-dark-theme .utilities-bar-vertical .utilities-menu a:hover {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-dark-theme .utilities-bar-vertical .social-links {
  background-color: rgb(255, 255, 255);
  border-bottom-width: 0.0625rem;
  border-bottom-style: solid;
  border-bottom-color: rgb(219, 219, 220);
}
.ssa-ck-content .coh-style-header-dark-theme .utilities-bar-vertical .social-links a {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-dark-theme .utilities-bar-vertical .social-links a:hover {
  color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu-toggle-button {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu-toggle-button:hover {
  color: rgb(38, 163, 221);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-dark-theme .main-menu-wrapper {
    background-color: rgb(255, 255, 255);
  }
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-1 > li {
  -webkit-transition: 300ms ease-in-out box-shadow;
  transition: 300ms ease-in-out box-shadow;
  -webkit-box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
          box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-1 > li {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-1 > li:hover {
  -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-1 > li:hover {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-1 > li.is-expanded {
  -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-1 > li.is-expanded {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-1 > li.in-active-trail {
  -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-1 > li > a {
  color: rgb(255, 255, 255);
  -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-1 > li > a {
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
    color: rgb(0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-1 > li > a:hover {
  color: rgb(38, 163, 221);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-1 > li > a:hover {
    border-bottom-color: rgb(38, 163, 221);
  }
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-1 > li > span {
  color: rgb(255, 255, 255);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-1 > li > span {
    color: rgb(0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-2-wrapper > .coh-container-boxed {
  background-color: rgb(242, 242, 242);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-2-wrapper > .coh-container-boxed {
    background-color: rgba(0, 0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-2 > li > a {
  color: rgb(0, 0, 0);
  -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  border-bottom-width: 0.0625rem;
  border-bottom-style: solid;
  border-bottom-color: rgb(219, 219, 220);
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-2 > li > a:hover {
  color: rgb(38, 163, 221);
  border-bottom-color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-3 > li > a {
  -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  color: rgb(0, 0, 0);
  border-bottom-width: 0.0625rem;
  border-bottom-style: solid;
  border-bottom-color: rgb(219, 219, 220);
}
.ssa-ck-content .coh-style-header-dark-theme .main-menu .menu-level-3 > li > a:hover {
  color: rgb(38, 163, 221);
  border-bottom-color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-dark-theme .search-toggle-button {
  -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
  transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
  color: rgb(255, 255, 255);
  background-color: rgb(50, 50, 50);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-dark-theme .search-toggle-button {
    background-color: rgba(0, 0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-dark-theme .search-toggle-button:hover {
  background-color: rgb(38, 163, 221);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-dark-theme .search-toggle-button:hover {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(38, 163, 221);
  }
}
.ssa-ck-content .coh-style-header-dark-theme .search-toggle-button.search-active {
  background-color: rgb(38, 163, 221);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-dark-theme .search-toggle-button.search-active {
    background-color: rgba(0, 0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-dark-theme .search-wrapper #block-searchform input[type=search] {
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-style-header-dark-theme .search-wrapper #block-searchform input[type=submit] {
  color: rgba(0, 0, 0, 0);
}
.ssa-ck-content .coh-style-header-dark-theme .search-wrapper #block-searchform .form-actions {
  -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
  transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
  color: rgb(0, 0, 0);
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-style-header-dark-theme .search-wrapper #block-searchform .form-actions:hover {
  color: rgb(255, 255, 255);
  background-color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-contact-information {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 0;
}
.ssa-ck-content .coh-style-contact-information li {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 0.5rem;
  margin-left: 0;
  list-style-type: none;
  -webkit-box-align: start;
  -webkit-align-items: flex-start;
      -ms-flex-align: start;
          align-items: flex-start;
}
.ssa-ck-content .coh-style-contact-information li:before {
  width: 1rem;
  margin-right: 1rem;
}
.ssa-ck-content .coh-style-contact-information li.place-contact-name:before {
  line-height: 1.5;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f007\";
  font-family: icomoon;
}
.ssa-ck-content .coh-style-contact-information li.place-company:before {
  line-height: 1.5;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f1ad\";
  font-family: icomoon;
}
.ssa-ck-content .coh-style-contact-information li.place-address:before {
  line-height: 1.5;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f041\";
  font-family: icomoon;
}
.ssa-ck-content .coh-style-contact-information li.place-telephone:before {
  line-height: 1.5;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f098\";
  font-family: icomoon;
}
.ssa-ck-content .coh-style-contact-information li.place-email:before {
  line-height: 1.5;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f0e0\";
  font-family: icomoon;
}
.ssa-ck-content .coh-style-header-colored-theme {
  background-color: rgb(26, 137, 201);
}
.ssa-ck-content .coh-style-header-colored-theme .utilities-bar-horizontal {
  background-color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-colored-theme .utilities-bar-horizontal .utilities-menu a {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-header-colored-theme .utilities-bar-horizontal .utilities-menu a:hover {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-header-colored-theme .utilities-bar-horizontal .social-links a {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-header-colored-theme .utilities-bar-horizontal .social-links a:hover {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-header-colored-theme .utilities-bar-vertical {
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-style-header-colored-theme .utilities-bar-vertical .utilities-menu a {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-header-colored-theme .utilities-bar-vertical .utilities-menu a:hover {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-colored-theme .utilities-bar-vertical .social-links {
  background-color: rgb(255, 255, 255);
  border-bottom-width: 0.0625rem;
  border-bottom-style: solid;
  border-bottom-color: rgb(219, 219, 220);
}
.ssa-ck-content .coh-style-header-colored-theme .utilities-bar-vertical .social-links a {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-colored-theme .utilities-bar-vertical .social-links a:hover {
  color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu-toggle-button {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu-toggle-button:hover {
  color: rgb(0, 0, 0);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-colored-theme .main-menu-wrapper {
    background-color: rgb(255, 255, 255);
  }
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li {
  -webkit-transition: 300ms ease-in-out box-shadow;
  transition: 300ms ease-in-out box-shadow;
  -webkit-box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
          box-shadow: inset 0 0 0 0 rgba(0, 0, 0, 0);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li:hover {
  -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(0, 0, 0);
          box-shadow: inset 0 -0.1875rem 0 0 rgb(0, 0, 0);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li:hover {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li.is-expanded {
  -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(0, 0, 0);
          box-shadow: inset 0 -0.1875rem 0 0 rgb(0, 0, 0);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li.is-expanded {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li.in-active-trail {
  -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(0, 0, 0);
          box-shadow: inset 0 -0.1875rem 0 0 rgb(0, 0, 0);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li.in-active-trail {
    -webkit-box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
            box-shadow: inset 0 -0.1875rem 0 0 rgb(38, 163, 221);
  }
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li > a {
  color: rgb(255, 255, 255);
  -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li > a {
    border-bottom-width: 0.0625rem;
    border-bottom-style: solid;
    border-bottom-color: rgb(219, 219, 220);
    color: rgb(0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li > a:hover {
  color: rgb(0, 0, 0);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li > a:hover {
    color: rgb(38, 163, 221);
    border-bottom-color: rgb(38, 163, 221);
  }
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li > span {
  color: rgb(255, 255, 255);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-1 > li > span {
    color: rgb(0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-2-wrapper > .coh-container-boxed {
  background-color: rgb(242, 242, 242);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-2-wrapper > .coh-container-boxed {
    background-color: rgba(0, 0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-2 > li > a {
  color: rgb(0, 0, 0);
  -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  border-bottom-width: 0.0625rem;
  border-bottom-style: solid;
  border-bottom-color: rgb(219, 219, 220);
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-2 > li > a:hover {
  color: rgb(38, 163, 221);
  border-bottom-color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-3 > li > a {
  -webkit-transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  transition: color 300ms ease-in-out, 300ms ease-in-out border-color;
  color: rgb(0, 0, 0);
  border-bottom-width: 0.0625rem;
  border-bottom-style: solid;
  border-bottom-color: rgb(219, 219, 220);
}
.ssa-ck-content .coh-style-header-colored-theme .main-menu .menu-level-3 > li > a:hover {
  color: rgb(38, 163, 221);
  border-bottom-color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-header-colored-theme .search-toggle-button {
  -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
  transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
  color: rgb(255, 255, 255);
  background-color: rgb(38, 163, 221);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-colored-theme .search-toggle-button {
    background-color: rgba(0, 0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-colored-theme .search-toggle-button:hover {
  background-color: rgb(0, 0, 0);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-colored-theme .search-toggle-button:hover {
    background-color: rgba(0, 0, 0, 0);
    color: rgb(0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-colored-theme .search-toggle-button.search-active {
  background-color: rgb(0, 0, 0);
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-header-colored-theme .search-toggle-button.search-active {
    background-color: rgba(0, 0, 0, 0);
  }
}
.ssa-ck-content .coh-style-header-colored-theme .search-wrapper #block-searchform input[type=search] {
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-style-header-colored-theme .search-wrapper #block-searchform input[type=submit] {
  color: rgba(0, 0, 0, 0);
}
.ssa-ck-content .coh-style-header-colored-theme .search-wrapper #block-searchform .form-actions {
  -webkit-transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
  transition: color 300ms ease-in-out, background-color 300ms ease-in-out;
  color: rgb(0, 0, 0);
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-style-header-colored-theme .search-wrapper #block-searchform .form-actions:hover {
  color: rgb(255, 255, 255);
  background-color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-footer-light-theme {
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-style-footer-light-theme .footer-menu a {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-footer-light-theme .footer-menu a:hover {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-footer-light-theme .social-links a {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-footer-light-theme .social-links a:hover {
  color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-footer-light-theme .secondary-row {
  background-color: rgb(219, 219, 220);
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-footer-colored-theme {
  background-color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-footer-colored-theme .footer-menu a {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-footer-colored-theme .footer-menu a:hover {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-footer-colored-theme .social-links a {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-footer-colored-theme .social-links a:hover {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-footer-colored-theme .secondary-row {
  background-color: rgb(26, 137, 201);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-footer-dark-theme {
  background-color: rgb(34, 34, 34);
}
.ssa-ck-content .coh-style-footer-dark-theme .footer-menu a {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-footer-dark-theme .footer-menu a:hover {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-footer-dark-theme .social-links a {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-footer-dark-theme .social-links a:hover {
  color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-footer-dark-theme .secondary-row {
  background-color: rgb(50, 50, 50);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-search-block {
  margin-bottom: 1rem;
}
.ssa-ck-content .coh-style-search-block .search-block-form {
  padding: 0;
}
.ssa-ck-content .coh-style-search-block form {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
.ssa-ck-content .coh-style-search-block #search-block-form .form-type-search {
  margin-right: 0;
}
.ssa-ck-content .coh-style-search-block .form-type-search, .ssa-ck-content .coh-style-search-block .form-type-search-api-autocomplete {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  padding: 0;
}
.ssa-ck-content .coh-style-search-block .form-search, .ssa-ck-content .coh-style-search-block .form-text.form-autocomplete {
  height: 3.5rem;
  width: 100%;
  background-color: rgb(242, 242, 242);
  padding-right: 1.5rem;
  padding-left: 1.5rem;
  border-style: none;
  color: rgb(72, 72, 72);
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
.ssa-ck-content .coh-style-search-block .form-actions {
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
  background-color: rgb(242, 242, 242);
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
  padding: 0;
}
.ssa-ck-content .coh-style-search-block .form-actions:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  pointer-events: none;
  content: \"\\f002\";
  font-family: icomoon;
  position: absolute;
  font-size: 1.5rem;
  color: rgb(0, 0, 0);
  -webkit-transition: color 300ms ease;
  transition: color 300ms ease;
}
.ssa-ck-content .coh-style-search-block .form-actions:hover {
  background-color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-search-block .form-actions:hover:before {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-search-block .button.form-submit {
  height: 3.5rem;
  width: 3.5rem;
  padding: 0;
  background-color: rgba(0, 0, 0, 0);
  border-style: none;
  color: rgba(0, 0, 0, 0);
}
.ssa-ck-content .coh-style-search-block .button.form-submit:hover {
  background-color: rgba(0, 0, 0, 0);
  color: rgba(0, 0, 0, 0);
}
.ssa-ck-content .coh-style-text-color-light-background {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-text-color-colored-background {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-text-color-dark-background {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-fake-link-with-icon {
  color: rgb(38, 163, 221);
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  font-size: 0.875rem;
  line-height: 1.25;
  font-weight: bold;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-transition: color 300ms ease;
  transition: color 300ms ease;
}
.ssa-ck-content .coh-style-fake-link-with-icon:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f054\";
  font-family: icomoon;
  padding-left: 0.375rem;
  font-size: 0.625rem;
}
.ssa-ck-content .coh-style-fake-button {
  background-color: rgb(38, 163, 221);
  color: rgb(255, 255, 255);
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding-top: 1rem;
  padding-right: 1rem;
  padding-bottom: 1rem;
  padding-left: 1rem;
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
  font-size: 0.875rem;
  line-height: 1rem;
  font-weight: bold;
  margin-top: 0.5rem;
  margin-bottom: 0.5rem;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.ssa-ck-content .coh-style-fake-button:hover {
  background-color: rgb(112, 195, 233);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-fake-button:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f054\";
  font-family: icomoon;
  font-size: 0.75rem;
  padding-left: 0.5rem;
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title.is-active a {
  background-color: rgba(0, 0, 0, 0);
  -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title.is-active a:after {
  -webkit-transform: rotateZ(180deg);
      -ms-transform: rotate(180deg);
          transform: rotateZ(180deg);
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title a {
  background-color: rgba(0, 0, 0, 0);
  color: rgb(255, 255, 255);
  -webkit-box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
          box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
  -webkit-transition: 200ms ease box-shadow, background-color 300ms ease;
  transition: 200ms ease box-shadow, background-color 300ms ease;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  font-size: 0.875rem;
  line-height: 1rem;
  padding-top: 1.25rem;
  padding-right: 2rem;
  padding-bottom: 1.25rem;
  padding-left: 2rem;
  font-weight: bold;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title a {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title a {
    padding-top: 1rem;
    padding-right: 1.5rem;
    padding-bottom: 1rem;
    padding-left: 1.5rem;
  }
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title a:hover {
  background-color: rgba(0, 0, 0, 0);
  color: rgb(255, 255, 255);
  -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-title a:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-left: auto;
  content: \"\\f078\";
  font-family: icomoon;
  -webkit-transform: rotateZ(0deg);
      -ms-transform: rotate(0deg);
          transform: rotateZ(0deg);
  -webkit-transition: 300ms ease transform;
  transition: 300ms ease transform;
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav {
  -webkit-box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
          box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav li {
  margin-bottom: 0;
  margin-left: 0;
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav li.is-active a {
  -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
  background-color: rgba(0, 0, 0, 0);
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav li a {
  -webkit-box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
          box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
  -webkit-transition: 200ms ease box-shadow;
  transition: 200ms ease box-shadow;
  color: rgb(255, 255, 255);
  background-color: rgba(0, 0, 0, 0);
  font-weight: bold;
  font-size: 0.875rem;
  line-height: 1rem;
  padding-top: 1.25rem;
  padding-right: 2rem;
  padding-bottom: 1.25rem;
  padding-left: 2rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav li a {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav li a {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-light-text .coh-accordion-tabs-nav li a:hover {
  -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
  color: rgb(255, 255, 255);
  background-color: rgba(0, 0, 0, 0);
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title.is-active a {
  background-color: rgba(0, 0, 0, 0);
  -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title.is-active a:after {
  -webkit-transform: rotateZ(180deg);
      -ms-transform: rotate(180deg);
          transform: rotateZ(180deg);
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title a {
  background-color: rgba(0, 0, 0, 0);
  color: rgb(0, 0, 0);
  -webkit-box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
          box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
  -webkit-transition: 200ms ease box-shadow, background-color 300ms ease;
  transition: 200ms ease box-shadow, background-color 300ms ease;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  font-size: 0.875rem;
  line-height: 1rem;
  padding-top: 1.25rem;
  padding-right: 2rem;
  padding-bottom: 1.25rem;
  padding-left: 2rem;
  font-weight: bold;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title a {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title a {
    padding-top: 1rem;
    padding-right: 1.5rem;
    padding-bottom: 1rem;
    padding-left: 1.5rem;
  }
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title a:hover {
  background-color: rgba(0, 0, 0, 0);
  color: rgb(0, 0, 0);
  -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-title a:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-left: auto;
  content: \"\\f078\";
  font-family: icomoon;
  -webkit-transform: rotateZ(0deg);
      -ms-transform: rotate(0deg);
          transform: rotateZ(0deg);
  -webkit-transition: 300ms ease transform;
  transition: 300ms ease transform;
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav {
  -webkit-box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
          box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav li {
  margin-bottom: 0;
  margin-left: 0;
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav li.is-active a {
  -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
  background-color: rgba(0, 0, 0, 0);
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav li a {
  -webkit-box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
          box-shadow: inset 0 -0.0625rem 0 0 rgb(219, 219, 220);
  -webkit-transition: 200ms ease box-shadow;
  transition: 200ms ease box-shadow;
  color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0);
  font-weight: bold;
  font-size: 0.875rem;
  line-height: 1rem;
  padding-top: 1.25rem;
  padding-right: 2rem;
  padding-bottom: 1.25rem;
  padding-left: 2rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav li a {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav li a {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
}
.ssa-ck-content .coh-style-accordion-tabs-keyline-dark-text .coh-accordion-tabs-nav li a:hover {
  -webkit-box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
          box-shadow: inset 0 -0.125rem 0 0 rgb(38, 163, 221);
  color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0);
}
.ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-title {
  margin-bottom: 0.0625rem;
}
.ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-title.is-active a {
  background-color: rgb(26, 137, 201);
}
.ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-title.is-active a:after {
  -webkit-transform: rotateZ(180deg);
      -ms-transform: rotate(180deg);
          transform: rotateZ(180deg);
}
.ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-title.is-active a:hover {
  background-color: rgb(26, 137, 201);
}
.ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-title a {
  background-color: rgb(38, 163, 221);
  color: rgb(255, 255, 255);
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  font-size: 0.875rem;
  line-height: 1rem;
  padding-top: 1.25rem;
  padding-right: 2rem;
  padding-bottom: 1.25rem;
  padding-left: 2rem;
  font-weight: bold;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-title a {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-title a {
    padding-top: 1rem;
    padding-right: 1.5rem;
    padding-bottom: 1rem;
    padding-left: 1.5rem;
  }
}
.ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-title a:hover {
  background-color: rgb(112, 195, 233);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-title a:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-left: auto;
  content: \"\\f078\";
  font-family: icomoon;
  -webkit-transform: rotateZ(0deg);
      -ms-transform: rotate(0deg);
          transform: rotateZ(0deg);
  -webkit-transition: 300ms ease transform;
  transition: 300ms ease transform;
}
.ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li {
  margin-bottom: 0;
  margin-left: 0;
}
.ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li.is-active a {
  background-color: rgb(26, 137, 201);
}
.ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li.is-active a:hover {
  background-color: rgb(26, 137, 201);
}
.ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li a {
  -webkit-transition: background-color 200ms ease;
  transition: background-color 200ms ease;
  color: rgb(255, 255, 255);
  background-color: rgb(38, 163, 221);
  font-weight: bold;
  font-size: 0.875rem;
  line-height: 1rem;
  padding-top: 1.25rem;
  padding-right: 2rem;
  padding-bottom: 1.25rem;
  padding-left: 2rem;
  margin-right: 0.0625rem;
  margin-bottom: 0.0625rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li a {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li a {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
}
.ssa-ck-content .coh-style-accordion-tabs-solid .coh-accordion-tabs-nav li a:hover {
  color: rgb(255, 255, 255);
  background-color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-paragraph-small {
  font-size: 0.75rem;
}
.ssa-ck-content .coh-style-modal-close-button-light, .ssa-ck-content .coh-style-modal-close-button-dark, .ssa-ck-content .coh-style-modal-close-button-color {
  height: 3rem;
  width: 3rem;
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
  color: rgb(38, 163, 221);
  font-size: 1.5rem;
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-style-modal-close-button-light:before, .ssa-ck-content .coh-style-modal-close-button-dark:before, .ssa-ck-content .coh-style-modal-close-button-color:before {
  content: \"✕\";
}
.ssa-ck-content .coh-style-modal-close-button-light:hover, .ssa-ck-content .coh-style-modal-close-button-dark:hover, .ssa-ck-content .coh-style-modal-close-button-color:hover {
  color: rgb(26, 137, 201);
  background-color: rgb(219, 219, 220);
}
.ssa-ck-content .coh-style-modal-close-button-color {
  color: rgb(255, 255, 255);
  background-color: rgb(38, 163, 221);
  -webkit-transition: background-color 200ms ease;
  transition: background-color 200ms ease;
}
.ssa-ck-content .coh-style-modal-close-button-color:hover {
  background-color: rgb(112, 195, 233);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-modal-close-button-dark {
  color: rgb(255, 255, 255);
  background-color: rgb(0, 0, 0);
  -webkit-transition: background-color 200ms ease;
  transition: background-color 200ms ease;
}
.ssa-ck-content .coh-style-modal-close-button-dark:hover {
  background-color: rgb(72, 72, 72);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-slider-navigation-left, .ssa-ck-content .coh-style-slider-navigation-right {
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  height: 3.5rem;
  width: 3rem;
  background-color: rgba(0, 0, 0, 0.25);
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-slider-navigation-left, .ssa-ck-content .coh-style-slider-navigation-right {
    width: 2rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-slider-navigation-left, .ssa-ck-content .coh-style-slider-navigation-right {
    width: 1.5rem;
  }
}
.ssa-ck-content .coh-style-slider-navigation-left:before, .ssa-ck-content .coh-style-slider-navigation-right:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f053\";
  font-family: icomoon;
  color: rgb(255, 255, 255);
  font-size: 1rem;
  -webkit-transition: color 300ms ease;
  transition: color 300ms ease;
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-slider-navigation-left:before, .ssa-ck-content .coh-style-slider-navigation-right:before {
    font-size: 0.75rem;
  }
}
.ssa-ck-content .coh-style-slider-navigation-left:hover, .ssa-ck-content .coh-style-slider-navigation-right:hover {
  background-color: rgba(0, 0, 0, 0.5);
}
.ssa-ck-content .coh-style-slider-navigation-right:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f054\";
  font-family: icomoon;
}
.ssa-ck-content .coh-style-modal-open-button-light, .ssa-ck-content .coh-style-modal-open-button-color, .ssa-ck-content .coh-style-modal-open-button-dark {
  background-color: rgb(242, 242, 242);
  padding-top: 1rem;
  padding-right: 1rem;
  padding-bottom: 1rem;
  padding-left: 1rem;
  font-size: 0.875rem;
  line-height: 1.25;
  font-weight: bold;
  color: rgb(38, 163, 221);
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
}
.ssa-ck-content .coh-style-modal-open-button-light:hover, .ssa-ck-content .coh-style-modal-open-button-color:hover, .ssa-ck-content .coh-style-modal-open-button-dark:hover {
  background-color: rgb(219, 219, 220);
  color: rgb(26, 137, 201);
}
.ssa-ck-content .coh-style-modal-open-button-dark {
  background-color: rgb(0, 0, 0);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-modal-open-button-dark:hover {
  background-color: rgb(72, 72, 72);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-modal-open-button-color {
  background-color: rgb(38, 163, 221);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-modal-open-button-color:hover {
  background-color: rgb(112, 195, 233);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-dark-background {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-dark-background:hover .fake-link {
  color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-card-text-dark-background:hover .fake-button {
  background-color: rgb(112, 195, 233);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-dark-background a {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-dark-background .fake-link {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-card-text-dark-background .fake-button {
  background-color: rgb(38, 163, 221);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-dark-background .card-date {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-dark-background .card-tag {
  color: rgb(255, 255, 255);
  background-color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-card-text-dark-background .card-tag:hover {
  color: rgb(255, 255, 255);
  background-color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-card-text-dark-background .card-person {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-dark-background .card-person:hover {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-card-text-dark-background .card-place {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-dark-background .card-place:hover {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-card-text-dark-background .card-link:hover {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-card-text-light-background {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-card-text-light-background:hover .fake-link {
  color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-card-text-light-background:hover .fake-button {
  background-color: rgb(112, 195, 233);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-light-background a {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-card-text-light-background .fake-link {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-card-text-light-background .fake-button {
  background-color: rgb(38, 163, 221);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-light-background .card-date {
  color: rgb(72, 72, 72);
}
.ssa-ck-content .coh-style-card-text-light-background .card-tag {
  color: rgb(72, 72, 72);
  background-color: rgb(242, 242, 242);
}
.ssa-ck-content .coh-style-card-text-light-background .card-tag:hover {
  background-color: rgb(38, 163, 221);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-light-background .card-person {
  color: rgb(72, 72, 72);
}
.ssa-ck-content .coh-style-card-text-light-background .card-person:hover {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-card-text-light-background .card-place {
  color: rgb(72, 72, 72);
}
.ssa-ck-content .coh-style-card-text-light-background .card-place:hover {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-card-text-light-background .card-link:hover {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-read-more-button-light {
  background-color: rgb(242, 242, 242);
  padding-top: 1rem;
  padding-right: 1rem;
  padding-bottom: 1rem;
  padding-left: 1rem;
  font-size: 0.875rem;
  line-height: 1.25;
  font-weight: bold;
  color: rgb(38, 163, 221);
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.ssa-ck-content .coh-style-read-more-button-light:hover {
  background-color: rgb(219, 219, 220);
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-read-more-button-light:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f078\";
  font-family: icomoon;
  font-size: 0.75rem;
  padding-left: 0.5rem;
  margin-left: auto;
}
.ssa-ck-content .is-expanded.coh-style-read-more-button-light:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f077\";
  font-family: icomoon;
}
.ssa-ck-content .coh-style-read-more-button-dark {
  background-color: rgb(0, 0, 0);
  padding-top: 1rem;
  padding-right: 1rem;
  padding-bottom: 1rem;
  padding-left: 1rem;
  font-size: 0.875rem;
  line-height: 1.25;
  font-weight: bold;
  color: rgb(255, 255, 255);
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.ssa-ck-content .coh-style-read-more-button-dark:hover {
  background-color: rgb(72, 72, 72);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-read-more-button-dark:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f078\";
  font-family: icomoon;
  font-size: 0.75rem;
  padding-left: 0.5rem;
  margin-left: auto;
}
.ssa-ck-content .is-expanded.coh-style-read-more-button-dark:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f077\";
  font-family: icomoon;
}
.ssa-ck-content .coh-style-card-text-colored-background {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-colored-background:hover .fake-link {
  color: rgb(72, 72, 72);
}
.ssa-ck-content .coh-style-card-text-colored-background:hover .fake-button {
  background-color: rgb(72, 72, 72);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-colored-background a {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-colored-background .fake-link {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-card-text-colored-background .fake-button {
  background-color: rgb(0, 0, 0);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-colored-background .card-date {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-colored-background .card-tag {
  color: rgb(255, 255, 255);
  background-color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-card-text-colored-background .card-tag:hover {
  color: rgb(255, 255, 255);
  background-color: rgb(72, 72, 72);
}
.ssa-ck-content .coh-style-card-text-colored-background .card-person {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-colored-background .card-person:hover {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-card-text-colored-background .card-place {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-colored-background .card-place:hover {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-card-text-colored-background .card-link {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-card-text-colored-background .card-link:hover {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-read-more-button-color {
  background-color: rgb(38, 163, 221);
  padding-top: 1rem;
  padding-right: 1rem;
  padding-bottom: 1rem;
  padding-left: 1rem;
  font-size: 0.875rem;
  line-height: 1.25;
  font-weight: bold;
  color: rgb(255, 255, 255);
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.ssa-ck-content .coh-style-read-more-button-color:hover {
  background-color: rgb(112, 195, 233);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-read-more-button-color:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f078\";
  font-family: icomoon;
  font-size: 0.75rem;
  padding-left: 0.5rem;
  margin-left: auto;
}
.ssa-ck-content .is-expanded.coh-style-read-more-button-color:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f077\";
  font-family: icomoon;
}
.ssa-ck-content .coh-style-read-more {
  padding-top: 0.5rem;
  padding-right: 1.25rem;
  padding-bottom: 0.5rem;
  font-size: 0.875rem;
  line-height: 1.25;
  font-weight: bold;
  color: rgb(38, 163, 221);
  -webkit-transition: color 300ms ease;
  transition: color 300ms ease;
}
.ssa-ck-content .coh-style-read-more:hover {
  color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-read-more:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f078\";
  font-family: icomoon;
  font-size: 0.75rem;
  padding-left: 0.25rem;
}
.ssa-ck-content .is-expanded.coh-style-read-more:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f077\";
  font-family: icomoon;
}
.ssa-ck-content .coh-style-heading-xl {
  font-size: 5rem;
  line-height: 1.25;
  font-weight: bold;
  margin-bottom: 1.5rem;
}
@media (max-width: 1599px) {
  .ssa-ck-content .coh-style-heading-xl {
    font-size: 4.5rem;
  }
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-heading-xl {
    font-size: 4rem;
  }
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-heading-xl {
    font-size: 3.5rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-heading-xl {
    font-size: 3rem;
  }
}
@media (max-width: 564px) {
  .ssa-ck-content .coh-style-heading-xl {
    font-size: 2.5rem;
  }
}
.ssa-ck-content .coh-style-heading-1-size {
  font-size: 3rem;
  line-height: 1.25;
  font-weight: bold;
  margin-bottom: 1.5rem;
}
@media (max-width: 1599px) {
  .ssa-ck-content .coh-style-heading-1-size {
    font-size: 2.5rem;
  }
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-heading-1-size {
    font-size: 2rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-heading-1-size {
    font-size: 1.75rem;
  }
}
.ssa-ck-content .coh-style-heading-2-size {
  font-weight: bold;
  font-size: 2rem;
  line-height: 1.25;
  margin-bottom: 1.5rem;
}
@media (max-width: 1599px) {
  .ssa-ck-content .coh-style-heading-2-size {
    font-size: 1.75rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-heading-2-size {
    font-size: 1.5rem;
  }
}
.ssa-ck-content .coh-style-heading-3-size {
  font-size: 1.5rem;
  line-height: 1.25;
  font-weight: bold;
  margin-bottom: 1.25rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-heading-3-size {
    font-size: 1.375rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-heading-3-size {
    font-size: 1.25rem;
  }
}
.ssa-ck-content .coh-style-heading-4-size {
  font-size: 1.25rem;
  font-weight: bold;
  margin-bottom: 1.375rem;
  line-height: 1.5;
  margin-bottom: 1rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-heading-4-size {
    font-size: 1.125rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-heading-4-size {
    margin-bottom: 1.25rem;
  }
}
.ssa-ck-content .coh-style-heading-5-size {
  font-size: 1rem;
  margin-bottom: 1.375rem;
  line-height: 1.25;
  margin-bottom: 0.5rem;
  font-weight: bold;
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-heading-5-size {
    margin-bottom: 1.25rem;
  }
}
.ssa-ck-content .coh-style-pre-heading, .ssa-ck-content .coh-style-pre-heading-light, .ssa-ck-content .coh-style-pre-heading-blue, .ssa-ck-content .coh-style-pre-heading-dark {
  font-size: 0.875rem;
  font-weight: bold;
  line-height: 1.25;
  margin-bottom: 1rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-pre-heading, .ssa-ck-content .coh-style-pre-heading-light, .ssa-ck-content .coh-style-pre-heading-blue, .ssa-ck-content .coh-style-pre-heading-dark {
    margin-bottom: 0.5rem;
  }
}
.ssa-ck-content .coh-style-pre-heading-dark {
  color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-pre-heading-blue {
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-pre-heading-light {
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-multi-column-two-column {
  -webkit-column-count: 2;
     -moz-column-count: 2;
          column-count: 2;
  -webkit-column-gap: 2rem;
     -moz-column-gap: 2rem;
          column-gap: 2rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-multi-column-two-column {
    -webkit-column-gap: 1.5rem;
       -moz-column-gap: 1.5rem;
            column-gap: 1.5rem;
    -webkit-column-count: 2;
       -moz-column-count: 2;
            column-count: 2;
  }
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-multi-column-two-column {
    -webkit-column-count: 1;
       -moz-column-count: 1;
            column-count: 1;
    -webkit-column-gap: 0;
       -moz-column-gap: 0;
            column-gap: 0;
  }
}
.ssa-ck-content .coh-style-multi-column-three-column {
  -webkit-column-count: 3;
     -moz-column-count: 3;
          column-count: 3;
  -webkit-column-gap: 2rem;
     -moz-column-gap: 2rem;
          column-gap: 2rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-multi-column-three-column {
    -webkit-column-gap: 1.5rem;
       -moz-column-gap: 1.5rem;
            column-gap: 1.5rem;
    -webkit-column-count: 2;
       -moz-column-count: 2;
            column-count: 2;
  }
}
@media (max-width: 1023px) {
  .ssa-ck-content .coh-style-multi-column-three-column {
    -webkit-column-count: 1;
       -moz-column-count: 1;
            column-count: 1;
    -webkit-column-gap: 0;
       -moz-column-gap: 0;
            column-gap: 0;
  }
}
.ssa-ck-content .coh-style-margin-bottom-small {
  margin-bottom: 2rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-margin-bottom-small {
    margin-bottom: 1.5rem;
  }
}
.ssa-ck-content .coh-style-padding-top-bottom-large {
  padding-top: 6rem;
  padding-bottom: 6rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-padding-top-bottom-large {
    padding-top: 4.5rem;
    padding-bottom: 4.5rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-padding-top-bottom-large {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }
}
.ssa-ck-content .coh-style-padding-top-bottom-small {
  padding-top: 2rem;
  padding-bottom: 2rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-padding-top-bottom-small {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
}
.ssa-ck-content .coh-style-padding-top-large {
  padding-top: 6rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-padding-top-large {
    padding-top: 4.5rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-padding-top-large {
    padding-top: 3rem;
  }
}
.ssa-ck-content .coh-style-padding-top-small {
  padding-top: 2rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-padding-top-small {
    padding-top: 1.5rem;
  }
}
.ssa-ck-content .coh-style-padding-bottom-large {
  padding-bottom: 6rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-padding-bottom-large {
    padding-bottom: 4.5rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-padding-bottom-large {
    padding-bottom: 3rem;
  }
}
.ssa-ck-content .coh-style-view-pagination {
  margin-top: 2.5rem;
  margin-bottom: 2.5rem;
}
.ssa-ck-content .coh-style-view-pagination .pager__item {
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  list-style-type: none;
  margin-right: 0.25rem;
  margin-left: 0.25rem;
}
.ssa-ck-content .coh-style-view-pagination .pager__item a {
  background-color: rgb(255, 255, 255);
  display: block;
  min-height: 2rem;
  min-width: 2rem;
  -webkit-border-radius: 1rem;
          border-radius: 1rem;
  line-height: 2rem;
  text-align: center;
  -webkit-transition: background-color 200ms ease;
  transition: background-color 200ms ease;
}
.ssa-ck-content .coh-style-view-pagination .pager__item a:hover {
  background-color: rgb(38, 163, 221);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-view-pagination .is-active a {
  background-color: rgb(0, 0, 0);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-view-pagination .is-active a:hover {
  background-color: rgb(0, 0, 0);
}
.ssa-ck-content .coh-style-view-pagination .pager__item--first a {
  background-color: rgba(0, 0, 0, 0);
}
.ssa-ck-content .coh-style-view-pagination .pager__item--first a:hover {
  background-color: rgba(0, 0, 0, 0);
  color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-view-pagination .pager__item--last a {
  background-color: rgba(0, 0, 0, 0);
}
.ssa-ck-content .coh-style-view-pagination .pager__item--last a:hover {
  background-color: rgba(0, 0, 0, 0);
  color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-padding-bottom-small {
  padding-bottom: 2rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-padding-bottom-small {
    padding-bottom: 1.5rem;
  }
}
.ssa-ck-content .coh-style-padding-left-right-large {
  padding-right: 6rem;
  padding-left: 6rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-padding-left-right-large {
    padding-right: 4.5rem;
    padding-left: 4.5rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-padding-left-right-large {
    padding-right: 3rem;
    padding-left: 3rem;
  }
}
.ssa-ck-content .coh-style-padding-left-right-small {
  padding-right: 2rem;
  padding-left: 2rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-padding-left-right-small {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}
.ssa-ck-content .coh-style-padding-small {
  padding: 2rem;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-padding-small {
    padding: 1.5rem;
  }
}
.ssa-ck-content .coh-style-link-with-icon {
  color: rgb(38, 163, 221);
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  font-size: 0.875rem;
  line-height: 1.25;
  font-weight: bold;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.ssa-ck-content .coh-style-link-with-icon:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f054\";
  font-family: icomoon;
  padding-left: 0.375rem;
  font-size: 0.625rem;
}
.ssa-ck-content .coh-style-link-button-dark {
  background-color: rgb(0, 0, 0);
  color: rgb(255, 255, 255);
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding-top: 1rem;
  padding-right: 1rem;
  padding-bottom: 1rem;
  padding-left: 1rem;
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
  font-size: 0.875rem;
  line-height: 1.25;
  font-weight: bold;
  margin-top: 0.5rem;
  margin-bottom: 0.5rem;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.ssa-ck-content .coh-style-link-button-dark:hover {
  background-color: rgb(72, 72, 72);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-link-button-dark:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f054\";
  font-family: icomoon;
  font-size: 0.75rem;
  padding-left: 0.5rem;
  margin-left: auto;
}
.ssa-ck-content .coh-style-link-button-light {
  background-color: rgb(242, 242, 242);
  color: rgb(38, 163, 221);
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding-top: 1rem;
  padding-right: 1rem;
  padding-bottom: 1rem;
  padding-left: 1rem;
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
  font-size: 0.875rem;
  line-height: 1.25;
  font-weight: bold;
  margin-top: 0.5rem;
  margin-bottom: 0.5rem;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.ssa-ck-content .coh-style-link-button-light:hover {
  background-color: rgb(219, 219, 220);
  color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-link-button-light:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f054\";
  font-family: icomoon;
  font-size: 0.75rem;
  padding-left: 0.5rem;
  margin-left: auto;
}
.ssa-ck-content .coh-style-link-button-color {
  background-color: rgb(38, 163, 221);
  color: rgb(255, 255, 255);
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding-top: 1rem;
  padding-right: 1rem;
  padding-bottom: 1rem;
  padding-left: 1rem;
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
  font-size: 0.875rem;
  line-height: 1.25;
  font-weight: bold;
  margin-top: 0.5rem;
  margin-bottom: 0.5rem;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.ssa-ck-content .coh-style-link-button-color:hover {
  background-color: rgb(112, 195, 233);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-link-button-color:after {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f054\";
  font-family: icomoon;
  font-size: 0.75rem;
  padding-left: 0.5rem;
  margin-left: auto;
}
.ssa-ck-content .coh-style-breadcrumbs {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}
.ssa-ck-content .coh-style-breadcrumbs li {
  display: inline-block;
  margin-top: 0;
  margin-bottom: 0;
  margin-left: 0;
}
.ssa-ck-content .coh-style-breadcrumbs li:before {
  content: normal;
}
.ssa-ck-content .coh-style-breadcrumbs li:after {
  content: \"/\";
  font-size: 0.75rem;
  padding-right: 0.375rem;
  padding-left: 0.375rem;
  color: rgb(38, 163, 221);
  font-weight: 700;
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-breadcrumbs li:after {
    padding-right: 0.25rem;
    padding-left: 0.25rem;
  }
}
.ssa-ck-content .coh-style-breadcrumbs li a {
  font-size: 0.875rem;
  font-weight: bold;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-breadcrumbs li a {
    font-size: 0.75rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-breadcrumbs li a {
    font-size: 0.625rem;
  }
}
.ssa-ck-content .coh-style-video .mejs__layers .mejs__overlay.mejs__overlay-play .mejs__overlay-button {
  background-color: rgb(38, 163, 221);
  -webkit-border-radius: 50%;
          border-radius: 50%;
  position: relative;
  -webkit-transition: background-color 300ms ease-in-out;
  transition: background-color 300ms ease-in-out;
  background-image: none;
}
.ssa-ck-content .coh-style-video .mejs__layers .mejs__overlay.mejs__overlay-play .mejs__overlay-button:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f04b\";
  font-family: icomoon;
  color: rgb(255, 255, 255);
  font-size: 1.5rem;
  position: absolute;
  top: 50%;
  left: 55%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.ssa-ck-content .coh-style-video .mejs__layers .mejs__overlay.mejs__overlay-play .mejs__overlay-button:hover {
  background-color: rgb(26, 137, 201);
}
.ssa-ck-content .coh-style-video .mejs__layers .mejs__overlay .mejs__overlay-loading .mejs__overlay-loading-bg-img {
  background: none;
  border-width: 0.625rem;
  -webkit-border-radius: 3.125rem;
          border-radius: 3.125rem;
  border-style: solid;
  border-top-color: rgba(0, 0, 0, 0.2);
  border-bottom-color: rgba(0, 0, 0, 0.2);
  border-left-color: rgb(38, 163, 221);
  border-right-color: rgba(0, 0, 0, 0.2);
}
.ssa-ck-content .coh-style-video .mejs__controls {
  z-index: 2;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  background-color: rgb(38, 163, 221);
  background-image: none;
  padding: 0;
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__button {
  line-height: normal;
  height: 2.5rem;
  width: 2.5rem;
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__button.mejs__play button:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f04b\";
  font-family: icomoon;
  font-size: 1rem;
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__button.mejs__pause button:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f04c\";
  font-family: icomoon;
  font-size: 1rem;
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__button.mejs__replay button:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f01e\";
  font-family: icomoon;
  font-size: 1rem;
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__button.mejs__mute button:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f026\";
  font-family: icomoon;
  font-size: 1.25rem;
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__button.mejs__unmute button:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f028\";
  font-family: icomoon;
  font-size: 1.25rem;
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__button.mejs__fullscreen-button.mejs__unfullscreen button:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f065\";
  font-family: icomoon;
  font-size: 1rem;
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__button.mejs__fullscreen-button button:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f065\";
  font-family: icomoon;
  font-size: 1rem;
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__button button {
  color: rgb(255, 255, 255);
  font-size: 1.875rem;
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
  height: 2.5rem;
  width: 2.5rem;
  background-image: none;
  background-color: rgba(0, 0, 0, 0);
  -webkit-transition: background-color 300ms ease-in-out;
  transition: background-color 300ms ease-in-out;
  margin: 0;
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__button button:hover {
  background-color: rgb(112, 195, 233);
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__button .mejs__volume-slider {
  background-color: rgb(38, 163, 221);
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__button .mejs__volume-slider .mejs__volume-total .mejs__volume-handle {
  background-color: rgb(26, 137, 201);
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__time {
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
  color: rgb(255, 255, 255);
  height: 2.5rem;
  width: 2.5rem;
  font-size: 0.75rem;
  padding: 0;
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__time-rail {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  height: 2.5rem;
  padding: 0;
  margin: 0;
}
.ssa-ck-content .coh-style-video .mejs__controls .mejs__time-rail .mejs__time-total {
  margin: 0;
}
.ssa-ck-content .coh-style-paragraph-extra-large {
  font-size: 3rem;
  font-weight: bold;
  margin-bottom: 0;
  line-height: 1.25;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-paragraph-extra-large {
    font-size: 2.5rem;
  }
}
@media (max-width: 767px) {
  .ssa-ck-content .coh-style-paragraph-extra-large {
    font-size: 2rem;
  }
}
.ssa-ck-content .coh-style-paragraph-large {
  font-size: 1.5rem;
  line-height: 1.5;
}
@media (max-width: 1169px) {
  .ssa-ck-content .coh-style-paragraph-large {
    font-size: 1.25rem;
  }
}
.ssa-ck-content .coh-style-tick-list {
  margin-bottom: 0;
}
.ssa-ck-content .coh-style-tick-list li {
  list-style-type: none;
  margin-bottom: 1rem;
  margin-left: 0;
  font-size: 1rem;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -webkit-align-items: start;
      -ms-flex-align: start;
          align-items: start;
}
.ssa-ck-content .coh-style-tick-list li:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f00c\";
  font-family: icomoon;
  color: rgb(255, 255, 255);
  margin-top: 0.1875rem;
  margin-right: 0.5rem;
  background-color: rgb(38, 163, 221);
  height: 1rem;
  width: 1rem;
  -webkit-border-radius: 0.5rem;
          border-radius: 0.5rem;
  font-size: 0.625rem;
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
  -webkit-flex-shrink: 0;
      -ms-flex-negative: 0;
          flex-shrink: 0;
}
.ssa-ck-content .coh-style-social-icon {
  list-style-type: none;
  margin-bottom: 0;
  margin-left: 0;
  display: inline-block;
}
.ssa-ck-content .coh-style-social-icon a {
  background-color: rgb(38, 163, 221);
  height: 2rem;
  width: 2rem;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-border-radius: 1rem;
          border-radius: 1rem;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  margin-right: 0.25rem;
  margin-left: 0.25rem;
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
}
.ssa-ck-content .coh-style-social-icon a:before {
  line-height: 1.0;
  font-weight: normal;
  text-transform: none;
  speak: none;
  font-variant: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: \"\\f09a\";
  font-family: icomoon;
  color: rgb(255, 255, 255);
  font-size: 1rem;
}
.ssa-ck-content .coh-style-social-icon a:hover {
  background-color: rgb(112, 195, 233);
  color: rgb(255, 255, 255);
}
.ssa-ck-content .coh-style-slider-pagination {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.ssa-ck-content .coh-style-slider-pagination li {
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-bottom: 0;
  margin-left: 0;
}
.ssa-ck-content .coh-style-slider-pagination li:before {
  content: normal;
}
.ssa-ck-content .coh-style-slider-pagination li.slick-active button {
  background-color: rgb(26, 137, 201);
  height: 0.625rem;
  width: 0.625rem;
  -webkit-border-radius: 0.3125rem;
          border-radius: 0.3125rem;
}
.ssa-ck-content .coh-style-slider-pagination li button {
  background-color: rgb(38, 163, 221);
  height: 0.375rem;
  width: 0.375rem;
  -webkit-border-radius: 0.25rem;
          border-radius: 0.25rem;
  margin-right: 0.25rem;
  margin-left: 0.25rem;
  -webkit-transition: background-color 300ms ease;
  transition: background-color 300ms ease;
}
.ssa-ck-content .coh-style-slider-pagination li button:hover {
  background-color: rgb(112, 195, 233);
}

";
    }

    public function getTemplateName()
    {
        return "__string_template__8b537ff486ca271a939231d17e5b64cc";
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8b537ff486ca271a939231d17e5b64cc", "");
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
