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

/* wallpaper/comment_show.html.twig */
class __TwigTemplate_7e0051bf199ffec47f0a770da5fc496989db3ddf58d713a455caf49e9a0b4fbb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wallpaper/comment_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wallpaper/comment_show.html.twig"));

        // line 1
        echo "<h2><i class=\"pr-3 fa fa-comment\"></i>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 1, $this->source); })()), "comments", [], "any", false, false, false, 1)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("comments"), "html", null, true);
        echo " </h2>
<a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("wallpaper_comment", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add_comment"), "html", null, true);
        echo "\"
   class=\"btn btn-info\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add_comment"), "html", null, true);
        echo "
</a>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 6, $this->source); })()), "comments", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 7
            echo "    <div class=\"row\">
        <div class=\"col-sm-12\" id=\"comment\">
            <small><strong>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "nick", [], "any", false, false, false, 9), "html", null, true);
            echo "</strong></small>
            <small>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "email", [], "any", false, false, false, 10), "html", null, true);
            echo "</small>
            <small>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 11), "d.m.Y H:i"), "html", null, true);
            echo "</small>
            <br>
            <span> ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 13), "html", null, true);
            echo "</span>
        </div>
        ";
            // line 15
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 16
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("wallpaper_comment_delete", ["id" => ((twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 16), "")) : (""))]), "html", null, true);
                echo "\"
               title=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete_comment"), "html", null, true);
                echo "\" class=\"btn-sm btn-danger\">
                ";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete_comment"), "html", null, true);
                echo "
            </a>
        ";
            }
            // line 21
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "wallpaper/comment_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 21,  99 => 18,  95 => 17,  90 => 16,  88 => 15,  83 => 13,  78 => 11,  74 => 10,  70 => 9,  66 => 7,  62 => 6,  57 => 4,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2><i class=\"pr-3 fa fa-comment\"></i>{{ wallpaper.comments|length }} {{ 'comments'|trans }} </h2>
<a href=\"{{ url('wallpaper_comment', {id: wallpaper.id}) }}\" title=\"{{ 'add_comment'|trans }}\"
   class=\"btn btn-info\">
    {{ 'add_comment'|trans }}
</a>
{% for comment in wallpaper.comments %}
    <div class=\"row\">
        <div class=\"col-sm-12\" id=\"comment\">
            <small><strong>{{ comment.nick }}</strong></small>
            <small>{{ comment.email }}</small>
            <small>{{ comment.createdAt|date('d.m.Y H:i') }}</small>
            <br>
            <span> {{ comment.content }}</span>
        </div>
        {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ url('wallpaper_comment_delete',{'id': comment.id|default('')}) }}\"
               title=\"{{ 'action_delete_comment'|trans }}\" class=\"btn-sm btn-danger\">
                {{ 'action_delete_comment'|trans }}
            </a>
        {% endif %}
    </div>
{% endfor %}", "wallpaper/comment_show.html.twig", "C:\\Users\\DELL XPS\\PhpstormProjects\\PROJEKT\\templates\\wallpaper\\comment_show.html.twig");
    }
}
