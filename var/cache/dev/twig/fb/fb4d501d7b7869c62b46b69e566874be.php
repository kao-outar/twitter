<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* tweet/one.html.twig */
class __TwigTemplate_af1b03cd1222c13bc2ef831233457561 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tweet/one.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tweet/one.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tweet/one.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tweet.css"), "html", null, true);
        echo "\">
    <style>
        
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        if (array_key_exists("tweet", $context)) {
            // line 14
            echo "        <h1>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
            echo "</h1>
        <p>
            ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 16, $this->source); })()), "message", [], "any", false, false, false, 16), "html", null, true);
            echo "
        </p>
        <p>Likes: ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 18, $this->source); })()), "likes", [], "any", false, false, false, 18), "count", [], "method", false, false, false, 18), "html", null, true);
            echo "</p>

        ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20) &&  !twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 20, $this->source); })()), "isLikedBy", [twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)], "method", false, false, false, 20))) {
                // line 21
                echo "            <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like_tweet", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\">
                <button type=\"submit\">Like</button>
            </form>
        ";
            }
            // line 25
            echo "
        ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 26, $this->source); })()), "isLikedBy", [twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)], "method", false, false, false, 26)) {
                // line 27
                echo "            <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unlike_tweet", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\">
                <button type=\"submit\">Unlike</button>
            </form>
        ";
            }
            // line 31
            echo "
        Publié par ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tweet"]) || array_key_exists("tweet", $context) ? $context["tweet"] : (function () { throw new RuntimeError('Variable "tweet" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "username", [], "any", false, false, false, 32), "html", null, true);
            echo "
    ";
        } else {
            // line 34
            echo "        <p>Le tweet n'existe pas.</p>
    ";
        }
        // line 36
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Retourner à l'accueil</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "tweet/one.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  173 => 36,  169 => 34,  164 => 32,  161 => 31,  153 => 27,  151 => 26,  148 => 25,  140 => 21,  138 => 20,  133 => 18,  128 => 16,  122 => 14,  119 => 13,  109 => 12,  94 => 6,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ tweet.title }}{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/tweet.css') }}\">
    <style>
        
    </style>
{% endblock %}

{% block body %}
    {% if tweet is defined %}
        <h1>{{ tweet.title }}</h1>
        <p>
            {{ tweet.message }}
        </p>
        <p>Likes: {{ tweet.likes.count() }}</p>

        {% if app.user and not tweet.isLikedBy(app.user) %}
            <form method=\"post\" action=\"{{ path('like_tweet', {'id': tweet.id}) }}\">
                <button type=\"submit\">Like</button>
            </form>
        {% endif %}

        {% if tweet.isLikedBy(app.user) %}
            <form method=\"post\" action=\"{{ path('unlike_tweet', {'id': tweet.id}) }}\">
                <button type=\"submit\">Unlike</button>
            </form>
        {% endif %}

        Publié par {{ tweet.user.username }}
    {% else %}
        <p>Le tweet n'existe pas.</p>
    {% endif %}
    <a href=\"{{ path('app_home') }}\">Retourner à l'accueil</a>
{% endblock %}

", "tweet/one.html.twig", "C:\\xampp\\htdocs\\tweet\\Twitter-symfony\\templates\\tweet\\one.html.twig");
    }
}
