<?php

/* @galleries/shortcode/helpers.twig */
class __TwigTemplate_a1ca455a3698947753345fd3e47b2685e2115d138686be85ea3a9cf31bb82a11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ggFigureWidth' => array($this, 'block_ggFigureWidth'),
            'ggMosaicHiddenItem' => array($this, 'block_ggMosaicHiddenItem'),
            'a_attributes' => array($this, 'block_a_attributes'),
            'a_attributes_class_set' => array($this, 'block_a_attributes_class_set'),
            'a_attributes_href' => array($this, 'block_a_attributes_href'),
            'figure_before' => array($this, 'block_figure_before'),
            'galleryTypeBlock' => array($this, 'block_galleryTypeBlock'),
            'figure_attributes' => array($this, 'block_figure_attributes'),
            'previewImageUrlVar' => array($this, 'block_previewImageUrlVar'),
            'imageAttributesStyleSize' => array($this, 'block_imageAttributesStyleSize'),
            'image_attributes' => array($this, 'block_image_attributes'),
            'figcaption_style' => array($this, 'block_figcaption_style'),
            'figcaption_attributes' => array($this, 'block_figcaption_attributes'),
            'figcaption_wrap' => array($this, 'block_figcaption_wrap'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'figure_after' => array($this, 'block_figure_after'),
            'oneGalleryImage' => array($this, 'block_oneGalleryImage'),
            'mosaicLastImageNumberWrapper' => array($this, 'block_mosaicLastImageNumberWrapper'),
            'mosaicFigcaptionWrapper' => array($this, 'block_mosaicFigcaptionWrapper'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "type", array()) != "none")) {
            // line 3
            echo "\t\tborder: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "width", array()), "html", null, true);
            echo "px ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "type", array()), "html", null, true);
            echo " ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 5
        echo "\tborder-radius: ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t";
        // line 6
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "use_shadow", array()) == 1)) {
            // line 7
            echo "\t\tbox-shadow: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "x", array()), "html", null, true);
            echo "px ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "y", array()), "html", null, true);
            echo "px ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "blur", array()), "html", null, true);
            echo "px ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 8
        echo ";
\tmargin: ";
        // line 9
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "distance", array()), "html", null, true);
        echo "px;";
        // line 11
        echo "\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "2")) {
            // line 12
            echo "\t\theight:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        // line 14
        echo "\t";
        $this->displayBlock('ggFigureWidth', $context, $blocks);
        $context["figureStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
";
        // line 23
        ob_start();
        // line 24
        echo "\t";
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "description", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "description", array())))) {
            // line 25
            echo "\t\t";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "description", array()), "html", null, true);
            echo "
\t";
        } else {
            // line 27
            echo "\t\t";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()), "html", null, true);
            echo "
\t";
        }
        $context["aTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
";
        // line 31
        ob_start();
        // line 32
        echo "\t";
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (((( !$this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array())))) && ( !$this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "video", array(), "any", true, true) || twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()))))) && ($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "0"))) {
            // line 33
            echo "\t\tgg-colorbox
\t";
        }
        // line 35
        echo "
\t";
        // line 36
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array())))) && ($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "0"))) {
            // line 37
            echo "\t\tgg-video
\t";
        }
        // line 39
        echo "
\t";
        // line 40
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "2") && (( !$this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array())))) || ($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(twig_trim_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()))))))) {
            // line 41
            echo "\t\tpbox
\t";
        }
        $context["aClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 44
        echo "
";
        // line 45
        ob_start();
        // line 46
        echo "\t";
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array())))) {
            // line 47
            echo "\t\t";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('force_http')->getCallable(), array($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array()))), "html", null, true);
            echo "
\t\t";
            // line 48
            $context["link"] = true;
            // line 49
            echo "\t";
        } else {
            // line 50
            echo "\t\t";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute($_gallery_, "id", array())), "html", null, true);
            echo "
\t";
        }
        $context["aHref"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        echo "
";
        // line 54
        ob_start();
        // line 55
        echo "\t";
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if (($_link_ && $this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "rel", array(), "any", true, true))) {
            // line 56
            echo "\t\t";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "rel", array()), "html", null, true);
            echo "
\t";
        }
        // line 58
        echo "\t";
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($_link_ == false) && ($this->getAttribute($this->getAttribute($_settings_, "box", array()), "enabled", array()) == "false"))) {
            // line 59
            echo "\t\tnofollow
\t";
        }
        $context["aRel"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 62
        echo "
";
        // line 63
        ob_start();
        // line 64
        echo "
\t";
        // line 65
        ob_start();
        // line 66
        echo "\t\t";
        $this->displayBlock('ggMosaicHiddenItem', $context, $blocks);
        // line 68
        echo "\t";
        $context["ggMosaicHiddenItemVar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 69
        echo "
\t";
        // line 70
        ob_start();
        // line 71
        echo "\t\t";
        $this->displayBlock('a_attributes', $context, $blocks);
        // line 92
        echo "\t";
        $context["var_a_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 93
        echo "
\t";
        // line 94
        ob_start();
        // line 95
        echo "\t\t";
        $this->displayBlock('figure_before', $context, $blocks);
        // line 100
        echo "\t";
        $context["var_figure_before"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 101
        echo "
\t";
        // line 102
        ob_start();
        // line 103
        echo "\t\t";
        $this->displayBlock('galleryTypeBlock', $context, $blocks);
        // line 126
        echo "\t";
        $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 127
        echo "
\t";
        // line 128
        ob_start();
        // line 129
        echo "\t\t";
        $this->displayBlock('figure_attributes', $context, $blocks);
        // line 151
        echo "\t";
        $context["var_figure_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 152
        echo "
\t";
        // line 153
        list($context["width"], $context["height"], $context["crop"]) =         array(0, 0, 0);
        // line 154
        echo "
\t";
        // line 155
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()) == 0)) {
            // line 156
            echo "\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            $context["width"] = $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array());
            // line 157
            echo "\t";
        } else {
            // line 158
            echo "\t\t";
            // line 159
            echo "\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "width_unit", array()) == 0)) {
                // line 160
                echo "\t\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["width"] = round((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "width", array()) / 100) * $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array())));
                // line 161
                echo "\t\t";
            } else {
                // line 162
                echo "\t\t\t";
                $context["width"] = null;
                // line 163
                echo "\t\t";
            }
            // line 164
            echo "\t";
        }
        // line 165
        echo "
\t";
        // line 166
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()) == 0)) {
            // line 167
            echo "\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            $context["height"] = $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array());
            // line 168
            echo "\t";
        } else {
            // line 169
            echo "\t\t";
            // line 170
            echo "\t\t";
            $context["height"] = null;
            // line 171
            echo "\t\t";
            // line 172
            echo "\t\t";
            // line 173
            echo "\t\t";
            // line 174
            echo "\t\t";
            // line 175
            echo "\t\t";
            // line 176
            echo "\t";
        }
        // line 177
        echo "
\t";
        // line 178
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == 3))) {
            // line 179
            echo "\t\t";
            $context["crop"] = 1;
            // line 180
            echo "\t";
        }
        // line 181
        echo "
\t";
        // line 182
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == 1)) {
            // line 183
            echo "\t\t";
            $context["height"] = null;
            // line 184
            echo "\t";
        }
        // line 185
        echo "
\t";
        // line 186
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == 2)) {
            // line 187
            echo "\t\t";
            $context["width"] = null;
            // line 188
            echo "\t";
        }
        // line 189
        echo "
\t";
        // line 190
        ob_start();
        // line 191
        echo "\t\t";
        $this->displayBlock('previewImageUrlVar', $context, $blocks);
        // line 198
        echo "\t";
        $context["previewImgUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 199
        echo "
\t";
        // line 200
        ob_start();
        // line 201
        echo "\t\t";
        $this->displayBlock('imageAttributesStyleSize', $context, $blocks);
        // line 209
        echo "\t";
        $context["imageAttributesStyleSizeVar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 210
        echo "
\t";
        // line 211
        ob_start();
        // line 212
        echo "\t\t";
        $this->displayBlock('image_attributes', $context, $blocks);
        // line 221
        echo "\t";
        $context["var_image_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 222
        echo "
\t";
        // line 223
        ob_start();
        // line 224
        echo "\t\t";
        $this->displayBlock('figcaption_style', $context, $blocks);
        // line 247
        echo "\t";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 248
        echo "
\t";
        // line 249
        ob_start();
        // line 250
        echo "\t\t";
        $this->displayBlock('figcaption_attributes', $context, $blocks);
        // line 257
        echo "\t";
        $context["var_figcaption_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 258
        echo "
\t";
        // line 259
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        $context["prepareImgUrl"] = (($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute($_gallery_, "id", array()));
        // line 260
        echo "
\t";
        // line 261
        ob_start();
        // line 262
        echo "\t\t";
        $this->displayBlock('figcaption_wrap', $context, $blocks);
        // line 336
        echo "\t";
        $context["var_figcaption_wrap"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 337
        echo "
\t";
        // line 338
        ob_start();
        // line 339
        echo "\t\t";
        $this->displayBlock('figcaption_after', $context, $blocks);
        // line 379
        echo "\t";
        $context["var_figcaption_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 380
        echo "
\t";
        // line 381
        ob_start();
        // line 382
        echo "\t\t";
        $this->displayBlock('figure_after', $context, $blocks);
        // line 387
        echo "\t";
        $context["var_figure_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 388
        echo "
\t";
        // line 389
        $this->displayBlock('oneGalleryImage', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 14
    public function block_ggFigureWidth($context, array $blocks = array())
    {
        // line 15
        echo "\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "2")) {
            // line 16
            echo "\t\t\twidth:auto;
\t\t";
        } else {
            // line 18
            echo "\t\t\twidth:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t";
        }
        // line 20
        echo "\t";
    }

    // line 66
    public function block_ggMosaicHiddenItem($context, array $blocks = array())
    {
        // line 67
        echo "\t\t";
    }

    // line 71
    public function block_a_attributes($context, array $blocks = array())
    {
        // line 72
        echo "\t\t\tid=\"gg-";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
        echo "-";
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_photo_, "id", array()), "html", null, true);
        echo "\"
\t\t\t";
        // line 73
        $this->displayBlock('a_attributes_class_set', $context, $blocks);
        // line 76
        echo "\t\t\t";
        if (isset($context["ggMosaicHiddenItemVar"])) { $_ggMosaicHiddenItemVar_ = $context["ggMosaicHiddenItemVar"]; } else { $_ggMosaicHiddenItemVar_ = null; }
        echo twig_escape_filter($this->env, $_ggMosaicHiddenItemVar_, "html", null, true);
        echo "
\t\t\t";
        // line 77
        $this->displayBlock('a_attributes_href', $context, $blocks);
        // line 81
        echo "\t\t\ttitle=\"";
        if (isset($context["aTitle"])) { $_aTitle_ = $context["aTitle"]; } else { $_aTitle_ = null; }
        echo twig_escape_filter($this->env, twig_trim_filter($_aTitle_), "html", null, true);
        echo "\"
\t\t\t";
        // line 82
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "1") && ($_link_ == false))) {
            // line 83
            echo "\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()) == null)) {
            // line 85
            echo "\t\t\t\trel=\"";
            if (isset($context["aRel"])) { $_aRel_ = $context["aRel"]; } else { $_aRel_ = null; }
            echo twig_escape_filter($this->env, $_aRel_, "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 87
        echo "\t\t\t";
        if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
        if (($_link_ == true)) {
            // line 88
            echo "\t\t\t\tdata-type=\"link\"
\t\t\t";
        }
        // line 90
        echo "\t\t\tstyle=\"border-radius: ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";\"
\t\t";
    }

    // line 73
    public function block_a_attributes_class_set($context, array $blocks = array())
    {
        // line 74
        echo "\t\t\t\tclass=\"gg-link ";
        if (isset($context["aClass"])) { $_aClass_ = $context["aClass"]; } else { $_aClass_ = null; }
        echo twig_escape_filter($this->env, twig_trim_filter($_aClass_), "html", null, true);
        echo " ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ((($this->getAttribute($_settings_, "displayFirstPhoto", array()) == "on") && ($_index_ > 0))) {
            echo " hidden-item ";
        }
        echo "\"
\t\t\t";
    }

    // line 77
    public function block_a_attributes_href($context, array $blocks = array())
    {
        // line 78
        echo "\t\t\t\thref=\"";
        if (isset($context["aHref"])) { $_aHref_ = $context["aHref"]; } else { $_aHref_ = null; }
        echo twig_escape_filter($this->env, htmlspecialchars_decode(twig_trim_filter($_aHref_)), "html", null, true);
        echo "\"
\t\t\t\ttarget=\"";
        // line 79
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
        echo "\"
\t\t\t";
    }

    // line 95
    public function block_figure_before($context, array $blocks = array())
    {
        // line 96
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (( !$this->getAttribute($_settings_, "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "false"))) {
            // line 97
            echo "\t\t\t\t<a ";
            if (isset($context["var_a_attributes"])) { $_var_a_attributes_ = $context["var_a_attributes"]; } else { $_var_a_attributes_ = null; }
            echo twig_escape_filter($this->env, $_var_a_attributes_, "html", null, true);
            echo " >
\t\t\t";
        }
        // line 99
        echo "\t\t";
    }

    // line 103
    public function block_galleryTypeBlock($context, array $blocks = array())
    {
        // line 104
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "enabled", array()) == "false")) {
            // line 105
            echo "\t\t\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
                // line 106
                echo "\t\t\t\t\ticons
\t\t\t\t";
            } else {
                // line 108
                echo "\t\t\t\t\tnone
\t\t\t\t";
            }
            // line 110
            echo "\t\t\t";
        } else {
            // line 111
            echo "\t\t\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
                // line 112
                echo "\t\t\t\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "personal", array()) == "true") && twig_in_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "captionEffect", array()), array(0 => "icons", 1 => "icons-scale", 2 => "icons-sodium-left", 3 => "icons-sodium-top", 4 => "icons-nitrogen-top")))) {
                    // line 113
                    echo "\t\t\t\t\t\t";
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "captionEffect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 115
                    echo "\t\t\t\t\t\t";
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 117
                echo "\t\t\t\t";
            } else {
                // line 118
                echo "\t\t\t\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
                    // line 119
                    echo "\t\t\t\t\t\t";
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "captionEffect", array()), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()))), "html", null, true);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 121
                    echo "\t\t\t\t\t\t";
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 123
                echo "\t\t\t\t";
            }
            // line 124
            echo "\t\t\t";
        }
        // line 125
        echo "\t\t";
    }

    // line 129
    public function block_figure_attributes($context, array $blocks = array())
    {
        // line 130
        echo "\t\t\tclass=\"grid-gallery-caption
\t\t\t";
        // line 131
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if ((($this->getAttribute($_settings_, "displayFirstPhoto", array()) == "on") && ($_index_ > 0))) {
            echo " hidden-item ";
        }
        // line 132
        echo "\t\t\t";
        if (isset($context["ggMosaicHiddenItemVar"])) { $_ggMosaicHiddenItemVar_ = $context["ggMosaicHiddenItemVar"]; } else { $_ggMosaicHiddenItemVar_ = null; }
        echo twig_escape_filter($this->env, $_ggMosaicHiddenItemVar_, "html", null, true);
        echo "
\t\t\t";
        // line 133
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($_settings_, "mouse_shadow", array()) == "1") && ($this->getAttribute($_settings_, "use_shadow", array()) == "1"))) {
            // line 134
            echo "\t\t\t\tshadow-show
\t\t\t";
        }
        // line 136
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($_settings_, "mouse_shadow", array()) == "2") && ($this->getAttribute($_settings_, "use_shadow", array()) == "1"))) {
            // line 137
            echo "\t\t\t\tshadow-hide
\t\t\t";
        }
        // line 138
        echo "\"
\t\t\tdata-grid-gallery-type=\"";
        // line 139
        if (isset($context["galleryType"])) { $_galleryType_ = $context["galleryType"]; } else { $_galleryType_ = null; }
        echo twig_escape_filter($this->env, twig_trim_filter($_galleryType_), "html", null, true);
        echo "\"
\t\t\tstyle=\"display:none;";
        // line 140
        if (isset($context["figureStyle"])) { $_figureStyle_ = $context["figureStyle"]; } else { $_figureStyle_ = null; }
        echo twig_escape_filter($this->env, twig_trim_filter($_figureStyle_), "html", null, true);
        echo "\"
\t\t\t\t";
        // line 141
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true")) {
            // line 142
            echo "\t\t\t\t\t";
            ob_start();
            // line 143
            echo "\t\t\t\t\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()))) {
                // line 144
                echo "\t\t\t\t\t\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 146
                echo "\t\t\t\t\t\t\ticons
\t\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t";
            $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 149
            echo "\t\t\t\t";
        }
        // line 150
        echo "\t\t";
    }

    // line 191
    public function block_previewImageUrlVar($context, array $blocks = array())
    {
        // line 192
        echo "\t\t\t";
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if (($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "isNotRealAttachment", array()) == 1)) {
            // line 193
            echo "\t\t\t\t";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "url", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 195
            echo "\t\t\t\t";
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            if (isset($context["height"])) { $_height_ = $context["height"]; } else { $_height_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "id", array()), $_width_, $_height_, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "cropPosition", array()), (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100")))), "html", null, true);
            echo "
\t\t\t";
        }
        // line 197
        echo "\t\t";
    }

    // line 201
    public function block_imageAttributesStyleSize($context, array $blocks = array())
    {
        // line 202
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array())))) {
            // line 203
            echo "\t\t\t\twidth:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array()), "html", null, true);
            echo "px;
\t\t\t";
        }
        // line 205
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array())))) {
            // line 206
            echo "\t\t\t\theight:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array()), "html", null, true);
            echo "px;
\t\t\t";
        }
        // line 208
        echo "\t\t";
    }

    // line 212
    public function block_image_attributes($context, array $blocks = array())
    {
        // line 213
        echo "\t\t\tsrc=\"";
        if (isset($context["previewImgUrl"])) { $_previewImgUrl_ = $context["previewImgUrl"]; } else { $_previewImgUrl_ = null; }
        echo twig_escape_filter($this->env, $_previewImgUrl_, "html", null, true);
        echo "\"
\t\t\talt=\"";
        // line 214
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if ((twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "alt", array())) || ($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "alt", array()) == " "))) {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()), "html", null, true);
        } else {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "alt", array()), "html", null, true);
        }
        echo "\"
\t\t\ttitle=\"";
        // line 215
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "description", array()))) {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "description", array()), "html", null, true);
        } else {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()), "html", null, true);
        }
        echo "\"
\t\t\tdata-description=\"";
        // line 216
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "description", array()))) {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "description", array()), "html", null, true);
        } else {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()), "html", null, true);
        }
        echo "\"
\t\t\tdata-caption=\"";
        // line 217
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array()))) {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array()));
        } else {
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()));
        }
        echo "\"
\t\t\tdata-title=\"";
        // line 218
        if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()), "html", null, true);
        echo "\"
\t\t\tstyle=\"";
        // line 219
        if (isset($context["imageAttributesStyleSizeVar"])) { $_imageAttributesStyleSizeVar_ = $context["imageAttributesStyleSizeVar"]; } else { $_imageAttributesStyleSizeVar_ = null; }
        echo twig_escape_filter($this->env, $_imageAttributesStyleSizeVar_, "html", null, true);
        echo "\"
\t\t";
    }

    // line 224
    public function block_figcaption_style($context, array $blocks = array())
    {
        // line 225
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
            // line 226
            echo "\t\t\t\tfont-family:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t";
            // line 227
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_enabled", array()) == "true")) {
                // line 228
                echo "\t\t\t\t\tbackground-color:";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_color", array()), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
\t\t\t\t\theight : 100%;
\t\t\t\t\t";
                // line 231
                echo "\t\t\t\t";
            } else {
                // line 232
                echo "\t\t\t\t\theight : 100%;
\t\t\t\t\tbackground-color: transparent;
\t\t\t\t";
            }
            // line 235
            echo "\t\t\t";
        } else {
            // line 236
            echo "\t\t\t\tcolor:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\tbackground-color:";
            // line 237
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\tfont-size:";
            // line 238
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\ttext-align:";
            // line 239
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_align", array()), "html", null, true);
            echo ";
\t\t\t\tfont-family:";
            // line 240
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t";
            // line 241
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 242
                echo "\t\t\t\t\topacity:1;
\t\t\t\t\tbottom:0;
\t\t\t\t";
            }
            // line 245
            echo "\t\t\t";
        }
        // line 246
        echo "\t\t";
    }

    // line 250
    public function block_figcaption_attributes($context, array $blocks = array())
    {
        // line 251
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
            // line 252
            echo "\t\t\t\tdata-alpha=\"";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, twig_trim_filter((($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_transparency", array()), 5)) : (5))), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 254
        echo "\t\t\tdata-alpha=\"";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
        echo "\"
\t\t\tstyle=\"";
        // line 255
        if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
        echo twig_escape_filter($this->env, twig_trim_filter($_figcaptionStyle_), "html", null, true);
        echo "\"
\t\t";
    }

    // line 262
    public function block_figcaption_wrap($context, array $blocks = array())
    {
        // line 263
        echo "\t\t\t";
        // line 264
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
            // line 265
            echo "\t\t\t\t<div
\t\t\t\t\t\tclass=\"hi-icon-wrap ";
            // line 266
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (isset($context["length"])) { $_length_ = $context["length"]; } else { $_length_ = null; }
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "effect", array()), 0, ($_length_ - 1)), "html", null, true);
            echo " ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "effect", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\tdata-margin=\"";
            // line 267
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
            echo "\"
\t\t\t\t>
\t\t\t\t\t";
            // line 269
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            if (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array())))) {
                // line 270
                echo "
\t\t\t\t\t\t";
                // line 271
                ob_start();
                // line 272
                echo "\t\t\t\t\t\t\t";
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                if (twig_in_filter("youtu", $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()))) {
                    // line 273
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    if (isset($context["youtube"])) { $_youtube_ = $context["youtube"]; } else { $_youtube_ = null; }
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()), $_youtube_), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 274
                    $context["videoSource"] = "youtube";
                    // line 275
                    echo "\t\t\t\t\t\t\t";
                } elseif (twig_in_filter("vimeo.com", $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()))) {
                    // line 276
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    if (isset($context["vimeoPattern"])) { $_vimeoPattern_ = $context["vimeoPattern"]; } else { $_vimeoPattern_ = null; }
                    if (isset($context["vimeoReplace"])) { $_vimeoReplace_ = $context["vimeoReplace"]; } else { $_vimeoReplace_ = null; }
                    echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()), $_vimeoPattern_, $_vimeoReplace_)) . "?api=1"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 277
                    $context["videoSource"] = "vimeo";
                    // line 278
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 279
                    echo "\t\t\t\t\t\t\t\t";
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 281
                echo "\t\t\t\t\t\t";
                $context["videoUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 282
                echo "
\t\t\t\t\t\t";
                // line 283
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                $context["videoIcon"] = ((twig_in_filter("youtu", $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "video", array()))) ? ("icon-youtube") : ("icon-vimeo"));
                // line 284
                echo "
\t\t\t\t\t\t";
                // line 285
                ob_start();
                // line 286
                echo "\t\t\t\t\t\t\tmargin-left:";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t\tmargin-right:";
                // line 287
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t";
                $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 289
                echo "
\t\t\t\t\t\t<a href=\"";
                // line 290
                if (isset($context["videoUrl"])) { $_videoUrl_ = $context["videoUrl"]; } else { $_videoUrl_ = null; }
                echo twig_escape_filter($this->env, twig_trim_filter($_videoUrl_), "html", null, true);
                echo "\"
\t\t\t\t\t\t   data-id=\"gg-";
                // line 291
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "-";
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_photo_, "id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t   title=\"";
                // line 292
                if (isset($context["aTitle"])) { $_aTitle_ = $context["aTitle"]; } else { $_aTitle_ = null; }
                echo twig_escape_filter($this->env, twig_trim_filter($_aTitle_), "html", null, true);
                echo "\"
\t\t\t\t\t\t   class=\"hi-icon gg-video ";
                // line 293
                if (isset($context["videoIcon"])) { $_videoIcon_ = $context["videoIcon"]; } else { $_videoIcon_ = null; }
                echo twig_escape_filter($this->env, $_videoIcon_, "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 294
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "2")) {
                    echo " pbox";
                }
                // line 295
                echo "\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t   style=\"";
                // line 296
                if (isset($context["iconStyle"])) { $_iconStyle_ = $context["iconStyle"]; } else { $_iconStyle_ = null; }
                echo twig_escape_filter($this->env, twig_trim_filter($_iconStyle_), "html", null, true);
                echo "\"
\t\t\t\t\t\t   data-video-source=\"";
                // line 297
                if (isset($context["videoSource"])) { $_videoSource_ = $context["videoSource"]; } else { $_videoSource_ = null; }
                echo twig_escape_filter($this->env, $_videoSource_, "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 299
                echo "\t\t\t\t\t\t\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "1")) {
                    // line 300
                    echo "\t\t\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t";
                } else {
                    // line 302
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 303
                    echo "\t\t\t\t\t\t\t\t\trel=\"video\"
\t\t\t\t\t\t\t\t\t";
                    // line 305
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 306
                echo "\t\t\t\t\t\t>
\t\t\t\t\t\t\t";
                // line 308
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 310
            echo "
\t\t\t\t\t";
            // line 311
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            if (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array())))) {
                // line 312
                echo "\t\t\t\t\t\t<a title=\"";
                if (isset($context["aTitle"])) { $_aTitle_ = $context["aTitle"]; } else { $_aTitle_ = null; }
                echo twig_escape_filter($this->env, twig_trim_filter($_aTitle_), "html", null, true);
                echo "\" data-id=\"gg-";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "-";
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_photo_, "id", array()), "html", null, true);
                echo "\" href=\"";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (($this->getAttribute($_settings_, "openByLink", array()) == "on")) {
                    echo " ";
                    if (isset($context["prepareImgUrl"])) { $_prepareImgUrl_ = $context["prepareImgUrl"]; } else { $_prepareImgUrl_ = null; }
                    echo twig_escape_filter($this->env, $_prepareImgUrl_, "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array()), "html", null, true);
                    echo " ";
                }
                echo " \" target=\"";
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
                echo "\" class=\"hi-icon icon-link ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "2") && ($this->getAttribute($_settings_, "openByLink", array()) == "on"))) {
                    echo "pbox";
                }
                echo "\" style=\"";
                if (isset($context["iconStyle"])) { $_iconStyle_ = $context["iconStyle"]; } else { $_iconStyle_ = null; }
                echo twig_escape_filter($this->env, twig_trim_filter($_iconStyle_), "html", null, true);
                echo "\"></a>
\t\t\t\t\t";
            }
            // line 314
            echo "
\t\t\t\t\t";
            // line 315
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            if (( !array_key_exists("videoUrl", $context) && ( !$this->getAttribute($this->getAttribute($_photo_, "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "external_link", array()))))) {
                // line 316
                echo "\t\t\t\t\t\t<a title=\"";
                if (isset($context["aTitle"])) { $_aTitle_ = $context["aTitle"]; } else { $_aTitle_ = null; }
                echo twig_escape_filter($this->env, twig_trim_filter($_aTitle_), "html", null, true);
                echo "\" data-id=\"gg-";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "-";
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_photo_, "id", array()), "html", null, true);
                echo "\" href=\"";
                if (isset($context["prepareImgUrl"])) { $_prepareImgUrl_ = $context["prepareImgUrl"]; } else { $_prepareImgUrl_ = null; }
                echo twig_escape_filter($this->env, $_prepareImgUrl_, "html", null, true);
                echo "\" class=\"hi-icon icon-fullscreen gg-colorbox";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "2") &&  !array_key_exists("link", $context))) {
                    echo " pbox";
                }
                echo "\" style=\"";
                if (isset($context["iconStyle"])) { $_iconStyle_ = $context["iconStyle"]; } else { $_iconStyle_ = null; }
                echo twig_escape_filter($this->env, twig_trim_filter($_iconStyle_), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 317
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                if ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "1") && ($_link_ == false))) {
                    // line 318
                    echo "\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t";
                }
                // line 319
                echo ">Open in pop-up window</a>
\t\t\t\t\t";
            }
            // line 321
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 323
        echo "
\t\t\t";
        // line 324
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (( !$this->getAttribute($_settings_, "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "false"))) {
            // line 325
            echo "\t\t\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "enabled", array()) == "true")) {
                // line 326
                echo "\t\t\t\t\t";
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array()))) {
                    // line 327
                    echo "\t\t\t\t\t\t<div class=\"gg-image-caption fitvidsignore\" style=\"font-size:";
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t<object type=\"none/none\">
\t\t\t\t\t\t\t\t";
                    // line 329
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</object>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 333
                echo "\t\t\t\t";
            }
            // line 334
            echo "\t\t\t";
        }
        // line 335
        echo "\t\t";
    }

    // line 339
    public function block_figcaption_after($context, array $blocks = array())
    {
        // line 340
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true")) && ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "enabled", array()) == "true"))) {
            // line 341
            echo "
\t\t\t\t";
            // line 342
            ob_start();
            // line 343
            echo "\t\t\t\t\tcolor:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\t\tbackground-color:";
            // line 344
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\t\tfont-size:";
            // line 345
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\tfont-family:";
            // line 346
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t\t";
            // line 347
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_align", array()) != 3)) {
                // line 348
                echo "\t\t\t\t\t\ttext-align:";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_align", array()), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
\t\t\t\t\t";
            }
            // line 350
            echo "\t\t\t\t\t";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 351
                echo "\t\t\t\t\t\topacity:1;
\t\t\t\t\t\tbottom:0;
\t\t\t\t\t";
            }
            // line 354
            echo "\t\t\t\t\tvertical-align:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t";
            $context["captionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 356
            echo "
\t\t\t\t";
            // line 357
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (( !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array())) || ($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "tooltip", array()) == "false"))) {
                // line 358
                echo "\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"caption-with-";
                // line 359
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()))) {
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                } else {
                    echo "icons";
                }
                echo "\"
\t\t\t\t\t\t\tstyle=\"";
                // line 360
                if (isset($context["captionStyle"])) { $_captionStyle_ = $context["captionStyle"]; } else { $_captionStyle_ = null; }
                echo twig_escape_filter($this->env, $_captionStyle_, "html", null, true);
                echo "\"
\t\t\t\t\t\t\tdata-alpha=\"";
                // line 361
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t";
                // line 363
                if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array()))) {
                    // line 364
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo "; font-weight: 800;
\t\t\t\t\t\t\t\t\t\tvertical-align:";
                    // line 365
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 366
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    echo $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "caption", array());
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 369
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\t\t\tvertical-align:";
                    // line 370
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 371
                    if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_photo_, "attachment", array()), "title", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                }
                // line 374
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 377
            echo "\t\t\t";
        }
        // line 378
        echo "\t\t";
    }

    // line 382
    public function block_figure_after($context, array $blocks = array())
    {
        // line 383
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (( !$this->getAttribute($_settings_, "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "false"))) {
            // line 384
            echo "\t\t\t\t</a>
\t\t\t";
        }
        // line 386
        echo "\t\t";
    }

    // line 389
    public function block_oneGalleryImage($context, array $blocks = array())
    {
        // line 390
        echo "\t\t";
        if (isset($context["var_figure_before"])) { $_var_figure_before_ = $context["var_figure_before"]; } else { $_var_figure_before_ = null; }
        echo twig_escape_filter($this->env, $_var_figure_before_, "html", null, true);
        echo "
\t\t<FIGURE ";
        // line 391
        if (isset($context["var_figure_attributes"])) { $_var_figure_attributes_ = $context["var_figure_attributes"]; } else { $_var_figure_attributes_ = null; }
        echo twig_escape_filter($this->env, $_var_figure_attributes_, "html", null, true);
        echo " >
\t\t\t<div class=\"crop
\t\t\t\t";
        // line 393
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "overlay", array()) == "1") && ($this->getAttribute($_settings_, "use_shadow", array()) == "1"))) {
            // line 394
            echo "\t\t\t\t\timage-overlay
\t\t\t\t";
        }
        // line 395
        echo "\"
\t\t\t\t style=\"
\t\t\t\t ";
        // line 397
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "0") || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "3"))) {
            // line 398
            echo "\t\t\t\t\t\t width:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\t\t height:";
            // line 399
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\t\t overflow:hidden;
\t\t\t\t ";
        }
        // line 401
        echo "\">

\t\t\t\t<img ";
        // line 403
        if (isset($context["var_image_attributes"])) { $_var_image_attributes_ = $context["var_image_attributes"]; } else { $_var_image_attributes_ = null; }
        echo twig_escape_filter($this->env, $_var_image_attributes_, "html", null, true);
        echo " />
\t\t\t</div>
\t\t\t";
        // line 405
        $this->displayBlock('mosaicLastImageNumberWrapper', $context, $blocks);
        // line 407
        echo "\t\t\t";
        $this->displayBlock('mosaicFigcaptionWrapper', $context, $blocks);
        // line 420
        echo "\t\t</FIGURE>
\t\t";
        // line 421
        if (isset($context["var_figure_after"])) { $_var_figure_after_ = $context["var_figure_after"]; } else { $_var_figure_after_ = null; }
        echo twig_escape_filter($this->env, $_var_figure_after_, "html", null, true);
        echo "
\t";
    }

    // line 405
    public function block_mosaicLastImageNumberWrapper($context, array $blocks = array())
    {
        // line 406
        echo "\t\t\t";
    }

    // line 407
    public function block_mosaicFigcaptionWrapper($context, array $blocks = array())
    {
        // line 408
        echo "\t\t\t\t<FIGCAPTION ";
        if (isset($context["var_figcaption_attributes"])) { $_var_figcaption_attributes_ = $context["var_figcaption_attributes"]; } else { $_var_figcaption_attributes_ = null; }
        echo twig_escape_filter($this->env, $_var_figcaption_attributes_, "html", null, true);
        echo "\t>
\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"grid-gallery-figcaption-wrap\"
\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t";
        // line 412
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (( !$this->getAttribute($_settings_, "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "false"))) {
            // line 413
            echo "\t\t\t\t\t\t\t\t\tvertical-align:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t\t\t\t";
        }
        // line 414
        echo "\">
\t\t\t\t\t\t";
        // line 415
        if (isset($context["var_figcaption_wrap"])) { $_var_figcaption_wrap_ = $context["var_figcaption_wrap"]; } else { $_var_figcaption_wrap_ = null; }
        echo twig_escape_filter($this->env, $_var_figcaption_wrap_, "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</FIGCAPTION>
\t\t\t\t";
        // line 418
        if (isset($context["var_figcaption_after"])) { $_var_figcaption_after_ = $context["var_figcaption_after"]; } else { $_var_figcaption_after_ = null; }
        echo twig_escape_filter($this->env, $_var_figcaption_after_, "html", null, true);
        echo "
\t\t\t";
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1572 => 418,  1565 => 415,  1562 => 414,  1555 => 413,  1552 => 412,  1543 => 408,  1540 => 407,  1536 => 406,  1533 => 405,  1526 => 421,  1523 => 420,  1520 => 407,  1518 => 405,  1512 => 403,  1508 => 401,  1501 => 399,  1495 => 398,  1492 => 397,  1488 => 395,  1484 => 394,  1481 => 393,  1475 => 391,  1469 => 390,  1466 => 389,  1462 => 386,  1458 => 384,  1454 => 383,  1451 => 382,  1447 => 378,  1444 => 377,  1439 => 374,  1432 => 371,  1427 => 370,  1419 => 369,  1412 => 366,  1407 => 365,  1399 => 364,  1396 => 363,  1390 => 361,  1385 => 360,  1375 => 359,  1372 => 358,  1368 => 357,  1365 => 356,  1358 => 354,  1353 => 351,  1349 => 350,  1342 => 348,  1339 => 347,  1334 => 346,  1327 => 345,  1322 => 344,  1316 => 343,  1314 => 342,  1311 => 341,  1307 => 340,  1304 => 339,  1300 => 335,  1297 => 334,  1294 => 333,  1286 => 329,  1277 => 327,  1273 => 326,  1269 => 325,  1266 => 324,  1263 => 323,  1259 => 321,  1255 => 319,  1251 => 318,  1247 => 317,  1224 => 316,  1221 => 315,  1218 => 314,  1181 => 312,  1178 => 311,  1175 => 310,  1171 => 308,  1168 => 306,  1165 => 305,  1162 => 303,  1160 => 302,  1156 => 300,  1152 => 299,  1147 => 297,  1142 => 296,  1139 => 295,  1134 => 294,  1129 => 293,  1124 => 292,  1116 => 291,  1111 => 290,  1108 => 289,  1102 => 287,  1096 => 286,  1094 => 285,  1091 => 284,  1088 => 283,  1085 => 282,  1082 => 281,  1075 => 279,  1072 => 278,  1070 => 277,  1062 => 276,  1059 => 275,  1057 => 274,  1050 => 273,  1046 => 272,  1044 => 271,  1041 => 270,  1038 => 269,  1032 => 267,  1023 => 266,  1020 => 265,  1016 => 264,  1014 => 263,  1011 => 262,  1004 => 255,  998 => 254,  991 => 252,  987 => 251,  984 => 250,  980 => 246,  977 => 245,  972 => 242,  969 => 241,  964 => 240,  959 => 239,  952 => 238,  947 => 237,  941 => 236,  938 => 235,  933 => 232,  930 => 231,  923 => 228,  920 => 227,  914 => 226,  910 => 225,  907 => 224,  900 => 219,  895 => 218,  884 => 217,  873 => 216,  862 => 215,  851 => 214,  845 => 213,  842 => 212,  838 => 208,  831 => 206,  827 => 205,  820 => 203,  816 => 202,  813 => 201,  809 => 197,  799 => 195,  792 => 193,  788 => 192,  785 => 191,  781 => 150,  778 => 149,  775 => 148,  771 => 146,  764 => 144,  760 => 143,  757 => 142,  754 => 141,  749 => 140,  744 => 139,  741 => 138,  737 => 137,  733 => 136,  729 => 134,  726 => 133,  720 => 132,  714 => 131,  711 => 130,  708 => 129,  704 => 125,  701 => 124,  698 => 123,  691 => 121,  683 => 119,  679 => 118,  676 => 117,  669 => 115,  662 => 113,  657 => 112,  653 => 111,  650 => 110,  646 => 108,  642 => 106,  638 => 105,  634 => 104,  631 => 103,  627 => 99,  620 => 97,  616 => 96,  613 => 95,  606 => 79,  600 => 78,  597 => 77,  583 => 74,  580 => 73,  572 => 90,  568 => 88,  564 => 87,  557 => 85,  553 => 83,  548 => 82,  542 => 81,  540 => 77,  534 => 76,  532 => 73,  523 => 72,  520 => 71,  516 => 67,  513 => 66,  509 => 20,  502 => 18,  498 => 16,  494 => 15,  491 => 14,  486 => 389,  483 => 388,  480 => 387,  477 => 382,  475 => 381,  472 => 380,  469 => 379,  466 => 339,  464 => 338,  461 => 337,  458 => 336,  455 => 262,  453 => 261,  450 => 260,  446 => 259,  443 => 258,  440 => 257,  437 => 250,  435 => 249,  432 => 248,  429 => 247,  426 => 224,  424 => 223,  421 => 222,  418 => 221,  415 => 212,  413 => 211,  410 => 210,  407 => 209,  404 => 201,  402 => 200,  399 => 199,  396 => 198,  393 => 191,  391 => 190,  388 => 189,  385 => 188,  382 => 187,  379 => 186,  376 => 185,  373 => 184,  370 => 183,  367 => 182,  364 => 181,  361 => 180,  358 => 179,  355 => 178,  352 => 177,  349 => 176,  347 => 175,  345 => 174,  343 => 173,  341 => 172,  339 => 171,  336 => 170,  334 => 169,  331 => 168,  327 => 167,  324 => 166,  321 => 165,  318 => 164,  315 => 163,  312 => 162,  309 => 161,  305 => 160,  301 => 159,  299 => 158,  296 => 157,  292 => 156,  289 => 155,  286 => 154,  284 => 153,  281 => 152,  278 => 151,  275 => 129,  273 => 128,  270 => 127,  267 => 126,  264 => 103,  262 => 102,  259 => 101,  256 => 100,  253 => 95,  251 => 94,  248 => 93,  245 => 92,  242 => 71,  240 => 70,  237 => 69,  234 => 68,  231 => 66,  229 => 65,  226 => 64,  224 => 63,  221 => 62,  216 => 59,  211 => 58,  204 => 56,  199 => 55,  197 => 54,  194 => 53,  185 => 50,  182 => 49,  180 => 48,  174 => 47,  170 => 46,  168 => 45,  165 => 44,  160 => 41,  156 => 40,  153 => 39,  149 => 37,  145 => 36,  142 => 35,  138 => 33,  133 => 32,  131 => 31,  128 => 30,  120 => 27,  113 => 25,  109 => 24,  107 => 23,  104 => 22,  100 => 14,  93 => 12,  89 => 11,  85 => 9,  82 => 8,  66 => 7,  63 => 6,  57 => 5,  44 => 3,  40 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/helpers.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/shortcode/helpers.twig");
    }
}
