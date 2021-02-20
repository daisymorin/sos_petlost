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

/* front/default/home.html.twig */
class __TwigTemplate_1586e4e375026c15963b9ed2492bd5603d60568adcac967f45d6f6a549b6a5a4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/default/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/default/home.html.twig"));

        $this->parent = $this->loadTemplate("front/layout.html.twig", "front/default/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SOS PETLOST";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "


<h2>Les dernières publications</h2>

    <p class=\"btn-new\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Publier une annonce</a></p>

<div class=\"container\">

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 16
            echo "
    <div class=\"animals\">

        ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["animal"], "missing", [], "any", false, false, false, 19)) {
                // line 20
                echo "            <p class=\"info\">";
                echo ((twig_get_attribute($this->env, $this->source, $context["animal"], "missing", [], "any", false, false, false, 20)) ? ("Disparus") : (""));
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</p>
        ";
            } else {
                // line 22
                echo "             <p class=\"info\">";
                echo ((twig_get_attribute($this->env, $this->source, $context["animal"], "found", [], "any", false, false, false, 22)) ? ("Trouvé") : (""));
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 22), "html", null, true);
                echo "</p>
        ";
            }
            // line 24
            echo "
        <p class=\"info-img\" ><img class=\"imgAnimal\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 25), "file"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "\" /></p>        
        <p class=\"info\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "city", [], "any", false, false, false, 26), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "postcode", [], "any", false, false, false, 26), "html", null, true);
            echo ")</p>


        <div class=\"date-annonce\">
            
            <p class=\"date\">";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["animal"], "date", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "date", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true))) : (print ("")));
            echo "</p>
       

            <p class=\"date\">
                ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["animal"], "missing", [], "any", false, false, false, 35)) {
                // line 36
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showPerdu", ["id" => twig_get_attribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">Voir</a>
                ";
            } else {
                // line 37
                echo " 
                     <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showTrouve", ["id" => twig_get_attribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\">Voir</a>
                ";
            }
            // line 40
            echo "            </p>
         </div>

    </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 46,  171 => 40,  166 => 38,  163 => 37,  157 => 36,  155 => 35,  148 => 31,  138 => 26,  132 => 25,  129 => 24,  121 => 22,  113 => 20,  111 => 19,  106 => 16,  102 => 15,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/layout.html.twig' %}

{% block title %}SOS PETLOST{% endblock %}

{% block content %}



<h2>Les dernières publications</h2>

    <p class=\"btn-new\"><a href=\"{{ path('app_login') }}\">Publier une annonce</a></p>

<div class=\"container\">

    {% for animal in animals %}

    <div class=\"animals\">

        {% if animal.missing %}
            <p class=\"info\">{{ animal.missing ? 'Disparus' : '' }} : {{ animal.name }}</p>
        {% else %}
             <p class=\"info\">{{ animal.found ? 'Trouvé' : '' }} : {{ animal.name }}</p>
        {% endif %}

        <p class=\"info-img\" ><img class=\"imgAnimal\" src=\"{{ vich_uploader_asset(animal.image, 'file') }}\" alt=\"{{ animal.name }}\" /></p>        
        <p class=\"info\">{{ animal.city }} ({{ animal.postcode }})</p>


        <div class=\"date-annonce\">
            
            <p class=\"date\">{{ animal.date ? animal.date|date('d/m/Y') : '' }}</p>
       

            <p class=\"date\">
                {% if animal.missing %}
                    <a href=\"{{ path('showPerdu', {'id': animal.id}) }}\">Voir</a>
                {% else %} 
                     <a href=\"{{ path('showTrouve', {'id': animal.id}) }}\">Voir</a>
                {% endif %}
            </p>
         </div>

    </div>

    {% endfor %}

</div>
{% endblock %}
", "front/default/home.html.twig", "/opt/lampp/htdocs/sos_petlostcopie/templates/front/default/home.html.twig");
    }
}
