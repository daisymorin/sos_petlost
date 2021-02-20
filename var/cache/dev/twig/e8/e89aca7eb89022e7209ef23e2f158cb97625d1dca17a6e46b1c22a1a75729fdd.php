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

/* front/default/show-trouve.html.twig */
class __TwigTemplate_3f3b342f0c1d74844c37d4a6ec6c5628a32c076b7f409f53d20b430a875794cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/default/show-trouve.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/default/show-trouve.html.twig"));

        $this->parent = $this->loadTemplate("front/layout.html.twig", "front/default/show-trouve.html.twig", 1);
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
    <p class=\"btn-retour\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animaux-disparus");
        echo "\">Retour aux annonces</a></p>

    <div class=\"container2\">

        <div class=\"show-perdu\">

              ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13)) {
            // line 14
            echo "                 <p class=\"name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
             ";
        } else {
            // line 16
            echo "                <p class=\"name\">Trouvé</p>
            ";
        }
        // line 18
        echo "
            <div class=\"detail\">
        
                <p><img class=\"imgShowAnimal\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21), "file"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "\" /></p>

                <div class=\"presentation\">
                    <p>Race: ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 24, $this->source); })()), "race", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
                    <p>Sexe: ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 25, $this->source); })()), "sexe", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
                    <p>Couleur: ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 26, $this->source); })()), "color", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>

                    ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 28, $this->source); })()), "microship", [], "any", false, false, false, 28)) {
            // line 29
            echo "                        <p>Identifié: ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 29, $this->source); })()), "microship", [], "any", false, false, false, 29)) ? ("Oui") : ("Non"));
            echo "</p>
                     ";
        } else {
            // line 31
            echo "                        <p>Identifié: Je ne sais pas</p>
                    ";
        }
        // line 33
        echo "
                    ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 34, $this->source); })()), "microship", [], "any", false, false, false, 34)) {
            // line 35
            echo "                        <p>Stérilisé: ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 35, $this->source); })()), "sterelise", [], "any", false, false, false, 35)) ? ("Oui") : ("Non"));
            echo "</p>
                     ";
        } else {
            // line 37
            echo "                        <p>Stérilisé: Je ne sais pas</p>
                    ";
        }
        // line 39
        echo "
                    <p>Particularité: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 40, $this->source); })()), "particularity", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
                    <p class=\"date-show\">Perdu le ";
        // line 41
        ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 41, $this->source); })()), "date", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 41, $this->source); })()), "date", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true))) : (print ("")));
        echo "</p>

                    <div class=\"adresse\">
                        <p class=\"sous-titre\">Adresse où l'animal a disparu</p>
                        <p>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 45, $this->source); })()), "address", [], "any", false, false, false, 45), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 45, $this->source); })()), "postcode", [], "any", false, false, false, 45), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 45, $this->source); })()), "city", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"contact\">
                        <p class=\"sous-titre\">Vous l'avez reconnu ?</p>
                        <p>Contactez le déclarant au </p>
                        <p>ou à l'adresse mail suivante: </p>
                    </div>
                </div>
            </div>

             <p class=\"description\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/default/show-trouve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 56,  179 => 45,  172 => 41,  168 => 40,  165 => 39,  161 => 37,  155 => 35,  153 => 34,  150 => 33,  146 => 31,  140 => 29,  138 => 28,  133 => 26,  129 => 25,  125 => 24,  117 => 21,  112 => 18,  108 => 16,  102 => 14,  100 => 13,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/layout.html.twig' %}

{% block title %}SOS PETLOST{% endblock %}

{% block content %}

    <p class=\"btn-retour\"><a href=\"{{ path('animaux-disparus') }}\">Retour aux annonces</a></p>

    <div class=\"container2\">

        <div class=\"show-perdu\">

              {% if animal.name %}
                 <p class=\"name\">{{ animal.name }}</p>
             {% else %}
                <p class=\"name\">Trouvé</p>
            {% endif %}

            <div class=\"detail\">
        
                <p><img class=\"imgShowAnimal\" src=\"{{ vich_uploader_asset(animal.image, 'file') }}\" alt=\"{{ animal.name }}\" /></p>

                <div class=\"presentation\">
                    <p>Race: {{ animal.race }}</p>
                    <p>Sexe: {{ animal.sexe }}</p>
                    <p>Couleur: {{ animal.color }}</p>

                    {% if animal.microship %}
                        <p>Identifié: {{ animal.microship ? 'Oui' : 'Non' }}</p>
                     {% else %}
                        <p>Identifié: Je ne sais pas</p>
                    {% endif %}

                    {% if animal.microship %}
                        <p>Stérilisé: {{ animal.sterelise ? 'Oui' : 'Non' }}</p>
                     {% else %}
                        <p>Stérilisé: Je ne sais pas</p>
                    {% endif %}

                    <p>Particularité: {{ animal.particularity }}</p>
                    <p class=\"date-show\">Perdu le {{ animal.date ? animal.date|date('d/m/Y') : '' }}</p>

                    <div class=\"adresse\">
                        <p class=\"sous-titre\">Adresse où l'animal a disparu</p>
                        <p>{{ animal.address }} {{ animal.postcode }} {{ animal.city }}</p>
                    </div>

                    <div class=\"contact\">
                        <p class=\"sous-titre\">Vous l'avez reconnu ?</p>
                        <p>Contactez le déclarant au </p>
                        <p>ou à l'adresse mail suivante: </p>
                    </div>
                </div>
            </div>

             <p class=\"description\">{{ animal.description }}</p>
        </div>
    </div>

{% endblock %}", "front/default/show-trouve.html.twig", "/opt/lampp/htdocs/sos_petlostcopie/templates/front/default/show-trouve.html.twig");
    }
}
