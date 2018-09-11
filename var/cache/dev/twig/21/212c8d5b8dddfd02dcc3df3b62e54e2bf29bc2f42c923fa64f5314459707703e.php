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
        $__internal_e1f783ccf2a08a48c7ae7aa82930b57482249289549a8447184440b58dddc17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f783ccf2a08a48c7ae7aa82930b57482249289549a8447184440b58dddc17c->enter($__internal_e1f783ccf2a08a48c7ae7aa82930b57482249289549a8447184440b58dddc17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $__internal_ac3aa471be027b99eab7c758ebb1833582f6eed48d60418c9cbb2416597625ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3aa471be027b99eab7c758ebb1833582f6eed48d60418c9cbb2416597625ba->enter($__internal_ac3aa471be027b99eab7c758ebb1833582f6eed48d60418c9cbb2416597625ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1f783ccf2a08a48c7ae7aa82930b57482249289549a8447184440b58dddc17c->leave($__internal_e1f783ccf2a08a48c7ae7aa82930b57482249289549a8447184440b58dddc17c_prof);

        
        $__internal_ac3aa471be027b99eab7c758ebb1833582f6eed48d60418c9cbb2416597625ba->leave($__internal_ac3aa471be027b99eab7c758ebb1833582f6eed48d60418c9cbb2416597625ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe8ff5dfe0e25ec17e2f046047acf08387e80806d15a690d83b4443d0a3a0d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8ff5dfe0e25ec17e2f046047acf08387e80806d15a690d83b4443d0a3a0d64->enter($__internal_fe8ff5dfe0e25ec17e2f046047acf08387e80806d15a690d83b4443d0a3a0d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52a5f7279ba5c80fa18e541bd85f3939c08290a87485986125a96e31d7d6d3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a5f7279ba5c80fa18e541bd85f3939c08290a87485986125a96e31d7d6d3f7->enter($__internal_52a5f7279ba5c80fa18e541bd85f3939c08290a87485986125a96e31d7d6d3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_52a5f7279ba5c80fa18e541bd85f3939c08290a87485986125a96e31d7d6d3f7->leave($__internal_52a5f7279ba5c80fa18e541bd85f3939c08290a87485986125a96e31d7d6d3f7_prof);

        
        $__internal_fe8ff5dfe0e25ec17e2f046047acf08387e80806d15a690d83b4443d0a3a0d64->leave($__internal_fe8ff5dfe0e25ec17e2f046047acf08387e80806d15a690d83b4443d0a3a0d64_prof);

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
