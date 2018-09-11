<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b1da3861d5c0504be21fce7386e1c1903bc8c94db9c233889ac34980073aad1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_21bdcc691f939d983c2564300fc7b582d4bf8dc5782308afa85cd4f84e241b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21bdcc691f939d983c2564300fc7b582d4bf8dc5782308afa85cd4f84e241b8d->enter($__internal_21bdcc691f939d983c2564300fc7b582d4bf8dc5782308afa85cd4f84e241b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f3f7afe24955c7d92fd57949962e1256c04b1b4b9e364960be98c58a962f4698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f7afe24955c7d92fd57949962e1256c04b1b4b9e364960be98c58a962f4698->enter($__internal_f3f7afe24955c7d92fd57949962e1256c04b1b4b9e364960be98c58a962f4698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21bdcc691f939d983c2564300fc7b582d4bf8dc5782308afa85cd4f84e241b8d->leave($__internal_21bdcc691f939d983c2564300fc7b582d4bf8dc5782308afa85cd4f84e241b8d_prof);

        
        $__internal_f3f7afe24955c7d92fd57949962e1256c04b1b4b9e364960be98c58a962f4698->leave($__internal_f3f7afe24955c7d92fd57949962e1256c04b1b4b9e364960be98c58a962f4698_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9ccd43b08ed7fe9397805c09ed1e59516b7931d798612300126905766f8b581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ccd43b08ed7fe9397805c09ed1e59516b7931d798612300126905766f8b581->enter($__internal_f9ccd43b08ed7fe9397805c09ed1e59516b7931d798612300126905766f8b581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea5460273b5d1e32f71071f2e3660229db8ce11894344f070b4a50733892908c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5460273b5d1e32f71071f2e3660229db8ce11894344f070b4a50733892908c->enter($__internal_ea5460273b5d1e32f71071f2e3660229db8ce11894344f070b4a50733892908c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ea5460273b5d1e32f71071f2e3660229db8ce11894344f070b4a50733892908c->leave($__internal_ea5460273b5d1e32f71071f2e3660229db8ce11894344f070b4a50733892908c_prof);

        
        $__internal_f9ccd43b08ed7fe9397805c09ed1e59516b7931d798612300126905766f8b581->leave($__internal_f9ccd43b08ed7fe9397805c09ed1e59516b7931d798612300126905766f8b581_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea80b62f454886475db8f56a41d95c74fee8901bd5fcdca460ca58152d99e39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea80b62f454886475db8f56a41d95c74fee8901bd5fcdca460ca58152d99e39f->enter($__internal_ea80b62f454886475db8f56a41d95c74fee8901bd5fcdca460ca58152d99e39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a7241c7df31764d02e763b0fbd1fc46cec2b0549b08e9c77d8c693e797f1a1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7241c7df31764d02e763b0fbd1fc46cec2b0549b08e9c77d8c693e797f1a1c7->enter($__internal_a7241c7df31764d02e763b0fbd1fc46cec2b0549b08e9c77d8c693e797f1a1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a7241c7df31764d02e763b0fbd1fc46cec2b0549b08e9c77d8c693e797f1a1c7->leave($__internal_a7241c7df31764d02e763b0fbd1fc46cec2b0549b08e9c77d8c693e797f1a1c7_prof);

        
        $__internal_ea80b62f454886475db8f56a41d95c74fee8901bd5fcdca460ca58152d99e39f->leave($__internal_ea80b62f454886475db8f56a41d95c74fee8901bd5fcdca460ca58152d99e39f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c50e3e4bdb935ab02876b32f79a01bfc58bc07634068e51f2706f84167d58d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c50e3e4bdb935ab02876b32f79a01bfc58bc07634068e51f2706f84167d58d8->enter($__internal_9c50e3e4bdb935ab02876b32f79a01bfc58bc07634068e51f2706f84167d58d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6fe18853351d6d609dd18599ed3d7468b903841803b19db3252ef5db8afd4197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe18853351d6d609dd18599ed3d7468b903841803b19db3252ef5db8afd4197->enter($__internal_6fe18853351d6d609dd18599ed3d7468b903841803b19db3252ef5db8afd4197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6fe18853351d6d609dd18599ed3d7468b903841803b19db3252ef5db8afd4197->leave($__internal_6fe18853351d6d609dd18599ed3d7468b903841803b19db3252ef5db8afd4197_prof);

        
        $__internal_9c50e3e4bdb935ab02876b32f79a01bfc58bc07634068e51f2706f84167d58d8->leave($__internal_9c50e3e4bdb935ab02876b32f79a01bfc58bc07634068e51f2706f84167d58d8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/serkanoruc/Desktop/symfony-blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
