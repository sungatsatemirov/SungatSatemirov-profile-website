Hello {{ $mail->receiver }}.
This is demo email for testing purposes!

Demo object values:

Demo One: {{ $mail->demo_one }}
Demo Two: {{ $mail->demo_two }}

Values passed by With method:

testVarOne: {{ $testVarOne }}
testVarTwo: {{ $testVarTwo }}

Thank you,
{{ $mail->sender }} 