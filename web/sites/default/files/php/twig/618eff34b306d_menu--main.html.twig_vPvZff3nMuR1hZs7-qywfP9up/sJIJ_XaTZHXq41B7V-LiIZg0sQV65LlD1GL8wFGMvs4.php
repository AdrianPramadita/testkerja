<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/zinble/templates/extras/menu--main.html.twig */
class __TwigTemplate_2d2c30935f2d30402830184dcf09a648d2659a7e80fd4fe52f678c22906e1304 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 29, "import" => 30, "macro" => 38, "if" => 40, "for" => 47];
        $filters = ["escape" => 42];
        $functions = ["link" => 65];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'import', 'macro', 'if', 'for'],
                ['escape'],
                ['link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 23
        echo "
<nav class=\"navbar navbar-expand-md  navbar-hover\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarHover\" aria-controls=\"navbarDD\" aria-expanded=\"false\" aria-label=\"Navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarHover\">
 ";
        // line 29
        $context["level"] = 0;
        // line 30
        $context["menus"] = $this;
        // line 31
        echo "
";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
        // line 80
        echo "    </div>
</nav>
";
    }

    // line 38
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 39
            echo "  ";
            $context["menus"] = $this;
            // line 40
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 41
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 42
                    echo "      <ul  id=\"main-menu\" ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "navbar-nav"], "method")), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 44
                    echo "      <ul ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "dropdown-menu"], "method")), "html", null, true);
                    echo ">
      ";
                    // line 45
                    $context["level"] = (($context["level"] ?? null) + 1);
                    // line 46
                    echo "    ";
                }
                // line 47
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 48
                    echo "    
      ";
                    // line 50
                    $context["classes"] = [0 => "nav-item", 1 => (($this->getAttribute(                    // line 52
$context["item"], "is_expanded", [])) ? ("dropdown") : ("")), 2 => (($this->getAttribute(                    // line 53
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 54
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                    // line 57
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", []))) {
                        // line 58
                        echo "    
        <li ";
                        // line 59
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                        echo ">
          <a class=\"nav-link dropdown-toggle\" href=\"";
                        // line 60
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                        echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
           ";
                        // line 61
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo "
          </a>
      ";
                    } elseif ((                    // line 63
($context["level"] ?? null) != 0)) {
                        // line 64
                        echo "        <li>
          ";
                        // line 65
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => [0 => "dropdown-item"]]), "html", null, true);
                        echo "  
      ";
                    } else {
                        // line 67
                        echo "         <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => "nav-item"], "method")), "html", null, true);
                        echo ">
        ";
                        // line 68
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => [0 => "nav-link"]]), "html", null, true);
                        echo "
      ";
                    }
                    // line 69
                    echo "  
        
        ";
                    // line 71
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 72
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => "navbar-nav"], "method"), (($context["menu_level"] ?? null) + 1)));
                        echo "
        ";
                    }
                    // line 74
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "    ";
                $context["level"] = (($context["level"] ?? null) - 1);
                // line 77
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/zinble/templates/extras/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 77,  191 => 76,  184 => 74,  178 => 72,  176 => 71,  172 => 69,  167 => 68,  162 => 67,  157 => 65,  154 => 64,  152 => 63,  147 => 61,  143 => 60,  139 => 59,  136 => 58,  133 => 57,  131 => 54,  130 => 53,  129 => 52,  128 => 50,  125 => 48,  120 => 47,  117 => 46,  115 => 45,  110 => 44,  104 => 42,  101 => 41,  98 => 40,  95 => 39,  81 => 38,  75 => 80,  70 => 36,  67 => 31,  65 => 30,  63 => 29,  55 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zinble/templates/extras/menu--main.html.twig", "C:\\xampp\\htdocs\\recommended-project\\web\\themes\\zinble\\templates\\extras\\menu--main.html.twig");
    }
}
