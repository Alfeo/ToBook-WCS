<?php

/* UserBundle:register:register.html.twig */
class __TwigTemplate_1f35f4994193e053b869e0f33ec30952b6f0493f54a7c48511ea0f0db59cbf0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TobookBundle::base.html.twig", "UserBundle:register:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ariane' => array($this, 'block_ariane'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TobookBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab6ed4cc08fcbcf3a6568f13979a73bf134045b3e1eb23e2133d5bd6612f3ca2 = $this->env->getExtension("native_profiler");
        $__internal_ab6ed4cc08fcbcf3a6568f13979a73bf134045b3e1eb23e2133d5bd6612f3ca2->enter($__internal_ab6ed4cc08fcbcf3a6568f13979a73bf134045b3e1eb23e2133d5bd6612f3ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:register:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab6ed4cc08fcbcf3a6568f13979a73bf134045b3e1eb23e2133d5bd6612f3ca2->leave($__internal_ab6ed4cc08fcbcf3a6568f13979a73bf134045b3e1eb23e2133d5bd6612f3ca2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_372db5dc7436e3303dc8a382abb2498646f30f5ce3f84137a27287dd33025aa8 = $this->env->getExtension("native_profiler");
        $__internal_372db5dc7436e3303dc8a382abb2498646f30f5ce3f84137a27287dd33025aa8->enter($__internal_372db5dc7436e3303dc8a382abb2498646f30f5ce3f84137a27287dd33025aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("S'INSCRIRE"), "html", null, true);
        
        $__internal_372db5dc7436e3303dc8a382abb2498646f30f5ce3f84137a27287dd33025aa8->leave($__internal_372db5dc7436e3303dc8a382abb2498646f30f5ce3f84137a27287dd33025aa8_prof);

    }

    // line 3
    public function block_ariane($context, array $blocks = array())
    {
        $__internal_3934f2e5b96ba2899e3905afdd2c57df713145180bc81a9ec1665a3af5559b4f = $this->env->getExtension("native_profiler");
        $__internal_3934f2e5b96ba2899e3905afdd2c57df713145180bc81a9ec1665a3af5559b4f->enter($__internal_3934f2e5b96ba2899e3905afdd2c57df713145180bc81a9ec1665a3af5559b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ariane"));

        // line 4
        echo "
\t<div class=\"col-md-12 ariane\">
\t\t<div class=\"col-md-1 ariane-back\">
\t\t\t<h4>< Retour</h4>
\t\t</div>
\t\t<div class=\"col-md-11 ariane-content\">
\t\t\t<a>Accueil</a> >
\t\t\t<a>Tobook</a> >
\t\t\t<a>Login</a>
\t\t</div>
\t</div>

";
        
        $__internal_3934f2e5b96ba2899e3905afdd2c57df713145180bc81a9ec1665a3af5559b4f->leave($__internal_3934f2e5b96ba2899e3905afdd2c57df713145180bc81a9ec1665a3af5559b4f_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_00b4e1fd45454675a329d5182184747655bd92e90068cd46e8b87adf0842b271 = $this->env->getExtension("native_profiler");
        $__internal_00b4e1fd45454675a329d5182184747655bd92e90068cd46e8b87adf0842b271->enter($__internal_00b4e1fd45454675a329d5182184747655bd92e90068cd46e8b87adf0842b271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
\t<div class=\"col-md-6 col-md-offset-3 main-div-register\">
\t\t<img class=\"img-style-2\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/picto/logo-tobook.png"), "html", null, true);
        echo "\">

\t\t<h3><strong>JE M'INSCRIS</strong></h3>
\t\t<h4>__________</h4>
\t\t<br></br>

\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t";
        // line 29
        echo "\t\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("user_register")));
        echo "
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userProf", array()), 'label', array("label_attr" => array("class" => "left")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Je suis ?", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "\t\t\t    
\t\t\t    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userProf", array()), 'widget', array("attr" => array("class" => "input-style-3")));
        echo "\t\t\t
\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userNom", array()), 'label', array("label_attr" => array("class" => "left")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Nom", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
\t\t\t    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userNom", array()), 'widget', array("attr" => array("class" => "input-style-3")));
        echo "
\t\t\t    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userPrenom", array()), 'label', array("label_attr" => array("class" => "left")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Prénom", array(), "FOSUserBundle")) ? array() : array("label" => $_label_)));
        echo "
\t\t\t    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userPrenom", array()), 'widget', array("attr" => array("class" => "input-style-3")));
        echo "
\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "left")) + (twig_test_empty($_label_ = $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array())) ? array() : array("label" => $_label_)));
        echo "
\t\t\t    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "input-style-3")));
        echo "\t\t\t    
\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "left")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array())) ? array() : array("label" => $_label_)));
        echo "
\t\t\t    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "input-style-3")));
        echo "\t
\t\t\t    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "left")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array())) ? array() : array("label" => $_label_)));
        echo "
\t\t\t    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "input-style-3")));
        echo "\t\t\t    
\t\t\t    <div>
\t\t\t        <input type=\"reset\" value=\"Annuler\" class=\"input-style-4 btn btn-success\"/>
\t\t\t        <input type=\"submit\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"input-style-4 btn btn-success\"/>
\t\t\t    </div>
\t\t\t";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>

";
        
        $__internal_00b4e1fd45454675a329d5182184747655bd92e90068cd46e8b87adf0842b271->leave($__internal_00b4e1fd45454675a329d5182184747655bd92e90068cd46e8b87adf0842b271_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:register:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 46,  148 => 44,  142 => 41,  138 => 40,  134 => 39,  130 => 38,  126 => 37,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  93 => 29,  83 => 21,  79 => 19,  73 => 18,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'TobookBundle::base.html.twig' %}*/
/* {% block title %}{{ "S'INSCRIRE"|trans }}{% endblock %}*/
/* {% block ariane %}*/
/* */
/* 	<div class="col-md-12 ariane">*/
/* 		<div class="col-md-1 ariane-back">*/
/* 			<h4>< Retour</h4>*/
/* 		</div>*/
/* 		<div class="col-md-11 ariane-content">*/
/* 			<a>Accueil</a> >*/
/* 			<a>Tobook</a> >*/
/* 			<a>Login</a>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 	<div class="col-md-6 col-md-offset-3 main-div-register">*/
/* 		<img class="img-style-2" src="{{ asset('img/picto/logo-tobook.png') }}">*/
/* */
/* 		<h3><strong>JE M'INSCRIS</strong></h3>*/
/* 		<h4>__________</h4>*/
/* 		<br></br>*/
/* */
/* 		<div class="col-md-10 col-md-offset-1">*/
/* 			{% trans_default_domain 'FOSUserBundle' %}*/
/* 			{{ form_start(form, {'method': 'post', 'action': path('user_register')}) }}*/
/* 				{{ form_label(form.userProf, 'Je suis ?'|trans, {'label_attr': {'class': 'left'}}) }}			    */
/* 			    {{ form_widget(form.userProf, {'attr': {'class': 'input-style-3'}}) }}			*/
/* 				{{ form_label(form.userNom, 'Nom'|trans, {'label_attr': {'class': 'left'}}) }}*/
/* 			    {{ form_widget(form.userNom, {'attr': {'class': 'input-style-3'}}) }}*/
/* 			    {{ form_label(form.userPrenom, 'Prénom'|trans, {'label_attr': {'class': 'left'}}) }}*/
/* 			    {{ form_widget(form.userPrenom, {'attr': {'class': 'input-style-3'}}) }}*/
/* 				{{ form_label(form.email, form.email, {'label_attr': {'class': 'left'}}) }}*/
/* 			    {{ form_widget(form.email, {'attr': {'class': 'input-style-3'}}) }}			    */
/* 				{{ form_label(form.plainPassword.first, form.plainPassword.first, {'label_attr': {'class': 'left'}}) }}*/
/* 			    {{ form_widget(form.plainPassword.first, {'attr': {'class': 'input-style-3'}}) }}	*/
/* 			    {{ form_label(form.plainPassword.second, form.plainPassword.second, {'label_attr': {'class': 'left'}}) }}*/
/* 			    {{ form_widget(form.plainPassword.second, {'attr': {'class': 'input-style-3'}}) }}			    */
/* 			    <div>*/
/* 			        <input type="reset" value="Annuler" class="input-style-4 btn btn-success"/>*/
/* 			        <input type="submit" value="{{ 'registration.submit'|trans }}" class="input-style-4 btn btn-success"/>*/
/* 			    </div>*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
