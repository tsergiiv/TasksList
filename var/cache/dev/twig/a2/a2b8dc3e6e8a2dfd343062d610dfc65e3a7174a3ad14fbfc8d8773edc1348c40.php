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

/* tasks/index.html.twig */
class __TwigTemplate_11f15cfdb0c0f334fa387e153cb74c13a3a773012492de1004fefaeaf8b0fe98 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tasks/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tasks/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tasks/index.html.twig", 1);
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

        echo "Tasks List";
        
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
        echo "
<div class=\"table-responsive\">

<table id=\"tasks\" class=\"table table-striped\">
    <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Task</th>
            <th scope=\"col\"></th>
            <th scope=\"col\">Status <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tasks_list", ["order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })())]), "html", null, true);
        echo "\"><i class=\"fa fa-sort\"></i></a></th>
            ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "            <th scope=\"col\">Actions</th>
            ";
        }
        // line 19
        echo "        </tr>
    </thead>
    <tbody>
        ";
        // line 22
        $context["n"] = 1;
        // line 23
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 24
            echo "        <tr>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "task", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 28
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "adminEdit", [], "any", false, false, false, 28), 1))) {
                // line 29
                echo "                <span class=\"badge badge-secondary\">edited by admin</span>
                ";
            }
            // line 31
            echo "            </td>
            <td>
                <span
                    ";
            // line 34
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 34), 0))) {
                // line 35
                echo "                          class=\"badge badge-danger\"
                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 36
$context["task"], "status", [], "any", false, false, false, 36), 1))) {
                // line 37
                echo "                          class=\"badge badge-warning\"
                    ";
            } else {
                // line 39
                echo "                          class=\"badge badge-success\"
                    ";
            }
            // line 40
            echo ">

                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "getStatusName", [], "any", false, false, false, 42), "html", null, true);
            echo "
                </span>
            </td>
            ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
                // line 46
                echo "            <td>
                <button class=\"btn btn-info btn-sm close-task\" data-id=\"";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 47), "html", null, true);
                echo "\">Close Task</button>
                <a href=\"/task/edit/";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 48), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\">Edit</a>
            </td>
            ";
            }
            // line 51
            echo "        </tr>
        ";
            // line 52
            $context["n"] = ((isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 52, $this->source); })()) + 1);
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </tbody>
</table>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    <script src=\"/js/main.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tasks/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 62,  211 => 61,  196 => 54,  190 => 53,  188 => 52,  185 => 51,  179 => 48,  175 => 47,  172 => 46,  170 => 45,  164 => 42,  160 => 40,  156 => 39,  152 => 37,  150 => 36,  147 => 35,  145 => 34,  140 => 31,  136 => 29,  134 => 28,  129 => 26,  125 => 25,  122 => 24,  117 => 23,  115 => 22,  110 => 19,  106 => 17,  104 => 16,  100 => 15,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tasks List{% endblock %}

{% block body %}

<div class=\"table-responsive\">

<table id=\"tasks\" class=\"table table-striped\">
    <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Task</th>
            <th scope=\"col\"></th>
            <th scope=\"col\">Status <a href=\"{{ path('tasks_list', { 'order' : order }) }}\"><i class=\"fa fa-sort\"></i></a></th>
            {% if app.user %}
            <th scope=\"col\">Actions</th>
            {% endif %}
        </tr>
    </thead>
    <tbody>
        {% set n = 1 %}
        {% for task in tasks %}
        <tr>
            <td>{{ n }}</td>
            <td>{{ task.task }}</td>
            <td>
                {% if task.adminEdit == 1 %}
                <span class=\"badge badge-secondary\">edited by admin</span>
                {% endif %}
            </td>
            <td>
                <span
                    {% if task.status == 0 %}
                          class=\"badge badge-danger\"
                    {% elseif task.status == 1 %}
                          class=\"badge badge-warning\"
                    {% else %}
                          class=\"badge badge-success\"
                    {% endif %}>

                    {{ task.getStatusName }}
                </span>
            </td>
            {% if app.user %}
            <td>
                <button class=\"btn btn-info btn-sm close-task\" data-id=\"{{ task.id }}\">Close Task</button>
                <a href=\"/task/edit/{{ task.id }}\" class=\"btn btn-warning btn-sm\">Edit</a>
            </td>
            {% endif %}
        </tr>
        {% set n = n + 1 %}
        {% endfor %}
    </tbody>
</table>

</div>

{% endblock %}

{% block javascripts %}
    <script src=\"/js/main.js\"></script>
{% endblock %}
", "tasks/index.html.twig", "/Applications/MAMP/htdocs/test/templates/tasks/index.html.twig");
    }
}
