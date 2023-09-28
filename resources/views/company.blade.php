<style>
    ul {
        list-style: none;
    }
    a {
        text-decoration: none;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

{{-- <ul>
    @foreach ($dataCompanyTree as $item)
        <li>
            <a href="{{ route('userOfCompany', [ 'company_id' => $item['id'] ]) }}">
                @php
                    echo str_repeat('&emsp;' , $item['level']) . $item['name'];
                @endphp
            </a>
        </li>
    @endforeach
</ul> --}}

<ul>
    @foreach ($companies as $key => $company)
        <li>{{ $key + 1 . '.' . $company->name }}</li>
        <ul id="sortable">
            @foreach ($company->childrenCompanies as $keyChild => $childCompany)
                <div>
                    @include('child_company', [
                        'child_company' => $childCompany,
                        'key' => $key+1 . '.' . $keyChild + 1
                    ])
                </div>
            @endforeach
        </ul>
    @endforeach
</ul>

<script>
    $("#sortable").sortable();
</script>

