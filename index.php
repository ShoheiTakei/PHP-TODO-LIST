<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP Todo-List</title>
    <link rel="stylesheet" href="style/css/style.css">
</head>
<body>
    <div class="top_section">
        <h1>TodoList</h1>
    </div>
    <div class="main_section">
        <div class="add_todo_container">
            <input type="text">
            <input type="submit">
            
        </div>

        <div class="todo_container">
            <input type="checkbox">
            <p>PHPを勉強する</p>
        </div>

        <?php echo "echoで表示させてるよ" ?>
    </div>
</body>
</html>