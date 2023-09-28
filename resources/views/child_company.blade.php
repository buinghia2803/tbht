<li>{{ $key . '.' . $child_company->name }}</li>
@if (count($child_company->companies) > 0)
    <ul>
        @foreach ($child_company->childrenCompanies as $keyChild => $childCompany)
            @include('child_company', [
                'child_company' => $childCompany,
                'key' => $key . '.' . $keyChild + 1
            ])
        @endforeach
    </ul>
@endif
