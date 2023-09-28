<style>
    ul {
        list-style: none;
    }
    a {
        text-decoration: none;
    }
</style>

<ul>
    @foreach ($dataCompanyTree as $item)
        <li>
            <a href="{{ route('userOfCompany', [ 'company_id' => $item['id'] ]) }}">
                @php
                    echo str_repeat('&emsp;' , $item['level']) . $item['name'];
                @endphp
            </a>
        </li>
    @endforeach
</ul>

