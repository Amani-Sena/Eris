<x-mail::message>
# {{ $budget }}

Um novo agendamento para {{ $date }} foi feito através da sua conta.

<x-mail::button :url={{ $url }}>
Visualizar agendamento
</x-mail::button>

Atenciosamente,<br>
{{ config('app.name') }}
</x-mail::message>
