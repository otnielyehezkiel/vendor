<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_db820157f25e2c1c1627875dbf2e886acc2ed607390a9f53ac347e59e44e0639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3822811c08db626dd6530e425d1b991c398a6dceeb7896b435e5f8132c6e001c = $this->env->getExtension("native_profiler");
        $__internal_3822811c08db626dd6530e425d1b991c398a6dceeb7896b435e5f8132c6e001c->enter($__internal_3822811c08db626dd6530e425d1b991c398a6dceeb7896b435e5f8132c6e001c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3822811c08db626dd6530e425d1b991c398a6dceeb7896b435e5f8132c6e001c->leave($__internal_3822811c08db626dd6530e425d1b991c398a6dceeb7896b435e5f8132c6e001c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7bf70d16e8a77d134f2d914d697d9bd5f1debf32579b28bb1a81b3ea43d1052a = $this->env->getExtension("native_profiler");
        $__internal_7bf70d16e8a77d134f2d914d697d9bd5f1debf32579b28bb1a81b3ea43d1052a->enter($__internal_7bf70d16e8a77d134f2d914d697d9bd5f1debf32579b28bb1a81b3ea43d1052a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7bf70d16e8a77d134f2d914d697d9bd5f1debf32579b28bb1a81b3ea43d1052a->leave($__internal_7bf70d16e8a77d134f2d914d697d9bd5f1debf32579b28bb1a81b3ea43d1052a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6856d377149d4026cc2baa5642e8febbff31a7ebdda517cc7e15e355f218d383 = $this->env->getExtension("native_profiler");
        $__internal_6856d377149d4026cc2baa5642e8febbff31a7ebdda517cc7e15e355f218d383->enter($__internal_6856d377149d4026cc2baa5642e8febbff31a7ebdda517cc7e15e355f218d383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6856d377149d4026cc2baa5642e8febbff31a7ebdda517cc7e15e355f218d383->leave($__internal_6856d377149d4026cc2baa5642e8febbff31a7ebdda517cc7e15e355f218d383_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d76fd787c9d94cb977d98d2457d35ce762c2401753f48b118270a31aa08f7cc = $this->env->getExtension("native_profiler");
        $__internal_2d76fd787c9d94cb977d98d2457d35ce762c2401753f48b118270a31aa08f7cc->enter($__internal_2d76fd787c9d94cb977d98d2457d35ce762c2401753f48b118270a31aa08f7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2d76fd787c9d94cb977d98d2457d35ce762c2401753f48b118270a31aa08f7cc->leave($__internal_2d76fd787c9d94cb977d98d2457d35ce762c2401753f48b118270a31aa08f7cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
