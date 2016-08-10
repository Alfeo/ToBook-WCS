<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_638963e6228bd9e81351af33f4fdfc60631b890fa7e25ca9c61b5d35e50f07d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_293a5ac9518682cbd4c8cb8c18650a934907102e36bdc7a3eace90ffafacabc7 = $this->env->getExtension("native_profiler");
        $__internal_293a5ac9518682cbd4c8cb8c18650a934907102e36bdc7a3eace90ffafacabc7->enter($__internal_293a5ac9518682cbd4c8cb8c18650a934907102e36bdc7a3eace90ffafacabc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_293a5ac9518682cbd4c8cb8c18650a934907102e36bdc7a3eace90ffafacabc7->leave($__internal_293a5ac9518682cbd4c8cb8c18650a934907102e36bdc7a3eace90ffafacabc7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eec58d6673e677e3f9661ff811e60ef063b68c6d52a5e24e049a846f0e881e4f = $this->env->getExtension("native_profiler");
        $__internal_eec58d6673e677e3f9661ff811e60ef063b68c6d52a5e24e049a846f0e881e4f->enter($__internal_eec58d6673e677e3f9661ff811e60ef063b68c6d52a5e24e049a846f0e881e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eec58d6673e677e3f9661ff811e60ef063b68c6d52a5e24e049a846f0e881e4f->leave($__internal_eec58d6673e677e3f9661ff811e60ef063b68c6d52a5e24e049a846f0e881e4f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a6273c3836a5173b80279049dea9a11ac05abe381fd6fd4df889a0ce490fe8d = $this->env->getExtension("native_profiler");
        $__internal_5a6273c3836a5173b80279049dea9a11ac05abe381fd6fd4df889a0ce490fe8d->enter($__internal_5a6273c3836a5173b80279049dea9a11ac05abe381fd6fd4df889a0ce490fe8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a6273c3836a5173b80279049dea9a11ac05abe381fd6fd4df889a0ce490fe8d->leave($__internal_5a6273c3836a5173b80279049dea9a11ac05abe381fd6fd4df889a0ce490fe8d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_070b8ecc8f1b415236c2b311877a8ef4648bb9fc9e0dfd8a6601c0d2b2cad7a8 = $this->env->getExtension("native_profiler");
        $__internal_070b8ecc8f1b415236c2b311877a8ef4648bb9fc9e0dfd8a6601c0d2b2cad7a8->enter($__internal_070b8ecc8f1b415236c2b311877a8ef4648bb9fc9e0dfd8a6601c0d2b2cad7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_070b8ecc8f1b415236c2b311877a8ef4648bb9fc9e0dfd8a6601c0d2b2cad7a8->leave($__internal_070b8ecc8f1b415236c2b311877a8ef4648bb9fc9e0dfd8a6601c0d2b2cad7a8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
