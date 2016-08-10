<?php

/* TobookBundle:navbar:navbar.html.twig */
class __TwigTemplate_75f9146e074ca398052c32240f374b643780111e864166ba95b5dd5143b5fafb extends Twig_Template
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
        $__internal_d6b791e6961a77e153280d73990c915d02eaecd3abe435cdc1e8d1e888b29ff7 = $this->env->getExtension("native_profiler");
        $__internal_d6b791e6961a77e153280d73990c915d02eaecd3abe435cdc1e8d1e888b29ff7->enter($__internal_d6b791e6961a77e153280d73990c915d02eaecd3abe435cdc1e8d1e888b29ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobookBundle:navbar:navbar.html.twig"));

        // line 1
        echo "<header id=\"header\">

    <h1><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("tobook_homepage");
        echo "\">Tobook<span>.club</span></a></h1>

    <span>
        <ul class=\"nav navbar-nav navbar-left\"> 
            <li class=\"dropdown\"> 
                <a style=\"padding:10px;color:#444\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span style=\"color:rgb(102,179,47);\" class=\"glyphicon glyphicon-flag\"></span> ";
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
                <a style=\"padding:10px;color:#444\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span style=\"color:rgb(102,179,47);\" class=\"glyphicon glyphicon-piggy-bank\"></span> ";
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

    ";
        // line 26
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 27
            echo "        <a class=\"hidden-xs\" href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "'><span style=\"color:rgb(102,179,47);\" class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Bienvenue"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userPrenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userNom", array()), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 29
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_register");
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S'INSCRIRE"), "html", null, true);
            echo "</span></a>
        <a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("user_login");
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("SE CONNECTER"), "html", null, true);
            echo "</span></a>
    ";
        }
        // line 31
        echo "      

    <a href=\"https://www.facebook.com/Roomservyou-454428541427992/?fref=nf\" target=\"_blank\">
        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/picto/icon-facebook.png"), "html", null, true);
        echo "\" alt=\"Logo Facebook\" title=\"Suivez-nous sur Facebook\" class=\"vertialimid\" />
    </a>

    <a href=\"#menu\"><span>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Menu"), "html", null, true);
        echo "</span></a>

</header>

<!-- Menu -->
<nav id=\"menu\">
    ";
        // line 43
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 44
            echo "        <ul class=\"links\">
            <li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("tobook_search");
            echo "\"><span style=\"color:rgb(102,179,47);\" class=\"glyphicon glyphicon-search\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nouvelle Recherche"), "html", null, true);
            echo "</a></li>
            <li><a href='";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "'><span style=\"color:rgb(102,179,47);\" class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mon Profil"), "html", null, true);
            echo "</a></li>
            ";
            // line 50
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userProf", array()) == 1)) {
                // line 51
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("wcs_emailing_homepage");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Emailing"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 53
            echo "        </ul>
        <ul class=\"actions vertical\" style=\"list-style:none;\">
            <li><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btnsansrien button fit\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("SE DECONNECTER"), "html", null, true);
            echo "</span></a></li>
        </ul>
    ";
        } else {
            // line 58
            echo "        <ul class=\"links\">
            <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("tobook_search");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nouvelle Recherche"), "html", null, true);
            echo "</a></li>
            ";
            // line 63
            echo "        </ul>
        <ul class=\"actions vertical\" style=\"list-style:none;\">
            <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("user_register");
            echo "\" class=\"btn btnsansrien button fit special\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S'INSCRIRE"), "html", null, true);
            echo "</span></a></li>
            <li><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("user_login");
            echo "\" class=\"btn btnsansrien button fit\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("SE CONNECTER"), "html", null, true);
            echo "</span></a></li>
        </ul>
    ";
        }
        // line 69
        echo "</nav>";
        
        $__internal_d6b791e6961a77e153280d73990c915d02eaecd3abe435cdc1e8d1e888b29ff7->leave($__internal_d6b791e6961a77e153280d73990c915d02eaecd3abe435cdc1e8d1e888b29ff7_prof);

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
        return array (  182 => 69,  174 => 66,  168 => 65,  164 => 63,  158 => 59,  155 => 58,  147 => 55,  143 => 53,  135 => 51,  132 => 50,  126 => 46,  120 => 45,  117 => 44,  115 => 43,  106 => 37,  100 => 34,  95 => 31,  88 => 30,  81 => 29,  69 => 27,  67 => 26,  54 => 16,  47 => 12,  43 => 11,  39 => 10,  34 => 8,  26 => 3,  22 => 1,);
    }
}
/* <header id="header">*/
/* */
/*     <h1><a href="{{ path('tobook_homepage') }}">Tobook<span>.club</span></a></h1>*/
/* */
/*     <span>*/
/*         <ul class="nav navbar-nav navbar-left"> */
/*             <li class="dropdown"> */
/*                 <a style="padding:10px;color:#444" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span style="color:rgb(102,179,47);" class="glyphicon glyphicon-flag"></span> {{ 'Langue'|trans }}</a> */
/*                 <ul class="dropdown-menu" role="menu"> */
/*                     <li><a tabindex="-1" href="{{ path(app.request.get('_route'), app.request.attributes.get('_route_params')|merge({'_locale': 'en'})) }}">English</a></li> */
/*                     <li><a tabindex="-1" href="{{ path(app.request.get('_route'), app.request.attributes.get('_route_params')|merge({'_locale': 'fr'})) }}">Français</a></li> */
/*                     <li><a tabindex="-1" href="{{ path(app.request.get('_route'), app.request.attributes.get('_route_params')|merge({'_locale': 'de'})) }}">Deutsch</a></li> */
/*                 </ul>*/
/*             </li>*/
/*             <li class="dropdown"> */
/*                 <a style="padding:10px;color:#444" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span style="color:rgb(102,179,47);" class="glyphicon glyphicon-piggy-bank"></span> {{ 'Devise'|trans }}</a> */
/*                 <ul class="dropdown-menu" role="menu"> */
/*                     <li><a tabindex="-1" href="#">EUR</a></li> */
/*                     <li><a tabindex="-1" href="#">GBP</a></li> */
/*                     <li><a tabindex="-1" href="#">USD</a></li> */
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </span>*/
/* */
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*         <a class="hidden-xs" href='{{ path('profil_edit', { 'id': app.user.id }) }}'><span style="color:rgb(102,179,47);" class="glyphicon glyphicon-user"></span> {{ 'Bienvenue'|trans }} {{ app.user.userPrenom }} {{ app.user.userNom }}</a>*/
/*     {% else %}*/
/*         <a href="{{ path('user_register') }}"><span>{{ "S'INSCRIRE"|trans }}</span></a>*/
/*         <a href="{{ path('user_login') }}"><span>{{ 'SE CONNECTER'|trans }}</span></a>*/
/*     {% endif %}      */
/* */
/*     <a href="https://www.facebook.com/Roomservyou-454428541427992/?fref=nf" target="_blank">*/
/*         <img src="{{ asset('img/picto/icon-facebook.png') }}" alt="Logo Facebook" title="Suivez-nous sur Facebook" class="vertialimid" />*/
/*     </a>*/
/* */
/*     <a href="#menu"><span>{{ 'Menu'|trans }}</span></a>*/
/* */
/* </header>*/
/* */
/* <!-- Menu -->*/
/* <nav id="menu">*/
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*         <ul class="links">*/
/*             <li><a href="{{ path('tobook_search') }}"><span style="color:rgb(102,179,47);" class="glyphicon glyphicon-search"></span> {{ 'Nouvelle Recherche'|trans }}</a></li>*/
/*             <li><a href='{{ path('profil_edit', { 'id': app.user.id }) }}'><span style="color:rgb(102,179,47);" class="glyphicon glyphicon-user"></span> {{ 'Mon Profil'|trans }}</a></li>*/
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
