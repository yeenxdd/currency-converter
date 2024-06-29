<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
{{--    @vite('resources/css/app.css')--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl mb-5">Currency Converter</h1>
        <form id="conversion-form" class="bg-white p-6 rounded shadow-md">
            <div class="mb-6">
                <label for="amount" class="block text-gray-700">Amount:</label>
                <input type="number" id="amount" name="amount" class="border border-gray-300 p-2 rounded w-full" required step="any">
            </div>
            <div class="mb-4">
                <label for="rate" class="block text-gray-700">Conversion Rate:</label>
                <input type="number" id="rate" name="rate" class="border border-gray-300 p-2 rounded w-full" required step="any" value="{{$latestRate->rate ??''}}">
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Convert</button>
        </form>
        <div id="result" class="mt-6"></div>
    </div>

<script>
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        }
    });

    $('#conversion-form').on('submit', function (e){
        e.preventDefault();

        $.ajax({
            url:'/convert',
            method:'POST',
            data:$(this).serialize(),
            success:function (response){
                $('#result').html('Converted Amount: '+response.convertedAmount);
            },
            error:function (xhr){
                alert('An error occurred. Please try again. ');
            }
        });
    });
</script>
</body>
</html>
