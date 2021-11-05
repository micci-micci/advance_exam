<x-layout>
    <x-slot name="title">
        Contact page
    </x-slot>

    <div class="contact">
        <h1 class="contact-ttl">お問い合わせ</h1>

        <form method="get" action="{{ route('contacts.confirm')}}">
            @csrf

            <table class="contact-table">
                <tr>
                    <th class="contact-item">名前</th>
                    <td class="contact-body">
                        <input type="text" name="fullname" class="form-text" value="{{ old('fullname') }}">
                        {{-- <input type="text" name="first_name" class="form-text"> --}}
                        @error('fullname')
                            <div class="error">{{ $message }}</div>
                        @enderror
                        <p class="contact-example-txt">例）山田 太郎</p>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">性別</th>
                    <td class="contact-body">
                        <label class="contact-gender">
                            <input type="radio" name=gender value="0" id="default" {{ old('gender','0') == '0' ? 'checked' : '' }}>
                            <span class="contact-gender-txt">男性</span>
                        </label>
                        <label class="contact-gender">
                            <input type="radio" name=gender value="1" id="default" {{ old('gender','1') == '1' ? 'checked' : '' }}>
                            <span class="contact-gender-txt">女性</span>
                        </label>
                        @error('gender')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">メール</th>
                    <td class="contact-body">
                        <input type="email" name="email" class="form-text" value="{{ old('email') }}">
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                        <p class="contact-example-txt">例）text@example.com</p>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">郵便番号</th>
                    <td class="contact-body">
                        <input type="text" name="postcode" class="form-text" value="{{ old('postcode') }}" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
                        
                        @error('postcode')
                            <div class="error">{{ $message }}</div>
                        @enderror
                        <p class="contact-example-txt">例）123-4567</p>

                    </td>
                </tr>
                <tr>
                    <th class="contact-item">住所</th>
                    <td class="contact-body">
                        <input type="text" name="address" class="form-text" value="{{ old('address') }}">
                        @error('address')
                            <div class="error">{{ $message }}</div>
                        @enderror
                        <p class="contact-example-txt">例）東京都渋谷千駄ヶ谷1-2-3</p>
                    </td>
                </tr>
                <tr>
                    <th class="contact-item">建物名</th>
                    <td class="contact-body">
                        <input type="text" name="building_name" class="form-text" value="{{ old('building_name') }}">
                        <p class="contact-example-txt">例）千駄ヶ谷マンション101</p>
                    </td>
                </tr>        
                <tr>
                    <th class="contact-item">ご意見</th>
                    <td class="contact-body">
                        <textarea name="opinion" cols="30" rows="10" value="opinion">{{ old('opinion') }}</textarea>
                        @error('opinion')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
            </table>
            <input type="submit" class="contact-btn" value="確認">
        </form>
    </div>
</x-layout>
