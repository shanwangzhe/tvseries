<?php

/* userEpisode/index.html.twig */
class __TwigTemplate_968154c872488da3d7e9621c85104a45c98d26ab05851514a9254e0479034b86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "userEpisode/index.html.twig", 1);
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
        $__internal_c4d1478f166ca952c4459d67f2ed7651b7fd01c22db679b20c562f7d0ecd38f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d1478f166ca952c4459d67f2ed7651b7fd01c22db679b20c562f7d0ecd38f1->enter($__internal_c4d1478f166ca952c4459d67f2ed7651b7fd01c22db679b20c562f7d0ecd38f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userEpisode/index.html.twig"));

        $__internal_681bef7b45cd59ce00cbdb45076bafa0a1936be250e11fcf6334f4c0ad4a3551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681bef7b45cd59ce00cbdb45076bafa0a1936be250e11fcf6334f4c0ad4a3551->enter($__internal_681bef7b45cd59ce00cbdb45076bafa0a1936be250e11fcf6334f4c0ad4a3551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userEpisode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d1478f166ca952c4459d67f2ed7651b7fd01c22db679b20c562f7d0ecd38f1->leave($__internal_c4d1478f166ca952c4459d67f2ed7651b7fd01c22db679b20c562f7d0ecd38f1_prof);

        
        $__internal_681bef7b45cd59ce00cbdb45076bafa0a1936be250e11fcf6334f4c0ad4a3551->leave($__internal_681bef7b45cd59ce00cbdb45076bafa0a1936be250e11fcf6334f4c0ad4a3551_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b346f22cfe88d2a5482006bb4042bd4cfd2cede7ad188d2f424cabd28dffb9d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b346f22cfe88d2a5482006bb4042bd4cfd2cede7ad188d2f424cabd28dffb9d0->enter($__internal_b346f22cfe88d2a5482006bb4042bd4cfd2cede7ad188d2f424cabd28dffb9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_191cdfe713e828cb9dc72b19f220173f39b9066da0767fd8517ad4f494547050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191cdfe713e828cb9dc72b19f220173f39b9066da0767fd8517ad4f494547050->enter($__internal_191cdfe713e828cb9dc72b19f220173f39b9066da0767fd8517ad4f494547050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>History</h1>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>EpisodeNumber</th>
            <th>Description</th>
            <th>Image</th>
            <th>watchedAt</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["userEpisodes"] ?? $this->getContext($context, "userEpisodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "episodeNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "image", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "watched", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_userEpisodeNew", array("id" => $this->getAttribute($context["e"], "episode_id", array()))), "html", null, true);
            echo "\">watch</a>
                        </li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_userEpisodeDelete", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">delete</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
";
        
        $__internal_191cdfe713e828cb9dc72b19f220173f39b9066da0767fd8517ad4f494547050->leave($__internal_191cdfe713e828cb9dc72b19f220173f39b9066da0767fd8517ad4f494547050_prof);

        
        $__internal_b346f22cfe88d2a5482006bb4042bd4cfd2cede7ad188d2f424cabd28dffb9d0->leave($__internal_b346f22cfe88d2a5482006bb4042bd4cfd2cede7ad188d2f424cabd28dffb9d0_prof);

    }

    public function getTemplateName()
    {
        return "userEpisode/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  104 => 34,  94 => 27,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>History</h1>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>EpisodeNumber</th>
            <th>Description</th>
            <th>Image</th>
            <th>watchedAt</th>
        </tr>
        </thead>
        <tbody>
        {% for e in userEpisodes %}
            <tr>
                <td>{{ e.name }}</td>
                <td>{{ e.episodeNumber }}</td>
                <td>{{ e.description }}</td>
                <td>{{ e.image }}</td>
                <td>{{ e.watched }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('_userEpisodeNew', { 'id': e.episode_id }) }}\">watch</a>
                        </li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('_userEpisodeDelete', { 'id': e.id }) }}\">delete</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "userEpisode/index.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/userEpisode/index.html.twig");
    }
}
