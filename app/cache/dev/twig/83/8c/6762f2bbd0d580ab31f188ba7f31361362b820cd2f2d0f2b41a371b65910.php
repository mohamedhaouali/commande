<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_838c6762f2bbd0d580ab31f188ba7f31361362b820cd2f2d0f2b41a371b65910 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
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
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  70 => 26,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  19 => 1,  158 => 35,  154 => 34,  146 => 32,  142 => 31,  138 => 30,  134 => 29,  130 => 28,  126 => 27,  122 => 26,  118 => 25,  114 => 24,  106 => 22,  102 => 21,  97 => 20,  94 => 19,  89 => 18,  83 => 30,  79 => 29,  75 => 28,  71 => 10,  67 => 9,  62 => 24,  59 => 7,  48 => 45,  43 => 18,  34 => 7,  30 => 5,  23 => 1,  235 => 82,  232 => 81,  223 => 75,  220 => 74,  214 => 83,  211 => 81,  209 => 74,  206 => 73,  203 => 72,  198 => 59,  195 => 58,  188 => 38,  184 => 37,  180 => 36,  177 => 35,  171 => 34,  165 => 31,  161 => 30,  157 => 29,  153 => 27,  150 => 33,  127 => 86,  125 => 72,  112 => 61,  110 => 23,  99 => 50,  95 => 49,  85 => 48,  76 => 41,  74 => 26,  66 => 25,  58 => 15,  53 => 6,  45 => 19,  36 => 15,  33 => 2,);
    }
}
