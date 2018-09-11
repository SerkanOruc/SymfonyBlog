<?php

/* post/show.html.twig */
class __TwigTemplate_cc1281cac9713f885c4a2056186c671e00765ed266e323748685e0f1bec7ca14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
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
        $__internal_92fe27618764be4654c0404c4d24d273cf61f1b06ff1aeabf2ef09a2858a6ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92fe27618764be4654c0404c4d24d273cf61f1b06ff1aeabf2ef09a2858a6ce9->enter($__internal_92fe27618764be4654c0404c4d24d273cf61f1b06ff1aeabf2ef09a2858a6ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_2dc36c989f673e6de185f6e77a14176fa7f095eddd2ba2a58c4747a095e6731d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc36c989f673e6de185f6e77a14176fa7f095eddd2ba2a58c4747a095e6731d->enter($__internal_2dc36c989f673e6de185f6e77a14176fa7f095eddd2ba2a58c4747a095e6731d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92fe27618764be4654c0404c4d24d273cf61f1b06ff1aeabf2ef09a2858a6ce9->leave($__internal_92fe27618764be4654c0404c4d24d273cf61f1b06ff1aeabf2ef09a2858a6ce9_prof);

        
        $__internal_2dc36c989f673e6de185f6e77a14176fa7f095eddd2ba2a58c4747a095e6731d->leave($__internal_2dc36c989f673e6de185f6e77a14176fa7f095eddd2ba2a58c4747a095e6731d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d389dff903811bb15a4c1e69390e8fead9fde7e755b468d3f65791af90da75fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d389dff903811bb15a4c1e69390e8fead9fde7e755b468d3f65791af90da75fb->enter($__internal_d389dff903811bb15a4c1e69390e8fead9fde7e755b468d3f65791af90da75fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_262b28b68a94458481ab0a96fc7992606141cf645913374a6baab0ff3f26d919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262b28b68a94458481ab0a96fc7992606141cf645913374a6baab0ff3f26d919->enter($__internal_262b28b68a94458481ab0a96fc7992606141cf645913374a6baab0ff3f26d919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Posted_at</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "postedat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "postedat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_262b28b68a94458481ab0a96fc7992606141cf645913374a6baab0ff3f26d919->leave($__internal_262b28b68a94458481ab0a96fc7992606141cf645913374a6baab0ff3f26d919_prof);

        
        $__internal_d389dff903811bb15a4c1e69390e8fead9fde7e755b468d3f65791af90da75fb->leave($__internal_d389dff903811bb15a4c1e69390e8fead9fde7e755b468d3f65791af90da75fb_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ post.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ post.title }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ post.content }}</td>
            </tr>
            <tr>
                <th>Posted_at</th>
                <td>{% if post.postedat %}{{ post.postedat|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "post/show.html.twig", "/Users/serkanoruc/Desktop/symfony-blog/app/Resources/views/post/show.html.twig");
    }
}
