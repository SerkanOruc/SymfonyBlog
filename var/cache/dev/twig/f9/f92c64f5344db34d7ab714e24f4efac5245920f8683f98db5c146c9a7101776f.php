<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a7602468de7dc148f48aae96a1f080b7a5106689f4aafc1d7079e0931a8cf423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c733bb8dcf582dedf187a28e34c736503050b3d1d6315fd583009084b4a71a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c733bb8dcf582dedf187a28e34c736503050b3d1d6315fd583009084b4a71a0e->enter($__internal_c733bb8dcf582dedf187a28e34c736503050b3d1d6315fd583009084b4a71a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_43bc0abaec56b2b630b468bce8930ed32d0c4b5ed8fc2ab39edff7212854654e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43bc0abaec56b2b630b468bce8930ed32d0c4b5ed8fc2ab39edff7212854654e->enter($__internal_43bc0abaec56b2b630b468bce8930ed32d0c4b5ed8fc2ab39edff7212854654e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_c733bb8dcf582dedf187a28e34c736503050b3d1d6315fd583009084b4a71a0e->leave($__internal_c733bb8dcf582dedf187a28e34c736503050b3d1d6315fd583009084b4a71a0e_prof);

        
        $__internal_43bc0abaec56b2b630b468bce8930ed32d0c4b5ed8fc2ab39edff7212854654e->leave($__internal_43bc0abaec56b2b630b468bce8930ed32d0c4b5ed8fc2ab39edff7212854654e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/serkanoruc/Desktop/symfony-blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
