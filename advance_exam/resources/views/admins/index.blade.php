<x-layout>
    <x-slot name="title">
        Admin page
    </x-slot>

    <div class="admin">
        <h1 class="admin-ttl">管理システム</h1>
        <div class="container">
            <form method="get" action="{{ route('admins.search') }}">
                @csrf

                <table class="contact-table">
                    <tr>
                        <th class="admin-item">お名前</th>
                        <td class="admin-body">
                            <input type="text" name="fullname" class="form-text" value="{{ old('fullname') }}">
                        </td>
                        <th class="admin-item">性別</th>
                        <td class="admin-body">
                            <label class="contact-gender">
                                <input type="radio" name=gender value="2"  {{ old('gender','0') == '0' ? 'checked' : '' }} >
                                <span class="contact-gender-txt">全て</span>
                            </label>
                            <label class="contact-gender">
                                <input type="radio" name=gender value="0">
                                <span class="contact-gender-txt">男性</span>
                            </label>
                            <label class="contact-gender">
                                <input type="radio" name=gender value="1">
                                <span class="contact-gender-txt">女性</span>
                            </label>         
                        </td>
                    </tr>
                    <tr>
                        <th class="admin-item">登録日</th>
                        <td class="admin-body">
                            <input type="text" name="from" class="form-text" value="{{ old('from_date') }}">
                        </td>
                        <td>
                            <span> ~ </span>
                        </td>
                        <td class="admin-body">
                            <input type="text" name="until" class="form-text" value="{{ old('until_date') }}">
                        </td>
                    </tr>
                    <tr>
                        <th class="admin-item">メールアドレス</th>
                        <td class="admin-body">
                            <input type="text" name="email" class="form-text" value="{{ old('email') }}">
                        </td>
                    </tr>
                </table>
                <input type="submit" class="contact-btn" value="検索">
                <input type="submit" name="back" class="contact-txt" value="リセット">
            </form>
        </div>
        <table>
            @if(!empty($contacts))
            <tr>
                <th>ID</th>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>ご意見</th>
            </tr>

            <p>全{{ $contacts->total() }}件中
            {{ ($contacts->currentPage() -1) * $contacts->perPage() + 1}} - 
            {{ (($contacts->currentPage() -1) * $contacts->perPage() + 1) + (count($contacts) -1)  }}件</p>

            {{$contacts->appends(request()->query())->links()}}
            @foreach ($contacts as $contact)
            <tr>
                <td>
                    <p>{{ $contact->id }}</p>
                </td>
                <td>
                    <p>{{ $contact->fullname }}</p>
                </td>
                <td>
                    <p>{{ $contact->gender }}</p>
                </td>
                <td>
                    <p>{{ $contact->email }}</p>
                </td>
                <td>
                    <p>{{ $contact->opinion }}</p>
                </td>
                <form method="post" action="{{ route('admins.destroy') }}" id="delete_post">
                    @method('DELETE')
                    @csrf

                    <td>
                        <input class="admin-destroy-btn" type="submit" value="削除" />
                        <input type="hidden" name="id" value="{{ $contact->id }}">
                    </td>
                </form>
            </tr>
            @endforeach
        </table>

        @else
            <p>データがみつかりません</p>
        @endif
    </div>

    <script>
        'use strict'

        {
            document.getElementById('delete_post').addEventListener('submit', e => {
                e.preventDefault();

            if (!confirm('削除しますか？')) {
                return;
            }

            e.target.submit();
            })
        }
    </script>
</x-layout>
