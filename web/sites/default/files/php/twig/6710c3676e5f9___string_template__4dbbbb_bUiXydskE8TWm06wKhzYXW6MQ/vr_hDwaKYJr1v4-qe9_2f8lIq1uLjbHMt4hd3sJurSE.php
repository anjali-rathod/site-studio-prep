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

/* __string_template__4dbbbbacff5c91ca7ae81fb82aa8cfe2 */
class __TwigTemplate_21321b2cba20a2766ae82e5c29b7e166 extends Template
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
        echo ".slick-slider {
  position: relative;
  display: block;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  -ms-touch-action: pan-y;
      touch-action: pan-y;
  -webkit-tap-highlight-color: transparent;
}
.slick-sr-only {
  border: 0;
  clip: rect(1px, 1px, 1px, 1px);
  -webkit-clip-path: inset(50%);
  clip-path: inset(50%);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
  white-space: nowrap;
}
.slick-list {
  position: relative;
  display: block;
  margin: 0;
  padding: 0;
}
.slick-list:focus {
  outline: none;
}
.slick-list.dragging {
  cursor: hand;
}
.slick-slider .slick-track,
.slick-slider .slick-list {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.slick-track {
  position: relative;
  top: 0;
  left: 0;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.slick-track:before, .slick-track:after {
  content: \"\";
  display: table;
}
.slick-track:after {
  clear: both;
}
.slick-loading .slick-track {
  visibility: hidden;
}
.slick-slide {
  float: left;
  display: none;
}
[dir=rtl] .slick-slide {
  float: right;
}
.slick-slide.slick-loading img {
  display: none;
}
.slick-slide.dragging img {
  pointer-events: none;
}
.slick-initialized .slick-slide {
  display: block;
}
.slick-loading .slick-slide {
  visibility: hidden;
}
.slick-vertical .slick-slide {
  display: block;
  height: auto;
  border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
  display: none;
}
.coh-slider-container {
  position: relative;
}
.coh-slider-container-mid {
  overflow: hidden;
  position: relative;
}
.coh-slider-container-inner {
  overflow: hidden;
  visibility: hidden;
}
.coh-slider-container-inner.slick-initialized {
  visibility: visible;
}
.coh-slider-container-boxed {
  margin: 0 auto;
  max-width: 84rem;
}
@media (max-width: 1599px) {
  .coh-slider-container-boxed {
    max-width: none;
    margin-left: 4rem;
    margin-right: 4rem;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-boxed {
    max-width: none;
    margin-left: 3rem;
    margin-right: 3rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-boxed {
    max-width: none;
    margin-left: 3rem;
    margin-right: 3rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-boxed {
    max-width: none;
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-boxed {
    max-width: none;
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }
}
.coh-slider-container-inner > .slick-list {
  margin-right: -1rem;
  margin-left: -1rem;
}
@media (max-width: 1599px) {
  .coh-slider-container-inner > .slick-list {
    margin-right: -1rem;
    margin-left: -1rem;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
}
.coh-slider-container > .coh-slider-nav-top:before, .coh-slider-container > .coh-slider-nav-top:after,
.coh-slider-container > .coh-slider-nav-bottom:before,
.coh-slider-container > .coh-slider-nav-bottom:after {
  clear: both;
  content: \" \";
  display: table;
}
.coh-slider-container .coh-slider-item {
  display: block;
}
.coh-slider-container .coh-slider-item {
  padding-left: 1rem;
  padding-right: 1rem;
}
@media (max-width: 1599px) {
  .coh-slider-container .coh-slider-item {
    padding-left: 1rem;
    padding-right: 1rem;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container .coh-slider-item {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container .coh-slider-item {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container .coh-slider-item {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container .coh-slider-item {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
.coh-slider-container-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
  margin-right: 0;
  margin-left: 0;
}
.coh-slider-container-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
  padding-right: 0;
  padding-left: 0;
}
.coh-slider-container-overflow-visible-xl .coh-slider-container-inner,
.coh-slider-container-overflow-visible-xl .slick-list {
  overflow: visible;
}
.coh-slider-container-overflow-hidden-xl .coh-slider-container-inner,
.coh-slider-container-overflow-hidden-xl .slick-list {
  overflow: hidden;
}
.coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
  margin-right: -1rem;
  margin-left: -1rem;
}
.coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
  padding-left: 1rem;
  padding-right: 1rem;
}
@media (max-width: 1599px) {
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -1rem;
    margin-left: -1rem;
  }
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 1rem;
    padding-right: 1rem;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1599px) {
  .coh-slider-container-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-slider-container-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-slider-container-overflow-visible-lg .coh-slider-container-inner,
  .coh-slider-container-overflow-visible-lg .slick-list {
    overflow: visible;
  }
  .coh-slider-container-overflow-hidden-lg .coh-slider-container-inner,
  .coh-slider-container-overflow-hidden-lg .slick-list {
    overflow: hidden;
  }
}
@media (max-width: 1599px) {
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -1rem;
    margin-left: -1rem;
  }
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 1rem;
    padding-right: 1rem;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-slider-container-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-slider-container-overflow-visible-md .coh-slider-container-inner,
  .coh-slider-container-overflow-visible-md .slick-list {
    overflow: visible;
  }
  .coh-slider-container-overflow-hidden-md .coh-slider-container-inner,
  .coh-slider-container-overflow-hidden-md .slick-list {
    overflow: hidden;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-slider-container-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-slider-container-overflow-visible-sm .coh-slider-container-inner,
  .coh-slider-container-overflow-visible-sm .slick-list {
    overflow: visible;
  }
  .coh-slider-container-overflow-hidden-sm .coh-slider-container-inner,
  .coh-slider-container-overflow-hidden-sm .slick-list {
    overflow: hidden;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-no-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-no-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-no-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-bleed-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-slider-container-bleed-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-slider-container-overflow-visible-ps .coh-slider-container-inner,
  .coh-slider-container-overflow-visible-ps .slick-list {
    overflow: visible;
  }
  .coh-slider-container-overflow-hidden-ps .coh-slider-container-inner,
  .coh-slider-container-overflow-hidden-ps .slick-list {
    overflow: hidden;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-no-bleed-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-no-bleed-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-bleed-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: 0;
    margin-left: 0;
  }
  .coh-slider-container-bleed-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-right: 0;
    padding-left: 0;
  }
  .coh-slider-container-overflow-visible-xs .coh-slider-container-inner,
  .coh-slider-container-overflow-visible-xs .slick-list {
    overflow: visible;
  }
  .coh-slider-container-overflow-hidden-xs .coh-slider-container-inner,
  .coh-slider-container-overflow-hidden-xs .slick-list {
    overflow: hidden;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-no-bleed-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-list {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
  }
  .coh-slider-container-no-bleed-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-slide {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
}
.coh-slider-container-nav-outside-top-left-right-xl > .coh-slider-nav-top .slick-prev {
  float: left;
}
[dir=rtl] .coh-slider-container-nav-outside-top-left-right-xl > .coh-slider-nav-top .slick-prev {
  float: right;
}
.coh-slider-container-nav-outside-top-left-right-xl > .coh-slider-nav-top .slick-next {
  float: right;
}
[dir=rtl] .coh-slider-container-nav-outside-top-left-right-xl > .coh-slider-nav-top .slick-next {
  float: left;
}
.coh-slider-container-nav-outside-middle-left-right-xl > .coh-slider-container-mid .slick-arrow {
  position: absolute;
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 1;
}
.coh-slider-container-nav-outside-middle-left-right-xl > .coh-slider-container-mid .slick-prev {
  right: auto;
  left: 0;
}
[dir=rtl] .coh-slider-container-nav-outside-middle-left-right-xl > .coh-slider-container-mid .slick-prev {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-outside-middle-left-right-xl > .coh-slider-container-mid .slick-next {
  right: 0;
  left: auto;
}
[dir=rtl] .coh-slider-container-nav-outside-middle-left-right-xl > .coh-slider-container-mid .slick-next {
  right: auto;
  left: 0;
}
.coh-slider-container-nav-outside-bottom-left-right-xl > .coh-slider-nav-bottom .slick-prev {
  float: left;
}
[dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-xl > .coh-slider-nav-bottom .slick-prev {
  float: right;
}
.coh-slider-container-nav-outside-bottom-left-right-xl > .coh-slider-nav-bottom .slick-next {
  float: right;
}
[dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-xl > .coh-slider-nav-bottom .slick-next {
  float: left;
}
.coh-slider-container-nav-outside-left-top-bottom-xl > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-middle-top-bottom-xl > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-right-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  position: relative;
}
.coh-slider-container-nav-outside-left-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  right: auto;
  left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-outside-left-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-outside-middle-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  right: auto;
  left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
}
[dir=rtl] .coh-slider-container-nav-outside-middle-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  right: 50%;
  left: auto;
}
.coh-slider-container-nav-outside-right-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  right: auto;
  left: 100%;
  -webkit-transform: translateX(-100%);
      -ms-transform: translateX(-100%);
          transform: translateX(-100%);
}
[dir=rtl] .coh-slider-container-nav-outside-right-top-bottom-xl > .coh-slider-container-mid .slick-arrow {
  right: 100%;
  left: auto;
}
.coh-slider-container-nav-outside-top-left-xl > .coh-slider-nav-top .slick-prev,
.coh-slider-container-nav-outside-top-left-xl > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-middle-xl > .coh-slider-nav-top .slick-prev,
.coh-slider-container-nav-outside-top-middle-xl > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-right-xl > .coh-slider-nav-top .slick-prev,
.coh-slider-container-nav-outside-top-right-xl > .coh-slider-nav-top .slick-next {
  float: none;
}
.coh-slider-container-nav-outside-top-left-xl > .coh-slider-nav-top {
  text-align: left;
}
[dir=rtl] .coh-slider-container-nav-outside-top-left-xl > .coh-slider-nav-top {
  text-align: right;
}
.coh-slider-container-nav-outside-top-middle-xl > .coh-slider-nav-top {
  text-align: center;
}
.coh-slider-container-nav-outside-top-right-xl > .coh-slider-nav-top {
  text-align: right;
}
[dir=rtl] .coh-slider-container-nav-outside-top-right-xl > .coh-slider-nav-top {
  text-align: left;
}
.coh-slider-container-nav-outside-bottom-left-xl > .coh-slider-nav-bottom .slick-prev,
.coh-slider-container-nav-outside-bottom-left-xl > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-middle-xl > .coh-slider-nav-bottom .slick-prev,
.coh-slider-container-nav-outside-bottom-middle-xl > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-right-xl > .coh-slider-nav-bottom .slick-prev,
.coh-slider-container-nav-outside-bottom-right-xl > .coh-slider-nav-bottom .slick-next {
  float: none;
}
.coh-slider-container-nav-outside-bottom-left-xl > .coh-slider-nav-bottom {
  text-align: left;
}
[dir=rtl] .coh-slider-container-nav-outside-bottom-left-xl > .coh-slider-nav-bottom {
  text-align: right;
}
.coh-slider-container-nav-outside-bottom-middle-xl > .coh-slider-nav-bottom {
  text-align: center;
}
.coh-slider-container-nav-outside-bottom-right-xl > .coh-slider-nav-bottom {
  text-align: right;
}
[dir=rtl] .coh-slider-container-nav-outside-bottom-right-xl > .coh-slider-nav-bottom {
  text-align: left;
}
.coh-slider-container-nav-inside-top-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  width: 100%;
}
.coh-slider-container-nav-inside-top-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
  position: absolute;
  top: 0;
  bottom: auto;
  -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
          transform: translateY(0);
  z-index: 1;
}
.coh-slider-container-nav-inside-top-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, .coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
  right: auto;
  left: 0;
}
[dir=rtl] .coh-slider-container-nav-inside-top-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-inside-top-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, .coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
  right: 0;
  left: auto;
}
[dir=rtl] .coh-slider-container-nav-inside-top-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
  right: auto;
  left: 0;
}
.coh-slider-container-nav-inside-middle-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
}
.coh-slider-container-nav-inside-bottom-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  width: 100%;
}
.coh-slider-container-nav-inside-bottom-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
  position: absolute;
  top: auto;
  bottom: 0;
  z-index: 1;
}
.coh-slider-container-nav-inside-bottom-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
  right: auto;
  left: 0;
}
[dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-inside-bottom-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
  right: 0;
  left: auto;
}
[dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
  right: auto;
  left: 0;
}
.coh-slider-container-nav-inside-left-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-middle-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-right-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  position: absolute;
  z-index: 1;
}
.coh-slider-container-nav-inside-left-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-middle-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-right-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev {
  top: 0;
  bottom: auto;
}
.coh-slider-container-nav-inside-left-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-middle-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-right-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next {
  top: auto;
  bottom: 0;
}
.coh-slider-container-nav-inside-left-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  right: auto;
  left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-inside-left-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  right: 0;
  left: 0;
}
.coh-slider-container-nav-inside-middle-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  right: auto;
  left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
}
[dir=rtl] .coh-slider-container-nav-inside-middle-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  right: 50%;
  left: auto;
}
.coh-slider-container-nav-inside-right-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  right: 0;
  left: auto;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-inside-right-top-bottom-xl > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
  right: auto;
  left: 0;
}
.coh-slider-container-nav-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  position: absolute;
  top: 0;
  bottom: auto;
  z-index: 1;
  width: auto;
}
.coh-slider-container-nav-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
  position: static;
}
.coh-slider-container-nav-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: auto;
  left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: auto;
  left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
}
[dir=rtl] .coh-slider-container-nav-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: 50%;
  left: auto;
}
.coh-slider-container-nav-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: 0;
  left: auto;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: auto;
  left: 0;
}
.coh-slider-container-nav-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  position: absolute;
  top: auto;
  bottom: 0;
  z-index: 1;
  width: auto;
}
.coh-slider-container-nav-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
  position: static;
}
.coh-slider-container-nav-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  right: auto;
  left: 0;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  right: auto;
  left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
}
[dir=rtl] .coh-slider-container-nav-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  right: 50%;
  left: auto;
}
.coh-slider-container-nav-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  right: 0;
  left: auto;
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
}
[dir=rtl] .coh-slider-container-nav-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
  right: auto;
  left: 0;
}
.coh-slider-container-nav-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  position: absolute;
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 1;
  width: auto;
}
.coh-slider-container-nav-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
  position: static;
}
.coh-slider-container-nav-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: auto;
  left: 0;
}
[dir=rtl] .coh-slider-container-nav-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: 0;
  left: auto;
}
.coh-slider-container-nav-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: 0;
  left: auto;
}
[dir=rtl] .coh-slider-container-nav-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
  right: auto;
  left: 0;
}
@media (max-width: 1599px) {
  .coh-slider-container-nav-outside-top-left-right-lg > .coh-slider-nav-top .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-lg > .coh-slider-nav-top .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-top-left-right-lg > .coh-slider-nav-top .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-lg > .coh-slider-nav-top .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-middle-left-right-lg > .coh-slider-container-mid .slick-arrow {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
  }
  .coh-slider-container-nav-outside-middle-left-right-lg > .coh-slider-container-mid .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-lg > .coh-slider-container-mid .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-left-right-lg > .coh-slider-container-mid .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-lg > .coh-slider-container-mid .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-outside-bottom-left-right-lg > .coh-slider-nav-bottom .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-lg > .coh-slider-nav-bottom .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-bottom-left-right-lg > .coh-slider-nav-bottom .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-lg > .coh-slider-nav-bottom .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-left-top-bottom-lg > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-middle-top-bottom-lg > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-right-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    position: relative;
  }
  .coh-slider-container-nav-outside-left-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-outside-left-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-outside-right-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-right-top-bottom-lg > .coh-slider-container-mid .slick-arrow {
    right: 100%;
    left: auto;
  }
  .coh-slider-container-nav-outside-top-left-lg > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-left-lg > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-middle-lg > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-middle-lg > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-right-lg > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-right-lg > .coh-slider-nav-top .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-top-left-lg > .coh-slider-nav-top {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-lg > .coh-slider-nav-top {
    text-align: right;
  }
  .coh-slider-container-nav-outside-top-middle-lg > .coh-slider-nav-top {
    text-align: center;
  }
  .coh-slider-container-nav-outside-top-right-lg > .coh-slider-nav-top {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-right-lg > .coh-slider-nav-top {
    text-align: left;
  }
  .coh-slider-container-nav-outside-bottom-left-lg > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-left-lg > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-middle-lg > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-middle-lg > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-right-lg > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-right-lg > .coh-slider-nav-bottom .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-bottom-left-lg > .coh-slider-nav-bottom {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-lg > .coh-slider-nav-bottom {
    text-align: right;
  }
  .coh-slider-container-nav-outside-bottom-middle-lg > .coh-slider-nav-bottom {
    text-align: center;
  }
  .coh-slider-container-nav-outside-bottom-right-lg > .coh-slider-nav-bottom {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-right-lg > .coh-slider-nav-bottom {
    text-align: left;
  }
  .coh-slider-container-nav-inside-top-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    width: 100%;
  }
  .coh-slider-container-nav-inside-top-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: absolute;
    top: 0;
    bottom: auto;
    -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
            transform: translateY(0);
    z-index: 1;
  }
  .coh-slider-container-nav-inside-top-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  .coh-slider-container-nav-inside-bottom-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    width: 100%;
  }
  .coh-slider-container-nav-inside-bottom-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-bottom-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-middle-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-right-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    position: absolute;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-left-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-middle-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-right-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev {
    top: 0;
    bottom: auto;
  }
  .coh-slider-container-nav-inside-left-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-middle-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-right-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next {
    top: auto;
    bottom: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-left-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-right-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-right-top-bottom-lg > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 0;
    bottom: auto;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-nav-outside-top-left-right-md > .coh-slider-nav-top .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-md > .coh-slider-nav-top .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-top-left-right-md > .coh-slider-nav-top .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-md > .coh-slider-nav-top .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-middle-left-right-md > .coh-slider-container-mid .slick-arrow {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
  }
  .coh-slider-container-nav-outside-middle-left-right-md > .coh-slider-container-mid .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-md > .coh-slider-container-mid .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-left-right-md > .coh-slider-container-mid .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-md > .coh-slider-container-mid .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-outside-bottom-left-right-md > .coh-slider-nav-bottom .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-md > .coh-slider-nav-bottom .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-bottom-left-right-md > .coh-slider-nav-bottom .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-md > .coh-slider-nav-bottom .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-left-top-bottom-md > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-middle-top-bottom-md > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-right-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    position: relative;
  }
  .coh-slider-container-nav-outside-left-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-outside-left-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-outside-right-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-right-top-bottom-md > .coh-slider-container-mid .slick-arrow {
    right: 100%;
    left: auto;
  }
  .coh-slider-container-nav-outside-top-left-md > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-left-md > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-middle-md > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-middle-md > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-right-md > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-right-md > .coh-slider-nav-top .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-top-left-md > .coh-slider-nav-top {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-md > .coh-slider-nav-top {
    text-align: right;
  }
  .coh-slider-container-nav-outside-top-middle-md > .coh-slider-nav-top {
    text-align: center;
  }
  .coh-slider-container-nav-outside-top-right-md > .coh-slider-nav-top {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-right-md > .coh-slider-nav-top {
    text-align: left;
  }
  .coh-slider-container-nav-outside-bottom-left-md > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-left-md > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-middle-md > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-middle-md > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-right-md > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-right-md > .coh-slider-nav-bottom .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-bottom-left-md > .coh-slider-nav-bottom {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-md > .coh-slider-nav-bottom {
    text-align: right;
  }
  .coh-slider-container-nav-outside-bottom-middle-md > .coh-slider-nav-bottom {
    text-align: center;
  }
  .coh-slider-container-nav-outside-bottom-right-md > .coh-slider-nav-bottom {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-right-md > .coh-slider-nav-bottom {
    text-align: left;
  }
  .coh-slider-container-nav-inside-top-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    width: 100%;
  }
  .coh-slider-container-nav-inside-top-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: absolute;
    top: 0;
    bottom: auto;
    -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
            transform: translateY(0);
    z-index: 1;
  }
  .coh-slider-container-nav-inside-top-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  .coh-slider-container-nav-inside-bottom-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    width: 100%;
  }
  .coh-slider-container-nav-inside-bottom-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-bottom-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-middle-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-right-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    position: absolute;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-left-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-middle-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-right-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev {
    top: 0;
    bottom: auto;
  }
  .coh-slider-container-nav-inside-left-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-middle-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-right-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next {
    top: auto;
    bottom: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-left-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-right-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-right-top-bottom-md > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 0;
    bottom: auto;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-nav-outside-top-left-right-sm > .coh-slider-nav-top .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-sm > .coh-slider-nav-top .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-top-left-right-sm > .coh-slider-nav-top .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-sm > .coh-slider-nav-top .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-middle-left-right-sm > .coh-slider-container-mid .slick-arrow {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
  }
  .coh-slider-container-nav-outside-middle-left-right-sm > .coh-slider-container-mid .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-sm > .coh-slider-container-mid .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-left-right-sm > .coh-slider-container-mid .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-sm > .coh-slider-container-mid .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-outside-bottom-left-right-sm > .coh-slider-nav-bottom .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-sm > .coh-slider-nav-bottom .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-bottom-left-right-sm > .coh-slider-nav-bottom .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-sm > .coh-slider-nav-bottom .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-left-top-bottom-sm > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-middle-top-bottom-sm > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-right-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    position: relative;
  }
  .coh-slider-container-nav-outside-left-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-outside-left-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-outside-right-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-right-top-bottom-sm > .coh-slider-container-mid .slick-arrow {
    right: 100%;
    left: auto;
  }
  .coh-slider-container-nav-outside-top-left-sm > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-left-sm > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-middle-sm > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-middle-sm > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-right-sm > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-right-sm > .coh-slider-nav-top .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-top-left-sm > .coh-slider-nav-top {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-sm > .coh-slider-nav-top {
    text-align: right;
  }
  .coh-slider-container-nav-outside-top-middle-sm > .coh-slider-nav-top {
    text-align: center;
  }
  .coh-slider-container-nav-outside-top-right-sm > .coh-slider-nav-top {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-right-sm > .coh-slider-nav-top {
    text-align: left;
  }
  .coh-slider-container-nav-outside-bottom-left-sm > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-left-sm > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-middle-sm > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-middle-sm > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-right-sm > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-right-sm > .coh-slider-nav-bottom .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-bottom-left-sm > .coh-slider-nav-bottom {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-sm > .coh-slider-nav-bottom {
    text-align: right;
  }
  .coh-slider-container-nav-outside-bottom-middle-sm > .coh-slider-nav-bottom {
    text-align: center;
  }
  .coh-slider-container-nav-outside-bottom-right-sm > .coh-slider-nav-bottom {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-right-sm > .coh-slider-nav-bottom {
    text-align: left;
  }
  .coh-slider-container-nav-inside-top-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    width: 100%;
  }
  .coh-slider-container-nav-inside-top-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: absolute;
    top: 0;
    bottom: auto;
    -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
            transform: translateY(0);
    z-index: 1;
  }
  .coh-slider-container-nav-inside-top-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  .coh-slider-container-nav-inside-bottom-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    width: 100%;
  }
  .coh-slider-container-nav-inside-bottom-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-bottom-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-middle-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-right-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    position: absolute;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-left-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-middle-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-right-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev {
    top: 0;
    bottom: auto;
  }
  .coh-slider-container-nav-inside-left-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-middle-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-right-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next {
    top: auto;
    bottom: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-left-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-right-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-right-top-bottom-sm > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 0;
    bottom: auto;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-nav-outside-top-left-right-ps > .coh-slider-nav-top .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-ps > .coh-slider-nav-top .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-top-left-right-ps > .coh-slider-nav-top .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-ps > .coh-slider-nav-top .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-middle-left-right-ps > .coh-slider-container-mid .slick-arrow {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
  }
  .coh-slider-container-nav-outside-middle-left-right-ps > .coh-slider-container-mid .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-ps > .coh-slider-container-mid .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-left-right-ps > .coh-slider-container-mid .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-ps > .coh-slider-container-mid .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-outside-bottom-left-right-ps > .coh-slider-nav-bottom .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-ps > .coh-slider-nav-bottom .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-bottom-left-right-ps > .coh-slider-nav-bottom .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-ps > .coh-slider-nav-bottom .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-left-top-bottom-ps > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-middle-top-bottom-ps > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-right-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    position: relative;
  }
  .coh-slider-container-nav-outside-left-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-outside-left-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-outside-right-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-right-top-bottom-ps > .coh-slider-container-mid .slick-arrow {
    right: 100%;
    left: auto;
  }
  .coh-slider-container-nav-outside-top-left-ps > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-left-ps > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-middle-ps > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-middle-ps > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-right-ps > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-right-ps > .coh-slider-nav-top .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-top-left-ps > .coh-slider-nav-top {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-ps > .coh-slider-nav-top {
    text-align: right;
  }
  .coh-slider-container-nav-outside-top-middle-ps > .coh-slider-nav-top {
    text-align: center;
  }
  .coh-slider-container-nav-outside-top-right-ps > .coh-slider-nav-top {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-right-ps > .coh-slider-nav-top {
    text-align: left;
  }
  .coh-slider-container-nav-outside-bottom-left-ps > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-left-ps > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-middle-ps > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-middle-ps > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-right-ps > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-right-ps > .coh-slider-nav-bottom .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-bottom-left-ps > .coh-slider-nav-bottom {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-ps > .coh-slider-nav-bottom {
    text-align: right;
  }
  .coh-slider-container-nav-outside-bottom-middle-ps > .coh-slider-nav-bottom {
    text-align: center;
  }
  .coh-slider-container-nav-outside-bottom-right-ps > .coh-slider-nav-bottom {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-right-ps > .coh-slider-nav-bottom {
    text-align: left;
  }
  .coh-slider-container-nav-inside-top-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    width: 100%;
  }
  .coh-slider-container-nav-inside-top-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: absolute;
    top: 0;
    bottom: auto;
    -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
            transform: translateY(0);
    z-index: 1;
  }
  .coh-slider-container-nav-inside-top-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  .coh-slider-container-nav-inside-bottom-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    width: 100%;
  }
  .coh-slider-container-nav-inside-bottom-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-bottom-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-middle-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-right-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    position: absolute;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-left-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-middle-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-right-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev {
    top: 0;
    bottom: auto;
  }
  .coh-slider-container-nav-inside-left-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-middle-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-right-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next {
    top: auto;
    bottom: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-left-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-right-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-right-top-bottom-ps > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 0;
    bottom: auto;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-nav-outside-top-left-right-xs > .coh-slider-nav-top .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-xs > .coh-slider-nav-top .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-top-left-right-xs > .coh-slider-nav-top .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-right-xs > .coh-slider-nav-top .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-middle-left-right-xs > .coh-slider-container-mid .slick-arrow {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
  }
  .coh-slider-container-nav-outside-middle-left-right-xs > .coh-slider-container-mid .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-xs > .coh-slider-container-mid .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-left-right-xs > .coh-slider-container-mid .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-left-right-xs > .coh-slider-container-mid .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-outside-bottom-left-right-xs > .coh-slider-nav-bottom .slick-prev {
    float: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-xs > .coh-slider-nav-bottom .slick-prev {
    float: right;
  }
  .coh-slider-container-nav-outside-bottom-left-right-xs > .coh-slider-nav-bottom .slick-next {
    float: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-right-xs > .coh-slider-nav-bottom .slick-next {
    float: left;
  }
  .coh-slider-container-nav-outside-left-top-bottom-xs > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-middle-top-bottom-xs > .coh-slider-container-mid .slick-arrow, .coh-slider-container-nav-outside-right-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    position: relative;
  }
  .coh-slider-container-nav-outside-left-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-outside-left-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-outside-middle-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-middle-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-outside-right-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    right: auto;
    left: 100%;
    -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  [dir=rtl] .coh-slider-container-nav-outside-right-top-bottom-xs > .coh-slider-container-mid .slick-arrow {
    right: 100%;
    left: auto;
  }
  .coh-slider-container-nav-outside-top-left-xs > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-left-xs > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-middle-xs > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-middle-xs > .coh-slider-nav-top .slick-next, .coh-slider-container-nav-outside-top-right-xs > .coh-slider-nav-top .slick-prev,
  .coh-slider-container-nav-outside-top-right-xs > .coh-slider-nav-top .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-top-left-xs > .coh-slider-nav-top {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-left-xs > .coh-slider-nav-top {
    text-align: right;
  }
  .coh-slider-container-nav-outside-top-middle-xs > .coh-slider-nav-top {
    text-align: center;
  }
  .coh-slider-container-nav-outside-top-right-xs > .coh-slider-nav-top {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-top-right-xs > .coh-slider-nav-top {
    text-align: left;
  }
  .coh-slider-container-nav-outside-bottom-left-xs > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-left-xs > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-middle-xs > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-middle-xs > .coh-slider-nav-bottom .slick-next, .coh-slider-container-nav-outside-bottom-right-xs > .coh-slider-nav-bottom .slick-prev,
  .coh-slider-container-nav-outside-bottom-right-xs > .coh-slider-nav-bottom .slick-next {
    float: none;
  }
  .coh-slider-container-nav-outside-bottom-left-xs > .coh-slider-nav-bottom {
    text-align: left;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-left-xs > .coh-slider-nav-bottom {
    text-align: right;
  }
  .coh-slider-container-nav-outside-bottom-middle-xs > .coh-slider-nav-bottom {
    text-align: center;
  }
  .coh-slider-container-nav-outside-bottom-right-xs > .coh-slider-nav-bottom {
    text-align: right;
  }
  [dir=rtl] .coh-slider-container-nav-outside-bottom-right-xs > .coh-slider-nav-bottom {
    text-align: left;
  }
  .coh-slider-container-nav-inside-top-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    width: 100%;
  }
  .coh-slider-container-nav-inside-top-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: absolute;
    top: 0;
    bottom: auto;
    -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
            transform: translateY(0);
    z-index: 1;
  }
  .coh-slider-container-nav-inside-top-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next, [dir=rtl] .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  .coh-slider-container-nav-inside-bottom-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    width: 100%;
  }
  .coh-slider-container-nav-inside-bottom-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-bottom-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-prev {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-next {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-middle-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow, .coh-slider-container-nav-inside-right-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    position: absolute;
    z-index: 1;
  }
  .coh-slider-container-nav-inside-left-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-middle-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev, .coh-slider-container-nav-inside-right-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-prev {
    top: 0;
    bottom: auto;
  }
  .coh-slider-container-nav-inside-left-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-middle-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next, .coh-slider-container-nav-inside-right-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-next {
    top: auto;
    bottom: 0;
  }
  .coh-slider-container-nav-inside-left-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-left-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-right-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-right-top-bottom-xs > .coh-slider-container-mid > .coh-slider-container-inner > .slick-arrow {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 0;
    bottom: auto;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom, .coh-slider-container-nav-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    position: absolute;
    top: auto;
    bottom: 0;
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow, .coh-slider-container-nav-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-nav-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: 0;
    left: auto;
    -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
            transform: translateX(0);
  }
  [dir=rtl] .coh-slider-container-nav-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-bottom {
    right: auto;
    left: 0;
  }
  .coh-slider-container-nav-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top, .coh-slider-container-nav-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    position: absolute;
    top: 50%;
    bottom: auto;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
    z-index: 1;
    width: auto;
  }
  .coh-slider-container-nav-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow, .coh-slider-container-nav-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top .slick-arrow {
    position: static;
  }
  .coh-slider-container-nav-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  .coh-slider-container-nav-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: 0;
    left: auto;
  }
  [dir=rtl] .coh-slider-container-nav-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slider-nav-inner-top {
    right: auto;
    left: 0;
  }
}
.coh-slider-container-pager-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-pager-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: 0;
  left: auto;
}
.coh-slider-container-pager-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
[dir=rtl] .coh-slider-container-pager-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: 50%;
  left: auto;
}
.coh-slider-container-pager-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-pager-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: auto;
  left: 0;
}
.coh-slider-container-pager-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: auto;
  right: auto;
  bottom: 0;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-pager-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: 0;
  left: auto;
}
.coh-slider-container-pager-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: auto;
  right: auto;
  bottom: 0;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
[dir=rtl] .coh-slider-container-pager-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: 50%;
  left: auto;
}
.coh-slider-container-pager-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: auto;
  right: 0;
  bottom: 0;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-pager-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: auto;
  left: 0;
}
.coh-slider-container-pager-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
[dir=rtl] .coh-slider-container-pager-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: 0;
  left: auto;
}
.coh-slider-container-pager-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  position: absolute;
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
[dir=rtl] .coh-slider-container-pager-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
  right: auto;
  left: 0;
}
.coh-slider-container-pager-outside-top-left-xl > .coh-slider-nav-top .slick-dots {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-top-left-xl > .coh-slider-nav-top .slick-dots {
  right: 0;
  left: auto;
}
.coh-slider-container-pager-outside-top-middle-xl > .coh-slider-nav-top .slick-dots {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-top-middle-xl > .coh-slider-nav-top .slick-dots {
  right: 50%;
  left: auto;
}
.coh-slider-container-pager-outside-top-right-xl > .coh-slider-nav-top .slick-dots {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-top-right-xl > .coh-slider-nav-top .slick-dots {
  right: auto;
  left: 0;
}
.coh-slider-container-pager-outside-bottom-left-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-pager-outside-bottom-left-xl > .coh-slider-nav-bottom .slick-dots {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-bottom-left-xl > .coh-slider-nav-bottom .slick-dots {
  right: 0;
  left: auto;
}
.coh-slider-container-pager-outside-bottom-middle-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-pager-outside-bottom-middle-xl > .coh-slider-nav-bottom .slick-dots {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-bottom-middle-xl > .coh-slider-nav-bottom .slick-dots {
  right: 50%;
  left: auto;
}
.coh-slider-container-pager-outside-bottom-right-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-pager-outside-bottom-right-xl > .coh-slider-nav-bottom .slick-dots {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-bottom-right-xl > .coh-slider-nav-bottom .slick-dots {
  right: auto;
  left: 0;
}
.coh-slider-container-pager-outside-middle-left-xl > .coh-slider-container-mid .slick-dots {
  position: absolute;
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-middle-left-xl > .coh-slider-container-mid .slick-dots {
  right: 0;
  left: auto;
}
.coh-slider-container-pager-outside-middle-right-xl > .coh-slider-container-mid .slick-dots {
  position: absolute;
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-pager-outside-middle-right-xl > .coh-slider-container-mid .slick-dots {
  right: auto;
  left: 0;
}
@media (max-width: 1599px) {
  .coh-slider-container-pager-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-top-left-lg > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-left-lg > .coh-slider-nav-top .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-middle-lg > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-middle-lg > .coh-slider-nav-top .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-right-lg > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-right-lg > .coh-slider-nav-top .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-bottom-left-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-left-lg > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-left-lg > .coh-slider-nav-bottom .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-middle-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-middle-lg > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-middle-lg > .coh-slider-nav-bottom .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-right-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-right-lg > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-right-lg > .coh-slider-nav-bottom .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-middle-left-lg > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-left-lg > .coh-slider-container-mid .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-middle-right-lg > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-right-lg > .coh-slider-container-mid .slick-dots {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-pager-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-top-left-md > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-left-md > .coh-slider-nav-top .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-middle-md > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-middle-md > .coh-slider-nav-top .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-right-md > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-right-md > .coh-slider-nav-top .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-bottom-left-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-left-md > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-left-md > .coh-slider-nav-bottom .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-middle-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-middle-md > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-middle-md > .coh-slider-nav-bottom .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-right-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-right-md > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-right-md > .coh-slider-nav-bottom .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-middle-left-md > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-left-md > .coh-slider-container-mid .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-middle-right-md > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-right-md > .coh-slider-container-mid .slick-dots {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-pager-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-top-left-sm > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-left-sm > .coh-slider-nav-top .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-middle-sm > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-middle-sm > .coh-slider-nav-top .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-right-sm > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-right-sm > .coh-slider-nav-top .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-bottom-left-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-left-sm > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-left-sm > .coh-slider-nav-bottom .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-middle-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-middle-sm > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-middle-sm > .coh-slider-nav-bottom .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-right-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-right-sm > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-right-sm > .coh-slider-nav-bottom .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-middle-left-sm > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-left-sm > .coh-slider-container-mid .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-middle-right-sm > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-right-sm > .coh-slider-container-mid .slick-dots {
    right: auto;
    left: 0;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-pager-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-top-left-ps > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-left-ps > .coh-slider-nav-top .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-middle-ps > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-middle-ps > .coh-slider-nav-top .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-right-ps > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-right-ps > .coh-slider-nav-top .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-bottom-left-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-left-ps > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-left-ps > .coh-slider-nav-bottom .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-middle-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-middle-ps > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-middle-ps > .coh-slider-nav-bottom .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-right-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-right-ps > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-right-ps > .coh-slider-nav-bottom .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-middle-left-ps > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-left-ps > .coh-slider-container-mid .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-middle-right-ps > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-right-ps > .coh-slider-container-mid .slick-dots {
    right: auto;
    left: 0;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-pager-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-pager-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-pager-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-top-left-xs > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-left-xs > .coh-slider-nav-top .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-middle-xs > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-middle-xs > .coh-slider-nav-top .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-top-right-xs > .coh-slider-nav-top .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-top-right-xs > .coh-slider-nav-top .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-bottom-left-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-left-xs > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-left-xs > .coh-slider-nav-bottom .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-middle-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-middle-xs > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-middle-xs > .coh-slider-nav-bottom .slick-dots {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-pager-outside-bottom-right-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-pager-outside-bottom-right-xs > .coh-slider-nav-bottom .slick-dots {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-bottom-right-xs > .coh-slider-nav-bottom .slick-dots {
    right: auto;
    left: 0;
  }
  .coh-slider-container-pager-outside-middle-left-xs > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-left-xs > .coh-slider-container-mid .slick-dots {
    right: 0;
    left: auto;
  }
  .coh-slider-container-pager-outside-middle-right-xs > .coh-slider-container-mid .slick-dots {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-pager-outside-middle-right-xs > .coh-slider-container-mid .slick-dots {
    right: auto;
    left: 0;
  }
}
.coh-slider-container-playpause-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-playpause-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: 0;
  left: auto;
}
.coh-slider-container-playpause-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
[dir=rtl] .coh-slider-container-playpause-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: 50%;
  left: auto;
}
.coh-slider-container-playpause-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-playpause-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: auto;
  left: 0;
}
.coh-slider-container-playpause-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: auto;
  right: auto;
  bottom: 0;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-playpause-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: 0;
  left: auto;
}
.coh-slider-container-playpause-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: auto;
  right: auto;
  bottom: 0;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
[dir=rtl] .coh-slider-container-playpause-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: 50%;
  left: auto;
}
.coh-slider-container-playpause-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: auto;
  right: 0;
  bottom: 0;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-playpause-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: auto;
  left: 0;
}
.coh-slider-container-playpause-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
[dir=rtl] .coh-slider-container-playpause-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: 0;
  left: auto;
}
.coh-slider-container-playpause-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  position: absolute;
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
[dir=rtl] .coh-slider-container-playpause-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
  right: auto;
  left: 0;
}
.coh-slider-container-playpause-outside-top-left-xl > .coh-slider-nav-top .slick-playpause-button {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-top-left-xl > .coh-slider-nav-top .slick-playpause-button {
  right: 0;
  left: auto;
}
.coh-slider-container-playpause-outside-top-middle-xl > .coh-slider-nav-top .slick-playpause-button {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-top-middle-xl > .coh-slider-nav-top .slick-playpause-button {
  right: 50%;
  left: auto;
}
.coh-slider-container-playpause-outside-top-right-xl > .coh-slider-nav-top .slick-playpause-button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-top-right-xl > .coh-slider-nav-top .slick-playpause-button {
  right: auto;
  left: 0;
}
.coh-slider-container-playpause-outside-bottom-left-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-playpause-outside-bottom-left-xl > .coh-slider-nav-bottom .slick-playpause-button {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-bottom-left-xl > .coh-slider-nav-bottom .slick-playpause-button {
  right: 0;
  left: auto;
}
.coh-slider-container-playpause-outside-bottom-middle-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-playpause-outside-bottom-middle-xl > .coh-slider-nav-bottom .slick-playpause-button {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-bottom-middle-xl > .coh-slider-nav-bottom .slick-playpause-button {
  right: 50%;
  left: auto;
}
.coh-slider-container-playpause-outside-bottom-right-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-playpause-outside-bottom-right-xl > .coh-slider-nav-bottom .slick-playpause-button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-bottom-right-xl > .coh-slider-nav-bottom .slick-playpause-button {
  right: auto;
  left: 0;
}
.coh-slider-container-playpause-outside-middle-left-xl > .coh-slider-container-mid .slick-playpause-button {
  position: absolute;
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-middle-left-xl > .coh-slider-container-mid .slick-playpause-button {
  right: 0;
  left: auto;
}
.coh-slider-container-playpause-outside-middle-right-xl > .coh-slider-container-mid .slick-playpause-button {
  position: absolute;
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-playpause-outside-middle-right-xl > .coh-slider-container-mid .slick-playpause-button {
  right: auto;
  left: 0;
}
@media (max-width: 1599px) {
  .coh-slider-container-playpause-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-top-left-lg > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-left-lg > .coh-slider-nav-top .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-middle-lg > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-middle-lg > .coh-slider-nav-top .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-right-lg > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-right-lg > .coh-slider-nav-top .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-bottom-left-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-left-lg > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-left-lg > .coh-slider-nav-bottom .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-middle-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-middle-lg > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-middle-lg > .coh-slider-nav-bottom .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-right-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-right-lg > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-right-lg > .coh-slider-nav-bottom .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-middle-left-lg > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-left-lg > .coh-slider-container-mid .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-middle-right-lg > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-right-lg > .coh-slider-container-mid .slick-playpause-button {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-playpause-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-top-left-md > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-left-md > .coh-slider-nav-top .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-middle-md > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-middle-md > .coh-slider-nav-top .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-right-md > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-right-md > .coh-slider-nav-top .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-bottom-left-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-left-md > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-left-md > .coh-slider-nav-bottom .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-middle-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-middle-md > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-middle-md > .coh-slider-nav-bottom .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-right-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-right-md > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-right-md > .coh-slider-nav-bottom .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-middle-left-md > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-left-md > .coh-slider-container-mid .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-middle-right-md > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-right-md > .coh-slider-container-mid .slick-playpause-button {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-playpause-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-top-left-sm > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-left-sm > .coh-slider-nav-top .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-middle-sm > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-middle-sm > .coh-slider-nav-top .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-right-sm > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-right-sm > .coh-slider-nav-top .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-bottom-left-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-left-sm > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-left-sm > .coh-slider-nav-bottom .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-middle-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-middle-sm > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-middle-sm > .coh-slider-nav-bottom .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-right-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-right-sm > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-right-sm > .coh-slider-nav-bottom .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-middle-left-sm > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-left-sm > .coh-slider-container-mid .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-middle-right-sm > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-right-sm > .coh-slider-container-mid .slick-playpause-button {
    right: auto;
    left: 0;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-playpause-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-top-left-ps > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-left-ps > .coh-slider-nav-top .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-middle-ps > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-middle-ps > .coh-slider-nav-top .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-right-ps > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-right-ps > .coh-slider-nav-top .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-bottom-left-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-left-ps > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-left-ps > .coh-slider-nav-bottom .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-middle-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-middle-ps > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-middle-ps > .coh-slider-nav-bottom .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-right-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-right-ps > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-right-ps > .coh-slider-nav-bottom .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-middle-left-ps > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-left-ps > .coh-slider-container-mid .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-middle-right-ps > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-right-ps > .coh-slider-container-mid .slick-playpause-button {
    right: auto;
    left: 0;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-playpause-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-playpause-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-top-left-xs > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-left-xs > .coh-slider-nav-top .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-middle-xs > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-middle-xs > .coh-slider-nav-top .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-top-right-xs > .coh-slider-nav-top .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-top-right-xs > .coh-slider-nav-top .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-bottom-left-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-left-xs > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-left-xs > .coh-slider-nav-bottom .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-middle-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-middle-xs > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-middle-xs > .coh-slider-nav-bottom .slick-playpause-button {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-playpause-outside-bottom-right-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-playpause-outside-bottom-right-xs > .coh-slider-nav-bottom .slick-playpause-button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-bottom-right-xs > .coh-slider-nav-bottom .slick-playpause-button {
    right: auto;
    left: 0;
  }
  .coh-slider-container-playpause-outside-middle-left-xs > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-left-xs > .coh-slider-container-mid .slick-playpause-button {
    right: 0;
    left: auto;
  }
  .coh-slider-container-playpause-outside-middle-right-xs > .coh-slider-container-mid .slick-playpause-button {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-playpause-outside-middle-right-xs > .coh-slider-container-mid .slick-playpause-button {
    right: auto;
    left: 0;
  }
}
.coh-slider-container-counter-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-counter-inside-top-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: 0;
  left: auto;
}
.coh-slider-container-counter-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
[dir=rtl] .coh-slider-container-counter-inside-top-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: 50%;
  left: auto;
}
.coh-slider-container-counter-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-counter-inside-top-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: auto;
  left: 0;
}
.coh-slider-container-counter-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: auto;
  right: auto;
  bottom: 0;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-counter-inside-bottom-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: 0;
  left: auto;
}
.coh-slider-container-counter-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: auto;
  right: auto;
  bottom: 0;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
[dir=rtl] .coh-slider-container-counter-inside-bottom-middle-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: 50%;
  left: auto;
}
.coh-slider-container-counter-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: auto;
  right: 0;
  bottom: 0;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
}
[dir=rtl] .coh-slider-container-counter-inside-bottom-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: auto;
  left: 0;
}
.coh-slider-container-counter-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
[dir=rtl] .coh-slider-container-counter-inside-middle-left-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: 0;
  left: auto;
}
.coh-slider-container-counter-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  position: absolute;
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
}
[dir=rtl] .coh-slider-container-counter-inside-middle-right-xl > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
  right: auto;
  left: 0;
}
.coh-slider-container-counter-outside-top-left-xl > .coh-slider-nav-top .coh-slide-count {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-top-left-xl > .coh-slider-nav-top .coh-slide-count {
  right: 0;
  left: auto;
}
.coh-slider-container-counter-outside-top-middle-xl > .coh-slider-nav-top .coh-slide-count {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-top-middle-xl > .coh-slider-nav-top .coh-slide-count {
  right: 50%;
  left: auto;
}
.coh-slider-container-counter-outside-top-right-xl > .coh-slider-nav-top .coh-slide-count {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-top-right-xl > .coh-slider-nav-top .coh-slide-count {
  right: auto;
  left: 0;
}
.coh-slider-container-counter-outside-bottom-left-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-counter-outside-bottom-left-xl > .coh-slider-nav-bottom .coh-slide-count {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-bottom-left-xl > .coh-slider-nav-bottom .coh-slide-count {
  right: 0;
  left: auto;
}
.coh-slider-container-counter-outside-bottom-middle-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-counter-outside-bottom-middle-xl > .coh-slider-nav-bottom .coh-slide-count {
  position: absolute;
  top: 0;
  right: auto;
  bottom: auto;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
      -ms-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-bottom-middle-xl > .coh-slider-nav-bottom .coh-slide-count {
  right: 50%;
  left: auto;
}
.coh-slider-container-counter-outside-bottom-right-xl > .coh-slider-nav-bottom {
  position: relative;
}
.coh-slider-container-counter-outside-bottom-right-xl > .coh-slider-nav-bottom .coh-slide-count {
  position: absolute;
  top: 0;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0);
      -ms-transform: translate(0);
          transform: translate(0);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-bottom-right-xl > .coh-slider-nav-bottom .coh-slide-count {
  right: auto;
  left: 0;
}
.coh-slider-container-counter-outside-middle-left-xl > .coh-slider-container-mid .coh-slide-count {
  position: absolute;
  top: 50%;
  right: auto;
  bottom: auto;
  left: 0;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-middle-left-xl > .coh-slider-container-mid .coh-slide-count {
  right: 0;
  left: auto;
}
.coh-slider-container-counter-outside-middle-right-xl > .coh-slider-container-mid .coh-slide-count {
  position: absolute;
  top: 50%;
  right: 0;
  bottom: auto;
  left: auto;
  -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
          transform: translate(0, -50%);
  z-index: 1;
}
[dir=rtl] .coh-slider-container-counter-outside-middle-right-xl > .coh-slider-container-mid .coh-slide-count {
  right: auto;
  left: 0;
}
@media (max-width: 1599px) {
  .coh-slider-container-counter-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-middle-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-left-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-right-lg > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-top-left-lg > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-left-lg > .coh-slider-nav-top .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-middle-lg > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-middle-lg > .coh-slider-nav-top .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-right-lg > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-right-lg > .coh-slider-nav-top .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-bottom-left-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-left-lg > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-left-lg > .coh-slider-nav-bottom .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-middle-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-middle-lg > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-middle-lg > .coh-slider-nav-bottom .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-right-lg > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-right-lg > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-right-lg > .coh-slider-nav-bottom .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-middle-left-lg > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-left-lg > .coh-slider-container-mid .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-middle-right-lg > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-right-lg > .coh-slider-container-mid .coh-slide-count {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1169px) {
  .coh-slider-container-counter-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-middle-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-left-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-right-md > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-top-left-md > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-left-md > .coh-slider-nav-top .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-middle-md > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-middle-md > .coh-slider-nav-top .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-right-md > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-right-md > .coh-slider-nav-top .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-bottom-left-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-left-md > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-left-md > .coh-slider-nav-bottom .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-middle-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-middle-md > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-middle-md > .coh-slider-nav-bottom .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-right-md > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-right-md > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-right-md > .coh-slider-nav-bottom .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-middle-left-md > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-left-md > .coh-slider-container-mid .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-middle-right-md > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-right-md > .coh-slider-container-mid .coh-slide-count {
    right: auto;
    left: 0;
  }
}
@media (max-width: 1023px) {
  .coh-slider-container-counter-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-middle-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-left-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-right-sm > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-top-left-sm > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-left-sm > .coh-slider-nav-top .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-middle-sm > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-middle-sm > .coh-slider-nav-top .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-right-sm > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-right-sm > .coh-slider-nav-top .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-bottom-left-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-left-sm > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-left-sm > .coh-slider-nav-bottom .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-middle-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-middle-sm > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-middle-sm > .coh-slider-nav-bottom .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-right-sm > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-right-sm > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-right-sm > .coh-slider-nav-bottom .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-middle-left-sm > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-left-sm > .coh-slider-container-mid .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-middle-right-sm > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-right-sm > .coh-slider-container-mid .coh-slide-count {
    right: auto;
    left: 0;
  }
}
@media (max-width: 767px) {
  .coh-slider-container-counter-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-middle-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-left-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-right-ps > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-top-left-ps > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-left-ps > .coh-slider-nav-top .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-middle-ps > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-middle-ps > .coh-slider-nav-top .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-right-ps > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-right-ps > .coh-slider-nav-top .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-bottom-left-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-left-ps > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-left-ps > .coh-slider-nav-bottom .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-middle-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-middle-ps > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-middle-ps > .coh-slider-nav-bottom .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-right-ps > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-right-ps > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-right-ps > .coh-slider-nav-bottom .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-middle-left-ps > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-left-ps > .coh-slider-container-mid .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-middle-right-ps > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-right-ps > .coh-slider-container-mid .coh-slide-count {
    right: auto;
    left: 0;
  }
}
@media (max-width: 564px) {
  .coh-slider-container-counter-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-top-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-middle-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: auto;
    right: 0;
    bottom: 0;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
  }
  [dir=rtl] .coh-slider-container-counter-inside-bottom-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-left-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
  }
  [dir=rtl] .coh-slider-container-counter-inside-middle-right-xs > .coh-slider-container-mid > .coh-slider-container-inner .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-top-left-xs > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-left-xs > .coh-slider-nav-top .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-middle-xs > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-middle-xs > .coh-slider-nav-top .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-top-right-xs > .coh-slider-nav-top .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-top-right-xs > .coh-slider-nav-top .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-bottom-left-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-left-xs > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-left-xs > .coh-slider-nav-bottom .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-middle-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-middle-xs > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-middle-xs > .coh-slider-nav-bottom .coh-slide-count {
    right: 50%;
    left: auto;
  }
  .coh-slider-container-counter-outside-bottom-right-xs > .coh-slider-nav-bottom {
    position: relative;
  }
  .coh-slider-container-counter-outside-bottom-right-xs > .coh-slider-nav-bottom .coh-slide-count {
    position: absolute;
    top: 0;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0);
        -ms-transform: translate(0);
            transform: translate(0);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-bottom-right-xs > .coh-slider-nav-bottom .coh-slide-count {
    right: auto;
    left: 0;
  }
  .coh-slider-container-counter-outside-middle-left-xs > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-left-xs > .coh-slider-container-mid .coh-slide-count {
    right: 0;
    left: auto;
  }
  .coh-slider-container-counter-outside-middle-right-xs > .coh-slider-container-mid .coh-slide-count {
    position: absolute;
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
    z-index: 1;
  }
  [dir=rtl] .coh-slider-container-counter-outside-middle-right-xs > .coh-slider-container-mid .coh-slide-count {
    right: auto;
    left: 0;
  }
}
";
    }

    public function getTemplateName()
    {
        return "__string_template__4dbbbbacff5c91ca7ae81fb82aa8cfe2";
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4dbbbbacff5c91ca7ae81fb82aa8cfe2", "");
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
