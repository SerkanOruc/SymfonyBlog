<?php

/* post/new.html.twig */
class __TwigTemplate_6e010516430adeb6145cebc989eb83de79201a6d38dbacba6e68d2c59a3a7478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00e43fae78b0d6b07174a6abcce2c332771775dec0c208843c30ed217f33274a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e43fae78b0d6b07174a6abcce2c332771775dec0c208843c30ed217f33274a->enter($__internal_00e43fae78b0d6b07174a6abcce2c332771775dec0c208843c30ed217f33274a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $__internal_9b2ebe8bb8b6b21d0f049b96175420107049c855fa251907e0f166ea8eb1728d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2ebe8bb8b6b21d0f049b96175420107049c855fa251907e0f166ea8eb1728d->enter($__internal_9b2ebe8bb8b6b21d0f049b96175420107049c855fa251907e0f166ea8eb1728d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00e43fae78b0d6b07174a6abcce2c332771775dec0c208843c30ed217f33274a->leave($__internal_00e43fae78b0d6b07174a6abcce2c332771775dec0c208843c30ed217f33274a_prof);

        
        $__internal_9b2ebe8bb8b6b21d0f049b96175420107049c855fa251907e0f166ea8eb1728d->leave($__internal_9b2ebe8bb8b6b21d0f049b96175420107049c855fa251907e0f166ea8eb1728d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1faaa24150dc3f75a4c8d679bc2425970e11c9f89eeeb4fdffb2258deb7c452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1faaa24150dc3f75a4c8d679bc2425970e11c9f89eeeb4fdffb2258deb7c452->enter($__internal_b1faaa24150dc3f75a4c8d679bc2425970e11c9f89eeeb4fdffb2258deb7c452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_615fdaab44a001e265e4939536e46b960d15e2d26344d3dfe62ddb5eeeacbab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615fdaab44a001e265e4939536e46b960d15e2d26344d3dfe62ddb5eeeacbab4->enter($__internal_615fdaab44a001e265e4939536e46b960d15e2d26344d3dfe62ddb5eeeacbab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_615fdaab44a001e265e4939536e46b960d15e2d26344d3dfe62ddb5eeeacbab4->leave($__internal_615fdaab44a001e265e4939536e46b960d15e2d26344d3dfe62ddb5eeeacbab4_prof);

        
        $__internal_b1faaa24150dc3f75a4c8d679bc2425970e11c9f89eeeb4fdffb2258deb7c452->leave($__internal_b1faaa24150dc3f75a4c8d679bc2425970e11c9f89eeeb4fdffb2258deb7c452_prof);

    }

    public function getTemplateName()
    {
        return "post/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Post creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "post/new.html.twig", "/Users/serkanoruc/Desktop/symfony-blog/app/Resources/views/post/new.html.twig");
    }
}
