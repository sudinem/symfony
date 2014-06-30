<?php

/* ESSUserBundle:User:index.html.twig */
class __TwigTemplate_7a3bfb4495ea933f6f78767e871b4ff3214b8295e58e3681d84c5e0051580198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1>This is user login </h1>
    ";
        // line 4
        if ($this->getContext($context, "error")) {
            // line 5
            echo "        <div style=\"background-color: #f2dede;border-color: #ebccd1;color: #a94442;padding-left: 30px; position: relative;padding: 15px;margin-bottom: 20px;border: 1px solid transparent;border-radius: 4px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "    <div>
        <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
            <table>
                <tr>
                    <td>Username</td><td><input type=\"text\" name=\"_username\"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type=\"text\" name=\"_password\"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td><td><input type=\"submit\" value=\"Submit\"></td>
                </tr>
            </table>
            
        </form>
</div>
                      
";
    }

    public function getTemplateName()
    {
        return "ESSUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  36 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
