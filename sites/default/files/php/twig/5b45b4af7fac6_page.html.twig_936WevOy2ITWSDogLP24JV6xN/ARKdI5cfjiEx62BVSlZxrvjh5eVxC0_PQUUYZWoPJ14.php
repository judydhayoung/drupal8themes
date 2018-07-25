<?php

/* themes/bootstrap_clean_blog/templates/page.html.twig */
class __TwigTemplate_496a780e91e2e342124f5eee381e012b69a13fca5cbc9b972260bc3a453d0f41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'social_buttons' => array($this, 'block_social_buttons'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 75, "trans" => 99, "block" => 129, "for" => 149);
        $filters = array("t" => 70);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans', 'block', 'for'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 64
        echo "<nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header page-scroll\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
              data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
        echo "</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      ";
        // line 75
        if (($context["site_name"] ?? null)) {
            // line 76
            echo "        <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
            echo "</a>
      ";
        }
        // line 78
        echo "    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      ";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "bootstrap_clean_blog_main_menu", array()), "html", null, true));
        echo "
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class=\"intro-header\" style=\"background-image: url('";
        // line 90
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_image"] ?? null), "html", null, true));
        echo "')\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 93
        if (($context["node"] ?? null)) {
            // line 94
            echo "        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
          <div class=\"post-heading\">
            <h1>";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["node"] ?? null), "label", array()), "html", null, true));
            echo "</h1>
            ";
            // line 97
            if (($context["display_submitted"] ?? null)) {
                // line 98
                echo "              <span class=\"meta\">
                ";
                // line 99
                echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 100
                echo "              </span>
            ";
            }
            // line 102
            echo "          </div>
        </div>
      ";
        } else {
            // line 105
            echo "        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
          <div class=\"site-heading\">
            <h1>";
            // line 107
            if ($this->getAttribute(($context["node"] ?? null), "label", array())) {
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["node"] ?? null), "label", array()), "html", null, true));
                echo " ";
            } else {
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
                echo " ";
            }
            echo "</h1>
            ";
            // line 108
            if (($context["site_slogan"] ?? null)) {
                // line 109
                echo "              <hr class=\"small\">
              <span class=\"subheading\">
                ";
                // line 111
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
                echo "
              </span>
            ";
            }
            // line 114
            echo "          </div>
        </div>
      ";
        }
        // line 117
        echo "    </div>
  </div>
</header>

<!-- Post Content -->
<article>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
        ";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "

        ";
        // line 129
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 133
        echo "      </div>
    </div>
  </div>
</article>

<hr>

<!-- Footer -->
<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
        ";
        // line 146
        echo "        ";
        $this->displayBlock('social_buttons', $context, $blocks);
        // line 162
        echo "
        ";
        // line 163
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
</footer>
";
    }

    // line 129
    public function block_content($context, array $blocks = array())
    {
        // line 130
        echo "          <a id=\"main-content\"></a>
          ";
        // line 131
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 146
    public function block_social_buttons($context, array $blocks = array())
    {
        // line 147
        echo "        ";
        if (($context["social_links"] ?? null)) {
            // line 148
            echo "        <ul class=\"list-inline text-center\">
          ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["social_links"] ?? null));
            foreach ($context['_seq'] as $context["network"] => $context["url"]) {
                // line 150
                echo "          <li>
            <a target=\"_blank\" href=\"";
                // line 151
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["url"], "html", null, true));
                echo "\">
              <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x\"></i>
                <i class=\"fa fa-";
                // line 154
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["network"], "html", null, true));
                echo " fa-stack-1x fa-inverse\"></i>
              </span>
            </a>
          </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['network'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "        </ul>
        ";
        }
        // line 161
        echo "        ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_clean_blog/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 161,  249 => 159,  238 => 154,  232 => 151,  229 => 150,  225 => 149,  222 => 148,  219 => 147,  216 => 146,  210 => 131,  207 => 130,  204 => 129,  194 => 163,  191 => 162,  188 => 146,  174 => 133,  171 => 129,  166 => 126,  155 => 117,  150 => 114,  144 => 111,  140 => 109,  138 => 108,  126 => 107,  122 => 105,  117 => 102,  113 => 100,  111 => 99,  108 => 98,  106 => 97,  102 => 96,  98 => 94,  96 => 93,  90 => 90,  79 => 82,  73 => 78,  63 => 76,  61 => 75,  53 => 70,  45 => 64,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap_clean_blog/templates/page.html.twig", "/Users/judykwon/projects/drupal/drupal8/themes/bootstrap_clean_blog/templates/page.html.twig");
    }
}
