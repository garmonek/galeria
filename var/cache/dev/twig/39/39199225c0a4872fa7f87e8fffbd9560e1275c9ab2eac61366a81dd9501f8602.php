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

/* wallpaper/show.html.twig */
class __TwigTemplate_765947ea9752bc2fc400d984e6585c978f2f5038863475f9fa9d00cf3f45e470 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wallpaper/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wallpaper/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wallpaper/show.html.twig", 1);
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

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_wallpaper_details", ["%id%" => ((twig_get_attribute($this->env, $this->source, ($context["wallpaper"] ?? null), "id", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["wallpaper"] ?? null), "id", [], "any", false, false, false, 4), "")) : (""))]), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_wallpaper_details", ["%id%" => ((twig_get_attribute($this->env, $this->source, ($context["wallpaper"] ?? null), "id", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["wallpaper"] ?? null), "id", [], "any", false, false, false, 8), "")) : (""))]), "html", null, true);
        echo "</h1>
    ";
        // line 9
        if (((isset($context["wallpaper"]) || array_key_exists("wallpaper", $context)) && twig_length_filter($this->env, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 9, $this->source); })())))) {
            // line 10
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/") . twig_get_attribute($this->env, $this->source, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 10, $this->source); })()), "filename", [], "any", false, false, false, 10)), "html", null, true);
            echo "\" alt=\"...\" class=\"img-thumbnail col-sm-6\">
        <dl class=\"dl-horizontal\">
            <dt>";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_id"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
            echo "</dd>
            <dt>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_title"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</dd>
            <dt>";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_filename"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 17, $this->source); })()), "filename", [], "any", false, false, false, 17), "html", null, true);
            echo "</dd>
            <dt>";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_created_at"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 19, $this->source); })()), "createdAt", [], "any", false, false, false, 19), "d.m.Y"), "html", null, true);
            echo "</dd>
            <dt>";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_updated_at"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 21, $this->source); })()), "updatedAt", [], "any", false, false, false, 21), "d.m.Y"), "html", null, true);
            echo "</dd>
            <dt>";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_category"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 23, $this->source); })()), "category", [], "any", false, false, false, 23), "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</dd>
            <dt>";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_description"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
            echo "</dd>
        </dl>
        ";
            // line 27
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 28
                echo "            <p>
                <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("wallpaper_edit", ["id" => ((twig_get_attribute($this->env, $this->source, ($context["wallpaper"] ?? null), "id", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["wallpaper"] ?? null), "id", [], "any", false, false, false, 29), "")) : (""))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_edit"), "html", null, true);
                echo "\"
                   class=\"btn btn-primary\">
                    ";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_edit"), "html", null, true);
                echo "
                </a>
                <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("wallpaper_delete", ["id" => ((twig_get_attribute($this->env, $this->source, ($context["wallpaper"] ?? null), "id", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["wallpaper"] ?? null), "id", [], "any", false, false, false, 33), "")) : (""))]), "html", null, true);
                echo "\"
                   title=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete"), "html", null, true);
                echo "\" class=\"btn btn-danger\">
                    ";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete"), "html", null, true);
                echo "
                </a>
            </p>
        ";
            }
            // line 39
            echo "
        <p>
            <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("wallpaper_index");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_back_to_list_wallpaper"), "html", null, true);
            echo "\"
               class=\"btn btn-secondary\">
                ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_back_to_list_wallpaper"), "html", null, true);
            echo "
            </a>
            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("category_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 45, $this->source); })()), "category", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"
               title=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_back_to_gallery"), "html", null, true);
            echo "\" class=\"btn btn-secondary\">
                ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_back_to_gallery"), "html", null, true);
            echo "
            </a>
        </p>

        ";
            // line 51
            echo twig_include($this->env, $context, "wallpaper/comment_show.html.twig");
            echo "
    ";
        } else {
            // line 53
            echo "        <p>
            ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_item_not_found"), "html", null, true);
            echo "
        </p>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wallpaper/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 54,  230 => 53,  225 => 51,  218 => 47,  214 => 46,  210 => 45,  205 => 43,  198 => 41,  194 => 39,  187 => 35,  183 => 34,  179 => 33,  174 => 31,  167 => 29,  164 => 28,  162 => 27,  157 => 25,  153 => 24,  149 => 23,  145 => 22,  141 => 21,  137 => 20,  133 => 19,  129 => 18,  125 => 17,  121 => 16,  117 => 15,  113 => 14,  109 => 13,  105 => 12,  99 => 10,  97 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ 'title_wallpaper_details'|trans({'%id%': wallpaper.id|default('')}) }}
{% endblock %}

{% block body %}
    <h1>{{ 'title_wallpaper_details'|trans({'%id%': wallpaper.id|default('')}) }}</h1>
    {% if wallpaper is defined and wallpaper|length %}
        <img src=\"{{ asset('images/') ~ wallpaper.filename }}\" alt=\"...\" class=\"img-thumbnail col-sm-6\">
        <dl class=\"dl-horizontal\">
            <dt>{{ 'label_id'|trans }}</dt>
            <dd>{{ wallpaper.id }}</dd>
            <dt>{{ 'label_title'|trans }}</dt>
            <dd>{{ wallpaper.title }}</dd>
            <dt>{{ 'label_filename'|trans }}</dt>
            <dd>{{ wallpaper.filename }}</dd>
            <dt>{{ 'label_created_at'|trans }}</dt>
            <dd>{{ wallpaper.createdAt|date('d.m.Y') }}</dd>
            <dt>{{ 'label_updated_at'|trans }}</dt>
            <dd>{{ wallpaper.updatedAt|date('d.m.Y') }}</dd>
            <dt>{{ 'label_category'|trans }}</dt>
            <dd>{{ wallpaper.category.title }}</dd>
            <dt>{{ 'label_description'|trans }}</dt>
            <dd>{{ wallpaper.description }}</dd>
        </dl>
        {% if is_granted('ROLE_ADMIN') %}
            <p>
                <a href=\"{{ url('wallpaper_edit',{'id': wallpaper.id|default('')}) }}\" title=\"{{ 'action_edit'|trans }}\"
                   class=\"btn btn-primary\">
                    {{ 'action_edit'|trans }}
                </a>
                <a href=\"{{ url('wallpaper_delete',{'id': wallpaper.id|default('')}) }}\"
                   title=\"{{ 'action_delete'|trans }}\" class=\"btn btn-danger\">
                    {{ 'action_delete'|trans }}
                </a>
            </p>
        {% endif %}

        <p>
            <a href=\"{{ url('wallpaper_index') }}\" title=\"{{ 'action_back_to_list_wallpaper'|trans }}\"
               class=\"btn btn-secondary\">
                {{ 'action_back_to_list_wallpaper'|trans }}
            </a>
            <a href=\"{{ url('category_show', {id: wallpaper.category.id}) }}\"
               title=\"{{ 'action_back_to_gallery'|trans }}\" class=\"btn btn-secondary\">
                {{ 'action_back_to_gallery'|trans }}
            </a>
        </p>

        {{ include('wallpaper/comment_show.html.twig') }}
    {% else %}
        <p>
            {{ 'message_item_not_found'|trans }}
        </p>
    {% endif %}
{% endblock %}", "wallpaper/show.html.twig", "C:\\Users\\DELL XPS\\PhpstormProjects\\PROJEKT\\templates\\wallpaper\\show.html.twig");
    }
}
