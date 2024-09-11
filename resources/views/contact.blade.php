
<x-layouts.app>

    @foreach ($list as $list)
        <p>This is number {{ $list }}</p>
    @endforeach


    </x-layouts.app>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <H1>Contact</H1>
        <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op info@smart-solutions.nl. We proberen zo snel mogelijk te reageren!  </p>
        <form>
            <label for="naam">Naam:</label><br>
            <input type="text" id="naam" name="naam"><br><br>

            <label for="email">E-mailadres:</label><br>
            <input type="email" id="email" name="email"><br><br>

            <label for="bericht">Bericht:</label><br>
            <textarea id="bericht" name="bericht"></textarea><br><br>

            <input type="submit" value="Verzenden">
        </form>
    </body>
    </html>

