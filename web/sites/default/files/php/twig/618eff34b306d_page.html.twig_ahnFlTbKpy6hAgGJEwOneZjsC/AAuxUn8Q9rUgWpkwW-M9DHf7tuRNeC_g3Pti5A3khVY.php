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

/* themes/zinble/templates/layouts/page.html.twig */
class __TwigTemplate_9c143fbedd20f47badb055911a5c0672834a56cf817a053bbde828652e300212 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 58];
        $filters = ["escape" => 56, "t" => 59];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
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
        // line 54
        echo "
<header id=\"navbar-head\" role=\"banner\" class=\"header_wrapper \">
  <div id=\"header_top\" class=\"";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
    <ul class=\"contact_details\">
      ";
        // line 58
        if (($context["slogan"] ?? null)) {
            // line 59
            echo "        <li class=\"slogan\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed(($context["slogan"] ?? null))));
            echo "</li>
      ";
        }
        // line 61
        echo "      ";
        if (($context["phone_number"] ?? null)) {
            // line 62
            echo "        <li class=\"phone\"><i class=\"fa fa-phone\"></i><a href=\"tel:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null)), "html", null, true);
            echo "\"> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null)), "html", null, true);
            echo "</a></li>
      ";
        }
        // line 64
        echo "      ";
        if (($context["email"] ?? null)) {
            // line 65
            echo "        <li class=\"mail\"><i class=\"fa fa-envelope\"></i><a href=\"mailto:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
            echo "</a></li>
      ";
        }
        // line 67
        echo "    </ul>

    <ul class=\"social\">
      ";
        // line 70
        if (($context["facebook"] ?? null)) {
            // line 71
            echo "        <li class=\"facebook\"><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
            echo "\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
      ";
        }
        // line 73
        echo "      ";
        if (($context["linkedin"] ?? null)) {
            // line 74
            echo "        <li class=\"linkedin\"><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null)), "html", null, true);
            echo "\" title=\"Google+\"><i class=\"fa fa-linkedin\"></i></a></li>
      ";
        }
        // line 76
        echo "      ";
        if (($context["google_plus"] ?? null)) {
            // line 77
            echo "        <li class=\"googleplus\"><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus"] ?? null)), "html", null, true);
            echo "\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a></li>
      ";
        }
        // line 79
        echo "      ";
        if (($context["twitter"] ?? null)) {
            // line 80
            echo "        <li class=\"twitter\"><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
            echo "\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
      ";
        }
        // line 82
        echo "    </ul>
  </div>

  <div id=\"header_bottom\" class=\"";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
    <div class=\"logo\">
      ";
        // line 87
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 88
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
      ";
        }
        // line 90
        echo "    </div>
    <div class=\"menu_wrapper\">
      ";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 93
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
      ";
        }
        // line 95
        echo "    </div>
  </div>
</header>

<!--- Start banner -->
<section class=\"banner-wrapper\">
  <div class=\"banner-layer ";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
    ";
        // line 102
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 103
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
    ";
        }
        // line 105
        echo "  </div>
</section>
<!---End banner -->

<!--- Start content top -->
";
        // line 110
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 111
            echo "  <section class=\"content-top\">
    <div class=\"";
            // line 112
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
            // line 113
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
    </div>
  </section>
";
        }
        // line 117
        echo "<!---End content Top -->

<div class=\"content ";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
  <div class=\"row layout\">
    <!--- Start Left Sidebar -->
    ";
        // line 122
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 123
            echo "      <aside class = \"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " sidebar-first\">
        ";
            // line 124
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 127
        echo "    <!---End Left Sidebar -->
    <!--- Start content -->
    ";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 130
            echo "    <main class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo " content-middle\">
      ";
            // line 131
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
    </main>
    ";
        }
        // line 134
        echo "    <!---End content -->
    <!--- Start Right Sidebar -->
    ";
        // line 136
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 137
            echo "      <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo " sidebar-second\">
        ";
            // line 138
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 141
        echo "    <!---End Right Sidebar -->
  </div>
</div>

<!--- Start content Bottom -->
";
        // line 146
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 147
            echo "<div class=\"content-bottom\">
  <div class=\"page-bottom ";
            // line 148
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
    ";
            // line 149
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
  </div>
</div>
";
        }
        // line 153
        echo "<!---End content Bottom -->
<footer class=\"footer_copy ";
        // line 154
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
  <div class=\"row footer-box\">
    <div class=\"footer1 col-md-3 col-sm-6 col-xs-12\">
      ";
        // line 157
        if ($this->getAttribute(($context["page"] ?? null), "footer1", [])) {
            // line 158
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer1", [])), "html", null, true);
            echo "
      ";
        }
        // line 160
        echo "    </div>
    <div class=\"footer2 col-md-3 col-sm-6 col-xs-12\">
      ";
        // line 162
        if ($this->getAttribute(($context["page"] ?? null), "footer2", [])) {
            // line 163
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer2", [])), "html", null, true);
            echo "
      ";
        }
        // line 165
        echo "    </div>
    <div class=\"footer3 col-md-3 col-sm-6 col-xs-12\">
      ";
        // line 167
        if ($this->getAttribute(($context["page"] ?? null), "footer3", [])) {
            // line 168
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer3", [])), "html", null, true);
            echo "
      ";
        }
        // line 170
        echo "    </div>
    <div class=\"footer4 col-md-3 col-sm-6 col-xs-12\">
      <div class=\"contact-us\">
        <h6 class=\"title\">Contact Info</h6>
        <div class=\"contact-info\">
          ";
        // line 175
        if (($context["address"] ?? null)) {
            // line 176
            echo "            <div class=\"contact-line\"><i class=\"fa fa-map-marker\"></i><span>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null)), "html", null, true);
            echo "</span></div>
          ";
        }
        // line 178
        echo "          ";
        if (($context["phone_number"] ?? null)) {
            // line 179
            echo "            <div class=\"contact-line\"><i class=\"fa fa-phone\"></i><a href=\"tel:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null)), "html", null, true);
            echo "\"> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null)), "html", null, true);
            echo "</a></div>
          ";
        }
        // line 181
        echo "          ";
        if (($context["email"] ?? null)) {
            // line 182
            echo "            <div class=\"contact-line\"><i class=\"fa fa-envelope-o\"></i><a href=\"mailto:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
            echo "</a></div>
          ";
        }
        // line 184
        echo "        </div>
        ";
        // line 185
        if (($context["google_position"] ?? null)) {
            // line 186
            echo "        <div class=\"map_view\">
          <iframe src=\"https://maps.google.com/maps?q=";
            // line 187
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_position"] ?? null)), "html", null, true);
            echo "&z=15&output=embed\" width=\"100%\" height=\"270\" frameborder=\"0\" style=\"border:0\"></iframe>
        </div>
        ";
        }
        // line 189
        echo "\t\t\t
      </div>
      ";
        // line 191
        if ($this->getAttribute(($context["page"] ?? null), "footer4", [])) {
            // line 192
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer4", [])), "html", null, true);
            echo "
      ";
        }
        // line 194
        echo "    </div>
  </div>
  <div class=\"copy-right\">
    <div class=\"footer-bottom\">
      ";
        // line 198
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 199
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      ";
        }
        // line 201
        echo "    </div>
    <ul class=\"social\">
      ";
        // line 203
        if (($context["facebook"] ?? null)) {
            // line 204
            echo "      <li class=\"facebook\"><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
            echo "\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
      ";
        }
        // line 206
        echo "      ";
        if (($context["linkedin"] ?? null)) {
            // line 207
            echo "      <li class=\"linkedin\"><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null)), "html", null, true);
            echo "\" title=\"Google+\"><i class=\"fa fa-linkedin\"></i></a></li>
      ";
        }
        // line 209
        echo "      ";
        if (($context["google_plus"] ?? null)) {
            // line 210
            echo "      <li class=\"googleplus\"><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus"] ?? null)), "html", null, true);
            echo "\" title=\"Google+\"><i class=\"fa fa-google-plus\"></i></a></li>
      ";
        }
        // line 212
        echo "      ";
        if (($context["twitter"] ?? null)) {
            // line 213
            echo "      <li class=\"twitter\"><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
            echo "\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
      ";
        }
        // line 215
        echo "    </ul>
  </div>
</footer>

";
    }

    public function getTemplateName()
    {
        return "themes/zinble/templates/layouts/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 215,  438 => 213,  435 => 212,  429 => 210,  426 => 209,  420 => 207,  417 => 206,  411 => 204,  409 => 203,  405 => 201,  399 => 199,  397 => 198,  391 => 194,  385 => 192,  383 => 191,  379 => 189,  373 => 187,  370 => 186,  368 => 185,  365 => 184,  357 => 182,  354 => 181,  346 => 179,  343 => 178,  337 => 176,  335 => 175,  328 => 170,  322 => 168,  320 => 167,  316 => 165,  310 => 163,  308 => 162,  304 => 160,  298 => 158,  296 => 157,  290 => 154,  287 => 153,  280 => 149,  276 => 148,  273 => 147,  271 => 146,  264 => 141,  258 => 138,  253 => 137,  251 => 136,  247 => 134,  241 => 131,  236 => 130,  234 => 129,  230 => 127,  224 => 124,  219 => 123,  217 => 122,  211 => 119,  207 => 117,  200 => 113,  196 => 112,  193 => 111,  191 => 110,  184 => 105,  178 => 103,  176 => 102,  172 => 101,  164 => 95,  158 => 93,  156 => 92,  152 => 90,  146 => 88,  144 => 87,  139 => 85,  134 => 82,  128 => 80,  125 => 79,  119 => 77,  116 => 76,  110 => 74,  107 => 73,  101 => 71,  99 => 70,  94 => 67,  86 => 65,  83 => 64,  75 => 62,  72 => 61,  66 => 59,  64 => 58,  59 => 56,  55 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zinble/templates/layouts/page.html.twig", "C:\\xampp\\htdocs\\recommended-project\\web\\themes\\zinble\\templates\\layouts\\page.html.twig");
    }
}
