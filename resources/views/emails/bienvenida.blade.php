@component('mail::message')
# Bienvenido {{ $user->name }}

Gracias por Registrarte en MI Pagina de Publicaciones.

Ya pudes Comentar y Agregar nuevas Publicaciones.

Gracias,<br>
{{ config('app.name') }}
@endcomponent
