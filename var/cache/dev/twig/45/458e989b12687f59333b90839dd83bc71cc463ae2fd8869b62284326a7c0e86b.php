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
        $__internal_33c788f533920344a305628da1211e13c5cb1cfe325e97b38c7e7db65cb346e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c788f533920344a305628da1211e13c5cb1cfe325e97b38c7e7db65cb346e5->enter($__internal_33c788f533920344a305628da1211e13c5cb1cfe325e97b38c7e7db65cb346e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6aeaf8d42acfbac197b01e57909530a931f81b0ed14e56eeec99cbed52b505a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aeaf8d42acfbac197b01e57909530a931f81b0ed14e56eeec99cbed52b505a7->enter($__internal_6aeaf8d42acfbac197b01e57909530a931f81b0ed14e56eeec99cbed52b505a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33c788f533920344a305628da1211e13c5cb1cfe325e97b38c7e7db65cb346e5->leave($__internal_33c788f533920344a305628da1211e13c5cb1cfe325e97b38c7e7db65cb346e5_prof);

        
        $__internal_6aeaf8d42acfbac197b01e57909530a931f81b0ed14e56eeec99cbed52b505a7->leave($__internal_6aeaf8d42acfbac197b01e57909530a931f81b0ed14e56eeec99cbed52b505a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b46bb374e8caefe862d740d1d40dd3619d77195538b6e12b4932ab9998e6aa5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46bb374e8caefe862d740d1d40dd3619d77195538b6e12b4932ab9998e6aa5e->enter($__internal_b46bb374e8caefe862d740d1d40dd3619d77195538b6e12b4932ab9998e6aa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2775962dab70ec295b1922523c5c6a94da93a00aad991b72cdace412ec1d46a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2775962dab70ec295b1922523c5c6a94da93a00aad991b72cdace412ec1d46a5->enter($__internal_2775962dab70ec295b1922523c5c6a94da93a00aad991b72cdace412ec1d46a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2775962dab70ec295b1922523c5c6a94da93a00aad991b72cdace412ec1d46a5->leave($__internal_2775962dab70ec295b1922523c5c6a94da93a00aad991b72cdace412ec1d46a5_prof);

        
        $__internal_b46bb374e8caefe862d740d1d40dd3619d77195538b6e12b4932ab9998e6aa5e->leave($__internal_b46bb374e8caefe862d740d1d40dd3619d77195538b6e12b4932ab9998e6aa5e_prof);

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
