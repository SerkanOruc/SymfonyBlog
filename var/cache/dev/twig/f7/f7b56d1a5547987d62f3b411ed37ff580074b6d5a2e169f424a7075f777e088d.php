<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e32196f7ddaa84f6d667779dd4b3abe544f6f1582ad1bafa068555366063a235 extends Twig_Template
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
        $__internal_4e3d518ef14863623ba7d7c5f528f86781a78fad11b28de7a1249699dc5472b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3d518ef14863623ba7d7c5f528f86781a78fad11b28de7a1249699dc5472b1->enter($__internal_4e3d518ef14863623ba7d7c5f528f86781a78fad11b28de7a1249699dc5472b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9abb0ed45c03d9367f3ef9205b9634a68438d8fd8bcc20274ab22cb7978cd3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abb0ed45c03d9367f3ef9205b9634a68438d8fd8bcc20274ab22cb7978cd3d2->enter($__internal_9abb0ed45c03d9367f3ef9205b9634a68438d8fd8bcc20274ab22cb7978cd3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e3d518ef14863623ba7d7c5f528f86781a78fad11b28de7a1249699dc5472b1->leave($__internal_4e3d518ef14863623ba7d7c5f528f86781a78fad11b28de7a1249699dc5472b1_prof);

        
        $__internal_9abb0ed45c03d9367f3ef9205b9634a68438d8fd8bcc20274ab22cb7978cd3d2->leave($__internal_9abb0ed45c03d9367f3ef9205b9634a68438d8fd8bcc20274ab22cb7978cd3d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39d9e6e7d8e68d888e4fe3a0bfaf7f17a1ce7a3604e060ec22aaba42bf5a3a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d9e6e7d8e68d888e4fe3a0bfaf7f17a1ce7a3604e060ec22aaba42bf5a3a8b->enter($__internal_39d9e6e7d8e68d888e4fe3a0bfaf7f17a1ce7a3604e060ec22aaba42bf5a3a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ce66de300e8b4dec21c40b8b350e4682f24de60528684033d106eff4b6d4a67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce66de300e8b4dec21c40b8b350e4682f24de60528684033d106eff4b6d4a67f->enter($__internal_ce66de300e8b4dec21c40b8b350e4682f24de60528684033d106eff4b6d4a67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ce66de300e8b4dec21c40b8b350e4682f24de60528684033d106eff4b6d4a67f->leave($__internal_ce66de300e8b4dec21c40b8b350e4682f24de60528684033d106eff4b6d4a67f_prof);

        
        $__internal_39d9e6e7d8e68d888e4fe3a0bfaf7f17a1ce7a3604e060ec22aaba42bf5a3a8b->leave($__internal_39d9e6e7d8e68d888e4fe3a0bfaf7f17a1ce7a3604e060ec22aaba42bf5a3a8b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b7f8f1378071499abd9cf70abbf2d926ebe66ade4c759f5cbdc9eca07422a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7f8f1378071499abd9cf70abbf2d926ebe66ade4c759f5cbdc9eca07422a17->enter($__internal_3b7f8f1378071499abd9cf70abbf2d926ebe66ade4c759f5cbdc9eca07422a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_47f46e2cd61bc2ea79085a2aecb529d0708379db059a08ef5ac9daa0a3d29aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f46e2cd61bc2ea79085a2aecb529d0708379db059a08ef5ac9daa0a3d29aa0->enter($__internal_47f46e2cd61bc2ea79085a2aecb529d0708379db059a08ef5ac9daa0a3d29aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47f46e2cd61bc2ea79085a2aecb529d0708379db059a08ef5ac9daa0a3d29aa0->leave($__internal_47f46e2cd61bc2ea79085a2aecb529d0708379db059a08ef5ac9daa0a3d29aa0_prof);

        
        $__internal_3b7f8f1378071499abd9cf70abbf2d926ebe66ade4c759f5cbdc9eca07422a17->leave($__internal_3b7f8f1378071499abd9cf70abbf2d926ebe66ade4c759f5cbdc9eca07422a17_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be5d72a9dd8db0c0c9ddc0ef2d484d18a54d35b9274c82deb712ab9cf19fded0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5d72a9dd8db0c0c9ddc0ef2d484d18a54d35b9274c82deb712ab9cf19fded0->enter($__internal_be5d72a9dd8db0c0c9ddc0ef2d484d18a54d35b9274c82deb712ab9cf19fded0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0d41bba63755fc3237ebb2ccbd2988cf3b921d722e60f9d2656cf321c034238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d41bba63755fc3237ebb2ccbd2988cf3b921d722e60f9d2656cf321c034238->enter($__internal_c0d41bba63755fc3237ebb2ccbd2988cf3b921d722e60f9d2656cf321c034238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c0d41bba63755fc3237ebb2ccbd2988cf3b921d722e60f9d2656cf321c034238->leave($__internal_c0d41bba63755fc3237ebb2ccbd2988cf3b921d722e60f9d2656cf321c034238_prof);

        
        $__internal_be5d72a9dd8db0c0c9ddc0ef2d484d18a54d35b9274c82deb712ab9cf19fded0->leave($__internal_be5d72a9dd8db0c0c9ddc0ef2d484d18a54d35b9274c82deb712ab9cf19fded0_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/serkanoruc/Desktop/symfony-blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
