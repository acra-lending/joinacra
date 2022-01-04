@component('mail::message')

# New Potential Recruit Information From joinacralending.com
<hr/>

<strong>First Name:</strong> {{ $mail['first_name'] }}<br/>
<strong>Last Name:</strong> {{ $mail['last_name'] }}<br/>
<strong>Phone:</strong> {{ $mail['phone_number'] }}<br/> 
<strong>Email:</strong> {{ $mail['email'] }}<br/>
<strong>Referred by:</strong> {{ $mail['referral'] }}<br/> 

<strong>Position of interest:</strong> {{ $mail['interested_in'] }}<br/>

<hr/>

<br/>
~<em>{{ 'Acra Webmaster' }}</em>
@endcomponent
