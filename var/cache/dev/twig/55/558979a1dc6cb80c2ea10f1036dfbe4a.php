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

/* home/index.html.twig */
class __TwigTemplate_191f07e5598c69cd315c8e77b09ff05e extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "HOME";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/home.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"home-container\">
        <!-- Left Sidebar -->
        <div class=\"left-sidebar\">
            <ul>
                <li class=\"active\"><h2><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" >Accueil</a></h2></li>
                <li><h2><a href=\"#\">Explorer</a></h2></li>
                <li><h2>Notifications</h2></li>
                <li><h2>Messages</h2></li>
                <li><h2>Profil</h2></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class=\"main-content\">
            <!-- Tweet Input -->
            <div class=\"tweet-input\">
                <input type=\"text\" placeholder=\"Quoi de neuf ?\">
            </div>

            <!-- Tweets -->
            <div class=\"tweets\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["last_tweets"]) || array_key_exists("last_tweets", $context) ? $context["last_tweets"] : (function () { throw new RuntimeError('Variable "last_tweets" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tweet"]) {
            // line 33
            echo "                    <div class=\"tweet\">
                        <li><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tweet", ["id" => twig_get_attribute($this->env, $this->source, $context["tweet"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tweet"], "title", [], "any", false, false, false, 34), "html", null, true);
            echo "</a> <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tweet"], "user", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34), "html", null, true);
            echo ")</small></li>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </div>
        </div>

        <!-- Right Sidebar -->
        <div class=\"right-sidebar\">
            <!-- Search Bar -->
            <div class=\"search-bar\">
                <input type=\"text\" placeholder=\"Recherche\">
            </div>

            <!-- Trending Topics -->
            <div class=\"trending-topics\">
                <h2>Tendances</h2>
                <!-- Liste des tendances -->
            </div>
        </div>
    </div>

    ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "        <script>
            const sidebarLinks = document.querySelectorAll('.left-sidebar li');

            sidebarLinks.forEach(link => {
                link.addEventListener('click', () => {
                    // Supprimez la classe 'active' de tous les liens
                    sidebarLinks.forEach(l => l.classList.remove('active'));

                    // Ajoutez la classe 'active' au lien sur lequel vous avez cliqué
                    link.classList.add('active');
                    console.log('Link clicked:', link.innerText); // Ajoutez cette ligne

                });
            });
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  206 => 56,  196 => 55,  185 => 72,  183 => 55,  163 => 37,  150 => 34,  147 => 33,  143 => 32,  123 => 15,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}HOME{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/home.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"home-container\">
        <!-- Left Sidebar -->
        <div class=\"left-sidebar\">
            <ul>
                <li class=\"active\"><h2><a href=\"{{ path('app_home') }}\" >Accueil</a></h2></li>
                <li><h2><a href=\"#\">Explorer</a></h2></li>
                <li><h2>Notifications</h2></li>
                <li><h2>Messages</h2></li>
                <li><h2>Profil</h2></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class=\"main-content\">
            <!-- Tweet Input -->
            <div class=\"tweet-input\">
                <input type=\"text\" placeholder=\"Quoi de neuf ?\">
            </div>

            <!-- Tweets -->
            <div class=\"tweets\">
                {% for tweet in last_tweets %}
                    <div class=\"tweet\">
                        <li><a href=\"{{ path('app_tweet', {id: tweet.id}) }}\">{{ tweet.title }}</a> <small>({{ tweet.user.username }})</small></li>
                    </div>
                {% endfor %}
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class=\"right-sidebar\">
            <!-- Search Bar -->
            <div class=\"search-bar\">
                <input type=\"text\" placeholder=\"Recherche\">
            </div>

            <!-- Trending Topics -->
            <div class=\"trending-topics\">
                <h2>Tendances</h2>
                <!-- Liste des tendances -->
            </div>
        </div>
    </div>

    {%block javascripts %}
        <script>
            const sidebarLinks = document.querySelectorAll('.left-sidebar li');

            sidebarLinks.forEach(link => {
                link.addEventListener('click', () => {
                    // Supprimez la classe 'active' de tous les liens
                    sidebarLinks.forEach(l => l.classList.remove('active'));

                    // Ajoutez la classe 'active' au lien sur lequel vous avez cliqué
                    link.classList.add('active');
                    console.log('Link clicked:', link.innerText); // Ajoutez cette ligne

                });
            });
        </script>
    {% endblock %}

{% endblock %}
", "home/index.html.twig", "/home/nicolas/Bureau/dev/symfony/my-twitter/templates/home/index.html.twig");
    }
}
