<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Helper | @stack('_title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="Վեբ Կայք | Դասեր | Հարցաշարեր">
    <meta property="og:image" content="https://martinelizbaryan.am/img/logo_white_rem.png" />

    <link rel="shortcut icon" type="image/png" href="/img/logo_white_rem.png"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">


    <link href="/css/global/main.css" rel="stylesheet">
    @stack('_styles')
</head>
<body>
{{--    @include("globals.cursor")--}}

    @include("globals.menu_desktop")

    <main>
        @yield('content')
    </main>








    {{--@include("global.footer")--}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{--    <script src="/js/plugins/snow.js"></script>--}}
{{--    <script>--}}
{{--        function waxon_tm_cursor(){--}}

{{--            var myCursor	= jQuery('.mouse-cursor');--}}

{{--            if(myCursor.length){--}}
{{--                if ($("body")) {--}}
{{--                    const e = document.querySelector(".cursor-inner"),--}}
{{--                        t = document.querySelector(".cursor-outer");--}}
{{--                    let n, i = 0,--}}
{{--                        o = !1;--}}
{{--                    window.onmousemove = function (s) {--}}
{{--                        o || (t.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)"), e.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)", n = s.clientY, i = s.clientX--}}
{{--                    }, $("body").on("mouseenter", "a, .cursor-pointer", function () {--}}
{{--                        e.classList.add("cursor-hover"), t.classList.add("cursor-hover")--}}
{{--                    }), $("body").on("mouseleave", "a, .cursor-pointer", function () {--}}
{{--                        $(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove("cursor-hover"), t.classList.remove("cursor-hover"))--}}
{{--                    }), e.style.visibility = "visible", t.style.visibility = "visible"--}}
{{--                }--}}
{{--            }--}}
{{--        };--}}
{{--        waxon_tm_cursor();--}}
{{--    </script>--}}
    <script>
        $(document).ready(function () {
            $(".__bar").click(function(){
                $("header nav").css({
                    right: 0
                })
                $("body").css({
                    overflow: "hidden"
                })
            })
            $(".close-menu").click(function(){
                $("header nav").css({
                    right: "-280px"
                })
                $("body").css({
                    overflow: "auto"
                })
            })
        })
    </script>
@stack('_js')
</body>
</html>
