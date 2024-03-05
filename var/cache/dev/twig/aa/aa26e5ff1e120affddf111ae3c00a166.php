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
class __TwigTemplate_6712ee608020c3841d43ac2ae0385f43 extends Template
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
    <style>
        .center-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .login-buttons a {
            margin: 0 10px;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-buttons a:hover {
            background-color: #0056b3;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 40
            echo "        <div class=\"home-container\">
            <!-- Left Sidebar -->
            <div class=\"left-sidebar\">
                <ul>
                    <li class=\"active\"><h2><a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\">Accueil</a></h2></li>
                    <li><h2><a href=\"#\">Explorer</a></h2></li>
                    <li><h2>Notifications</h2></li>
                    <li><h2>Messages</h2></li>
                    <li><h2><a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_profile");
            echo "\">Profil</a></h2></li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class=\"main-content\">
                <!-- Tweet Input -->
                <div class=\"tweet-input\">
                    <form id=\"tweetForm\" action=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_tweet");
            echo "\" method=\"post\">
                        <div>
                            <h2 class=\"tweetTitle\">Titre :</h2>
                            <input type=\"text\" name=\"tweet_title\" id=\"tweetTitle\" placeholder=\"Entrez le titre\" required
                                   maxlength=\"60\">
                        </div>

                        <div>
                            <h4 class=\"tweetContent\">Message :</h4>
                            <input name=\"tweet_content\" id=\"tweetContent\" placeholder=\"Ecrivez le message..\" required
                                   maxlength=\"512\"></input>
                        </div>

                        <button type=\"submit\" class=\"twitter-button\">Tweeter</button>
                    </form>
                </div>
                <div class=\"tweets\">
                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["last_tweets"]) || array_key_exists("last_tweets", $context) ? $context["last_tweets"] : (function () { throw new RuntimeError('Variable "last_tweets" does not exist.', 73, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tweet"]) {
                // line 74
                echo "                        <div class=\"tweet\">
                            <li>
                                <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tweet", ["id" => twig_get_attribute($this->env, $this->source, $context["tweet"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tweet"], "title", [], "any", false, false, false, 76), "html", null, true);
                echo "</a>
                                <p>Likes: ";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tweet"], "likes", [], "any", false, false, false, 77), "count", [], "method", false, false, false, 77), "html", null, true);
                echo "</p>
                                <p>Vues: ";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tweet"], "views", [], "any", false, false, false, 78), "count", [], "method", false, false, false, 78), "html", null, true);
                echo "</p> ";
                // line 79
                echo "                                <small>(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tweet"], "user", [], "any", false, false, false, 79), "username", [], "any", false, false, false, 79), "html", null, true);
                echo ")</small>
                            </li>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                </div>
            </div>

            <!-- Right Sidebar -->
            <div class=\"right-sidebar\">
                <!-- Search Bar -->
                <form action=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_search");
            echo "\" method=\"get\">
                    <input type=\"text\" name=\"q\" placeholder=\"Rechercher des utilisateurs\">
                    <button type=\"submit\" class=\"twitter-button\">Rechercher</button>
                </form>

                <!-- Trending Topics -->
                <div class=\"trending-topics\">
                    <h2>Tendances</h2>
                    <!-- Liste des tendances -->
                </div>
            </div>
        </div>
    ";
        } else {
            // line 102
            echo "        <div class=\"center-container\">
            <div>
                <p>Veuillez vous connecter pour accéder à cette page.</p>
                <div class=\"login-buttons\">
                    <a href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                    <a href=\"";
            // line 107
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
                </div>
            </div>
        </div>
    ";
        }
        // line 112
        echo "
    ";
        // line 113
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script>
            // Votre script JavaScript ici
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
        return array (  288 => 114,  269 => 113,  266 => 112,  258 => 107,  254 => 106,  248 => 102,  232 => 89,  224 => 83,  213 => 79,  210 => 78,  206 => 77,  200 => 76,  196 => 74,  192 => 73,  172 => 56,  161 => 48,  154 => 44,  148 => 40,  145 => 39,  135 => 38,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}HOME{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/home.css') }}\">
    <style>
        .center-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .login-buttons a {
            margin: 0 10px;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-buttons a:hover {
            background-color: #0056b3;
        }
    </style>
{% endblock %}

{% block body %}
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <div class=\"home-container\">
            <!-- Left Sidebar -->
            <div class=\"left-sidebar\">
                <ul>
                    <li class=\"active\"><h2><a href=\"{{ path('app_home') }}\">Accueil</a></h2></li>
                    <li><h2><a href=\"#\">Explorer</a></h2></li>
                    <li><h2>Notifications</h2></li>
                    <li><h2>Messages</h2></li>
                    <li><h2><a href=\"{{ path('main_profile') }}\">Profil</a></h2></li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class=\"main-content\">
                <!-- Tweet Input -->
                <div class=\"tweet-input\">
                    <form id=\"tweetForm\" action=\"{{ path('create_tweet') }}\" method=\"post\">
                        <div>
                            <h2 class=\"tweetTitle\">Titre :</h2>
                            <input type=\"text\" name=\"tweet_title\" id=\"tweetTitle\" placeholder=\"Entrez le titre\" required
                                   maxlength=\"60\">
                        </div>

                        <div>
                            <h4 class=\"tweetContent\">Message :</h4>
                            <input name=\"tweet_content\" id=\"tweetContent\" placeholder=\"Ecrivez le message..\" required
                                   maxlength=\"512\"></input>
                        </div>

                        <button type=\"submit\" class=\"twitter-button\">Tweeter</button>
                    </form>
                </div>
                <div class=\"tweets\">
                    {% for tweet in last_tweets %}
                        <div class=\"tweet\">
                            <li>
                                <a href=\"{{ path('app_tweet', {id: tweet.id}) }}\">{{ tweet.title }}</a>
                                <p>Likes: {{ tweet.likes.count() }}</p>
                                <p>Vues: {{ tweet.views.count() }}</p> {# Ajoutez cette ligne pour afficher le nombre de vues #}
                                <small>({{ tweet.user.username }})</small>
                            </li>
                        </div>
                    {% endfor %}
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class=\"right-sidebar\">
                <!-- Search Bar -->
                <form action=\"{{ path('user_search') }}\" method=\"get\">
                    <input type=\"text\" name=\"q\" placeholder=\"Rechercher des utilisateurs\">
                    <button type=\"submit\" class=\"twitter-button\">Rechercher</button>
                </form>

                <!-- Trending Topics -->
                <div class=\"trending-topics\">
                    <h2>Tendances</h2>
                    <!-- Liste des tendances -->
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"center-container\">
            <div>
                <p>Veuillez vous connecter pour accéder à cette page.</p>
                <div class=\"login-buttons\">
                    <a href=\"{{ path('app_login') }}\">Connexion</a>
                    <a href=\"{{ path('app_register') }}\">Inscription</a>
                </div>
            </div>
        </div>
    {% endif %}

    {% block javascripts %}
        {{ parent() }}
        <script>
            // Votre script JavaScript ici
        </script>
    {% endblock %}
{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\tweet\\Twitter-symfony\\templates\\home\\index.html.twig");
    }
}
