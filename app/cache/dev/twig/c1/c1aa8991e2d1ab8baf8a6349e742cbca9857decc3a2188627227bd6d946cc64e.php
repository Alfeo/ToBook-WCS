<?php

/* TobookBundle::base.html.twig */
class __TwigTemplate_f76a9d6f4de53ada4a3a0addba5d669f585dbcc11fc75ed0ba7938e382026090 extends Twig_Template
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
        $__internal_69a0b5635b1388b588555745ffb1ecd0b7c7a13629dacd36a0bfbefc0ffd5780 = $this->env->getExtension("native_profiler");
        $__internal_69a0b5635b1388b588555745ffb1ecd0b7c7a13629dacd36a0bfbefc0ffd5780->enter($__internal_69a0b5635b1388b588555745ffb1ecd0b7c7a13629dacd36a0bfbefc0ffd5780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobookBundle::base.html.twig"));

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
        <div class=\"col-md-12 footer\">
            <div class=\"col-md-10 col-md-offset-1\">
                <div class=\"col-md-3 footer-part\">
                    <h4>TOBOOK</h4>
                    <h3>_____</h3>
                    <div class=\"empty\"></div>
                    <p>A propos</p>
                    <p>Conditions générales</p>
                    <p>Plan du site</p>
                    <p>Protections des données</p>
                    <p>Politique relative aux cookies</p>
                </div>

                <div class=\"col-md-3 footer-part\">
                    <h4>MON COMPTE</h4>
                    <h3>_____</h3>
                    <div class=\"empty\"></div>
                    <p>Mes informations personnelles</p>
                    <p>Mes commentaires</p>
                    <p>Mes destinations préférés</p>
                    <p>Mes alertes</p>
                    <p>Mes réservations</p>
                </div>

                <div class=\"col-md-6 footer-part\">
                    <h4>CONTACTEZ-NOUS</h4>
                    <h3>_____</h3>
                    <div class=\"empty\"></div>
                    <div class=\"col-md-6\">
                        <p><span class=\"glyphicon glyphicon-earphone\"></span> (33) 2 54 80 27 00</p>
                        <p><span class=\"glyphicon glyphicon-envelope\"></span> contact@tobook.club</p>
                        <p><span class=\"glyphicon glyphicon-globe\"></span> facebook.com/tobook.club</p>
                        <p>Protections des données</p>
                        <p>Politique relative aux cookies</p>
                    </div>
                    <div class=\"col-md-6\">
                        <p><span class=\"glyphicon glyphicon-envelope\"></span> <strong>Siège social</strong></p>
                        <p>8, boulevard de Trémault</p>
                        <p>41 000 Vendôme</p>
                        <p>FRANCE</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-10 col-md-offset-1 footer-end\">
                <p> Conception graphique : maitre-christelle.fr - intégration : LOGO WCS Wild Code School - Copyright @ 2016 - Tobook.club - Tous droits réservés.</p>
            </div>
        </div>

        ";
        // line 85
        $this->displayBlock('javascript', $context, $blocks);
        // line 107
        echo "
        ";
        // line 108
        $this->displayBlock('extraJavascript', $context, $blocks);
        // line 109
        echo "
    </body>   
</html>
";
        
        $__internal_69a0b5635b1388b588555745ffb1ecd0b7c7a13629dacd36a0bfbefc0ffd5780->leave($__internal_69a0b5635b1388b588555745ffb1ecd0b7c7a13629dacd36a0bfbefc0ffd5780_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f56bd062e9ac56fc4c6f8b3da79135756c4fd14fced259bb524d4c2ab73b6f3c = $this->env->getExtension("native_profiler");
        $__internal_f56bd062e9ac56fc4c6f8b3da79135756c4fd14fced259bb524d4c2ab73b6f3c->enter($__internal_f56bd062e9ac56fc4c6f8b3da79135756c4fd14fced259bb524d4c2ab73b6f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f56bd062e9ac56fc4c6f8b3da79135756c4fd14fced259bb524d4c2ab73b6f3c->leave($__internal_f56bd062e9ac56fc4c6f8b3da79135756c4fd14fced259bb524d4c2ab73b6f3c_prof);

    }

    // line 18
    public function block_extraCSS($context, array $blocks = array())
    {
        $__internal_efbdde99a761f612a8f21f938939b388ed8b9fc8b650519de6f407ab480bfa6b = $this->env->getExtension("native_profiler");
        $__internal_efbdde99a761f612a8f21f938939b388ed8b9fc8b650519de6f407ab480bfa6b->enter($__internal_efbdde99a761f612a8f21f938939b388ed8b9fc8b650519de6f407ab480bfa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraCSS"));

        
        $__internal_efbdde99a761f612a8f21f938939b388ed8b9fc8b650519de6f407ab480bfa6b->leave($__internal_efbdde99a761f612a8f21f938939b388ed8b9fc8b650519de6f407ab480bfa6b_prof);

    }

    // line 25
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_9e4e8519eeca361cfc6a06fc6d317b6d71dde4fb322e6f76960a3fb7677ed7b8 = $this->env->getExtension("native_profiler");
        $__internal_9e4e8519eeca361cfc6a06fc6d317b6d71dde4fb322e6f76960a3fb7677ed7b8->enter($__internal_9e4e8519eeca361cfc6a06fc6d317b6d71dde4fb322e6f76960a3fb7677ed7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_9e4e8519eeca361cfc6a06fc6d317b6d71dde4fb322e6f76960a3fb7677ed7b8->leave($__internal_9e4e8519eeca361cfc6a06fc6d317b6d71dde4fb322e6f76960a3fb7677ed7b8_prof);

    }

    // line 33
    public function block_ariane($context, array $blocks = array())
    {
        $__internal_ff96af998d419bcb8f43f711a2902452bd6d586e687d66695e959ade69ba4072 = $this->env->getExtension("native_profiler");
        $__internal_ff96af998d419bcb8f43f711a2902452bd6d586e687d66695e959ade69ba4072->enter($__internal_ff96af998d419bcb8f43f711a2902452bd6d586e687d66695e959ade69ba4072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ariane"));

        
        $__internal_ff96af998d419bcb8f43f711a2902452bd6d586e687d66695e959ade69ba4072->leave($__internal_ff96af998d419bcb8f43f711a2902452bd6d586e687d66695e959ade69ba4072_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_459bdd5884b9f6e5170e27cf568743b0d41056c2cfe5690f34ec1d990930ed3a = $this->env->getExtension("native_profiler");
        $__internal_459bdd5884b9f6e5170e27cf568743b0d41056c2cfe5690f34ec1d990930ed3a->enter($__internal_459bdd5884b9f6e5170e27cf568743b0d41056c2cfe5690f34ec1d990930ed3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_459bdd5884b9f6e5170e27cf568743b0d41056c2cfe5690f34ec1d990930ed3a->leave($__internal_459bdd5884b9f6e5170e27cf568743b0d41056c2cfe5690f34ec1d990930ed3a_prof);

    }

    // line 85
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_60ac89b7300f6f42bc800c087a021e2e540df9875e380df81a05689ebfc9aa3f = $this->env->getExtension("native_profiler");
        $__internal_60ac89b7300f6f42bc800c087a021e2e540df9875e380df81a05689ebfc9aa3f->enter($__internal_60ac89b7300f6f42bc800c087a021e2e540df9875e380df81a05689ebfc9aa3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 86
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBRBSgtiopCCg-UWOSzjqE1VN6KjSxTgss&signed_in=true&libraries=places\" async defer></script>
            <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 92
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/script/pagination.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/script/showMap.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.leanModal.min.js"), "html", null, true);
        echo "\"></script> 
            <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.dependClass.js"), "html", null, true);
        echo "\"></script> 
            <script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/skel.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/util.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/main.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/clubhouse_jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/clubhouse_jcarousel.connected-carousels.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/clubhouse_onglets.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/clubhouse_commentaires.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_60ac89b7300f6f42bc800c087a021e2e540df9875e380df81a05689ebfc9aa3f->leave($__internal_60ac89b7300f6f42bc800c087a021e2e540df9875e380df81a05689ebfc9aa3f_prof);

    }

    // line 108
    public function block_extraJavascript($context, array $blocks = array())
    {
        $__internal_dc8e24639f28e387fe7f8c02c184f352176dbcaadcaf9e9a68aaf9d853ed4373 = $this->env->getExtension("native_profiler");
        $__internal_dc8e24639f28e387fe7f8c02c184f352176dbcaadcaf9e9a68aaf9d853ed4373->enter($__internal_dc8e24639f28e387fe7f8c02c184f352176dbcaadcaf9e9a68aaf9d853ed4373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extraJavascript"));

        
        $__internal_dc8e24639f28e387fe7f8c02c184f352176dbcaadcaf9e9a68aaf9d853ed4373->leave($__internal_dc8e24639f28e387fe7f8c02c184f352176dbcaadcaf9e9a68aaf9d853ed4373_prof);

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
        return array (  322 => 108,  313 => 105,  309 => 104,  305 => 103,  301 => 102,  297 => 101,  293 => 100,  289 => 99,  285 => 98,  281 => 97,  277 => 96,  273 => 95,  269 => 94,  265 => 93,  260 => 92,  256 => 90,  251 => 88,  247 => 87,  242 => 86,  236 => 85,  225 => 35,  214 => 33,  206 => 30,  197 => 28,  194 => 27,  189 => 26,  182 => 25,  171 => 18,  160 => 7,  150 => 109,  148 => 108,  145 => 107,  143 => 85,  92 => 36,  90 => 35,  87 => 34,  85 => 33,  82 => 32,  80 => 25,  76 => 24,  73 => 23,  68 => 19,  66 => 18,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  42 => 9,  37 => 7,  29 => 1,);
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
/*         <div class="col-md-12 footer">*/
/*             <div class="col-md-10 col-md-offset-1">*/
/*                 <div class="col-md-3 footer-part">*/
/*                     <h4>TOBOOK</h4>*/
/*                     <h3>_____</h3>*/
/*                     <div class="empty"></div>*/
/*                     <p>A propos</p>*/
/*                     <p>Conditions générales</p>*/
/*                     <p>Plan du site</p>*/
/*                     <p>Protections des données</p>*/
/*                     <p>Politique relative aux cookies</p>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-3 footer-part">*/
/*                     <h4>MON COMPTE</h4>*/
/*                     <h3>_____</h3>*/
/*                     <div class="empty"></div>*/
/*                     <p>Mes informations personnelles</p>*/
/*                     <p>Mes commentaires</p>*/
/*                     <p>Mes destinations préférés</p>*/
/*                     <p>Mes alertes</p>*/
/*                     <p>Mes réservations</p>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-6 footer-part">*/
/*                     <h4>CONTACTEZ-NOUS</h4>*/
/*                     <h3>_____</h3>*/
/*                     <div class="empty"></div>*/
/*                     <div class="col-md-6">*/
/*                         <p><span class="glyphicon glyphicon-earphone"></span> (33) 2 54 80 27 00</p>*/
/*                         <p><span class="glyphicon glyphicon-envelope"></span> contact@tobook.club</p>*/
/*                         <p><span class="glyphicon glyphicon-globe"></span> facebook.com/tobook.club</p>*/
/*                         <p>Protections des données</p>*/
/*                         <p>Politique relative aux cookies</p>*/
/*                     </div>*/
/*                     <div class="col-md-6">*/
/*                         <p><span class="glyphicon glyphicon-envelope"></span> <strong>Siège social</strong></p>*/
/*                         <p>8, boulevard de Trémault</p>*/
/*                         <p>41 000 Vendôme</p>*/
/*                         <p>FRANCE</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-10 col-md-offset-1 footer-end">*/
/*                 <p> Conception graphique : maitre-christelle.fr - intégration : LOGO WCS Wild Code School - Copyright @ 2016 - Tobook.club - Tous droits réservés.</p>*/
/*             </div>*/
/*         </div>*/
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
