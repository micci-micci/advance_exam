<x-layout>
    <x-slot name="title">
        Contact page
    </x-slot>

    <div class="contact">
        <h1 class="contact-ttl">お問い合わせ</h1>

        <form method="post" action="{{ route('contacts.confirm')}}">
            @csrf

            <table class="contact-table">
                <tr>
                    <th class="contact-item">名前</th>
                    <td class="contact-body">
                        <span>{{ $contact->fullname }}</span>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">性別</th>
                    <td class="contact-body">
                        <span>{{ $contact->gender }}</span>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">メール</th>
                    <td class="contact-body">
                        <span>{{ $contact->email }}</span>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">郵便番号</th>
                    <td class="contact-body">
                        <span>{{ $contact->postcode }}</span>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">住所</th>
                    <td class="contact-body">
                        <span>{{ $contact->address }}</span>            
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">建物名</th>
                    <td class="contact-body">
                        <span>{{ $contact->building_name }}</span>
                    </td>
                </tr>        
                <tr>
                    <th class="contact-item">ご意見</th>
                    <td class="contact-body">
                        <span>{{ $contact->opinion }}</span>
                    </td>
                </tr>
            </table>
            <input type="submit" class="btn-conform" value="送信">
            <a href="{{ route('contacts.index') }}></a>
        </form>
    </div>
</x-layout>
