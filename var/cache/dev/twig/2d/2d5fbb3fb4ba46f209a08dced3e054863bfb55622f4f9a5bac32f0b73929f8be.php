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

/* front/default/show-perdu.html.twig */
class __TwigTemplate_551fb54c07ce04d4dee047be194aed5fc562ea381876754dfb6ba0896d0cec94 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/default/show-perdu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/default/show-perdu.html.twig"));

        $this->parent = $this->loadTemplate("front/layout.html.twig", "front/default/show-perdu.html.twig", 1);
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
            echo "                <p class=\"name\">Perdu</p>
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
                    <p>Identifié: ";
        // line 27
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 27, $this->source); })()), "microship", [], "any", false, false, false, 27)) ? ("Oui") : ("Non"));
        echo "</p>
                    <p>Stérilisé: ";
        // line 28
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 28, $this->source); })()), "sterelise", [], "any", false, false, false, 28)) ? ("Oui") : ("Non"));
        echo "</p>
                    <p>Particularité: ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 29, $this->source); })()), "particularity", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
                    <p class=\"date-show\">Perdu le ";
        // line 30
        ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 30, $this->source); })()), "date", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 30, $this->source); })()), "date", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true))) : (print ("")));
        echo "</p>
              
                    
                    <div class=\"adresse\">
                        <p class=\"sous-titre\">Adresse où l'animal a disparu</p>
                        <p>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 35, $this->source); })()), "address", [], "any", false, false, false, 35), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 35, $this->source); })()), "postcode", [], "any", false, false, false, 35), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 35, $this->source); })()), "city", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"contact\">
                        <p class=\"sous-titre\">Vous l'avez trouvé ?</p>
                        <p>Contactez son propriétaire au </p>
                        <p>ou à l'adresse mail suivante: </p>
                    </div>
                   
                </div>

            </div>
            
            <p class=\"description\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>

         
        </div>

        <p class=\"btn-new\"><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showCommentPerdu", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\">Publier un message</a></p>

        <p>Commentaires</p>

        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 57, $this->source); })()), "comment", [], "any", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 58
            echo "                 
            <div class=\"show-comment\">
                <p class=\"comment-username\">";
            // line 60
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["comment"], "username", [], "any", false, false, false, 60) . " - ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 60), "d/m/Y")), "html", null, true);
            echo "</p>
                <p class=\"comment\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "coment", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "

    </div>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/default/show-perdu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 64,  204 => 61,  200 => 60,  196 => 58,  192 => 57,  185 => 53,  177 => 48,  157 => 35,  149 => 30,  145 => 29,  141 => 28,  137 => 27,  133 => 26,  129 => 25,  125 => 24,  117 => 21,  112 => 18,  108 => 16,  102 => 14,  100 => 13,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                <p class=\"name\">Perdu</p>
            {% endif %}

            <div class=\"detail\">

                <p><img class=\"imgShowAnimal\" src=\"{{ vich_uploader_asset(animal.image, 'file') }}\" alt=\"{{ animal.name }}\" /></p>
                
                <div class=\"presentation\">
                    <p>Race: {{ animal.race }}</p>
                    <p>Sexe: {{ animal.sexe }}</p>
                    <p>Couleur: {{ animal.color }}</p>
                    <p>Identifié: {{ animal.microship ? 'Oui' : 'Non' }}</p>
                    <p>Stérilisé: {{ animal.sterelise ? 'Oui' : 'Non' }}</p>
                    <p>Particularité: {{ animal.particularity }}</p>
                    <p class=\"date-show\">Perdu le {{ animal.date ? animal.date|date('d/m/Y') : '' }}</p>
              
                    
                    <div class=\"adresse\">
                        <p class=\"sous-titre\">Adresse où l'animal a disparu</p>
                        <p>{{ animal.address }} {{ animal.postcode }} {{ animal.city }}</p>
                    </div>

                    <div class=\"contact\">
                        <p class=\"sous-titre\">Vous l'avez trouvé ?</p>
                        <p>Contactez son propriétaire au </p>
                        <p>ou à l'adresse mail suivante: </p>
                    </div>
                   
                </div>

            </div>
            
            <p class=\"description\">{{ animal.description }}</p>

         
        </div>

        <p class=\"btn-new\"><a href=\"{{ path('showCommentPerdu',{'id': animal.id}) }}\">Publier un message</a></p>

        <p>Commentaires</p>

        {% for comment in animal.comment %}
                 
            <div class=\"show-comment\">
                <p class=\"comment-username\">{{ comment.username ~ ' - ' ~ comment.createdAt|date('d/m/Y') }}</p>
                <p class=\"comment\">{{ comment.coment}}</p>
            </div>
        {% endfor %}


    </div>
    

{% endblock %}", "front/default/show-perdu.html.twig", "/opt/lampp/htdocs/sos_petlostcopie/templates/front/default/show-perdu.html.twig");
    }
}
