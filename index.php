<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Mail form</title>
  <script src="js/script.js" type="module"></script>
</head>

<body>
  <div class="inquiry-form">
    <dl>
      <div>
        <dt>名前</dt>
        <dd><input type="text" name="name"></dd>
      </div>
      <div>
        <dt>メールアドレス</dt>
        <dd><input type="email" name="email"></dd>
      </div>
      <div>
        <dt>メールアドレス (確認)</dt>
        <dd><input type="email" name="email2"></dd>
      </div>
      <div>
        <dt>アンケート</dt>
        <dd>
          <ul>
            <li>
              <label>
                <input type="checkbox" name="enquete[]" value="A">
                <span>A</span>
              </label>
            </li>
            <li>
              <label>
                <input type="checkbox" name="enquete[]" value="B">
                <span>B</span>
              </label>
            </li>
            <li>
              <label>
                <input type="checkbox" name="enquete[]" value="C">
                <span>C</span>
              </label>
            </li>
            <li>
              <label>
                <input type="checkbox" name="enquete[]" value="D">
                <span>D</span>
              </label>
            </li>
          </ul>
        </dd>
      </div>
      <div>
        <dt>メッセージ</dt>
        <dd><textarea name="message"></textarea></dd>
      </div>
      <div>
        <dt></dt>
        <dd>
          <label>
            <input type="checkbox" name="agreement" value="1">
            <span>同意する</span>
          </label>
        </dd>
      </div>
    </dl>

    <div class="cf-turnstile"></div>

    <button type="submit" class="validate-button">バリデーション</button>
    <button type="submit" class="send-button">送信</button>
  </div>

  <div class="results">
    <pre><code class="hljs json"></code></pre>
  </div>
</body>
</html>
