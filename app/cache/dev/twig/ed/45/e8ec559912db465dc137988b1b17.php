<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_ed45e8ec559912db465dc137988b1b17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 389,  170 => 84,  385 => 160,  382 => 159,  367 => 156,  359 => 153,  354 => 151,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  317 => 135,  311 => 131,  308 => 130,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  261 => 105,  249 => 100,  244 => 136,  242 => 96,  237 => 93,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  206 => 77,  180 => 63,  148 => 46,  97 => 23,  363 => 155,  357 => 152,  353 => 121,  351 => 150,  344 => 119,  332 => 116,  324 => 139,  321 => 112,  318 => 111,  315 => 110,  306 => 107,  303 => 128,  300 => 105,  297 => 104,  291 => 102,  274 => 97,  265 => 107,  263 => 95,  255 => 103,  231 => 89,  212 => 79,  190 => 68,  174 => 59,  58 => 25,  178 => 66,  175 => 65,  161 => 63,  118 => 49,  100 => 24,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 165,  348 => 153,  334 => 145,  327 => 140,  293 => 118,  288 => 101,  276 => 113,  271 => 111,  262 => 104,  259 => 103,  251 => 101,  248 => 96,  202 => 77,  195 => 71,  191 => 67,  188 => 90,  185 => 66,  172 => 64,  165 => 83,  153 => 77,  150 => 55,  134 => 54,  113 => 48,  90 => 42,  84 => 40,  70 => 15,  53 => 12,  34 => 5,  23 => 3,  104 => 32,  81 => 23,  76 => 34,  65 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 157,  341 => 147,  337 => 103,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 115,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  229 => 87,  220 => 70,  214 => 69,  177 => 64,  169 => 60,  140 => 42,  132 => 51,  128 => 49,  107 => 27,  61 => 12,  38 => 18,  273 => 112,  269 => 94,  254 => 92,  243 => 92,  240 => 92,  238 => 85,  235 => 85,  230 => 82,  227 => 81,  224 => 81,  221 => 85,  219 => 84,  217 => 75,  208 => 68,  204 => 76,  179 => 69,  159 => 53,  143 => 43,  135 => 53,  119 => 40,  102 => 40,  71 => 19,  67 => 14,  63 => 18,  59 => 14,  94 => 28,  89 => 20,  85 => 24,  75 => 19,  68 => 30,  56 => 16,  87 => 41,  21 => 1,  26 => 6,  93 => 28,  88 => 20,  78 => 21,  46 => 13,  27 => 7,  44 => 20,  31 => 8,  28 => 3,  196 => 92,  183 => 82,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 62,  151 => 47,  142 => 59,  138 => 54,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 27,  49 => 14,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 40,  115 => 43,  111 => 47,  108 => 36,  101 => 31,  98 => 45,  96 => 37,  83 => 33,  74 => 21,  66 => 15,  55 => 24,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 9,  32 => 6,  29 => 3,  209 => 78,  203 => 78,  199 => 93,  193 => 69,  189 => 71,  187 => 67,  182 => 87,  176 => 86,  173 => 85,  168 => 57,  164 => 59,  162 => 54,  154 => 60,  149 => 51,  147 => 75,  144 => 49,  141 => 73,  133 => 55,  130 => 39,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 25,  99 => 31,  95 => 28,  92 => 43,  86 => 28,  82 => 19,  80 => 27,  73 => 33,  64 => 23,  60 => 6,  57 => 16,  54 => 10,  51 => 13,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
