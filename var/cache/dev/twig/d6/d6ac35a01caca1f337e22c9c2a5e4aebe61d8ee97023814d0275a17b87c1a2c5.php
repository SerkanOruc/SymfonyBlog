<?php

/* base.html.twig */
class __TwigTemplate_118e5ee49c50f95033850652a4fb5553d9c9d4c00d85a2bed1b30fa0d88b11d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aff254e9f0947e3b83678d6407017ea4737a92befa7ba9ce4c6ec8eecd5f27ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff254e9f0947e3b83678d6407017ea4737a92befa7ba9ce4c6ec8eecd5f27ff->enter($__internal_aff254e9f0947e3b83678d6407017ea4737a92befa7ba9ce4c6ec8eecd5f27ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_10f76a06e3fe4b61f5b9a0483a3b2b75ec0b219b056539e5c0df7f99d2e60166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f76a06e3fe4b61f5b9a0483a3b2b75ec0b219b056539e5c0df7f99d2e60166->enter($__internal_10f76a06e3fe4b61f5b9a0483a3b2b75ec0b219b056539e5c0df7f99d2e60166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_aff254e9f0947e3b83678d6407017ea4737a92befa7ba9ce4c6ec8eecd5f27ff->leave($__internal_aff254e9f0947e3b83678d6407017ea4737a92befa7ba9ce4c6ec8eecd5f27ff_prof);

        
        $__internal_10f76a06e3fe4b61f5b9a0483a3b2b75ec0b219b056539e5c0df7f99d2e60166->leave($__internal_10f76a06e3fe4b61f5b9a0483a3b2b75ec0b219b056539e5c0df7f99d2e60166_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a5a4e2c44d0eefb50f6a78086f6d9947e92b1368a81d617697b845f3342a019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5a4e2c44d0eefb50f6a78086f6d9947e92b1368a81d617697b845f3342a019->enter($__internal_8a5a4e2c44d0eefb50f6a78086f6d9947e92b1368a81d617697b845f3342a019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e50adde7a4745189daad97298ab606db4fade1f82bbc4757864937ce4aa0587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e50adde7a4745189daad97298ab606db4fade1f82bbc4757864937ce4aa0587->enter($__internal_7e50adde7a4745189daad97298ab606db4fade1f82bbc4757864937ce4aa0587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7e50adde7a4745189daad97298ab606db4fade1f82bbc4757864937ce4aa0587->leave($__internal_7e50adde7a4745189daad97298ab606db4fade1f82bbc4757864937ce4aa0587_prof);

        
        $__internal_8a5a4e2c44d0eefb50f6a78086f6d9947e92b1368a81d617697b845f3342a019->leave($__internal_8a5a4e2c44d0eefb50f6a78086f6d9947e92b1368a81d617697b845f3342a019_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a1860f02fb88301663950150bdbe7c126172112ab0bfce0a41b95a25d214221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1860f02fb88301663950150bdbe7c126172112ab0bfce0a41b95a25d214221->enter($__internal_8a1860f02fb88301663950150bdbe7c126172112ab0bfce0a41b95a25d214221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1a0a311ae95013f49cc3adedaa29416df544ee00f70352e4e3ddf1f6d1b214a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0a311ae95013f49cc3adedaa29416df544ee00f70352e4e3ddf1f6d1b214a5->enter($__internal_1a0a311ae95013f49cc3adedaa29416df544ee00f70352e4e3ddf1f6d1b214a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1a0a311ae95013f49cc3adedaa29416df544ee00f70352e4e3ddf1f6d1b214a5->leave($__internal_1a0a311ae95013f49cc3adedaa29416df544ee00f70352e4e3ddf1f6d1b214a5_prof);

        
        $__internal_8a1860f02fb88301663950150bdbe7c126172112ab0bfce0a41b95a25d214221->leave($__internal_8a1860f02fb88301663950150bdbe7c126172112ab0bfce0a41b95a25d214221_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6e8475b26ba80c7528fc2311545881a6e6a4af4260391b3cc5a4c685d5daef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e8475b26ba80c7528fc2311545881a6e6a4af4260391b3cc5a4c685d5daef5->enter($__internal_b6e8475b26ba80c7528fc2311545881a6e6a4af4260391b3cc5a4c685d5daef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f132fd886f6764abecf9cca6e20e99b819b98a84ac4090b01895144f5155dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f132fd886f6764abecf9cca6e20e99b819b98a84ac4090b01895144f5155dce->enter($__internal_8f132fd886f6764abecf9cca6e20e99b819b98a84ac4090b01895144f5155dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f132fd886f6764abecf9cca6e20e99b819b98a84ac4090b01895144f5155dce->leave($__internal_8f132fd886f6764abecf9cca6e20e99b819b98a84ac4090b01895144f5155dce_prof);

        
        $__internal_b6e8475b26ba80c7528fc2311545881a6e6a4af4260391b3cc5a4c685d5daef5->leave($__internal_b6e8475b26ba80c7528fc2311545881a6e6a4af4260391b3cc5a4c685d5daef5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67f4ad1a945f2ba8cefaf3e4d003013798c187e87be253d6109a35362bf5ad68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f4ad1a945f2ba8cefaf3e4d003013798c187e87be253d6109a35362bf5ad68->enter($__internal_67f4ad1a945f2ba8cefaf3e4d003013798c187e87be253d6109a35362bf5ad68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_13dcb4a0ffd0cdbed192f54aabe3233629b8ae7dea6e197c062b508a94ea2646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13dcb4a0ffd0cdbed192f54aabe3233629b8ae7dea6e197c062b508a94ea2646->enter($__internal_13dcb4a0ffd0cdbed192f54aabe3233629b8ae7dea6e197c062b508a94ea2646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_13dcb4a0ffd0cdbed192f54aabe3233629b8ae7dea6e197c062b508a94ea2646->leave($__internal_13dcb4a0ffd0cdbed192f54aabe3233629b8ae7dea6e197c062b508a94ea2646_prof);

        
        $__internal_67f4ad1a945f2ba8cefaf3e4d003013798c187e87be253d6109a35362bf5ad68->leave($__internal_67f4ad1a945f2ba8cefaf3e4d003013798c187e87be253d6109a35362bf5ad68_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/serkanoruc/Desktop/symfony-blog/app/Resources/views/base.html.twig");
    }
}
