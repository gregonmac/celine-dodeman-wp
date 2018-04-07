<?php

/* @galleries/shortcode/import.twig */
class __TwigTemplate_aeb39444d8aad6456836600a687bcf7c034f7d357d4d3624c415454d058f4c89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getshow($__areaWidth__ = null, $__galleryId__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "areaWidth" => $__areaWidth__,
            "galleryId" => $__galleryId__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"media-wrapr ";
            if (isset($context["galleryId"])) { $_galleryId_ = $context["galleryId"]; } else { $_galleryId_ = null; }
            if (twig_test_empty($_galleryId_)) {
                echo "no-gallery-id";
            }
            echo "\" style=\"width: ";
            if (isset($context["areaWidth"])) { $_areaWidth_ = $context["areaWidth"]; } else { $_areaWidth_ = null; }
            echo twig_escape_filter($this->env, $_areaWidth_, "html", null, true);
            echo "px;margin: 0 auto !important;display: block;\">
        <h1>";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose source")), "html", null, true);
            echo "</h1>
        <button class=\"button button-primary button-hero gallery\" id=\"gg-btn-upload\" data-folder-id=\"0\"
                style=\"width: 400px;\"
                data-gallery-id=\"";
            // line 6
            if (isset($context["galleryId"])) { $_galleryId_ = $context["galleryId"]; } else { $_galleryId_ = null; }
            echo twig_escape_filter($this->env, $_galleryId_, "html", null, true);
            echo "\" data-upload>
            <i class=\"fa fa-wordpress fa-2x\"></i>
            ";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from WordPress Media Library")), "html", null, true);
            echo "
        </button>
        <h3>";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from social networks")), "html", null, true);
            echo "</h3>
        <a class=\"button button-primary button-hero\" href=\"";
            // line 11
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (isset($context["galleryId"])) { $_galleryId_ = $context["galleryId"]; } else { $_galleryId_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "insta", 1 => "index", 2 => array("id" => $_galleryId_)), "method"), "html", null, true);
            echo "\" style=\"width: 400px;margin-bottom: 20px;\">
            <i class=\"fa fa-instagram fa-2x\"></i>
            ";
            // line 13
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Instagram account")), "html", null, true);
            echo "
        </a>
        ";
            // line 15
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (($this->getAttribute($_environment_, "isPro", array(), "method") == true)) {
                // line 16
                echo "            <a class=\"button button-primary button-hero\" href=\"";
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                if (isset($context["galleryId"])) { $_galleryId_ = $context["galleryId"]; } else { $_galleryId_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "flickr", 1 => "index", 2 => array("id" => $_galleryId_)), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 18
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 20
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                if (isset($context["galleryId"])) { $_galleryId_ = $context["galleryId"]; } else { $_galleryId_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "tumblr", 1 => "index", 2 => array("id" => $_galleryId_)), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 22
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 24
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                if (isset($context["galleryId"])) { $_galleryId_ = $context["galleryId"]; } else { $_galleryId_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "facebook", 1 => "index", 2 => array("id" => $_galleryId_)), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 26
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </a>

            <h3 style=\"margin-top: 0px\">";
                // line 29
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from cloud services")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 30
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                if (isset($context["galleryId"])) { $_galleryId_ = $context["galleryId"]; } else { $_galleryId_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "ftp", 1 => "index", 2 => array("id" => $_galleryId_)), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-file-image-o fa-2x\"></i>
                ";
                // line 32
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your FTP server")), "html", null, true);
                echo "
            </a>
            <a class=\"button button-primary button-hero\" href=\"";
                // line 34
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                if (isset($context["galleryId"])) { $_galleryId_ = $context["galleryId"]; } else { $_galleryId_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "googledrive", 1 => "index", 2 => array("id" => $_galleryId_)), "method"), "html", null, true);
                echo "\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-google fa-2x\"></i>
                ";
                // line 36
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Google Drive account")), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 39
                echo "            <h3>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get Pro to enable import")), "html", null, true);
                echo "</h3>
            <a class=\"button button-primary button-hero\" href=\"http://supsystic.com/plugins/photo-gallery/\" style=\"width: 400px;margin-bottom: 20px;\">
                <i class=\"fa fa-unlock fa-2x\"></i>
                ";
                // line 42
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get PRO")), "html", null, true);
                echo "
            </a>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 46
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-flickr fa-2x\"></i>
                ";
                // line 48
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Flickr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 52
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-tumblr fa-2x\"></i>
                ";
                // line 54
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Tumblr account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 58
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-facebook fa-2x\"></i>
                ";
                // line 60
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Facebook account")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 64
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-file-image-o fa-2x\"></i>
                ";
                // line 66
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your FTP server")), "html", null, true);
                echo "
            </button>
            <button class=\"button button-primary button-hero gallery\" data-folder-id=\"0\"
                    style=\"width: 400px;margin-bottom: 20px;\"
                    data-gallery-id=\"";
                // line 70
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "\" data-upload disabled>
                <i class=\"fa fa-google fa-2x\"></i>
                ";
                // line 72
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import from your Google Drive account")), "html", null, true);
                echo "
            </button>
        ";
            }
            // line 75
            echo "    </div>
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
        return "@galleries/shortcode/import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 75,  220 => 72,  214 => 70,  207 => 66,  201 => 64,  194 => 60,  188 => 58,  181 => 54,  175 => 52,  168 => 48,  162 => 46,  155 => 42,  148 => 39,  142 => 36,  135 => 34,  130 => 32,  123 => 30,  119 => 29,  113 => 26,  106 => 24,  101 => 22,  94 => 20,  89 => 18,  81 => 16,  78 => 15,  73 => 13,  66 => 11,  62 => 10,  57 => 8,  51 => 6,  45 => 3,  34 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/import.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/shortcode/import.twig");
    }
}
