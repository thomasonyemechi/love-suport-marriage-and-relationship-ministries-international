@component('mail::message')
<p>{{__('Hello, '. $user->name)}}</p>
<br>
@component('mail::button', ['url' => '/realtionship/'.$item->id])
{{__('Click to Download Your Purchased Electronic item')}}
@endcomponent

{{__('Thanks,')}}<br>
{{ config('app.name') }}
@endcomponent
