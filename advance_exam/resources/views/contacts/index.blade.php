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
                        <input type="text" name="last_name" class="form-text">
                        <input type="text" name="first_name" class="form-text">
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">性別</th>
                    <td class="contact-body">
                        <label class="contact-gender">
                            <input type="radio" name=gender>
                            <span class="contact-gender-txt">男性</span>
                        </label>
                        <label class="contact-gender">
                            <input type="radio" name=gender>
                            <span class="contact-gender-txt">女性</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">メール</th>
                    <td class="contact-body">
                        <input type="email" name="mail" class="form-text">
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">郵便番号</th>
                    <td class="contact-body">
                        <input type="text" name="postcode" class="form-text">
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">住所</th>
                    <td class="contact-body">
                        <input type="text" name="address" class="form-text">
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">建物名</th>
                    <td class="contact-body">
                        <input type="text" name="building_name" class="form-text">
                    </td>
                </tr>        
                <tr>
                    <th class="contact-item">ご意見</th>
                    <td class="contact-body">
                        <textarea name="opinion" cols="30" rows="10"></textarea>
                    </td>
                </tr>
            </table>
            <input type="submit" class="btn-conform" value="確認">
        </form>
    </div>
</x-layout>
