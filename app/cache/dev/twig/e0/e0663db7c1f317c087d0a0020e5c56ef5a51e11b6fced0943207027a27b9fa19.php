<?php

/* TobookBundle:navbar:navbar.html.twig */
class __TwigTemplate_d09d93803031f0acdb2f22f327ee51e187f02e1767edaf96159ca2709775b9f9 extends Twig_Template
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
        $__internal_a7a1ebe8b740fc4be42a6d3d01446a631205aefad0ecfafb93ad0545560daa25 = $this->env->getExtension("native_profiler");
        $__internal_a7a1ebe8b740fc4be42a6d3d01446a631205aefad0ecfafb93ad0545560daa25->enter($__internal_a7a1ebe8b740fc4be42a6d3d01446a631205aefad0ecfafb93ad0545560daa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobookBundle:navbar:navbar.html.twig"));

        // line 1
        echo "<header id=\"header\">

    <h1><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("tobook_homepage");
        echo "\">Tobook<span>.club</span></a></h1>

    <span>
        <ul class=\"nav navbar-nav navbar-left\"> 
            <li class=\"dropdown\"> 
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Langue"), "html", null, true);
        echo "</a> 
                <ul class=\"dropdown-menu\" role=\"menu\"> 
                    <li><a tabindex=\"-1\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\">English</a></li> 
                    <li><a tabindex=\"-1\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "fr"))), "html", null, true);
        echo "\">Français</a></li> 
                    <li><a tabindex=\"-1\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "de"))), "html", null, true);
        echo "\">Deutsch</a></li> 
                </ul>
            </li>
            <li class=\"dropdown\"> 
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Devise"), "html", null, true);
        echo "</a> 
                <ul class=\"dropdown-menu\" role=\"menu\"> 
                    <li><a tabindex=\"-1\" href=\"#\">EUR</a></li> 
                    <li><a tabindex=\"-1\" href=\"#\">GBP</a></li> 
                    <li><a tabindex=\"-1\" href=\"#\">USD</a></li> 
                </ul>
            </li>
        </ul>
    </span>

    <a href=\"https://www.facebook.com/Roomservyou-454428541427992/?fref=nf\" target=\"_blank\">
        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/picto/icon-facebook.png"), "html", null, true);
        echo "\" alt=\"Logo Facebook\" title=\"Suivez-nous sur Facebook\" class=\"vertialimid\" />
    </a>
    ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo "        <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Bienvenu"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userPrenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userNom", array()), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 32
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_register");
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S'INSCRIRE"), "html", null, true);
            echo "</span></a>
        <a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("user_login");
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("SE CONNECTER"), "html", null, true);
            echo "</span></a>
    ";
        }
        // line 34
        echo "           
    
    <a href=\"#menu\"><span>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu"), "html", null, true);
        echo "</span></a>

</header>

<!-- Menu -->
<nav id=\"menu\">
    ";
        // line 42
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
            echo "        <ul class=\"links\">
            <li><a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("tobook_search");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nouvelle Recherche"), "html", null, true);
            echo "</a></li>
            <li><a href='";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ma page"), "html", null, true);
            echo "</a></li>
            ";
            // line 49
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userProf", array()) == 1)) {
                // line 50
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("wcs_emailing_homepage");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Emailing"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 52
            echo "        </ul>
        <ul class=\"actions vertical\" style=\"list-style:none;\">
            <li><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btnsansrien button fit\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("SE DECONNECTER"), "html", null, true);
            echo "</span></a></li>
        </ul>
    ";
        } else {
            // line 57
            echo "        <ul class=\"links\">
            <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("tobook_search");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nouvelle Recherche"), "html", null, true);
            echo "</a></li>
            ";
            // line 62
            echo "        </ul>
        <ul class=\"actions vertical\" style=\"list-style:none;\">
            <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("user_register");
            echo "\" class=\"btn btnsansrien button fit special\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S'INSCRIRE"), "html", null, true);
            echo "</span></a></li>
            <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("user_login");
            echo "\" class=\"btn btnsansrien button fit\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("SE CONNECTER"), "html", null, true);
            echo "</span></a></li>
        </ul>
    ";
        }
        // line 68
        echo "</nav>";
        
        $__internal_a7a1ebe8b740fc4be42a6d3d01446a631205aefad0ecfafb93ad0545560daa25->leave($__internal_a7a1ebe8b740fc4be42a6d3d01446a631205aefad0ecfafb93ad0545560daa25_prof);

    }

    public function getTemplateName()
    {
        return "TobookBundle:navbar:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 68,  171 => 65,  165 => 64,  161 => 62,  155 => 58,  152 => 57,  144 => 54,  140 => 52,  132 => 50,  129 => 49,  123 => 45,  117 => 44,  114 => 43,  112 => 42,  103 => 36,  99 => 34,  92 => 33,  85 => 32,  75 => 30,  73 => 29,  68 => 27,  54 => 16,  47 => 12,  43 => 11,  39 => 10,  34 => 8,  26 => 3,  22 => 1,);
    }
}
/* <header id="header">*/
/* */
/*     <h1><a href="{{ path('tobook_homepage') }}">Tobook<span>.club</span></a></h1>*/
/* */
/*     <span>*/
/*         <ul class="nav navbar-nav navbar-left"> */
/*             <li class="dropdown"> */
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ 'Langue'|trans }}</a> */
/*                 <ul class="dropdown-menu" role="menu"> */
/*                     <li><a tabindex="-1" href="{{ path(app.request.get('_route'), app.request.attributes.get('_route_params')|merge({'_locale': 'en'})) }}">English</a></li> */
/*                     <li><a tabindex="-1" href="{{ path(app.request.get('_route'), app.request.attributes.get('_route_params')|merge({'_locale': 'fr'})) }}">Français</a></li> */
/*                     <li><a tabindex="-1" href="{{ path(app.request.get('_route'), app.request.attributes.get('_route_params')|merge({'_locale': 'de'})) }}">Deutsch</a></li> */
/*                 </ul>*/
/*             </li>*/
/*             <li class="dropdown"> */
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ 'Devise'|trans }}</a> */
/*                 <ul class="dropdown-menu" role="menu"> */
/*                     <li><a tabindex="-1" href="#">EUR</a></li> */
/*                     <li><a tabindex="-1" href="#">GBP</a></li> */
/*                     <li><a tabindex="-1" href="#">USD</a></li> */
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </span>*/
/* */
/*     <a href="https://www.facebook.com/Roomservyou-454428541427992/?fref=nf" target="_blank">*/
/*         <img src="{{ asset('img/picto/icon-facebook.png') }}" alt="Logo Facebook" title="Suivez-nous sur Facebook" class="vertialimid" />*/
/*     </a>*/
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*         <span>{{ 'Bienvenu'|trans }} {{ app.user.userPrenom }} {{ app.user.userNom }}</span>*/
/*     {% else %}*/
/*         <a href="{{ path('user_register') }}"><span>{{ "S'INSCRIRE"|trans }}</span></a>*/
/*         <a href="{{ path('user_login') }}"><span>{{ 'SE CONNECTER'|trans }}</span></a>*/
/*     {% endif %}           */
/*     */
/*     <a href="#menu"><span>{{ 'Menu'|trans }}</span></a>*/
/* */
/* </header>*/
/* */
/* <!-- Menu -->*/
/* <nav id="menu">*/
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*         <ul class="links">*/
/*             <li><a href="{{ path('tobook_search') }}">{{ 'Nouvelle Recherche'|trans }}</a></li>*/
/*             <li><a href='{{ path('profil_edit', { 'id': app.user.id }) }}'>{{ 'Ma page'|trans }}</a></li>*/
/*             {# */
/*             <li><a href='#'>{{ 'Mes Favoris'|trans }}</a></li>*/
/*             <li><a href='#'>{{ 'Mes paramètres'|trans }}</a></li> #}*/
/*             {% if app.user.userProf == 1 %}*/
/*                 <li><a href="{{ path('wcs_emailing_homepage') }}">{{ 'Emailing'|trans }}</a></li>*/
/*             {% endif %}*/
/*         </ul>*/
/*         <ul class="actions vertical" style="list-style:none;">*/
/*             <li><a href="{{ path('fos_user_security_logout') }}" class="btn btnsansrien button fit"><span>{{ 'SE DECONNECTER'|trans }}</span></a></li>*/
/*         </ul>*/
/*     {% else %}*/
/*         <ul class="links">*/
/*             <li><a href="{{ path('tobook_search') }}">{{ 'Nouvelle Recherche'|trans }}</a></li>*/
/*             {# <li><a href='#'>{{ 'Ma page'|trans }}</a></li>*/
/*             <li><a href='#'>{{ 'Mes Favoris'|trans }}</a></li>*/
/*             <li><a href='#'>{{ 'Mes paramètres'|trans }}</a></li> #}*/
/*         </ul>*/
/*         <ul class="actions vertical" style="list-style:none;">*/
/*             <li><a href="{{ path ('user_register') }}" class="btn btnsansrien button fit special"><span>{{ "S'INSCRIRE"|trans }}</span></a></li>*/
/*             <li><a href="{{ path('user_login') }}" class="btn btnsansrien button fit"><span>{{ "SE CONNECTER"|trans }}</span></a></li>*/
/*         </ul>*/
/*     {% endif %}*/
/* </nav>*/
