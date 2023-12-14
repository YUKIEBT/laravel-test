@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <!-- <div class="form__input--text"> -->
                <div class="form__input--name">
                    <input type="text" name="family-name" placeholder="例:山田" value="{{ old('family-name') }}" />
                    <input type="text" name="first-name" placeholder="例:太郎" value="{{ old('first-name') }}" />
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <input type="radio" id="gender-male" name="gender" value="男性" checked>
                    <label for="gender-male">男性</label>
                    <input type="radio" id="gender-female" name="gender" value="女性">
                    <label for="gender-female">女性</label>
                    <input type="radio" id="gender-other" name="gender" value="その他">
                    <label for="gender-other">その他</label>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel" name="1st-tel" placeholder="080" value="{{ old('1st-tel') }}" />-
                    <input type="tel" name="2nd-tel" placeholder="1234" value="{{ old('2nd-tel') }}" />-
                    <input type="tel" name="3rd-tel" placeholder="5678" value="{{ old('3rd-tel') }}" />
                </div>
                <div class="form__error">
                    @error('tel')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
                <!-- <span class="form__label--required">※</span> -->
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
                </div>
                <div class="form__error">
                    @error('building')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
            </div>
            <span class="form__label--required">※</span>
            <div class="form__group-content">
                <select class="form__input--category">
                    <option value="category">選択してください</option>
                    <option value="category1">商品のお届けについて</option>
                    <option value="category2">商品の交換について</option>
                    <option value="category3">商品トラブル</option>
                    <option value="category4">ショップへのお問い合わせ</option>
                    <option value="category5">その他</option>
                    <!-- <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" /> -->
                </select>
                <div class="form__error">
                    @error('building')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="content" placeholder="資料をいただきたいです">{{ old('content') }}</textarea>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection