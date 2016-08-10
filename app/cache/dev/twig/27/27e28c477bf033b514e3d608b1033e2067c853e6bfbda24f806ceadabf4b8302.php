<?php

/* UserBundle:user:edit.html.twig */
class __TwigTemplate_201dbe38e4be926c9b7378aa9431c4fee27b1e90d2aeef525c2875a21206eaca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TobookBundle::base.html.twig", "UserBundle:user:edit.html.twig", 1);
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
        $__internal_0a9e68f5ab9c3604466d455c699c42d2c544dc7761f69772745ed0c4f28f805b = $this->env->getExtension("native_profiler");
        $__internal_0a9e68f5ab9c3604466d455c699c42d2c544dc7761f69772745ed0c4f28f805b->enter($__internal_0a9e68f5ab9c3604466d455c699c42d2c544dc7761f69772745ed0c4f28f805b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a9e68f5ab9c3604466d455c699c42d2c544dc7761f69772745ed0c4f28f805b->leave($__internal_0a9e68f5ab9c3604466d455c699c42d2c544dc7761f69772745ed0c4f28f805b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_30af13aee16e1af5543aba4fef6ae9249f786b39939b996f651f52585036ee0e = $this->env->getExtension("native_profiler");
        $__internal_30af13aee16e1af5543aba4fef6ae9249f786b39939b996f651f52585036ee0e->enter($__internal_30af13aee16e1af5543aba4fef6ae9249f786b39939b996f651f52585036ee0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edition";
        
        $__internal_30af13aee16e1af5543aba4fef6ae9249f786b39939b996f651f52585036ee0e->leave($__internal_30af13aee16e1af5543aba4fef6ae9249f786b39939b996f651f52585036ee0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b0f9c9e2792ecc0ed1471f343f367a3c42cd76fa39ebbe057374fd138dc8188 = $this->env->getExtension("native_profiler");
        $__internal_6b0f9c9e2792ecc0ed1471f343f367a3c42cd76fa39ebbe057374fd138dc8188->enter($__internal_6b0f9c9e2792ecc0ed1471f343f367a3c42cd76fa39ebbe057374fd138dc8188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-md-12\">
        <div class=\"col-md-12\">
            <div class=\"col-md-12\">
                <div class=\"col-md-12\">
                    <h1><span style=\"color:rgb(102,179,47);\" class=\"glyphicon glyphicon-user\"></span> ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mon profil utilisateur"), "html", null, true);
        echo "</h1>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    <div class=\"col-md-12 edit-form-profil\">
        <div class=\"col-md-5\">
            <div class=\"col-md-12\">
                <div class=\"col-md-5\">
                    <p>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userNom", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Nom :")) ? array() : array("label" => $_label_)));
        echo "</p>
                </div>
                <div class=\"col-md-3\">
                    <p>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userNom", array()), 'widget');
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"col-md-5\">
                    <p>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userPrenom", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Prénom :")) ? array() : array("label" => $_label_)));
        echo "</p>
                </div>
                <div class=\"col-md-3\">
                    <p>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userPrenom", array()), 'widget');
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"col-md-5\">
                    <p>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userLangue", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Langue principale")) ? array() : array("label" => $_label_)));
        echo "</p>
                </div>
                <div class=\"col-md-3\">
                    <p>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userLangue", array()), 'widget');
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"col-md-5\">
                    <p>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userAdd1", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Adresses :")) ? array() : array("label" => $_label_)));
        echo "</p>
                </div>
                <div class=\"col-md-3\">
                    <p>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userAdd1", array()), 'widget', array("attr" => array("placeholder" => "Adresse 1")));
        echo "</p>
                    <p>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userAdd2", array()), 'widget', array("attr" => array("placeholder" => "Adresse 2")));
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"col-md-5\">
                    <p>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userCp", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Code Postal :")) ? array() : array("label" => $_label_)));
        echo "</p>
                </div>
                <div class=\"col-md-3\">
                    <p>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userCp", array()), 'widget');
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-5\">
            <div class=\"col-md-12\">
                <div class=\"col-md-5\">
                    <p>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userVille", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Ville :")) ? array() : array("label" => $_label_)));
        echo "</p>
                </div>
                <div class=\"col-md-3\">
                    <p>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userVille", array()), 'widget');
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"col-md-5\">
                    <p>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userTel", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Tel :")) ? array() : array("label" => $_label_)));
        echo "</p>
                </div>
                <div class=\"col-md-3\">
                    <p>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userTel", array()), 'widget');
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"col-md-5\">
                    <p>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userMob", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Mobile :")) ? array() : array("label" => $_label_)));
        echo "</p>
                </div>
                <div class=\"col-md-3\">
                    <p>";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userMob", array()), 'widget');
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"col-md-5\">
                    <p>";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userDtNais", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Date de naissance :")) ? array() : array("label" => $_label_)));
        echo "</p>
                </div>
                <div class=\"col-md-3\">
                    <p>";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userDtNais", array()), 'widget', array("attr" => array("placeholder" => "yyyy-mm-dd")));
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"col-md-5\">
                    <p>";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userDescriptif", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Description :")) ? array() : array("label" => $_label_)));
        echo "</p>
                </div>
                <div class=\"col-md-3\">
                    <p>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userDescriptif", array()), 'widget');
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-12\">
            <hr>
            <div class=\"col-md-12\">
                <div class=\"col-md-5\">
                    <input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sauvegarder"), "html", null, true);
        echo "\" />
                </div>
            </div>
        </div>
    </div>
    ";
        // line 111
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    ";
        // line 113
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userProf", array()) == 1)) {
            // line 114
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("WCSPropertyBundle:Professionnel:index"));
            echo "
    ";
        }
        // line 116
        echo "
";
        
        $__internal_6b0f9c9e2792ecc0ed1471f343f367a3c42cd76fa39ebbe057374fd138dc8188->leave($__internal_6b0f9c9e2792ecc0ed1471f343f367a3c42cd76fa39ebbe057374fd138dc8188_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 116,  241 => 114,  239 => 113,  234 => 111,  226 => 106,  215 => 98,  209 => 95,  201 => 90,  195 => 87,  187 => 82,  181 => 79,  173 => 74,  167 => 71,  159 => 66,  153 => 63,  143 => 56,  137 => 53,  129 => 48,  125 => 47,  119 => 44,  111 => 39,  105 => 36,  97 => 31,  91 => 28,  83 => 23,  77 => 20,  69 => 15,  59 => 8,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'TobookBundle::base.html.twig' %}*/
/* {% block title %}Edition{% endblock %}*/
/* {% block body %}*/
/*     <div class="col-md-12">*/
/*         <div class="col-md-12">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-12">*/
/*                     <h1><span style="color:rgb(102,179,47);" class="glyphicon glyphicon-user"></span> {{ 'Mon profil utilisateur'|trans }}</h1>*/
/*                     <hr>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     {{ form_start(edit_form) }}*/
/*     <div class="col-md-12 edit-form-profil">*/
/*         <div class="col-md-5">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-5">*/
/*                     <p>{{ form_label(edit_form.userNom, 'Nom :'|trans ) }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <p>{{ form_widget(edit_form.userNom) }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-5">*/
/*                     <p>{{ form_label(edit_form.userPrenom, 'Prénom :'|trans ) }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <p>{{ form_widget(edit_form.userPrenom) }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-5">*/
/*                     <p>{{ form_label(edit_form.userLangue, 'Langue principale'|trans ) }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <p>{{ form_widget(edit_form.userLangue) }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-5">*/
/*                     <p>{{ form_label(edit_form.userAdd1, 'Adresses :'|trans ) }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <p>{{ form_widget(edit_form.userAdd1, {'attr': {'placeholder': 'Adresse 1'}}) }}</p>*/
/*                     <p>{{ form_widget(edit_form.userAdd2, {'attr': {'placeholder': 'Adresse 2'}}) }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-5">*/
/*                     <p>{{ form_label(edit_form.userCp, 'Code Postal :'|trans ) }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <p>{{ form_widget(edit_form.userCp) }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-5">*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-5">*/
/*                     <p>{{ form_label(edit_form.userVille, 'Ville :'|trans ) }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <p>{{ form_widget(edit_form.userVille) }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-5">*/
/*                     <p>{{ form_label(edit_form.userTel, 'Tel :'|trans ) }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <p>{{ form_widget(edit_form.userTel) }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-5">*/
/*                     <p>{{ form_label(edit_form.userMob, 'Mobile :'|trans ) }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <p>{{ form_widget(edit_form.userMob) }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-5">*/
/*                     <p>{{ form_label(edit_form.userDtNais, 'Date de naissance :'|trans) }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <p>{{ form_widget(edit_form.userDtNais, { 'attr': {'placeholder': "yyyy-mm-dd"} }) }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-5">*/
/*                     <p>{{ form_label(edit_form.userDescriptif, 'Description :'|trans ) }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <p>{{ form_widget(edit_form.userDescriptif) }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-12">*/
/*             <hr>*/
/*             <div class="col-md-12">*/
/*                 <div class="col-md-5">*/
/*                     <input class="btn btn-success" type="submit" value="{{ 'Sauvegarder'|trans }}" />*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     {% if user.userProf == 1 %}*/
/*     {{ render(controller('WCSPropertyBundle:Professionnel:index')) }}*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
