<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Jeinkins用テスト</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body id="mainArea">
    <h1>テーブル内容出力</h1>
    <div class="eventSelect">
        <select name="example" required>
            <option value="">サービスを選択してください▼</option>
            <option>選択肢のサンプル1</option>
            <option>選択肢のサンプル2</option>
            <option>選択肢のサンプル3</option>
            <option>選択肢のサンプル4</option>
            <option>選択肢のサンプル5</option>
        </select>
        <input type="submit" name="search" value="検索">
    </div>
    <div class="logArea">
        <table class="logTable" border="5">
            <?php 
                for ($count = 0; $count < 10; $count++){
            ?>       
            <tr>
                <th>フィールド名</th>
            </tr>
            <tr>
                <th>値</th>
            </tr>
            
            <?php
                }
            ?>   
        </table>
    </div>
</body>
</html>
