<?php

/* ChatcodeBlogBundle:Blog:tips.html.twig */
class __TwigTemplate_1142a9542f7e63c9a616e839788c1c34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ChatcodeBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ChatcodeBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Astuces  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    
<section class=\"sidebar\">
    ";
        // line 10
        if ((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"))) {
            // line 11
            echo "        <ul>
        ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </ul>
    ";
        }
        // line 17
        echo "</section>
    
<section class=\"tips\">  
    <h1>Astuces</h1>
    ";
        // line 21
        if ((isset($context["tips"]) ? $context["tips"] : $this->getContext($context, "tips"))) {
            // line 22
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tips"]) ? $context["tips"] : $this->getContext($context, "tips")));
            foreach ($context['_seq'] as $context["_key"] => $context["tip"]) {
                // line 23
                echo "            <article>
                <header>
                    <h2>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tip"]) ? $context["tip"] : $this->getContext($context, "tip")), "title"), "html", null, true);
                echo "</h2>
                </header>
                <div class=\"post-content\">
                    ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tip"]) ? $context["tip"] : $this->getContext($context, "tip")), "text"), "html", null, true);
                echo "
                </div>
            </article>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "</section>
    
";
    }

    public function getTemplateName()
    {
        return "ChatcodeBlogBundle:Blog:tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  101 => 32,  91 => 28,  85 => 25,  81 => 23,  76 => 22,  74 => 21,  68 => 17,  64 => 15,  55 => 13,  51 => 12,  48 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
