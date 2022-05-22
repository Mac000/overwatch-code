<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>A Basic HTML5 Template</title>
    <meta name="description" content="A simple HTML5 Template for new projects.">
    <meta name="author" content="SitePoint">

    <meta property="og:title" content="A Basic HTML5 Template">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
    <meta property="og:description" content="A simple HTML5 Template for new projects.">
    <meta property="og:image" content="image.png">

{{--    <link rel="icon" href="/favicon.ico">--}}
{{--    <link rel="icon" href="/favicon.svg" type="image/svg+xml">--}}
{{--    <link rel="apple-touch-icon" href="/apple-touch-icon.png">--}}

{{--    <link rel="stylesheet" href="css/styles.css?v=1.0">--}}

    <style>
        .w-boxed {
            width: 95%;
            margin: auto;
        }
        .w-full {
            width: 100%;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        tr:nth-child(odd) {
            background-color: #222220;
            color: #F1C436;
        }
        tr:nth-child(even) {
            background-color: #191919;
            color: #80FF00;
        }

        @media screen and (min-width: 767px) {
            .w-boxed {
                width: 80%;
            }
        }
    </style>
</head>

<body>
<!-- Mail Header -->
<header>

</header>

<!-- Mail opening section, contains Hello & HI=i -->
<section class="w-boxed" style="">
    <h1 id="subject">
        {{$subject}}
    </h1>
    <h3 id="greetings">
        {{$greeting}}
    </h3>
</section>

<!-- Main Content -->
<section id="content" class="w-boxed">
    <table class="w-full" style="border: 1px solid gray; outline: 2px solid slategray; border-collapse: collapse">
        <tr style="border: 1px solid gray; outline: 1px solid lightgray;">
            <th>Manufacturer</th>
            <th>Name</th>
            <th>Url</th>
            <th>Status</th>
        </tr>

        @forelse($products['products'] as $product)
            <tr style="">
                <td style="text-transform: capitalize">{{$product['manufacturer']}}</td>
                <td style="text-transform: capitalize">{{$product['name']}}</td>
                <td>{{$product['url']}}</td>
                <td>{{$product['url_status']}}</td>
            </tr>
        @empty
            <tr>
                <td>Sorry, No Product was found for Report</td>
            </tr>
        @endforelse
    </table>
</section>

<!-- Exceptions/Errors Table -->
<!-- Main Content -->
{{--<section id="exceptions" class="w-boxed">--}}
{{--    <h3>Exceptions/ Errors</h3>--}}
{{--    <table class="w-full" style="border: 1px solid gray; outline: 2px solid slategray; border-collapse: collapse">--}}
{{--        <tr style="border: 1px solid gray; outline: 1px solid lightgray;">--}}
{{--            <th>Manufacturer</th>--}}
{{--            <th>Name</th>--}}
{{--            <th>Url</th>--}}
{{--            <th>Status</th>--}}
{{--            <th>Exception</th>--}}
{{--        </tr>--}}

{{--        @forelse($products['products'] as $product)--}}
{{--            <tr style="">--}}
{{--                <td style="text-transform: capitalize">{{$product['manufacturer']}}</td>--}}
{{--                <td style="text-transform: capitalize">{{$product['name']}}</td>--}}
{{--                <td>{{$product['url']}}</td>--}}
{{--                <td>{{$product['url_status']}}</td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr>--}}
{{--                <td>Sorry, No Product was found for Report</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}
{{--    </table>--}}
{{--</section>--}}

<!-- Footer -->
<footer>

</footer>

{{--<script src="js/scripts.js"></script>--}}
</body>
</html>
