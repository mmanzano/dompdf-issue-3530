<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style media="all">
        .aspect-w-1,.aspect-w-2,.aspect-w-3,.aspect-w-4,.aspect-w-5,.aspect-w-6,.aspect-w-7,.aspect-w-8,.aspect-w-9,.aspect-w-10,.aspect-w-11,.aspect-w-12,.aspect-w-13,.aspect-w-14,.aspect-w-15,.aspect-w-16,.aspect-w-1\.41
        {
            position:relative;
            padding-bottom:calc(var(--tw-aspect-h) / var(--tw-aspect-w) * 100%)
        }
        .aspect-w-1>*,.aspect-w-2>*,.aspect-w-3>*,.aspect-w-4>*,.aspect-w-5>*,.aspect-w-6>*,.aspect-w-7>*,.aspect-w-8>*,.aspect-w-9>*,.aspect-w-10>*,.aspect-w-11>*,.aspect-w-12>*,.aspect-w-13>*,.aspect-w-14>*,.aspect-w-15>*,.aspect-w-16>*,.aspect-w-1\.41>*
        {
            position:absolute;
            height:100%;
            width:100%;
            top:0;
            right:0;
            bottom:0;
            left:0
        }
        .aspect-w-1
        {
            --tw-aspect-w: 1
        }

        .aspect-w-4
        {
            --tw-aspect-w: 4
        }

        .aspect-w-16
        {
            --tw-aspect-w: 16
        }

        .aspect-w-1\.41
        {
            --tw-aspect-w: 1.41
        }

        .aspect-h-1
        {
            --tw-aspect-h: 1
        }

        .aspect-h-3
        {
            --tw-aspect-h: 3
        }

        .aspect-h-9
        {
            --tw-aspect-h: 9
        }

        .aspect-h-1\.41
        {
            --tw-aspect-h: 1.41
        }
        body {
            font-family: sans-serif;
        }
        h1 {
            font-family: sans-serif;
            font-weight: bold;
        }
        h2 {
            font-family: sans-serif;
            font-weight: bold;
        }
    </style>
    <title>Demo issue 3530 DOMPDF</title>
</head>
<body class="relative p-0 m-0">
<a class="fixed text-sm bottom-0 left-0" href="https://example.com">
    https://example.com
</a>
<main>
    <img src="{{ resource_path('/flower.jpg') }}" class="h-5" alt="Example">
    <div class="py-4">
        <h1 class="mb-2 text-center text-3xl">
           Flowers DomPDF
        </h1>
        <h3 class="text-center text-lg">The flowers are beautiful</h3>
    </div>

    <div class="mb-5">
        <h2 class="text-lg breaking-class aspect-w-1.41">They have petals</h2>
        <p class="text-sm whitespace-pre-line">
            The petals are usually colorful.
        </p>
    </div>
</main>
</body>
</html>
