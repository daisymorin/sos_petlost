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
<h1>Les dernières publications</h1>

<div class=\"container\">

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 12
            echo "
    <div class=\"animals\">

        <p>";
            // line 15
            echo ((twig_get_attribute($this->env, $this->source, $context["animal"], "missing", [], "any", false, false, false, 15)) ? ("Diparus") : (""));
            echo "</p>
        <p>";
            // line 16
            echo ((twig_get_attribute($this->env, $this->source, $context["animal"], "found", [], "any", false, false, false, 16)) ? ("Trouvé") : (""));
            echo "</p>
        <p ><img class=\"imgAnimal\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 17), "file"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "\" /></p>        
        <p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
        <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "city", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
        <p>";
            // line 20
            ((twig_get_attribute($this->env, $this->source, $context["animal"], "date", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "date", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true))) : (print ("")));
            echo "</p>
        <p>";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["animal"], "missing", [], "any", false, false, false, 21)) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showPerdu", ["id" => twig_get_attribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\">Voir</a>
            ";
            } else {
                // line 22
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showTrouve", ["id" => twig_get_attribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">Voir</a></p>
            ";
            }
            // line 24
            echo "
    </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
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
        return array (  152 => 28,  143 => 24,  137 => 22,  130 => 21,  126 => 20,  122 => 19,  118 => 18,  112 => 17,  108 => 16,  104 => 15,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/layout.html.twig' %}

{% block title %}SOS PETLOST{% endblock %}

{% block content %}

<h1>Les dernières publications</h1>

<div class=\"container\">

    {% for animal in animals %}

    <div class=\"animals\">

        <p>{{ animal.missing ? 'Diparus' : '' }}</p>
        <p>{{ animal.found ? 'Trouvé' : '' }}</p>
        <p ><img class=\"imgAnimal\" src=\"{{ vich_uploader_asset(animal.image, 'file') }}\" alt=\"{{ animal.name }}\" /></p>        
        <p>{{ animal.name }}</p>
        <p>{{ animal.city }}</p>
        <p>{{ animal.date ? animal.date|date('d/m/Y') : '' }}</p>
        <p>{% if animal.missing %}<a href=\"{{ path('showPerdu', {'id': animal.id}) }}\">Voir</a>
            {% else %} <a href=\"{{ path('showTrouve', {'id': animal.id}) }}\">Voir</a></p>
            {% endif %}

    </div>

    {% endfor %}

</div>
{% endblock %}
", "front/default/home.html.twig", "/opt/lampp/htdocs/sos_petlost/templates/front/default/home.html.twig");
    }
}
