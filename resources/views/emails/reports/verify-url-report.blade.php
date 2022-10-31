<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Verify Url Report</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="image.png">

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
            font-size: 18px;
        }
        th {
            font-size: 22px;
            font-weight: bold;
            color: white;
            background-color: black;
        }
        tr:nth-child(odd) {
            /*background-color: #222220;*/
            background-color: #fdd400;
            color: #0661ad;
            /*color: #F1C436;*/
        }
        tr:nth-child(even) {
            /*background-color: #191919;*/
            background-color: #0661ad;
            color: #fdd400;
            /*color: #80FF00;*/
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
    <h1 id="subject" style="text-align: center; font-size: 28px;">
        {{$subject}}
    </h1>
    <h3 id="greetings">
        {{$greeting}}
    </h3>
</section>

<!-- Main Content -->
<section id="content" class="w-boxed">
    <table class="w-full" style="border: 1px solid gray; outline: 2px solid slategray; border-collapse: separate">
        <tr style="border: 1px solid gray; outline: 1px solid lightgray;">
            <th>Manufacturer</th>
            <th>Name</th>
            <th>Url</th>
            <th>Status</th>
        </tr>

        @forelse($products['products'] as $product)
            @if($product['url_status'] == '200')
            <tr style="">
                <td style="text-transform: capitalize">{{$product['manufacturer']}}</td>
                <td style="text-transform: capitalize">{{$product['name']}}</td>
                <td>{{$product['url']}}</td>
                <td>{{$product['url_status']}}</td>
            </tr>
            @endif
        @empty
            <tr>
                <td>Sorry, No Product was found for Report</td>
            </tr>
        @endforelse
    </table>
</section>

<!-- Exceptions/Errors Table -->
<section id="exceptions" class="w-boxed" style="margin-top: 40px;">
    <table class="w-full" style="border: 1px solid gray; outline: 2px solid slategray; border-collapse: separate">
        <tr style="border: 1px solid gray; outline: 1px solid lightgray;">
            <th>Manufacturer</th>
            <th>Name</th>
            <th>Url</th>
            <th>Status</th>
        </tr>

        @forelse($exceptions as $exception)
            <tr style="">
                <td style="text-transform: capitalize">{{$exception['manufacturer']}}</td>
                <td style="text-transform: capitalize">{{$exception['name']}}</td>
                <td>{{$exception['url']}}</td>
                <td>{{$exception['url_status']}}</td>
            </tr>
        @empty
            <tr>
                <td>Sorry, No Product was found for Report</td>
            </tr>
        @endforelse
    </table>
</section>

<!-- Footer -->
<footer>

</footer>

</body>
</html>
