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
            'Stylesheets' => array($this, 'block_Stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ab41d5ef368f77eaaeb2bce054fa0d610687f3a78945180fc1d27add1fa0749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab41d5ef368f77eaaeb2bce054fa0d610687f3a78945180fc1d27add1fa0749->enter($__internal_9ab41d5ef368f77eaaeb2bce054fa0d610687f3a78945180fc1d27add1fa0749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_db2c9de86e3bce69fa995b437067789b312f95a1285f6e5fd2d24ec579649e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2c9de86e3bce69fa995b437067789b312f95a1285f6e5fd2d24ec579649e4c->enter($__internal_db2c9de86e3bce69fa995b437067789b312f95a1285f6e5fd2d24ec579649e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/global.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        // line 7
        $this->displayBlock('Stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_9ab41d5ef368f77eaaeb2bce054fa0d610687f3a78945180fc1d27add1fa0749->leave($__internal_9ab41d5ef368f77eaaeb2bce054fa0d610687f3a78945180fc1d27add1fa0749_prof);

        
        $__internal_db2c9de86e3bce69fa995b437067789b312f95a1285f6e5fd2d24ec579649e4c->leave($__internal_db2c9de86e3bce69fa995b437067789b312f95a1285f6e5fd2d24ec579649e4c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_191e774a82b52ab7c3d2982c3814a2b5259aad65a3eb6bec7397a923d3512bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191e774a82b52ab7c3d2982c3814a2b5259aad65a3eb6bec7397a923d3512bf2->enter($__internal_191e774a82b52ab7c3d2982c3814a2b5259aad65a3eb6bec7397a923d3512bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3369f7e9ea21ae42171a66500237dcdd0c021e4deef78a38aa639e2f2fd98cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3369f7e9ea21ae42171a66500237dcdd0c021e4deef78a38aa639e2f2fd98cc5->enter($__internal_3369f7e9ea21ae42171a66500237dcdd0c021e4deef78a38aa639e2f2fd98cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3369f7e9ea21ae42171a66500237dcdd0c021e4deef78a38aa639e2f2fd98cc5->leave($__internal_3369f7e9ea21ae42171a66500237dcdd0c021e4deef78a38aa639e2f2fd98cc5_prof);

        
        $__internal_191e774a82b52ab7c3d2982c3814a2b5259aad65a3eb6bec7397a923d3512bf2->leave($__internal_191e774a82b52ab7c3d2982c3814a2b5259aad65a3eb6bec7397a923d3512bf2_prof);

    }

    // line 7
    public function block_Stylesheets($context, array $blocks = array())
    {
        $__internal_2e1e0589c79e73ab0f6f558aa6dd9b48976178c3984abad735bed0f7b54e19ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1e0589c79e73ab0f6f558aa6dd9b48976178c3984abad735bed0f7b54e19ec->enter($__internal_2e1e0589c79e73ab0f6f558aa6dd9b48976178c3984abad735bed0f7b54e19ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Stylesheets"));

        $__internal_b7030e1b5dd237b95814056a67cb1509afe7d70642ea6ecf293f200b955d2539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7030e1b5dd237b95814056a67cb1509afe7d70642ea6ecf293f200b955d2539->enter($__internal_b7030e1b5dd237b95814056a67cb1509afe7d70642ea6ecf293f200b955d2539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Stylesheets"));

        
        $__internal_b7030e1b5dd237b95814056a67cb1509afe7d70642ea6ecf293f200b955d2539->leave($__internal_b7030e1b5dd237b95814056a67cb1509afe7d70642ea6ecf293f200b955d2539_prof);

        
        $__internal_2e1e0589c79e73ab0f6f558aa6dd9b48976178c3984abad735bed0f7b54e19ec->leave($__internal_2e1e0589c79e73ab0f6f558aa6dd9b48976178c3984abad735bed0f7b54e19ec_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_67e97043babe921c0a54edec5f099f350b8cc283a4464946f68d1ba450f4da21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e97043babe921c0a54edec5f099f350b8cc283a4464946f68d1ba450f4da21->enter($__internal_67e97043babe921c0a54edec5f099f350b8cc283a4464946f68d1ba450f4da21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f41efbda9d762dee6c60d6e6e0aecb92af13e99617507d6bca225ad8721dd57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f41efbda9d762dee6c60d6e6e0aecb92af13e99617507d6bca225ad8721dd57->enter($__internal_7f41efbda9d762dee6c60d6e6e0aecb92af13e99617507d6bca225ad8721dd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f41efbda9d762dee6c60d6e6e0aecb92af13e99617507d6bca225ad8721dd57->leave($__internal_7f41efbda9d762dee6c60d6e6e0aecb92af13e99617507d6bca225ad8721dd57_prof);

        
        $__internal_67e97043babe921c0a54edec5f099f350b8cc283a4464946f68d1ba450f4da21->leave($__internal_67e97043babe921c0a54edec5f099f350b8cc283a4464946f68d1ba450f4da21_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1de04cbb6ff1705d868fe979d07db7339a89eef2410408da5b2b4edacfeeff1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de04cbb6ff1705d868fe979d07db7339a89eef2410408da5b2b4edacfeeff1d->enter($__internal_1de04cbb6ff1705d868fe979d07db7339a89eef2410408da5b2b4edacfeeff1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_918eee5e3d3a38068e0519afd66cba15ea022fba9a91c3915a367bb4e0179efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918eee5e3d3a38068e0519afd66cba15ea022fba9a91c3915a367bb4e0179efd->enter($__internal_918eee5e3d3a38068e0519afd66cba15ea022fba9a91c3915a367bb4e0179efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_918eee5e3d3a38068e0519afd66cba15ea022fba9a91c3915a367bb4e0179efd->leave($__internal_918eee5e3d3a38068e0519afd66cba15ea022fba9a91c3915a367bb4e0179efd_prof);

        
        $__internal_1de04cbb6ff1705d868fe979d07db7339a89eef2410408da5b2b4edacfeeff1d->leave($__internal_1de04cbb6ff1705d868fe979d07db7339a89eef2410408da5b2b4edacfeeff1d_prof);

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
        return array (  121 => 12,  104 => 11,  87 => 7,  69 => 5,  57 => 13,  54 => 12,  52 => 11,  45 => 8,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <link href=\"{{ asset('css/global.css') }}\" rel=\"stylesheet\" />
        {% block Stylesheets %}{% endblock %}
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
