<?php

/* TobookBundle:Default:search.html.twig */
class __TwigTemplate_641a2483a4f8064c19f1483c51c13a95c35f612e30be3970b72f6516abeed3c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TobookBundle::base.html.twig", "TobookBundle:Default:search.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TobookBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a13e455a7a9ac9fdfc8c0f86fc78e24d80a305dfcee5bacd3a55ab6b2e0261bb = $this->env->getExtension("native_profiler");
        $__internal_a13e455a7a9ac9fdfc8c0f86fc78e24d80a305dfcee5bacd3a55ab6b2e0261bb->enter($__internal_a13e455a7a9ac9fdfc8c0f86fc78e24d80a305dfcee5bacd3a55ab6b2e0261bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobookBundle:Default:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a13e455a7a9ac9fdfc8c0f86fc78e24d80a305dfcee5bacd3a55ab6b2e0261bb->leave($__internal_a13e455a7a9ac9fdfc8c0f86fc78e24d80a305dfcee5bacd3a55ab6b2e0261bb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_daa7ca20b6352d59d275e71662f64e11e23160f741a01fec321c40c5b3b6ed8e = $this->env->getExtension("native_profiler");
        $__internal_daa7ca20b6352d59d275e71662f64e11e23160f741a01fec321c40c5b3b6ed8e->enter($__internal_daa7ca20b6352d59d275e71662f64e11e23160f741a01fec321c40c5b3b6ed8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Rechercher"), "html", null, true);
        
        $__internal_daa7ca20b6352d59d275e71662f64e11e23160f741a01fec321c40c5b3b6ed8e->leave($__internal_daa7ca20b6352d59d275e71662f64e11e23160f741a01fec321c40c5b3b6ed8e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_42b308451b32973f44c9faf92be8560c78fb55fb70303a473fef3d1a76b84f59 = $this->env->getExtension("native_profiler");
        $__internal_42b308451b32973f44c9faf92be8560c78fb55fb70303a473fef3d1a76b84f59->enter($__internal_42b308451b32973f44c9faf92be8560c78fb55fb70303a473fef3d1a76b84f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container-fluid\">
\t<div class=\"search-first-div row padd-row\">
\t\t<img class=\"img-style-1\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/background/background-1.jpg"), "html", null, true);
        echo "\">
\t\t<form class=\"col-md-12 search-bar\" method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("showMap");
        echo "\" id=\"form\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5 col-md-offset-1\">
\t\t\t\t\t<input id=\"autocomplete\" onfocus=\"initautocomplete()\" class=\"input-style-5\" type=\"text\" placeholder=\"Entrez votre recherche\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t                <select class=\"input-style-5\" name=\"category\" id=\"category\">
\t                <option value='1'>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hôtels"), "html", null, true);
        echo "</option>
\t                <option value='3'>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Chambres d'hôtes"), "html", null, true);
        echo "</option>
\t                <option value='2'>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Gîtes"), "html", null, true);
        echo "</option>
\t                <option value='5'>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Restaurants"), "html", null, true);
        echo "</option>
\t                <option value='8'>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Musées"), "html", null, true);
        echo "</option>
\t                <option value='6'>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Restaurants gastronomique"), "html", null, true);
        echo "</option>

\t                ";
        // line 27
        echo "
\t                </select>
\t            </div>
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<input class=\"input-style-6 btn btn-success\" type=\"submit\" value=\"Rechercher\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t\t<div class=\"col-md-12 result-bar\"><font id=\"resultatMap\"></font></div>
\t\t<div class=\"col-md-12 search-map\" id=\"map\" style=\"width:100%; height:500px;\" ></div>
\t</div>
<div class=\"row\">
\t<div class=\"col-md-12 filter-bar\">         
\t\t<div class=\"col-md-2 col-md-offset-2 filter-div\">
\t\t\t<div class=\"\">
                <h4 id=\"classerpar\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Classer par"), "html", null, true);
        echo " :</h4>
            </div>
\t\t</div>
\t\t<div class=\"col-md-2\">
\t\t\t<select class=\"input-style-5\" id=\"prix\" name=\"prixmini\" class=\"category\">
\t\t\t\t<option disabled selected>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Prix"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"DESC\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Les plus chers"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"ASC\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Les plus économiques"), "html", null, true);
        echo "</option>
\t\t\t</select>
\t\t</div>
\t\t
\t\t<div class=\"col-md-2\">
\t\t\t<select class=\"input-style-5\" id=\"etoile\" name=\"etoile\" class=\"category\">
\t\t\t\t<option disabled selected>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Étoile"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"ASC\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Par ordre croissant"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"DESC\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Par ordre décroissant"), "html", null, true);
        echo "</option>
\t\t\t</select>
\t\t</div>
\t\t                   
\t\t
\t\t<div class=\"col-md-2\">
\t\t\t<select class=\"input-style-5\" id=\"note\" name=\"note\" class=\"category\">
\t\t\t\t<option disabled selected>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Notes"), "html", null, true);
        echo "</option>
\t\t\t\t<option value=\"DESC\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Les plus appréciés par l'utilisateur"), "html", null, true);
        echo "</option>
                <option value=\"ASC\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Les moins appréciés par l'utilisateur"), "html", null, true);
        echo "</option>
\t\t\t</select>
\t\t</div>
\t\t
\t</div>
</div>
\t<!-- articles resultats -->
\t";
        // line 74
        echo "\t<img style=\"display:none;\"  id=\"assetMarker\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/"), "html", null, true);
        echo "\" alt=\"\">
\t<img style=\"display:none;\"  id=\"assetEtablissement\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/uploads/"), "html", null, true);
        echo "\" alt=\"\">
\t<section class=\"row\" id=\"two\" class=\"wrapper alt\">
\t</section>
\t<div class=\"row flex\">
\t\t<div id=\"pagination\">
\t\t\t
\t  \t</div>
  \t</div>
</div>
";
        
        $__internal_42b308451b32973f44c9faf92be8560c78fb55fb70303a473fef3d1a76b84f59->leave($__internal_42b308451b32973f44c9faf92be8560c78fb55fb70303a473fef3d1a76b84f59_prof);

    }

    public function getTemplateName()
    {
        return "TobookBundle:Default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 75,  174 => 74,  164 => 66,  160 => 65,  156 => 64,  146 => 57,  142 => 56,  138 => 55,  129 => 49,  125 => 48,  121 => 47,  113 => 42,  96 => 27,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  61 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'TobookBundle::base.html.twig' %}*/
/* {% block title %}{{ 'Rechercher'|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container-fluid">*/
/* 	<div class="search-first-div row padd-row">*/
/* 		<img class="img-style-1" src="{{ asset('img/background/background-1.jpg') }}">*/
/* 		<form class="col-md-12 search-bar" method="post" action="{{ path('showMap') }}" id="form">*/
/* 			<div class="row">*/
/* 				<div class="col-md-5 col-md-offset-1">*/
/* 					<input id="autocomplete" onfocus="initautocomplete()" class="input-style-5" type="text" placeholder="Entrez votre recherche">*/
/* 				</div>*/
/* 				<div class="col-md-4">*/
/* 	                <select class="input-style-5" name="category" id="category">*/
/* 	                <option value='1'>{{ "Hôtels"|trans }}</option>*/
/* 	                <option value='3'>{{ "Chambres d'hôtes"|trans }}</option>*/
/* 	                <option value='2'>{{ "Gîtes"|trans }}</option>*/
/* 	                <option value='5'>{{ "Restaurants"|trans }}</option>*/
/* 	                <option value='8'>{{ "Musées"|trans }}</option>*/
/* 	                <option value='6'>{{ "Restaurants gastronomique"|trans }}</option>*/
/* */
/* 	                {# <option value='4' {{ category == 4 ? 'selected="selected"' : '' }}>{{ "Camping"|trans }}</option>*/
/* 	                <option value='7' {{ category == 7 ? 'selected="selected"' : '' }}>{{ "Parcs de loisirs"|trans }}</option>*/
/* 	                <option value='9' {{ category == 9 ? 'selected="selected"' : '' }}>{{ "Chateaux"|trans }}</option>*/
/* 	                <option value='10' {{ category == 10 ? 'selected="selected"' : '' }}>{{ "Hébergements"|trans }}</option>*/
/* 	                <option value='11' {{ category == 11 ? 'selected="selected"' : '' }}>{{ "Tables d'hotes"|trans }}</option> #}*/
/* */
/* 	                </select>*/
/* 	            </div>*/
/* 				<div class="col-md-1">*/
/* 					<input class="input-style-6 btn btn-success" type="submit" value="Rechercher">*/
/* 				</div>*/
/* 			</div>*/
/* 		</form>*/
/* 		<div class="col-md-12 result-bar"><font id="resultatMap"></font></div>*/
/* 		<div class="col-md-12 search-map" id="map" style="width:100%; height:500px;" ></div>*/
/* 	</div>*/
/* <div class="row">*/
/* 	<div class="col-md-12 filter-bar">         */
/* 		<div class="col-md-2 col-md-offset-2 filter-div">*/
/* 			<div class="">*/
/*                 <h4 id="classerpar">{{ 'Classer par'|trans }} :</h4>*/
/*             </div>*/
/* 		</div>*/
/* 		<div class="col-md-2">*/
/* 			<select class="input-style-5" id="prix" name="prixmini" class="category">*/
/* 				<option disabled selected>{{ 'Prix'|trans }}</option>*/
/* 				<option value="DESC">{{ 'Les plus chers'|trans }}</option>*/
/* 				<option value="ASC">{{ 'Les plus économiques'|trans }}</option>*/
/* 			</select>*/
/* 		</div>*/
/* 		*/
/* 		<div class="col-md-2">*/
/* 			<select class="input-style-5" id="etoile" name="etoile" class="category">*/
/* 				<option disabled selected>{{ 'Étoile'|trans }}</option>*/
/* 				<option value="ASC">{{ 'Par ordre croissant'|trans }}</option>*/
/* 				<option value="DESC">{{ 'Par ordre décroissant'|trans }}</option>*/
/* 			</select>*/
/* 		</div>*/
/* 		                   */
/* 		*/
/* 		<div class="col-md-2">*/
/* 			<select class="input-style-5" id="note" name="note" class="category">*/
/* 				<option disabled selected>{{ "Notes"|trans }}</option>*/
/* 				<option value="DESC">{{ "Les plus appréciés par l'utilisateur"|trans }}</option>*/
/*                 <option value="ASC">{{ "Les moins appréciés par l'utilisateur"|trans }}</option>*/
/* 			</select>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* </div>*/
/* 	<!-- articles resultats -->*/
/* 	{# Liens images qui sont cacher mais qui servent à recupere le liens pour l'utiliser dans javascript #}*/
/* 	<img style="display:none;"  id="assetMarker" src="{{ asset('img/') }}" alt="">*/
/* 	<img style="display:none;"  id="assetEtablissement" src="{{ asset('img/uploads/') }}" alt="">*/
/* 	<section class="row" id="two" class="wrapper alt">*/
/* 	</section>*/
/* 	<div class="row flex">*/
/* 		<div id="pagination">*/
/* 			*/
/* 	  	</div>*/
/*   	</div>*/
/* </div>*/
/* {% endblock %}*/
