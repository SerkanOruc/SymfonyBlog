<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_bbbdb619d4695417e719e15418bb8f7c34a41d45bc2aa7782f2a075f81cd0ca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ecd91de21c6e29c78d223fe96d38dd7772d12edd781d2b99d6b597304abd428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ecd91de21c6e29c78d223fe96d38dd7772d12edd781d2b99d6b597304abd428->enter($__internal_5ecd91de21c6e29c78d223fe96d38dd7772d12edd781d2b99d6b597304abd428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_fb88d2a51ecee33b22558adecf9629e05a42d341980792d5ea3afc296c534789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb88d2a51ecee33b22558adecf9629e05a42d341980792d5ea3afc296c534789->enter($__internal_fb88d2a51ecee33b22558adecf9629e05a42d341980792d5ea3afc296c534789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ecd91de21c6e29c78d223fe96d38dd7772d12edd781d2b99d6b597304abd428->leave($__internal_5ecd91de21c6e29c78d223fe96d38dd7772d12edd781d2b99d6b597304abd428_prof);

        
        $__internal_fb88d2a51ecee33b22558adecf9629e05a42d341980792d5ea3afc296c534789->leave($__internal_fb88d2a51ecee33b22558adecf9629e05a42d341980792d5ea3afc296c534789_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e16dde4174063ae92f7e017a77f4196d7747ed5a0cfec61da30f64d995e09618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16dde4174063ae92f7e017a77f4196d7747ed5a0cfec61da30f64d995e09618->enter($__internal_e16dde4174063ae92f7e017a77f4196d7747ed5a0cfec61da30f64d995e09618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_68a618bade42124e840f1b5841183dcf51795de5c9c8d5368e6654b430b276cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a618bade42124e840f1b5841183dcf51795de5c9c8d5368e6654b430b276cd->enter($__internal_68a618bade42124e840f1b5841183dcf51795de5c9c8d5368e6654b430b276cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_68a618bade42124e840f1b5841183dcf51795de5c9c8d5368e6654b430b276cd->leave($__internal_68a618bade42124e840f1b5841183dcf51795de5c9c8d5368e6654b430b276cd_prof);

        
        $__internal_e16dde4174063ae92f7e017a77f4196d7747ed5a0cfec61da30f64d995e09618->leave($__internal_e16dde4174063ae92f7e017a77f4196d7747ed5a0cfec61da30f64d995e09618_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/serkanoruc/Desktop/symfony-blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
