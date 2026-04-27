@component('mail::message')
# Nouveau message de votre portfolio

**Nom :** {{ $data['name'] }}
**Email :** {{ $data['email'] }}
@if($data['subject'])
**Sujet :** {{ $data['subject'] }}
@endif

---

{{ $data['message'] }}

---
*Message reçu depuis votre portfolio — boubacar112*
@endcomponent