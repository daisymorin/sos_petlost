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

/* front/navbar.html.twig */
class __TwigTemplate_061c08b80f1e1a8a6673a75eb800a69b2f1658ed1b2d0c2be99e19f6210792b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/navbar.html.twig"));

        // line 1
        echo " <header>

    <div class=\"titre_principale\">
        <p>
            <img class=\"logo\" src=\"../../../images/logo.png\" alt=\"Logo de Sospetlost\" />
        </p>

        <h1>SOS PETLOST</h1>

    </div>

     <nav>

        <ul>
            <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a></li>
            <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animaux-disparus");
        echo "\">Animaux Perdu</a></li>
             <li><a href=";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animaux-trouve");
        echo ">Animaux Retrouvé</a></li>
            <li><a href=\"/\">Actualités</a></li>

             ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 21
            echo "                 <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces");
            echo "\">Mes annonces</a></li>
             ";
        }
        // line 23
        echo "
            ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 25
            echo "                 <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animals_index");
            echo "\">Admin</a></li>
            ";
        }
        // line 27
        echo "
             ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 29
            echo "                <li><a href=\"/logout\">Déconnexion</a></li>
            ";
        } else {
            // line 31
            echo "                <li><a href=\"/login\">Connexion</a></li>
                 <li><a href=\"/register\">Inscription</a></li>
             ";
        }
        // line 34
        echo "  
        </ul>
    </nav>

</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  101 => 31,  97 => 29,  95 => 28,  92 => 27,  86 => 25,  84 => 24,  81 => 23,  75 => 21,  73 => 20,  67 => 17,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <header>

    <div class=\"titre_principale\">
        <p>
            <img class=\"logo\" src=\"../../../images/logo.png\" alt=\"Logo de Sospetlost\" />
        </p>

        <h1>SOS PETLOST</h1>

    </div>

     <nav>

        <ul>
            <li><a href=\"{{path('home')}}\">Accueil</a></li>
            <li><a href=\"{{path('animaux-disparus')}}\">Animaux Perdu</a></li>
             <li><a href={{path('animaux-trouve')}}>Animaux Retrouvé</a></li>
            <li><a href=\"/\">Actualités</a></li>

             {% if is_granted('ROLE_USER') %}
                 <li><a href=\"{{path('annonces')}}\">Mes annonces</a></li>
             {% endif %}

            {% if is_granted('ROLE_ADMIN') %}
                 <li><a href=\"{{path('animals_index')}}\">Admin</a></li>
            {% endif %}

             {% if is_granted('ROLE_USER') %}
                <li><a href=\"/logout\">Déconnexion</a></li>
            {% else %}
                <li><a href=\"/login\">Connexion</a></li>
                 <li><a href=\"/register\">Inscription</a></li>
             {% endif %}
  
        </ul>
    </nav>

</header>
", "front/navbar.html.twig", "/opt/lampp/htdocs/sos_petlostcopie/templates/front/navbar.html.twig");
    }
}
