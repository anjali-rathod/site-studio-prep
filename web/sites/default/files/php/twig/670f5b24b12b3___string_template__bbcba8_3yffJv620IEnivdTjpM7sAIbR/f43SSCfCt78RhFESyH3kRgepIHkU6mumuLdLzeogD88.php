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

/* __string_template__bbcba8eafa7345af48811bfaf45434b1 */
class __TwigTemplate_f6c32688401d8dfea6737191fd70d2f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block2962498042' => [$this, 'block_block2962498042'],
            'block3489356836' => [$this, 'block_block3489356836'],
            'block2596989193' => [$this, 'block_block2596989193'],
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
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:media:2b205c95-3ffa-464e-86e3-336f0ade78bd]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), false), "html", null, true);
        $context["component_variable_5677def8_f2c1_43b1_b944_3959ccc9d789"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8ba7bc1a_967a_4f31_9b33_10853e66fbf8"] = ('' === $tmp = "headshot") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_a04de788_2150_4b88_b804_9d426020e82a"] = ('' === $tmp = "h4") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_780f5238_daa7_439d_a0aa_fc66bc60523d"] = ('' === $tmp = "Short placeholder heading") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_5cd9d8d3_2f85_487e_9657_1fbc019b14f9"] = ('' === $tmp = "This is placeholder text. It's here by mistake and we'd appreciate it if you could email us with a link to the page you found it on.") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_28f724c5_d6f0_44e6_b0c6_1b046f5bc81b"] = ('' === $tmp = "left-align-image-above") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_69382081_1243_4687_bbea_18d3ab6f447e"] = ('' === $tmp = "rgba(242, 242, 242, 1)") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_116aae79_7a7d_46b8_8355_b9ed1ce3f2fa"] = ('' === $tmp = "coh-style-card-text-light-background") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_be0fb3a6_0776_4530_b1bb_7ab0dc9918bd"] = ('' === $tmp = "coh-style-padding-small") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_b50e72f9_f42b_45ca_b9d4_aa5173758414"] = 1;
        echo " ";
        $context["component_variable_11e2a0a6_1da4_4d50_b15f_53ac9ad2ac73"] = ('' === $tmp = "coh-style-margin-bottom-small") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_feature_card", false, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["5677def8-f2c1-43b1-b944-3959ccc9d789" => "component_variable_5677def8_f2c1_43b1_b944_3959ccc9d789", "8ba7bc1a-967a-4f31-9b33-10853e66fbf8" => "component_variable_8ba7bc1a_967a_4f31_9b33_10853e66fbf8", "a04de788-2150-4b88-b804-9d426020e82a" => "component_variable_a04de788_2150_4b88_b804_9d426020e82a", "780f5238-daa7-439d-a0aa-fc66bc60523d" => "component_variable_780f5238_daa7_439d_a0aa_fc66bc60523d", "5cd9d8d3-2f85-487e-9657-1fbc019b14f9" => "component_variable_5cd9d8d3_2f85_487e_9657_1fbc019b14f9", "28f724c5-d6f0-44e6-b0c6-1b046f5bc81b" => "component_variable_28f724c5_d6f0_44e6_b0c6_1b046f5bc81b", "69382081-1243-4687-bbea-18d3ab6f447e" => "component_variable_69382081_1243_4687_bbea_18d3ab6f447e", "116aae79-7a7d-46b8-8355-b9ed1ce3f2fa" => "component_variable_116aae79_7a7d_46b8_8355_b9ed1ce3f2fa", "be0fb3a6-0776-4530-b1bb-7ab0dc9918bd" => "component_variable_be0fb3a6_0776_4530_b1bb_7ab0dc9918bd", "b50e72f9-f42b-45ca-b9d4-aa5173758414" => "component_variable_b50e72f9_f42b_45ca_b9d4_aa5173758414", "11e2a0a6-1da4-4d50-b15f-53ac9ad2ac73" => "component_variable_11e2a0a6_1da4_4d50_b15f_53ac9ad2ac73"], "6e9dc84d-386c-4e42-93ab-74fbfeaa9543", ""), "html", null, true);
        echo " ";
        $context["component_variable_57838df3_8666_4152_ad7a_414846c7e158"] = ('' === $tmp = "boxed") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_b4f8d2f4_1f92_4ac0_b110_33fda0639848"] = ('' === $tmp = "space-between") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_e9963ab0_7260_41bd_bbd7_a5c767ea2253"] = ('' === $tmp = "retain") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_db26906a_fcc1_4ce5_90ff_9058fe73e4ef"] = ('' === $tmp = "coh-style-padding-top-bottom-large") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_bbcd069d_c547_4412_b4f4_0fef1c93cb49"] = ('' === $tmp = "auto") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_4fdc3cf3_fcab_4640_86e9_4666bef482f6"] = 6;
        echo " ";
        $context["component_variable_8125dec1_a483_460a_91a4_1cf0dfa61df6"] = 0;
        echo " ";
        $context["component_variable_3b36842f_5f40_4f03_8ad9_27435adbf045"] = ('' === $tmp = "flex-start") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_b279f292_a548_4e89_b38c_8b7f186d0912"] =  -1;
        echo " ";
        $context["component_variable_1a5d5c06_ea8a_426c_ae3d_54bb4832d2ba"] =  -1;
        echo " ";
        $context["component_variable_a902bd3d_a6a0_4967_89f5_dece3ebd0d4f"] = 6;
        echo " ";
        $context["component_variable_7208592b_bc03_476a_9eb2_13133fc84024"] = 1;
        echo " ";
        $context["component_variable_10c02b13_6e7f_4839_960a_f71e78d4bb0b"] = ('' === $tmp = "flex-start") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_5399da9b_e2a8_4f63_822c_8ab4e76c9dee"] =  -1;
        echo " ";
        $context["component_variable_34c5b86c_68e5_4ca1_98f5_ebc13a61a249"] =  -1;
        echo " ";
        $context["component_variable_d830e2c5_daba_4c00_9aef_3c32d9debf3d"] = ('' === $tmp = "auto") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_47f3455a_f1ba_430a_8b0c_38c56d452858"] = 12;
        echo " ";
        $context["component_variable_310159f8_767f_4242_9bd2_0bf9a8d368ea"] = 0;
        echo " ";
        $context["component_variable_16a69134_d141_4f7f_9575_eb95d3d914c8"] = ('' === $tmp = "flex-start") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_d2f02c0d_a0cf_4ffb_8610_1f56285aad3e"] =  -1;
        echo " ";
        $context["component_variable_ea7aedbf_c4b3_4061_80a4_77818a0c98d1"] =  -1;
        echo " ";
        $context["component_variable_49a843a4_9375_4791_8a25_e712623bb4e7"] = 12;
        echo " ";
        $context["component_variable_fbbaafea_23b7_4ee6_b344_5ece9a2bc504"] = 1;
        echo " ";
        $context["component_variable_4af6d020_88c1_4345_9342_f80ac30d7e7b"] = ('' === $tmp = "flex-start") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_c8c0aefd_0df3_4aa6_8da1_14b15b60de63"] =  -1;
        echo " ";
        $context["component_variable_2f189911_ef26_4486_9727_44bcc606c329"] =  -1;
        echo " ";
        $context["component_variable_f289a117_8a1d_458e_84ae_2eff3ec44eb6"] = ('' === $tmp = "auto") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_5b90dd88_c860_45dd_80a4_371190d8ef76"] = 12;
        echo " ";
        $context["component_variable_6590fce1_9fc8_44d0_bf3c_56fec86619b2"] = 0;
        echo " ";
        $context["component_variable_ba93aa7e_3abe_4113_90c6_bc7e3ed76825"] = ('' === $tmp = "flex-start") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_40857baa_56bb_4728_b08d_8c88e3d1dee7"] = 12;
        echo " ";
        $context["component_variable_0e4279a2_04f3_41ac_9f91_c696a7df6ee7"] = 1;
        echo " ";
        $context["component_variable_47420006_7cf8_4301_b430_46be60130a6f"] = ('' === $tmp = "flex-start") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_20838f8a_a48c_40a0_a5d4_76d9db735bcd"] = false;
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block2962498042', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["09e94e16-165c-4854-b690-c747dc66d40b" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block3489356836', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["ecc6e692-b486-4e74-ad24-a1ffeb01fc91" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_2_column_layout", false, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["57838df3-8666-4152-ad7a-414846c7e158" => "component_variable_57838df3_8666_4152_ad7a_414846c7e158", "b4f8d2f4-1f92-4ac0-b110-33fda0639848" => "component_variable_b4f8d2f4_1f92_4ac0_b110_33fda0639848", "e9963ab0-7260-41bd-bbd7-a5c767ea2253" => "component_variable_e9963ab0_7260_41bd_bbd7_a5c767ea2253", "db26906a-fcc1-4ce5-90ff-9058fe73e4ef" => "component_variable_db26906a_fcc1_4ce5_90ff_9058fe73e4ef", "bbcd069d-c547-4412-b4f4-0fef1c93cb49" => "component_variable_bbcd069d_c547_4412_b4f4_0fef1c93cb49", "4fdc3cf3-fcab-4640-86e9-4666bef482f6" => "component_variable_4fdc3cf3_fcab_4640_86e9_4666bef482f6", "8125dec1-a483-460a-91a4-1cf0dfa61df6" => "component_variable_8125dec1_a483_460a_91a4_1cf0dfa61df6", "3b36842f-5f40-4f03-8ad9-27435adbf045" => "component_variable_3b36842f_5f40_4f03_8ad9_27435adbf045", "b279f292-a548-4e89-b38c-8b7f186d0912" => "component_variable_b279f292_a548_4e89_b38c_8b7f186d0912", "1a5d5c06-ea8a-426c-ae3d-54bb4832d2ba" => "component_variable_1a5d5c06_ea8a_426c_ae3d_54bb4832d2ba", "a902bd3d-a6a0-4967-89f5-dece3ebd0d4f" => "component_variable_a902bd3d_a6a0_4967_89f5_dece3ebd0d4f", "7208592b-bc03-476a-9eb2-13133fc84024" => "component_variable_7208592b_bc03_476a_9eb2_13133fc84024", "10c02b13-6e7f-4839-960a-f71e78d4bb0b" => "component_variable_10c02b13_6e7f_4839_960a_f71e78d4bb0b", "5399da9b-e2a8-4f63-822c-8ab4e76c9dee" => "component_variable_5399da9b_e2a8_4f63_822c_8ab4e76c9dee", "34c5b86c-68e5-4ca1-98f5-ebc13a61a249" => "component_variable_34c5b86c_68e5_4ca1_98f5_ebc13a61a249", "d830e2c5-daba-4c00-9aef-3c32d9debf3d" => "component_variable_d830e2c5_daba_4c00_9aef_3c32d9debf3d", "47f3455a-f1ba-430a-8b0c-38c56d452858" => "component_variable_47f3455a_f1ba_430a_8b0c_38c56d452858", "310159f8-767f-4242-9bd2-0bf9a8d368ea" => "component_variable_310159f8_767f_4242_9bd2_0bf9a8d368ea", "16a69134-d141-4f7f-9575-eb95d3d914c8" => "component_variable_16a69134_d141_4f7f_9575_eb95d3d914c8", "d2f02c0d-a0cf-4ffb-8610-1f56285aad3e" => "component_variable_d2f02c0d_a0cf_4ffb_8610_1f56285aad3e", "ea7aedbf-c4b3-4061-80a4-77818a0c98d1" => "component_variable_ea7aedbf_c4b3_4061_80a4_77818a0c98d1", "49a843a4-9375-4791-8a25-e712623bb4e7" => "component_variable_49a843a4_9375_4791_8a25_e712623bb4e7", "fbbaafea-23b7-4ee6-b344-5ece9a2bc504" => "component_variable_fbbaafea_23b7_4ee6_b344_5ece9a2bc504", "4af6d020-88c1-4345-9342-f80ac30d7e7b" => "component_variable_4af6d020_88c1_4345_9342_f80ac30d7e7b", "c8c0aefd-0df3-4aa6-8da1-14b15b60de63" => "component_variable_c8c0aefd_0df3_4aa6_8da1_14b15b60de63", "2f189911-ef26-4486-9727-44bcc606c329" => "component_variable_2f189911_ef26_4486_9727_44bcc606c329", "f289a117-8a1d-458e-84ae-2eff3ec44eb6" => "component_variable_f289a117_8a1d_458e_84ae_2eff3ec44eb6", "5b90dd88-c860-45dd-80a4-371190d8ef76" => "component_variable_5b90dd88_c860_45dd_80a4_371190d8ef76", "6590fce1-9fc8-44d0-bf3c-56fec86619b2" => "component_variable_6590fce1_9fc8_44d0_bf3c_56fec86619b2", "ba93aa7e-3abe-4113-90c6-bc7e3ed76825" => "component_variable_ba93aa7e_3abe_4113_90c6_bc7e3ed76825", "40857baa-56bb-4728-b08d-8c88e3d1dee7" => "component_variable_40857baa_56bb_4728_b08d_8c88e3d1dee7", "0e4279a2-04f3-41ac-9f91-c696a7df6ee7" => "component_variable_0e4279a2_04f3_41ac_9f91_c696a7df6ee7", "47420006-7cf8-4301-b430-46be60130a6f" => "component_variable_47420006_7cf8_4301_b430_46be60130a6f", "20838f8a-a48c-40a0-a5d4-76d9db735bcd" => "component_variable_20838f8a_a48c_40a0_a5d4_76d9db735bcd"]), "e332c8d2-1369-4ded-aacf-e90b9341a543", ""), "html", null, true);
        echo " ";
        $context["component_variable_2dfe516c_b5de_450f_ba25_29ee19482e0b"] = ('' === $tmp = "Read more") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_cf9520ad_b3e7_4205_ba2c_2711366c31d6"] = ('' === $tmp = "Read less") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_50537163_ed2d_4ae2_bdb5_e3184c473279"] = ('' === $tmp = "coh-style-read-more-button-light") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_67d66edb_eab5_4c3a_ab7e_7f8458fc45ad"] = ('' === $tmp = "coh-style-margin-bottom-small") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        echo " ";
        $this->displayBlock('block2596989193', $context, $blocks);
        echo " ";
        $context["dropZoneContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        if ( !array_key_exists("dropZones", $context)) {
            $context["dropZones"] = [];
        }
        echo " ";
        $context["dropZones"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["0520690f-c704-4c50-b2e0-fd734b2720a5" => ($context["dropZoneContent"] ?? null)]);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_read_more", false, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["dropZones"] ?? null), 1, $this->source), ["2dfe516c-b5de-450f-ba25-29ee19482e0b" => "component_variable_2dfe516c_b5de_450f_ba25_29ee19482e0b", "cf9520ad-b3e7-4205-ba2c-2711366c31d6" => "component_variable_cf9520ad_b3e7_4205_ba2c_2711366c31d6", "50537163-ed2d-4ae2-bdb5-e3184c473279" => "component_variable_50537163_ed2d_4ae2_bdb5_e3184c473279", "67d66edb-eab5-4c3a-ab7e-7f8458fc45ad" => "component_variable_67d66edb_eab5_4c3a_ab7e_7f8458fc45ad"]), "df195c71-9c95-4f4f-a4da-3cc92d879dc3", ""), "html", null, true);
        echo " 
";
    }

    public function block_block2962498042($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "916c19e4-7afb-4b58-a68d-b3f109d8c5cc", "start"), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:0afe34a6-58f6-4790-90bc-a40de84c6605]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), false), "html", null, true);
        $context["component_variable_264ce26c_fb06_4f71_a85c_5a8454b8eca7"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_ae1d03ac_8b07_40d4_a863_749bc691be29"] = ('' === $tmp = "drup") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_c91edb1d_b4e3_4745_ae3a_e530d9e860d4"] = ('' === $tmp = "h3") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_e39ede8d_6727_4649_9a10_1bc9c6fc2d2a"] = ('' === $tmp = "Short placeholder heading") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_05bb28d1_d37b_4f91_a078_a52ce430a7b2"] = ('' === $tmp = "Placeholder Name") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_38c5efeb_d979_45a2_854a_f0d4e603624a"] = ('' === $tmp = "Company Name") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_132f554b_f226_4bbf_85b5_1f3d0998f19b"] = ('' === $tmp = "Address first line, Address second line, City, Country, Postal code") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_a7baf0d9_ba0f_489e_a630_d9f651b0f10c"] = ('' === $tmp = "0123 456 789") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        ob_start(function () { return ''; });
        $context["component_variable_c469b071_25ae_4da0_ad30_b810e9acde84"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_eb3c608b_3af8_4284_8b3f_f4006d8df777"] = ('' === $tmp = "left-align-image-above") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_5df80d9d_d84d_46d6_a9fd_95dd1b8f3d0a"] = ('' === $tmp = "rgba(242, 242, 242, 1)") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_8c5fc0c9_8551_4965_875a_74a394be18f9"] = ('' === $tmp = "coh-style-card-text-light-background") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_b4bd3d77_cfe3_47ac_9409_89f9ebfad9b3"] = ('' === $tmp = "coh-style-padding-small") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_290c0da7_63ff_4454_b569_3cea31f25f1a"] = 1;
        echo " ";
        $context["component_variable_3fef1e0f_4acb_41a0_a841_edac3e04c8dc"] = ('' === $tmp = "coh-style-margin-bottom-small") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_contact_information_card", false, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["264ce26c-fb06-4f71-a85c-5a8454b8eca7" => "component_variable_264ce26c_fb06_4f71_a85c_5a8454b8eca7", "ae1d03ac-8b07-40d4-a863-749bc691be29" => "component_variable_ae1d03ac_8b07_40d4_a863_749bc691be29", "c91edb1d-b4e3-4745-ae3a-e530d9e860d4" => "component_variable_c91edb1d_b4e3_4745_ae3a_e530d9e860d4", "e39ede8d-6727-4649-9a10-1bc9c6fc2d2a" => "component_variable_e39ede8d_6727_4649_9a10_1bc9c6fc2d2a", "05bb28d1-d37b-4f91-a078-a52ce430a7b2" => "component_variable_05bb28d1_d37b_4f91_a078_a52ce430a7b2", "38c5efeb-d979-45a2-854a-f0d4e603624a" => "component_variable_38c5efeb_d979_45a2_854a_f0d4e603624a", "132f554b-f226-4bbf-85b5-1f3d0998f19b" => "component_variable_132f554b_f226_4bbf_85b5_1f3d0998f19b", "a7baf0d9-ba0f-489e-a630-d9f651b0f10c" => "component_variable_a7baf0d9_ba0f_489e_a630_d9f651b0f10c", "c469b071-25ae-4da0-ad30-b810e9acde84" => "component_variable_c469b071_25ae_4da0_ad30_b810e9acde84", "eb3c608b-3af8-4284-8b3f-f4006d8df777" => "component_variable_eb3c608b_3af8_4284_8b3f_f4006d8df777", "5df80d9d-d84d-46d6-a9fd-95dd1b8f3d0a" => "component_variable_5df80d9d_d84d_46d6_a9fd_95dd1b8f3d0a", "8c5fc0c9-8551-4965-875a-74a394be18f9" => "component_variable_8c5fc0c9_8551_4965_875a_74a394be18f9", "b4bd3d77-cfe3-47ac-9409-89f9ebfad9b3" => "component_variable_b4bd3d77_cfe3_47ac_9409_89f9ebfad9b3", "290c0da7-63ff-4454-b569-3cea31f25f1a" => "component_variable_290c0da7_63ff_4454_b569_3cea31f25f1a", "3fef1e0f-4acb-41a0-a841-edac3e04c8dc" => "component_variable_3fef1e0f_4acb_41a0_a841_edac3e04c8dc"], "148a8cb7-a078-4a23-9370-c8032d071a8f", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "916c19e4-7afb-4b58-a68d-b3f109d8c5cc", "end"), "html", null, true);
    }

    public function block_block3489356836($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "91fb1fe7-96c1-460e-835e-432be725d9d8", "start"), "html", null, true);
        echo " ";
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->tokenReplace("[media-reference:file:fe2369de-d627-4cc9-ac11-f9b131c638a3]", ["media-reference" => ($context["media_reference"] ?? null)], $this->sandbox->ensureToStringAllowed($context, 1, $this->source), false), "html", null, true);
        $context["component_variable_ece79b04_bb10_4a43_8a1a_0050d9953856"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_0f5fa4dc_45b8_41ee_b3d2_cdcdc21e110b"] = ('' === $tmp = "1,250") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_ea4fa3ab_f433_4782_b12e_591478072987"] = ('' === $tmp = "Projects launched") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_6813688c_047e_4bfd_9bcd_7d54a28bb8cd"] = ('' === $tmp = "left-align-image-above") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_aa195436_0384_4d9a_b9b3_a6273d74be36"] = ('' === $tmp = "large") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_e87a9794_737b_4213_bbf5_e81716b127d1"] = ('' === $tmp = "rgba(242, 242, 242, 1)") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_c6e6146f_2647_494c_b05d_7a2a42931802"] = ('' === $tmp = "coh-style-card-text-light-background") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_773b0a09_4a61_4800_80a0_7302cadece53"] = ('' === $tmp = "coh-style-padding-small") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_c5bfcb71_dc3b_4e6b_aa2e_d229344944f4"] = 1;
        echo " ";
        $context["component_variable_59650d9a_b861_4761_b34d_b36de45a6558"] = ('' === $tmp = "coh-style-margin-bottom-small") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_stat_card", false, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["ece79b04-bb10-4a43-8a1a-0050d9953856" => "component_variable_ece79b04_bb10_4a43_8a1a_0050d9953856", "0f5fa4dc-45b8-41ee-b3d2-cdcdc21e110b" => "component_variable_0f5fa4dc_45b8_41ee_b3d2_cdcdc21e110b", "ea4fa3ab-f433-4782-b12e-591478072987" => "component_variable_ea4fa3ab_f433_4782_b12e_591478072987", "6813688c-047e-4bfd-9bcd-7d54a28bb8cd" => "component_variable_6813688c_047e_4bfd_9bcd_7d54a28bb8cd", "aa195436-0384-4d9a-b9b3-a6273d74be36" => "component_variable_aa195436_0384_4d9a_b9b3_a6273d74be36", "e87a9794-737b-4213-bbf5-e81716b127d1" => "component_variable_e87a9794_737b_4213_bbf5_e81716b127d1", "c6e6146f-2647-494c-b05d-7a2a42931802" => "component_variable_c6e6146f_2647_494c_b05d_7a2a42931802", "773b0a09-4a61-4800-80a0-7302cadece53" => "component_variable_773b0a09_4a61_4800_80a0_7302cadece53", "c5bfcb71-dc3b-4e6b-aa2e-d229344944f4" => "component_variable_c5bfcb71_dc3b_4e6b_aa2e_d229344944f4", "59650d9a-b861-4761-b34d-b36de45a6558" => "component_variable_59650d9a_b861_4761_b34d_b36de45a6558"], "b60909a4-72b3-425d-b753-823fff94e500", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "91fb1fe7-96c1-460e-835e-432be725d9d8", "end"), "html", null, true);
    }

    public function block_block2596989193($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "cffa9bb5-714f-4f83-a843-a815b3e4a766", "start"), "html", null, true);
        echo " ";
        $context["component_variable_ad025039_96c5_4cce_a27b_48778043471c"] = false;
        echo " ";
        $context["component_variable_e8f77e4e_3de9_47cc_b229_7040a4f78719"] = ('' === $tmp = "h2") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_42c2324a_e7ee_45b6_ab1e_f5dfba48bfb2"] = ('' === $tmp = "align-text-left") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_fa5d575b_1d6e_44f0_a99e_1a2f7688bc27"] = ('' === $tmp = "dark-heading") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        $context["component_variable_50bae73f_99e4_446b_a738_9939a3dade60"] = ('' === $tmp = "Medium length placeholder heading.") ? '' : new Markup($tmp, $this->env->getCharset());
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->renderComponent("cpt_heading", false, $this->sandbox->ensureToStringAllowed($context, 1, $this->source), ["ad025039-96c5-4cce-a27b-48778043471c" => "component_variable_ad025039_96c5_4cce_a27b_48778043471c", "e8f77e4e-3de9-47cc-b229-7040a4f78719" => "component_variable_e8f77e4e_3de9_47cc_b229_7040a4f78719", "42c2324a-e7ee-45b6-ab1e-f5dfba48bfb2" => "component_variable_42c2324a_e7ee_45b6_ab1e_f5dfba48bfb2", "fa5d575b-1d6e-44f0-a99e-1a2f7688bc27" => "component_variable_fa5d575b_1d6e_44f0_a99e_1a2f7688bc27", "50bae73f-99e4-446b-a738-9939a3dade60" => "component_variable_50bae73f_99e4_446b_a738_9939a3dade60"], "82541902-7cca-4d89-8575-9cde9d7e482d", ""), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\cohesion_templates\TwigExtension\TwigExtension']->frontendBuilderDropzone($context, "cffa9bb5-714f-4f83-a843-a815b3e4a766", "end"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "__string_template__bbcba8eafa7345af48811bfaf45434b1";
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
        return new Source("", "__string_template__bbcba8eafa7345af48811bfaf45434b1", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "block" => 1, "if" => 1);
        static $filters = array("escape" => 1, "merge" => 1);
        static $functions = array("attach_library" => 1, "processtoken" => 1, "renderComponent" => 1, "frontendBuilderDropzone" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'merge'],
                ['attach_library', 'processtoken', 'renderComponent', 'frontendBuilderDropzone']
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
