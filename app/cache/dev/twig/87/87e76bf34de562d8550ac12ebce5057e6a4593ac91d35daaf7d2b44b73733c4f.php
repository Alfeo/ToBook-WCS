<?php

/* UserBundle:register:confirmed.html.twig */
class __TwigTemplate_cc36e7272f35313a6e03e27dc06bf0845de2674e357339f7512ed7b3a4b74a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TobookBundle::base.html.twig", "UserBundle:register:confirmed.html.twig", 1);
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
        $__internal_f8e1bad438af5b0b59a25ad759265612e7bc3cb7f57efb9c628fe357e1a73894 = $this->env->getExtension("native_profiler");
        $__internal_f8e1bad438af5b0b59a25ad759265612e7bc3cb7f57efb9c628fe357e1a73894->enter($__internal_f8e1bad438af5b0b59a25ad759265612e7bc3cb7f57efb9c628fe357e1a73894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:register:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e1bad438af5b0b59a25ad759265612e7bc3cb7f57efb9c628fe357e1a73894->leave($__internal_f8e1bad438af5b0b59a25ad759265612e7bc3cb7f57efb9c628fe357e1a73894_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_99b421c4d817efa5a9b5020324578c9e17d3458a5113d487b575c8644988b255 = $this->env->getExtension("native_profiler");
        $__internal_99b421c4d817efa5a9b5020324578c9e17d3458a5113d487b575c8644988b255->enter($__internal_99b421c4d817efa5a9b5020324578c9e17d3458a5113d487b575c8644988b255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Confirmation"), "html", null, true);
        
        $__internal_99b421c4d817efa5a9b5020324578c9e17d3458a5113d487b575c8644988b255->leave($__internal_99b421c4d817efa5a9b5020324578c9e17d3458a5113d487b575c8644988b255_prof);

    }

    // line 4
    public function block_ariane($context, array $blocks = array())
    {
        $__internal_2d0316d51f1c90288bae813d15c4ed2717e2e7a20b0fd3a7d6d82b204cc932ce = $this->env->getExtension("native_profiler");
        $__internal_2d0316d51f1c90288bae813d15c4ed2717e2e7a20b0fd3a7d6d82b204cc932ce->enter($__internal_2d0316d51f1c90288bae813d15c4ed2717e2e7a20b0fd3a7d6d82b204cc932ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ariane"));

        // line 5
        echo "
    <div class=\"col-md-12 ariane\">
        <div class=\"col-md-1 ariane-back\">
            <h4>< Retour</h4>
        </div>
        <div class=\"col-md-11 ariane-content\">
            <a>Accueil</a> >
            <a>Tobook</a> >
            <a>Login</a>
        </div>
    </div>

";
        
        $__internal_2d0316d51f1c90288bae813d15c4ed2717e2e7a20b0fd3a7d6d82b204cc932ce->leave($__internal_2d0316d51f1c90288bae813d15c4ed2717e2e7a20b0fd3a7d6d82b204cc932ce_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f243565485cc6ecfb91853e16f813a19653caee61357662585ba61faa820eb7 = $this->env->getExtension("native_profiler");
        $__internal_3f243565485cc6ecfb91853e16f813a19653caee61357662585ba61faa820eb7->enter($__internal_3f243565485cc6ecfb91853e16f813a19653caee61357662585ba61faa820eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "

    <div class=\"col-md-6 col-md-offset-3 main-div\">
        <img class=\"img-style-2\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/picto/logo-tobook.png"), "html", null, true);
        echo "\">

        <h3><strong>ACTIVATION COMPTE PRO</strong></h3>
        <h4>__________</h4>
        <br></br>

        <div class=\"col-md-10 col-md-offset-1\">
        \t<p>Félicitations <b>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userPrenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userNom", array()), "html", null, true);
        echo "</b>, votre compte est maintenant activé.</p>
\t\t</div>
\t</div>


";
        
        $__internal_3f243565485cc6ecfb91853e16f813a19653caee61357662585ba61faa820eb7->leave($__internal_3f243565485cc6ecfb91853e16f813a19653caee61357662585ba61faa820eb7_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:register:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 29,  84 => 22,  79 => 19,  73 => 18,  54 => 5,  48 => 4,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'TobookBundle::base.html.twig' %}*/
/* {% block title %}{{ 'Confirmation'|trans }}{% endblock %}*/
/* */
/* {% block ariane %}*/
/* */
/*     <div class="col-md-12 ariane">*/
/*         <div class="col-md-1 ariane-back">*/
/*             <h4>< Retour</h4>*/
/*         </div>*/
/*         <div class="col-md-11 ariane-content">*/
/*             <a>Accueil</a> >*/
/*             <a>Tobook</a> >*/
/*             <a>Login</a>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* */
/*     <div class="col-md-6 col-md-offset-3 main-div">*/
/*         <img class="img-style-2" src="{{ asset('img/picto/logo-tobook.png') }}">*/
/* */
/*         <h3><strong>ACTIVATION COMPTE PRO</strong></h3>*/
/*         <h4>__________</h4>*/
/*         <br></br>*/
/* */
/*         <div class="col-md-10 col-md-offset-1">*/
/*         	<p>Félicitations <b>{{user.userPrenom }} {{user.userNom}}</b>, votre compte est maintenant activé.</p>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* */
/* {% endblock %}*/
