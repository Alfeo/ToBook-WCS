<?php

/* TobookBundle::base.html.twig */
class __TwigTemplate_d69c14edb0a027be719fa6249831e00dd03906bfa9eb277b1d724a8d95e7cd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'extraCSS' => array($this, 'block_extraCSS'),
            'navbar' => array($this, 'block_navbar'),
            'ariane' => array($this, 'block_ariane'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
            'extraJavascript' => array($this, 'block_extraJavascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c39df13b22c7f1e784bcf2bb2d755485e73de82e43c5ffdb3fed8fa24283e722 = $this->env->getExtension("native_profiler");
        $__internal_c39df13b22c7f1e784bcf2bb2d755485e73de82e43c5ffdb3fed8fa24283e722->enter($__internal_c39df13b22c7f1e784bcf2bb2d755485e73de82e43c5ffdb3fed8fa24283e722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobookBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - ToBook</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/picto/logo-tobook.png"), "html", null, true);
        echo "\" />

        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style_clubhouse.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jcarousel.connected-carousels.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Raleway\">

        ";
        // line 18
        $this->displayBlock('extraCSS', $context, $blocks);
        // line 19
        echo "
    </head>
    <body>
        ";
        // line 23
        echo "        <div id=\"loading\"></div>
        <img id=\"loadingImg\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/gif/loading.svg"), "html", null, true);
        echo "\" alt=\"image de chargement page\">
        ";
        // line 25
        $this->displayBlock('navbar', $context, $blocks);
        // line 32
        echo "        
        ";
        // line 33
        $this->displayBlock('ariane', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "
        <div class=\"col-md-12 footer\"></div>

        ";
        // line 39
        $this->displayBlock('javascript', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        $this->displayBlock('extraJavascript', $context, $blocks);
        // line 63
        echo "
    </body>   
</html>
";
        
        $__internal_c39df13b22c7f1e784bcf2bb2d755485e73de82e43c5ffdb3fed8fa24283e722->leave($__internal_c39df13b22c7f1e784bcf2bb2d755485e73de82e43c5ffdb3fed8fa24283e722_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_869d9a55f445d87b4a26737f6fdd1ac92555425d739e800144f03f7f3a1ebd6a = $this->env->getExtension("native_profiler");
        $__internal_869d9a55f445d87b4a26737f6fdd1ac92555425d739e800144f03f7f3a1ebd6a->enter($__internal_869d9a55f445d87b4a26737f6fdd1ac92555425d739e800144f03f7f3a1ebd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_869d9a55f445d87b4a26737f6fdd1ac92555425d739e800144f03f7f3a1ebd6a->leave($__internal_869d9a55f445d87b4a26737f6fdd1ac92555425d739e800144f03f7f3a1ebd6a_prof);

    }

    // line 18
    public function block_extraCSS($context, array $blocks = array())
    {
        $__internal_3c3dd90c431bc886e661f2007ea43b752f2aa67364a12f3dbd44db88e382ca24 = $this->env->getExtension("native_profiler");
        $__internal_3c3dd90c431bc886e661f2007ea43b752f2aa67364a12f3dbd44db88e382ca24->enter($__internal_3c3dd90c431bc886e661f2007ea43b752f2aa67364a12f3dbd44db88e382ca24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraCSS"));

        
        $__internal_3c3dd90c431bc886e661f2007ea43b752f2aa67364a12f3dbd44db88e382ca24->leave($__internal_3c3dd90c431bc886e661f2007ea43b752f2aa67364a12f3dbd44db88e382ca24_prof);

    }

    // line 25
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_8bf836efa2ab9fe9e19e7f170a2114f0a9185290126d12fcc8e827449bd1afd2 = $this->env->getExtension("native_profiler");
        $__internal_8bf836efa2ab9fe9e19e7f170a2114f0a9185290126d12fcc8e827449bd1afd2->enter($__internal_8bf836efa2ab9fe9e19e7f170a2114f0a9185290126d12fcc8e827449bd1afd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $this->loadTemplate("TobookBundle:navbar:navbar.html.twig", "TobookBundle::base.html.twig", 25)->display($context);
        // line 26
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "infos"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "                <div class=\"alert alert-success\" role=\"alert\">
                    ";
            // line 28
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo " 
        ";
        
        $__internal_8bf836efa2ab9fe9e19e7f170a2114f0a9185290126d12fcc8e827449bd1afd2->leave($__internal_8bf836efa2ab9fe9e19e7f170a2114f0a9185290126d12fcc8e827449bd1afd2_prof);

    }

    // line 33
    public function block_ariane($context, array $blocks = array())
    {
        $__internal_2718c0071435611aa2553f4cd035df167ca07f75f7595f8b77f5eee0bc0e3a82 = $this->env->getExtension("native_profiler");
        $__internal_2718c0071435611aa2553f4cd035df167ca07f75f7595f8b77f5eee0bc0e3a82->enter($__internal_2718c0071435611aa2553f4cd035df167ca07f75f7595f8b77f5eee0bc0e3a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ariane"));

        
        $__internal_2718c0071435611aa2553f4cd035df167ca07f75f7595f8b77f5eee0bc0e3a82->leave($__internal_2718c0071435611aa2553f4cd035df167ca07f75f7595f8b77f5eee0bc0e3a82_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_baf9e2a7ca051b999108a60978f77cfd0cbd1c62c6fe58b801cbdcb778434f0a = $this->env->getExtension("native_profiler");
        $__internal_baf9e2a7ca051b999108a60978f77cfd0cbd1c62c6fe58b801cbdcb778434f0a->enter($__internal_baf9e2a7ca051b999108a60978f77cfd0cbd1c62c6fe58b801cbdcb778434f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_baf9e2a7ca051b999108a60978f77cfd0cbd1c62c6fe58b801cbdcb778434f0a->leave($__internal_baf9e2a7ca051b999108a60978f77cfd0cbd1c62c6fe58b801cbdcb778434f0a_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_311f1829cc8445670763267009917a2bcef61a9d39b87fcfa8ad680bccaa631e = $this->env->getExtension("native_profiler");
        $__internal_311f1829cc8445670763267009917a2bcef61a9d39b87fcfa8ad680bccaa631e->enter($__internal_311f1829cc8445670763267009917a2bcef61a9d39b87fcfa8ad680bccaa631e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 40
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBRBSgtiopCCg-UWOSzjqE1VN6KjSxTgss&signed_in=true&libraries=places\" async defer></script>
            <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 46
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/script/pagination.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/script/showMap.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.leanModal.min.js"), "html", null, true);
        echo "\"></script> 
            <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.dependClass.js"), "html", null, true);
        echo "\"></script> 
            <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/skel.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/util.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/main.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/clubhouse_jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/clubhouse_jcarousel.connected-carousels.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/clubhouse_onglets.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/clubhouse_commentaires.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_311f1829cc8445670763267009917a2bcef61a9d39b87fcfa8ad680bccaa631e->leave($__internal_311f1829cc8445670763267009917a2bcef61a9d39b87fcfa8ad680bccaa631e_prof);

    }

    // line 62
    public function block_extraJavascript($context, array $blocks = array())
    {
        $__internal_2241f22ad9ca04f180499bd5090078ac6565ecdc17177ebd4a32d4562684513d = $this->env->getExtension("native_profiler");
        $__internal_2241f22ad9ca04f180499bd5090078ac6565ecdc17177ebd4a32d4562684513d->enter($__internal_2241f22ad9ca04f180499bd5090078ac6565ecdc17177ebd4a32d4562684513d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraJavascript"));

        
        $__internal_2241f22ad9ca04f180499bd5090078ac6565ecdc17177ebd4a32d4562684513d->leave($__internal_2241f22ad9ca04f180499bd5090078ac6565ecdc17177ebd4a32d4562684513d_prof);

    }

    public function getTemplateName()
    {
        return "TobookBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 62,  267 => 59,  263 => 58,  259 => 57,  255 => 56,  251 => 55,  247 => 54,  243 => 53,  239 => 52,  235 => 51,  231 => 50,  227 => 49,  223 => 48,  219 => 47,  214 => 46,  210 => 44,  205 => 42,  201 => 41,  196 => 40,  190 => 39,  179 => 35,  168 => 33,  160 => 30,  151 => 28,  148 => 27,  143 => 26,  136 => 25,  125 => 18,  114 => 7,  104 => 63,  102 => 62,  99 => 61,  97 => 39,  92 => 36,  90 => 35,  87 => 34,  85 => 33,  82 => 32,  80 => 25,  76 => 24,  73 => 23,  68 => 19,  66 => 18,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  42 => 9,  37 => 7,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*         <title>{% block title %}{% endblock %} - ToBook</title>*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('img/picto/logo-tobook.png') }}" />*/
/* */
/*         <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('css/style_clubhouse.css') }}" />*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('css/jcarousel.connected-carousels.css') }}" />*/
/*         <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />*/
/*         <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">*/
/* */
/*         {% block extraCSS %}{% endblock extraCSS %}*/
/* */
/*     </head>*/
/*     <body>*/
/*         {# Loader de chargement #}*/
/*         <div id="loading"></div>*/
/*         <img id="loadingImg" src="{{ asset('img/gif/loading.svg') }}" alt="image de chargement page">*/
/*         {% block navbar %}{% include ('TobookBundle:navbar:navbar.html.twig') %}*/
/*             {% for message in app.session.flashbag.get('infos') %}*/
/*                 <div class="alert alert-success" role="alert">*/
/*                     {{ message }}*/
/*                 </div>*/
/*             {% endfor %} */
/*         {% endblock navbar %}*/
/*         */
/*         {% block ariane %}{% endblock ariane %}*/
/* */
/*         {% block body %}{% endblock %}*/
/* */
/*         <div class="col-md-12 footer"></div>*/
/* */
/*         {% block javascript %}*/
/*             <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*             <script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('script/jquery.js') }}"></script>*/
/*             <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRBSgtiopCCg-UWOSzjqE1VN6KjSxTgss&signed_in=true&libraries=places" async defer></script>*/
/*             <script type="text/javascript" src="{{ asset('script/jquery.js') }}"></script>*/
/*             {# le script de la pagination doit etre charger avant le script showMap #}*/
/*             <script type="text/javascript" src="{{ asset('/script/pagination.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('/script/showMap.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('script/jquery-1.11.0.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('script/jquery.leanModal.min.js') }}"></script> */
/*             <script type="text/javascript" src="{{ asset('script/jquery.dependClass.js') }}"></script> */
/*             <script type="text/javascript" src="{{ asset('script/jquery.scrolly.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('script/skel.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('script/util.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('script/main.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('script/bootstrap.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('script/clubhouse_jquery.jcarousel.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('script/clubhouse_jcarousel.connected-carousels.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('script/clubhouse_onglets.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('script/clubhouse_commentaires.js') }}"></script>*/
/*         {% endblock javascript %}*/
/* */
/*         {% block extraJavascript %}{% endblock extraJavascript %}*/
/* */
/*     </body>   */
/* </html>*/
/* */
