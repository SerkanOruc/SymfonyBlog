<?php

/* post/index.html.twig */
class __TwigTemplate_af61275d0a659de6c6387234746af6d279f2b5d279267f742b2a7e56a61196ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
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
        $__internal_4ffe3ddc6d82cbf0e0eb33e3d13e4d39b14d29ec5dd65c6821c44b0e0b9c4d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffe3ddc6d82cbf0e0eb33e3d13e4d39b14d29ec5dd65c6821c44b0e0b9c4d56->enter($__internal_4ffe3ddc6d82cbf0e0eb33e3d13e4d39b14d29ec5dd65c6821c44b0e0b9c4d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_1df48f2b50310f029b6a0f925ce05ef6de863a572e2df0d69b57fd80cee304e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df48f2b50310f029b6a0f925ce05ef6de863a572e2df0d69b57fd80cee304e8->enter($__internal_1df48f2b50310f029b6a0f925ce05ef6de863a572e2df0d69b57fd80cee304e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ffe3ddc6d82cbf0e0eb33e3d13e4d39b14d29ec5dd65c6821c44b0e0b9c4d56->leave($__internal_4ffe3ddc6d82cbf0e0eb33e3d13e4d39b14d29ec5dd65c6821c44b0e0b9c4d56_prof);

        
        $__internal_1df48f2b50310f029b6a0f925ce05ef6de863a572e2df0d69b57fd80cee304e8->leave($__internal_1df48f2b50310f029b6a0f925ce05ef6de863a572e2df0d69b57fd80cee304e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_519f3f2b2e30f8172f52d37f664faabba60b6e02696785c977b3e774f6a88594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519f3f2b2e30f8172f52d37f664faabba60b6e02696785c977b3e774f6a88594->enter($__internal_519f3f2b2e30f8172f52d37f664faabba60b6e02696785c977b3e774f6a88594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f528bed4e4987de4333b7f5c750d2f35a692226db1e424d4ec0fb50fe2d76f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f528bed4e4987de4333b7f5c750d2f35a692226db1e424d4ec0fb50fe2d76f98->enter($__internal_f528bed4e4987de4333b7f5c750d2f35a692226db1e424d4ec0fb50fe2d76f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Posted_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["post"], "postedat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "postedat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\">Create a new post</a>
        </li>
    </ul>
";
        
        $__internal_f528bed4e4987de4333b7f5c750d2f35a692226db1e424d4ec0fb50fe2d76f98->leave($__internal_f528bed4e4987de4333b7f5c750d2f35a692226db1e424d4ec0fb50fe2d76f98_prof);

        
        $__internal_519f3f2b2e30f8172f52d37f664faabba60b6e02696785c977b3e774f6a88594->leave($__internal_519f3f2b2e30f8172f52d37f664faabba60b6e02696785c977b3e774f6a88594_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 35,  100 => 29,  94 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Posted_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                <td>{{ post.title }}</td>
                <td>{{ post.content }}</td>
                <td>{% if post.postedat %}{{ post.postedat|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('post_show', { 'id': post.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_new') }}\">Create a new post</a>
        </li>
    </ul>
{% endblock %}
", "post/index.html.twig", "/Users/serkanoruc/Desktop/symfony-blog/app/Resources/views/post/index.html.twig");
    }
}
