<?php

/* post/edit.html.twig */
class __TwigTemplate_c63b5d85c93711189b245a1ebceb5d219d29a04d16500936abf96f51102c7e16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/edit.html.twig", 1);
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
        $__internal_7ae7141030f0e36416b3e11dafc1169a5812d7c8d021ed0a7e772a3d3f0e8920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae7141030f0e36416b3e11dafc1169a5812d7c8d021ed0a7e772a3d3f0e8920->enter($__internal_7ae7141030f0e36416b3e11dafc1169a5812d7c8d021ed0a7e772a3d3f0e8920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $__internal_face2058bbda13e307caf2fd704b3b17fecf7f7edef622a4a103d7c506eb9a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_face2058bbda13e307caf2fd704b3b17fecf7f7edef622a4a103d7c506eb9a26->enter($__internal_face2058bbda13e307caf2fd704b3b17fecf7f7edef622a4a103d7c506eb9a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ae7141030f0e36416b3e11dafc1169a5812d7c8d021ed0a7e772a3d3f0e8920->leave($__internal_7ae7141030f0e36416b3e11dafc1169a5812d7c8d021ed0a7e772a3d3f0e8920_prof);

        
        $__internal_face2058bbda13e307caf2fd704b3b17fecf7f7edef622a4a103d7c506eb9a26->leave($__internal_face2058bbda13e307caf2fd704b3b17fecf7f7edef622a4a103d7c506eb9a26_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b37de769fe41cc7c9058aad6436237ea7daf23435704c9a3c7cba689639a8d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37de769fe41cc7c9058aad6436237ea7daf23435704c9a3c7cba689639a8d9e->enter($__internal_b37de769fe41cc7c9058aad6436237ea7daf23435704c9a3c7cba689639a8d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0757e8b135106d247fa1c8f070a3f006abd60d3dbdc6376b459996e6ca136d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0757e8b135106d247fa1c8f070a3f006abd60d3dbdc6376b459996e6ca136d3->enter($__internal_e0757e8b135106d247fa1c8f070a3f006abd60d3dbdc6376b459996e6ca136d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e0757e8b135106d247fa1c8f070a3f006abd60d3dbdc6376b459996e6ca136d3->leave($__internal_e0757e8b135106d247fa1c8f070a3f006abd60d3dbdc6376b459996e6ca136d3_prof);

        
        $__internal_b37de769fe41cc7c9058aad6436237ea7daf23435704c9a3c7cba689639a8d9e->leave($__internal_b37de769fe41cc7c9058aad6436237ea7daf23435704c9a3c7cba689639a8d9e_prof);

    }

    public function getTemplateName()
    {
        return "post/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Post edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "post/edit.html.twig", "/Users/serkanoruc/Desktop/symfony-blog/app/Resources/views/post/edit.html.twig");
    }
}
