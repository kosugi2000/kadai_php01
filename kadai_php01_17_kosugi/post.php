<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
</head>

<body>
    <form action="write.php" method="post">
        　お名前: <input type="text" name="name"> 
        　EMAIL: <input type="text" name="mail">
        　年齢：<input type="text" name="age">
        　電話番号：<input type="text" name="tel">
        　満足度：<select name="exp">
         <option value="無回答"></option>
         <option value="期待以上">期待以上</option>
         <option value="普通">普通</option>
         <option value="要改善">要改善</option>
         </select>
        <input type="submit" value="送信">
    </form>
</body>

</html>
