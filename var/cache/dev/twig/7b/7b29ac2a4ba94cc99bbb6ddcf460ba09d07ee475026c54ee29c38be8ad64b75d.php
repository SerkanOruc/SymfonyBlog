<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_09d6568fde080f5fc08b318dd91e1b79ff4f31f57a3c9672d9644b4a1168df60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f66f2b60e4709f8fe0cdf3ab8905ff876d509691ac3ad7a1572b3a076da95cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66f2b60e4709f8fe0cdf3ab8905ff876d509691ac3ad7a1572b3a076da95cbf->enter($__internal_f66f2b60e4709f8fe0cdf3ab8905ff876d509691ac3ad7a1572b3a076da95cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_436e788ecf552f51744c1283d7eacbb3263c93842ec6f1cc4989551c55e99cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436e788ecf552f51744c1283d7eacbb3263c93842ec6f1cc4989551c55e99cbf->enter($__internal_436e788ecf552f51744c1283d7eacbb3263c93842ec6f1cc4989551c55e99cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f66f2b60e4709f8fe0cdf3ab8905ff876d509691ac3ad7a1572b3a076da95cbf->leave($__internal_f66f2b60e4709f8fe0cdf3ab8905ff876d509691ac3ad7a1572b3a076da95cbf_prof);

        
        $__internal_436e788ecf552f51744c1283d7eacbb3263c93842ec6f1cc4989551c55e99cbf->leave($__internal_436e788ecf552f51744c1283d7eacbb3263c93842ec6f1cc4989551c55e99cbf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2aada74164b30288ff3e6550eefbdc9ae209d52e08de93c899746341bf7f131e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aada74164b30288ff3e6550eefbdc9ae209d52e08de93c899746341bf7f131e->enter($__internal_2aada74164b30288ff3e6550eefbdc9ae209d52e08de93c899746341bf7f131e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ffc82e89440fa551ff305da85f837b842219880814a40efad470db1d2f8eb18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc82e89440fa551ff305da85f837b842219880814a40efad470db1d2f8eb18a->enter($__internal_ffc82e89440fa551ff305da85f837b842219880814a40efad470db1d2f8eb18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ffc82e89440fa551ff305da85f837b842219880814a40efad470db1d2f8eb18a->leave($__internal_ffc82e89440fa551ff305da85f837b842219880814a40efad470db1d2f8eb18a_prof);

        
        $__internal_2aada74164b30288ff3e6550eefbdc9ae209d52e08de93c899746341bf7f131e->leave($__internal_2aada74164b30288ff3e6550eefbdc9ae209d52e08de93c899746341bf7f131e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a5f5c622f5d17851d3dee2d49869c8f5810cc9b3898046afd61dbfc64f187ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5f5c622f5d17851d3dee2d49869c8f5810cc9b3898046afd61dbfc64f187ee->enter($__internal_6a5f5c622f5d17851d3dee2d49869c8f5810cc9b3898046afd61dbfc64f187ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2580c923d2115a35bfc87d4cbffcb785af283f1f3dbeec0c7a95048d8151b1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2580c923d2115a35bfc87d4cbffcb785af283f1f3dbeec0c7a95048d8151b1aa->enter($__internal_2580c923d2115a35bfc87d4cbffcb785af283f1f3dbeec0c7a95048d8151b1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2580c923d2115a35bfc87d4cbffcb785af283f1f3dbeec0c7a95048d8151b1aa->leave($__internal_2580c923d2115a35bfc87d4cbffcb785af283f1f3dbeec0c7a95048d8151b1aa_prof);

        
        $__internal_6a5f5c622f5d17851d3dee2d49869c8f5810cc9b3898046afd61dbfc64f187ee->leave($__internal_6a5f5c622f5d17851d3dee2d49869c8f5810cc9b3898046afd61dbfc64f187ee_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e39a186c6b122b1231cb051c59a5ac5140eed05a43375df153cae3de519f7ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39a186c6b122b1231cb051c59a5ac5140eed05a43375df153cae3de519f7ba9->enter($__internal_e39a186c6b122b1231cb051c59a5ac5140eed05a43375df153cae3de519f7ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d09cc8641d4ab339c20e0f997b6b8e031217277873b8d7be1b821e85562c531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d09cc8641d4ab339c20e0f997b6b8e031217277873b8d7be1b821e85562c531->enter($__internal_9d09cc8641d4ab339c20e0f997b6b8e031217277873b8d7be1b821e85562c531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9d09cc8641d4ab339c20e0f997b6b8e031217277873b8d7be1b821e85562c531->leave($__internal_9d09cc8641d4ab339c20e0f997b6b8e031217277873b8d7be1b821e85562c531_prof);

        
        $__internal_e39a186c6b122b1231cb051c59a5ac5140eed05a43375df153cae3de519f7ba9->leave($__internal_e39a186c6b122b1231cb051c59a5ac5140eed05a43375df153cae3de519f7ba9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/serkanoruc/Desktop/symfony-blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
