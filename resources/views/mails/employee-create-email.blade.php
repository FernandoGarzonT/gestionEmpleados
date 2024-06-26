<x-mail::message>
# Email for accept

<x-mail::panel>Employee created, it need to be accept.</x-mail::panel>

<x-mail::button :url="route('Employees.show', $employee)" color="success">
Click here, for accept
</x-mail::button>

</x-mail::message>


