@component('mail::message')
# Pendaftaran Siswa

Selamat anda telah terdaftar di SMA 1 Kingsarmy

@component('mail::button', ['url' => 'http://rolloic.com'])
Klik di sini
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
