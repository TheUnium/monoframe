<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title }}</title>
    <style>
        /* I copied this from my own personal website https://theunium.github.io */
        @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital@0;1&display=swap');

        * {
          font-family: "JetBrains Mono", monospace;
        }

        body {
          margin: 15px;
          min-height: calc(100vh - 30px);
          display: flex;
          align-items: center;
          justify-content: center;
          background-color: #000000;
          color: #fff7ad;
        }

        a {
          color: #ffffff;
          background-color: #0d002c;
          text-decoration: none;
        }

        a:hover {
          background-color: rgb(7, 6, 75);
        }

        .content {
          margin: 0;
          font-size: 0.95em;
        }

        .inline-block {
            color: #ffffff;
            background-color: #1f1f1f;
        }

        .pink {
            background-color: #680d3b;
            color: #ffffff;
        }

        .comment {
            color: #bababa;
            font-style: italic;
        }

        .php {
            color: #ffffff;
            background-color: #57245eaa;
        }

        .java {
            color: #ffffff;
            background-color: #b07219aa;
        }

        .cfamily {
            color: #ffffff;
            background-color: #004f8f;
        }

        .js {
            color: #ffffff;
            background-color: #b39800aa;
        }

        .lua {
            color: #ffffff;
            background-color: #0c00b3aa;
        }

        .node {
            color: #ffffff;
            background-color: #357500aa;
        }

        .python {
            color: #ffffff;
            background-color: #bb9900aa;
        }

        .asm {
            color: #ffffff;
            background-color: #56be00aa;
        }

        .htmlcss {
            color: #ffffff;
            background-color: #9e3f00aa;
        }

        .discord {
            color: #ffffff;
            background-color: #0f1183aa;
        }

        .youtube {
            color: #ffffff;
            background-color: #ff4444aa;
        }

        .team {
            color: #ffffff;
            background-color: #f52e2eaa;
        }
    </style>
</head>
<body class="text-white bg-black">
{% block content %}
{% endblock %}
<footer><p><span class=comment>
        # unium was here          PHP Version : {{ mono.php }}          MonoFrame Version : {{ mono.version }}
</span></p></footer>
</pre></body></html>