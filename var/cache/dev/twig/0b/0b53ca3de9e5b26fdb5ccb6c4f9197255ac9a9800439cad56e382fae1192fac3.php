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

/* animals/show.html.twig */
class __TwigTemplate_7e5f40fdfae6d4a64da8a27d56acc9a72ca067582b7ab955bbfb96a0e873fd8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animals/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "animals/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "animals/show.html.twig", 1);
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

        echo "Animals";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Animals</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Missing</th>
                <td>";
        // line 16
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 16, $this->source); })()), "missing", [], "any", false, false, false, 16)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Found</th>
                <td>";
        // line 20
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 20, $this->source); })()), "found", [], "any", false, false, false, 20)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Race</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 28, $this->source); })()), "race", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 32, $this->source); })()), "sexe", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Color</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 36, $this->source); })()), "color", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Microship</th>
                <td>";
        // line 40
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 40, $this->source); })()), "microship", [], "any", false, false, false, 40)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Sterelise</th>
                <td>";
        // line 44
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 44, $this->source); })()), "sterelise", [], "any", false, false, false, 44)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Particularity</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 52, $this->source); })()), "particularity", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 56, $this->source); })()), "address", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Postcode</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 60, $this->source); })()), "postcode", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 64, $this->source); })()), "city", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 68
        ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 68, $this->source); })()), "date", [], "any", false, false, false, 68)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 68, $this->source); })()), "date", [], "any", false, false, false, 68), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Animal_found</th>
                <td>";
        // line 72
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 72, $this->source); })()), "animalFound", [], "any", false, false, false, 72)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animals_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animals_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 81
        echo twig_include($this->env, $context, "animals/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "animals/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 81,  214 => 79,  209 => 77,  201 => 72,  194 => 68,  187 => 64,  180 => 60,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Animals{% endblock %}

{% block body %}
    <h1>Animals</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ animal.id }}</td>
            </tr>
            <tr>
                <th>Missing</th>
                <td>{{ animal.missing ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Found</th>
                <td>{{ animal.found ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ animal.name }}</td>
            </tr>
            <tr>
                <th>Race</th>
                <td>{{ animal.race }}</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>{{ animal.sexe }}</td>
            </tr>
            <tr>
                <th>Color</th>
                <td>{{ animal.color }}</td>
            </tr>
            <tr>
                <th>Microship</th>
                <td>{{ animal.microship ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Sterelise</th>
                <td>{{ animal.sterelise ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ animal.description }}</td>
            </tr>
            <tr>
                <th>Particularity</th>
                <td>{{ animal.particularity }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ animal.address }}</td>
            </tr>
            <tr>
                <th>Postcode</th>
                <td>{{ animal.postcode }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ animal.city }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ animal.date ? animal.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Animal_found</th>
                <td>{{ animal.animalFound ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('animals_index') }}\">back to list</a>

    <a href=\"{{ path('animals_edit', {'id': animal.id}) }}\">edit</a>

    {{ include('animals/_delete_form.html.twig') }}
{% endblock %}
", "animals/show.html.twig", "/opt/lampp/htdocs/sos_petlost/templates/animals/show.html.twig");
    }
}
