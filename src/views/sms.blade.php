<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS</title>
    <style>
        .content{width: 600px; margin: 0 auto; background: rgba(33, 140, 255, 0.64); padding: 5px; text-align: center;}
        input, textarea{ width: 98%}
        input{ height: 30px; padding: 5px;}
        textarea{padding: 5px;}
    </style>
</head>

<body>

<div class="content">
    <h2 style="color: white; text-decoration: underline; font-weight: bolder;">PONDIT SMS Sender</h2>
    @isset ($message)
        <div style="background: #33b85e; color: white;">
            <strong>Well done ! </strong> {{ $message }}.
        </div>
    @endisset
    <form method="post" action="{{ route('sms') }}">
        @csrf
        <fieldset>
            <legend>Sms Sender Form</legend>
            <textarea name="to" id="" cols="77" rows="3" placeholder="Enter To Numbers"></textarea><br><br>
            <textarea name="message" id="" cols="77" rows="5" placeholder="Enter Message"></textarea><br>
        </fieldset>
        <button type="submit" style="margin-top: 5px; background: #126148; color: white; height: 50px; padding: 5px;  width: 120px; margin-right: 0px;">Send</button>
    </form>
</div>

</body>
</html>
