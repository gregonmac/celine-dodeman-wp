<?php

/* @optimization/index.twig */
class __TwigTemplate_1271a6ee56c64a6027cb12d6cc35e187e58947d3148515fca053cf543b518622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@optimization/index.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 5
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 7
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "optimization"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Optimization")), "html", null, true);
        echo "</a>
    </nav>

    <div class=\"sgg-io-tabs-links-list sgg-main-tab-anch\">
        <a href=\"#\" class=\"sgg-io-tab-link sggActive\" data-tab-id=\"sgg-maintab-image-opt\">
            <i class=\"fa fa-compress\"></i>
            ";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Optimize")), "html", null, true);
        echo "
        </a>
        <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-maintab-transfer-cdn\">
            <i class=\"fa fa-cloud-upload\"></i>
            ";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer to CDN")), "html", null, true);
        echo "
        </a>
    </div>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["imgOptTemplate"] = $this;
        // line 24
        echo "    <div class=\"supsystic-image-optimize\">
        <div class=\"sgg-io-tabs-list sgg-main-tab-anch\">
            <input id=\"sggImgOptMainTabName\" name=\"sggImgOptMainTabName\" value=\"";
        // line 26
        if (isset($context["tabName"])) { $_tabName_ = $context["tabName"]; } else { $_tabName_ = null; }
        echo twig_escape_filter($this->env, $_tabName_, "html", null, true);
        echo "\" type=\"hidden\"/>
            <div class=\"sgg-io-one-tab sgg-maintab-image-opt\">
                ";
        // line 28
        if (isset($context["imgOptTemplate"])) { $_imgOptTemplate_ = $context["imgOptTemplate"]; } else { $_imgOptTemplate_ = null; }
        if (isset($context["imgOptimizationSett"])) { $_imgOptimizationSett_ = $context["imgOptimizationSett"]; } else { $_imgOptimizationSett_ = null; }
        echo $_imgOptTemplate_->getimageOptimizeMainDialog($_imgOptTemplate_, $_imgOptimizationSett_);
        echo "
                ";
        // line 29
        if (isset($context["imgOptTemplate"])) { $_imgOptTemplate_ = $context["imgOptTemplate"]; } else { $_imgOptTemplate_ = null; }
        if (isset($context["imgOptimizationSett"])) { $_imgOptimizationSett_ = $context["imgOptimizationSett"]; } else { $_imgOptimizationSett_ = null; }
        if (isset($context["galleryList"])) { $_galleryList_ = $context["galleryList"]; } else { $_galleryList_ = null; }
        if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
        echo $_imgOptTemplate_->getimageOptimizeMainTab($_imgOptTemplate_, $_imgOptimizationSett_, $_galleryList_, $_statistic_);
        echo "
            </div>
            <div class=\"sgg-io-one-tab sgg-maintab-transfer-cdn sgg-io-tab-hidden\">
\t\t\t\t";
        // line 32
        if (isset($context["cdnSett"])) { $_cdnSett_ = $context["cdnSett"]; } else { $_cdnSett_ = null; }
        if (($_cdnSett_ == null)) {
            // line 33
            echo "\t\t\t\t\t<div class=\"sgg-error-list-page\">
\t\t\t\t\t\t<h2>";
            // line 34
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your host does not support the minimum requirements:")), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t";
            // line 35
            if (isset($context["cdnRequirements"])) { $_cdnRequirements_ = $context["cdnRequirements"]; } else { $_cdnRequirements_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_cdnRequirements_);
            foreach ($context['_seq'] as $context["_key"] => $context["elem1"]) {
                // line 36
                echo "\t\t\t\t\t\t\t<h3>";
                if (isset($context["elem1"])) { $_elem1_ = $context["elem1"]; } else { $_elem1_ = null; }
                echo twig_escape_filter($this->env, $_elem1_, "html", null, true);
                echo "</h3>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t\t";
            if (isset($context["imgOptTemplate"])) { $_imgOptTemplate_ = $context["imgOptTemplate"]; } else { $_imgOptTemplate_ = null; }
            if (isset($context["cdnSett"])) { $_cdnSett_ = $context["cdnSett"]; } else { $_cdnSett_ = null; }
            echo $_imgOptTemplate_->gettransferToCdnDialog($_cdnSett_);
            echo "
\t\t\t\t\t";
            // line 41
            if (isset($context["imgOptTemplate"])) { $_imgOptTemplate_ = $context["imgOptTemplate"]; } else { $_imgOptTemplate_ = null; }
            if (isset($context["cdnSett"])) { $_cdnSett_ = $context["cdnSett"]; } else { $_cdnSett_ = null; }
            if (isset($context["galleryList"])) { $_galleryList_ = $context["galleryList"]; } else { $_galleryList_ = null; }
            echo $_imgOptTemplate_->getimageOptimizeCdnTab($_cdnSett_, $_galleryList_);
            echo "
\t\t\t\t\t";
            // line 42
            if (isset($context["imgOptTemplate"])) { $_imgOptTemplate_ = $context["imgOptTemplate"]; } else { $_imgOptTemplate_ = null; }
            if (isset($context["cdnSett"])) { $_cdnSett_ = $context["cdnSett"]; } else { $_cdnSett_ = null; }
            echo $_imgOptTemplate_->getcdnServiceSettingDialog($_cdnSett_);
            echo "
\t\t\t\t";
        }
        // line 44
        echo "            </div>
        </div>
    </div>
";
    }

    // line 49
    public function getimageOptimizeCdnTab($__cdnSettings__ = null, $__cdnGalleryList__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "cdnSettings" => $__cdnSettings__,
            "cdnGalleryList" => $__cdnGalleryList__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 50
            echo "    <input type=\"hidden\" id=\"sgg-transfer-to-cdn-used\";/>
    <div class=\"supsystic-io-block sgg-cdn-service-block\">
        <div class=\"supsystic-io-block-table sgg-cnd-service-info\">
            <div class=\"supsystic-io-block-row\">
                <div class=\"supsystic-io-block-cell sgg-io-tab-hidden\">
                    <input value=\"keycdn\" ";
            // line 55
            if (isset($context["cdnSettings"])) { $_cdnSettings_ = $context["cdnSettings"]; } else { $_cdnSettings_ = null; }
            if (($this->getAttribute($_cdnSettings_, "current", array()) == "keycdn")) {
                echo " checked=\"checked\" ";
            }
            echo " type=\"radio\" class=\"selected-cnd-opt-service\" name=\"selected-cdn-opt-service\"/>
                </div>
                <div class=\"supsystic-io-block-cell\">";
            // line 57
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("KeyCDN")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">
                    <a href=\"\" class=\"button sgg-setup-button\" data-dialog-code=\"keycdn\"  data-dialog-title=\"";
            // line 59
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("KeyCDN Settings")), "html", null, true);
            echo "\">
                        <i class=\"fa fa-info-circle\"></i>
                        ";
            // line 61
            if (isset($context["cdnSettings"])) { $_cdnSettings_ = $context["cdnSettings"]; } else { $_cdnSettings_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_cdnSettings_, "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "u_name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($_cdnSettings_, "setting", array()), "keycdn", array()), "u_name", array()) != ""))) {
                // line 62
                echo "                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Change Details")), "html", null, true);
                echo "
                        ";
            } else {
                // line 64
                echo "                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Setup")), "html", null, true);
                echo "
                        ";
            }
            // line 66
            echo "                    </a>
                </div>
            </div>
        </div>
    </div>
\t<div class=\"supsystic-io-block sgg-cdn-list\">
\t\t<input id=\"sgg-cdn-auth-sett\" type=\"hidden\" value=\"";
            // line 72
            if (isset($context["cdnSettings"])) { $_cdnSettings_ = $context["cdnSettings"]; } else { $_cdnSettings_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($_cdnSettings_), "html", null, true);
            echo "\"/>
        <button class=\"button sgg-transer-to-cdn\" disabled=\"disabled\">";
            // line 73
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer selected")), "html", null, true);
            echo "</button>

        <div class=\"supsystic-io-block-table sgg-transfer-to-cdn-table\">
            <div class=\"supsystic-io-block-row sgg-table-row-header\">
                <div class=\"supsystic-io-block-cell\"></div>
                <div class=\"supsystic-io-block-cell\">";
            // line 78
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 79
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Images")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 80
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Size")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 81
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Location")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\"></div>
            </div>

\t\t\t";
            // line 85
            $context["disableTransferBtn"] = false;
            // line 86
            echo "\t\t\t";
            if (isset($context["cdnSettings"])) { $_cdnSettings_ = $context["cdnSettings"]; } else { $_cdnSettings_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_cdnSettings_, "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "u_name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($_cdnSettings_, "setting", array()), "keycdn", array()), "u_name", array()) != ""))) {
                // line 87
                echo "\t\t\t\t";
                $context["disableTransferBtn"] = false;
                // line 88
                echo "\t\t\t";
            } else {
                // line 89
                echo "\t\t\t\t";
                $context["disableTransferBtn"] = true;
                // line 90
                echo "\t\t\t";
            }
            // line 91
            echo "
            ";
            // line 92
            if (isset($context["cdnGalleryList"])) { $_cdnGalleryList_ = $context["cdnGalleryList"]; } else { $_cdnGalleryList_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_cdnGalleryList_);
            foreach ($context['_seq'] as $context["_key"] => $context["gallInfo"]) {
                // line 93
                echo "                <div class=\"supsystic-io-block-row sgg-cdn-info-row-";
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "id", array()), "html", null, true);
                echo "\">
                    <div class=\"supsystic-io-block-cell\">
\t\t\t\t\t\t<input class=\"sgg-check-gallery-inp\" name=\"sgg-check-gallery-inp\" type=\"checkbox\"
\t\t\t\t\t\t\t   data-gallery-size=\"";
                // line 96
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                if ($this->getAttribute($_gallInfo_, "cdn_size", array(), "any", true, true)) {
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "cdn_size", array()), "html", null, true);
                    echo " ";
                } elseif ($this->getAttribute($_gallInfo_, "optimized_size", array(), "any", true, true)) {
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "optimized_size", array()), "html", null, true);
                } else {
                    echo "-";
                }
                echo "\"
\t\t\t\t\t\t\t   data-gallery-img-cnt=\"";
                // line 97
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "photo_count", array()), "html", null, true);
                echo "\" value=\"";
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "id", array()), "html", null, true);
                echo "\"/>
                    </div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell\">";
                // line 99
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "title", array()), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell\">
\t\t\t\t\t\t";
                // line 101
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "photo_count", array()), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell sgg-cdn-info-size\">
\t\t\t\t\t\t";
                // line 104
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                if ($this->getAttribute($_gallInfo_, "cdn_size", array(), "any", true, true)) {
                    // line 105
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_gallInfo_, "cdn_size", array()) . " ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } elseif ($this->getAttribute($_gallInfo_, "optimized_size", array(), "any", true, true)) {
                    // line 107
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_gallInfo_, "optimized_size", array()) . " ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 108
                    echo "-";
                }
                // line 109
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell sgg-cdn-info-tr-date\">
\t\t\t\t\t\t";
                // line 111
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                if (($this->getAttribute($_gallInfo_, "cdn_last_transfer_date", array(), "any", true, true) && $this->getAttribute($_gallInfo_, "cdn_service_name", array(), "any", true, true))) {
                    // line 112
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_gallInfo_, "cdn_service_name", array()) . " / ") . $this->getAttribute($_gallInfo_, "cdn_last_transfer_date", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 113
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("website")), "html", null, true);
                }
                // line 114
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"supsystic-io-block-cell\">
\t\t\t\t\t\t<button class=\"button sgg-transfer-to\" data-gallery-id=\"";
                // line 116
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t";
                // line 117
                if (isset($context["disableTransferBtn"])) { $_disableTransferBtn_ = $context["disableTransferBtn"]; } else { $_disableTransferBtn_ = null; }
                if (($_disableTransferBtn_ == true)) {
                    echo " ";
                    echo "disabled=\"disabled\"";
                    echo " ";
                }
                // line 118
                echo "\t\t\t\t\t\t\t\tdata-photo-count=\"";
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "photo_count", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\tdata-img-size=\"";
                // line 119
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                if ($this->getAttribute($_gallInfo_, "cdn_size", array(), "any", true, true)) {
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "cdn_size", array()), "html", null, true);
                    echo " ";
                } elseif ($this->getAttribute($_gallInfo_, "optimized_size", array(), "any", true, true)) {
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "optimized_size", array()), "html", null, true);
                } else {
                    echo "-";
                }
                echo "\">
\t\t\t\t\t\t\t";
                // line 120
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer to")), "html", null, true);
                echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "        </div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 129
    public function gettransferToCdnDialog($__cdnSettings__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "cdnSettings" => $__cdnSettings__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 130
            echo "\t<div id=\"transfer-to-cdn-dialog\">";
            // line 131
            echo "\t\t<div class=\"sgg-io-tabs-links-list sgg-il-transfer-dialog sgg-io-tab-hidden\">
\t\t\t<a href=\"#\" class=\"sgg-io-tab-link \" data-tab-id=\"sgg-il-transfer-start\">1</a>
\t\t\t<a href=\"#\" class=\"sgg-io-tab-link \" data-tab-id=\"sgg-il-transfer-process\">2</a>
\t\t</div>

\t\t<div class=\"sgg-io-tabs-list sgg-il-transfer-dialog\">
        \t<div class=\"sgg-io-one-tab sgg-il-transfer-start\">
\t\t\t\t<div class=\"sgg-cdndlg-row\">
\t\t\t\t\t";
            // line 139
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer Gallery to")), "html", null, true);
            echo "
\t\t\t\t\t<strong><span class=\"sgg-cdn-service-name\">";
            // line 140
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Servicename")), "html", null, true);
            echo "</span></strong>
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row\">
\t\t\t\t\t<strong>";
            // line 143
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total images")), "html", null, true);
            echo ":</strong>
\t\t\t\t\t<span class=\"sgg-cdndlg-img-count\">55</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row sgg-cnddlg-imgs-size-row\">
\t\t\t\t\t<strong>";
            // line 147
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total size")), "html", null, true);
            echo ":</strong>
\t\t\t\t\t<span class=\"sgg-cnddlg-imgs-size\">66</span> ";
            // line 148
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb")), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
            // line 151
            echo "\t\t\t\t\t";
            // line 152
            echo "\t\t\t\t\t\t";
            // line 153
            echo "\t\t\t\t\t\t";
            // line 154
            echo "\t\t\t\t\t";
            // line 155
            echo "\t\t\t\t";
            // line 156
            echo "\t\t\t\t<input type=\"hidden\" id=\"sgg-transl-start-transf\" value=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Start Transfer")), "html", null, true);
            echo "\"/>
\t\t\t</div>

\t\t\t<div class=\"sgg-io-one-tab sgg-il-transfer-process\">
\t\t\t\t<div class=\"sgg-cdndlg-row\">
\t\t\t\t\t";
            // line 161
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Connected to")), "html", null, true);
            echo "
\t\t\t\t\t<strong><span class=\"sgg-cdn-service-name\">Servicename</span></strong>
\t\t\t\t\t";
            // line 163
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("service")), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row\"><strong>";
            // line 165
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer information:")), "html", null, true);
            echo "</strong></div>
\t\t\t\t<div class=\"sgg-cdndlg-row sgg-cdndlg-info\">
\t\t\t\t\t<div class=\"sgg-cdndlg-row\">
\t\t\t\t\t\t<span id=\"sgg-cdn-curr-gallery\">2</span>
\t\t\t\t\t\t";
            // line 169
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
            echo "
\t\t\t\t\t\t<span id=\"sgg-cdn-gallery-count\">22</span>
\t\t\t\t\t\t";
            // line 171
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("galleries")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sgg-cdndlg-row\">
\t\t\t\t\t\t<span id=\"sgg-cdn-curr-img\">1</span>
\t\t\t\t\t\t";
            // line 175
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
            echo "
\t\t\t\t\t\t<span id=\"sgg-cdn-img-count\">34</span>
\t\t\t\t\t\t<span class=\"sgg-cdn-img-text1\">";
            // line 177
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images")), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row sgg-cdn-info-error\">
\t\t\t\t\t<span>";
            // line 181
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer ending with errors!")), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"sgg-cdndlg-row sgg-cdn-info-succ\">
\t\t\t\t\t<span>";
            // line 184
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfer completed successfully!")), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 191
    public function getimageOptimizeMainDialog($___selfTemplate__ = null, $__ioSetting__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "_selfTemplate" => $___selfTemplate__,
            "ioSetting" => $__ioSetting__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 192
            echo "    <input type=\"hidden\" id=\"sgg-ai-optimize-sel-auth\" value=\"";
            if (isset($context["ioSetting"])) { $_ioSetting_ = $context["ioSetting"]; } else { $_ioSetting_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($_ioSetting_), "html", null, true);
            echo "\"/>
    <div class=\"sgg-io-tabs-links-list sgg-il-optimize-dlg-wnd sgg-io-tab-hidden\">
        <a href=\"#\" class=\"sgg-io-tab-link sggActive\" data-tab-id=\"sgg-il-optimize-start\">FirstPage</a>
        <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-il-optimize-servlist\">Service List</a>
        <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-il-optimize-process\">Image Optimize process</a>
        <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-il-optimize-result\">Image Optimize Result</a>
    </div>

    <!--  sgg-io-tab-hidden -->
    <div class=\"sgg-io-tabs-list sgg-il-optimize-dlg-wnd\">
        <div class=\"sgg-io-one-tab sgg-il-optimize-start sgg-io-tab-hidden\">
\t\t\t<input type=\"hidden\" id=\"sgg-transl-img-opt-1\" value=\"";
            // line 203
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image optimization")), "html", null, true);
            echo "\"/>
\t\t\t<input type=\"hidden\" id=\"sgg-transl-start-opt-1\" value=\"";
            // line 204
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Start Optimization")), "html", null, true);
            echo "\"/>

            ";
            // line 207
            echo "                ";
            // line 208
            echo "                ";
            // line 209
            echo "                    ";
            // line 210
            echo "                        ";
            // line 211
            echo "                    ";
            // line 212
            echo "                ";
            // line 213
            echo "                    ";
            // line 214
            echo "                ";
            // line 215
            echo "            ";
            // line 216
            echo "
            <div class=\"sgg-il-os-item\">
                <div class=\"sgg-il-os-onerow\">";
            // line 218
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images")), "html", null, true);
            echo ":
\t\t\t\t\t<div id=\"sgg-il-full-img-cnt-div\" class=\"sgg-il-img-cnt-type-obj\">
\t\t\t\t\t\t<span id=\"sgg-il-amount-img-cnt\">18</span>
\t\t\t\t\t\t(<span class=\"sgg-il-preview-img-cnt\">9</span> preview and <span class=\"sgg-il-original-img-cnt\">9</span> original images)
\t\t\t\t\t</div>
\t\t\t\t</div><br/>
                <div id=\"sgg-iop-totalrow\" class=\"sgg-il-os-onerow\">";
            // line 224
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Size")), "html", null, true);
            echo ":
\t\t\t\t\t<span id=\"sgg-il-gallery-size\">00</span>
\t\t\t\t\t<span id=\"sgg-il-gallery-units\">";
            // line 226
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb")), "html", null, true);
            echo "</span>
\t\t\t\t</div>
            </div>
            <label for=\"sgg-il-backup-img-src\" class=\"sgg-il-os-item\">
                <input id=\"sgg-il-backup-img-src\" class=\"sgg-il-checkbox-prm\" name=\"sgg-il-backup-img-src\" type=\"checkbox\" checked=\"checked\"/>
                ";
            // line 231
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Backup Images Source")), "html", null, true);
            echo "
            </label>
            <label for=\"sgg-il-optimize-preview\" class=\"sgg-il-os-item\">
                <input id=\"sgg-il-optimize-preview\" class=\"sgg-il-checkbox-prm\" name=\"sgg-il-optimize-preview\" type=\"checkbox\" checked=\"checked\"/>
                ";
            // line 235
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize Preview images")), "html", null, true);
            echo "
            </label>
        </div>
        <div class=\"sgg-io-one-tab sgg-il-optimize-servlist sgg-io-tab-hidden\">
            ";
            // line 239
            if (isset($context["_selfTemplate"])) { $__selfTemplate_ = $context["_selfTemplate"]; } else { $__selfTemplate_ = null; }
            if (isset($context["ioSetting"])) { $_ioSetting_ = $context["ioSetting"]; } else { $_ioSetting_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($__selfTemplate_, "imageOptimizeServiceSettingTable", array(0 => $__selfTemplate_, 1 => $_ioSetting_), "method"), "html", null, true);
            echo "
        </div>
        <div class=\"sgg-io-one-tab sgg-il-optimize-process sgg-io-tab-hidden\">
\t\t\t<input type=\"hidden\" id=\"sgg-transl-img-opt-2\" value=\"";
            // line 242
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimization in process...")), "html", null, true);
            echo "\"/>
            <div class=\"sgg-optimize-info sgg-io-tab-hidden\">
                <div>
                    ";
            // line 245
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Connected to")), "html", null, true);
            echo "
                    <strong><span id=\"sgg-conn-to-serv-name\">servicename</span></strong>
                    ";
            // line 247
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("service")), "html", null, true);
            echo "
                </div>
                <div><strong>";
            // line 249
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize:")), "html", null, true);
            echo "</strong></div>
                <div>
                    <span id=\"sgg-opt-curr-gallery\">curr</span>
                    ";
            // line 252
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
            echo "
                    <span id=\"sgg-opt-numb-gallery\">numb</span>
                    ";
            // line 254
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("galleries")), "html", null, true);
            echo "
                </div>
                <div>
                    <span id=\"sgg-opt-curr-img\">curr</span>
                    ";
            // line 258
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
            echo "
                    <span id=\"sgg-opt-numb-imgs\">numb</span>
                    <span class=\"sgg-iop-without-prev\">";
            // line 260
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images")), "html", null, true);
            echo "</span>
                    <span class=\"sgg-iop-with-prev\">";
            // line 261
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images (preview and original images)")), "html", null, true);
            echo "</span>
                </div>
                <div class=\"sgg-opt-info-error sgg-io-tab-hidden\">
                    <span>";
            // line 264
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Error ocured. Optimize process stopped!")), "html", null, true);
            echo "</span>
                </div>
            </div>
        </div>
        <div class=\"sgg-io-one-tab sgg-il-optimize-result sgg-io-tab-hidden\">
\t\t\t<input type=\"hidden\" id=\"sgg-transl-img-opt-3\" value=\"";
            // line 269
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimization complete")), "html", null, true);
            echo "\"/>
            <div class=\"sgg-iores-info\">
                <div class=\"sgg-iores-txt\">
                    ";
            // line 272
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images size before:")), "html", null, true);
            echo "
                    <span class=\"sgg-iores-tsizebefore\">0</span>
                    ";
            // line 274
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb")), "html", null, true);
            echo "
                </div>
                <div class=\"sgg-iores-txt\">
                    ";
            // line 277
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images size after:")), "html", null, true);
            echo "
                    <span class=\"sgg-iores-tsizeafter\">0</span>
                    ";
            // line 279
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb")), "html", null, true);
            echo "
                </div>
                <div class=\"sgg-iores-txt\">
                    ";
            // line 282
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Saving:")), "html", null, true);
            echo " <span class=\"sgg-iores-tsaving\">0</span>%
                </div>
            </div>
            <br/>
            <button class=\"button sgg-il-optimize-again-btn\">
                <i class=\"fa fa-compress\"></i>
                ";
            // line 288
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize one more time")), "html", null, true);
            echo "
            </button>
            <br/>
            <a href=\"\" class=\"sgg-iores-link-compare\">
                ";
            // line 292
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show image comparision")), "html", null, true);
            echo "
            </a>

            <div class=\"supsystic-io-block-table sgg-iores-compare-wrap sgg-io-tab-hidden\">
                <!-- Rows to compare Images -->
            </div>
            <div class=\"sgg-iores-cmp-template sgg-io-tab-hidden\">
                <div class=\"supsystic-io-block-row sgg-compare-first-row\">
                    <div class=\"supsystic-io-block-cell\"><h3>";
            // line 300
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Before")), "html", null, true);
            echo "</h3></div>
                    <div class=\"supsystic-io-block-cell\"><h3>";
            // line 301
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("After")), "html", null, true);
            echo "</h3></div>
                </div>
            </div>
        </div>
    </div>

    ";
            // line 307
            if (isset($context["_selfTemplate"])) { $__selfTemplate_ = $context["_selfTemplate"]; } else { $__selfTemplate_ = null; }
            if (isset($context["ioSetting"])) { $_ioSetting_ = $context["ioSetting"]; } else { $_ioSetting_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($__selfTemplate_, "imageOptimizeServiceSettingsDialog", array(0 => $_ioSetting_), "method"), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 310
    public function getimageOptimizeServiceSettingTable($___selfTemplate__ = null, $__ioSetting__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "_selfTemplate" => $___selfTemplate__,
            "ioSetting" => $__ioSetting__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 311
            echo "    <div class=\"supsystic-io-block sgg-service-setting\">
        <div class=\"supsystic-io-block-table sgg-service-info\">
            <div class=\"supsystic-io-block-row\">
                <div class=\"supsystic-io-block-cell sgg-io-tab-hidden\">
                    <input value=\"tinypng\" ";
            // line 315
            if (isset($context["ioSetting"])) { $_ioSetting_ = $context["ioSetting"]; } else { $_ioSetting_ = null; }
            if (($this->getAttribute($_ioSetting_, "current", array()) == "tinypng")) {
                echo " checked=\"checked\" ";
            }
            echo " type=\"radio\" class=\"selected-opt-service\" name=\"selected-opt-service\"/>
                </div>
                <div class=\"supsystic-io-block-cell\">";
            // line 317
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("TinyPNG")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">
                    <a href=\"\" class=\"button sgg-setup-button\" data-dialog-code=\"tinypng\"  data-dialog-title=\"";
            // line 319
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("TinyPNG Settings")), "html", null, true);
            echo "\">
                        <i class=\"fa fa-info-circle\"></i>
                        ";
            // line 321
            if (isset($context["ioSetting"])) { $_ioSetting_ = $context["ioSetting"]; } else { $_ioSetting_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_ioSetting_, "setting", array(), "any", false, true), "tinypng", array(), "any", false, true), "auth_key", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($_ioSetting_, "setting", array()), "tinypng", array()), "auth_key", array()) != ""))) {
                // line 322
                echo "                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Change Details")), "html", null, true);
                echo "
                        ";
            } else {
                // line 324
                echo "                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Setup")), "html", null, true);
                echo "
                        ";
            }
            // line 326
            echo "                    </a>
                </div>
            </div>
            ";
            // line 330
            echo "                ";
            // line 331
            echo "                    ";
            // line 332
            echo "                ";
            // line 333
            echo "                ";
            // line 334
            echo "                ";
            // line 335
            echo "                    ";
            // line 336
            echo "                        ";
            // line 337
            echo "                        ";
            // line 338
            echo "                    ";
            // line 339
            echo "                ";
            // line 340
            echo "            ";
            // line 341
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 345
    public function getimageOptimizeMainTab($___selfTemplate__ = null, $__ioSetting__ = null, $__galleryList__ = null, $__statistic__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "_selfTemplate" => $___selfTemplate__,
            "ioSetting" => $__ioSetting__,
            "galleryList" => $__galleryList__,
            "statistic" => $__statistic__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 346
            echo "    <input type=\"hidden\" id=\"sgg-optimize-main-tab-inp\"/>
    ";
            // line 347
            if (isset($context["_selfTemplate"])) { $__selfTemplate_ = $context["_selfTemplate"]; } else { $__selfTemplate_ = null; }
            if (isset($context["ioSetting"])) { $_ioSetting_ = $context["ioSetting"]; } else { $_ioSetting_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($__selfTemplate_, "imageOptimizeServiceSettingTable", array(0 => $__selfTemplate_, 1 => $_ioSetting_), "method"), "html", null, true);
            echo "

    <div class=\"supsystic-io-block sgg-io-stat-block\">
        <!--<div class=\"sgg-io-tabs-links-list sgg-io-stat-anch\">
            <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-io-one-tab\">All</a>
            <a href=\"#\" class=\"sgg-io-tab-link sggActive\" data-tab-id=\"sgg-stat-tab-1\">TinyPNG</a>
            <a href=\"#\" class=\"sgg-io-tab-link\" data-tab-id=\"sgg-stat-tab-2\">Another Service</a>
        </div>-->
        <div class=\"sgg-io-tabs-list sgg-io-stat-anch\">
            <div class=\"sgg-io-one-tab sgg-stat-tab-1\">
                ";
            // line 357
            if (isset($context["_selfTemplate"])) { $__selfTemplate_ = $context["_selfTemplate"]; } else { $__selfTemplate_ = null; }
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($__selfTemplate_, "oneImageOptimizeStatTable", array(0 => "tinypng", 1 => "", 2 => $_statistic_), "method"), "html", null, true);
            echo "
            </div>
            <!-- <div class=\"sgg-io-one-tab sgg-stat-tab-2 sgg-io-tab-hidden\">
                ";
            // line 361
            echo "            </div>-->
        </div>
    </div>

    <div class=\"supsystic-io-block sgg-optimize-list\">
        <button class=\"button sgg-optimize-selected\" disabled=\"disabled\">";
            // line 366
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize selected")), "html", null, true);
            echo "</button>
        <div class=\"supsystic-io-block-table sgg-gallery-opt-table\">
            <div class=\"supsystic-io-block-row sgg-table-row-header\">
                <div class=\"supsystic-io-block-cell\"></div>
                <div class=\"supsystic-io-block-cell\">";
            // line 370
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 371
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Images")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 372
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total Size")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\">";
            // line 373
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimization")), "html", null, true);
            echo "</div>
                <div class=\"supsystic-io-block-cell\"></div>
            </div>
            ";
            // line 376
            if (isset($context["galleryList"])) { $_galleryList_ = $context["galleryList"]; } else { $_galleryList_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_galleryList_);
            foreach ($context['_seq'] as $context["_key"] => $context["gallInfo"]) {
                // line 377
                echo "                <div class=\"supsystic-io-block-row\">
                    <div class=\"supsystic-io-block-cell\">
                        <input class=\"sgg-checkb-inp\" type=\"checkbox\" value=\"";
                // line 379
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "id", array()), "html", null, true);
                echo "\"
                               data-once-optimize=\"";
                // line 380
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                if (($this->getAttribute($_gallInfo_, "last_optimize_date", array(), "any", true, true) && $this->getAttribute($_gallInfo_, "service_name", array(), "any", true, true))) {
                    echo "1";
                } else {
                    echo "0";
                }
                echo "\"
                               data-gallery-total-size=\"";
                // line 381
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                if ($this->getAttribute($_gallInfo_, "optimized_size", array(), "any", true, true)) {
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "optimized_size", array()), "html", null, true);
                } else {
                    echo "-";
                }
                echo "\"
                               data-phot-count=\"";
                // line 382
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "photo_count", array()), "html", null, true);
                echo "\"
                        />
                    </div>
                    <div class=\"supsystic-io-block-cell\">";
                // line 385
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "title", array()), "html", null, true);
                echo "</div>
                    <div class=\"supsystic-io-block-cell\">
                        ";
                // line 387
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "photo_count", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"supsystic-io-block-cell\">
                        ";
                // line 390
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                if ($this->getAttribute($_gallInfo_, "optimized_size", array(), "any", true, true)) {
                    // line 391
                    echo "                            ";
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, (($this->getAttribute($_gallInfo_, "optimized_size", array()) . " ") . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 393
                    echo "                            -
                        ";
                }
                // line 395
                echo "                    </div>
                    <div class=\"supsystic-io-block-cell\">
                        ";
                // line 397
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                if ((($this->getAttribute($_gallInfo_, "last_optimize_date", array(), "any", true, true) && $this->getAttribute($_gallInfo_, "service_name", array(), "any", true, true)) && $this->getAttribute($_gallInfo_, "optimize_percent", array(), "any", true, true))) {
                    // line 398
                    echo "                            ";
                    // line 399
                    echo "                            ";
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, ((($this->getAttribute($_gallInfo_, "last_optimize_date", array()) . " / ") . $this->getAttribute($_gallInfo_, "optimize_percent", array())) . "% "), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 401
                    echo "                            ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
                    echo "
                        ";
                }
                // line 403
                echo "\t\t\t\t\t</div>
                    <div class=\"supsystic-io-block-cell\">
                        ";
                // line 405
                if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                if ($this->getAttribute($_gallInfo_, "last_optimize_date", array(), "any", true, true)) {
                    // line 406
                    echo "                            <button class=\"button sgg-restore-src-img\" data-gallery-id=\"";
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "id", array()), "html", null, true);
                    echo "\">
                                ";
                    // line 407
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Restore Source Images")), "html", null, true);
                    echo "
                            </button>
                            <div class=\"sgg-opt-twi-button\">
                                <button class=\"button sgg-tbl-optimize-retr\"
                                        data-gallery-id=\"";
                    // line 411
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "id", array()), "html", null, true);
                    echo "\"
                                        data-gallery-total-size=\"";
                    // line 412
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    if ($this->getAttribute($_gallInfo_, "optimized_size", array(), "any", true, true)) {
                        if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "optimized_size", array()), "html", null, true);
                    } else {
                        echo "-";
                    }
                    echo "\"
                                        data-photo-count=\"";
                    // line 413
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "photo_count", array()), "html", null, true);
                    echo "\">
                                    ";
                    // line 414
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize")), "html", null, true);
                    echo "
                                </button>
                                <br/><span class=\"sgg-more-info-str\">* one more time</span>
                            </div>
                        ";
                } else {
                    // line 419
                    echo "                            <button class=\"button sgg-restore-src-img sgg-io-tab-hidden\" data-gallery-id=\"";
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "id", array()), "html", null, true);
                    echo "\">
                                ";
                    // line 420
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Restore Source Images")), "html", null, true);
                    echo "
                            </button>
                            <button class=\"button sgg-tbl-optimize-first\"
                                    data-gallery-id=\"";
                    // line 423
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "id", array()), "html", null, true);
                    echo "\"
                                    data-gallery-total-size=\"";
                    // line 424
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    if ($this->getAttribute($_gallInfo_, "optimized_size", array(), "any", true, true)) {
                        if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "optimized_size", array()), "html", null, true);
                    } else {
                        echo "-";
                    }
                    echo "\"
                                    data-photo-count=\"";
                    // line 425
                    if (isset($context["gallInfo"])) { $_gallInfo_ = $context["gallInfo"]; } else { $_gallInfo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gallInfo_, "photo_count", array()), "html", null, true);
                    echo "\">
                                ";
                    // line 426
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimize Now")), "html", null, true);
                    echo "
                            </button>
                        ";
                }
                // line 429
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 432
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 436
    public function getimageOptimizeServiceSettingsDialog($__ioSetting__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "ioSetting" => $__ioSetting__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 437
            echo "    ";
            $context["helper1"] = $this->loadTemplate("@core/helpers.twig", "@optimization/index.twig", 437);
            // line 438
            echo "
    <div id=\"sggDialogSeviceSetting\" title=\"\" style=\"display:none;\">
        <div class=\"sgg-dialog-block-part sgg-io-tab-hidden\" data-img-opt-sett-code=\"tinypng\">
            <label>
                ";
            // line 442
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your TinyPNG API key")), "html", null, true);
            echo "
                ";
            // line 443
            if (isset($context["helper1"])) { $_helper1_ = $context["helper1"]; } else { $_helper1_ = null; }
            echo $_helper1_->getshowTooltip(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your name and email address on this <a target='_blank' href='https://tinypng.com/developers'>page</a> to retrieve your API key. On your email will be sent a link to your API key. Follow the link from email and grab your API key.")), "top", true);
            echo "
                <br/>
                <input type=\"text\" class=\"sgg-tinypng-sett-auth-val\" name=\"tinypng-auth-val\" value=\"";
            // line 445
            if (isset($context["ioSetting"])) { $_ioSetting_ = $context["ioSetting"]; } else { $_ioSetting_ = null; }
            if ($this->getAttribute($this->getAttribute($this->getAttribute($_ioSetting_, "setting", array(), "any", false, true), "tinypng", array(), "any", false, true), "auth_key", array(), "any", true, true)) {
                if (isset($context["ioSetting"])) { $_ioSetting_ = $context["ioSetting"]; } else { $_ioSetting_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_ioSetting_, "setting", array()), "tinypng", array()), "auth_key", array()), "html", null, true);
            }
            echo "\"/>
            </label>
            <button class=\"button sgg-setup-button sgg-tinypng-save\" >";
            // line 447
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
            echo "</button>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 452
    public function getcdnServiceSettingDialog($__cdnSett__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "cdnSett" => $__cdnSett__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 453
            echo "    ";
            $context["helper1"] = $this->loadTemplate("@core/helpers.twig", "@optimization/index.twig", 453);
            // line 454
            echo "
    <div id=\"sggCdnDialogSeviceSett\" title=\"\" style=\"display:none;\">
        <div class=\"sgg-dialog-block-part sgg-io-tab-hidden\" data-img-opt-sett-code=\"keycdn\">
            <label>
                ";
            // line 458
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your Site name")), "html", null, true);
            echo "
\t\t\t\t";
            // line 459
            if (isset($context["helper1"])) { $_helper1_ = $context["helper1"]; } else { $_helper1_ = null; }
            echo $_helper1_->getshowTooltip(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your KeyCdn Zone name (for example: pz-6f09.kxcdn.com)")), "top", true);
            echo "
\t\t\t\t<br/>
                <input type=\"text\" autocomplete=\"off\" class=\"sgg-keycdn-sett-zonename\" name=\"sgg-keycdn-sett-sitename\" value=\"";
            // line 461
            if (isset($context["cdnSett"])) { $_cdnSett_ = $context["cdnSett"]; } else { $_cdnSett_ = null; }
            if ($this->getAttribute($this->getAttribute($this->getAttribute($_cdnSett_, "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "zone_name", array(), "any", true, true)) {
                if (isset($context["cdnSett"])) { $_cdnSett_ = $context["cdnSett"]; } else { $_cdnSett_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_cdnSett_, "setting", array()), "keycdn", array()), "zone_name", array()), "html", null, true);
            }
            echo "\"/>
            </label>
            <br/>
\t\t\t<label>
\t\t\t\t";
            // line 465
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your username")), "html", null, true);
            echo "
\t\t\t\t";
            // line 466
            if (isset($context["helper1"])) { $_helper1_ = $context["helper1"]; } else { $_helper1_ = null; }
            echo $_helper1_->getshowTooltip(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your KeyCdn username")), "top", true);
            echo "
\t\t\t\t<br/>
\t\t\t\t<input type=\"text\" autocomplete=\"off\" class=\"sgg-keycdn-sett-uname\" name=\"sgg-keycdn-sett-uname\" value=\"";
            // line 468
            if (isset($context["cdnSett"])) { $_cdnSett_ = $context["cdnSett"]; } else { $_cdnSett_ = null; }
            if ($this->getAttribute($this->getAttribute($this->getAttribute($_cdnSett_, "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "u_name", array(), "any", true, true)) {
                if (isset($context["cdnSett"])) { $_cdnSett_ = $context["cdnSett"]; } else { $_cdnSett_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_cdnSett_, "setting", array()), "keycdn", array()), "u_name", array()), "html", null, true);
            }
            echo "\"/>
\t\t\t</label><br/>
\t\t\t<label>
\t\t\t\t";
            // line 471
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your password")), "html", null, true);
            echo "
\t\t\t\t";
            // line 472
            if (isset($context["helper1"])) { $_helper1_ = $context["helper1"]; } else { $_helper1_ = null; }
            echo $_helper1_->getshowTooltip(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your KeyCdn password")), "top", true);
            echo "
\t\t\t\t<br/>
\t\t\t\t";
            // line 475
            echo "\t\t\t\t<input type=\"password\" autocomplete=\"off\" class=\"sgg-keycdn-sett-upass\" name=\"sgg-keycdn-sett-upass\" value=\"\"/>
\t\t\t</label><br/>
\t\t\t<label>
\t\t\t\t";
            // line 478
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your ftp base path")), "html", null, true);
            echo "
\t\t\t\t";
            // line 479
            if (isset($context["helper1"])) { $_helper1_ = $context["helper1"]; } else { $_helper1_ = null; }
            echo $_helper1_->getshowTooltip(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter your KeyCdn ftp base path (for example: /pz)")), "top", true);
            echo "
\t\t\t\t<br/>
\t\t\t\t<input type=\"text\" class=\"sgg-keycdn-sett-base-ftp\" name=\"sgg-keycdn-sett-base-ftp\" value=\"";
            // line 481
            if (isset($context["cdnSett"])) { $_cdnSett_ = $context["cdnSett"]; } else { $_cdnSett_ = null; }
            if ($this->getAttribute($this->getAttribute($this->getAttribute($_cdnSett_, "setting", array(), "any", false, true), "keycdn", array(), "any", false, true), "base_ftp_path", array(), "any", true, true)) {
                if (isset($context["cdnSett"])) { $_cdnSett_ = $context["cdnSett"]; } else { $_cdnSett_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_cdnSett_, "setting", array()), "keycdn", array()), "base_ftp_path", array()), "html", null, true);
            }
            echo "\"/>
\t\t\t</label>
\t\t\t<button class=\"button sgg-setup-button sgg-keycdn-save\" disabled=\"disabled\">";
            // line 483
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
            echo "</button>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 488
    public function getoneImageOptimizeStatTable($__serviceCode__ = null, $__tblData__ = null, $__statistic__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "serviceCode" => $__serviceCode__,
            "tblData" => $__tblData__,
            "statistic" => $__statistic__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 489
            echo "    <div class=\"supsystic-io-block-table sgg-service-stat-info\">
        <div class=\"supsystic-io-block-caption\">
            <h4>
                ";
            // line 492
            if (isset($context["serviceCode"])) { $_serviceCode_ = $context["serviceCode"]; } else { $_serviceCode_ = null; }
            if (($_serviceCode_ == "tinypng")) {
                // line 493
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("TinyPNG")), "html", null, true);
                echo "
                ";
            } else {
                // line 495
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Incorrect service Code")), "html", null, true);
                echo "
                ";
            }
            // line 497
            echo "            </h4>
        </div>

        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\"></div>
            <div class=\"supsystic-io-block-cell\"><span class=\"sgg-text-style1\">";
            // line 502
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Last 24 hours")), "html", null, true);
            echo "</span></div>
            <div class=\"supsystic-io-block-cell\"><span class=\"sgg-text-style1\">";
            // line 503
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Week")), "html", null, true);
            echo "</span></div>
            <div class=\"supsystic-io-block-cell\"><span class=\"sgg-text-style1\">";
            // line 504
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Month")), "html", null, true);
            echo "</span></div>
        </div>
        ";
            // line 507
            echo "        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 508
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of images")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 509
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_statistic_, 1, array(), "array"), "photo_count", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 510
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_statistic_, 2, array(), "array"), "photo_count", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 511
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_statistic_, 3, array(), "array"), "photo_count", array()), "html", null, true);
            echo "</div>
        </div>
        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 514
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total size before")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 515
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_statistic_, 1, array(), "array"), "size_mb", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 516
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_statistic_, 2, array(), "array"), "size_mb", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 517
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_statistic_, 3, array(), "array"), "size_mb", array()), "html", null, true);
            echo "</div>
        </div>
        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 520
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Total size after")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 521
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_statistic_, 1, array(), "array"), "optimized_size_mb", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 522
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_statistic_, 2, array(), "array"), "optimized_size_mb", array()), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 523
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_statistic_, 3, array(), "array"), "optimized_size_mb", array()), "html", null, true);
            echo "</div>
        </div>
        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 526
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save in Mb")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 527
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_statistic_, 1, array(), "array"), "save_mb", array()) . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 528
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_statistic_, 2, array(), "array"), "save_mb", array()) . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 529
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_statistic_, 3, array(), "array"), "save_mb", array()) . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mb"))), "html", null, true);
            echo "</div>
        </div>
        <div class=\"supsystic-io-block-row\">
            <div class=\"supsystic-io-block-cell\">";
            // line 532
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save in %")), "html", null, true);
            echo "</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 533
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_statistic_, 1, array(), "array"), "save_percent", array()), "html", null, true);
            echo "%</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 534
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_statistic_, 2, array(), "array"), "save_percent", array()), "html", null, true);
            echo "%</div>
            <div class=\"supsystic-io-block-cell\">";
            // line 535
            if (isset($context["statistic"])) { $_statistic_ = $context["statistic"]; } else { $_statistic_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_statistic_, 3, array(), "array"), "save_percent", array()), "html", null, true);
            echo "%</div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@optimization/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1506 => 535,  1501 => 534,  1496 => 533,  1492 => 532,  1485 => 529,  1480 => 528,  1475 => 527,  1471 => 526,  1464 => 523,  1459 => 522,  1454 => 521,  1450 => 520,  1443 => 517,  1438 => 516,  1433 => 515,  1429 => 514,  1422 => 511,  1417 => 510,  1412 => 509,  1408 => 508,  1405 => 507,  1400 => 504,  1396 => 503,  1392 => 502,  1385 => 497,  1379 => 495,  1373 => 493,  1370 => 492,  1365 => 489,  1351 => 488,  1332 => 483,  1323 => 481,  1317 => 479,  1313 => 478,  1308 => 475,  1302 => 472,  1298 => 471,  1288 => 468,  1282 => 466,  1278 => 465,  1267 => 461,  1261 => 459,  1257 => 458,  1251 => 454,  1248 => 453,  1236 => 452,  1217 => 447,  1208 => 445,  1202 => 443,  1198 => 442,  1192 => 438,  1189 => 437,  1177 => 436,  1160 => 432,  1152 => 429,  1146 => 426,  1141 => 425,  1131 => 424,  1126 => 423,  1120 => 420,  1114 => 419,  1106 => 414,  1101 => 413,  1091 => 412,  1086 => 411,  1079 => 407,  1073 => 406,  1070 => 405,  1066 => 403,  1060 => 401,  1053 => 399,  1051 => 398,  1048 => 397,  1044 => 395,  1040 => 393,  1033 => 391,  1030 => 390,  1023 => 387,  1017 => 385,  1010 => 382,  1000 => 381,  991 => 380,  986 => 379,  982 => 377,  977 => 376,  971 => 373,  967 => 372,  963 => 371,  959 => 370,  952 => 366,  945 => 361,  937 => 357,  922 => 347,  919 => 346,  904 => 345,  887 => 341,  885 => 340,  883 => 339,  881 => 338,  879 => 337,  877 => 336,  875 => 335,  873 => 334,  871 => 333,  869 => 332,  867 => 331,  865 => 330,  860 => 326,  854 => 324,  848 => 322,  845 => 321,  840 => 319,  835 => 317,  827 => 315,  821 => 311,  808 => 310,  789 => 307,  780 => 301,  776 => 300,  765 => 292,  758 => 288,  749 => 282,  743 => 279,  738 => 277,  732 => 274,  727 => 272,  721 => 269,  713 => 264,  707 => 261,  703 => 260,  698 => 258,  691 => 254,  686 => 252,  680 => 249,  675 => 247,  670 => 245,  664 => 242,  656 => 239,  649 => 235,  642 => 231,  634 => 226,  629 => 224,  620 => 218,  616 => 216,  614 => 215,  612 => 214,  610 => 213,  608 => 212,  606 => 211,  604 => 210,  602 => 209,  600 => 208,  598 => 207,  593 => 204,  589 => 203,  573 => 192,  560 => 191,  539 => 184,  533 => 181,  526 => 177,  521 => 175,  514 => 171,  509 => 169,  502 => 165,  497 => 163,  492 => 161,  483 => 156,  481 => 155,  479 => 154,  477 => 153,  475 => 152,  473 => 151,  468 => 148,  464 => 147,  457 => 143,  451 => 140,  447 => 139,  437 => 131,  435 => 130,  423 => 129,  406 => 125,  395 => 120,  381 => 119,  375 => 118,  368 => 117,  363 => 116,  359 => 114,  356 => 113,  349 => 112,  346 => 111,  342 => 109,  339 => 108,  332 => 107,  325 => 105,  322 => 104,  315 => 101,  309 => 99,  300 => 97,  286 => 96,  278 => 93,  273 => 92,  270 => 91,  267 => 90,  264 => 89,  261 => 88,  258 => 87,  254 => 86,  252 => 85,  245 => 81,  241 => 80,  237 => 79,  233 => 78,  225 => 73,  220 => 72,  212 => 66,  206 => 64,  200 => 62,  197 => 61,  192 => 59,  187 => 57,  179 => 55,  172 => 50,  159 => 49,  152 => 44,  145 => 42,  138 => 41,  131 => 40,  127 => 38,  117 => 36,  112 => 35,  108 => 34,  105 => 33,  102 => 32,  92 => 29,  86 => 28,  80 => 26,  76 => 24,  73 => 23,  70 => 22,  62 => 17,  55 => 13,  43 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@optimization/index.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Optimization/views/index.twig");
    }
}
