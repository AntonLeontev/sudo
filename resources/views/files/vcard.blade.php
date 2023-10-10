@php
	$name = 'name_' . app()->getLocale();
	$surname = 'surname_' . app()->getLocale();
	$position = 'position_' . app()->getLocale();
	$address = 'address_' . app()->getLocale();
@endphp
BEGIN:VCARD
VERSION:3.0
FN;CHARSET=UTF-8:{{ $employee->{$name} }} {{ $employee->{$surname} }}
N;CHARSET=UTF-8:{{ $employee->{$surname} }};{{ $employee->{$name} }};;;
@if ($employee->email)
EMAIL;CHARSET=UTF-8;type=HOME,INTERNET:{{ $employee->email }}
@endif
@if ($employee->phone)
TEL;TYPE=CELL:+{{ preg_replace('~ |-~', '', $employee->phone) }}
@endif
@if ($employee->{$position})
TITLE;CHARSET=UTF-8:{{ $employee->{$position} }}
@endif
@if (contacts()->company_name)
ORG;CHARSET=UTF-8:{{ contacts()->company_name }}
@endif
@if (contacts()->website)
URL;CHARSET=UTF-8:{{ contacts()->website }}
@endif
REV:{{ now()->toISOString() }}
END:VCARD
