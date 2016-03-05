<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6fc12a47959a8ddafac6f7b00102155e2e4da12bcff383cfc71fda848ea1316b extends Twig_Template
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
        $__internal_0a86891a4260292e5ac4a53027ec9fe560c773cc6378021bacf42f7ac4b0b218 = $this->env->getExtension("native_profiler");
        $__internal_0a86891a4260292e5ac4a53027ec9fe560c773cc6378021bacf42f7ac4b0b218->enter($__internal_0a86891a4260292e5ac4a53027ec9fe560c773cc6378021bacf42f7ac4b0b218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a86891a4260292e5ac4a53027ec9fe560c773cc6378021bacf42f7ac4b0b218->leave($__internal_0a86891a4260292e5ac4a53027ec9fe560c773cc6378021bacf42f7ac4b0b218_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc274c911762844c6a7ed234ac82d0cf474169b018a74ac0797e6d50d005791c = $this->env->getExtension("native_profiler");
        $__internal_bc274c911762844c6a7ed234ac82d0cf474169b018a74ac0797e6d50d005791c->enter($__internal_bc274c911762844c6a7ed234ac82d0cf474169b018a74ac0797e6d50d005791c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc274c911762844c6a7ed234ac82d0cf474169b018a74ac0797e6d50d005791c->leave($__internal_bc274c911762844c6a7ed234ac82d0cf474169b018a74ac0797e6d50d005791c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8bc4abf7b601092c4f0f91cfefe47880d87f7f0ef59247c9a3a504f4a68bb5b = $this->env->getExtension("native_profiler");
        $__internal_e8bc4abf7b601092c4f0f91cfefe47880d87f7f0ef59247c9a3a504f4a68bb5b->enter($__internal_e8bc4abf7b601092c4f0f91cfefe47880d87f7f0ef59247c9a3a504f4a68bb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8bc4abf7b601092c4f0f91cfefe47880d87f7f0ef59247c9a3a504f4a68bb5b->leave($__internal_e8bc4abf7b601092c4f0f91cfefe47880d87f7f0ef59247c9a3a504f4a68bb5b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7bad865ea661731ebc61caec21f6504100e70ce0fdb5f1415d87e24170f28c78 = $this->env->getExtension("native_profiler");
        $__internal_7bad865ea661731ebc61caec21f6504100e70ce0fdb5f1415d87e24170f28c78->enter($__internal_7bad865ea661731ebc61caec21f6504100e70ce0fdb5f1415d87e24170f28c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7bad865ea661731ebc61caec21f6504100e70ce0fdb5f1415d87e24170f28c78->leave($__internal_7bad865ea661731ebc61caec21f6504100e70ce0fdb5f1415d87e24170f28c78_prof);

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
