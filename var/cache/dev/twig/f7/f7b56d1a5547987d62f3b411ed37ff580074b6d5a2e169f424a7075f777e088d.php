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
        $__internal_f3651cbfabfbaf58c5418c3bf57d9fdd8e90fe2597c276842096e3a5780970ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3651cbfabfbaf58c5418c3bf57d9fdd8e90fe2597c276842096e3a5780970ab->enter($__internal_f3651cbfabfbaf58c5418c3bf57d9fdd8e90fe2597c276842096e3a5780970ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_51eeab17af525d4386e9c7814abdb1cd111b7cff07c05eca2d6e78427f81d67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51eeab17af525d4386e9c7814abdb1cd111b7cff07c05eca2d6e78427f81d67e->enter($__internal_51eeab17af525d4386e9c7814abdb1cd111b7cff07c05eca2d6e78427f81d67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3651cbfabfbaf58c5418c3bf57d9fdd8e90fe2597c276842096e3a5780970ab->leave($__internal_f3651cbfabfbaf58c5418c3bf57d9fdd8e90fe2597c276842096e3a5780970ab_prof);

        
        $__internal_51eeab17af525d4386e9c7814abdb1cd111b7cff07c05eca2d6e78427f81d67e->leave($__internal_51eeab17af525d4386e9c7814abdb1cd111b7cff07c05eca2d6e78427f81d67e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c852eed1a2013cc735d023a85c48d249c3c93cea956746fab55b9f9e1a09eb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c852eed1a2013cc735d023a85c48d249c3c93cea956746fab55b9f9e1a09eb64->enter($__internal_c852eed1a2013cc735d023a85c48d249c3c93cea956746fab55b9f9e1a09eb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ebe62666cd9ecce9a8066605471d2e7dce050f567f747987889f1888157ac2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe62666cd9ecce9a8066605471d2e7dce050f567f747987889f1888157ac2d2->enter($__internal_ebe62666cd9ecce9a8066605471d2e7dce050f567f747987889f1888157ac2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ebe62666cd9ecce9a8066605471d2e7dce050f567f747987889f1888157ac2d2->leave($__internal_ebe62666cd9ecce9a8066605471d2e7dce050f567f747987889f1888157ac2d2_prof);

        
        $__internal_c852eed1a2013cc735d023a85c48d249c3c93cea956746fab55b9f9e1a09eb64->leave($__internal_c852eed1a2013cc735d023a85c48d249c3c93cea956746fab55b9f9e1a09eb64_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_acecc3f719d497572bc9d416a3b928d23965de0fbde37ed9bd186552e0344a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acecc3f719d497572bc9d416a3b928d23965de0fbde37ed9bd186552e0344a01->enter($__internal_acecc3f719d497572bc9d416a3b928d23965de0fbde37ed9bd186552e0344a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef4b6818439ce14a08c420a7e1d9d6e994a7369998f2fa184eb12c72304a917e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4b6818439ce14a08c420a7e1d9d6e994a7369998f2fa184eb12c72304a917e->enter($__internal_ef4b6818439ce14a08c420a7e1d9d6e994a7369998f2fa184eb12c72304a917e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef4b6818439ce14a08c420a7e1d9d6e994a7369998f2fa184eb12c72304a917e->leave($__internal_ef4b6818439ce14a08c420a7e1d9d6e994a7369998f2fa184eb12c72304a917e_prof);

        
        $__internal_acecc3f719d497572bc9d416a3b928d23965de0fbde37ed9bd186552e0344a01->leave($__internal_acecc3f719d497572bc9d416a3b928d23965de0fbde37ed9bd186552e0344a01_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed629f12e0d8732cb5ba0c5936b5d6187aa63f134c4044629374d950462b8178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed629f12e0d8732cb5ba0c5936b5d6187aa63f134c4044629374d950462b8178->enter($__internal_ed629f12e0d8732cb5ba0c5936b5d6187aa63f134c4044629374d950462b8178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64dc3dae94048372f74533f624c41051c62e0d73b1414a247c3ef1bf8286aa01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64dc3dae94048372f74533f624c41051c62e0d73b1414a247c3ef1bf8286aa01->enter($__internal_64dc3dae94048372f74533f624c41051c62e0d73b1414a247c3ef1bf8286aa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64dc3dae94048372f74533f624c41051c62e0d73b1414a247c3ef1bf8286aa01->leave($__internal_64dc3dae94048372f74533f624c41051c62e0d73b1414a247c3ef1bf8286aa01_prof);

        
        $__internal_ed629f12e0d8732cb5ba0c5936b5d6187aa63f134c4044629374d950462b8178->leave($__internal_ed629f12e0d8732cb5ba0c5936b5d6187aa63f134c4044629374d950462b8178_prof);

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
