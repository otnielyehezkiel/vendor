<?php

/* base.html.twig */
class __TwigTemplate_efcf52d2cbec3d41b9ac42b35ec286cc3d916c789a684a43314a16c83a4628f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a041a2792d14e3766fe9ebe002a7c07bbe74a9152c900083cd87f347a01448ab = $this->env->getExtension("native_profiler");
        $__internal_a041a2792d14e3766fe9ebe002a7c07bbe74a9152c900083cd87f347a01448ab->enter($__internal_a041a2792d14e3766fe9ebe002a7c07bbe74a9152c900083cd87f347a01448ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a041a2792d14e3766fe9ebe002a7c07bbe74a9152c900083cd87f347a01448ab->leave($__internal_a041a2792d14e3766fe9ebe002a7c07bbe74a9152c900083cd87f347a01448ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae3ce8c4401432becbd7bd9faecb70f60603bb9abeb1c87339b54521e32af7d6 = $this->env->getExtension("native_profiler");
        $__internal_ae3ce8c4401432becbd7bd9faecb70f60603bb9abeb1c87339b54521e32af7d6->enter($__internal_ae3ce8c4401432becbd7bd9faecb70f60603bb9abeb1c87339b54521e32af7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ae3ce8c4401432becbd7bd9faecb70f60603bb9abeb1c87339b54521e32af7d6->leave($__internal_ae3ce8c4401432becbd7bd9faecb70f60603bb9abeb1c87339b54521e32af7d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89e037511326562eeef845ddcce13cce0785a5559180e3f3e9c64c1b3b4e1f69 = $this->env->getExtension("native_profiler");
        $__internal_89e037511326562eeef845ddcce13cce0785a5559180e3f3e9c64c1b3b4e1f69->enter($__internal_89e037511326562eeef845ddcce13cce0785a5559180e3f3e9c64c1b3b4e1f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_89e037511326562eeef845ddcce13cce0785a5559180e3f3e9c64c1b3b4e1f69->leave($__internal_89e037511326562eeef845ddcce13cce0785a5559180e3f3e9c64c1b3b4e1f69_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7959d464b31849f8930b92849b4d6c8346378b0bfdaab52ceaf390ac7602c15 = $this->env->getExtension("native_profiler");
        $__internal_e7959d464b31849f8930b92849b4d6c8346378b0bfdaab52ceaf390ac7602c15->enter($__internal_e7959d464b31849f8930b92849b4d6c8346378b0bfdaab52ceaf390ac7602c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e7959d464b31849f8930b92849b4d6c8346378b0bfdaab52ceaf390ac7602c15->leave($__internal_e7959d464b31849f8930b92849b4d6c8346378b0bfdaab52ceaf390ac7602c15_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35f8ae14a2f9bb08988947f338a2b1346bb474a60a1bdc9a15f455aef5d5b1d3 = $this->env->getExtension("native_profiler");
        $__internal_35f8ae14a2f9bb08988947f338a2b1346bb474a60a1bdc9a15f455aef5d5b1d3->enter($__internal_35f8ae14a2f9bb08988947f338a2b1346bb474a60a1bdc9a15f455aef5d5b1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_35f8ae14a2f9bb08988947f338a2b1346bb474a60a1bdc9a15f455aef5d5b1d3->leave($__internal_35f8ae14a2f9bb08988947f338a2b1346bb474a60a1bdc9a15f455aef5d5b1d3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
