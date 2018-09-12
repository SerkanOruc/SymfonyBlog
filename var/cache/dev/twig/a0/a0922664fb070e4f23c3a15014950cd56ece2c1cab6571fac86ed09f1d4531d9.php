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
        $__internal_d9bd622ac4e0a405df13898edb507fb3417f99d016cc808b8ba9b99d42ae9122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9bd622ac4e0a405df13898edb507fb3417f99d016cc808b8ba9b99d42ae9122->enter($__internal_d9bd622ac4e0a405df13898edb507fb3417f99d016cc808b8ba9b99d42ae9122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $__internal_d67f9c2d1863afaee91b7d4770375426c54177b940cb8972ff542ba87f1bd645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67f9c2d1863afaee91b7d4770375426c54177b940cb8972ff542ba87f1bd645->enter($__internal_d67f9c2d1863afaee91b7d4770375426c54177b940cb8972ff542ba87f1bd645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9bd622ac4e0a405df13898edb507fb3417f99d016cc808b8ba9b99d42ae9122->leave($__internal_d9bd622ac4e0a405df13898edb507fb3417f99d016cc808b8ba9b99d42ae9122_prof);

        
        $__internal_d67f9c2d1863afaee91b7d4770375426c54177b940cb8972ff542ba87f1bd645->leave($__internal_d67f9c2d1863afaee91b7d4770375426c54177b940cb8972ff542ba87f1bd645_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f96998b040cc4a1ab527ad1412816bdef4df589c9b4178ef968fba844b41358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f96998b040cc4a1ab527ad1412816bdef4df589c9b4178ef968fba844b41358->enter($__internal_8f96998b040cc4a1ab527ad1412816bdef4df589c9b4178ef968fba844b41358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f3a23272ff4a0f0932840a6f6d7887b52403b6167f0a5f2c2e4c8a6c509d770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3a23272ff4a0f0932840a6f6d7887b52403b6167f0a5f2c2e4c8a6c509d770->enter($__internal_3f3a23272ff4a0f0932840a6f6d7887b52403b6167f0a5f2c2e4c8a6c509d770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3f3a23272ff4a0f0932840a6f6d7887b52403b6167f0a5f2c2e4c8a6c509d770->leave($__internal_3f3a23272ff4a0f0932840a6f6d7887b52403b6167f0a5f2c2e4c8a6c509d770_prof);

        
        $__internal_8f96998b040cc4a1ab527ad1412816bdef4df589c9b4178ef968fba844b41358->leave($__internal_8f96998b040cc4a1ab527ad1412816bdef4df589c9b4178ef968fba844b41358_prof);

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
