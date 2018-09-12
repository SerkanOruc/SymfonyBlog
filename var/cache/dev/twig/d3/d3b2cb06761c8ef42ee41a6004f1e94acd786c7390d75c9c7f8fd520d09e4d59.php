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
            'Stylesheets' => array($this, 'block_Stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96a6011b5fe38abe7d078553b7d38b3857568e231eebde51f046df86a86a6a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a6011b5fe38abe7d078553b7d38b3857568e231eebde51f046df86a86a6a50->enter($__internal_96a6011b5fe38abe7d078553b7d38b3857568e231eebde51f046df86a86a6a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_9edd0a8cfe8397cc9f8943743d39de66716298ee4a55b585f55d52466f691f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9edd0a8cfe8397cc9f8943743d39de66716298ee4a55b585f55d52466f691f1a->enter($__internal_9edd0a8cfe8397cc9f8943743d39de66716298ee4a55b585f55d52466f691f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a6011b5fe38abe7d078553b7d38b3857568e231eebde51f046df86a86a6a50->leave($__internal_96a6011b5fe38abe7d078553b7d38b3857568e231eebde51f046df86a86a6a50_prof);

        
        $__internal_9edd0a8cfe8397cc9f8943743d39de66716298ee4a55b585f55d52466f691f1a->leave($__internal_9edd0a8cfe8397cc9f8943743d39de66716298ee4a55b585f55d52466f691f1a_prof);

    }

    // line 3
    public function block_Stylesheets($context, array $blocks = array())
    {
        $__internal_60ef095ca1b6f6591c80da5f42cd14c7a4eaa73dad2354296a01ab0b2afff54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ef095ca1b6f6591c80da5f42cd14c7a4eaa73dad2354296a01ab0b2afff54e->enter($__internal_60ef095ca1b6f6591c80da5f42cd14c7a4eaa73dad2354296a01ab0b2afff54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Stylesheets"));

        $__internal_76db19a987c18b458c718de3437223c0d01c2816aed27b2c2a89f4cb61189ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76db19a987c18b458c718de3437223c0d01c2816aed27b2c2a89f4cb61189ad9->enter($__internal_76db19a987c18b458c718de3437223c0d01c2816aed27b2c2a89f4cb61189ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_76db19a987c18b458c718de3437223c0d01c2816aed27b2c2a89f4cb61189ad9->leave($__internal_76db19a987c18b458c718de3437223c0d01c2816aed27b2c2a89f4cb61189ad9_prof);

        
        $__internal_60ef095ca1b6f6591c80da5f42cd14c7a4eaa73dad2354296a01ab0b2afff54e->leave($__internal_60ef095ca1b6f6591c80da5f42cd14c7a4eaa73dad2354296a01ab0b2afff54e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_70182e1985306f53493ee7b249c6498c22bf4630f0ae4cd161ef51a1ec8b3605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70182e1985306f53493ee7b249c6498c22bf4630f0ae4cd161ef51a1ec8b3605->enter($__internal_70182e1985306f53493ee7b249c6498c22bf4630f0ae4cd161ef51a1ec8b3605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4dc75df0bdc02494071aecb6601ecf9023e88a09e91d07eb15157e56cc3d792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4dc75df0bdc02494071aecb6601ecf9023e88a09e91d07eb15157e56cc3d792->enter($__internal_a4dc75df0bdc02494071aecb6601ecf9023e88a09e91d07eb15157e56cc3d792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Posts list</h1>
    <hr>

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            echo "            <div class=\"index-post\">
                <h3>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h3>
                <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</p>
                <ul>
                    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 17
                echo "                        <li>
                            <p> ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo " </p>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                </ul>
                <div class=\"index-post-menu\">
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    &boxv;
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    &boxv;
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_new", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">comment</a>
                    &boxv;
                    <td>";
            // line 29
            if ($this->getAttribute($context["post"], "postedat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "postedat", array()), "D H:i"), "html", null, true);
            }
            echo "</td>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\">Create a new post</a>
        </li>
    </ul>
";
        
        $__internal_a4dc75df0bdc02494071aecb6601ecf9023e88a09e91d07eb15157e56cc3d792->leave($__internal_a4dc75df0bdc02494071aecb6601ecf9023e88a09e91d07eb15157e56cc3d792_prof);

        
        $__internal_70182e1985306f53493ee7b249c6498c22bf4630f0ae4cd161ef51a1ec8b3605->leave($__internal_70182e1985306f53493ee7b249c6498c22bf4630f0ae4cd161ef51a1ec8b3605_prof);

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
        return array (  145 => 36,  140 => 33,  128 => 29,  123 => 27,  118 => 25,  113 => 23,  109 => 21,  100 => 18,  97 => 17,  93 => 16,  88 => 14,  84 => 13,  81 => 12,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

{% block Stylesheets %}
    <link href=\"{{ asset('css/index.css') }}\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <h1>Posts list</h1>
    <hr>

        {% for post in posts %}
            <div class=\"index-post\">
                <h3>{{ post.title }}</h3>
                <p>{{ post.content }}</p>
                <ul>
                    {% for comment in post.comments %}
                        <li>
                            <p> {{ comment.content }} </p>
                        </li>
                    {% endfor %}
                </ul>
                <div class=\"index-post-menu\">
                    <a href=\"{{ path('post_show', { 'id': post.id }) }}\">show</a>
                    &boxv;
                    <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">edit</a>
                    &boxv;
                    <a href=\"{{ path('comment_new', { 'id': post.id }) }}\">comment</a>
                    &boxv;
                    <td>{% if post.postedat %}{{ post.postedat|date('D H:i') }}{% endif %}</td>
                </div>
            </div>
        {% endfor %}

    <ul>
        <li>
            <a href=\"{{ path('post_new') }}\">Create a new post</a>
        </li>
    </ul>
{% endblock %}
", "post/index.html.twig", "/Users/serkanoruc/Desktop/symfony-blog/app/Resources/views/post/index.html.twig");
    }
}
