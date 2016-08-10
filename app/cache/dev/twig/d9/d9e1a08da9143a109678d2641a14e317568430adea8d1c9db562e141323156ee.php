<?php

/* TobookBundle:Default:index.html.twig */
class __TwigTemplate_bf9b699750280d640666d310e9e973c2394d5c40ee51fb7bbf3257f2c532b8cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TobookBundle::base.html.twig", "TobookBundle:Default:index.html.twig", 1);
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
        $__internal_73d468969c146ff127bdb56ed9ce1104cf1fb492431907490ce4923378f7312c = $this->env->getExtension("native_profiler");
        $__internal_73d468969c146ff127bdb56ed9ce1104cf1fb492431907490ce4923378f7312c->enter($__internal_73d468969c146ff127bdb56ed9ce1104cf1fb492431907490ce4923378f7312c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TobookBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d468969c146ff127bdb56ed9ce1104cf1fb492431907490ce4923378f7312c->leave($__internal_73d468969c146ff127bdb56ed9ce1104cf1fb492431907490ce4923378f7312c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d98488bec08184daec121900a6edcbb9d37d407b9e2eb86733cc3a4732f1b89 = $this->env->getExtension("native_profiler");
        $__internal_8d98488bec08184daec121900a6edcbb9d37d407b9e2eb86733cc3a4732f1b89->enter($__internal_8d98488bec08184daec121900a6edcbb9d37d407b9e2eb86733cc3a4732f1b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        
        $__internal_8d98488bec08184daec121900a6edcbb9d37d407b9e2eb86733cc3a4732f1b89->leave($__internal_8d98488bec08184daec121900a6edcbb9d37d407b9e2eb86733cc3a4732f1b89_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_25d4391e8044235082f946aa951f1b40edfbba6de884d6f7c14bee24a036067f = $this->env->getExtension("native_profiler");
        $__internal_25d4391e8044235082f946aa951f1b40edfbba6de884d6f7c14bee24a036067f->enter($__internal_25d4391e8044235082f946aa951f1b40edfbba6de884d6f7c14bee24a036067f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div class=\"col-md-12 home-first-div\">
\t\t<img class=\"img-style-2\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/picto/logo-tobook.png"), "html", null, true);
        echo "\">

\t\t<img class=\"img-style-1\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/background/background-1.jpg"), "html", null, true);
        echo "\">

\t\t<h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Servez-vous"), "html", null, true);
        echo " !</h3>

\t\t<form class=\"row\" name=\"mainSearch\" method=\"post\" id='formHome' action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("tobook_search");
        echo "\">
\t\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t\t<input id=\"autocomplete\" onfocus=\"initautocomplete()\" class=\"input-style-5\" type=\"text\" placeholder=\"Entrez votre recherche\">
\t\t\t</div>
\t\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t\t<select name=\"category\" id=\"category\" class=\"input-style-5\">
\t\t\t\t\t<option value='1'selected>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hôtels"), "html", null, true);
        echo "</option>
\t                <option value='3'>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Chambres d'hôtes"), "html", null, true);
        echo "</option>
\t                <option value='2'>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Gîtes"), "html", null, true);
        echo "</option>
\t                <option value='5'>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Restaurants"), "html", null, true);
        echo "</option>
\t                <option value='8'>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Musées"), "html", null, true);
        echo "</option>
\t                <option value='6'>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Restaurants gastronomique"), "html", null, true);
        echo "</option>
\t                ";
        // line 32
        echo "                
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t\t<p>
\t\t\t\t\t<input type=\"submit\" class=\"input-style-2 btn btn-success\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Rechercher"), "html", null, true);
        echo "\">
\t\t\t\t</p>
\t\t\t</div>
\t\t</form>

\t</div>

\t<div class=\"col-md-6 home-second-div-part\">
\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t<img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/picto/icon-voyageur.png"), "html", null, true);
        echo "\">
\t\t\t<h3>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("JE RECHERCHE UN HÔTEL"), "html", null, true);
        echo "</h3>
\t\t\t<h4>__________</h4>
\t\t\t<p>
\t\t\t\t";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris", array(), "messages");
        // line 53
        echo "\t\t\t</p>
\t\t\t<br></br>
\t\t\t<a class=\"bouton-style-1\" href=\"#\">
\t\t\t\t<strong>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("EN SAVOIR +"), "html", null, true);
        echo "</strong>
\t\t\t</a>
\t\t</div>
\t</div>
\t<div class=\"col-md-6 home-second-div-part\">
\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/picto/icon-ampoule.png"), "html", null, true);
        echo "\">
\t\t\t<h3>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("JE RECHERCHE UN HÔTEL"), "html", null, true);
        echo "</h3>
\t\t\t<h4>__________</h4>
\t\t\t<p>
\t\t\t\t";
        // line 66
        echo $this->env->getExtension('translator')->getTranslator()->trans("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris", array(), "messages");
        // line 69
        echo "\t\t\t</p>
\t\t\t<br></br>
\t\t\t<a class=\"bouton-style-1\" href=\"#\">
\t\t\t\t<strong>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("JE DÉCOUVRE"), "html", null, true);
        echo "</strong>
\t\t\t</a>
\t\t</div>
\t</div>
\t<div class=\"col-md-6 home-second-div-part\">
\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t<img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/picto/icon-pro.png"), "html", null, true);
        echo "\">
\t\t\t<h3>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("JE RECHERCHE UN HÔTEL"), "html", null, true);
        echo "</h3>
\t\t\t<h4>__________</h4>
\t\t\t<p>
\t\t\t\t";
        // line 82
        echo $this->env->getExtension('translator')->getTranslator()->trans("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris", array(), "messages");
        // line 85
        echo "\t\t\t</p>
\t\t\t<br></br>
\t\t\t<a class=\"bouton-style-1\" href=\"#\">
\t\t\t\t<strong>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("JE M'INSCRIS"), "html", null, true);
        echo "</strong>
\t\t\t</a>
\t\t</div>
\t</div>
\t<div class=\"col-md-6 home-second-div-part\">
\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t<img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/picto/icon-contact.png"), "html", null, true);
        echo "\">
\t\t\t<h3>";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("JE RECHERCHE UN HÔTEL"), "html", null, true);
        echo "</h3>
\t\t\t<h4>__________</h4>
\t\t\t<p>
\t\t\t\t";
        // line 98
        echo $this->env->getExtension('translator')->getTranslator()->trans("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris", array(), "messages");
        // line 101
        echo "\t\t\t</p>
\t\t\t<br></br>
\t\t\t<a class=\"bouton-style-1\" href=\"#\">
\t\t\t\t<strong>";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("CONTACTEZ-NOUS"), "html", null, true);
        echo "</strong>
\t\t\t</a>
\t\t</div>
\t</div>

\t<div class=\"col-md-12 home-third-div border-1\">
\t\t<div class=\"col-md-5 img-div row\">
\t\t\t<img class=\"img-style-1\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/background/hotel1.jpg"), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-5 col-md-offset-1 text-div\">
\t\t\t<h3><strong>";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("PARIS"), "html", null, true);
        echo "</strong></h3>
\t\t\t<h4>__________</h4>
\t\t\t<p><strong>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Le charme à la française"), "html", null, true);
        echo "</strong></p>
\t\t\t<p>
\t\t\t\t";
        // line 118
        echo $this->env->getExtension('translator')->getTranslator()->trans("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris", array(), "messages");
        // line 121
        echo "\t\t\t</p>
\t\t\t<br></br>
\t\t\t<a class=\"bouton-style-2\" href=\"#\">
\t\t\t\t<strong>";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("LISTE DES HÔTELS"), "html", null, true);
        echo "</strong>
\t\t\t</a>
\t\t</div>
\t</div>
\t<div class=\"col-md-12 home-third-div border-2\">
\t\t<div class=\"col-md-5 col-md-offset-1 text-div\">
\t\t\t<h3><strong>";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("LONDRES"), "html", null, true);
        echo "</strong></h3>
\t\t\t<h4>__________</h4>
\t\t\t<p><strong>";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Une destination \"so British my dear\""), "html", null, true);
        echo "</strong></p>
\t\t\t<p>
\t\t\t\t";
        // line 134
        echo $this->env->getExtension('translator')->getTranslator()->trans("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris", array(), "messages");
        // line 137
        echo "\t\t\t</p>
\t\t\t<br></br>
\t\t\t<a class=\"bouton-style-2\" href=\"#\">
\t\t\t\t<strong>";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("LISTE DES HÔTELS"), "html", null, true);
        echo "</strong>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col-md-5 col-md-offset-1 img-div\">
\t\t\t<img class=\"img-style-1\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/background/hotel2.jpg"), "html", null, true);
        echo "\">
\t\t</div>
\t</div>

\t<div class=\"col-md-12 home-fourth-div\">
\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t<h4>";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("TOBOOK C'EST L'ASSURANCE D'UNE RESERVATION AU MEILLEUR PRIX ET D'UNE RELATION DIRECTE ENTRE HÔTELIERS ET PARTICULIERS."), "html", null, true);
        echo "</h4>
\t\t\t<h3>__________</h3>
\t\t\t<p>
\t\t\t\t";
        // line 153
        echo $this->env->getExtension('translator')->getTranslator()->trans("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", array(), "messages");
        // line 156
        echo "\t\t\t</p>
\t\t\t<br></br>
\t\t\t<a href=\"\"><strong>";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("JE M'INSCRIS"), "html", null, true);
        echo "</strong></a>
\t\t</div>
\t</div>
";
        
        $__internal_25d4391e8044235082f946aa951f1b40edfbba6de884d6f7c14bee24a036067f->leave($__internal_25d4391e8044235082f946aa951f1b40edfbba6de884d6f7c14bee24a036067f_prof);

    }

    public function getTemplateName()
    {
        return "TobookBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 158,  302 => 156,  300 => 153,  294 => 150,  285 => 144,  278 => 140,  273 => 137,  271 => 134,  266 => 132,  261 => 130,  252 => 124,  247 => 121,  245 => 118,  240 => 116,  235 => 114,  229 => 111,  219 => 104,  214 => 101,  212 => 98,  206 => 95,  202 => 94,  193 => 88,  188 => 85,  186 => 82,  180 => 79,  176 => 78,  167 => 72,  162 => 69,  160 => 66,  154 => 63,  150 => 62,  141 => 56,  136 => 53,  134 => 50,  128 => 47,  124 => 46,  112 => 37,  105 => 32,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  72 => 14,  67 => 12,  62 => 10,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TobookBundle::base.html.twig' %}*/
/* */
/* {% block title %}{{ 'Home'|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 	<div class="col-md-12 home-first-div">*/
/* 		<img class="img-style-2" src="{{ asset('img/picto/logo-tobook.png') }}">*/
/* */
/* 		<img class="img-style-1" src="{{ asset('img/background/background-1.jpg') }}">*/
/* */
/* 		<h3>{{ 'Servez-vous'|trans }} !</h3>*/
/* */
/* 		<form class="row" name="mainSearch" method="post" id='formHome' action="{{ path('tobook_search') }}">*/
/* 			<div class="col-md-6 col-md-offset-3">*/
/* 				<input id="autocomplete" onfocus="initautocomplete()" class="input-style-5" type="text" placeholder="Entrez votre recherche">*/
/* 			</div>*/
/* 			<div class="col-md-6 col-md-offset-3">*/
/* 				<select name="category" id="category" class="input-style-5">*/
/* 					<option value='1'selected>{{ "Hôtels"|trans }}</option>*/
/* 	                <option value='3'>{{ "Chambres d'hôtes"|trans }}</option>*/
/* 	                <option value='2'>{{ "Gîtes"|trans }}</option>*/
/* 	                <option value='5'>{{ "Restaurants"|trans }}</option>*/
/* 	                <option value='8'>{{ "Musées"|trans }}</option>*/
/* 	                <option value='6'>{{ "Restaurants gastronomique"|trans }}</option>*/
/* 	                {#*/
/* 	                <option value='4'>{{ "Camping"|trans }}</option>*/
/* 	                <option value='7'>{{ "Parcs de loisirs"|trans }}</option>*/
/* 	                <option value='9'>{{ "Chateaux"|trans }}</option>*/
/* 	                <option value='10'>{{ "Hébergements"|trans }}</option>*/
/* 	                <option value='11'>{{ "Tables d'hotes"|trans }}</option>*/
/* 	            	#}                */
/* 				</select>*/
/* 			</div>*/
/* 			<div class="col-md-6 col-md-offset-3">*/
/* 				<p>*/
/* 					<input type="submit" class="input-style-2 btn btn-success" value="{{ 'Rechercher'|trans }}">*/
/* 				</p>*/
/* 			</div>*/
/* 		</form>*/
/* */
/* 	</div>*/
/* */
/* 	<div class="col-md-6 home-second-div-part">*/
/* 		<div class="col-md-10 col-md-offset-1">*/
/* 			<img src="{{ asset('img/picto/icon-voyageur.png') }}">*/
/* 			<h3>{{ 'JE RECHERCHE UN HÔTEL'|trans }}</h3>*/
/* 			<h4>__________</h4>*/
/* 			<p>*/
/* 				{% trans %}*/
/* 					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris*/
/* 				{% endtrans %}*/
/* 			</p>*/
/* 			<br></br>*/
/* 			<a class="bouton-style-1" href="#">*/
/* 				<strong>{{ 'EN SAVOIR +'|trans }}</strong>*/
/* 			</a>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-6 home-second-div-part">*/
/* 		<div class="col-md-10 col-md-offset-1">*/
/* 			<img src="{{ asset('img/picto/icon-ampoule.png') }}">*/
/* 			<h3>{{ 'JE RECHERCHE UN HÔTEL'|trans }}</h3>*/
/* 			<h4>__________</h4>*/
/* 			<p>*/
/* 				{% trans %}*/
/* 					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris*/
/* 				{% endtrans %}*/
/* 			</p>*/
/* 			<br></br>*/
/* 			<a class="bouton-style-1" href="#">*/
/* 				<strong>{{ 'JE DÉCOUVRE'|trans }}</strong>*/
/* 			</a>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-6 home-second-div-part">*/
/* 		<div class="col-md-10 col-md-offset-1">*/
/* 			<img src="{{ asset('img/picto/icon-pro.png') }}">*/
/* 			<h3>{{ 'JE RECHERCHE UN HÔTEL'|trans }}</h3>*/
/* 			<h4>__________</h4>*/
/* 			<p>*/
/* 				{% trans %}*/
/* 					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris*/
/* 				{% endtrans %}*/
/* 			</p>*/
/* 			<br></br>*/
/* 			<a class="bouton-style-1" href="#">*/
/* 				<strong>{{ "JE M'INSCRIS"|trans }}</strong>*/
/* 			</a>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-6 home-second-div-part">*/
/* 		<div class="col-md-10 col-md-offset-1">*/
/* 			<img src="{{ asset('img/picto/icon-contact.png') }}">*/
/* 			<h3>{{ 'JE RECHERCHE UN HÔTEL'|trans }}</h3>*/
/* 			<h4>__________</h4>*/
/* 			<p>*/
/* 				{% trans %}*/
/* 					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris*/
/* 				{% endtrans %}*/
/* 			</p>*/
/* 			<br></br>*/
/* 			<a class="bouton-style-1" href="#">*/
/* 				<strong>{{'CONTACTEZ-NOUS'|trans }}</strong>*/
/* 			</a>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="col-md-12 home-third-div border-1">*/
/* 		<div class="col-md-5 img-div row">*/
/* 			<img class="img-style-1" src="{{asset('img/background/hotel1.jpg') }}">*/
/* 		</div>*/
/* 		<div class="col-md-5 col-md-offset-1 text-div">*/
/* 			<h3><strong>{{ 'PARIS'|trans }}</strong></h3>*/
/* 			<h4>__________</h4>*/
/* 			<p><strong>{{ 'Le charme à la française'|trans }}</strong></p>*/
/* 			<p>*/
/* 				{% trans %}*/
/* 					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris*/
/* 				{% endtrans %}*/
/* 			</p>*/
/* 			<br></br>*/
/* 			<a class="bouton-style-2" href="#">*/
/* 				<strong>{{ 'LISTE DES HÔTELS'|trans }}</strong>*/
/* 			</a>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-12 home-third-div border-2">*/
/* 		<div class="col-md-5 col-md-offset-1 text-div">*/
/* 			<h3><strong>{{ 'LONDRES'|trans }}</strong></h3>*/
/* 			<h4>__________</h4>*/
/* 			<p><strong>{{ 'Une destination "so British my dear"'|trans }}</strong></p>*/
/* 			<p>*/
/* 				{% trans %}*/
/* 					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris*/
/* 				{% endtrans %}*/
/* 			</p>*/
/* 			<br></br>*/
/* 			<a class="bouton-style-2" href="#">*/
/* 				<strong>{{ 'LISTE DES HÔTELS'|trans }}</strong>*/
/* 			</a>*/
/* 		</div>*/
/* 		<div class="col-md-5 col-md-offset-1 img-div">*/
/* 			<img class="img-style-1" src="{{asset('img/background/hotel2.jpg') }}">*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="col-md-12 home-fourth-div">*/
/* 		<div class="col-md-8 col-md-offset-2">*/
/* 			<h4>{{ "TOBOOK C'EST L'ASSURANCE D'UNE RESERVATION AU MEILLEUR PRIX ET D'UNE RELATION DIRECTE ENTRE HÔTELIERS ET PARTICULIERS."|trans }}</h4>*/
/* 			<h3>__________</h3>*/
/* 			<p>*/
/* 				{% trans %}*/
/* 					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.*/
/* 				{% endtrans %}*/
/* 			</p>*/
/* 			<br></br>*/
/* 			<a href=""><strong>{{ "JE M'INSCRIS"|trans }}</strong></a>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
